<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- to be responsive in any device-  phone labtob 100%-->
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- icons--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--page html to css -->
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            font-family: Gotham-Regular, ZaridSans-Regular, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F6F5EF;
            
        }
    </style>
    <style>
        .hero-text{
            transform: translateX(0px);
            animation: slide 2s ease-in-out;
        }
        @keyframes slide{
            0%{
                transform: translateX(-500px);
            }
            to{
                transform: translateX(0px);
            }
        }
        .hero-img{
            transform: translateX(0px);
            animation: hero-img 2s ease-in-out;
        }
        @keyframes hero-img{
            0%{
                transform: translateX(500px);
            }
            to{
                transform: translateX(0px);
            }
        }
    </style>
            
            <style>
                .container h3 {
                    color: rgba(0, 0, 0, 0.692);
                }
    
                @media screen and (min-width: 755px) {
                    .menu {
                        display: none;
                    }
    
                    .show {
                        display: none;
                    }
    
                }
                .card{
            transform: translateX(0px);
            animation: hero-img 4s ease-in-out;
        }
        @keyframes hero-img{
            0%{
                transform: translateX(500px);
            }
            to{
                transform: translateX(0px);
            }
        }
            </style>
</head>

<body>
    @include('layouts.arheader')
    <!-- menu -->

    <!-----------------------------------------------end header-------------------------------------------------->
    <div class="container hero">

        <div class="row pt-5">

            <div class="col-md-6 text-container hero-text">
                <h1 class="pt-0"><b> دليل زوار مكة </b> </h1>
                <h3> خطوات الحج والعمرة ومعالم مكة المكرمة</h3>
            </div>
            <div class="col-md-6 image-container hero-container">
                <!-- Replace 'image.jpg' with your image URL -->
                <img src="/img/kaaba.jpg" alt="Your Image" class="hero-img">

            </div>


    </div>

    <!------------------------------------------------end hero----------------------------------------->
    


    <!----------------------------------------- cards main-------------------------------------- -->
   
    <div class="profile-aria">
        <div class="card">
            <div class="card__img"></div>
            <div class="card__avatar"></div>
            <div class="card__title">معالم مكة المكرمة</div>
            <div class="card__subtitle">لرؤية المزيد من المعلومات </div>
            <div class="card__wrapper">
                <a href="landmark.html">
                <button class="card__btn"> انقر هنا</button>
                </a>
            </div>
        </div>
     


        <div class="card">
            <div class="card__img2"></div>
            <div class="card__avatar2"></div>
            <div class="card__title">العمرة</div>
            <div class="card__subtitle">لرؤية المزيد من المعلومات </div>
            <div class="card__wrapper">
                  <a href="Umrah.html">
                <button class="card__btn">انقر هنا</button>
                </a>
             
            </div>
        </div>

        <div class="card">
            <div class="card__img3"></div>
            <div class="card__avatar3"></div>
            <div class="card__title">حج </div>
            <div class="card__subtitle"> لرؤية المزيد من المعلومات </div>
            <div class="card__wrapper">
                 <a href="Hajj.html">
                <button class="card__btn">انقر هنا  </button>
                </a>
            </div>
     


        </div>
