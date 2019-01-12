<?php

  session_start();
  
  include("connect.php");

  require_once "connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Add Student</title>
    <link rel="stylesheet" href="add_data.css">
  </head>
  <body>
  <div class="wrapper">
    <header>
      <div class="header">
        <nav>
          <ul>
            <li><a href="record.php"><b> Database </b></a></li>
            <li><a href="add_data.php"><b> Add Student </b></a></li>
            <li><a href="logout.php"><b> Logout </b></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <h2> Add Student </h2>
      <div class="box-form">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <p>
            <input class="form-input" type="text" name="nis" placeholder="NIS" required>
          </p>
          <p>
            <input class="form-input" type="text" name="nama" placeholder="Nama Lengkap" required>
          </p>
          <p>
            <input  class="form-input" type="text" name="alamat" placeholder="Alamat" required>
          </p>
          <p>
            <input class="form-input" type="password" name="password" placeholder="Password" required>
          </p>
          <p>
            <input class="submit" type="submit" value="S I M P A N">
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
