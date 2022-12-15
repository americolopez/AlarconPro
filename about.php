<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Fstyle/styleAbout.css">
	<title>About page</title>
</head>
<body>
<div class="WebContainer">  
  <header>
      <ul> 
        <li><img src="images/logo2.jpeg" alt="logo"></li>
        <li><img class="imgcenter" src="images/name2.jpeg" alt="name"></li>
        <li class="float"><a href="contact.php"><button class="button1">Quota</button></a></li>
        <li class="float"><a class="lia" href="contact.php">Contact</a></li>
        <li class="float"><a class="lia" href="gallery.php">Gallery</a></li>
        <li class="float"><a class="lia" href="about.php">About</a></li>
        <li class="float"><a class="lia" href="index.php">Home</a></li>
       </ul>
  </header>
      <div class="wrapper">
        <div class="articles">
          <div class="boxSize" >
            <div class="contMon">
              <h2> Interior Service</h2>
                <p class="text">
                Do you have a project or idea that you would like to bring to life? Our experienced painters with years of expertise in residential painting will treat your house like it’s their own and deliver top-notch results no matter how big or small your project is.<br>
                </p>    
                <a class="body-number" href="tel:+3344791871">Give us a call +(334)479-1871</a>
            </div>    
            <img src="images/interior.jpeg" alt="name"> 
          </div>           
          
          <div class="boxSize">
            <img class= "body-img" src="images/exterior.jpeg" alt="name" width="550" height="650">
            <div class="contMon">
              <h2>Exterior Services</h2>
              <p class="text">
              Your house exterior is the first impression and thing people see when approaching your home. Exterior endures more wear and tear than any other painted surface. <br>
              </p>       
            </div>      
          </div>

          <div class="boxSize" >
            <div class="contMon">
              <h2> Painting Materials</h2>
              <p class="text">
              your satisfaction is our main priority. Since our business started, quality has been our primary focus. By working with the best materials in the industry and employing the most experienced and meticulous contractors, we are able to deliver solid and long-lasting solutions for everyone. We never compromise quality by buying cheap materials we only use top of the line brands from Sherwin Williams and offer in writing, not a handshake warranty, 2 years warranty against blistering and peeling.<br>
              </p>    
              <a class="body-number" href="tel:+3344791871">Give us a call +(334)479-1871</a>
            </div>    
            <img src="images/paint.jpeg" alt="name" width="500" height="500">
          </div>
        
          <div class="about-rect">
            <img class="rect-img"src="images/rect-logo.jpeg" width="600" height="50">
            <div class="about-p">Intrigued? Contact Us for Free Estimate</div>
              <a class="about-number" href="tel:+3344791871">(334) 479-1871</a>
              <a href="contact.php"><button class="about-button"> Request a Free Quota</button></a>
          </div>

          <div class="follow-pro">
            <div class="pro-p">Follow us @AlacronPro</div>
          </div>

          <div class="push"></div>
        </div>
      </div>
      <footer>
        <div class="footer-box">
          <div class="footer-left-title">About Us
        </div>
        <div class="footer-p">At ALARCONPRO PAINTING SERVICES LLC, your satisfaction is our main priority. Since our business started, quality has been our focus. By working with the best materials in the industry and employing the most experienced and meticulous contractors, we are able to deliver solid and long-lasting solutions for everyone. </div>     
        </div>
        <div class="footer-box-middle">
          <div class="footer-middle-title">contact</div>
            <div class="vertical-menu">
              <a>(502) 220-7882</a>
              <a>Americolopez13@gmail.com</a><br>
              <a> Lousiville and Shelbyville service area</a>
              <a>@AlacronPro</a>
            </div>
          </div>
          <div class="footer-box-right">
              <div class="footer-right-title">Info</div>
          <div class="footer-right-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cupiditate aperiam tempore accusamus debitis dicta, 
            vitae saepe dolores architecto quae ab obcaecati,
            harum labore suscipit accusantium iusto modi! Officia, hic doloribus.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor facilis sint exercitationem aliquid eius magni fugit ipsum assumenda vitae ea, 
            voluptates iste repellendus, qui ducimus accusantium error, sapiente maiores atque.</div>     
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
      </footer>
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