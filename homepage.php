<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home_Page</title>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Irish+Grover" />


<style>

*{

padding: 0;
margin: 0;
/* overflow: hidden; */
box-sizing: border-box;

}

.container1{

width: 100vw;
height: 100vh;


}


nav{

position: sticky;
width: 100vw;
height: 6vh;
/* background-color: rgb(64, 111, 182); */

background-color: #4BBEFF;
}

.navc{

width: 95vw;
height: 100%;
margin: auto;
display: flex;
justify-content: space-between;
align-items: center;

}
.brand_name{

display: flex;
align-items: center;

}
.brand_side {

display: flex;
justify-content: space-evenly;
align-items: center;   
width: 30%; 
height: 100%;    


}

.style_bar{

opacity: 0;

}

.profile_new1:hover{

cursor: pointer;    
transition-property: all;
transition-duration: 300ms;
transition-timing-function: linear;
color: white;      



}

.s:hover{

cursor: pointer;    
transition-property: all;
transition-duration: 300ms;
transition-timing-function: linear;
color: white;  
.style_bar{
transition-property: all;
transition-duration: 300ms;
transition-timing-function: linear;
opacity: 1;
}
.fa-solid{
 transition-property: all;
transition-duration: 300ms;
transition-timing-function: linear;
color: white;


}

}

.fa-solid {

font-size: 0.8vw; 
color: rgb(217, 111, 111);   

}

.hero_first{

/* margin-top: 2vh;     */
width: 100vw;
height: 40vw;
overflow-y: hidden;

}

video{

    
width: 100%;
height: 50%; 
 

}
.write_video{
   
position: absolute;
color: white;
right: 5vw;
font-size: 2vw;
top: 10vh;
border-left: 0.34vw solid white;
padding-left: 3vw;

}
.hero_sec{

width: 90vw;
margin: auto;

}

.changing_images{

display: grid;
grid-template-columns: repeat(4,20vw);
gap: 3vw;

}

.i1{

width: 20vw;
height: 40vh;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-image: url(i1.jpg);
overflow-y: hidden;

}
.i2{

width: 20vw;
height: 40vh;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-image: url(i2.jpg);
overflow-y: hidden;
}
.i3{

width: 20vw;
height: 40vh;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-image: url(i3.jpg);
overflow-y: hidden;
}
.i4{

width: 20vw;
height: 40vh;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-image: url(i5.jpg);
overflow-y: hidden;
}
.overlay1{

width: 20vw;
height: 40vh; 
background-color: rgb(114, 105, 105);   
opacity: 0.6; 
display: flex;justify-content: center;align-items: center;

}

.i4:hover{

.overlay1{

transition-property: all;   
transition-duration: 400ms;
transition-timing-function: ease-in-out;    
transform: translateY(-40vh);

}
}

.i3:hover{

.overlay1{

transition-property: all;   
transition-duration: 400ms;
transition-timing-function: ease-in-out;    
transform: translateY(-40vh);

}

}

.i2:hover{

.overlay1{

transition-property: all;   
transition-duration: 400ms;
transition-timing-function: ease-in-out;    
transform: translateY(-40vh);

}

}

.i1:hover{

.overlay1{

transition-property: all;   
transition-duration: 400ms;
transition-timing-function: ease-in-out;    
transform: translateY(-40vh);

}

}

.hero_thi{

    
width: 90vw;
margin: auto;

display: grid;

grid-template-columns: repeat(2,35vw);
grid-row-gap: 5vh;
justify-content: space-evenly;

}
.cards{

display: flex;
align-items: center;
width: 35vw;
height: 25vh;
border-radius: 50px;
/* border: 2px solid gray; */
/* box-shadow: 0 1vh 1vh rgb(64, 111, 182); */

box-shadow: 0 1vh 1vh rgb(68, 67, 67);

}
.right{


display: flex;
flex-direction: column;
gap: 1vw;
margin-left: 1vh;

}


.cards:hover{

transition: all;
transition-duration: 500ms;   
transition-timing-function: ease-in-out; 
transform: scale(1.1);

}

.profile_new1 a:hover{

color: white;

}





</style>

<link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">


</head>
<body>

<script src="https://kit.fontawesome.com/0d5ba16c9d.js" crossorigin="anonymous"></script>    


<div class="container1">

    <!-- nav -->
<nav>

<div class="navc">

<!--Brand name-->
<div class="brand_name">
    <h3 style="font-size: 1.5vw;font-style: italic;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;font-weight: lighter;"><span style="border: 2px solid grey ;border-radius: 50%;padding: 0.2vw 0.5vw;background-color:whitesmoke;" >A</span><span style="border-bottom: 2px solid black;">mico</span></h3>
