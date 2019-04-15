<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const GET_LIST_CATEGORIES_API          = '/api/category';
    const GET_PRODUCT_API                  = '/api/product';
    const GET_FEATURE_API                  = '/api/feature';
    const GET_LIST_TRANSPORTER_API         = '/api/shipping-fee';
    const GET_COLLABORATOR_BY_WEBSITE_NAME = '/api/collaborator/get-collaborator-by-website-name';
    protected $data  = [];
    protected $client;
    protected $cart;
    protected $ipBot = [
        //facebook
        '31.13.97.0',
        '31.13.99.0',
        '31.13.100.0',
        '66.220.144.0',
        '69.63.189.0',
        '69.63.190.0',
        '69.171.224.0',
        '69.171.240.0',
        '69.171.248.0',
        '173.252.73.0',
        '173.252.74.0',
        '173.252.77.0',
        '173.252.100.0',
        '173.252.104.0',
        '173.252.112.0',
        '2a03:2880:10::',
        '2a03:2880:11::',
        '2a03:2880:20::',
        '2a03:2880:1010::',
        '2a03:2880:1020::',
        '2a03:2880:2020::',
        '2a03:2880:2050::',
        '2a03:2880:2040::',
        '2a03:2880:2110::',
        '2a03:2880:2130::',
        '2a03:2880:3010::',
        '2a03:2880:3020::',
        //google
        '203.208.60.0',
        '66.249.64.0',
        '72.14.199.0',
        '209.85.238.0',
        '66.249.90.0',
        '66.249.91.0',
        '66.249.92.0',
        '2001:4860:4801:0::',
        '2001:4860:4801:1::',
        '2001:4860:4801:2::',
        '2001:4860:4801:3::',
        '2001:4860:4801:4::',
        '2001:4860:4801:5::',
        '2001:4860:4801:6::',
        '2001:4860:4801:7::',
        '2001:4860:4801:8::',
        '2001:4860:4801:9::',
        '2001:4860:4801:21::',
        '2001:4860:4801:31::',
        '2001:4860:4801:41::',
        '2001:4860:4801:50::',
        '2001:4860:4801:61::',
        '2001:4860:4801:a::',
        '2001:4860:4801:b::',
        '2001:4860:4801:c::',
        '2001:4860:4801:d::',
        '2001:4860:4801:e::',
        '2001:4860:4801:f::',
        '2001:4860:4801:2001::',
        '2001:4860:4801:2002::'
    ];
    const SYSTEM_DOMAIN           = ['my.nhanhre.vn', 'nhanhre.vn', 'nhanhre.net', 'ctvshop.vn', 'sansieusoc.vn',  'demo.nhanhre.vn', 'ncc.nhanhre.vn'];
    public function __construct()
    {
        $this->data['moduleName']     = 'outside';
        $this->client                 = app('client');
        $this->data['categories']     = $this->getCategories();
        $this->data['giftCategories'] = $this->getGiftCategories();

        $this->data['inforMenus']   = $this->getInforMenu();
        $this->data['inforLogo']    = $this->getInforlogo();
        $this->data['ggTagManager'] = $this->getGGTagManager();
        $sliderModel                = new SliderModel();
        $this->data['sliders']      = $sliderModel->getSliderShow();

        $imgHomeModel                  = new ImageHomeModel();
        $this->data['homeImages']      = $imgHomeModel->getImageHomeShow();
        $this->data['title']           = '';
        $this->data['metaKeyword']     = '';
        $this->data['metaDescription'] = '';
        $this->data['linkCanonical']   = '';
        $this->data['user_ip_isoCode'] = '';
        $this->data['urlScheme']       = 'http';
        $provinceModel                 = new ProvinceModel();
        $this->data['listProvince']    = $provinceModel->getAllProvince();

        $this->data['categoriesCollaborator'] = $this->getCategoriesCollaborator();


        $this->middleware(function ($request, $next) {
            $domainName = $request->getHttpHost();
            if ($domainName == 'ncc.nhanhre.vn') {
                return redirect(route('getDashBoardAgency'));
            }
            if (!in_array($domainName, self::SYSTEM_DOMAIN) && $domainName != null) {
                $checkDomain = $this->getCollaboratorByDomainName($domainName);
                if (!$checkDomain['status']) {
                    header("Location: https://nhanhre.vn");
                    die();
                }
                $user        = [
                    'user_name'     => ($checkDomain['info']['user_name'] != null) ? $checkDomain['info']['user_name'] : '',
                    'user_id'       => ($checkDomain['info']['id'] != null) ? $checkDomain['info']['id'] : '',
                    'code_referrer' => ($checkDomain['info']['code_referrer'] != null) ? $checkDomain['info']['code_referrer'] : '',
                    'full_name'     => ($checkDomain['info']['full_name'] != null) ? $checkDomain['info']['full_name'] : '',
                    'age'           => ($checkDomain['info']['age'] != null) ? $checkDomain['info']['age'] : '',
                    'address'       => ($checkDomain['info']['address'] != null) ? $checkDomain['info']['address'] : ''
                ];
                $request->session()->put('user_phone_from_sub_domain', $user);
                $model = new ShopUserWebsiteInfoModel();
                $info = $model->getInfo(['website' => $domainName]);
                if (isset($info)) {
                    $this->data['user_website_info_footer'] = $info;
                }
            }
            $this->cart                 = session()->has('order') ? session()->get('order') : [];
            $this->data['totalProduct'] = count($this->cart);
            $user_ip                    = null;
            if (env("APP_ENV") == 'local') {
                $this->data['user_ip_isoCode'] = 'VN';
            } else {
                if ($request->server("HTTP_X_FORWARDED_FOR")) {
                    $user_ip = $request->server("HTTP_X_FORWARDED_FOR");
                } else {
                    $user_ip = $request->ip();
                }
                try {
                    $reader = new Reader(__DIR__ . '/GeoLite2-Country/GeoLite2-Country.mmdb');
                    $record = $reader->country($user_ip);
                    if ($record->country->isoCode == null || $record->country->isoCode == '') {
                        $this->data['user_ip_isoCode'] = 'US';
                    } else {
                        $this->data['user_ip_isoCode'] = $record->country->isoCode;
                    }
                } catch (AddressNotFoundException $e) {
                    $this->data['user_ip_isoCode'] = 'VN';
                }

                if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
                    $this->data['urlScheme'] = 'https';
                }
            }
            if ($request->session()->get('avatar')) {
                $this->data['avatar'] = $request->session()->get('avatar');
            }
            if ($request->session()->get('is_login')) {
                $this->data['is_login'] = $request->session()->get('is_login');
            }
            if ($request->session()->has('user_phone')) {
                $this->data['user_phone'] = $request->session()->get('user_phone');
                $this->data['user_id']    = $request->session()->get('user_phone')['user_id'];
            }
            if ($request->session()->has('click_ad')) {
                $this->data['click_ad'] = $request->session()->get('click_ad');
            }
            if ($request->session()->has('share_facebook_suggest')) {
                $this->data['share_facebook_suggest'] = true;
                $request->session()->forget('share_facebook_suggest');
            }
            if ($request->session()->has('share_facebook_info')) {
                $this->data['share_facebook_info'] = $request->session()->get('share_facebook_info');
                $request->session()->forget('share_facebook_info');
            }
            if ($request->session()->has('show_pop_up_fb_chat')) {
                $this->data['show_pop_up_fb_chat'] = $request->session()->get('show_pop_up_fb_chat');
                $request->session()->forget('show_pop_up_fb_chat');
            }
            if ($request->session()->has('show_pop_up')) {
                $this->data['show_pop_up'] = $request->session()->get('show_pop_up');
                $request->session()->forget('show_pop_up');
            }
            if ($request->session()->has('show_pop_up_dk')) {
                $this->data['show_pop_up_dk'] = $request->session()->get('show_pop_up_dk');
                $request->session()->forget('show_pop_up_dk');
            }
            if ($request->session()->has('evaluation_receive_gift')) {
                $this->data['evaluation_receive_gift'] = $request->session()->get('evaluation_receive_gift');
            }
            if ($request->session()->has('input_voucher_success')) {
                $this->data['input_voucher_success'] = $request->session()->get('input_voucher_success');
            }
            if ($request->session()->has('show_only_gift_and_shoes')) {
                $this->data['show_only_gift_and_shoes'] = $request->session()->get('show_only_gift_and_shoes');
            }
            if ($request->session()->has('start_link_info')) {
                $this->data['start_link_info']   = $request->session()->get('start_link_info');
                $this->data['link_sort_product'] = $this->data['start_link_info']['domain'] . '-' . str_slug($this->data['start_link_info']['url_start'], '');
                $this->data['giftCategories']    = $this->getGiftCategoriesByLink($this->data['link_sort_product']);
            }
            if ($request->cookie('province_id') != null) {
                $provinceModel              = new ProvinceModel();
                $this->data['province_id']  = $request->cookie('province_id');
                $this->data['listDistrict'] = $provinceModel->getDistrictByProvinceId($request->cookie('province_id'));
                if ($request->cookie('district_id') != null) {
                    $this->data['district_id'] = $request->cookie('district_id');
                }
            }
            if (!$request->session()->has('start_domain_visit_web')) {
                $request->session()->put('start_domain_visit_web', URL::previous());
            }

            if (!$request->session()->has('start_url_register_collaborator')) {
                $request->session()->put('start_url_register_collaborator', $request->getHttpHost() . '/' . $request->path());
            }
            if (!$request->session()->has('start_url_register_exchange')) {
                $request->session()->put('start_url_register_exchange', $request->getHttpHost() . '/' . $request->path());
            }
            if ($request->session()->has('show_download_image_social')) {
                $this->data['show_download_image_social'] = $request->session()->get('show_download_image_social');
            }
            if ($request->session()->has('register_exchange')) {
                $this->data['register_exchange'] = $request->session()->get('register_exchange');
            }
            if ($request->session()->has('user_phone_from_sub_domain')) {
                $this->data['user_phone_from_sub_domain'] = $request->session()->get('user_phone_from_sub_domain');
            }
            if ($request->session()->has('redirect_after_login')) {
                $this->data['redirect_after_login'] = $request->session()->get('redirect_after_login');
            }
            ServerVisitModel::updateVisitAmount($request->server('SERVER_ADDR'));
            return $next($request);
        });
    }

    public function getCategories()
    {
        $redis      = Redis::connection();
        $key        = $redis->KEYS('categories*');
        $categories = null;
        if ($key != null) {
            $categories = json_decode($redis->GET($key[0]), true);
        }
        if ($categories == null) {
            $response = $this->client->get(self::GET_LIST_CATEGORIES_API);
            if ($response->getStatusCode() == 200) {
                $categories = json_decode((string)$response->getBody(), true);
                $redis      = Redis::connection();
                $redis->SET("categories", json_encode($categories));
                $redis->expire('categories', 1800);
                return $categories;
            }
        }
        return $categories;
    }
    public function getCollaboratorByDomainName($domainName)
    {
        $response = $this->client->get(self::GET_COLLABORATOR_BY_WEBSITE_NAME, [
            'query' => ['website' => $domainName]
        ]);
        if ($response->getStatusCode() == 200) {
            return json_decode((string)$response->getBody(), true);
        }
        return [];
    }

    public function getGiftCategories()
    {
        $redis      = Redis::connection();
        $key        = $redis->KEYS(request()->getHttpHost() . ':gift-categories*');
        $categories = null;
        if ($key != null) {
            $categories = json_decode($redis->GET($key[0]), true);
        }
        //        dd($categories);
        return $categories;
    }

    public function getGiftCategoriesByLink($link)
    {
        $redis      = Redis::connection();
        $key        = $redis->KEYS($link . ':gift-categories*');
        $categories = null;
        if ($key != null) {
            $categories = json_decode($redis->GET($key[0]), true);
        }
        return $categories;
    }

    public function getInforMenu()
    {
        $inforModel = new InforModel();
        return $inforModel->getInforMenu();
    }

    public function getInforlogo()
    {
        $inforlogoModel = new InformationModel();
        return $inforlogoModel->getInfor();
    }

    public function getGGTagManager()
    {
        $seoTagModel = new SeoTagModel();
        $seo         = $seoTagModel->getSeoTag('google');
        if (count($seo) > 0) {
            $content = $seo['content_tag'];
        } else {
            $content = file_get_contents('gg_tag_manager.txt', true);
        }
        $script           = explode('<!-- End Google Tag Manager -->', $content)[0] . '<!-- End Google Tag Manager -->';
        $data['script']   = $script;
        $noscript         = '<!-- Google Tag Manager (noscript) -->' . explode('<!-- Google Tag Manager (noscript) -->', $content)[1];
        $data['noscript'] = $noscript;

        return $data;
    }

    public function getCategoriesCollaborator()
    {
        $model = new CollaboratorCategoryModel();
        $result = $model->getAll()[0]['children'];
        foreach ($result as $k1 =>  $cate) {
            if ($cate['alias'] == 'chuong-trinh-ctv') {
                foreach ($cate['children'] as $k2 => $cateChild) {
                    if ($cateChild['alias'] == 'gioi-thieu' || $cateChild['alias'] == 'cac-hinh-thuc-ctv') {
                        unset($result[$k1]['children'][$k2]);
                    }
                }
            }
        }
        return $result;
    }
}
