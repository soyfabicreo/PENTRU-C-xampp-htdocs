<?php
    session_start();
    include("connect.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email)) {
            $query = "SELECT * FROM form WHERE email = '$email' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['password'] == $password) {
                        header("location: motiv.php");
                        die;
                        // exit();
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Wrong email or password')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/TRY FOR EXPERIENCE.CSS" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,,500,600,700,800,900"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <title>Formula 1 V2.0 &dash; Try for experience</title>
  </head>

  <body>
    <div class="sub-header">
      <a href="TRY FOR EXPERIENTE.PHP" class="sign-in-link">Sign In</a>
      <a href="REGISTER.PHP" class="register-link">Register</a>
    </div>
    <!-- action="" -->
    <div class="container">
      <div><h1>SIGN IN</h1></div>
      <hr />
      <form method="POST" id="contactForm">
        <label for="first">Email address</label>
        <div class="inputBox">
          <input
            type="text"
            class="email"
            id="email"
            name="email"
            placeholder="Enter your email"
          />
        </div>

        <label for="first">Password</label>
        <div class="inputBox">
          <input
            type="password"
            class="password"
            id="password"
            name="password"
            placeholder="Enter your password"
          />
        </div>

        <div class="inputBox">
          <button class="sign-in-btn" type="submit">SIGN IN</button>
        </div>
      </form>
      <div class="forgot-password">
        <a
          class="decoration"
          href="https://account.formula1.com/#/en/forget-password"
          >Forgotten password?</a
        >
      </div>
      <div class="register-text">
        <span>Don't have an account yet?</span>
        <div class="register-with-f1-btn">Register with F1</div>
      </div>
    </div>
  </body>
</html>
