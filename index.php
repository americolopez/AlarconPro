<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Fstyle/style.css">
	<title>home page</title>
</head>
<body>
<div class="WebContainer">
  <header>
    <ul>
      <li><img src="images/logo2.jpeg" alt="logo"></li>
      <li><img class="imgcenter" src="images/name2.jpeg" alt="name"></li>
      <li class="float"><a href="contact.php"><button class="button1">quota</button></a></li>
      <li class="float"><a class="lia" href="contact.php">Contact</a></li>
      <li class="float"><a class="lia" href="gallery.php">Gallery</a></li>
      <li class="float"><a class="lia" href="about.php">About</a></li>
      <li class="float"><a class="lia" href="index.php">Home</a></li>   
    </ul>
  </header>
  <div class="wrapper">
    <div class="container">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="images/house1.jpeg" class="image" style="width:100%">
        </div>
    
        <div class="mySlides fade"> 
          <img src="images/cover2.jpeg" class="image" style="width:100%"> 
        </div>
    
        <div class="mySlides fade">
          <img src="images/cover3.jpeg" class="image" style="width:100%">
        </div>
      
    
        <div class="middle">
          <div class="middle-title">Interior & Exterior Finishing</div> 
          <div class="middle-subheader">Painting services in Louisville, KY</div>
          <div class="middle-text">When you hire our services, you can count on us for the results you want and need. Get in touch today for a FREE ESTIMATE, and discover the advantage of working with AlacronPro Painting.</div>
         <a href="contact.php"><button class="middle-button">Request a Free Quota</button></a>
        </div>     
      </div>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
      <div class="articles">

        <div class="boxSize" >
          <div class="contMon">
            <h2> Alacron Pro Painting</h2>
              <p class="text">
                Whether your project is a residential, or a commercial job site, we conduct ourselves as though we live on the premises. We will respect every aspect of your residence or job site. Among the ways we show respect to your property is our notice of upcoming work, keeping a low noise level, flexibility for daily start times and end of day clean up.<br>
              </p>    
              <a class="body-number" href="tel:+3344791871">Give us a call +(334)479-1871</a>
          </div>    
          <img src="images/img9.jpeg" alt="name" width="500" height="600">
        </div>
       
        <div class="boxSize">
          <img class= "body-img" src="images/para2.jpeg" alt="name" width="500" height="600">
          <div class="contMon">
            <h2>Why AlacronPro?</h2>
            <p class="text">
              Alacron Pro Painting is committed to providing the best customer service and top quality interior/exterior coatings, for all caliber projects. We are dedicated to providing a product that lasts, making sure to apply the best suited coating for each surface. Call today to schedule your appointment and free estimate for your Louisville home painting. We can’t wait to hear from you!<br>
            </p>      
          </div>      
        </div>
      </div>
    </div>
    <div class="push"></div>
  </div>

  <div id="footer">
    <div class="footer-box">
     <div class="footer-title">About Us</div>
     <div class="footer-p">At ALARCONPRO PAINTING SERVICES LLC, your satisfaction is our main priority. Since our business started, quality has been our focus. By working with the best materials in the industry and employing the most experienced and meticulous contractors, we are able to deliver solid and long-lasting solutions for everyone. </div>     
    </div>

    <div class="footer-box-middle">
      <div class="footer-title">contact</div>
      <div class="vertical-menu">
        <a>(502) 220-7882</a>
        <a>Americolopez13@gmail.com</a><br>
        <a> Lousiville and Shelbyville service area</a>
        <a>@AlacronPro</a>
      </div>
    </div>

    <div class="footer-box-left">
      <div class="footer-title">Info</div>
      <div class="footer-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Cupiditate aperiam tempore accusamus debitis dicta, 
        vitae saepe dolores architecto quae ab obcaecati,
         harum labore suscipit accusantium iusto modi! Officia, hic doloribus.
       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Dolor facilis sint exercitationem aliquid eius magni fugit ipsum assumenda vitae ea, 
       voluptates iste repellendus, qui ducimus accusantium error, sapiente maiores atque.
      </div>     
    </div>

    <div class="footer-bottom">
      <div class="footer-bottom-p">
        Lorem ipsum dolor, sit amet consectetur 
        adipisicing elit. Autem distinctio culpa dignissimos ad, 
        aliquid quisquam itaque sint officiis, voluptate iusto delectus, 
        ullam placeat odit minima omnis odio quae optio. Eveniet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptate aperiam harum, voluptatibus in 
      </div>
      <div class="footer-bottom-p2">
        Website by Americo Lopez
      </div>
    </div>
  </div>
</div>
 






    <script>
    var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
    </script>
</body>
</html>
