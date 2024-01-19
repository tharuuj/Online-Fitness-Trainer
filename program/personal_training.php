
<!DOCTYPE html>
<html>
<head>
  <title>Perfect Fitness</title>
  
  <link rel="stylesheet" href="./styles.css">
</head>
<style>
  body{
    background-color:black;
  }
</style>
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
          <li><a href="#">Blog</a> </li>
          <li><a href="#">Appointments</a> </li>
          <li><a href="#">LOGIN</a> </li>
        </ul>
    </div>
  </div>

  <div class="content">
    <table class="front-page-layout">
      
      <tr>
        <td class="front-page-content">
          
            <img src="../images/personal.jpg" alt="Gym" style="width: 100%; height: 100%;">
            <h2 style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%); color: white; background-color: rgba(0, 0, 0, 0.5); padding: 60px;">
              Your goals, our expertise – together we'll make it happen
    
        </td>        
      </tr>
    </table>
  </div> 

  
  <div class="content">
    <table class="front-page-layout">
      <tr>
        <td colspan="2">
          <center><h2><hr>Personal Training <hr></h2> </center>
        </td>
      </tr>
      <tr>
        <td class="front-page-content">
          <img src="../images/dr.jpg" alt="Gym" style="height:100%;">
        </td>
        <td class="front-page-content">
          </div>
            <p>Our personal training program is made to give you a fitness experience that is personalized to your needs and goals. At Perfect Fitness, we understand that each person's fitness journey is different and includes specific goals and requirements. That's why our team of experienced trainers is here to guide and support you every step of the way.</p>
            <p>We provide a range of packages to accommodate various timeframes, work schedules, and workloads. We have the perfect package for you whether you're a beginner trying to start a fitness regimen or an experienced fitness pro looking to maintain fitness. Our trainers will work directly with you to comprehend your objectives, evaluate your current level of fitness, and develop a customized plan that fits your tastes and schedule.</p>
            <p>Are you ready to take your fitness journey to the next level? Enroll in our personal training packages today and experience the benefits of having a dedicated trainer by your side. Let Perfect Fitness be your partner in achieving your fitness goals and creating a healthier, happier you.</p>
          </div>
        </td>
      </tr>
    </table>
  </div> 
<hr>


<div class="choose-plan">
    <h3>Choose Your Plan</h3>
      <a class="choices packages-text" href="#">Packages</a>
      <a class="choices subscriptions-text" href="subscriptions.php">Subscriptions</a>
</div>

  
  <div class="container" style="margin-top: 100px;">
    <div class="packages">
      <div class="row">
        <div class="col-md-3 plan-box">
          <h4>8 Session/Month</h4>
          <span class="b1">$32.50</span><br>
          <span class="b2">per Session</span><br>
          <span class="b3">$ 208 per Month</span><br>
          <p class="b4">Save 20%</p><br>
          <button class="choose-button">Choose Plan</button>
        </div>
        <div class="col-md-3 plan-box">
          <h4>16 Session/Month</h4>
          <span class="b1">$40.00</span><br>
          <span class="b2">per Session</span><br>
          <span class="b3">$ 544 per Month</span><br>
          <p class="b4">Save 15%</p><br>
          <button class="choose-button">Choose Plan</button>
        </div>
        <div class="col-md-3 plan-box">
          <h4>36 Session/2 Months</h4>
          <span class="b1">$42.60</span><br>
          <span class="b2">per Session</span><br>
          <span class="b3">$ 1,150 per Month</span><br>
          <p class="b4">Save 25%</p><br>
          <button class="choose-button">Choose Plan</button>
        </div>
      </div>
    </div>
  </div>
  

  <script>
    const buttons = document.querySelectorAll('.choose-button');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        window.location.href = 'billing_address.php';
      });
    });
  </script>
 <hr>
  

 
 <!--Footer section-->
  <footer>
  <section class="footer">

<div class="box-container">

    <div class="box">
        <h3>quick links</h3>
        <a class="links" href="#home">Home</a>
        <a class="links" href="#freecourses">Free courses</a>
        <a class="links" href="personal_training.php">Programs</a>
        <a class="links" href="#contactus">Contact us</a>
        <a class="links" href="#faq">FAQ</a>
        <a class="links" href="#blog">Blog</a>
        <a class="links" href="#appointment">Appointments</a>
    </div>

    <div class="box">
        <h3>session times </h3>
        <p> monday : <i> 3:00pm - 10:30pm </i> </p>
        <p> tuesday : <i>3:00pm- 10:30pm </i> </p>
        <p> wednesday : <i> 3:00pm - 10:30pm </i> </p>
        <p> friday : <i> 3:00pm- 10:30pm </i> </p>
        <p> saturday : <i> 1:00am - 10:30pm </i> </p>
        <p> sunday : <i> 1:00am - 10:30pm </i> </p>
    </div>

    <div class="box">
      
        <p> <i class="fas fa-phone"></i> +9471 000 1234 </p>
        <p> <i class="fas fa-envelope"></i> perfectfitness@gmail.com </p>
     
    </div>

    <div class="box">
        <h3>newsletter</h3>
        <p>subscribe for latest updates</p>
        <form action="">
            <input type="email" name="" class="email" placeholder="enter your email" id="">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </div>
</div>
</section>

  </footer>
</body>
</html>