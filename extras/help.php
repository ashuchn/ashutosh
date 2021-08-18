
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    </style>
</head>
<body>
    
    <div class="w3-container w3-center w3-pale-red">
        <h2>Solveit Complaint Portal</h2>
        Web platform for complaint registration
    </div>
    <hr>
    <div class="w3-bar w3-teal">
        <a href="/index.html" class="w3-bar-item w3-button">Home</a>
        <a href="/user/userlogin.php" class="w3-bar-item w3-button">User Login</a>
        <a href="/admin/adminlogin.php" class="w3-bar-item w3-button">Admin Login</a>
        <a href="/user/registration.php" class="w3-bar-item w3-button">Registration</a>
      </div><br>
    <div class="w3-container" style="width: 50%;">
    
        <form action="addissue.php" class="w3-container w3-light-grey" method="post">
            <p>
                <label for="Name">Name*</label>
                <input type="text" name="name" id="name" class="w3-input" placeholder="enter your name" required>
    
            </p>
           <p>
            <label for="Email">Email*</label>
            <input type="email" name="email" id="email" class="w3-input" placeholder="enter your email" required> 
           </p>
            
            <p>
            <label for="rollno">Roll Number*</label>
            <input type="text" name="rollno" id="rollno" class="w3-input" placeholder="enter your Roll number" required>
            </p>
           
            <p>
                <label for="issue">Issue*</label>
                <textarea name="issue" class="w3-input" id="issue" cols="60" rows="3" placeholder="Describe your issue in max 200 words" required></textarea>
            </p>

            <input type="submit" name="submit" id="submit">
        </form>
    
    </div>

</body>
</html>

