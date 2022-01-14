<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Log In</title>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="logo">
          <img src="images/logo.svg" alt="" />
        </div>
        <div class="image"></div>
        <div class="text">
          Learn Alphabets <br />
          Have Fun
        </div>
      </div>
      <form  method="post" action="/pwa/partials/_handleLogin.php">
        <div class="social">
          <div class="title">Get Started</div>
          <div class="question">
            Don't Have an Account? <br />
            <span> <a href="/pwa/signup/">Sign Up</a> </span>
          </div>

          <div class="or">Or</div>
        </div>

          <div class="title">
            Log In
          </div>

        <!-- /** 
          * ! user name Input here
         **/ -->

        <!-- <div>
          <label for="username">User Name</label>
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Enter Your Name"
          />
          <i class="fas fa-exclamation-circle failure-icon"></i>
          <i class="far fa-check-circle success-icon"></i>
          <div class="error"></div>
        </div> -->

        <!-- /** 
          * ! Email Input here
         **/ -->

        <div>
          <label for="email">Email</label>
          <i class="far fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="abc@gmail.com"
          />
          <i class="fas fa-exclamation-circle failure-icon"></i>
          <i class="far fa-check-circle success-icon"></i>
          <div class="error"></div>
        </div>

        <!-- /** 
          * ! Password Input here
         **/ -->

        <div>
          <label for="password">Password</label>
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password here"
          />
          <i class="fas fa-exclamation-circle failure-icon"></i>
          <i class="far fa-check-circle success-icon"></i>
          <div class="error"></div>
        </div>

        <button type="submit" id="submit">Submit</button>
      </form>
    </div>
  </body>
  <script src="main.js"></script>
</html>