</div>
        
    

    <!---------------!end section cards ---------------------->

    
    <div class="container container-edit">
        <div class="general">
            <h2 class="py-5">
                ارشادات عامة للحجاج</h2>
            <i class="fa-solid fa-person-military-pointing"></i>
        </div>
        <style>
            .general {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
       
        <div class="row g-0  divide-row pb-5">
            <div class="col-lg-4 guide-container">
                <div class="text text-center"> 
                     <i class="fa-solid fa-thumbs-up"></i>
                    اتبع الخطوات والتعليمات العامة المقدمة لك
                </div>
                 
                <div class="text text-center">
                    <i class="fa-solid fa-sun"></i>
                    تجنب ضربات الشمس الحارقة باستخدام المظلة والإكثار من السوائل
                   
                </div>
            </div>
            
            <div class="col-lg-4 guide-container ">
                <div class="text text-center">
     <i class="fa-solid fa-notes-medical"></i>
                   إعلام المرافقين بالحالة الصحية
                   
                </div>
             
                <div class="text text-center"> 
                        <i class="fa-solid fa-street-view"></i>
                    !خلال مناسك الجهد الكبير: ابتعد عن الزحام
                   
                </div>
            </div>
            <div class="col-lg-4 guide-container">

                <div class="text text-center">
                     <i class="fa-solid fa-bottle-droplet"></i>
                    شرب العصائر الطبيعية والماء لتقليل الجفاف والتعب
                   
                </div>

                <div class="text text-center font-size=40px;">
                    <i class="fa-solid fa-city"></i>
                                    <i class="fa-solid fa-location-dot"></i>
                   عندما لا تعرف الطريق أو تضيع اسأل واذهب إلى أقرب مكتب (الإرشاد المفقود)
                    

                </div>
            </div>

        </div>
    </div>
    <!---------------!end section guid ----------------------------------------------------------->
    <div class="container hero" id="about">
        <div class="row pt-5">
            <div class="col-md-6 image-container hero-container">
                <!-- Replace 'image.jpg' with your image URL -->
                <img src="/img/hero2.PNG" alt="Your Image" class="hero-img">

            </div>

            <div class="col-md-6">
                <div class="move">
                    <h3 class="about-txt text-center" ><i class="fa-solid fa-circle-exclamation mr-1"></i> <b> من نحن ؟ </b></h3>
                    <h3 class="pt-0 text-white text-center" ><b> دليل زوار مكة المكرمة</b> </h3>
                    <h4 class="text-black pb-5 mr-1"> <b> من خلال موقعنا يمكنك التعرف على
كيفية بدء العمرة والحج من الخطوة الأولى ومعرفة جميع معالم مكة بقصصها كما يمكنك تحميل كافة المعلومات من الموقع لتحتفظ بها معك

                        حتى لو لم يكن لديك الإنترنت متاح </b>
                        
                    </h4>
                    
                </div>
            </div>
        </div>
    </div>
    <!---------------!end section cards ---------------------->

    <!-- start contact -->
    <div class="contact_us_2 mt-5" id="contact" dir="rtl">
        <div class="responsive-container-block big-container" >
            <div class="blueBG">
            </div>
            <div class="responsive-container-block container">
            <form class="form-box" method='POST' action='{{url("/addMessage")}}'>
            @csrf
                    <div class="container-block form-wrapper">
                        <p  class="text-blk contactus-head " >
                           تواصل معنا
                        </p>
                        <p class="text-blk contactus-subhead">
                            !نحن نحب أن نسمع منك
                        </p>
                        <div class="responsive-container-block" >
                            <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt" >
                                <p  class="text-blk input-title ">
                                    الاسم
                                </p>
                                <input class="input" id="ijowk" name="name"
                                    placeholder="أدخل الاسم..." type="text" required />
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <p class="text-blk input-title">
                                    الإيميل أو الرقم 
                                </p>
                                <input class="input" id="ipmgh" type="text" name="ContactWay"
                                    placeholder="أدخل الرقم أو الإيميل " required />
                            </div>
                            <div class="form-ui">
                                <label for="type" class="typemessage"> نوع الرسالة</label>
                                <select class="ui dropdown" name="type" id="">
                                    <option value="1">اقتراح</option>
                                    <option value="0">استفسار</option>
                                </select>
                            </div>
                            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i">
                                <p class="text-blk input-title">
                                    الرسالة
                                </p>
                                <textarea class="textinput" id="i5vyy" name="Message" placeholder=" ....الرسالة "
                                    required></textarea>
                            </div>
                        </div>
                        <input type='submit' value="أرسل الرسالة " class="submit-btn">
                            
                        
                    </div>

                </form>
            </div>
        </div>
    </div>
        <!-- end contact -->


    <!-- Bootstrap JavaScript (optional if you need dropdowns or other JS-dependent features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <!-- footer -->
            @include('layouts.arfooter')
    <script src="/js/main.js"></script>
    </div>
</body>

</html>