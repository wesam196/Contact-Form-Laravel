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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-------------bootstrap icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



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

    



  </style>
</head>

<body>
@include('layouts.arheader')
<style>
  header{
    position: fixed;
    top: 0;
  }
  .container-icon{
    margin-top: 100px;
  }
  @media (max-width: 600px) {
  .overlay-content{
    width: 90%;
  }

}
</style>
  
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
              <a href="/pdf/Mecca Visitors Guidelines.pdf" class="download-button" download><i class="fa-regular fa-file-pdf"></i>
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
<style>
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

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
}

</style>
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
        <li><a href="#" id="vir">   شروط الحج  <i class="fa-solid fa-list-check"></i></a></li>
        <li><a href="#" id="IHR">  أركان وواجبات الحج <i class="fa-solid fa-file-signature"></i></a></li>
        <li><a href="#" id="DETER"> مواقيت الحج  <i class="fa-solid fa-location-crosshairs"></i></a></li>
        <li><a href="#" id="TAWAF"> أنواع النسك <i class="fa-solid fa-users-line"> </i></a></li>
      </ul>
    </div>
 
    <!--------------------end Icon lis -->

    <script src="js/script.js"></script> <!-- ملف JavaScript -->
    <!--------------------------------------------------------------------->
    <div class="collapsible-container">

      <button class="collapsible" id="collapsible-btn"><strong> شروط الحج</strong></button>

      <div class="content iebARE">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
          

              
              <strong dir="rtl">
                  
                  الحج، الرحلة الدينية إلى بيت الله الحرام في مكة المكرمة، هو أحد أركان الإسلام الأساسية، مفروضة على المسلمين بأمر من الله في القرآن، وأكد عليها النبي محمد (صلى الله عليه وسلم). يمثل الحج رحلة روحية هامة للمسلمين في جميع أنحاء العالم، رمزاً للوحدة والتفاني والخضوع لإرادة الله.
                  <br>
                  <br>
                  
                  حج بيت الله الحرام ركن من أركان الإسلام لقوله تعالى " ولله على الناس حج البيت من استطاع إليه سبيلا " ، وقوله صلى الله عليه وسلم : ( بني الإسلام على خمس : شهادة أن لا إله إلا الله وأن محمداً رسول الله وإقام الصلاة وإيتاء الزكاة وصوم رمضان وحج البيت من استطاع إليه سبيلا ) وقد فرض في السنة التاسعة للهجرة .</strong>

              <br>
               <strong dir="rtl">  وضحت التعاليم الإسلامية الشروط التي يجب تحقيقها لأداء فريضة الحج:</strong>
                <br>
               
              <ul class="listr"dir="rtl">
                <li>
                    
                    <strong> 
                        الإسلام  ، حيث أن غير المسلم لا يجب عليه الحج ، ولو أتى به لم يصح
</strong>
                </li>

                <li>
                    <strong>  
                    التكليف  ، وهو أن يكون المسلم بالغًا عاقلاً
</strong>
                </li>

                <li>
                    <strong> الحرية   حيث أنه لا يجب الحج على العبد المملوك لأنه غير مستطيع ، لكن لو حج صح منه ، ويلزمه أن يحج حجة الإسلام بعد حريته
                </strong>
                        </li>

                <li>
                    <strong> الاستطاعة   ، وتكون في المال والبدن ، بأن يكونَ عنده مال يتمكن به من الحج ، ويكون أيضاً صحيح البدن غير عاجز عن أداء المناسك ، فإن كان المكلف 
                    
                        غير قادرٍ لا ببدنه ولا بماله ففي هذه الحال لا يجب الحج عليه ، لعدم تحقق شرط الاستطاعة
                </strong>
                        </li>
                <li>

                  <strong>   وجود المحرم للمرأة</strong>
                      

                </li>
              </ul>
                <h4 dir="rtl">ويشترط أن يكون الحاج عالماً بمناسكه بالترتيب. مناسك الحج هي الأعمال التي يقوم بها الحاج المسلم قبل الحج وأثناءه وبعده. وهذه الشعائر تتبع ترتيبًا محددًا من المناسك التي شرعها الله لنبيه وصديقه إبراهيم (عليه السلام). أعمال الحج ومناسكه تشمل الفرض والواجب والسنن. وسيتم شرح تفاصيل هذه الأمور بشكل أكبر.</h4>
              

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="/img/hajj1.PNG" alt="Description of the image" class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">

            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/FeGXy6Pfa44?si=2HwKSkYdEdaKK6Hv" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
              </div>
          </div>
          </div>
        </div>
      </div>
      <!-----------------------------------------End section Hajj conditions  ---------------------->
      <button class=" collapsible" id="collapsible-btn2"><strong> أركان وواجبات الحج</strong></button>
      <div class="content iebARE">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
            
                <strong>للحج أركان أربعة</strong>
              
               <br>
                
         <strong>أركان الحج الأربعة هي :</strong>
                <br>
                
              <ul class="listr" dir="rtl">
                <li>
الإحرام: حالة الإحرام التي تكون قبل أداء مناسك الحج   
                </li>

                <li>
                الوقوف بعرفات: واجب الوقوف بعرفات إلى غروب الشمس للواقفين خلال النهار

                </li>

                <li>
