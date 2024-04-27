<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- to be responsive in any device-  phone labtob 100%-->
  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
  <style>
    body {
      font-family: Gotham-Regular, ZaridSans-Regular, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #F6F5EF;
    }

    .collapsible-container {
      margin-top: 10px;
    }

    .text-container {
      color: rgba(0, 0, 0, 0.829);
    }
   header{
    position: fixed;
    top: 0;
  }
  .container-icon{
    margin-top: 100px;
  }

    .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 9999;
}

.overlay-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}
@media (max-width: 600px) {
  .overlay-content{
    width: 90%;
  }

}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
}

</style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-------------bootstrap icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
  <header>
    <div class="header">
        <img class="lgo" src="/img/vecteezy_mecca-for-hajj_.jpg" alt="logo">
    </div>
    <nav>

        <li><a href="./index.html" class="active">الصفحة الرئيسية </a></li>
        <li><a href="./landmark.html">المعالم</a></li>
        <li><a href="./Hajj.html">الحج </a></li>
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

  
    <!-- Message  -->
  <div id="overlay" class="overlay">
    <div class="overlay-content">
        <span class="close-btn" onclick="closeOverlay()">×</span>
        <h5 style="font-size: 30px;">ملاحظات مهمة ! <i class="fa-solid fa-thumbtack"></i></h5>
        <ul class="listr"dir="rtl">
                <li><h6>
                    <strong> إذا لم يكن لديك إنترنت</strong>
                   قم بتحميل هذا الملف يحتوي على كافة
                    إرشادات الحج والعمرة ومعالم مكة
                    </h6> 
              <a href="./src/pdf/Mecca Visitors Guidelines.pdf" class="download-button" download><i class="fa-regular fa-file-pdf"></i>
                  تحميل هذا الملف</a>
                </li>
                <li> <h6><strong>  رقم الطوارئ</strong> 
(911) إذا حدث لك أي شيء، فلا تتردد في الاتصال برقم الطوارئ
                </h6></li>
                <li>
                   <h6><strong>احمل بطاقتك في كل مكان! </strong>
يجب على الحاج أن يحمل معه في جميع الأوقات بطاقة البيانات الشخصية الخاصة به
التي سلمته له مؤسسة الطوافة الوطنية
                    </h6></li>
                <li><h6><strong>القواعد والتعليمات</strong> 
 !اتبع التعليمات والقواعد والأنظمة 
              </h6> </li>
              </ul>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'block';
});

