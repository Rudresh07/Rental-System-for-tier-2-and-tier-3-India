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
  margin: 5px 2px;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.active-cyan-3 input[type=text] {
  border: 1px solid #4dd0e1;
  box-shadow: 0 0 0 1px #4dd0e1;
}
</style>

<div class="bg"></div><br>
<div class="container">
  <h2>Contact Us</h2>
  <p>
    We're here to assist you with any questions or inquiries you may have. Please feel free to reach out to us using the information below.
  </p>
  <p>
    Email: contact@yourwebsite.com
  </p>
  <p>
    Phone: +1 (123) 456-7890
  </p>
  <p>
    Address: 123 Main Street, Your City, Your Country
  </p>
</div>
<br><br>
<?php 

//include("property-list.php");

?>
