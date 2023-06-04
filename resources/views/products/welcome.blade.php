<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laneige</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Css Stylesheet-->
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/header.css">
    <!--GOOGLE_FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

</head>

<body>
    <!--header-->

    <div class="sticky-top shadow p-3 bg-body-tertiary white row">
        <div class="d-flex flex-row justify-content-between col-12">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling"><img src="/images/icons/list.svg" width="30px" height="30px"
                    style="margin-top:0px" class="img-fluid"></button>
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
                        <div class="container-fluid">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="ابحث عن منتجات..."
                                    aria-label="Search">
                                <button class="btn btn-outline-dark" type="submit">ابحث</button>
                            </form>
                        </div>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="margin-right:10px; margin-left:10px;"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column mb-3">
                        <div class="p-2">
                            <a href="index.html" style="text-decoration:none; color:black;">الصفحة الرئيسية </a>
                        </div>
                        <div class="p-2">
                            <a href="Atasnifat.html" style="text-decoration:none; color:black;">التصنيفات</a>
                        </div>
                        <div class="p-2">
                            <a href="tawasal-maana.html" style="text-decoration:none; color:black;">اتصل بنا </a>
                        </div>
                    </div>
                    <div style="margin-top:50px;"><a href="index.html"><img src="images/Laneige.jpeg"
                                class="logo shadow img-fluid container"></a> </div>
                </div>
            </div>
            <a href="index.html"><img src="/images/Laneige.jpeg" class="logo img-fluid "
                    style="margin-right:5px; margin-left:5px;"> </a>
            <button class="btn" style="padding-left:8px; padding-right:25px;" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#my-bag-offcanvas" aria-controls="my-bag-offcanvas"
                style="margin:2px;">
                <img width="30px" height="30px" class="img-fluid" src="/images/icons/shopping-cart.png">
            </button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="my-bag-offcanvas" aria-labelledby="my-bag-offcanvas-label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="my-bag-offcanvas-label">سلة مشترياتي</h5>
                    <button type="button" class="btn-close " data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    @if (Auth::check())
                        <ul id="bag-items" style="height: 65%;">
                            @foreach ($allProducts as $index => $allproduct)
                                <h6>{{ $allproduct->p_name_ar }} Quantity : {{ $cmd_products_quantity[$index]->quantity }}</h6>
                            @endforeach
                        </ul>
                        <div class="foot d-flex flex-row justify-content-between align-items-center">
                            <h6>الثمن الإجمالي</h6>
                            <h6>DH {{$priceT}}</h6>
                        </div>
                    @else
                        <ul id="bag-items" style="height: 65%;"></ul>
                        <div class="foot d-flex flex-row justify-content-between align-items-center">
                            <h6>الثمن الإجمالي</h6>
                            <h6>DH </h6>
                        </div>
                    @endif
                    <hr>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <button class="fcta-btn container mb-2 btn w-100" style="height:8%"
                            onclick="window.location.href='formulaire.html';"> شراء الآن</BUTTON>
                        <button class="btn btn-outline-secondary container" style="height:8%"
                            data-bs-dismiss="offcanvas"> استمر في التسويق</BUTTON>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Carousel-->

    <div id="carouselExample" class="carousel slide  container-fluid">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/front_imgs/SLIDE1.png" class="d-block w-100 cover" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/front_imgs/SLIDE2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/front_imgs/SLIDE3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Our Products-->
    <br>
    <div class="wrapper">
        <div class="container" style="margin-top:20px">
            <h3 class="text-center"> أفضل منتجاتنا</h3>
        </div>

        <div class="mx-auto mt-20 mb-20">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col col-xs-12 col-sm-6 col-lg-3 col-xxl-3 container d-flex justify-content-center">
                        <div class="s card flex-row flex-wrap border-0" style="width: 15rem;">
                            <img src="/images/{{ $product->p_img }}" class="card-img-left img-fluid productpng"
                                alt="..." onclick="window.location.href='water-bank-product.html';">
                            <div class="card-body">
                                <h6 class="card-title text-center" style="font-size:16px">{{ $product->p_name_fr }}
                                </h6>
                                <h6 class="card-title text-center" style="font-size:16px">{{ $product->p_name_ar }}
                                </h6>
                                <p style="color:#D1A588; font-size:16px" class="text text-center">
                                    <b>{{ $product->p_price }}</b>
                                </p>
                                <button class="fcta-btn rounded-5 addtocart" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                    onclick="window.location.href='{{ route('AboutProduct', $product->id) }}';"><span
                                        class="text">اختار</span></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <div>
        <img src="/images/front_imgs/Coverf.png" CLASS="container-fluid p-0 m-0">
    </div>

    <!--footer-->

    <div class="d-flex align-items-center justify-content-center container">
        <img src="/images/Laneige.jpeg" class="logo P-2">
    </div>
    <hr style="color:rgb(164, 163, 163)">
    <div class="container text-center">
        <br>
        <div class="row">
            <div class="col col-md-4 col-xs-12 ">
                <div class="text text-center mb-0 p-0" style="font-weight:bold">اتصل بنا</div>
                <hr width="25%" class="sm-line">

                <div>
                    <a href="{{route('conatct_us')}}">
                        <p style="font-size:12px">اتصل بنا</p>
                    </a>
                </div>
            </div>
            <div class="col col-xs-12 col-md-4">
                <div class="text-center text" style="font-weight:bold">الشروط و السياسة</div>
                <hr width="25%" class="sm-line">
                <div>
                    <a href="{{route('condition_of_use')}}">
                        <P style="font-size:12px">شروط اللإستخدام</P>
                    </a>
                    <a href="{{route('return_replacements')}}">
                        <p style="font-size:12px">سياسة اللإستبدال و الإسترجاع </p>
                    </a>
                </div>
            </div>
            <div class="col col-xs-12 col-md-4 text" style="font-weight:bold">
                عن المتجر
                <hr width="25%" class="sm-line">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