function closeOverlay() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'none';
}
</script>





  <!-----end footer--->
  <section>

    <div class="container-icon">
      <ul class="icon-2">
        <li><a href="#" id="vir"><i class=" bi bi-stopwatch-fill "></i> فضل العمرة & ووقت الأداء</a></li>
        <li><a href="#" id="IHR"><i class="fa-solid fa-door-open"></i> الإحرام</a></li>
        <li><a href="#" id="CLOTH"><i class="fa-regular fa-circle-xmark"></i> ملابس الإحرام & والمحظورات</a></li>
        <li><a href="#" id="DETER"><i class="fa-solid fa-location-crosshairs"></i> حدد مكان الميقات</a></li>
        <li><a href="#" id="TAWAF"><i class="fa-solid fa-users-line"></i> الطواف &amp;السعي</a></li>
      </ul>
    </div>
 
    <!--------------------end Icon lis -->

    <script src="script.js"></script> <!-- ملف JavaScript -->
    <!--------------------------------------------------------------------->
    <div class="collapsible-container" >

      <button class="collapsible" id="collapsible-btn"><strong> فضل العمرة & ووقت الأداء</strong></button>
      <div class="content iebARE">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <br>
              <p dir="rtl">
                <strong> العمرة هي التعبدُ للهِ بالإحرام والطواف بالبيت والسعي بين الصفا والمروة والحلق أو التقصير</strong>

              </p>
              <strong> ولها مكانة وفضائل عظيمة، ومن ذلك</strong>

              <br>
              <ul class="listr"dir="rtl">
                <li>
                  <strong> أن الله قرنَها بالحج، وأمر بإتمامها وأدائها على أكمل وجهٍ ابتغاء وجه الله، قال تعالى:
                     </strong>  {وأتموا الحج والعمرة لله}.

                </li>

                <li>
                  <strong> أنها تطهرُ من الذنوب، وتقلل من الفقر والحاجة:  </strong>  قال صلى اللهُ عليه وسلم: "تَابِعُوا بَيْنَ الْحَجِّ وَالْعُمْرَةِ فَإِنَّهُمَا يَنْفِيَانِ الْفَقْرَ وَالذُّنُوبَ، كَمَا يَنْفِي الْكِيرُ خَبَثَ الْحَدِيدِ".

                </li>

                <li>
                  <strong>العمرة من مكفرات الذنوب: </strong> قال صلى اللهُ عليه وسلم: "الْعُمْرَةُ إِلَى الْعُمْرَةِ كَفَّارَةٌ لِمَا بَيْنَهُمَا".

                </li>

                <li>
                  <strong> خطوات الطواف تزيد الحسنات وتغفر السيئات:</strong>
                 فقد قال صلى الله عليه وسلم في فضل الطواف بالبيت الحرام: "من طاف بالبيت، لم يرفع قدماً ولم يضع أخرى، إلا كتب الله له حسنة، وحط عنه بها خطيئة، ورفع له بها درجة"
                </li>
                <li>

                  <strong> السعي بين الصفا والمروة سببٌ لشكر الله لعبده وإثابته لعبده:</strong>  فقد أخبر الله بعد ذكر السعي بين الصفا والمروة أنه عليمٌ بعمل عبده، وسيشكر له صنيعَه وحُسنَ عمله، فقال: {ومن تطوع خيراً فإن الله شاكر عليم}

                </li>
              </ul>
              <strong> العمرة في رمضان</strong>
              <p> للعُمْرةِ في كل وقت فضائل عظيمة، فهي من مكفرات الذنوب كما أخبر صلى الله عليه وسلم، ولكن لها في رمضان فضل خاص</p>

              <strong> أجر العمرة في رمضان :</strong>

              <ul class="listr" dir="rtl">

                <li>قال النبي صلى اللهُ عليه وسلم: "فإنَّ عُمْرَةً في رَمَضَانَ تَقْضِي حَجَّةً"، أو قال: "حجة معي"

                <li> وهذا الفضل شامل لكل أيام وليالي رمضان، من بداية دخول الشهر إلى ليلة عيد الفطر المبارك</li>
                <li> على المعتمر أن يؤدي عمرته في الوقت المعطى له حسب حجوزاته في التطبيقات الرسمية للعمرة</li>

              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="/img/%D8%B9%D9%85%D8%B1%D8%A91.PNG" alt="Description of the image" class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">

            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/rS8LfvJ4sQQ?si=VvsFs49xOAUc6Xx0" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
          </div>
          </div>
        </div>
      </div>
      <!-----------------------------------------End section virute ---------------------->
      <button class=" collapsible" id="collapsible-btn2"><strong> الإحرام</strong></button>
      <div class="content iebARE">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p dir="rtl">
                <strong>الإحرام عبادة عظيمة تبدأ بها نسك</strong>
              </p>
              <p1 dir="rtl">
                يشرع الاشتراط في الإحرام للحاج أو المعتمر إن خاف ألّا يكمل نسكه لأي سبب
                  
                الإحرام هو الدخول في عبادة الحج أو العمرة، ويكون ذلك بأن تنوي الدخول في العمرة أو الحج، وتبدأ بالتلبية، وهو أول ركن من أركانها

                في الإحرام يستوي جميع الناس بلباسهم وهيئتهم لا تفرقهم الألوان ولا الماديات، وينطلقون بعد إحرامهم لأداء مناسكهم متواضعين لله، يدعونه ويتضرعون إليه