</div>

<!-- booking cat filter -->
<div class="brand_side">


    <span class="s" style="display: flex;gap: 0.5vw;align-items: center;" ><span style="font-size: 1vw;"><a href="index.html">Login</a></span> <i class="fa-solid fa-chevron-down"></i> <div class="style_bar"  style="width: 4.2vw;height: 0.42vh;background-color: rgb(220, 111, 111);position: absolute;bottom: 0;"></div></span>
    <span class="s" style="display: flex;gap: 0.5vw;align-items: center;"><span style="font-size: 1vw;"><a href="home.html">Home</a></span> <i class="fa-solid fa-chevron-down"></i><div class="style_bar" style="width: 4.2vw;height: 0.42vh;background-color: rgb(220, 111, 111);position: absolute;bottom: 0;"></div></span>
    <span class="s" style="display: flex;gap: 0.5vw;align-items: center;"><span style="font-size: 1vw;"><a href="post.html">Post</a></span> <i class="fa-solid fa-chevron-down"></i><div class="style_bar" style="width: 4.2vw;height: 0.42vh;background-color: rgb(220, 111, 111);position: absolute;bottom: 0;"></div></span>
    <span class="s" style="display: flex;gap: 0.5vw;align-items: center;" ><span style="font-size: 1vw;"><a href="about.html">About Us</a></span> <i class="fa-solid fa-chevron-down"></i> <div class="style_bar"  style="width: 4.2vw;height: 0.42vh;background-color: rgb(220, 111, 111);position: absolute;bottom: 0;"></div></span>
    <span class="s" style="display: flex;gap: 0.5vw;align-items: center;" ><span style="font-size: 1vw;"><a href="contact.html">Contact</a></span> <i class="fa-solid fa-chevron-down"></i> <div class="style_bar"  style="width: 4.2vw;height: 0.42vh;background-color: rgb(220, 111, 111);position: absolute;bottom: 0;"></div></span>
    
    </div>   

<!-- profile section -->


<div class="profile_new" style="display: flex;gap: 0.6vw;align-items: center;">

<i style="font-size: 1.2vw;border: 1px solid gray;border-radius: 50%;padding: 0.4vw 0.4vw;color: black;" class="fa-solid fa-user"></i>  
<span class="profile_new1" style="font-size: 1vw;"><a href="profile.html">Profile</a></span>
<a href="logout.php"><i style="font-size: 1vw;border-radius: 50%;padding: 0.4vw 0.4vw;color: black;"   class="fa-solid fa-right-from-bracket"></i></a>

</div>





</div>    


</nav>    

<!-- hero section -->

<section class="hero_first">

<!-- video writing -->
<div class="write_video">
<h1><span style="color: rgb(216, 155, 94);">Amico</span><br> <span>The Travel Guide</span></h1>        
</div>



    <!-- video -->
<div class="vedo"><video  loop autoplay muted src="https://trekmunk.b-cdn.net/home.webm"></video></div>


    
</section>

<div style="position: sticky;font-size: 2vw;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-align: center;margin-top: 2vw;font-family: 'Times New Roman', Times, serif;">Amico's<span style="color: #4BBEFF;"> Experiences</span></div>

<!-- hero section 2 -->
<section class="hero_sec">

    <!-- change images -->
<div class="changing_images" style="margin-top: 3.3vh;">
    
<div class="i1">
<div class="overlay1">
<h2 style="font-size: 2vw;color: white;">Temples</h2>
</div>    
</div>
<div class="i2">
    <div class="overlay1">
        <h2 style="font-size: 2vw;color: white;">Concerts</h2>
        </div>     
</div>
<div class="i3">
    <div class="overlay1">
        <h2 style="font-size: 2vw;color: white;">Treks</h2>
        </div> 
</div>
<div class="i4">
    <div class="overlay1">
        <h2 style="font-size: 2vw;color: white;">Forts</h2>
        </div> 
</div>

</div>



</section>


<!-- top rated exp -->

<div style="margin-left: 5vw; font-size: 1.4vw;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;margin-top: 5vh;"><i  style="color: rgb(255, 191, 0);font-size: 2vh;" class="fa-solid fa-bolt"></i><span> Top Rated Experiences</span></div>

<!-- hero section 3 -->

<section class="hero_thi" style="margin-top: 3vh;">

<a href="sect1.html">

<div class="cards" >
    <!-- left section -->
