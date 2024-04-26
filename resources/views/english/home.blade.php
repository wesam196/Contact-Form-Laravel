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
    <link href="css/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
            </div>
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
@include('layouts.header')
    <!-- menu -->

    <!-----------------------------------------------end header-------------------------------------------------->
    <div class="container hero">

        <div class="row pt-5">

            <div class="col-md-6 text-container hero-text">
                <h1 class="pt-0"><b> Mecca Visitors Guides </b> </h1>
                <h3> Hajj and Umrah Instruction and Landmarks Mecca</h3>
            </div>
            <div class="col-md-6 image-container hero-container">
                <!-- Replace 'image.jpg' with your image URL -->
                <img src="img/kaaba.jpg" alt="Your Image" class="hero-img">

            </div>


    </div>

    <!------------------------------------------------end hero----------------------------------------->
    


    <!----------------------------------------- cards main-------------------------------------- -->
   
    <div class="profile-aria">
        <div class="card">
            <div class="card__img"></div>
            <div class="card__avatar"></div>
            <div class="card__title">Lamdmarks</div>
            <div class="card__subtitle">See more informations </div>
            <div class="card__wrapper">
                <a href="landmark.html">
                <button class="card__btn">Button</button>
                </a>
            </div>
        </div>
     


        <div class="card">
            <div class="card__img2"></div>
            <div class="card__avatar2"></div>
            <div class="card__title">Umrah</div>
            <div class="card__subtitle">instructions step by step</div>
            <div class="card__wrapper">
                  <a href="Umrah.html">
                <button class="card__btn">Button</button>
                </a>
             
            </div>
        </div>

        <div class="card">
            <div class="card__img3"></div>
            <div class="card__avatar3"></div>
            <div class="card__title">Hajj</div>
            <div class="card__subtitle">instructions step by step</div>
            <div class="card__wrapper">
                 <a href="Hajj.html">
                <button class="card__btn">Button</button>
                </a>
            </div>
     


        </div>
</div>
        
    

    <!---------------!end section cards ---------------------->

    
    <div class="container container-edit">
        <div class="general">
            <h2 class="py-5">
                GENERAL GUIDELINES FOR PILGRIMS</h2>
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
                <div class="text text-center"> Follow the general steps and instructions given to you
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <div class="text text-center">Avoid scorching sunstrokes with a protective umbrella and plenty of fluids
                    <i class="fa-solid fa-sun"></i>
                </div>
            </div>
            
            <div class="col-lg-4 guide-container ">
                <div class="text text-center">

                   Informing companions of the health condition
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                
                <div class="text text-center">  During the great effort ritual: stay away from crowds!
                    <i class="fa-solid fa-street-view"></i>
                </div>
            </div>
            <div class="col-lg-4 guide-container">

                <div class="text text-center">
                    Drink natural juices and water to reduce dehydration and fatigue
                    <i class="fa-solid fa-bottle-droplet"></i>
                </div>
                
                <div class="text text-center">
                   When you don't know the way or get lost, ask and go to the nearest office (Lost Guidance)
                    <i class="fa-solid fa-location-dot"></i>
<i class="fa-solid fa-city"></i>
                </div>
            </div>

        </div>
    </div>
    <!---------------!end section guid ----------------------------------------------------------->
    <div class="container hero" id="about">
        <div class="row pt-5">
            <div class="col-md-6 image-container hero-container">
                <!-- Replace 'image.jpg' with your image URL -->
                <img src="img/hero2.PNG" alt="Your Image" class="hero-img">

            </div>

            <div class="col-md-6">
                <div class="move">
                    <h3 class="about-txt"><i class="fa-solid fa-circle-exclamation mr-1"></i>About Us</h3>
                    <h3 class="pt-0 text-white"><b> Mecca Visitors Guides </b> </h3>
                    <h4 class="text-black pb-5 mr-1"> Use Nusuk, the first-ever official planning, booking and
                        experience platform, to create
                        your Hajj or Umrah itinerary to Makkah, Madinah, and beyond. With Nusuk, travelers from
                        all over the world can easily organize their entire visit, from applying for an eVisa to
                        booking hotels and flights. In the future, Nusuk can also be used to schedule visits to
                        important sites, find transportation, curate itineraries, and access on-ground tools
                        such as the Tawaf tracker and more.</h4>
                </div>
            </div>
        </div>
    </div>
    

    <!---------------!end section cards ---------------------->

    <!-- start contact -->
    <div class="contact_us_2 mt-5" id="contact">
        <div class="responsive-container-block big-container">
            <div class="blueBG">
            </div>
            <div class="responsive-container-block container">
                <form class="form-box" method='POST' action='{{url("/addMessage")}}'>
                @csrf
                    <div class="container-block form-wrapper">
                        <p class="text-blk contactus-head">
                            Contact Us
                        </p>
                        <p class="text-blk contactus-subhead">
                            We'd love to hear from you!
                        </p>
                        <div class="responsive-container-block">
                            <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt">
                                <p class="text-blk input-title">
                                    NAME
                                </p>
                                <input class="input" id="ijowk" name="name"
                                    placeholder="Please enter first name..." type="text" required />
                            </div>

                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <p class="text-blk input-title">
                                    Email or Phone
                                </p>
                                <input class="input" id="ipmgh" type="text" name="ContactWay"
                                    placeholder="please enter email or phone..." required />
                            </div>
                            <div class="form-ui">
                                <label for="type" class="typemessage"> Type of Message</label>
                                <select class="ui dropdown" name="type" id="">
                                    <option value="1">Suggestion</option>
                                    <option value="0">Questions</option>
                                </select>
                            </div>


                            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i">
                                <p class="text-blk input-title">
                                    Message
                                </p>
                                <textarea class="textinput" id="i5vyy" name="Message" placeholder="Message..."
                                    required></textarea>
                            </div>
                        </div>
                        <input type='submit' value="Send Message" class="submit-btn">
                           
                        
                    </div>

                </form>
            </div>
        </div>
    </div>
        <!-- end contact -->


    <!-- Bootstrap JavaScript (optional if you need dropdowns or other JS-dependent features) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <!-- footer -->
    @include('layouts.footer')

    <script src="js/main.js"></script>
</body>

</html>