الإحرام هو أول خطوةٍ في رحلتك الإيمانية، وهو عملٌ قلبيٌّ يدخل به الحاج أو المعتمر في عبادةٍ عظيمةٍ، أمر اللهُ بأن نخلص فيها نياتنا ونقيمها لوجهه سبحانه على أكمل وجه، كما قال تعالى: {وَأَتِمُّوا الْحَجَّ وَالْعُمْرَةَ لِلَّهِ}.
              </p1>
              <br>

              <p dir="rtl">
                <strong>ماهو الإحرام؟</strong>
              </p>


              <ul class="listr li"dir="rtl">
                <li>
                 الإحرام هو الدخول في عبادة الحج أو العمرة، ويكون ذلك بأن تنوي الدخول في العمرة أو الحج، وتبدأ بالتلبية، وهو أول ركن من أركانهما.
                </li>

                <li>
                  وهو أول خطوة في رحلتك الإيمانية، فهو عمل قلبي تدخل به أخي الحاج أو المعتمر في عبادة عظيمة أمر الله بأن نخلص فيها نياتنا، ونقيمها لوجهه سبحانه وتعالى على أكمل وجه، كما قال تعالى: {وأتموا الحج والعمرة لله}.

                </li>

                <li>
                  وبمجرد هذه النية فإنه تمتنع عليك أشياء كانت مُباحةً قبل الإحرام؛ كالجماع، وحلق الرأس، وقص الأظافر، وتغطية الرأس ولبس المَخيط للرجل، وغيرها.

                </li>

                <li>
                  فإذا أردت الدخول في عبادة العمرة فإنك تمتنع عن محظورات الإحرام، وتنوي الدخول في العمرة، وتقول: لبيك عمرةً، ثم تبدأ بالتلبية، وإذا أردت الدخول في الحج فإنك تنوي الدخول في الحج، وتقول: لبيك حجًّا، ثم تبدأ بالتلبية
                </li>
              
              </ul>
              <strong dir="rtl"> الإشتراط في الإحرام</strong>

              <p> ديننا دين يُسرٍ كما قال الله تعالى: {يريد الله بكم اليسر ولا يريد بكم العسر}، ومن مظاهر هذا التيسير على المسلم في أداء العبادات؛ مراعاة الظروف التي قد تمنعه من إكمال نسكه الذي نواه من حج أو عمرة. فيشرع له إن خاف ألَّا يكمل نسكه لأي سبب كان أن يشترطَ في إحرامه

             إذا خشي الحاج من عدم القدرة على إتمام مناسك الحج أو العمرة لأي سبب من الأسباب، فإنه
                 ويجوز أن يشترط الشرط أثناء الإحرام
              <strong dir="rtl"> كيف يشترط الحاج أو المعتمر؟

