@extends('master')
@section('content')

<div class="main-slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/slider/slider1.jpg" alt="Chania">
        <div class="carousel-caption">
          <div class="slide-header-text wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update dress from here...</div> <br />
          <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
        </div>
      </div>

      <div class="item">
        <img src="images/slider/slider2.jpg" alt="Chania">
        <div class="carousel-caption">
          <div class="slide-header-text wow rotateIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Turn your looking into an easy price</div> <br />
          <a href="products.html" class="btn btn-red slider-link wow lightSpeedIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this from your limit</a>
        </div>
      </div>

      <div class="item">
        <img src="images/slider/slider3.jpg" alt="Flower">
        <div class="carousel-caption">
          <div class="slide-header-text wow rollIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">A place of all electronics products</div> <br />
          <a href="products.html" class="btn btn-red slider-link wow zoomIn" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">View Our All Products</a>
        </div>
      </div>

      <div class="item">
        <img src="images/slider/slider4.jpg" alt="Flower">
        <div class="carousel-caption">
          <div class="slide-header-text wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Get the most latest and update dress from here...</div> <br />
          <a href="products.html" class="btn btn-red slider-link wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Buy this Now</a>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>

    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div> <!-- End Main slider class -->


<div class="featured-products">
  <div class="container">
    <h2 class="title-div wow slideInLeft pull-left" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Top Featured products</h2>
    <div class="clear"></div>
    <div class="featured-navigation pull-right">
      <span class="">
        <a class="owl-prev owl-navigaiton"><i class="fa fa-angle-double-right"></i></a>
      </span>
      <span class="stop">
        <a class="owl-next owl-navigaiton">||</a>
      </span>
      <span class="">
        <a class="owl-next owl-navigaiton"><i class="fa fa-angle-double-left"></i></a>
      </span>

    </div>
    <div class="clear"></div>
    <div class="featured-items">
      <!-- Set up your HTML -->
      <div class="owl-carousel">

        <div class="item featured1">
          <div class="item-full animated featured1-inner  width0">
            <a href="products.html">
              <h4>Digital Camera</h4>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur...</p>
            <h5>200$</h5>
            <a href="cart.html" class="btn btn-cart">
              Add To Cart
            </a>

          </div>
          <a href="products.html">
            <img src="images/product-slide/product3.png" class="img img-responsive" alt="Product1">
          </a>
        </div> <!-- Single Featured Item -->

        <div class="item featured2">
          <div class="item-full animated featured2-inner  width0">
            <a href="products.html">
              <h4>Digital Camera</h4>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur...</p>
            <h5>200$</h5>
            <a href="cart.html" class="btn btn-cart">
              Add To Cart
            </a>

          </div>
          <a href="products.html">
            <img src="images/product-slide/product1.png" class="img img-responsive" alt="Product1">
          </a>
        </div> <!-- Single Featured Item -->

        <div class="item featured3">
          <div class="item-full animated featured3-inner  width0">
            <a href="products.html">
              <h4>Digital Camera</h4>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur...</p>
            <h5>200$</h5>
            <a href="cart.html" class="btn btn-cart">
              Add To Cart
            </a>

          </div>
          <a href="products.html">
            <img src="images/product-slide/product2.png" class="img img-responsive" alt="Product1">
          </a>
        </div> <!-- Single Featured Item -->

        <div class="item featured4">
          <div class="item-full animated featured4-inner  width0">
            <a href="products.html">
              <h4>Digital Camera</h4>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur...</p>
            <h5>200$</h5>
            <a href="cart.html" class="btn btn-cart">
              Add To Cart
            </a>

          </div>
          <a href="products.html">
            <img src="images/product-slide/product3.png" class="img img-responsive" alt="Product1">
          </a>
        </div> <!-- Single Featured Item -->

        <div class="item featured5">
          <div class="item-full animated featured5-inner  width0">
            <a href="products.html">
              <h4>Digital Camera</h4>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur...</p>
            <h5>200$</h5>
            <a href="cart.html" class="btn btn-cart">
              Add To Cart
            </a>

          </div>
          <a href="products.html">
            <img src="images/product-slide/product4.png" class="img img-responsive" alt="Product1">
          </a>
        </div> <!-- Single Featured Item -->




      </div>
    </div>
  </div>
</div>
<!--End Featured products Div-->


<div class="latest-products">
  <div class="container">
    <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
    <div class="products">
      <div class="row">

        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product1.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product2.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product3.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->

        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product4.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product1.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product4.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product2.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-borde-inner">
              <a href="product_single.html">
                <img src="images/product-slide/product3.png" class="img img-responsive" />
              </a>

              <div class="product-price">
                <a href="product_single.html">DSLR Camera</a><br />
                <span class="prev-price">
                  <del>200$</del>
                </span>
                <span class="current-price">
                  150$
                </span>
              </div>

              <a href="cart.html" class="btn btn-cart text-center add-to-cart pull-right">
                <i class="fa fa-cart-plus"></i>
                Add to cart
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
        </div><!-- End Latest products[single] -->

        <div class="clearfix"></div>





      </div> <!-- End Latest products row-->
      <a href="products.html" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
        <span>See More products.. </span>
      </a>
      <div class="clear"></div>
    </div> <!-- End products div-->
  </div> <!-- End container latest products-->
</div> <!-- End Latest products -->

<div class="services-area">
  <div class="services">
    <div class="container">
      <div class="ftr-toprow">
        <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
          <div class="ftr-top-left pull-left">
            <i class="fa fa-truck" aria-hidden="true"></i>
          </div>
          <div class="ftr-top-right">
            <h4>FREE DELIVERY</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 ftr-top-grids wow slideInUp" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
          <div class="ftr-top-left pull-left">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div class="ftr-top-right">
            <h4>CUSTOMER CARE</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
          <div class="ftr-top-left pull-left">
            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          </div>
          <div class="ftr-top-right">
            <h4>GOOD QUALITY</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div> <!-- End Service -->
@endsection
