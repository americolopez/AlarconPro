<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Fstyle/styleContact.css">
	<title>home page</title>
    <script defer src="script.js"></script>
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
<div class="container">
 <img src="images/contact.jpeg" class="image" width="100%">
 <div class="hover-left">
 <div class="contact-header">Contact Us</div>
 <div class="contact-subHeader">For a free Quote</div>
 <div class="contact-name">Alacron Pro Painting services</div>
 <a class="contact-number" href="tel:+5022207882">(502)220-7882</a>
 <div class="contact-service"> Serving Eastern Lousiville & Shelbyville area</div>
 <div class="contact-email" href="Americolopez13@gmail.com">Americolopez13@gmail.com</div>
 <div class="contact-insta">@AlacronPro on Instagram </div>
 </div>

 <div class="hover-information">
    <form id="Cust-Info" action="include/contactUpload.php" method="POST" onsubmit="checkforblank()">
    
  <input type="text" class="name" id="fname" name="Name_" placeholder="Name" onkeyup="lettersOnly(this)">

  <input type="text" class="email" name="Email" placeholder="Email">

  <div class="area-code">
  <input type="number" class="area" name="area_code" onkeypress="isInputNumber(event)">
  <p class="p2">Area Code</p>
  </div>

  <div class="phoneNumber">
    <input type="number" class="phone" name="Phone"onkeypress="isInputNumber(event)" >
    <p class="p2">Phone Number</p>
  </div>

  <input type="text" class="address" placeholder="Address" name="Address_">

  <div class="city-box">
    <input type="text" class="city" id="city" placeholder="City" name="City" onkeyup="lettersOnly(this)">
  </div>
  
  <div class="zip-box">
    <input type="text" class="zip" id="state" placeholder="State/Zip" name="State" onkeyup="lettersOnly(this)">
  </div>

  <div class="project-type">
    <p>Project type</p>
    <div class="interior-box">
    <input type="checkbox" name="Type" value="Interior">
    <label for="Interior" class="Interior">Interior</label>
    </div>
    <div class="exterior-box">
    <input type="checkbox" name="Type" value="Exterior">
    <label for="Exterior" class="Exterior">Exterior</label>
    </div>
  </div>
  <button class="sub-button"type="submit" name="submit">Submit</button>
    </form>
 </div>
 </div>
 <div class="articles">
<br>
<br>
  <div class="about-rect">
    <img class="rect-img"src="images/rect-logo.jpeg" width="600" height="50">
<div class="about-p">Intrigued? Contact Us for Free Estimate</div>
<a class="about-number" href="tel:+3344791871">(334) 479-1871</a>
<a href="contact.php"><button class="about-button"> Request a Free Quota</button></a>
</div>
<br>
<br>
<div class="follow-pro">
    <div class="pro-p">Follow us @AlacronPro</div>
</div>
  <div class="push"></div>
  </div>
  </div>

<br>
<br>
  
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
  </body>
  