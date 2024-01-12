<?php
    session_start();
    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "INSERT INTO form (firstName, lastName, country, email, password) VALUES('$firstName','$lastName','$country','$email','$password')";

            mysqli_query($conn, $query);

            echo "<script type='text/javascript'> alert('Successfully register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
        }
      }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/TRY FOR EXPERIENCE.CSS" />

    <title>Formula 1 V2.0 &dash; Register</title>
  </head>
  <body>
    <div class="sub-header">
      <a href="TRY FOR EXPERIENTE.PHP" class="sign-in-link">Sign In</a>
      <a href="REGISTER.PHP" class="register-link">Register</a>
    </div>
    <!-- action="REGISTER.PHP" -->
    <div class="container">
      <h1>CREATE ACCOUNT</h1>
      <hr />
      <form method="POST" id="contactForm">
        <label for="first">First name</label>
        <div class="inputBox">
          <input
            class="first-name"
            type="text"
            id="first"
            name="firstName"
            placeholder="Enter your first name"
          />
        </div>

        <label for="last">Last name</label>
        <div class="inputBox">
          <input
            class="last-name"
            type="text"
            id="last"
            name="lastName"
            placeholder="Enter your last name"
          />
        </div>

        <!-- <label for="birth">Date of birth</label>
        <div class="inputBox">
          <input
            class="date-birth"
            type="date"
            id="datebirth"
            name="dateBirth"
            placeholder="(DD.MM.YYYY)"
          />
        </div> -->

        <label for="country">Country of residence</label>
        <div class="inputBox">
          <input
            class="country"
            type="text"
            id="country"
            name="country"
            placeholder="Entry your country"
          />
        </div>

        <label for="email">Email address</label>
        <div class="inputBox">
          <input
            class="email"
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email address"
          />
        </div>

        <label for="password">Password</label>
        <div class="inputBox">
          <input
            class="password"
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
          />
        </div>

        <div class="must-contain">
          <p>Password must contain</p>
          <ul class="grid">
            <li>Uppercase</li>
            <li>Lowecase</li>
            <li>Number</li>
            <li>8-30 characters</li>
            <br />
          </ul>
          <ul>
            <li>Any of !, @, #, %, ^, &, +, =, -</li>
          </ul>
        </div>
        <label class="checkbox-container">
          I want to receive the latest information from F1 &copy; including
          relevant news, surveys, offers, and exclusive competitions.
          <input type="checkbox" />
          <span class="checkmark"></span>
        </label>
        <p>
          By clicking on register, I agree that I have read and agree to the
          <span class="color">Terms</span> and
          <span class="color">Conditions</span> and
          <span class="color">Privacy</span>.
        </p>
        <div class="inpuxBox">
          <button class="register-btn" type="submit">REGISTER</button>
        </div>
      </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="/submit.js"></script>
  </body>
</html>
