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
    <!-- header -->
    <div class="sticky-top shadow p-3 bg-body-tertiary white row">
        <div class="d-flex flex-row justify-content-between col-12">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling"><img src="/images/icons/list.svg" width="30px" height="30px"
                    style="margin-top:0px" class="img-fluid">
            </button>

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
                            <a href="Contact-us.html" style="text-decoration:none; color:black;">اتصل بنا </a>
                        </div>
                    </div>
                    <div style="margin-top:50px;"><a href="index.html"><img src="/images/Laneige.jpeg"
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
                    <ul id="bag-items" style="height: 65%;">
                        @foreach ($allProducts as $index => $allproduct)
                            <h6>{{ $allproduct->p_name_ar }} Quantity : {{ $cmd_products_quantity[$index]->quantity }}</h6>
                        @endforeach
                        
                    </ul>
                    <div class="foot d-flex flex-row justify-content-between align-items-center">
                        <h6>الثمن الإجمالي</h6>
                        <h6>DH {{$priceT}}</h6>
                    </div>
                    <hr>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <button class="fcta-btn container mb-2 btn w-100" style="height:8%"
                            onclick="window.location.href='{{route('add_ProdCard_to_Cmd')}}';"> شراء الآن</BUTTON>
                        <button class="btn btn-outline-secondary container" style="height:8%"
                            data-bs-dismiss="offcanvas"> استمر في التسويق</BUTTON>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product l_P -->
    <div class="d-flex flex-wrap container ">
        <!--CAROUSEL-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div id="carouselExample" class="carousel slide border rounded-3"
                style="padding:10px; background-color: rgba(211, 211, 211 , 0.2);">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/{{ $product->p_img }}" class=" d-block w-100 rounded-3" id="productimage">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/{{ $product->p_img_sec }}" class="d-block w-100 ">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/{{ $product->p_3rd_img }}" class="d-block w-100 ">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!--DESCRIPTION PRODUCT-->
        <!--CARD-->
        <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between flex-row mr-0 "
                        style="width:120px; margin-right:0px; margin-bottom:10px;">
                        <img src="/images/icons/star-fill.svg"class="star">
                        <img src="/images/icons/star-fill.svg" class="star">
                        <img src="/images/icons/star-fill.svg" class="star">
                        <img src="/images/icons/star-fill.svg" class="star">
                        <img src="/images/icons/star-fill.svg" class="star">
                    </div>
                    <h4 class="card-title" style="font-family:Cairo" id="productname">{{ $product->p_name_fr }}</h4>
                    <h4 class="card-title" style="font-family:Cairo">{{ $product->p_name_ar }}</h4>
                    <p style="color:rgb(180, 178, 178)" class="card-text">{{ $product->p_description }}</p>
                    <h3 style="color:#000000; margin:10px;font-family:'Cairo'; margin-right:0px;font-size:25px; font-weight:bold;"
                        class="text" id="productprice">درهم {{ $product->p_price }}</h3>
                    <form class="form-group ml-20" method="POST" action="{{ route('cmd_or_card', $product->id) }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <div class="Quantity-wrapper mr-0">
                                <input type="number" name="quantity" id="">
                            </div>
                            <button class=" cta-btn text w-100 text " data-product="product1" type="submit" name='action' value="card"
                                style="margin:10px; padding:10px; padding-right:5px; padding-left:5px;" id="addtocartbtn">
                                أضف إلى السلة
                            </button>
                        </div>
                        <!-- Buy it-->
                        <!--button trigerred modal formulaire-->
                        <button class="cta-btn container btnform m-0 w-100 ml-0" type="submit" class="btn btn-primary" name='action' value="cmd"
                            data-toggle="modal" data-target="#exampleModal" >اضغط هنا للطلب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!--Accordion: INGREDIENT , HOWITWORKS , BENEFITS-->
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button dir="rtl" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <P> المكونات</P>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <?php
                    $lists = explode(',', $product->p_components);
                    echo "<UL class=\"list-sp\">";
                    foreach ($lists as $list) {
                        echo "<LI><p class=\"card-text\" style=\"font-size:14px\">$list</p></LI>";
                    }
                    echo '</UL>';
                    ?>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button dir="rtl" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <P> كيفية الإستعمال</P>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">{{ $product->p_usage }}</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button dir="rtl" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <P> المميزات</P>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <?php
                    $lists = explode(',', $product->p_avantage);
                    echo "<UL class=\"list-sp\">";
                    foreach ($lists as $list) {
                        echo "<LI><p class=\"card-text\" style=\"font-size:14px\">$list</p></LI>";
                    }
                    echo '</UL>';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--clients-opinion-->
    <div class="container-rating container d-flex flex-column align-items-center justify-content-center">
        <h3>تقييم الزبون</h3>
        <h6>أضف تقييمك</h6>
        <!-- Button trigger modal -->
        <button class="cta-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
            أضف تقييمك</button>
        <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">إضافة تقييمك</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="stars">
                                <a href="#" class="bi-star-fill"></a>
                                <a href="#" class="bi-star-fill"></a>
                                <a href="#" class="bi-star-fill"></a>
                                <a href="#" class="bi-star-fill"></a>
                                <a href="#" class="bi-star-fill"></a>
                            </div>
                            <style>
                                .stars a {
                                    color: rgb(113, 113, 113)
                                }

                                .stars a.active {
                                    color: gold;
                                }
                            </style>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name"
                                    placeholder="البريد الإلكتروني">
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea class="form-control" id="message-text" placeholder="اكتب تعليقك"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الخروج</button>
                        <button type="button" class="btn btn-dark">حفظ تقييمك</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <hr style="color:rgb(164, 163, 163)">
    <div class="d-flex align-items-center justify-content-center container">
        <img src="/images/Laneige.jpeg" class="logo">
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

    <script>
        var starss = document.querySelectorAll('.stars a');
        starss.forEach((item, index1) => {
            item.addEventListener('click', () => {
                starss.forEach((stars, index2) => {
                    index1 >= index2 ? stars.classList.add('active') : stars.classList.remove(
                        'active');
                })
            })
        })
    </script>
    <script src="about-product.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
        integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK" crossorigin="anonymous">
    </script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