طواف الإفاضة: شعيرة الطواف حول الكعبة بعد الرجوع من عرفات
                </li>
              </ul>
                <br>
              <strong> وأما فرائض الحج فهي سبعة</strong>
                <br>
              <ul class="listr"dir="rtl">

                <li>
                الإحرام في الوقت المحدد
                </li>
                <li>

                  الوقوف في عرفات حتى غروب الشمس للذين يقفون خلال النهار
                </li>
                  <li> 
                  
                  المبيت بمزدلفة إلى ما بعد منتصف الليل
                      </li>
                  <li> 
                  المبيت بمنى ليالي أيام التشريق
                      </li>
                   <li> 
                 رمي الجمار مرتبا
                      </li>
                   <li> 
                الحلق أو التقصير
                      </li>
                  
                  <li> طواف الوداع
                      
                      ذا كان الحاج متمتعا أو قارنا فعليه هدي واجب (ذبح شاة)
                </li>
                  
              </ul>
                
                <strong> الباقي من أفعال الحج وأقواله سنن ، كطواف القدوم ، والمبيت بمنى ليلة عرفة ، والاضطباع والرمل في موضعهما ، وتقبيل الحجر ، والأذكار والأدعية ، وصعود الصفا والمروة .</strong>
                <br>
                <br>
                <h5> والفرق بين الركن والواجب والسنة : أن الركن لا يصح الحج إلا به ، والواجب يصح الحج مع تركه ، غير أنه يجب على من تركه دم (ذبح شاة ) ، أما السنة فمن تركها فلا شيء عليه .</h5>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
              <img src="/img/mina.jpg" alt="Description of the image" class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/f21nmMe3CLU?si=4zs234qG90yac9A6" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          
          </div>
          </div>
          
    
        
      </div>
      <!---------------------------------------------------End section pillars and obligatory---------------------------------->


      
      <!------------------------------------------end ------------------------------>

      <button class=" collapsible" id="collapsible-btn4"><strong> مواقيت الحج</strong></button>
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
              <p>
                  
                <strong  dir="rtl">تحديد الميقات</strong>
             
            <h5 dir="rtl">مواقيت الحج إلى زمانية ومكانية </h5>
<p dir="rtl">
  الزمانية هي الشهور المحددة للحج ، وهي : شوال وذو القعدة وذو الحجة وتحديداً من أول شهر شوال إلى العاشر من ذي الحجة
  أما المواقيت فهي كما حددها محمد عليه أفضل الصلاة والتسليم كما يلي
 </p>





              <ul class="listr" dir="rtl">


                  
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
               src="https://www.youtube.com/embed/4x4K5GF-5CU?si=HyYq4FIlhBXVC0Ge" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
          </div>
          </div>
          
        </div>
      </div>
      <!---------------------------------------------------End sectiondeterming your miqats---------------------------------->


      <button class=" collapsible" id="collapsible-btn5"><strong> أنواع النسك</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong dir="rtl">أنواع النسك</strong>
                </p >
            
                <strong dir="rtl"> وعندما يصل الحاج إلى الحد المعين المعروف بالميقات فإنه يخير بين ثلاثة أنواع من المناسك:</strong>
            
             
              <ul class="listr"dir="rtl">
<h5>التمتع </h5>
                <li>
                    
                التمتع: وهو أداء العمرة منفرداً من الميقات في أشهر الحج مع إعلان نية الإحرام بقوله: "لبيك عمرة".
                </li>
                
                <li>
                 م يشرع الحاج في أداء مناسك العمرة من الطواف والسعي وإما الحلق أو قص الشعر
                </li>

              <li>
          وهذا يسمح للحاج بإزالة جميع قيود الإحرام حتى اليوم الثامن من ذي الحجة، المعروف بيوم التروية
                </li>
                  <li>وفي اليوم الثامن يحرم الحاج بالحج وحده ويكمل جميع مناسك الحج</li>
              </ul>
<br>
<h5> القران</h5>
              <p><strong dir="rtl"> القران: وهو الإحرام بالعمرة والحج معًا، بأن يقول: لبيك عمرة وحجان، أو الإحرام بالعمرة من الميقات، ثم الإحرام بالحج قبل الشروع في الطواف.</strong></p>

              <ul class="listr"dir="rtl">
                <li>
                   وعند الوصول إلى مكة يؤدي الحاج طواف الوصول.
                </li>
                <li>
وإذا أرادوا أن يقدموا سعيهم للحج فعلوا ذلك بين الصفا والمروة؛ وإلا أخروه إلى ما بعد طواف الإفاضة. فلا يحلقون ولا يأخذون ولا يحلون إحرامهم إلى يوم النحر.
                </li>
                
                </ul> 
                <br>
                <h5>الإفراد</h5>
                
                <strong dir="rtl">لإفراد: وهو الإحرام بالحج وحده بقوله: لبيك حجة"</strong>
              
 <br>
            
              <ul class="listr"dir="rtl">
                <li>
                  الوصول إلى مكة يؤدي الحاج طواف الوصول ويجوز له أن يسعى للحج إذا رغب في ذلك
                </li>

                <li>
      وإلا فإنهم يؤجلونه إلى ما بعد طواف الإفاضة، مثل القران. ويبقون على إحرامهم حتى يخرجوا منه يوم عيد الأضحى.

                </li>  
                 
              </ul>
                <br>
              <strong>وعمل الحاج في الإفراد والقران متشابه. لكن في القران فإن الهدي واجب بسبب الجمع بين نسكين، بخلاف الإفراد، حيث لا يجب، حيث يتم أداء شعيرة واحدة فقط، وهي الحج.</strong>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="/img/wow.PNG"   class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
                 <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="/img/hajj2.PNG"   class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
             
              
            <div class="embed-responsive embed-responsive-16by9 mt-4">
              <iframe class="embed-responsive-item  "
                src="https://www.youtube.com/embed/SNyLksy8DNE?si=srxOuoRR3UoCVwiq" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
              
                  
              
         
          </div>
          </div>
    </div>

    @include('layouts.arfooter')

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

  </section>






</body>