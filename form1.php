<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css" />
  <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" 
  />
  <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js">
</script>
  <style>
    .container {
      max-width: 1350px;
      width: 100%;
      margin: 50px;
      height: auto;
      display: block;
    }

    body {
      color: #fcf6f5ff;
      font-size: 20px;
      font-family: Century gothic;
      background: #03001e;
      background: -webkit-linear-gradient(to right,
          #ec38bc,
          #7303c0,
          #03001e);
      background: linear-gradient(to right, #ec38bc, #7303c0, #03001e);
    }

    a {
      color: snow;
    }

    h2 {
      text-align: center;
    }

    .form_group {
      padding: 10px;
      display: block;
    }

    label {
      float: left;
      padding-right: 50px;
      line-height: 10%;
      display: block;
      width: 208px;
    }
  </style>
  <title>HTML Form</title>
</head>

<body>

  <?php

  if (isset($_POST['fname'])) {

      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db1";

      $con = mysqli_connect($server, $username, $password, $dbname);

      if (!$con) {
          die("Connection failed !" . mysqli_connect_error());
      }



      // get the post records
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $dob = $_POST['dob'];
      $pno = $_POST['pno'];
      $eml = $_POST['eml'];

      // database insert SQL code
      $sql = "INSERT INTO `table1` (`f_name`, `l_name`, `dob`, `phone_no`, `eml_id`) VALUES ('$fname', '$lname', '$dob', '$pno', '$eml')";

      // insert in database 
      $rs = mysqli_query($con, $sql);

      if ($rs) {
           echo "<center>Data Saved Successfully! </center>";
           echo "<h2><a href='http://localhost/My_php_programs/form1.php' >Fill the form again</a></h2>";
           echo "<h2><a href='http://localhost/My_php_programs/form2.php' target='_blank' >View Saved Data in DataBase</a></h2>";
      } else {
           echo "Error!";
      }
  } else {
        ?>

    <h2>Enter your information</h2>
    <form name="form1" action="form1.php" method="post"
     enctype="multipart/form-data">
      <div class="container">
        <div class="form_group">
          <label>First Name:</label>
          <input type="text" name="fname" value="" required />
        </div>

        <div class="form_group">
          <label>Last Name:</label>
          <input type="text" name="lname" value="" required />
        </div>

        <div class="form_group">
          <label>Date of Birth : </label>
          <input type="date" name="dob" value="" required />
        </div>

        <div class="form_group">
          <label>Phone Number : </label>
          <input type="tel" id="phone" name="pno" value="" required />
        </div>

        <div class="form_group">
          <label>E-mail ID : </label>
          <input type="email" name="eml" value="" required />
        </div>
        <br />

        <div class="form_group" class="btn">
          <input type="submit" value="submit" />
        </div>
      </div>
    </form>

      <?php
  }
    ?>
</body>
<script>
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["in"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
</script>

</html>