<?php 
include 'dbcontroller.php';
$db_handle = new DBController();
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


  <body>

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
  <!--Header ends-->

  </body>
<hr class="line">
<style>
  .line {
    border: none;
    border-top: 1px solid rgb(12, 11, 11);
    margin: 10px 0;
  }
</style>

<?php 
$id = 0;
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
   } ?>
<?php 
  if(isset($_POST['pay'])){
    $Card_type = $_POST['card-type'];
    $Cardhol_name = $_POST['cardholder'];
    $Card_number = $_POST['cardnum'];
    $Expiry_date = $_POST['expirydate'];
    $CVV = $_POST['cvv'];
    $Amount = $_POST['amount'];
    $Payment_ID = $_POST['Payment_ID'];
    

    $sql = "INSERT INTO card(Card_type,Cardhol_name,Card_number,Expiry_date,CVV,Amount,Payment_ID)VALUES('$Card_type ','$Cardhol_name ','$Card_number ','$Expiry_date ','$CVV ','$Amount ','$Payment_ID')";
        $lastID = $db_handle->lastId($sql);
        if ($lastID != 0) {
            echo '<script>window.location.replace("order_review.php?id='.$Payment_ID.'");</script>';
        }
  }
 ?>
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
      <div class="column"> <br><br>
        <h3>Payment Method</h3> 
        <h5>All transaction are secure and encrypted</h5>

        <form action="payment_method.php" method="POST">
        <label for="card-type">Card Type</label>
        <div class="row">

          <div class="card-checkbox">
         
          </div>
          <div class="col-10">
            <input
              type="radio"
              id="visa"
              name="card-type"
              value="visa"
            />
            <label for="visa">
              <i class="fab fa-cc-visa" style="color: navy"></i>
              Visa
            </label>
          </div>

          <div class="col-10">
            <input
              type="radio"
              id="mastercard"
              name="card-type"
              value="mastercard"
            />
            <label for="mastercard">
              <i class="fab fa-cc-mastercard" style="color: red"></i>
              Mastercard
            </label>
          </div>
          <div class="col-10">
            <input type="radio" id="amex" name="card-type" value="amex" />
            <label for="amex">
              <i class="fab fa-cc-amex" style="color: blue"></i>
              American Express
            </label>
          </div>

          <div class="col-10">
            <input
              type="radio"
              id="discover"
              name="card-type"
              value="discover"
            />
            <label for="discover">
              <i class="fab fa-cc-discover" style="color: orange"></i>
              Discover
            </label>
          </div>
        </div>

        <div>
          <label for="name">Cardholder Name</label>
          <input type="text" id="card Holder Name" name="cardholder" placeholder="Cardholder Name" required/>
        </div>
        <div>
          <label for="number">Card Number</label>
          <input type="text" id="card Number" name="cardnum" placeholder="Card Number" required/>
        </div>
        <div class="row">
          <div class="col-50">
            <div>
              <label for="expiry-date">Expiry date</label>
              <input type="date" id="expiry-date" name="expirydate" placeholder="Expiry date" required/>
            </div>
          </div>
        </div>

      <div class="row">
      <div class="col-50">
        <div>
          <label for="amount">CVV code</label>
          <input type="text" id="cvv"  name="cvv" placeholder="CVV" pattern="\d{3}" required/>
        </div> 
      </div>
      </div>

      <input type="hidden" name="Payment_ID" value="<?php echo $id; ?>">

      <div>
        <label for="amount">Amount</label>
        <input type="tel" id="amount"  name="amount" placeholder="Amount" required/>
      </div>

      <br>
      <a href="billing_address.php">
          <button class="back-btn">Back</button>
      </a>

      <button class="confirm-btn" name="pay">Confirm Payment</button>

        </form>
      </div>
    </div>
  </div>
</html>