<div class="left">
<img style="width: 16vw; height: 25vh;border-radius: 50px;" src="c1.webp" alt="">    
</div>
<!-- right section -->
<div class="right">

<h3 style="font-size: 1vw;">"Ghoradeshwar Mahadev Temple Trek near Pune "</h3>   

<div style="font-size: o.5vw;"><i style="color: blue;" class="fa-solid fa-person-hiking"></i><span style="font-size: 0.7vw;">   Trekking</span></div>

<p style="font-size: 0.8vw;color: rgb(21, 20, 20);">Host Name - By Ghooming Bird</p>

<div style="margin-top: 10px;"><span style="font-size: 0.7vw;color: brown;">₹499  </span><strike style="font-size: 0.5vw;">₹899</strike></div>

</div>

</div>   

</a> 

<a href="sect2.html">

    <div class="cards" >
        <!-- left section -->
    <div class="left">
    <img style="width: 16vw; height: 25vh;border-radius: 50px;" src="c2.jpg" alt="">    
    </div>
    <!-- right section -->
    <div class="right">
    
    <h3 style="font-size: 1vw;">"Ghoradeshwar Mahadev Temple Trek near Pune "</h3>   
    
    <div style="font-size: o.5vw;"><i style="color: blue;" class="fa-solid fa-person-hiking"></i><span style="font-size: 0.7vw;">   Trekking</span></div>
    
    <p style="font-size: 0.8vw;color: rgb(21, 20, 20);">Host Name - By Ghooming Bird</p>
    
    <div style="margin-top: 10px;"><span style="font-size: 0.7vw;color: brown;">₹499  </span><strike style="font-size: 0.5vw;">₹899</strike></div>
    
    </div>
    
    </div>    

</a>


<a href="sect3.html">

    <div class="cards" >
        <!-- left section -->
    <div class="left">
    <img style="width: 16vw; height: 25vh;border-radius: 50px;" src="c7.jpg" alt="">    
    </div>
    <!-- right section -->
    <div class="right">
    
    <h3 style="font-size: 1vw;">"Ghoradeshwar Mahadev Temple Trek near Pune "</h3>   
    
    <div style="font-size: o.5vw;"><i style="color: blue;" class="fa-solid fa-person-hiking"></i><span style="font-size: 0.7vw;">   Trekking</span></div>
    
    <p style="font-size: 0.8vw;color: rgb(21, 20, 20);">Host Name - By Ghooming Bird</p>
    
    <div style="margin-top: 10px;"><span style="font-size: 0.7vw;color: brown;">₹499  </span><strike style="font-size: 0.5vw;">₹899</strike></div>
    
    </div>
    
    </div>  

</a>  


<a href="sect4.html">

    <div class="cards" >
        <!-- left section -->
    <div class="left">
    <img style="width: 16vw; height: 25vh;border-radius: 50px;" src="c4.jpg" alt="">    
    </div>
    <!-- right section -->
    <div class="right">
    
    <h3 style="font-size: 1vw;">"Ghoradeshwar Mahadev Temple Trek near Pune "</h3>   
    
    <div style="font-size: o.5vw;"><i style="color: blue;" class="fa-solid fa-person-hiking"></i><span style="font-size: 0.7vw;">   Trekking</span></div>
    
    <p style="font-size: 0.8vw;color: rgb(21, 20, 20);">Host Name - By Ghooming Bird</p>
    
    <div style="margin-top: 10px;"><span style="font-size: 0.7vw;color: brown;">₹499  </span><strike style="font-size: 0.5vw;">₹899</strike></div>
    
    </div>
    
    </div>       

</a> 


<a href="sect5.html">

<div class="cards" >
    <!-- left section -->
<div class="left">
<img style="width: 16vw; height: 25vh;border-radius: 50px;" src="c9.webp" alt="">    
</div>
<!-- right section -->
<div class="right">

<h3 style="font-size: 1vw;">"Ghoradeshwar Mahadev Temple Trek near Pune "</h3>   

<div style="font-size: o.5vw;"><i style="color: blue;" class="fa-solid fa-person-hiking"></i><span style="font-size: 0.7vw;">   Trekking</span></div>

<p style="font-size: 0.8vw;color: rgb(21, 20, 20);">Host Name - By Ghooming Bird</p>

<div style="margin-top: 10px;"><span style="font-size: 0.7vw;color: brown;">₹499  </span><strike style="font-size: 0.5vw;">₹899</strike></div>

</div>

</div>    


</a>


<a href="sect6.html">

<div class="cards" >
    <!-- left section -->
