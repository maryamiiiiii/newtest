<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Ufarm</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet/less" type="text/css" href="public/css/styles.less"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js"></script>

</head>

<body>
<header class="navbar navbar-expand flex-column flex-md-row bg-white">
    <a class="navbar-brand" href="#">
        <img src="public/img/logo.png">
    </a>
    <form class="form-inline my-2 my-lg-0 flex-row ml-md-auto d-none d-md-flex col-sm-6">
        <input class="form-control mr-sm-2 search-u" type="text"
               placeholder="نام محصول، برند و یا دسته مورد علاقه خود را جستجو کنید..." aria-label="Search">
        <button class="btn btn-danger btn-search-u p0" type="submit"><i class="icon-search1 pr5 pl5"></i></button>
    </form>
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row nav-u">
            <!--            <li class="nav-item dropdown">-->
            <!--                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مریم رجبی</a>-->
            <!--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">-->
            <!--                    <a class="dropdown-item" href="#">نمایش پروفایل</a>-->
            <!--                    <a class="dropdown-item" href="#">نمایش کد تخفیف</a>-->
            <!--                    <a class="dropdown-item" href="#">خروج</a>-->
            <!--                </div>-->
            <!--            </li>-->
            <li class="nav-item">
                <a class="nav-link fs1em" href="/">ورود /</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs1em" href="#">ثبت نام</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-outline-success btn-basket-u my-2 my-sm-0" type="submit"><span
                            class="icon-add_shopping_cart"></span>
                    <span class="basket-txt-u">سبد خرید
                     <span class="circle-u">0</span>
                    </span>
                </button>
            </li>
        </ul>
    </div>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-navcolor-u mb15">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span>خانه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">محصول میانی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">محصول نهایی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">سایر محصولات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">قوانین و مقررات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">تماس با ما</a>
            </li>
        </ul>
    </div>
    <button type="button" class="btn btn-danger fs08em">دانلود اپلیکیشن</button>
    <ul class="nav flex-row suggest-u">
        <li class="nav-item">
            <a class="nav-link fs1em circle color-light-green" href="/">پیشنهادات ما</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs1em color-dark-yellow" href="#">تخفیفات روز</a>
        </li>
    </ul>
</nav>

<main role="main" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="main-u">
                <div class="row">
                    <div class="col-md-2 pr0 pl0">
                        <img class="img-fluid" src="public/img/baner/mahsulatefaravari.png" alt="محصولات فرآوری"/>
                        <img class="img-fluid" src="public/img/baner/dszGroup.png" alt="محصولات کنسانتره"/>
                    </div>
                    <div class="col-md-10 pr5 pl5">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="public/img/baner/topbaner1.png"
                                                 alt="محصولات کنسانتره"/>
                                            <div class="carousel-caption-u  d-none d-md-block">
                                                <h3>فروش محصولات مرغ</h3>
                                                <p class="fs15em">پروتئین های تازه و طبق استاندارد</p>
                                                <button class="btn btn-danger">خرید</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="public/img/baner/topbaner1.png"
                                                 alt="محصولات کنسانتره"/>
                                            <div class="carousel-caption-u  d-none d-md-block">
                                                <h3>فروش محصولات مرغ</h3>
                                                <p class="fs15em">پروتئین های تازه و طبق استاندارد</p>
                                                <button class="btn btn-danger">خرید</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="public/img/baner/topbaner1.png"
                                                 alt="محصولات کنسانتره"/>
                                            <div class="carousel-caption-u  d-none d-md-block">
                                                <h3>فروش محصولات مرغ</h3>
                                                <p class="fs15em">پروتئین های تازه و طبق استاندارد</p>
                                                <button class="btn btn-danger">خرید</button>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tabs_wrapper">
                                    <div class="tab_container">
                                        <!-- #tabs -->
                                        <?php
                                        for ($i = 0; $i <=10; $i++){
                                            ?>
                                            <div id="tab<?= $i ?>" class="tab_content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container gallery-top">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/3444raw-chicken.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/476542_446.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/c089a46b-d8ee-42a4-86aa-cb3a409af54b.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/ناگت-مرغ.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/3444raw-chicken.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/476542_446.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/c089a46b-d8ee-42a4-86aa-cb3a409af54b.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/ناگت-مرغ.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/3444raw-chicken.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/476542_446.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/c089a46b-d8ee-42a4-86aa-cb3a409af54b.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/ناگت-مرغ.png)"></div>
                                                            </div>
                                                            <!-- Add Arrows -->
                                                            <div class="swiper-button-next swiper-button-white"></div>
                                                            <div class="swiper-button-prev swiper-button-white"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- Swiper -->
                                                        <div class="swiper-container gallery-top">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/3444raw-chicken.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/476542_446.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/c089a46b-d8ee-42a4-86aa-cb3a409af54b.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/ناگت-مرغ.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/3444raw-chicken.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/476542_446.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/c089a46b-d8ee-42a4-86aa-cb3a409af54b.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/ناگت-مرغ.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/3444raw-chicken.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/476542_446.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/c089a46b-d8ee-42a4-86aa-cb3a409af54b.png)"></div>
                                                                <div class="swiper-slide" style="background-image:url(public/img/slider/ناگت-مرغ.png)"></div>
                                                            </div>
                                                            <!-- Add Arrows -->
                                                            <div class="swiper-button-next swiper-button-white"></div>
                                                            <div class="swiper-button-prev swiper-button-white"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- .tab_container -->
                                    <ul class="tabs">
                                        <?php
                                        $imgUrl = ['joje1roze.png', 'nahadehhay-dami.png', 'dan.png', 'vaksan-daro.png', 'tajhizat-moshinalat.png', 'faravari.png', 'other.png', 'egg.png', 'morghe-lashe.png', 'ghetebandi.png', 'mokamel.png'];
                                        $name = ['جوجه یک روزه', 'نهاده های دامی', 'دان آماده', 'واکسن و دارو',
                                            'تجهیزات و ماشین آلات', 'فرآوری', 'سایر', 'تخم مرغ', 'مرغ لاشه', 'قطعه بندی', 'مکمل'];
                                        $active = 'active';
                                        for ($i = 0; $i <= 10; $i++) {
                                           ?>
                                            <li class="<?php if ($i === 5) {echo "active";}?> hover-li" rel="tab<?= $i?>">
                                            <span class="icon-nav">
                                                <img src="public/img/icon/<?= $imgUrl[$i]; ?>" />
                                            </span>
                                                <span class="fs08em"><?= $name[$i]; ?></span>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        <li class="bg-danger p0 no-hover-u">
                                            <img src="public/img/icon/arreow-nav.png" alt=""/>
                                            <a href="" class="color-white">
                                                مشاهده همه دسته بندی ها
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="public/js/jquery-slim.min.js"><\/script>')</script>
<script src="swiper.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script>
    // tabbed content
    $(".tab_content").hide();
    $(".tab_content:first").show();

    /* if in tab mode */
    $("ul.tabs li").click(function() {

        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
    });
    $(".tab_container").css("min-height", function(){
        return $(".tabs").outerHeight();
    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {

        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#"+d_activeTab).show();

        $(".tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
    $(document).ready(function(){
        initSwiper();
        $("[rel]").click(function(){
            initSwiper();
        });
    });

    function initSwiper(){
        <!-- Initialize Swiper -->
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    }
</script>
</body>
</html>
