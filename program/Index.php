<!DOCTYPE html>
<html>
<head>
  <title>Perfect Fitness</title>
  <body style="background-color:black;"></body>
  <link rel="stylesheet" href="./styles.css">

</head>
<body>
  <body>
    <div class="nav">

      <div class="nav-logo">
        <img  src="../images/Logo.png" alt="Perfect Fitness logo" style="width:145px;height:145px;">
      </div>
      <div class="nav-items">

        <ul>
          <li><a href="#">Home</a> </li>
          <li><a href="#">Free courses</a> </li>
          <li><a href="#">Programs</a> 
          <ul>
            <li><a href="personal_training.php">Personal Training</a> </li>
            <li><a href="online_training.php">Online Training</a> </li>
            <li><a href="nutrition_coaching.php">Nutrition Coaching</a> </li>
          </ul>
          </li>

          <li><a href="#">About</a> </li>
          <li><a href="#">Contact Us</a> </li>
          <li><a href="#">FAQ</a> </li>
          <li><a href="#">Blog/Resources</a> </li>
          <li><a href="#">Appointments</a> </li>
          <li><a href="#">LOGIN</a> </li>
        </ul>

    </div>

    </div>

    <div class="slide-container">
      <div class="Slideshow" style="max-width:520px; margin-top: 120px;">
        <img class="mySlides" src="../images/home-bg-1.jpg" style="width:310%">
        <img class="mySlides" src="../images/home-bg-2.jpg" style="width:310%">
       
      </div>
  
    </div>
    <div class="home-form">
      <p style="color: red;"><h2>Book <span class="font-colour">a free trial</span></h2></p>
      </div>
      <div class="form-des">
      <p style="color: white;"></p>Tell us about your goals,and we'll find you a perfect trainer</p>
      </div>

    <div class="container">
      <div class="landing-photo">
        <img src="../images/Formimage2.jpg" alt="Free trail" style="width:600px;height:675px;">
      </div>
  
      <div class="landing-form">
      
          <label for="name">Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name">
      
          <label for="mnumber">Mobile number</label>
          <input type="text" id="mnumber" name="mobilenumber" placeholder="mobile number">

          <label for="email">E-mail</label>
          <input type="text" id="email" name="Email" placeholder="E-mail">

          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="srilanka">Sri Lanka</option>
            <option value="india">India</option>
            <option value="maldives">Maldives</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>

          <label for="comment">Comment</label>
          <input type="text" id="comment" name="Comment" placeholder="Any comments,your fitness goals">
        
          <input type="start" value="GET STARTED">
        </form>
          
          
          
         
        </form> 
      </div>
    </div>
    
       
    <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); 
    }
  
    
    </script>
    
    

    
    </body>
 
  
  <footer>
    
  </footer>
</body>
</html>