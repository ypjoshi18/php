<html>
    <head>
        <title>SHOW</title>
    </head>
    <body>
        <?php
    require __DIR__.'/../controller/read-data.php';
//     require __DIR__.'/../controller/read-data.php';
        ?>
    <form>Username:<br>
  <input type="text" name="firstname" size="100" value="<?php echo $user; ?>" disabled>
  <br>Full Name:<br>
  <input type="text" name="lastname" value="<?php echo $name; ?>" disabled>
    <br>Mobile Number:<br>
  <input type="text" name="lastname" value="<?php echo $mob; ?>" disabled>
</form> 
    </body>
</html>