</strong>
              <p dir="rtl">
                إذا خاف الحاج أو المعتمر ألَّا يتمكن من إتمام نسكه لمرض، أو عذر شرعي، أو سبب خارج عن إرادته، فيشرع له الاشتراط في النية، وذلك بأن يقول بعد ذكر نسكه، بعد قوله: "لبيك عمرة" أو "لبيك حجًّا": "فإن حبسني حابسٌ فمحلي حيث حبستني"، يقولها بأي لغة يحسِنها، فإذا قالها واشترط، وحصل أمرٌ منعه من إتمام النسك، جاز له الخروج من الإحرام، والتوقف عن إكمال النسك الذي أحرم لأجله، وليس عليه شيء.
              </p>
              <p dir="rtl">

                <strong> من الذي يشترط? </strong>
              </p>

              <b> يشترط كل من خشي على نفسه عدم إتمام النسك لسبب خارج عن إرادته، مثل:</b>
              <ul class="listr li"dir="rtl">

                <li>
                  المرأة التي تخاف من العذر الشرعي الذي يمنعها من إتمام نسكها
                </li>
                <li>

                  المريض الذي يخشى ألَّا يقدر على إتمام نسكه
                </li>
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
              <img src="/img/%D8%B9%D9%85%D8%B1%D8%A92.PNG" alt="Description of the image" class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/4x4K5GF-5CU?si=znmAs8Y47tje9BmW" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          
          </div>
          </div>
          
    
        
      </div>
      <!---------------------------------------------------End section Ihram---------------------------------->


      <button class=" collapsible" id="collapsible-btn3"><strong> ملابس الإحرام & والمحظورات</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong dir="rtl">ما هو لباس الإحرام للرجل

                </strong>
              </p>

              <p dir="rtl">

                الحج والعمرة لحظاتٌ فريدة يتخلى فيها المحرمون عن أبَّهتِهم وأموالهم، ويستوي فيها جميع الناس في لباسهم وهيئتهم، لا تفرقهم الألوان ولا الماديات، ويقفون في صعيد واحد يدعون الله، ويتضرعون إليه، فهو سبحانه الغنيُّ وكل عباده فقراء إليه.
              </p>
              
                <strong dir="rtl">ماذا يلبس من أراد الإحرام؟</strong>
              
              <p>
                يجب على المُحرم أن يخلع ملابسه المعتادة، فيزيل عنه:
              <ul class="listr" dir="rtl">

                <li>أغطية الرأس، كالقبعة والعمامة وغيرها </li>

                <li>اللباس المعتاد المفصل للجسم، مثل: القميص، والبنطلون، والجوربين، والقفازين وما يشبههما </li>
                <li>الأحذية المحيطة بكامل القدم مع الكعبين (انظر محظورات الإحرام)</li>
                <li>ويلبس إزاراً يُحيط بأسفل بدنه، ورداءً يغطي أعلاه</li>
                <li>ويشرع أن يكون أبيض اللون</li>
                <li>ويلبس نعالاً مناسباً لا يغطي كامل القدم</li>
              </ul>


              <strong dir="rtl"> ويستطيع المحرم استخدام ما يلي:</strong>



              <ul class="listr" dir="rtl">


                <li>المشبَك أو الحزام الذي يلفه على وسطه ليُمسك بإزاره عن السقوط، ويضع فيه متاعه وهاتفه وماله </li>
                <li>الساعات والخواتم </li>
                <li>لواصق ولفائف الجروح والإصابات</li>
                <li>حمل المظلات الشمسية وكل غطاء للرأس غير ملاصق له </li>
              </ul>


              <strong dir="rtl"> كيف يلبس المحرم الإحرام؟</strong>

              <strong dir="rtl"> إحرام الرجل يكون بإزارٍ يغطي أسفل جسده، ورداءٍ يغطي أعلى الجسد. وفي بعض مناطق المسلمين اعتاد الناس على لبسها بطريقة مناسبة لأنها من لباسهم الشعبي،:
                </strong> : وفي المقابل يجد بعض الناس صعوبة كبيرة في لبس الإحرام بطريقة مناسبة تحقق له أن يكون
              <ul class="listr" dir="rtl">


                <li>لباسا ساترًا </li>
                <li>مريحًا في الحركة ولايعيق لابسه </li>
                <li>محكمًا لا يرتخي ويسقط </li>

              </ul>
                     <p>
                <strong dir="rtl"> ما هو لباس الإحرام للمرأة

                </strong>
              </p>

              <p dir="rtl">

               والمرأة عند إحرامها مخيرة فيما تلبسه، فتحرم فيما شاءت من الثياب والألبسة بألوانها، على أن تكون
              </p>
           
              <ul class="listr"dir="rtl">

                <li>فضفاضة، تستر، ولا تعُوق الحركة</li>

                <li>ليس فيها زينة ظاهرة تفتن بها الرجال </li>
                <li>الأحذية المحيطة بكامل القدم مع الكعبين (انظر محظورات الإحرام)</li>
              </ul>


              <strong dir="rtl"> محظورات الإحرام للمرأة:</strong>

  <strong dir="rtl"> لا تمنع الإحرام عند المرأة الا مايلي :</strong>

              <ul class="listr"dir="rtl">


                <li>تغطية الوجه ولبس النقاب، وإذا كانت بحضرة أجانب فلها أن تغطي وجهها </li>
                <li>لبس القفازين </li>
                
              </ul>
                <strong dir="rtl">وليس من محظورات الإحرام </strong>
                              <ul class="listr" dir="rtl">

                <li>لُبس النظارة والخواتم والساعات </li>
                <li>تضميد الجراح باللاصق أو اللفافة</li>
                <li>تغطية وجه المرأة عند خوف الفتنة </li>
                </ul>
                       <p><strong> ملحوظة</strong></p>

                <strong dir="rtl"> على المرأة أن تختار اللباس الساتر الواسع الفضفاض، الذي لا يزيد الحرارة عليها في مواسم الصيف الحارة</strong>
                <br>
                <br>
                <strong dir="rtl">
             محظورات الإحرام</strong>
                      <ul class="listr" dir="rtl">
 
                هي أمور مباحة في الأصل، يتعبد لله عبادُه بأن يمتنعوا عنها حالَ إحرامهم، لإظهار افتقارهم واحتياجهم لخالقهم ومولاهُم
                    

                <li>الجماع: فيحرم على الرجل أن يأتي زوجته وهو محرم، ويحرم عليها أن تمكنه من نفسها وهي محرمة
