<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    </style>
    <title>Registration</title>
</head>
<body>
<!-- if( $error ) {
      if( $result ) 
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    }
  ?> -->
<div class="w3-container w3-center w3-pale-red">
        <h2>Solveit Complaint Portal</h2>
        Web platform for complaint registration
    </div>
    <hr>
    <div class="w3-bar w3-teal">
        <a href="/index.html" class="w3-bar-item w3-button">Home</a>
         <a href="/user/userlogin.php" class="w3-bar-item w3-button">Already a User? Login here</a>

        <!-- <a href="/user/userlogin.php" class="w3-bar-item w3-button">User Login</a> -->
        <!-- <a href="/admin/adminlogin.php" class="w3-bar-item w3-button">Admin Login</a> -->
        <!-- <a href="/user/registration.php" class="w3-bar-item w3-button">Registration</a>
        <a href="/help.php" class="w3-bar-item w3-button">Help</a> -->
      </div><br>

      <div class="w3-panel">
          <p>
            <?php  'ERROR! .$error'  ?>
          </p>
      </div>

      <div class="w3-container w3-card-2" style="width:50%;margin:auto;">
      <div><br>
        <p style="color: red; margin: auto; width:30%;">All Fields are mandatory</p>
      <form action="newuser.php" class="w3-form" name="reg_form" onsubmit="return validation()" method="post" style="width:100%;">
              <p>
              <label for="rollno">Roll Number</label>
              <input type="text" name="rollno" id="rollno" class="w3-input" placeholder="Enter your Roll Number">
              </p>
                <p>
              <label for="name">Name</label>
               <input type="text" name="name" id="name" class="w3-input" placeholder="Enter your name">
               </p>
               <p>
              <label for="email">Email</label>
               <input type="email" name="email" id="email" class="w3-input" placeholder="Enter your email">
               </p>
               <p>
              <label for="branch">Select your Branch</label><br>
              <select name="branch" id="branch" class="w3-select"  style="width:50%;">
                <option value="" >Choose your Branch</option>
                <option value="Btech">Btech</option>
                <option value="BBA">BBA</option>
                <option value="MBA">MBA</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                </select>
               </p>
               <label for="password">Password</label>
               <input type="password" name="password" id="password" class="w3-input" placeholder="Enter your password">
               </p>
             <input type="submit" name="submit" id="submit" class="w3-input w3-teal w3-hover-red w3-border w3-round-xxlarge">
          <br></form>
      </div>
      </div>

<script>
function validation() {
  var x = document.forms["reg_form"]["rollno","name","email","branch","password"].value;
  if (x == "") {
    alert("All fields must be filled out");
    return false;
  }
}
</script>


</body>
</html>