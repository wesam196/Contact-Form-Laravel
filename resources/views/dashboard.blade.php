<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Document</title>

<style>

/*section header ---------------------*/   
.sticky-top {
  position:fixed;
  top: 0;
  width: 100%;
  z-index: 100%; /* Ensure it's on top of other content */
}
.navbar-brand{
color: white !important;
}
/* Custom CSS for white text */
.navbar-nav .nav-link {
  color: white !important;
}
.navbar{
background-color: black;
}
.dropdown-menu{
text-decoration-color:black;
background-color: #d5d1cc;
}
.dropdown-menu a:hover{
  border-radius: 8px;
  text-decoration:underline;
  background-color: #d5d1cc;
  
  }
/*end section header ---------------------*/   




     /* Custom CSS for image and text layout */
        .hero-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
          /*  background-color: white; /* Background color for the container */
             
        }


        .hero-img {
            max-width: 100%;
            max-height: 80vh;
               
        }

        .hero-text {
            text-align: center;
            padding-top: 20%;
         
            
        }


 
.hero{
    
    margin: 0 !important;
    padding: 0 !important;
    max-width: 99% !important;
}

.hero-img{
    border-radius: 20px;
    height: 600px;
    width: auto;
}

.divide-row{
    
    justify-content: space-between; /*  هذي تخلي مسافة بين العناصر اللي داخل التاق*/     
    width: 100%;
    padding: 15px 30px;
    margin: 0 !important;   
    display: flex;     
    align-items: center;       
 

}
.second-color{
       background-color: #767067;
}

.container-edit{
margin: 0 !important;
padding: 0 !important;
max-width: 100% !important;  
    
    
}
.book{
     
    border: solid;
    border-radius: 15px;
    height:  300px;
    text-align:center;
    border-color: white;
    background-color: white;
    text-decoration: none;
    color: black;
    padding: 100px 0;
   margin: 20px 0 20px 0; 
        background-color:#F6F5EF;

    
}

.book:hover {
    opacity: 1;
   transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    
}

.inner-btn{
    display:none;
    text-align: center;
    padding: 70px 0; 
}
.book:hover  .inner-btn{
display:block;  
}
.fa-person-military-pointing{
     font-size: 50px;
     height: 80px;    
}
/*  
.guide-container {
           display: flex;
           padding: 0 10px;  
           border-radius:10px;
           padding: 20px;  
          height: 10px;
           margin-bottom: 30px;
        align-items: center;
           margin-right: 10px;    
       } 
/* Adjusted padding for spacing */
            
       .text {
           font-size: 13px;
           color: #000000;
           margin-right: 10px; /* Adjusted margin for spacing */
           height: 70px;
       }
   

/* Adjusted padding for spacing */


.about-row{
    
    padding-bottom: 20px;
    
    
}
    
.about-text{
    width: 600px;
}
.divide-row2{
    
    width: 1130px;
    max-width: 95%;
    margin:  auto;
    display: flex;
    align-items: center;
    justify-content:space-around;
    
}
    .about-text h3{
    font-size: 40px;
     
        
}
.about-text h5{
    font-size: 25px;
        text-transform: capitalize;
    margin-bottom: 10px;
    letter-spacing: 2px;
    color: floralwhite;
}

.about-text p{
    font-size: 18px;
    letter-spacing: 1px;
    line-height: 28px;
    color: black;
        margin-bottom: 45px;
}

.base-color h1{
    padding-top:  50px;
}
/*end index*/
    
    
    /*start Icon list ---------------------*/   

/*section header ---------------------*/   
.navbar-brand{
color: white !important;
}
/* Custom CSS for white text */
.navbar-nav .nav-link {
  color: white !important;
}
.navbar{
background-color: black;
}
.dropdown-menu{
text-decoration-color:black;
background-color: #d5d1cc;
}
.dropdown-menu a:hover{
  border-radius: 8px;
  text-decoration:underline;
  background-color: #d5d1cc;
  
  }
/*end section header ---------------------*/   



/*start Icon list ---------------------*/   
.container-icon{
    margin-top:40px;
    padding-top: 0px;
    
}
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
.icon-2 {
  list-style: none;
  padding-left: 0;
 margin-top: 40px;
  font-size: 15px;
  top:10px;
  left: 0;
  text-align: center;
  padding-top: 18px;
  background-color: #F6F5EF;
  
}
.icon-2 li {
  display: inline-block;
}

.icon-2 li a {
  display: block;
  padding: 10px 26px;
  color: black;
  text-decoration: none;
}
.icon-2 li a:hover {
  background-color:#d5d1cc;
  border-radius: 8px;
  text-decoration: underline;
}

/*end Icon list ---------------------*/   
/* For small screens */

/* For larger screens */
.collapsible-container {
     margin-top: 130px;
    
}

.collapsible {
background-color:#d5d1cc;
color: black;
cursor: pointer;
padding: 10px;
width:80%;
border: #c8c8c8;;
border-radius:8px;
text-align: left;
outline: none;
font-size: 15px;
margin-left: 10.5%;

}
/*
.active, .collapsible:hover {
هنا لو حطيت هوفر يصير حتو الهوم هوفر
}
*/

.content {
padding: 0 18px;
max-height: 0;
overflow: hidden;
transition: max-height 0.2s ease-out;
background-color: #eae5d9;
border-radius:8px;
width:80%;
margin-left: 10.5%;
height: 100%;
}
.iebARE {
  font-size: 13px;
font-weight: 540;
line-height: 140%;
font-style: normal;
margin-bottom: 10px;
}
.kexixH li {
font-size: 13px;
line-height: 140%;
font-style: normal;
list-style: disc;
margin-bottom: 0.5rem;
}
.text-sections {
  float: left;
  width: 100%;
}

.embed-responsive iframe {
    border-radius: 8px;  /*Adjust the value as needed */
    width:100%;
    height:230px;
    margin-bottom: 80px;
    margin-top: 40px;}


</style>
  </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">

        <div class="container">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Engish
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
  
                        </ul>
                    </li>

                    <li>
                    <x-app-layout>
                            </x-app-layout>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-icon">
    <ul class="icon-2 sticky-top">
      <li><a href="/register"><i class=" bi bi-stopwatch-fill "></i> register</a></li>
      <li><a href="#"><i class="fas fa-cogs"></i> Ihram</a></li>
      <li><a href="#"><i class=" fas fa-info-circle"></i> Ihram clothing &amp; Prohibitions</a></li>
      <li><a href="#"><i class="fas fa-cogs"></i> Determining your Miqats</a></li>
      <li><a href="#"><i class="fas fa-envelope"></i> Tawaf &amp;Saie</a></li>
    </ul>
</div>

<h1>this is dashboard</h1>

<table class='table' >
<tr>
    <th>رقم الرسالة</th>
    <th>الاسم</th>
    <th>نوع الرسالة</th>
    <th>الحالة</th>
    <th>تغيير الحالة</th>
    <th>فتح الرسالة</th>
  </tr>

  @foreach($data as $item)
  <tr>
    <th>{{$item->id}}</th>
    <th>{{$item->name}}</th>

    @if($item->type == 0)
    <th>تواصل</th>
    
    @elseif($item->type==1)
        <th>اقتراح</th>
    
    @endif


    @if($item->read==0)
    <th>غير مقروؤة</th>
    @else
    <th>مقروؤة</th>
    @endif
    <th>
    <a href="changeStatus/{{$item->id}}">تغيير حالة الرسالة</a>
    </th>

    <th>

    <a href="message/{{$item->id}}">فتح الرسالة</a>
    </th>
  </tr>
@endforeach


</table>
</body>
</html>
