<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">
    
        <link rel="stylesheet" href="css/style.css">

  </head>

  
  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="loginEmail"><br>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="loginPasswd"><br>
          </div>
          
<!--           <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>	<!-- login end -->
        
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="signup.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname"><br>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname"><br>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="signupEmail"><br>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="signupPasswd"><br>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div> <!-- sign up end -->
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

  </body>
</html>
