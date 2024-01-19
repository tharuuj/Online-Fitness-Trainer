<?php 
include 'dbcontroller.php';
$db_handle = new DBController();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Perfect Fitness</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
 
  <body>
    <div class="nav">
      <div class="nav-logo">
        <img
          src="../images/Logo.png"
          alt="Perfect Fitness logo"
          style="width: 145px; height: 145px"
        />
      </div>
      <div class="nav-items">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Free courses</a></li>
          <li>
            <a href="#">Programs</a>
            <ul>
              <li><a href="personal_training.php">Personal Training</a></li>
              <li><a href="online_training.php">Online Training</a></li>
              <li><a href="nutrition_coaching.php">Nutrition Coaching</a></li>
            </ul>
          </li>

          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Appointments</a></li>
          <li><a href="#">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </body>
  <hr class="line">
<style>
  .line {
    border: none;
    border-top: 1px solid rgb(12, 11, 11);
    margin: 10px 0;
  }
</style>
<style>
    body {
      background-color: black;
      color: white; 
    }
    body {
      font-family: Arial, sans-serif;
    }
</style>
  <hr class="line">
  <style>
    .line {
      border: none;
      border-top: 1px solid rgb(12, 11, 11);
      margin: 10px 0;
    }
  </style>


  <?php 
  if(isset($_POST['pay'])){
    $Pay_Fname = $_POST['fname'];
    $Pay_Lname = $_POST['lname'];
    $P_Country = $_POST['Country'];
    $P_Adrs = $_POST['address'];
    $P_State = $_POST['state'];
    $Postal_Code = $_POST['postal-code'];
    $P_Email = $_POST['email'];
    $P_Mob = $_POST['mobile-number'];

    $sql = "INSERT INTO payment(Pay_Fname,Pay_Lname,P_Country,P_Adrs,P_State,Postal_Code,P_Email,P_Mob)VALUES('$Pay_Fname ','$Pay_Lname ','$P_Country ','$P_Adrs ','$P_State ','$Postal_Code ','$P_Email ','$P_Mob ')";
        $run = $db_handle->lastID($sql);
        if ($run != 0) {
            echo '<script>window.location.replace("payment_method.php?id='.$run.'");</script>';
        }
  }
 ?>



 <!--Billing address form-->
  <div class="payment-form">
    <h2>Payment</h2>
    <div class="row">
      <div class="column"> <br><br><br>
        <img
          src="../images/logo 2.png"
          alt="Product Image"
          width="100"
          height="100"
        />
        <p>Your future self will thank you for starting now!</p>
      </div>
      <div class="column">

      <br><br>

        <h3>Billing Address</h3>
        <form action="billing_address.php" method="POST"> <br>

        <div class="row">
          <div class="col-50">
            <label for="first-name">First Name</label>
            <input type="text" placeholder="First Name" name="fname" required/>
          </div>
          <div class="col-50">
            <label for="last-name">Last Name</label>
            <input type="text" placeholder="Last Name" name="lname" required/>
          </div>
        </div>

        <div>
          <label for="country">Select Country</label>
          <select name="Country">
            <option value="">Select Country</option>
            <option value="Sri Lanka">Sri Lanka </option>
            <option value="India">India</option>
            <option value="Thailand">Thailand </option>
            <option value="Pakisthan">Pakisthan</option>
            <option value="Bangladesh">Bangladesh</option>
          </select>
        </div>

        <div>
          <label for="address">Address</label>
          <input type="text" name="address" placeholder="Address" required/>
        </div>
        <div>
          <label for="state">State</label>
          <input type="text" name="state" placeholder="State" />
        </div>
        <div>
          <label for="postal-code">Postal Code</label>
          <input type="text" name="postal-code" placeholder="Postal Code" />
        </div>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Email" required/>
        </div>
        <div>
          <label for="mobile-number">Mobile Number</label>
          <input type="tel" name="mobile-number" placeholder="Mobile Number" required/>
        </div>       

        <br>

      <a href="personal_training.php">
        <button class="back-btn">Back</button>
      </a>

      <a href="personal_training.php">
        <button class="cancel-btn">Cancel</button>
      </a>

      <button type="submit" name="pay" class="confirm-btn">Confirm Payment</button>

      </form>
      </div>
    </div>
  </div>
</html>
