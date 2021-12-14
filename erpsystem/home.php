<!DOCTYPE html>
<html lang="en">

<head>

  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<style>
body {
  background-color: lightblue;
    background-image: url("assets/images/movinglines2.gif");
}
</style>

<style>
.button {
  background-color: #00ff00;
  border: none;
  color: black;
  padding: 30px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
  background-color: #00ff00;
  color: black;
  border: 3px solid #009933;
}

</style>

<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<style>
*{
  padding:0;margin:0;
}

body{
	font-family:Verdana, Geneva, sans-serif;
	background-color:#CCC;
	font-size:12px;
}

.label-container{
	position:fixed;
	bottom:48px;
	right:105px;
	display:table;
	visibility: hidden;
}

.label-text{
	color:#FFF;
	background:rgba(51,51,51,0.5);
	display:table-cell;
	vertical-align:middle;
	padding:10px;
	border-radius:3px;
}

.label-arrow{
	display:table-cell;
	vertical-align:middle;
	color:#333;
	opacity:0.5;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#06C;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	font-size:24px;
	margin-top:18px;
}

a.float + div.label-container {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.5s ease;
}

a.float:hover + div.label-container{
  visibility: visible;
  opacity: 1;
}
</style>

<style>
  h4 {
    font-family: "Marcellus SC", Papyrus, Garamond;
    font-size: 28px;
  }
</style>

</head>

<body>


<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>




  <center>
    <br><br><br><br><br><br><br><br>
  <h1><font Size="6" face="Lucida Bright">Sistem Informasi Akademik</font></h1> <br>
  <p>
  <font Size="6" style="color:#5FA846"><b>Kalbis Intitute University</font></b>
</p>
  <img src="assets/images/kalbis.png" width="450px" height="150px" /> <br><br><br>
  </center>

  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="assets/images/a1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="assets/images/a2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="assets/images/a3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="assets/images/a4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="assets/images/a5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="assets/images/a6.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <div class="column">
        <img class="demo cursor" src="assets/images/a1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Photography Studio">
      </div>
      <div class="column">
        <img class="demo cursor" src="assets/images/a2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Library">
      </div>
      <div class="column">
        <img class="demo cursor" src="assets/images/a3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Student Longue">
      </div>
      <div class="column">
        <img class="demo cursor" src="assets/images/a4.jpg" style="width:100%" onclick="currentSlide(4)" alt="TV Studio">
      </div>
      <div class="column">
        <img class="demo cursor" src="assets/images/a5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Radio Studio">
      </div>
      <div class="column">
        <img class="demo cursor" src="assets/images/a6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Cafetaria">
      </div>
    </div>
  </div>

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
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
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>

<br>
<br>
<br>
<br>

<center>
  <iframe width="800" height="600"
  src="https://www.youtube.com/embed/fuTzb0jtrxA">
  </iframe>
</center>

<br>
<br>
<button class="button1"><a href="http://kalbis.ac.id/?lang=en"><font face ="Russo One">Our page</a></font> </button>
<br>
<br>

<div class="container mt-2">
  <div class="row">
    <div class="col-sm-4">
      <h4>Who are we?</h4>
      <p><font face ="MONTSERRAT" size = "+1">We are Kalbis Intitute, a CBU ( Company Based University ) that specializes in lots of things. </font></p>
    </div>
    <div class="col-sm-4">
      <h4>Where are We?</h4>
      <p><font face ="MONTSERRAT" size = "+1">We are located in Pulomas, East Jakarta, Indonesia.</font></p>
    </div>
    <div class="col-sm-4">
      <h4>What do we provide?</h4>
      <p><font face ="MONTSERRAT" size = "+1">As a college, the facilities we provide are such as photography studio,...</font></p>
    </div>
  </div>
</div>

<a href="#" class="float">
<i class="fa fa-envelope my-float"></i>
</a>
<div class="label-container">
<div class="label-text">Feedback</div>
<i class="fa fa-play label-arrow"></i>
</div>

</body>
</html>
