
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>The Nature Wind: Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/fevicon.png" type="image/gif" sizes="16x16">
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="bootstrap/jquery.min.js"></script>
   <script src="bootstrap/popper.min.js"></script>
   <script src="bootstrap/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="register-page" id="login-page">
   <header>
      <div class="container">
         <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
               <img src="images/logo.png" alt="thenaturewind-logo">
            </a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon">
                  <i class="fa fa-bars" aria-hidden="true"></i>
               </span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <div class="dropdown">
                        <button class="dropbtn">Resources
                           <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                           <a href="lab-category.html">Labs</a>
                           <a href="instruments.html">Instruments</a>
                           <a href="projects.html">Projects</a>
                           <a href="consultance.html">Consultance</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="career.html">Career</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  <li class="nav-item search_form_style">
                     <div class="search-container">
                        <form action="/action_page.php">
                           <input type="text" placeholder="Search.." name="search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                  </li>
                  <li class="nav-item  login-sign-style">
                     <a class="nav-link" href="register.html"><span class="avatar-icon"><i class="fa fa-user-circle-o"
                              aria-hidden="true"></i>
                        </span>Sign In/Register</a>
                  </li>

               </ul>
            </div>
         </nav>
      </div>
   </header>
   <!---end of header section--->
   <section id="register-form">
      <div class="container">

         <div class="row">
            <!-- <div class="col-sm-12 col-md-6 greetings-section">

          <div class="logo-img-log-page">
            <h3 class="custom-heading-hthree">Greetings and welcome to your professional network.</h3>
            <div class="logo-inner-section">
             <img src="images/logo.png" alt="logo">
          </div>
          </div>
       </div> -->
            <div class="col-sm-12 col-md-12 form-section-reg-log">
               <div class="title">Log In</div>
               <div class="content">
                  <form action="#">
                     <div class="user-details">
                        <div class="input-box">
                           <input type="text" placeholder="Email or Phone" required>
                        </div>
                        <div class="input-box">
                           <input type="text" placeholder="Password" required>
                        </div>
                        <div class="category">
                           <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                           </label>
                           <label for="dot-2">
                              <span class="forgot-password">
                                 <span class="psw"><a href="#"> Forgot password?</a></span>
                              </span>
                           </label>
                        </div>
                     </div>
                     <div class="button">
                        <input type="submit" value="Log In">
                     </div>
                     <div class="other-sign-up">
                        <span class="gender-title">OR</span>
                        <ul>
                           <li><a href="#"><span><i class="fa fa-facebook" aria-hidden="true"></i>
                                 </span>Log In With Facebook</a></li>
                           <li><a href="#"><span><i class="fa fa-google" aria-hidden="true"></i>
                                 </span>Log In With Gmail</a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</body>

</html>