<div class="left">
<img style="width: 16vw; height: 25vh;border-radius: 50px;" src="c6.jpg" alt="">    
</div>
<!-- right section -->
<div class="right">

<h3 style="font-size: 1vw;">"Ghoradeshwar Mahadev Temple Trek near Pune "</h3>   

<div style="font-size: o.5vw;"><i style="color: blue;" class="fa-solid fa-person-hiking"></i><span style="font-size: 0.7vw;">   Trekking</span></div>

<p style="font-size: 0.8vw;color: rgb(21, 20, 20);">Host Name - By Ghooming Bird</p>

<div style="margin-top: 10px;"><span style="font-size: 0.7vw;color: brown;">₹499  </span><strike style="font-size: 0.5vw;">₹899</strike></div>

</div>

</div>  

</a>  



</section>

<!--For you -->
<div style="margin-left: 5vw; font-size: 1.4vw;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;margin-top: 5vh;"><i  style="color: rgb(255, 0, 81);font-size: 2vh;"  class="fa-solid fa-heart"></i><span> What are you looking for?</span></div>


<!-- customslider -->

<section class="hero_four" style="width: 100vw;height: 65vh;margin-top: 5vh;">
 
    <div class="container" style="display: flex;justify-content: center;">
        <!-- <div class="title-wrap">
            <span class="sm-title">know about some places before your travel</span>
            <h2 class="lg-title">featured places</h2>
        </div> -->

        <div class="featured-row" style="display: grid;grid-template-columns: repeat(3,20vw);gap: 1vw;">
            <div class="featured-item my-2 shadow" style="width: 20vw;height: 20vw;" >
                <img src="s2.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span style="font-size: 2vh;position: relative;">
                        <i class="fas fa-map-marker-alt"></i>
                        Akshardham Temple, New Delhi
                    </span>
                    <div>
                        <p style="font-size: 1.5vh;" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow" style="width: 20vw;height: 20vw;"  >
                <img src="s3.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span style="font-size: 2vh;position: relative;">
                        <i class="fas fa-map-marker-alt"></i>
                        Sunburn Festival, Goa
                    </span>
                    <div>
                        <p style="font-size: 1.5vh;" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow" style="width: 20vw;height: 20vw;" >
                <img src="s4.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span style="font-size: 2vh;position: relative;">
                        <i class="fas fa-map-marker-alt"></i>
                        Agra Fort, Agra
                    </span>
                    <div>
                        <p style="font-size: 1.5vh;" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow" style="width: 20vw;height: 20vw;" >
                <img src="s9.webp" alt="featured place">
                <div class="featured-item-content">
                    <span style="font-size: 2vh;position: relative;">
                        <i class="fas fa-map-marker-alt"></i>
                       Taj Mahal, Agra
                    </span>
                    <div>
                        <p style="font-size: 1.5vh;" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow" style="width: 20vw;height: 20vw;" >
                <img src="s10.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span style="font-size: 2vh;position: relative;">
                        <i class="fas fa-map-marker-alt"></i>
                        kedarnath temple, Uttarakhand
                    </span>
                    <div>
                        <p style="font-size: 1.5vh;" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow" style="width: 20vw;height: 20vw;" >
                <img src="s12.webp" alt="featured place">
                <div class="featured-item-content">
                    <span style="font-size: 2vh;position: relative;">
                        <i class="fas fa-map-marker-alt"></i>
                        Trek The Himalayas, Uttarakhand
                    </span>
                    <div>
                        <p style="font-size: 1.5vh;" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>


