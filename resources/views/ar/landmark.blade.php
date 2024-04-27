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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&family=El+Messiri:wght@400..700&family=Gochi+Hand&family=Honk&family=Jersey+10&family=Jersey+10+Charted&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Kufi+Arabic:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/landmark.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header style="">
        <div class="header">
            <img class="lgo" src="/img/vecteezy_mecca-for-hajj_.jpg" alt="logo">
        </div>
        <nav>

            <li><a href="./index.html" class="active">الصفحة الرئيسية</a></li>
            <li><a href="./landmark.html">المعالم</a></li>
            <li><a href="./Hajj.html">الحج</a></li>
            <li><a href="./Umrah.html">العمرة</a></li>

        </nav>
        <div class="box">
            <select>
                <option>EN</option>
                <option>AR</option>

            </select>
        </div>

        <div class="show">
            <div id="open"><i class="fas fa-bars text-white"></i></div>
            <div id="close"><i class="fas fa-times text-white"></i></div>
        </div>
        <div class="menu text-white">
            <li><a href="./index.html" class="active">الصفحة الرئيسية</a></li>
            <li><a href="./landmark.html">المعالم</a></li>
            <li><a href="./Hajj.html">الحج</a></li>
            <li><a href="./Umrah.html">العمرة</a></li>
            <div class="box">
                <select>
                    <option>EN</option>
                    <option>AR</option>

                </select>
            </div>
        </div>
    </header>




    <!------------------------------------- Add page (Landmarks of Makkah) Mount Noor -->
    <div class="page" id="btn-close">
        <div class="close-land"><i class="fa-solid fa-right-from-bracket"></i></div>

        <!--Btn Close (Return Landmark)-->

        <h1 class="text-page text-center py-5 text-white"> غار حراء 
            (جبل النور )  </h1>
        <div class="img-land-page">
            <img class="img-page" src="/img/jabalalnoor.PNG" alt="" srcset="">
        </div>
        <h3 class="text-center text-white mt-4"dir="rtl">
           غار حراء
            (جبل النور )</h3>
        <p>وجبل النور هو المكان الذي أكرم الله فيه نبيه محمد (صلى الله عليه وسلم) بالنبوة. وهو المكان
