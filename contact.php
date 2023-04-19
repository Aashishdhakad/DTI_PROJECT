<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link rel="stylesheet" href="styles/contact_us.css" />
  </head>
  <body>
    <!-- header -->
    <?php include 'navigation.php' ;
      
    ?>

    <!-- main content -->
    <div class="flex-container">
      <div class="contact">
        <h2>Contact Us</h2>
        <p>
          <br />
          Bennett University
          <br />
          Email : <a href="#email">info@CustomForge.in</a>
        </p>
        <br />
        <p>
          
        </p>
        <br />
        <p>Contact Us</p>
        <br />
        <p>
          Phone Number: 0124-1111111/0124-1111111 (From 10AM - 6PM) MON-SAT.
        </p>
        <p>
          <b>Bank Details</b><br />
          BANK NAME : ICICI BANK<br />
          ACCOUNT NUMBER : 418005000675<br />
          ACCOUNT HOLDER NAME : CustomForge<br />
          ACCOUNT TYPE : CURRENT <br />
          IFSC CODE: ICIC0004180<br />
          BRANCH : Delhi
        </p>
      </div>
      <div class="form">
        <h2>Feedback</h2>
        <label for="first_name"><b>Name</b></label>
        <input
          type="text"
          placeholder="Enter first name"
          name="first_name"
          id="first_name"
          required
        /><br />
        <label for="phone"><b>Phone Number</b></label>
        <input
          type="text"
          placeholder="Enter phone number"
          name="phone"
          id="phone"
          required
        /><br />
        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        /><br />
        <button type="button">Register</button>
        <p>
          
        <b>Thank you for your feedback.</b>
        </p>
      </div>
    </div>

    <!-- main content end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    
    </div>
  </body>
</html>