عقد النكاح والزواج </li>
                <li>قتل الصيد</li>
                <li>حلق الرأس وتقليم الأظافر </li>

                <li>التطيب </li>
                </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
               <img src="/img/%D8%B9%D9%85%D8%B1%D8%A94.PNG"  class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/hdl0aTClcO4?si=JIKxK3uLHFpphUJe" title="YouTube video player" frameborder="0"  
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Q2cq4znH_qI?si=hPukxE6ZRqF6wGgj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          
          </div>
          </div>
        </div>
      
      <!------------------------------------------end section ihram clothing------------------------------>

      <button class=" collapsible" id="collapsible-btn4"><strong> حدد مكان الميقات</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong dir="rtl">أنواع الناس بالنسبة للمواقيت</strong>
                  
              </p>
                <strong dir="rtl">لماذا هناك مواقع خاصة للإحرام (المواقيت)؟</strong>
              <strong dir="rtl">

               
             تعظيمًا لبيت الله الحرام ولشعائر الحج والعمرة؛ فقد حدَّد رسول الله ﷺ أماكنَ قبل الوصول إلى مكَّة يُحرم منها القادمون للحجِّ والعمرة، ويبدؤون تلبيتهم منها قبل وصولهم لجَنَبات الحرم.
              </strong>
                <strong dir="rtl">قال صلى الله عليه وسلم بعد أن حددها: "هن لهن ولمن أتى عليهن من غير أهلهن ممن أراد الحج والعمرة". وتختلف هذه المواقع في بُعدها وقربها بحسب جهة القدوم. ويَلزَم الحاجَّ أو المعتمر الذي يَسكُن بعد تلك المواقيت أن يُحرِم منها أو ما يُحاذيها ويوازيها من طريقه، سواء كان بالطائرة أو من طريق البرِّ، إذا أراد الحج والعمرة، ولا يتجاوزها بدون إحرام:</strong>
              
              <p dir="rtl">
                أنواع الناس بالنسبة للمواقيت شُرِعت المواقيت تعظيمًا لبيت الله الحرام، وتختلف هذه المواقيت بحسب مكان من ينوي الحجَّ أو العمرة: هل مكانهُ بعد المواقيت، أو بين مكة وبين المواقيت، أو في مكَّةَ نفسِها؟ وسنوضح ذلك فيما يلي:
              </p>
              <ul class="listr" dir="rtl">
                <strong> أنواع الناس بالنسبة للمواقيت</strong>
         

                <strong> من كان في مكَّةَ:</strong>
                <li>
                  
يُحرم للعُمرة من أقرب مكان خارجَ الحرم؛ مثل مسجد أمِّ المؤمنين عائشة في التنعيم، ويُحرم للحجِّ من مكانه.
                </li>

                <strong> من كان مكانه بين مكَّة والمواقيت: </strong>
                <li>
                          
يُحرم من مكانه للحجِّ والعُمرة - كأهْلِ جدَّةَ، وبَحْرَة.
                </li>
                  <li> 
                  <strong>                
من كان مكانه بعد المواقيت:
                  </strong>

                  
يَلزَمه الإحرام من المواقيت الخمسة أو ما يُحاذيها للحجِّ أو العمرة.
                  </li>
              </ul>

<p dir="rtl"> ويَلزَم الحاجَّ أو الزائر الذي يَسكُن بعيدًا عن مكَّةَ أن يُحرِم من هذه المواقيت أو ما يُحاذيها ويوازيها من طريقه، سواء كان بالطائرة أو من طريق البرِّ، ولا يتجاوزها بدون إحرام.</p>
              <p dir="rtl"><strong >المواقيت المكانية للإحرام</strong></p>

            المَواقيت هي الأماكن التي يُحرم منها الحاج أو المعتمر، والتي لا يجوز لمن يريد الحج أو العمرة أن يتجاوزها إلا محرِماً، وهي:



              <ul class="listr"dir="rtl">


                
                <li>
                  <strong> ذو الحُلَيْفة: ميقات أهل المدينة، ويَبعُد (٤٢٠) كلم عن مكَّة</strong> 
                </li>
                <li>
                  <strong> الجُحْفة: ميقات أهل الشام ومَن في طريقهم، وتَبعُد (١٨٧) كلم عن مكَّة، ويُحرم الناس اليوم من رابغ التي تبعد عن مكة (٢٠٤) كلم </strong> 
                </li>
                <li>
                  <strong> قَرْن المنازل: ميقات أهل نجد ومن في طريقهم، ويَبعُد (٩٤) كلم عن مكَّة</strong>
                 
                </li>
                <li>
                  <strong> يَلَمْلَمُ: ميقات أهل اليمن ومن في طريقهم، وتَبعُد (١١٥) كلم عن مكَّةَ</strong> 
                </li>
                   <li>
                  <strong>  ذات عِرْق: ميقات أهل العراق ومن في طريقهم، وتَبعُد (٩٢) كلم عن مكَّة
                       </strong>
                      </li>
                  
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
               <img src="/img/%D8%B9%D9%85%D8%B1%D8%A95.PNG"  class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>

            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
