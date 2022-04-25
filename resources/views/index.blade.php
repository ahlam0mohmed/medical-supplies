<<<<<<< HEAD
@extends('layouts.app')
@section('title', 'الصفحة الرئيسية')
@section('content')
    <div class="pagetitle">
      <h1>لوحة التحكم</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">الصفحة الرئيسية /</a></li>
          <li class="breadcrumb-item active">لوحة التحكم</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
=======
@extends("layouts.main")
@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid top-slider" src="{{asset('img/1.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">علاجي كوم </h1>

                                <p>
                                    اطلب الذي تريد من اي مكان وفي اي وقت سوف نوفر عنك الذهاب االى الصيدلية وسوف نوفر لك العلاج في اسرع وقت وباسهل طريقة
                                 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid top-slider" src="{{asset('img/33.png ') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">خدمة دفع الالكتروني</h1>

                                <p>
                                    يوفر موقع علاجي كوم  خدمة الدفع الالكتروني التي سوف تسهل عليك الاجراءت االمالية
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid top-slider" src="{{asset('img/22.png') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">خدمة توصيل</h1>
                                 <p>
                                     يوفر موقع علاجي كوم  خدمة توصسيل الى المنازل والاماكن البعيدة
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->
    <section class="bg-white ads  p-4">
        <div class="  p-4">
        <div class="row">
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro3.jpg ') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro3.jpg ') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro3.jpg ') }}" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container pb-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">الصيدليات</h1>
                    <p>
                        يمكن الطلب من الصيدلية التي تريد وسوف يتم ايصال الطلب الى باب بيتك
                    </p>
                </div>
            </div>
            <div class="row  col-md-4-d">
               <div class="col-12 col-md-4 mb-4">
                <div class="card  shadow  mb-5 bg-body  d-flex justify-content-center align-items-center" style=" padding: 0 0 1rem 0 ; overflow: hidden;border-radius: 1rem;">
                    <div class="row card-img-top w-100 mb-2 h-100 " >
                        <img src="{{asset('img/phramacy1.png ') }}" class="card-img-top w-100  card-pharmacy    p-0"  alt="...">
                        </div>
                        <!-- strat info  -->
                        <div class="card-body">
                        <h5 class="card-title text-center fw-bold" >صيدلية رضا الوالدين</h5>
                          <p class="card-text ">العنوان : حضرموت -  المكلا - حي الشهيد</p>
                          <!-- strat social media  -->
                          <ul class=" text-center footer-icons d-flex ">
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                        class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank"
                                    href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank"
                                    href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                            </li>
                        </ul>
                        <!-- strat social media  -->
                     </div>
                       <a href="#" class="btn btn-primary fw-bold card-title w-75 rounded mb-4 " >
                        <span>طلب دواء  </span>
                        <i class="fa fa-fw fa-cart-arrow-down mr-1 px-3"></i>
                       </a>
                   </div>
               </div>
               <div class="col-12 col-md-4 mb-4">
                <div class="card  shadow  mb-5 bg-body  d-flex justify-content-center align-items-center" style=" padding: 0 0 1rem 0 ; overflow: hidden;border-radius: 1rem;">
                    <div class="row card-img-top w-100 mb-2 h-100 " >
                        <img src="{{asset('img/phramacy1.png ') }}" class="card-img-top w-100  card-pharmacy    p-0"  alt="...">
                        </div>
                        <!-- strat info  -->
                        <div class="card-body">
                        <h5 class="card-title text-center fw-bold" >صيدلية رضا الوالدين</h5>
                          <p class="card-text ">العنوان : حضرموت -  المكلا - حي الشهيد</p>
                          <!-- strat social media  -->
                          <ul class=" text-center footer-icons d-flex ">
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                        class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank"
                                    href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank"
                                    href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                            </li>
                        </ul>
                        <!-- strat social media  -->
                     </div>
                     <a href="#" class="btn btn-primary fw-bold card-title w-75 rounded mb-4 " >
                        <span>طلب دواء  </span>
                        <i class="fa fa-fw fa-cart-arrow-down mr-1 px-3"></i>
                       </a>

                   </div>
               </div>
               <div class="col-12 col-md-4 mb-4">
                <div class="card  shadow  mb-5 bg-body  d-flex justify-content-center align-items-center" style=" padding: 0 0 1rem 0 ; overflow: hidden;border-radius: 1rem;">
                    <div class="row card-img-top w-100 mb-2 h-100 " >
                     <img src="{{asset('img/phramacy6.png ') }}" class="card-img-top w-100  card-pharmacy  p-0"  alt="...">
                    </div>
                     <!-- strat info  -->
                     <div class="card-body">
                        <h5 class="card-title text-center fw-bold" >صيدلية رضا الوالدين</h5>
                          <p class="card-text ">العنوان : حضرموت -  المكلا - حي الشهيد</p>
                          <!-- strat social media  -->
                          <ul class=" text-center footer-icons d-flex ">
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                        class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank"
                                    href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item  text-center">
                                <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                        class="fab fa-twitter fa-lg fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item     text-center">
                                <a class="text-light text-decoration-none" target="_blank"
                                    href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                            </li>
                        </ul>
                        <!-- strat social media  -->
                     </div>
                     <a href="#" class="btn btn-primary fw-bold card-title w-75 rounded mb-4 " >
                        <span>طلب دواء  </span>
                        <i class="fa fa-fw fa-cart-arrow-down mr-1 px-3"></i>
                       </a>

                   </div>
               </div>

            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-outline-primary py-2 w-25 rounded fs-5   ">الاطلاع اكثر <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- Start Featured Product -->
     <!-- Start Section -->

 <section class="  py-5 bg-white">
    <div class="container">
        <div class="row text-center pt-5 pb-3">
            <div class="row text-center pt-5 pb-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">خدماتنا</h1>
                    <p>
                        تسطيع من خلال علاجي كوم الحصول على العديد من الخدمات والتي تتضمن التالي
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5  ">
                <div class="h-100 py-5 services-icon-wap shadow ">
                    <div class="h1 text-success text-center "><i class="fa fa-truck fa-lg "></i></div>
                    <h2 class="h5 mt-4 text-center">توصيل</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-credit-card-fill"></i></div>
                    <h2 class="h5 mt-4 text-center">دفع الالكتروني</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-display-fill"></i></div>
                    <h2 class="h5 mt-4 text-center">عروض</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-alarm"></i></div>
                    <h2 class="h5 mt-4 text-center">خدمة على مدار 24 ساعة</h2>
                </div>
            </div>
        </div>
    </div>
</section>

     <!-- End Featured Product -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container-fluid my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">الشركاء</h1>
                    <p>الشركاء المميزين لدينا</p>
                </div>
                <div class="col-lg-12 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/ brand1.jpg') }}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/brand2.jpg ') }}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/brand3.jpg ') }}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/brand4.jpg ') }}" alt="Brand Logo"></a>
                                            </div>

                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/ brand5.jpg') }}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/brand6.png ') }}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/brand7.png ') }}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('img/ brand8.png') }}" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
    <section class="bg-white ads p-4">
        <div class="  p-4">
        <div class="row">
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro1.jpg ') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro3.jpg ') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro3.jpg ') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <div class="mb-5 ">
                    <img class="img-fluid" src="{{asset('img/pro3.jpg ') }}" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>

>>>>>>> 0c114c3e03741c8f92f9602c8c2a3fe64e87a4c3
@endsection