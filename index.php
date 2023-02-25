<!DOCTYPE html>
<html lang="en">
<title>StudSocial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue-grey.css">
<link rel="stylesheet" href="ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="img/icons/logo.png"/>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->

<!-- Header -->
<header class="w3-container w3-pink w3-center" style="padding:30px 16px">
  <h1 class="w3-margin w3-jumbo">StudSocial</h1>
  <button class="w3-button w3-deep-orange w3-padding-large w3-large w3-margin-top" onclick="document.getElementById('signupForm').style.display='block'">Sign Up</button>
  <button class="w3-button w3-teal w3-padding-large w3-large w3-margin-top" onclick="document.getElementById('loginForm').style.display='block'">Log In</button>
</header>


<!--Signup form -->
<div id="signupForm" class="w3-modal w3-animate-zoom">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('signupForm').style.display='none'" class="w3-button w3-hover-pink w3-xlarge w3-display-topright">&times;</span>
      <input type="text" class="w3-input w3-margin-left w3-margin-bottom w3-margin-top" placeholder="Username..." style="width:70%" />
      <input type="password" class="w3-input w3-margin-left w3-margin-bottom" placeholder="Password..." style="width:70%" />
      <input type="password" class="w3-input w3-margin-left w3-margin-bottom" placeholder="Re-enter Password..." style="width:70%" />
      <select class="w3-select w3-margin-left w3-margin-bottom" style="width:32%">
        <option value="none" disabled="disabled" selected="selected">Department</option>
        <option value="Freshman">Freshman</option>
      </select>
      <select class="w3-select w3-margin-left w3-margin-bottom" style="width:30%">
        <option value="none" disabled="disabled" selected="selected">Section</option>
        <script type="text/javascript">
          for(i = 1; i <= 24; i++){
            document.write('<option value="' + i + '">' + i + '</option>');
          }
        </script>
      </select>
      <select class="w3-select w3-margin-left w3-margin-bottom" style="width:32%">
        <option value="none" disabled="disabled" selected="selected">Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <button class="w3-button w3-block w3-green w3-section">Sign Up</button>
    </div>
  </div>
</div>

<!--Login form -->
<div id="loginForm" class="w3-modal w3-animate-zoom">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('loginForm').style.display='none'" class="w3-button w3-hover-pink w3-xlarge w3-display-topright">&times;</span>
      <input type="text" class="w3-input w3-margin-left w3-margin-bottom w3-margin-top" placeholder="Username..." style="width:70%" />
      <input type="password" class="w3-input w3-margin-left w3-margin-bottom" placeholder="Password..." style="width:70%" />
      
      <button class="w3-button w3-block w3-green w3-section">Log In</button>
    </div>
  </div>
</div>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-pink w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-pink" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="document.getElementById('signupForm').style.display='block'">SignUp</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="document.getElementById('loginForm').style.display='block'">Login</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('signupForm').style.display='block'">SignUp</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('loginForm').style.display='block'">Login</a>
    <a href="about.php" class="w3-bar-item w3-button w3-padding-large">About</a>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>
    <div class="w3-twothird">
      <h1>StudSocial</h1>
      <h5 class="w3-padding-32">Welcome to StudSocial, where with the blessing of the dean, we provide you with services to help you both in your academic and social status</h5>

      <p class="w3-text-grey">
        <ul>
          <li>You can keep in touch with your friends wherever in campus they are.</li>
          <li>You can search for like-minded people and form your own groups to attract people with the same interest.</li>
          <li>We try our best to censor all the contents uploaded by our users, so as to make less distribution of disturbing content</li>
        </ul>
      </p>
      <p>So what are you waiting for? Come and join us in our quest for a better educational system. <a href="login.php">Login</a> or <a href="signup.php">Signup</a> if you haven't already</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: "Veni, vidi, vici!"</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>A <a href="about.php">Biniam Nega</a> production</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>