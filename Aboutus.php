<?php 
session_start();

include("navbar.php");

?>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image: url("images/carousel.png");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.container {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  border-radius: 10px;
  margin-top: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h2 {
  color: #007bb5;
}

p {
  color: #333;
}

.fa {
  padding: 20px;
  font-size: 30px;
  text-align: left;
  text-decoration: none;
  margin-top: 30px;
  
}



.fa-facebook {
  /* background: #3B5998; */
  color: white;
}
.fa-facebook:hover {
  opacity: 0.7;
}

.fa-linkedin {
  /* background: blueviolet; */
  color: white;
  margin-left: 40px;
}
.fa-linkedin:hover {
  opacity: 0.7;
}

.active-cyan-3 input[type=text] {
  border: 1px solid #4dd0e1;
  box-shadow: 0 0 0 1px #4dd0e1;
}
</style>

<div class="bg"></div><br>
<div class="container">
  <h2>About Us</h2>
  <p>
    Welcome to our house/room rental platform. We are dedicated to helping you find the perfect place to stay, whether it's for a short-term visit or a long-term residence. Our mission is to provide a user-friendly and efficient platform for property seekers and owners to connect.
  </p>
  <p>
    Our team is committed to ensuring your experience on our website is seamless and enjoyable. We value your feedback and continually work to improve our services to meet your housing needs.
  </p>
  <p>
    Connect with us on social media to stay updated:
  </p>
  <div class="fa">
  <a href="#"  class="fa-facebook"> <img style="width:40px"  src="images/480px-Facebook_f_logo_(2021).svg.png" alt="">
  
 </a>
  <a href="#" class="fa-linkedin"><img style="width:40px"  src="images/instagramlogo.png" alt=""></a>
  </div>
</div>
<br><br>
<?php 

//include("property-list.php");

?>
