
let secland = document.querySelector(".sec-land")
let show = document.getElementById("show");
let show2 = document.getElementById("show2");
let show3 = document.getElementById("show3");
let show4 = document.getElementById("show4");
let show5 = document.getElementById("show5");
let page = document.querySelector(".page");
let pagethawr = document.querySelector(".Thawr-Mount")
let pageHira = document.querySelector(".Hira")
let pageAishah = document.querySelector(".Aishah")
let pageMuseums = document.querySelector(".Museums")
let open  = document.getElementById("open");
let close  = document.getElementById("close");
let menu = document.querySelector(".menu");

// menu app
open.onclick = function(){
    menu.style.display = 'block';
    open.style.display = 'none';
    close.style.display = "block";
}
close.onclick = function(){
    close.style.display = "none";
    menu.style.display = 'none';
    open.style.display = 'block';
}



// pages add
show.onclick = function(){
    page.style.display = 'block';
    secland.style.display = 'none';

}
show2.onclick = function(){
    pagethawr.style.display = 'block';
    secland.style.display = 'none';


}
show3.onclick = function(){
    pageHira.style.display = 'block';
    secland.style.display = 'none';


}
show4.onclick = function(){
    pageAishah.style.display = 'block';
    secland.style.display = 'none';


}
show5.onclick = function(){
    pageMuseums.style.display = 'block';
    secland.style.display = 'none';


}


// LandMark and Btn close or Exit
// page1
    btnclose = document.getElementById('btn-close');
    closeland = document.querySelector('.close-land');
    closeland.onclick = function(){
        btnclose.style.display = 'none';
    }



    // page2
     btnclose2 = document.getElementById('btn-close2');
    land2 = document.getElementById('land2');
    land2.onclick = function(){
        btnclose2.style.display = 'none';
    }


    //page3

    btnclose3 = document.getElementById('btn-close3');
   land3 = document.getElementById('land3');
   land3.onclick = function(){
       btnclose3.style.display = 'none';
   }

       //page4
       btnclose4 = document.getElementById('btn-close4');
      land4 = document.getElementById('land4');
      land4.onclick = function(){
          btnclose4.style.display = 'none';
      }

             //page5
             btnclose5 = document.getElementById('btn-close5');
            land5 = document.getElementById('land5');
            land5.onclick = function(){
                btnclose5.style.display = 'none';
            }


