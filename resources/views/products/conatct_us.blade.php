<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا</title>
      <!--Bootstrap link-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <!--Css StyleSheet-->
      <link rel="stylesheet" href="/css/product.css">
      <link rel="stylesheet" href="/css/header.css">
      <link rel="stylesheet" href="/css/general.css">
      <!--GOOGLE FONTS-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa&display=swap" rel="stylesheet">

</head>

<body>
    <!-- header -->
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

    <!--main -->
    <IMG src="images/front_imgs/1.png"class="w-100 position-relative" style="top:0; left:0; height:800px;">
    <div class="d-flex justify-content-between flex-column align-items-center container-fluid  position-absolute start-50 top-50  translate-middle"
        style="margin-top:-200px;">
        <div style="background-color: white; max-width:500px; border-radius:30px;"
            class=" d-flex flex-row container-fluid justify-content-between align-items-center ">
            <div><img src="images/icons/face.png" class="logo-sc img-fluid"></div>
            <div><img src="images/icons/instagr.png" class="logo-sc img-fluid"></div>
            <div><img src="images/icons/twitter.png" class="logo-sc img-fluid"></div>
        </div>
        <div class="container">
            <h3 style="margin:20px; text-align: center;">تواصل معنا</h3>
            <p style="margin:8px" class="text-center">نحن نقدر تواصلكم معنا ونحن دائمًا على استعداد للاستماع والرد على
                استفساراتكم وملاحظاتكم. يمكنكم التواصل مع فريق خدمة العملاء لدينا عن طريق البريد الإلكتروني أو الهاتف
                المحمول. نحن نضمن الرد على جميع الرسائل في أقرب وقت ممكن. </p>
        </div>
        <div style="background-color: white; width:100%; margin-top:20px; border-radius:20px;"
            class=" d-flex flex-row container justify-content-center align-items-center">
            <div class="d-flex align-items-center justify-content-between" style="width:200px;">
                <img src="images/icons/telephone.svg">
                <div style="text-align: center;">
                    <p style="margin:4px;">اتصل بنا : 45454545545</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .logo-sc {
            width: 20px;
            height: 20px;
            margin: 20px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
    <br>
    <br>
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
