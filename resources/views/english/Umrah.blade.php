<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
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
  <link href="css/stylesheet.css" rel="stylesheet">
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
@include('layouts.header')

 
    <!-- Message  -->
  <div id="overlay" class="overlay">
    <div class="overlay-content">
        <span class="close-btn" onclick="closeOverlay()">×</span>
        <h5 style="font-size: 30px;">Important Notes! <i class="fa-solid fa-thumbtack"></i></h5>
        <ul class="kexixH">
                <li><p>
                    <strong> If you don’t have Internet</strong>
                  Download this file that contains all
                  Instructions for Hajj and Umrah
                  Mecca landmarks</p>
              <a href="pdf/Mecca Visitors Guidelines.pdf" class="download-button" download><i class="fa-regular fa-file-pdf"></i>
                  Download PDF</a>

                </li>
                <li>
                  <strong> call emergency number</strong>
(911) If anything happens to you, do not hesitate to call the emergency number

                </li>
                <li>
                    <strong>carry your card everywhere!</strong>
The pilgrim must carry at all times his/her personal data card
delivered to him/her by the National Tawafa Establishment

                </li>
                <li><strong> rules and regulations</strong>
Follow the instructions and rules
                </li>
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
        <li><a href="#" id="vir"><i class=" bi bi-stopwatch-fill "></i> Virtue of Umrah &amp;Performing Time</a></li>
        <li><a href="#" id="IHR"><i class="fa-solid fa-door-open"></i> Ihram</a></li>
        <li><a href="#" id="CLOTH"><i class="fa-regular fa-circle-xmark"></i> Ihram clothing &amp; Prohibitions</a></li>
        <li><a href="#" id="DETER"><i class="fa-solid fa-location-crosshairs"></i> Determining your Miqats</a></li>
        <li><a href="#" id="TAWAF"><i class="fa-solid fa-users-line"></i> Tawaf &amp;Saie</a></li>
      </ul>
    </div>
 
    <!--------------------end Icon lis -->

    <script src="script.js"></script> <!-- ملف JavaScript -->
    <!--------------------------------------------------------------------->
    <div class="collapsible-container">

      <button class="collapsible" id="collapsible-btn"><strong> Virtue of Umrah & Performing Time</strong></button>

      <div class="content iebARE">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p1>

                Umrah is an act of worshipping Allah by entering the state of Ihram, circumambulating the House, running
                between Safa and Marwa, and having the head shaved or trimmed.
              </p1>
              <br>
              <br>
              <p>
                Umrah is a set of rituals of worshipping Allah by entering into the state of Ihram, performing
                circumambulation of the Kaaba, performing Sa’i between Safa and Marwa, and having one's hair shaven or
                trimmed.

              </p>
              <strong> It has great stature and virtues, including :</strong>

              <br>
              <ul class="kexixH">
                <li>
                  <strong> Allah mentioned it along with Hajj</strong> and commanded that it be completed and performed
                  in the most perfect manner, for the sake of Allah’s pleasure. The Almighty said: {and perform properly
                  the Hajj and Umrah for Allah}.

                </li>

                <li>
                  <strong> It wipes out sins and reduces poverty and need: </strong> the Prophet (blessings and peace be
                  upon him) said: "Perform Hajj and Umrah consecutively; for they remove poverty and sin as the bellows
                  remove impurity from iron".

                </li>

                <li>
                  <strong>Umrah expiates sins: </strong> the Prophet (blessings and peace be upon him) said: "From one
                  Umrah to the next is an expiation for the sins committed between them".

                </li>

                <li>
                  <strong> Every step in circumambulation is an increase in good deeds and forgiveness of sins:</strong>
                  the Prophet (blessings and peace be upon him) said about the virtues of circumambulating the honored
                  House: "Whoever circumambulates the House does not raise a foot or put down the other, except that
                  Allah will write down for him a good deed, erase for him a sin and raise his rank".
                </li>
                <li>

                  <strong> Sa’i between Safa and Marwa is a reason why Allah will be thankful and rewarding to His
                    servant:</strong> after mentioning Sa’i between Safa and Marwa, Allah informed us that He fully
                  knows His servant’s work and that He will reward the servant for the deed and good work. He said: "And
                  who volunteers good, Allah is All-grateful, All-knowing".

                </li>
              </ul>
              <strong> Umrah in Ramadan</strong>
              <p> Umrah has great virtues at all times. It is one of the deeds that expiate sins, for the Prophet
                (blessings and peace be upon him) said. Additionally, it has a special virtue during Ramadan.</p>

              <strong> The reward for performing Umrah in Ramadan :</strong>

              <ul class="kexixH">

                <li>
                  The Prophet blessings and peace be upon him said: "Performance of Umrah in Ramadan is equivalent to
                  Hajj", or he said: "Equal to performance of Hajj with me"
                </li>
                <li> This virtue extends to all the days and nights of Ramadan</li>
                <li> The pilgrim must perform his Umrah at the time allotted to him as shown by the reservations in the
                  official Umrah applications</li>

              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="img/%D8%B9%D9%85%D8%B1%D8%A91.PNG" alt="Description of the image" class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">

            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/H4-aEkA4t-c?si=TQF2AnK1q2BHGQW1" title="YouTube video player" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
              </div>
          </div>
          </div>
        </div>
      </div>
      <!-----------------------------------------End section virute ---------------------->
      <button class=" collapsible" id="collapsible-btn2"><strong> Ihram</strong></button>
      <div class="content iebARE">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong>Ihram is a great worship with which you start your Umrah rituals</strong>
              </p>

              <p1>

                In Ihram, all people are equal in their dress and appearance. Color and material possessions do not
                matter at all. After entering the state of Ihram, they proceed to perform the rituals in humility to
                Allah and supplicating Him alone.

                Ihram is the commencement of the rituals of Hajj or Umrah. The rituals are commenced by intending to
                start Umrah or Hajj and reciting Talbiyah. It is the first pillar of Hajj and Umrah.

                A Hajj or Umrah pilgrim may stipulate upon initiating Ihram if he fears his inability to complete his
                rituals for any reason.

                Ihram is the first step in your journey of faith and an act of the heart with which you engage in a
                great act of worship. Allah commanded us to make our intentions sincere and to perform the rituals for
                His sake, Glory be to Him, in the most perfect manner. The Almighty said: {Perform Hajj and Umrah for
                (the sake of) Allah}.
              </p1>
              <br>

              <p>
                <strong>What is Ihram?</strong>
              </p>


              <ul class="kexixH">
                <li>
                  Ihram is entering into the act of worship of Hajj or Umrah. It involves intending to enter into Umrah
                  or Hajj and reciting Talbiyah, which is the first of the pillars of Hajj and Umrah.
                </li>

                <li>
                  It is the first step in your journey of faith and an act of the heart with which you engage in a great
                  act of worship. It is a great act of worship for which Allah commanded us to make our intentions
                  sincere, and perform its rituals for His sake, Glory be to Him, in the most perfect manner. As the
                  Almighty said: {Perform Hajj and Umrah for (the sake of) Allah}.

                </li>

                <li>
                  With this intention, things that are permissible before entering into the state of Ihram are now
                  forbidden: such as intercourse, shaving the head, clipping nails, covering the head, wearing sewn
                  clothes for men, etc.

                </li>

                <li>
                  If you want to engage in the worship of Umrah, you must refrain from the prohibitions of Ihram, and
                  intend to engage in Umrah saying: "Labbayka Umrah". Then, you begin reciting Talbiyah. If you intend
                  to start performing the Hajj rituals, you shall start with by saying: "Labbayka Hajjan". Then you
                  begin reciting Talbiyah.
                </li>
                <li>

                  <strong> Sa’i between Safa and Marwa is a reason why Allah will be thankful and rewarding to His
                    servant:</strong> after mentioning Sa’i between Safa and Marwa, Allah informed us that He fully
                  knows His servant’s work and that He will reward the servant for the deed and good work. He said: "And
                  who volunteers good, Allah is All-grateful, All-knowing".

                </li>
              </ul>
              <strong> Stipulate a condition in Ihram</strong>

              <p> Islam is a religion of ease, as Allah Almighty said: {Allah intends for you ease and does not want to
                make things difficult for you}. One of the manifestations of this facilitation for Muslims in performing
                acts of worship is taking into account the circumstances that may prevent them from completing the
                rituals of Hajj or Umrah.

                If a pilgrim fears that he will not be able to complete the rituals of Hajj or Umrah for any reason, it
                is lawful to stipulate a condition while in Ihram.</p>
              <strong> How to stipulate?</strong>
              <p>
                If the pilgrim performing Hajj or Umrah fears that he will not be able to complete his rituals due to a
                disease or a lawful excuse or for a reason beyond his control, it is allowed for him/her to make
                exceptions in their utterance of the intention. One does so by saying after saying "Labbayka Umrah" or
                "Labbayka Hajjan": "If I'm deterred for any reason, then my place is where You deterred me (this can be
                said in any language)". If a pilgrim says this and stipulates a condition, and then something prevents
                them from completing the ritual, it is permissible for him to leave the state of Ihram without falling
                under any further obligation.
              </p>
              <p>

                <strong> Who can stipulate a condition? </strong>
              </p>

              <b> Whoever fears that one will not complete the rituals for a reason beyond their control, including:</b>
              <ul class="kexixH">

                <li>
                  A woman who is afraid that a legitimate excuse (i.e., the menstrual period) will prevent her from
                  completing her rituals
                </li>
                <li>

                  A sick person who fears that he will not be able to complete his rituals
                </li>
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
              <img src="img/%D8%B9%D9%85%D8%B1%D8%A92.PNG" alt="Description of the image" class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/ewYyI0IvwT8?si=EX0BgU0EQ1rgek_0" title="YouTube video player" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          
          </div>
          </div>
          
    
        
      </div>
      <!---------------------------------------------------End section Ihram---------------------------------->


      <button class=" collapsible" id="collapsible-btn3"><strong> Ihram clothing & Prophet</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong>What is Ihram clothing for men

                </strong>
              </p>

              <p>

                OHajj and Umrah are unique moments during which pilgrims give up their prestige and money. All people
                are equal in their dress and appearance. They are not separated by color or material possessions. They
                gather on the same spots, praying to Allah and supplicating to Him, for Glory be to Him, the Rich and
                all His servants stand in need for Him.
              </p>
              <p>
                <strong>What should a person wear to enter into Ihram?</strong>
              </p>
              <p>
                A pilgrim must take off his usual clothes, including:
              <ul class="kexixH">

                <li>Head coverings, such as hats, turbans, etc. </li>

                <li>The usual, sewn clothing, such as shirts, pants, socks, gloves, etc. </li>
                <li>Shoes around the entire foot and ankles </li>
                <li>He wears a cloth that surrounds the lower part of his body, and another for the upper part</li>
                <li>It should be white</li>
                <li>He shall wear appropriate sandals that do not cover the entire foot</li>
              </ul>


              <p><strong> The following items may be worn be during Ihram:</strong></p>



              <ul class="kexixH">


                <li>A buckle or belt that he wraps around his waist to keep his Izaar (waist-wrapper or lower garment)
                  from falling, and in which he can put his belongings, phone, and money </li>
                <li>Watches and rings </li>
                <li>Plasters and bandages to cover wounds </li>
                <li>Umbrellas and all head coverings that do not touch the head </li>
              </ul>


              <p><strong> How to wear the Ihram? </strong></p>

              <strong> A man’s Ihram consists of a waistcloth that covers the lower part of his body and another cloth
                that covers the top of the body.</strong> In some Muslim regions, people are accustomed to wearing these
              in an appropriate way because it is their traditional dresses. On the other hand, some people find it very
              difficult to wear the Ihram in an appropriate manner that ensures it is:
              <ul class="kexixH">


                <li>Sufficiently covering the body </li>
                <li>Comfortable convenient to walk freely </li>
                <li>It is fixed firmly and does not hang or fall </li>

              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
               <img src="img/%D8%B9%D9%85%D8%B1%D8%A94.PNG"  class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/_kkEiOp3_hE?si=HtZTgKAXtrelKmul" title="YouTube video player" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          
          </div>
          </div>
        </div>
      </div>
      <!------------------------------------------end section ihram clothing------------------------------>

      <button class=" collapsible" id="collapsible-btn4"><strong> determing yout Miqats</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong>Why are there special sites (Miqats) for entering into Ihram?</strong>
              </p>
              <p>

                Out of respect for the Honored House of Allah and the rituals of Hajj and Umrah, the Messenger of Allah
                (blessings and peace be upon him) specified places before reaching Makkah, where pilgrims enter into the
                state of Ihram, and from which they begin reciting their Talbiyah before reaching the Haram.

                After specifying the exact locations of these places, the Prophet (blessings and peace be upon him)
                said: "These Miqats are for the people at those very places and those who come through those places with
                the intention of performing Hajj and Umrah".

                These sites differ in their distance from and proximity to the Grand Mosque, depending on which
                direction you come from.

                Pilgrims who live beyond those Miqats are obliged to enter into Ihram at the Miqats or any adjacent or
                parallel points on the way, whether they travel by air or by land. They should not go beyond them
                without entering the state of Ihram.
              </p>
              <p>
                <strong>Determining your Miqats</strong>
              </p>
              <p>
                The reason why Miqats are prescribed is to venerate the Grand Mosque of Makkah. Miqats depend on the
                whereabouts of the person who intends to perform Hajj or Umrah; i.e., whether they are in Makkah,
                somewhere between Makkah and the Miqat, or beyond the Miqat. All of that would be explained as follows:
              </p>
              <ul class="kexixH">
                <strong> Those who are in Makkah:</strong>


                <li>
                  They enter into the state of Ihram for Umrah from the nearest place outside the Haram, such as Masjid
                  Aisha in Al Taneem. As for Hajj, pilgrims shall enter into the state of Ihram from the very place they
                  are in.
                </li>
                <strong> Those somewhere between Makkah and the Miqats:</strong>
                <li>
                  hey enter into the state of Ihram for Hajj or Umrah from the very place they are in, like in the case
                  of someone living in Jeddah or Bahrah.
                </li>

                <strong> Those somewhere between Makkah and the Miqats: </strong>
                <li>
                  They shall enter into the state of Ihram for Hajj or Umrah from one of the five Miqats or from a
                  parallel point.
                </li>
                A pilgrim or a visitor living far from Makkah is obliged to enter the state of Ihram at one of these
                five Miqats or a parallel point on their way regardless of the travel means, by a plane or by a vehicle.
                They may not go beyond the Miqat without entering the state of Ihram.
              </ul>


              <p><strong> Miqats for Ihram</strong></p>

              Miqats are the places from which a pilgrim who wants to perform Hajj or Umrah enters into Ihram. A pilgrim
              seeking to perform Hajj or Umrah must not pass from one of these Miqats without entering the state of
              ihram. They are:



              <ul class="kexixH">


                <li>
                  <strong> Dhul-Hulaifa: </strong> the Miqat for the people of Madina. It is 420 km from Makkah.
                </li>
                <li>
                  <strong> Al-Juhfah:</strong> the Miqat for the people of the Levant and those on their way. It is 187
                  km from Makkah. Today, people enter Ihram in Rabigh, which is 204 km from Makkah.
                </li>
                <li>
                  <strong> Qarn Al-Manazil: </strong> the Miqat for the people of Najd and those on their way. It is 94
                  km away from Makkah.
                </li>
                <li>
                  <strong> Yalamlam: </strong> the Miqat for the people of Yemen and those on their way. It is 115 km
                  away from Makkah.
                </li>
                <li>
                  <strong> Dhat Irq: </strong> the Miqat for the people of Iraq and those on their way. It is 92 km away
                  from Makkah.
                </li>
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
               <img src="img/%D8%B9%D9%85%D8%B1%D8%A95.PNG"  class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>

            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
               src="https://www.youtube.com/embed/92PWnSjip6w?si=uIOXBCe72VCzOHEU" title="YouTube video player" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
          </div>
          </div>
          
        </div>
      </div>
      <!---------------------------------------------------End sectiondeterming your miqats---------------------------------->


      <button class=" collapsible" id="collapsible-btn5"><strong> Tawaf & Saie</strong></button>
      <div class="content iebARE  ">
        <div class="row">
          <div class="col-md-6">
            <div class="text-container pr-3 text-sections">
              <br>
              <p>
                <strong>Tawaf and Saie</strong>
              </p>
              <p>

               Circumambulation (Tawaf)
