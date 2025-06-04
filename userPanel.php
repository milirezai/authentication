<?php
session_start();
include ('./info/info.php');
include ('./auth/logout.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  "panel : " . $information->userName ?></title>
    <link rel="stylesheet" href="assets/css/userPanel.css">

</head>
<body>
    <!-- boxUserPanel -->
    <div class="boxUserPanel">
        <!-- box img user -->
         <div class="imgUser">
            <img class="img" src="assets/img/Screenshot 1404-03-12 at 5.png" alt="">
         </div>
         <!-- box information user -->
          <div class="information">
            <!-- item information -->
             <div class="items">
                <h4>UserName <span class="text"><?=  $information->userName ?></span> </h4>
              </div>
             <div class="items">
                <h4>Email <span class="text"><?=  $information->email ?></span> </h4>

             </div>
             <div class="items ">
                <h4>MobileNumber <span class="text"><?=  $information->mobileNumber ?></span> </h4>

             </div>
             <div class="items ">
                <h4>Password <span class="text"><?=  $information->password ?></span> </h4>
             </div>
                       <!-- log out -->  
           <div class="logout">
            <a class="botLogout" href="?logout">log out</a>
           </div>

          </div>
    </div>
</body>
</html>