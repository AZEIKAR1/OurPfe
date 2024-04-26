<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>


    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- 
  - custom css link
-->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/login.css">
<!-- 
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
  rel="stylesheet">
    
</head>
<body>
<section class="section hero"> 
<div class="hero-banner"></div>


<div class="container">
    <form class="hero-form">
        <div class="input-wrapper">
            <label for="first-name" class="input-label">First Name</label>
            <input type="text" id="first-name" class="input-field" placeholder="Enter your first name" required>
        </div>
        <div class="input-wrapper">
            <label for="last-name" class="input-label">Last Name</label>
            <input type="text" id="last-name" class="input-field" placeholder="Enter your last name" required>
        </div>
        <div class="input-wrapper">
            <label for="age" class="input-label">Age</label>
            <input type="number" id="age" class="input-field" placeholder="Enter your age" required>
        </div>
        <div class="input-wrapper">
            <label for="phone-number" class="input-label">Phone Number</label>
            <input type="tel" id="phone-number" class="input-field" placeholder="Enter your phone number" required>
        </div>
        <div class="input-wrapper">
            <label class="input-label">Gender</label>
            <div class="gender-radio">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
            </div>
        </div>
        <div class="input-wrapper">
            <label for="email" class="input-label">Email</label>
            <input type="email" id="email" class="input-field" placeholder="Enter your email" required>
        </div>
        <div class="input-wrapper">
            <label for="password" class="input-label">Password</label>
            <input type="password" id="password" class="input-field" placeholder="Enter your password" required>
        </div>
        <div class="input-wrapper">
            <label for="confirm-password" class="input-label">Confirm Password</label>
            <input type="password" id="confirm-password" class="input-field" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn">Sign Up</button>
    </form>
    <a href="index.php" class="back-to-home"><i class="fas fa-arrow-left"></i> Back to Home </a>
</div>


</section>

<!-- 
    - #FOOTER
  -->


  <?php include 'includes/footer.php'; ?>



  
<script src="./assets/js/script.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>






</body>
</html>