The circumambulation (Tawaf) is one of the pillars of Umrah and is an act of
worship in which, by directing our hearts and bodies to Allah, we are humbled
to confess our needs to the Almighty. In this act of worship, the servant
circumambulates the House of Allah (the Kaaba), worshipping the Lord of the
House and drawing close to Him as He has prescribed.Description of Circumambulation
Pilgrims performing Hajj or Umrah start circumambulation from the corner
where the Black Stone is located. On the upper floors, a green sign indicates
this position.
Pilgrims performing Hajj or Umrah should say Takbir in each round when they
are parallel to the Black Stone, but it is not a condition that Takbir should be
uttered exactly at this point. It is not the case that it is not valid to say Takbir
before or after it; rather one can do Takbir somewhere near this point. So, if
the pilgrim sees that he has already passed the Black Stone, he can still utter
Takbir.
When uttering Takbir, a pilgrim shall point with their hand at the Black Stone,
and then start circumambulating with the Kaaba to his left (counterclockwise).
Kissing the Black Stone is a Sunnah for those who are able to do so, but this
is difficult during the Hajj season crowded days.
One continues circumambulation, supplicating Allah and praying humbly to
Him.
If one reaches the Yemeni corner, which precedes the Black Stone, it is
desirable to wipe over it if possible. During the Hajj season, this will be
difficult.
The round ends at the corner of the Black Stone, which marks the start place.
Here, he/she points with their hand and utters Takbir.
One repeats this until completing seven rounds.
Circumambulation Instructions
              </p>
                <p>
                <strong>For a safe and Ideal circumambulation:</strong>
                </p>
             
              <ul class="kexixH">

                <li>
                  Walk on without stopping in the circumambulation courtyard to prevent
