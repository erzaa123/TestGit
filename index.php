<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
    <style>

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
 
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
 
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
 
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
 
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
 
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
 
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
 
.active, .dot:hover {
  background-color: #717171;
}
 
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
 
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<script>
let slideIndex = 1;
showSlides(slideIndex);
 
function plusSlides(n) {
  showSlides(slideIndex += n);
}
 
function currentSlide(n) {
  showSlides(slideIndex = n);
}
 
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>
 
</head>
<body>
<header>
        <div class="main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs.php">About Us</a></li> 
                <li><a href="ContactUs.php">Contact Us</a></li>  
                <li><a href="News.php">News</a></li>
                <button class="btn"><a href="Login.html">LOGIN</a></button>
            </ul>
        </div>
    </header> 
    <br><br><br><br><br><br>

<div class="slideshow-container">
 
        <div class="mySlides fade">
          
          <img src="foto1.jpg" style="width:100vh" height="300">
          <div class="text">Caption Text</div>
        </div>
 
        <div class="mySlides fade">
        
          <img src="foto2.jpg" style="width:100%" height="300">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          
          <img src="foto3.jpg" style="width:100%" height="300">
          <div class="text">Caption Two</div>
        </div>
 
        <a class="prev" onclick="plusSlides(-1)">&lt;</a>
        <a class="next" onclick="plusSlides(1)">&gt;</a>
        <a class="next" onclick="plusSlides(1)">&gt;</a>
 
        </div>
   <br>
 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
   
</body>
</html>