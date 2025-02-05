<!DOCTYPE html>
<html>
    <head>
        <title>Contact form</title>
        <link rel="Stylesheet" href="../assets/css/style.css">
          <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>  
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <?php
                if(isset($_POST['contactBtn'])){
                    echo "<script>$(document).ready(function() {
                              swal({
                                title: 'Form Submitted!',
                                text: 'Contact form submitted successfully!',
                                icon: 'success'
                                }).then((value) => {
                                        document.location = '".$_SERVER['HTTP_REFERER']."'
                                });
                         });
                     </script>";
                }
            ?>
        <style>
            body {
                font-family: Arial;
                font-size: 17px;
                padding: 8px;
                padding-top: 25px;
                background-color: hsl(231, 12%, 12%);
                color: hsl(231, 12%, 12%);
            }
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea,
            #contact button[type="submit"] {
              font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
            }

            #contact {
              background: #F9F9F9;
              padding: 25px;
              margin: 150px 0;
              box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }

            #contact h3 {
              display: block;
              font-size: 30px;
              font-weight: 300;
              margin-bottom: 10px;
            }

            #contact h4 {
              margin: 5px 0 15px;
              display: block;
              font-size: 13px;
              font-weight: 400;
            }

            fieldset {
              border: medium none !important;
              margin: 0 0 10px;
              min-width: 100%;
              padding: 0;
              width: 100%;
            }

            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea {
              width: 100%;
              border: 1px solid #ccc;
              background: #FFF;
              margin: 0 0 5px;
              padding: 10px;
            }

            #contact input[type="text"]:hover,
            #contact input[type="email"]:hover,
            #contact input[type="tel"]:hover,
            #contact input[type="url"]:hover,
            #contact textarea:hover {
              -webkit-transition: border-color 0.3s ease-in-out;
              -moz-transition: border-color 0.3s ease-in-out;
              transition: border-color 0.3s ease-in-out;
              border: 1px solid #aaa;
            }

            #contact textarea {
              height: 100px;
              max-width: 100%;
              resize: none;
            }

            #contact button[type="submit"] {
              cursor: pointer;
              width: 100%;
              border: none;
              background: hsl(181.76, 100%, 80%);
              color: hsl(231, 12%, 12%);
              margin: 0 0 5px;
              padding: 10px;
              font-size: 15px;
            }

            #contact button[type="submit"]:hover {
              background: hsl(231, 12%, 12%);
              color: hsl(181.76, 100%, 80%);
              -webkit-transition: background 0.3s ease-in-out;
              -moz-transition: background 0.3s ease-in-out;
              transition: background-color 0.3s ease-in-out;
            }

            #contact button[type="submit"]:active {
              box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
            }

            .copyright {
              text-align: center;
            }

            #contact input:focus,
            #contact textarea:focus {
              outline: 0;
              border: 1px solid #aaa;
            }

            ::-webkit-input-placeholder {
              color: #888;
            }

            :-moz-placeholder {
              color: #888;
            }

            ::-moz-placeholder {
              color: #888;
            }

            :-ms-input-placeholder {
              color: #888;
            }
                    </style>
    </head>
    <body id="top">
        <div class=''>
        <header class="header">
        <!-- 
          - overlay
        -->
        <div class="overlay" data-overlay></div>

        <div class="container">

          <a href="../index.php" class="logo">
            <img src="../assets/images/logo.png" style="width: 115px; height: 115px;" alt="VILLAIN logo">
          </a>

          <button class="nav-open-btn" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

          <nav class="navbar" data-nav>

            <ul class="navbar-list">

              <li>
                  <a href="#" class="navbar-link" onclick="window.history.back()">Back</a>
              </li>

            </ul>

            <ul class="nav-social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-github"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        </header>
         <div class="container">  
  <form id="contact" action="" method="post">
    <h3>Contact Form</h3>
    <h4>Contact us for any inquries</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4">
    </fieldset>
    <fieldset>
        <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <button type="submit" name="contactBtn"/>Submit</button>
   </form>
</div> 