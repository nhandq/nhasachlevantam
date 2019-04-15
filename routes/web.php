<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'ForntPage'], function () {

    // on progess
    Route::get('/', 'HomeController@showHome')->name('home');
    Route::get('/home', 'HomeController@showHomeInChat')->name('home-in-chat');
    Route::get('/lien-he', 'InformationController@showContact')->name('lien-he');
    Route::get('/gioi-thieu', 'InformationController@showInfor')->name('gioi-thieu');

    //future
    Route::get('/video-huong-dan', 'VideoTutorialsController@showVideoTutorials')->name('showVideoTutorials');
    Route::post('/send-message-to-phone-registered', 'InformationController@reSendSmsPasswordForPhoneRegistered')->name('reSendSmsPasswordForPhoneRegistered');
    Route::post('/changeStatusOrderByCTV', 'LoginController@changeStatusOrderByCTV')->name('changeStatusOrderByCTV');
    Route::post('/register-exchange', 'InformationController@registerExchange')->name('registerExchange');
    Route::get('/dang-ky-doi-giay/{alias}', 'InformationController@showRegisterExchange')->name('showRegisterExchange');
    Route::get('/show-download-image-social', 'HomeController@showDownloadImage')->name('showDownloadImage');
    Route::get('/download-image-by-cate-and-price', 'ProductController@downloadProductImagesByCateAndPrice')->name('downloadProductImagesByCateAndPrice');
    Route::post('/download-image-by-cate-and-price', 'ProductController@postDownloadProductImagesByCateAndPrice')->name('postDownloadProductImagesByCateAndPrice');
    Route::get('/chuong-trinh-cong-tac-vien/{alias}', 'InformationController@showInfoCollaboratorProgram')->name('showInfoCollaboratorProgram');
    Route::get('/download-product-images/{productCode}', 'ProductController@downloadProductImages')->name('downloadProductImages');
    Route::post('/thong-ke-share', 'VoucherController@updateShareReport')->name('updateShareReport');
    Route::get('/cam-on-1', 'ThankfulController@thankful')->name('thankful');
    Route::get('/cam-on-2', 'ThankfulController@thankful2')->name('thankful2');
    Route::get('/cam-on-3', 'ThankfulController@thankful3')->name('thankful3');
    Route::get('/cam-on-4', 'ThankfulController@thankful4')->name('thankful4');
    Route::get('/check-time-open-link', 'HomeController@checkTime')->name('checkTimeOpenLink');
    Route::get('/check-evaluation-gift', 'VoucherController@checkEvaluationGift')->name('checkEvaluationGift');
    Route::post('/check-voucher-of-link', 'VoucherController@checkVoucherOfLink')->name('checkVoucherOfLink');
    Route::post('/change-gift', 'OrderController@changeGift')->name('changeGift');
    Route::get('/check-work-time', 'HomeController@checkWorkTime')->name('checkWorkTime');
    Route::get('/facebook_catalog_feed/products.xml', 'ProductController@showProductXmlFile')->name('showProductXmlFile');
    Route::get('/export-google-products-feed', 'ProductController@exportGoogleProductFeed')->name('exportGoogleProductFeed');
    Route::get('/quang-cao/{str}/{url}', 'VoucherController@showURLStartEnterVoucher')->name('quang-cao');
    Route::get('/quang-cao/{str}', 'VoucherController@showURLStartEnterVoucher1')->name('quang-cao-1');
    Route::get('/tang-qua/{str}', 'VoucherController@showLinkGiftOfLink')->name('tang-qua');
    Route::post('/send-number-to-buy', 'VoucherController@sendPhoneNumberToBuy')->name('sendPhoneNumberToBuy');
    Route::post('/send-evaluation-receive-gift', 'VoucherController@sendEvaluationReceiveGift')->name('sendEvaluationReceiveGift');
    Route::post('/cap-nhat-session', 'OrderController@updateProductInSession')->name('updateProductInSession');
    Route::get('/huy-don-hang', 'OrderController@cancelOrder')->name('cancelOrder');
    Route::get('/gop-don-hang', 'OrderController@showGroupOrder')->name('showGroupOrder');
    Route::post('/gop-don-hang', 'OrderController@postGroupOrder')->name('postGroupOrder');
    Route::get('/xac-nhan-don-hang', 'OrderController@showConfirmOrder')->name('showConfirmOrder');
    Route::post('/cap-nhat-don-hang-xac-nhan', 'OrderController@postOrderInfoConfirm')->name('postOrderInfoConfirm');
    Route::post('/update-order-info', 'OrderController@updateOrderInfo')->name('updateOrderInfo');
    Route::post('/gui-ma-xac-nhan', 'OrderController@postCodeVerify')->name('postCodeVerify');
    Route::post('/gui-lai-ma-xac-nhan', 'OrderController@postReCodeVerify')->name('postReCodeVerify');
    Route::post('/xac-nhan-don-hang', 'OrderController@postConfirmOrder')->name('postConfirmOrder');
    Route::get('/danh-gia', 'EvaluationController@showEvaluationPage')->name('danh-gia');
    Route::post('/addEvaluation', 'EvaluationController@addEvaluation')->name('addEvaluation');
    Route::post('/getPageEvaluation', 'EvaluationController@getPageEvaluation')->name('getPageEvaluation');
    Route::get('/home-gift', 'HomeController@showHomeGift')->name('showHomeGift');
    Route::get('/home-live-stream-now', 'HomeController@showHomeLiveStreamNow')->name('showHomeLiveStreamNow');
    Route::get('/home-live-stream-not-yet', 'HomeController@showHomeLiveStreamNotYet')->name('showHomeLiveStreamNotYet');
    Route::get('/bao-hanh-doi-tra', 'InformationController@showWarranty')->name('bao-hanh-doi-tra');
    Route::get('/collaborators', 'InformationController@showCollaborators')->name('showCollaborators');
    Route::get('/collaborators-2', 'InformationController@showCollaborators')->name('showCollaborators2');
    Route::post('/register-collaborators', 'InformationController@registerCollaborators')->name('registerCollaborators');
    Route::post('/check-code-collaborators', 'LoginController@checkCodeCollaborator')->name('checkCodeCollaborator');
    Route::post('/addCart', 'OrderController@addCart')->name('addCart');
    Route::post('/addOrder', 'OrderController@addOrder')->name('addOrder');
    Route::post('/addOrderCTV', 'OrderController@addOrderCTV')->name('addOrderCTV');
    Route::post('/checkOrder', 'OrderController@checkOrder')->name('checkOrder');
    Route::post('/deleteProduct', 'OrderController@deleteProductById')->name('deleteProduct');
    Route::post('/updateProductInThankful', 'ThankfulController@updateProductInThankful')->name('updateProductInThankful');
    Route::post('/deleteProductInGroupOrderPage', 'OrderController@deleteProductInGroupOrderPage')->name('deleteProductInGroupOrderPage');
    Route::post('/changeCountProduct', 'OrderController@changeCountProduct')->name('changeCountProduct');
    Route::get('/gio-hang-1', 'OrderController@showOrder')->name('order');
    Route::post('/changeProvinceByCTV', 'ProvinceController@changeProvinceByCTV')->name('changeProvinceByCTV');
    Route::post('/changeDistrictByCTV', 'ProvinceController@changeDistrictByCTV')->name('changeDistrictByCTV');
    Route::post('/changeProvince', 'ProvinceController@changeProvince')->name('changeProvince');
    Route::post('/changeDistrict', 'ProvinceController@changeDistrict')->name('changeDistrict');
    Route::post('/filter', 'ProductController@postFilter')->name('filter');
    Route::get('/getDetailProduct/{product_code}', 'ProductController@getDetailProductByCode')->name('getDetailProductByCode');
    Route::post('/changeProductCTV', 'ProductController@changeProductCTV')->name('changeProductCTV');
    Route::post('/getDetailProduct', 'ProductController@getDetailProduct')->name('getDetailProduct');
    Route::get('/search', 'ProductController@search')->name('search');
    Route::get('/show-request-return', 'RequestReturnController@showRequestReturn')->name('showRequestReturn');
    Route::post('/request-return', 'RequestReturnController@requestReturn')->name('requestReturn');
    Route::post('/request-input-change', 'RequestReturnController@requestInputChange')->name('requestInputChange');
    Route::get('/test-product', 'ProductController@testProduct');
    Route::get('/qua-tang', 'ProductController@showProductGift')->name('gift');
    Route::get('/live-stream/{time}/{alias}/{aliasChild}', 'ProductController@showProductLiveStream')->name('showProductLiveStream');
    Route::get('/qua-tang/{alias}', 'ProductController@showProduct')->name('product_gift');
    Route::get('/qua-tang/{alias}/{aliasChild}', 'ProductController@showProductChild')->name('product_child_gift');
    Route::get('/qua-tang/{alias}/{aliasChild}/{aliasGrandChild}', 'ProductController@showProductGrandChild')->name('product_grand_child_gift');
    Route::get('/{alias}', 'ProductController@showProduct')->name('product');
    Route::get('/{alias}/{aliasChild}', 'ProductController@showProductChild')->name('product_child');
    Route::get('/{alias}/{aliasChild}/{aliasGrandChild}', 'ProductController@showProductGrandChild')->name('product_grand_child');
    Route::post('/changeTransporter', 'ProvinceController@changeTransporter')->name('changeTransporter');
});


Route::post('test', 'SomeController@test')->name('test');