crowding and jostling
                </li>
                
                <li>
                  Do not reverse the direction of circumambulation, whatever the reasons
                </li>

              <li>
                 The phrase Allahu Akbar (Allah is the greatest) inscribed on the Kaaba cloth
over the Black Stone indicates the corner of the Black Stone
                </li>
               A green light sign in the upper floor circumambulation tracks indicates the
alignment of the Black Stone
                  <li>
                  Visitors performing supererogatory circumambulation shall follow instructions
and regulations of the times and places of circumambulation and give theopportunity to Hajj and Umrah pilgrims as a priority shall be given to Hajj and
Umrah pilgrims.
                      </li>

              </ul>
<p> When you circumambulate the Kaaba, avoid crowded places. Help reduce
crowding through proper entry and exit from the Mataf (circumambulation
area) and by praying away from the circumambulates.</p>

              <p><strong> The Sunnah of praying two Rakaah after circumambulation</strong></p>

             The two Rakaah of Tawaf


              <ul class="kexixH">
                <li>
                  After completing circumambulation, it is Sunnah to pray two Rakaah.
This is a confirmed Sunnah for everyone who has circumambulated the
Kaaba for Hajj or Umrah, or who performed an absolute
supererogatory circumambulation.
                </li>
                <li>
                  It is prescribed to recite Surat Al Kafirun in the first Rakaah, and Surat