src="https://www.youtube.com/embed/CcyuRgacoww?si=mKpUj_-HWUDaxOhi" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
          </div>
          </div>
          
        </div>
      </div>
      <!---------------------------------------------------End sectiondeterming your miqats---------------------------------->


      <button class=" collapsible" id="collapsible-btn5"><strong> السعي & الطواف</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p dir="rtl">
                <strong>الطواف والسعي</strong>
              </p>
              <p>

               (الطواف)
الطواف ركن من أركان العمرة وهو عبادة نتواضع فيها، بتوجيه قلوبنا وأجسادنا إلى الله، للاعتراف بحاجاتنا إلى الله تعالى. وفي هذه العبادة يطوف العبد ببيت الله تعالى، ويعبد رب البيت، ويتقرب إليه كما شرع.

<strong> وصف الطواف</strong>
يبدأ الحجاج أو المعتمرون الطواف من الركن الذي يقع فيه الحجر الأسود. وفي الطوابق العليا توجد علامة خضراء تشير إلى هذا الوضع.
وينبغي للحجاج أو المعتمرين أن يكبروا في كل شوط عندما يكونون موازيين للحجر الأسود، لكن لا يشترط أن يتم التكبير بالضبط في هذه المرحلة. وليس من الصحيح أنه لا يصح التكبير قبله أو بعده؛ بل يمكن للمرء أن يفعل التكبير في مكان ما بالقرب من هذه النقطة. لذلك، إذا رأى الحاج أنه قد تجاوز الحجر الأسود بالفعل، فلا يزال بإمكانه التكبير.
عند التكبير يشير الحاج بيده إلى الحجر الأسود، ثم يبدأ بالطواف والكعبة عن يساره (عكس عقارب الساعة).
تقبيل الحجر الأسود سنة لمن استطاع إليه سبيلا، لكن ذلك يكون صعبا في أيام موسم الحج المزدحمة.
ويستمر في الطواف يدعو الله ويتضرع إليه.
وإذا وصل إلى الركن اليماني الذي قبل الحجر الأسود يستحب المسح عليه إن أمكن. خلال موسم الحج سيكون هذا الأمر صعبا.
وتنتهي الجولة عند زاوية الحجر الأسود الذي يمثل مكان البداية. وهنا يشير بيده ويكبر.
يكرر المرء هذا حتى الانتهاء من سبع جولات.

              </p>
                <strong dir="rtl">تعليمات الطواف</strong>
                <p>
                <strong>
لطواف آمن ومثالي:
                    </strong>
                </p>
             
              <ul class="listr" dir="rtl">

                <li>
                 السير دون توقف في باحة الطواف منعاً للتزاحم 
                </li>
                
                <li>
                  لا ترجع عن اتجاه الطواف مهما كانت الأسباب
                </li>

              <li>
                 عبارة الله أكبر منقوشة على كسوة الكعبة فوق الحجر الأسود تشير إلى زاوية الحجر الأسود.

                </li>
            هناك إشارة ضوئية خضراء في مسارات الطواف بالطابق العلوي تشير إلى محاذاة الحجر الأسود
                  <li>
           يجب على الزائرين الذين يطوفون النافلة اتباع التعليمات والضوابط الخاصة بأوقات وأماكن الطواف، وإعطاء الفرصة للحجاج والمعتمرين والأولوية للحجاج والمعتمرين

                      </li>

              </ul>
<p> عند الطواف حول الكعبة، تجنب الأماكن المزدحمة. المساعدة على تقليل الزحام من خلال الدخول والخروج الصحيح من المطاف (منطقة الطواف) والصلاة بعيدا عن الطواف</p>

              <p><strong> عند الطواف حول الكعبة، تجنب الأماكن المزدحمة. المساعدة على تقليل الزحام من خلال الدخول والخروج الصحيح من المطاف (منطقة الطواف) والصلاة بعيدا عن الطواف</strong></p>

             ركعتا الطواف


              <ul class="listr" dir="rtl">
                <li>
                  بعد الانتهاء من الطواف، من السنة أن يصلي ركعتين. وهذه سنة مؤكدة لكل من طاف بالكعبة حجاً أو عمرة، أو طاف طوافاً مطلقاً.
                </li>
                <li>
                  يشرع قراءة سورة الكافرون في الركعة الأولى، وسورة الإخلاص في الثانية. لأن الطواف رمز التوحيد وعبادة الله وحده لا شريك له؛ ويشرع للإنسان أن يعلن ذلك في السورة المقروءة التي يقرأها عند الانتهاء من الطواف.
                </li>
                <li>
                إذا لم يشق عليه فيسن أن يصلي ركعتين خلف مقام إبراهيم، بحيث يكون المقام بينه وبين الكعبة. يجب على المرء أن يصلي حيث ينصح رجال الأمن بذلك. ويمكن أداء ركعتي الطواف في أي مكان من المسجد الحرام، لكن الطواف أحق بالمكان الذي حول الكعبة من المصلين.
                </li>
                </ul> 
                <p dir="rtl">
                <strong>السعي </strong>
              </p>
                
                <p dir="rtl">
                <strong>السعي بين الصفا والمروة</strong>
              </p>

              <p1 dir="rtl">

             <strong>     ما هما الصفا والمروة؟     </strong>  
