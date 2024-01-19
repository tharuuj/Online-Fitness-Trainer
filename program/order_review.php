<?php 
include 'dbcontroller.php';
$db_handle = new DBController();
$conn = $db_handle->connectDB();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Perfect Fitness</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="./styles.css" />


    <script>
      function handlePayment() {
        alert("Payment successful! Welcome to our program!");
      }
    </script>

  </head>

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

  <body>

  <?php 
  if (isset($_GET['id'])) {
    $cardID = $_GET['id'];
   } 

   $paymentSuccessful = true;
  ?>

    <!--Header starts-->
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
  <hr class="line">
  <style>
    .line {
      border: none;
      border-top: 1px solid rgb(12, 11, 11);
      margin: 10px 0;
    }
  </style>


  <div class="payment-form">
    <h2>Payment</h2>
      <div class="column"> <br><br>
        <h3>Order Review</h3>
        <i class="fab fa-cc-visa fa-10x" style="color: navy "></i>
        <table border="1" cellpadding="10px" cellpadding="0">
          <thead>
            <tr>
              <th>Card Holder Name</th>
              <th>Card Number</th>
              <th>Amount</th>
              <th>Address</th>
              <th>Email</th>
            </tr>
          </thead>

          <tbody>
            <?php
            // Construct the SQL query with INNER JOIN
            $query = "SELECT * FROM card INNER JOIN payment ON card.Payment_ID = payment.Payment_ID WHERE card.Payment_ID=$cardID";
            $result = $db_handle->runQuery($query);
            if (is_array($result)){
                foreach ($result as $key => $value) {
                  echo "<tr>";
                echo "<td>" . $result[$key]['Cardhol_name'] . "</td>";
                echo "<td>" . $result[$key]['Card_number'] . "</td>";
                echo "<td>" . $result[$key]['Amount'] . "</td>";
                echo "<td>" . $result[$key]['P_Adrs'] . "</td>";
                echo "<td>" . $result[$key]['P_Email'] . "</td>";
                echo "</tr>";
              }
            }

            ?>
          </tbody>
        </table>
      </div>
        <br>
        <div class="text-center">
          <a href="billing_address.php">
            <button class="back-btn">Back</button>
          </a>
          
          <a href="personal_training.php" onclick="handlePayment()">
            <button class="confirm-btn">Pay Now</button>
          </a>


          <?php  
            if ($paymentSuccessful) {
              echo '<p>Payment successful!</p>';
            } else {
              echo '<p>Payment failed. Please try again.</p>';
            }
          ?>
        </div>
     </div>
        
  </div>
</html>