Al Ikhlaas in the second one. Because circumambulation is the symbol
of monotheism and the worship of Allah alone, Who has no partner; it is
prescribed for a person to announce that in the recited Surat that one
recites upon completing circumambulation.
                </li>
                <li>
                 If it is not too difficult for him/her, it is Sunnah to perform this prayer of
 two Rakaah behind Maqam Abrahim, so that the Maqam will be
 between him/her and the Kaaba. One must pray where security officers
 advise doing so. The two Rakaah of Tawaf can be performed anywhere
 in the Grand Mosque, but the people who are circumambulating have
 more right to the space around the Kaaba than people performing their
 prayer.
                </li>
                </ul> 
                <p>
                <strong>Sa’i </strong>
              </p>
                
                <p>
                <strong>Sa’i between Safa and Marwa</strong>
              </p>

              <p1>

             <strong>     What are Safa and Marwa?        </strong>  
 Safa and Marwa are two small hills on which Ismail's mother,
Hagar, climbed in search of food or water.
              </p1>
                
              <br>
                <p>
                <strong>       Safa</strong>
 It is a small hill from which Sa'i begins. The rocks of the hill
are still visible on the ground floor there.
              </p>
                <p>
                    <strong>        Marwa</strong>
 It is a small hill where the round of Sa'i ends.
              </p>
             

              <p>
                <strong>Sa'i is an important rite</strong>
              </p>


              <ul class="kexixH">
                <li>
                  Performing Sa'i between Safa and Marwa is a ritual of Hajj
