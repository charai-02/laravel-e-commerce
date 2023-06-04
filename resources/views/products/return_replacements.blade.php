<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إرجاع واستبدال المنتجات</title>
    <link rel="stylesheet" href="style.css">
          <!--bootstrap-->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
          <!--Css Stylesheet-->
          <link rel="stylesheet" href="/css/product.css">
          <link rel="stylesheet" href="/css/general.css">
          <link rel="stylesheet" href="/css/header.css">
          <!--GOOGLE_FONTS-->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Mirza&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">

</head>

<body>
    {{-- <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 10px;
        }

        p {
            margin: 10px;
            padding: 10px;
            text-align: justify;
            font-family: 'Mirza', cursive;
        }
    </style> --}}
    <header>
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
    </header>
    <br>

    <h1>إرجاع واستبدال المنتجات</h1> <br>
    <section>
        <h1>الإرجاع</h1>
        <br>
        <p>إذا لم يكن المنتج المشترى يلبي توقعاتك، يمكنك إرجاعه خلال [عدد الأيام] يوماً من تاريخ الاستلام. ليكن المنتج
            مؤهلاً للاسترجاع، يجب أن يكون غير مستخدم ويجب أن يكون في نفس الحالة التي استلمتها فيها.</p>
        <p>لإجراء الإرجاع، يرجى اتباع الخطوات التالية:</p>
        <ol>
            <li >اتصل بفريق خدمة العملاء عن طريق البريد الإلكتروني أو الهاتف.
            </li>
            <li >أعد المنتج في الحزمة الأصلية مع كافة الملحقات والأدلة.</li>
            <li >قم بتسليم المنتج إلى شركة الشحن المحددة.</li>
        </ol>
        <p>سنقوم بإعادة المبلغ المدفوع لشراء المنتج إلى حسابك عند استلام المنتج المُرجَع.</p>
    </section>

    <section>
        <br>
        <h2>الاستبدال</h2>
        <br>
        <p>إذا تلقيت منتجاً تالفاً أو غير صحيح، يمكنك طلب استبداله. يرجى الاتصال بفريق خدمة العملاء لترتيب الاستبدال.
        </p>
        <p>يمكنك أيضاً طلب استبدال المنتج إذا تغيرت رغبتك في المنتج المشترى. ليكن المنتج مؤهلاً للاستبدال، يجب أن يكون
            غير مستخدم ويجب أن يكون في نفس الحالة التي استلمتها فيها.</p>
    </section>

    <hr style="color:rgb(164, 163, 163)">
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
