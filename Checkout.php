<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Checkout</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: oldlace;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  width: 80%;
  margin-top: 5%;
  margin-left: 25%;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;margin-top: 
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.loginbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body bgcolor="oldlace"s>

<form action='ConfirmOrder.php' method='post'>
  <div class="container">
    <h1>Checkout</h1>
    <p>Please provide additional information to complete your order</p>
    <hr>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    <label for="creditcard"><b>Credit Card</b></label>
    <input type="text" placeholder="Enter Credit card number" name="creditcard" required>

    <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr> 
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

    <button type="submit" class="loginbtn">Confirm Order</button>
    <div class="container signin">
    <p><a href="Cart.php">Go Back</a>.</p>
   </div>
  </div>
  
 
</form>


</body>
</html>