<section id="testimonials" class="py-4" style="margin-top: 25vh;">
    <div class="container">
        <div class="title-wrap">
            <span class="sm-title" style="font-size: 1vw;" >what our clients say about us</span>
            <h2 class="lg-title" style="font-size: 1.4vw;margin-top: 2vh;">testimonials</h2>
        </div>

        <div class="test-row" style="display: grid;grid-template-columns: repeat(3,15vw);justify-content: center;gap: 2vw;">
            <div class="test-item" style="width: 15vw;">
                <p class="text" style="font-size: 0.8vw;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda blanditiis, asperiores, velit iste eos officiis tempora magni quaerat quo consectetur expedita cum recusandae facere nam voluptate minus iusto eum. Delectus!</p>
                <div class="test-item-info">
                    <img style="width: 3vw;height: 3vw;" src="p1.png" alt="testimonial">
                    <div>
                        <h3 style="font-size: 1vw;">Jaydev D...</h3>
                        <p style="font-size: 1vh;" class="text">Trip to panchgani</p>
                    </div>
                </div>
            </div>

            <div class="test-item" style="width: 15vw;">
                <p class="text" style="font-size: 0.8vw;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed ut dolores tenetur harum deserunt. Maxime tenetur consectetur recusandae nobis fugit iusto natus quibusdam nulla!</p>
                <div class="test-item-info">
                    <img style="width: 3vw;height: 3vw;" src="p2.jpg" alt="testimonial">
                    <div>
                        <h3 style="font-size: 1vw;">Piyush f...</h3>
                        <p style="font-size: 1vh;" class="text">Trip to kerala</p>
                    </div>
                </div>
            </div>

            <div class="test-item" style="width: 15vw;">
                <p class="text" style="font-size: 0.8vw;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem sapiente amet expedita quae autem deleniti quo magni numquam facilis soluta dicta, praesentium ipsum, quos optio sed quibusdam! Reprehenderit recusandae provident id nemo!</p>
                <div class="test-item-info">
                    <img style="width: 3vw;height: 3vw;" src="p3.jpg" alt="testimonial">
                    <div>
                        <h3 style="font-size: 1vw;" >Sakshi P...</h3>
                        <p style="font-size: 1vh;" class="text">Trip to Jammu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
 <footer style="width: 100vw;background-color: black;height: 50vh;margin-top: 5vh;">

<div class="footsect" style="display: flex;justify-content: space-around;">

<div class="f1" style="width: 18%;position: relative;top: 5vh;">
<div class="h1" style="font-size: 1.7vw;margin-bottom: 2vh;">AMICO</div>
<div class="div" style="font-size: 1vw;display: inline;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam tempore ipsa necessitatibus omnis fugit sint officia aliquid, non excepturi sunt architecto veniam fuga odit? Officia harum, eum alias nostrum quas recusandae facilis ratione, excepturi magnam vitae autem consectetur, sapiente explicabo! Temporibus et ipsum minima eveniet!</div>
</div>

<div class="f2">
    <div class = "footer-item" style="position: relative;top: 3vh;">
        <h2 style="font-size: 1.6vw;">Follow us on: </h2>
        <ul class = "social-links" style="margin-top: 2vh;display: flex;gap: 1vw;">
            <li>
                <a href = "#">
                    <i style="font-size: 1.5vw;" class = "fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href = "#">
                    <i style="font-size: 1.5vw;" class = "fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href = "#">
                    <i style="font-size: 1.5vw;" class = "fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href = "#">
                    <i style="font-size: 1.5vw;" class = "fab fa-pinterest"></i>
                </a>
            </li>
            <li>
                <a href = "#">
                    <i style="font-size: 1.5vw;" class = "fab fa-google-plus"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="f3" style="position: relative;top: 4vh;display: flex;flex-direction: column;gap: 1vh;">
   
        <h2 style="font-size: 1.5vw;">Popular Places:</h2>
        <ul style="font-size: 1vw;display: flex;flex-direction: column;gap: 1vh;margin-top: 1vh;text-align: start;">
            <li><i class="fas fa-map-marker-alt"></i> Uttarakhand</li>
            <li><i class="fas fa-map-marker-alt"></i> Panchgani</li>
            <li><i class="fas fa-map-marker-alt"></i> Kerala</li>
            <li><i class="fas fa-map-marker-alt"></i> Jammu</li>
            <li><i class="fas fa-map-marker-alt"></i> Agra</li>
            <li><i class="fas fa-map-marker-alt"></i> Goa</li>
        </ul>
    
</div>


<div class="f4" style="position: relative;top: 3vh;">
    <div class = "subscribe-form footer-item" >
        <h2 style="font-size: 1vw;">Subscribe for Newsletter!</h2>
        <form class = "flex" style="display: flex;flex-direction: column;gap: 1vh;margin-top: 50px;">
           <button style="width: 3vw;border: 2px solid gray;border-radius: 30px;height: 3vh;font-size: 0.8vw;">Login</button>
           <button style="width: 4vw;border: 2px solid gray;border-radius: 30px;height: 3vh;font-size: 0.8vw;">Register</button>
           <button style="width: 5vw;border: 2px solid gray;border-radius: 30px;height: 3vh;font-size: 0.8vw;">Subscribe</button>
        </form>
    </div>
</div>

</div>


</div>

 </footer>

<script src="home.js"></script>
    
</body>
</html>




    
    
    
    
    <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            // echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       <!-- :) -->
      </p>
      <!-- <a href="logout.php">Logout</a> -->
    </div>
</body>
</html>