الصفا والمروة جبلان صغيران كانت تصعد عليهما هاجَرُ أم إسماعيل عليه السلام بحثاً عن الطعام أو الماء.
              </p1>
                
              <br>
                <p dir="rtl">
                <strong>       الصفا</strong>
جبل صغير يبتدئ منه السعي، وما تزال صخور الجبل ظاهرة في الدور الأرضي للمسعى.
              </p>
                <p dir="rtl">
                    <strong>        المروى</strong>
جبل صغير ينتهي عنده شوط السعي
              </p>
             

              <p dir="rtl">
                <strong>السعي شريعة عظيمة</strong>
              </p>


              <ul class="listr" dir="rtl">
                <li>
                  السعي بين الصفا والمروة من شعائر الحج والعمرة، قال تعالى: {إِنَّ الصَّفَا وَالْمَرْوَةَ مِن شَعَائِرِ اللَّهِ فمن حج البيت أو اعتمر فلا جناح عليه أن يطوف بهما}.
                </li>

                <li>
               ويتعبد المعتمر والحاج ربه بقطع المسافة بين الصفا والمروة ٧ مرات، كما فعل رسوله الكريم صلى الله عليه وسلم.

                </li>

                 <p>
                <strong>بداية السعي ونهايته</strong>
              </p>
                <li>
                  تبدأ سعيك من الصفا متجهاً إلى المروة، فإذا وصلتها كنت قد أتممت شوطاً، وإذا رجعت إلى الصفا أتممت الثاني، وهكذا حتى تُتِم الأشواط السبعة عند المروة.
                </li>

                       <p>
                <strong>الدعاء عند أول الصفا والمروة</strong>
              </p>
                <li>
                 عند وصولك أولَ الصفا أو المروة في بداية كل شوط يُسن لك أن ترفع يديك متجهاً للقبلة، وتدعو الله وتكبره قبل بداية الشوط الجديد
                </li>
                   <p>
                <strong>العلمان الأخضران</strong>
              </p>
                <li>
                 ويستحب للرجال القادرينَ الهرولةُ بين العلمين الأخضرين، كما فعل رسول الله صلى الله عليه وسلم
                </li>
                  
                             <p>
                <strong> الدعاء في السعي</strong>
              </p>

                <li>
                ينبغي للساعي أن يملأ كاملَ وقت سعيه بذكر الله ودعائه أو قراءة القرآن
                </li>
                                               <p>
                <strong> دعاء رسول الله صلى الله عليه وسلم في السعي</strong>
              </p>
                <li>
               كان أول وصوله للصفا بعد الطواف يقرأ قوله تعالى: {إِنَّ ٱلصَّفَا وَٱلْمَرْوَةَ مِن شَعَآئِرِ ٱللَّه}، ويقول: أبدأ بما بدأ الله به
                </li>
                  
                       <li>
          وكان إذا صعد الصفا أو المروة يتجه للقبلة، ويقول: "الله أكبر الله أكبر الله أكبر، لا إلهَ إلَّا اللهُ وَحْدَه لا شريكَ له، له المُلْك وله الحَمْدُ، وهو على كلِّ شيءٍ قدير، لا إلهَ إلَّا اللهُ وحدَه، أنجَزَ وَعْدَه، ونصَرَ عَبْدَه، وهَزَمَ الأحزابَ وَحْدَه"، ثم يدعو بما شاء، ثم يعيدها، ثم يدعو بما شاء، ثم يعيدها، ثم ينطلق في سعيه
                </li>
                  <p>ينبغي للساعي ألَّا يتوقف للدعاء في مكان يعطل السيرَ ويسبب الزحام، وعليه التقيد بإرشادات رجال الأمن والتنظيم في الحرم.</p>
                  
                 
              </ul>
              <strong> وصايا للسعي</strong>

              <ul class="listr"dir="rtl">

                <li>
                  عند انتهائك من الطواف ستجد داخل المسجد الحرام لوحاتٍ إرشادية تدلك إلى المسعى، وتشير إلى الصفا حيث مكان بداية السعي
                </li>
                <li>

      ننصحك بالتوجه إلى المسعى في الأدوار العلوية، حتى تتجنب زحام الدور الأرضي للمسعى، ولكي تخفِّف على نفسك وعلى إخوانك المسلمين
                </li>
                       <li>

             ينبغي للساعي أن يملأ كاملَ وقت سعيهِ بذكر الله ودعائه أو قراءة القرآن، وعليه ألَّا يتوقف للدعاء في مكانٍ يعطل السيرَ ويسبب الزحام، وأن يتقيد بإرشادات رجال الأمن والتنظيم في الحرم
                </li>
                      <li>

            الإسراع أثناء السعي للرجال يكون بين العلمين الأخضرين فقط، وليس طوال مدة السعي
                </li>
                    <li>
