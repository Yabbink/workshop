<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
       <form method="post" action="checklogin.php">
           <?php if (isset($_SESSION['message'])): ?>
               <div class="msg">
                   <?php
                   echo $_SESSION['message'];
                   unset($_SESSION['message']);
                   ?>
               </div>
           <?php endif ?>
           <div class="input-group">
           <label for="email">Email</label>
           <input type="email" name="email">
           </div>
           <br>
           <div class="input-group">
           <label for="password">Wachtwoord</label>
           <input type="password" name="password">
           </div>
           <br>
           <div class="input-group">
               <input class="btn" type="submit" name="login" value="Inloggen">
           </div>
       </form>
</body>
</html>