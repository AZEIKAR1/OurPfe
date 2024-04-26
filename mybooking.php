<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ridex - Rent your favourite car</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/mybooking.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <?php include 'includes/header.php'; ?>

  <!-- #content -->

  
    
     <section class="section hero" id="">

              <div class="container">
                <div class="title-wrapper" >

                    <h2 class="h1 hero-title">Your Bookings</h2>

                </div>
                    <table id="customers">
                                    
                      <tr>
                        <th>Car</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Number of Days</th>
                        <th>Total Amount</th>
                      </tr>
                      <tr>
                        <td>dacia</td>
                        <td>26-4-2024</td>
                        <td>27-4-2024</td>
                        <td>15 days</td>
                        <td>600 DH</td>
                      </tr>

                    </table>

            
              </div>
           
  
     </section>
  
    
<!-- 
    - #FOOTER
  -->
  
  <?php include 'includes/footer.php'; ?>



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
</body>

</html>