and Umrah alike. Allah the Exalted said: {Indeed, Safa and
Marwa are among the symbols of Allah. So whoever makes
Hajj to the House or performs Umrah - there is no blame
upon him for walking between them}.
                </li>

                <li>
                 The pilgrim performing Hajj or Umrah worships his Lord by
crossing the distance between Safa and Marwa seven times,
as did his Noble Messenger (blessings and peace be upon
him).

                </li>

                 <p>
                <strong>Supplication at the beginning of Safa and Marwa</strong>
              </p>
                <li>
                  When you arrive at the beginning of Safa and Marwa, it is
Sunnah to raise your hands, face the Qiblah and supplicate
to Allah, saying: “Allahu Akbar” before starting a new round
                </li>

                   <p>
                <strong>The two green signs</strong>
              </p>
                <li>
                  It is recommended for capable men to run between the two
green signs, following the example of the Messenger of Allah
(blessings and peace be upon him).
                </li>
                  
                             <p>
                <strong> Supplication during Sa'i</strong>
              </p>

                <li>
                 A pilgrim should fill the entire time of his Sa'i with
remembrance and supplication to Allah or with reciting the
Quran.
                </li>
                                               <p>
                <strong> The Prophet's supplication during Sa'i</strong>
              </p>
                <li>
                When the Messenger of Allah (blessings and peace be upon
him) first reached Safa after the circumambulation, he would
recite this part of the Quranic Ayah {Indeed, Safa and Marwaare among the symbols of Allah}, and would add: {Begin with
what Allah began with}.
                </li>
                  
                       <li>
           When climbing up Safa and Marwa, the Prophet (blessings
and peace be upon him) used to face the Qiblah and recite:
"Allah is the greatest. Allah is the greatest. There is no true
god but Allah alone. He has no partner. His is the
Sovereignty, to Him praise is due and He is powerful over
everything. There is no true god but Allah alone. He fulfilled
His promise, helped His servant to victory, and alone routed
the Confederates". After that he shall supplicate with
whatever he wishes, repeat the above remembrance, and
proceed with Sa'i
                </li>
                  <p>The person performing Sa'i should not stop to say prayers in a