.الذي كان يقضي فيه وقته في عبادة ربه والتفكر في خلق الله</p>
        <p class="py-0 my-0"dir="rtl">
            وفي هذا الغار تغير تاريخ البشرية عندما أبلغ جبريل الوحي من الله إلى محمد (صلى الله عليه
وسلم.) وأول ما نزل: {اقرأ! باسم ربك الذي يخلق . [هو] يخلق الإنسان من علق. يقرأ! وربك
[الأكرم . وهو الذي علم بالقلم . [يعلم الإنسان ما لم يعلم
        </p>
        <h5 class="text-white"dir="rtl" > موقع غار حراء :</h5>
        <ul dir="rtl">
            <li>
                <p >   شمال المسجد الحرام، في أعلى جبل النور </p>
            </li>
            <li>
                <p> بينه وبين مكة: 4.8 كلم تقريبًا </p>
            </li>
            <li>
                <p>هو عبارة عن فجوةٍ بابُها نحو الشَّمال، تتسع لقرابة 9 أشخاص جالسين، وارتفاعها بمقدار قامة متوسطة  </p>
            </li>
       
        </ul>
        
        <p dir="rtl">
تنبيه: ليس من أحكام الحج ولا من مستحَبَّاته زيارة الغار، ويصعب الوصول إليه على كبار السن والمرضى
        </p>
        <!--location Mount Noor-->
        <h1 class="text-center text-white pb-3">موقع غار حراء
        (جبل النور)</h1>
        <div class="map mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29706.417128566394!2d39.877732706150425!3d21.456658281023575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c203082849b30b%3A0xaeb5e66db9f04f65!2z2KzYqNmEINin2YTZhtmI2LHigI4!5e0!3m2!1sar!2seg!4v1713635827448!5m2!1sar!2seg"
                width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       
       
        
        
    </div>
    

    <!--  Mount Noor end -->
    <!-- ------------------------------------------------------------------------------------------------- -->


    <!-- Add page (Landmarks of Makkah) Thawr Mount -->
    <div class="Thawr-Mount" id="btn-close2">
        <div class="close-land" id="land2"><i class="fa-solid fa-right-from-bracket"></i></div>
        <!--Btn Close (Return Landmark)-->


           <h1 class="text-page text-center py-5 text-white"dir="rtl">غار وجبل ثور</h1>
        <div class="img-land-page">
            <img class="img-page mb-4"
                src="/img/thowr.PNG" alt=""srcset="">
           
        </div>
        
        <p dir="rtl">
            يقع على قمة جبل ثور، وهو موقع تاريخي بارز في مكة، مذكور في آيات القرآن الكريم. ويعد معلماً هاماً في الجانب الشمالي من جبل ثور شمال العاصمة المقدسة. لا يزال كهف ثور راسخًا في التاريخ الإسلامي، حيث يروي قصة شخصين لجأا إلى داخل حدوده. وحفظت بالحماية الإلهية النبي محمد (صلى الله عليه وسلم) والصحابي الجليل أبو بكر الصديق (رضي الله عنه) من كفار مكة
        </p>
        <p dir="rtl">
            إلا تنصروا النبي فقد نصره الله إذ أخرجه الذين كفروا ثاني اثنين إذ هما في الغار إذ يقول لصاحبه لا تحزن إن الله معنا». وأنزل الله سكينته عليه وأيده بملائكة لم تروها وجعل كلمة الذين كفروا السفلى وكلمة الله هي العليا والله عزيز حكيم». (القراّن: سورة التوبة9:40) :
        </p>
        <p dir="rtl">
            وتشير الروايات التاريخية إلى أن غار ثور كان أول حصن في الإسلام لجأ إليه النبي محمد (صلى الله عليه وسلم) وصاحبه أبو بكر بعد إعلان الدعوة الإلهية. وقد لجأ رضي الله عنه وهم في طريقهم إلى المدينة في رحلة الهجرة النبوية، وظلوا فيها حتى هدأت مطاردة قريش، ثم واصلوا رحلتهم
        </p>
        <p dir="rtl">
            وبينما هم في الغار جاءت قريش تبحث عنهم، حتى أنهم وصلوا إلى باب الكهف. ولكن ردهم الله بفضله وقوته. فقال أبو بكر رضي الله عنه: لو نظر أحدهم إلى قدميه لرأينا تحتهما. فقال النبي صلى الله عليه وسلم: يا أبا بكر، ما ظنك باثنين الله ثالثهما؟ وقد ورد هذا الحديث في صحيحي البخاري وصحيح مسلم
        </p>
        <p>
           ولها فتحتان: واحدة إلى الشرق وواحدة إلى الغرب، وتقع على المنحدر الشمالي، في أعلى جبل ثور
        </p>
        <p dir="rtl">
             تنبيه: زيارة الكهف ليست واجبة ولا مستحبة، إذ لا علاقة لها بمناسك الحج
            <br>
            وتجدر الإشارة إلى أن الأمر صعب
لكبار السن والمرضى للوصول إلى المغارة نظرا لطول المسافة ووعورة التضاريس وصعوبة الوصول إليها

        </p>
        <!-- location Mount Noor-->
        <h1 class="text-center text-white pb-3">موقع غار ثور</h1>
        <div class="map mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29723.41280102686!2d39.876637756322445!3d21.373101057835978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c2050b9eef4211%3A0xa508c2e08ae5fe35!2z2KzYqNmEINir2YjYsQ!5e0!3m2!1sar!2seg!4v1713636835459!5m2!1sar!2seg"
                width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Thawr Mount end -->

    <!----------------------------------------------------------------------------------------->
    <!-- Add page (Landmarks of Makkah) Hira Cultural District -->
    <div class="Hira" id="btn-close3">
        <div class="close-land" id="land3"><i class="fa-solid fa-right-from-bracket"></i></div>
        <!--Btn Close (Return Landmark)-->

        <h1 class="text-page text-center py-5 text-white">حي حراء الثقافي</h1>
        <div class="img-land-page">
            <img class="img-page p-4"src="/img/hiraa.PNG" 
                alt="" srcset="">
        </div>
        
        <p dir="rtl">معلم ثقافي سياحي فريد بجوار جبل حراء بمكة المكرمة، يهدف إلى تحقيق عدد من الأهداف، منها:
 
</p>

        <ul dir="rtl">
            <li>
                <p>تطوير الموقع بما يليق بمكانته التاريخية، ومكانة المملكة العربية السعودية، ورعايتها للبقاع المقدسة، والمواقع التاريخية وقاصديها</p>
            </li>
            <li>
                <p>استثمار عطاءات المكان الطبيعية، وقيمته التاريخية، بما ينسجم مع مكانة مكة المكرمة، وبُعدها الديني والإنساني والتاريخي</p>
            </li>
            <li>
                <p>الإسهام في إثراء التجربة الدينية والثقافية للحجاج والمعتمرين بصورة صحيحة وسليمة</p>
            </li>
            <li>
                    <p> تحقيق الأمان والسلامة لزوار الموقع بإذن الله.</p>
            </li>
            <li>
                <p>إضافة عناصر تنموية، تمثّل قيمة مضافة للمكان، لخدمة زواره من أهل مكة المكرمة وقاصديها.</p>
            </li>
        </ul>
        <h3 dir="rtl"class="text-white">معرض الوحي</h3>
        <p dir="rtl">
        يرتبط المشروع بغار حراء، وهو المكان الذي ابتدأ فيه نزول الوحي على النبي صلى ﷲ علیه وسلم ، لذا؛ كان موضوع الوحي المحور الأساس في هذا المكون المهم من مكونات المشروع، وهو معرض الوحي، تعرض من خلاله قصة نزول الوحي على الأنبياء</p>
              <ul dir="rtl">
              
          <li>
                <p>إضافة عناصر تنموية، تمثّل قيمة مضافة للمكان، لخدمة زواره من أهل مكة المكرمة وقاصديها</p>
            </li>
            <li>
                    <p> كما يفرد المعرض جناحًا خاصًا بقصة نزول الوحي على نبينا محمد ، ويعرّف بهذا الجانب من سيرته</p>
            </li>
        <li>
            <p>ينتقل بعدها الزائر للتعرف على بعض ما يرتبط بقصة نزول الوحي كغار حراء وأم المؤمنين خديجة بنت خويلد رضي ﷲ عنھا وجبريل علیه السلام ، عبر عرض تقني جذاب، يأخذ المشاهد في رحلة سمعية وبصرية ماتعة</p>
        </li>
                  </ul>
              
        <h3 dir="rtl">أوقات الدوام في المعرض :</h3>
                  <ul dir="rtl" >
        <li>
            <p>من يوم السبت وحتى يوم الخميس من تمام الساعة (٨:٣٠ صباحاً) وحتى الساعة (٩:٣٠ مساءً)</p>
        </li>
        <li>
            <p>يوم الجمعة من تمام الساعة ( ٤ عصراً ) وحتى ( ١٠ مساءً)</p>
        </li>
                  </ul>
    
             
        <!-- location Hira Cultural District-->
        <h1 class="text-center text-white pb-3">موقع حي حراء الثقافي</h1>
        <div class="map mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.314006227924!2d39.871637425977326!3d21.4561924729631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c2031ad5783d2b%3A0xb8c108aeb942b5a8!2z2K3ZiiDYrdix2KfYoSDYp9mE2KvZgtin2YHZig!5e0!3m2!1sar!2seg!4v1713637077969!5m2!1sar!2seg"
                width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Hira Cultural District end -->
    <!----------------------------------------------------------------------------------------->
    <!-- Add page (Landmarks of Makkah) The Mosque of Aishah, -->

    <div class="Aishah" id="btn-close4">
        <div class="close-land" id="land4"><i class="fa-solid fa-right-from-bracket"></i></div>
        <!--Btn Close (Return Landmark)-->

        <h1 class="text-page text-center py-5 text-white">مسجد عائشة أم المؤمنين 
            (التنعيم )
            At-Tan'eem</h1>
        <div class="img-land-page">
            <img class="img-page p-4" src="/img/aisha.PNG" 
                alt="" srcset="">
        </div>

  <ul dir="rtl">
            <li>
                <p>جامع تاريخي أقيم في المكان الذي أحرمت منه أم المؤمنين عائشة بنت أبي بكر الصديق (رضي الله عنهما) لعمرتها بعد حجة الوداع</p>
            </li>
            <li>
                <p>وكانت عائشة (رضي الله عنها) قد تمنت أن تعود من مكة بحج وعمرة مثل باقي الصحابة والصحابيات، ولكنها لم تستطع أن تأتي بالعمرة للعذر الشرعي الذي أصابها، وبعد إتمام الحج أمر رسول الله (صلى الله عليه وسلم) أخاها أن يأخذها إلى التنعيم (مكان المسجد اليوم) لِتُحرم بعمرةٍ بدلَ التي فاتتها</p>
            </li>
            <li>
                <p>يقع الجامع خارج الحرم، غرب مكة المكرمة، ويبعد مسافة 7 كلم عن المسجد الحرام
                </p>
            </li>
            <li>
                <p>يُحرم منه أهالي مكة للعمرة، لأنه أقرب نقطة خارج الحرم بالنسبة لهم</p>
            </li>
            <li>
                <p>كان أول بناء لهذا المسجد في عهد الخليفة المتوكل (240هـ)، وقد أعيد بناؤه في عهد الملك فهد بن عبدالعزيز (رحمه الله).p>
            </li>
            <li>
                <p>يحرم من التنعيم من أراد تكرار العمرة بعد أخذ الإذن والتصريح عبر تطبيقي اعتمرنا،أو توكلنا.</p>
            </li>
        </ul>
        <!-- location The Mosque of Aishah-->
        <h1 class="text-center text-white pb-3">موقع مسجد عائشة</h1>
        <div class="map mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118825.4097180154!2d39.95314741431199!3d21.456975773876625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c21ddd593aab11%3A0xde102ac69ba37584!2z2YXZjtiz2ZLYrNmQ2K8g2KPZhSDYp9mE2YXYpNmF2YbZitmGINi52Y7Yp9im2ZDYtNmO2KkgKNmF2Y7Ys9mS2KzZkNivINmx2YTYqtmO2ZHZhtmS2LnZkNmK2ZLZhSk!5e0!3m2!1sar!2seg!4v1713637999091!5m2!1sar!2seg"
                width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--The Mosque of Aishah end -->


    <!-- ------------------------------------------------------------------------------------------------- -->

    <!-- Add page (Landmarks of Makkah) Museums -->

    <div class="Museums" id="btn-close5">
        <div class="close-land" id="land5"><i class="fa-solid fa-right-from-bracket"></i></div>
        <!--Btn Close (Return Landmark)-->

        <h1 class="text-page text-center py-5 text-white">المتاحف</h1>
        <div class="img-land-page">
            <img class="img-page mb-4"
                src="/img/musem.PNG" 
                alt="" srcset="">
        </div>
        <p>
           <p dir="rtl">
            تمتلك مكة المكرمة مجموعة مذهلة من المتاحف الآسرة، والتي تلقي الضوء على تاريخها العريق باعتبارها مهد للإسلام وملتقى طرق المسافرين من جميع أرجاء العالم لقرون عديدة. 
        </p>


        <p dir="rtl">
            يعرّف معرض الحرمين الشريفين الزوار على مرحلة البناء، ومراحل كثيرة أخرى من المسجد الحرام في مكة المكرمة، وكذلك المسجد النبوي في المدينة المنورة - ستدهشك الأقواس الرخامية المعقدة، والأبواب الخشبية التي أعيدت إلى حالتها الأصلية، وغيرها الكثير مما تم إنقاذه من المراحل السابقة للمسجدين وإعادته لأصله. وسيكون عليك الحصول على الإذن لزيارة متحف الكسوة المجاور فإنه يستحق الجهد لرؤية الكسوة، قطعة القماش السوداء التي تزن ٦٧٠ كيلوغرامًا وتكسى بها الكعبة، ومصنوعة يدويًا، ومنسوجة بكتابات من خيوط من ذهب وفضة حقيقيين. وفي متحف مكة المكرمة، الذي يقع في قصر الظاهر الفخم، يمكنك التعرف على التاريخ الجاهلي للمنطقة، الذي يعود إلى حقبة الفن الصخري القديم، ورؤية بعض العملات الإسلامية المبكرة لأسر بيزنطية وعباسية وأموية، فضلًا عن نسخ نادرة من القرآن القديم ونصوص أخرى ذات أهمية.
        </p>
        <!-- location Museums-->
        <h1 class="text-center text-white pb-3">موقع المتحف</h1>
        <div class="map mb-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.2977363811838!2d39.87331941114502!3d21.45683120000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c2036d278d68b7%3A0xa3c40e42eb45c067!2sMuseum%20Al%20Wahyu!5e0!3m2!1sar!2seg!4v1713637593756!5m2!1sar!2seg"
                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--Museums end -->








    <!-- section landmark start -->
    <!------------------------------------------------end hero----------------------------------------->
    <h1 class="titleland text-center text-black">معالم مكة</h1>
    <div class="profile-aria">
        <div class="card">
            <div class="card__img"></div>
            <div class="card__title m-4" >جبل النور (غار حراء)</div>
            <div class="card__subtitle">
                <p class="text-center" dir="rtl" >  جبل النور هو المكان الذي أكرمَ اللهُ فيه نبيَّه محمدًا ﷺ بالنبوة ....</p>
            </div>
            <div class="card__wrapper">
                <button class="card__btn" id="show">اقرأ المزيد</button>
            </div>
        </div>


        <div class="card">
            <div class="card__img2"></div>
            <div class="card__title m-4">جبل ثور</div>
            <div class="card__subtitle">
                <p class="text-center" dir="rtl">غار ثور هو الكهف الصغير الذي مكث فيه رسول الله ﷺ  مع أبو بكر الصديق ....</p>
            </div>
            <div class="card__wrapper">
                <button class="card__btn " id="show2">اقرأ المزيد</button>
            </div>
        </div>
        <div class="card">
            <div class="card__img3"></div>
            <div class="card__title m-4">متحف حراء الثقافي</div>
            <div class="card__subtitle">
                <p class="text-center" dir="rtl" >حي حراء الثقافي

                    معلم ثقافي سياحي فريد بجوار جبل حراء بمكة المكرمة  .....</p>
            </div>
            <div class="card__wrapper">
                <button class="card__btn" id="show3">اقرأ المزيد</button>
            </div>
        </div>
        <div class="card">
           <div class="card__img4"></div>
            <div class="card__title m-4">مسجد عائشة (التنعيم) </div>
            <div class="card__subtitle">
                <p class="text-center">جامع تاريخي أقيم في المكان الذي أحرمت منه أم المؤمنين عائشة.....</p>
            </div>
            <div class="card__wrapper">
                <button class="card__btn " id="show4">اقرأ المزيد</button>
            </div>
        </div>
        <div class="card">
            <div class="card__img5"></div>
            <div class="card__title m-4">
                المتاحف</div>
            <div class="card__subtitle">
                <p class="text-center" dir="rtl" >تمتلك مكة المكرمة مجموعة مذهلة من المتاحف الآسرة ....</p>
            </div>
            <div class="card__wrapper">
                <button class="card__btn " id="show5">اقرأ المزيد</button>
            </div>
        </div>
    </div>

    <!---------------!end section cards ---------------------->



    <script src="script.js"></script>

    <script src="/js/main.js"></script>
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(51.508742, -0.120850),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>

</html>