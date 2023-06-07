<?php
include "header.php";
?>
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
<?php include_once "footer.php"; ?>