place if that disrupts the flow of pedestrians and causes crowding.
He must adhere to the instructions of security personnel in the
sanctuary</p>
                  
                 
              </ul>
              <strong> Sa’i Tips</strong>

              <ul class="kexixH">

                <li>
                  When you finish the circumambulation, you will see guide signs
inside the Grand Mosque that guide you to Al Masaa, and point to
Safaa where you should start Sa'i.
It is advisable to go to Al Masaa on the upper floors in order to
avoid crowding on the ground floor so as to make Sa'i easier for
everyone.
                </li>
                <li>

                 A person performing Sa'i should occupy himself all the time with
the remembrance of Allah and supplicating Him or reading the
Quran. He should not stop to pray in a place where he obstructs
movement and causes crowding. He must adhere to the
instructions of the security and regulation personnel in Haram.
                </li>
                       <li>

               Speeding up during Sa'i for men is only applicable between the
two green flags, and not throughout the duration of Sa'i.
                </li>
                      <li>

              If the iqamah for prayer is being established, those performing Sa'i
should stop and pray with the congregation, and then resume their
Sa'i from where they have left off.
                </li>
                    <li>

             If you are diabetic, start Sa'i only after taking suffi
and food. Try to keep your feet unharmed. You sh
you feel your blood sugar drops.
                </li>
                    <li>

             You can use a wheelchair if you feel ill or tired.
Beware of polluting the sanctuary by cutting hair inside the place of
Sa'i. There are many barbershops near the Sanctuary.
                </li>
                  
              </ul>

            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container mt-5"> <!-- Adjust margin as needed -->
             <img src="img/wow.PNG"   class="img-fluid rounded"
                style="width: 100%; max-height: 200px;">
            </div>
            <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
                src="https://www.youtube.com/embed/gfahwOTLz-Y?si=M5X4S-8bUrGbeXXk" title="YouTube video player" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
              
                  <div class="embed-responsive embed-responsive-16by9 mt-5">
              <iframe class="embed-responsive-item  "
                src="https://www.youtube.com/embed/_kdX2uBSGjo?si=s7HevhZr-nmWHYSK" title="YouTube video player" 
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div> 
              
         
          </div>
          </div>
    </div>


    @include('layouts.footer')
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

    <script src="js/main.js"></script> <!--Main js App (menu)-->
  </section>






</body>