اذا أقيمت الصلاة فإن الساعي يصلي مع الجماعة، ثم يكمل سعيَه من المكان الذي توقف فيه
                </li>
                    <li>

             إذا كنت مريضًا بالسكري فابدأ بالسعي بعد أخذ العلاج والغذاء الكافيَين، وحافظ على قدميك من كل ما يؤذيهما، وعليك التوقف المؤقت عند الإحساس بنقص مستوى السكر
                </li>
                  <li>يمكنك استخدام العربات إذا أحسست بالمرض أو الإعياء</li>
                  
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="/img/wow.PNG"   class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
                src="https://www.youtube.com/embed/qBVrxJK2rpQ?si=3zBmqSh24X-5pLdx" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
              
                  <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
                src="https://www.youtube.com/embed/ozOsgPectV0?si=0OBFzpaVbJSg16dV" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div> 
              
         
          </div>
          </div>
    </div>
    <!-------------------------------------------------End section Tawaf $ Saie----------------------------->
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      }

      window.onload = function() {
  const collapsibleButton = document.getElementById('collapsible-btn');
  const collapsibleContent = document.querySelector('.content');

  // نفذ النقر تلقائيًا
  collapsibleButton.click();

      }
   
     vir.onclick = function(){
      
     }




    //  event1
     document.addEventListener("DOMContentLoaded", function() {
  // استماع لحدث النقر على الرابط
  document.getElementById("vir").addEventListener("click", function(event) {
    event.preventDefault(); // منع السلوك الافتراضي للرابط
    
    // تنفيذ النقر على الزر
    document.getElementById("collapsible-btn").click();
  });
});


    //  event2
     document.addEventListener("DOMContentLoaded", function() {
  // استماع لحدث النقر على الرابط
  document.getElementById("IHR").addEventListener("click", function(event) {
    event.preventDefault(); // منع السلوك الافتراضي للرابط
    
    // تنفيذ النقر على الزر
    document.getElementById("collapsible-btn2").click();
  });
});
    //  event3
     document.addEventListener("DOMContentLoaded", function() {
  // استماع لحدث النقر على الرابط
  document.getElementById("CLOTH").addEventListener("click", function(event) {
    event.preventDefault(); // منع السلوك الافتراضي للرابط
    
    // تنفيذ النقر على الزر
    document.getElementById("collapsible-btn3").click();
  });
});
    //  event4
     document.addEventListener("DOMContentLoaded", function() {
  // استماع لحدث النقر على الرابط
  document.getElementById("DETER").addEventListener("click", function(event) {
    event.preventDefault(); // منع السلوك الافتراضي للرابط
    
    // تنفيذ النقر على الزر
    document.getElementById("collapsible-btn4").click();
  });
});
    //  event5
     document.addEventListener("DOMContentLoaded", function() {
  // استماع لحدث النقر على الرابط
  document.getElementById("TAWAF").addEventListener("click", function(event) {
    event.preventDefault(); // منع السلوك الافتراضي للرابط
    
    // تنفيذ النقر على الزر
    document.getElementById("collapsible-btn5").click();
  });
});

     
    </script>
    <!----------------------------------------------End Section collapse---------------------------------------------->

    <script src="/js/main.js"></script> <!--Main js App (menu)-->
  </section>






</body>