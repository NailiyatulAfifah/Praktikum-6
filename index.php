<!DOCTYPE html>
<html>
    <head>
        <title>Primeval</title>
        <link rel="stylesheet" href="index.css">
        <style media="screen">
          h3 {
            font-family: Blikfang DEMO;
            color: white;
            text-align: center;
          }
        </style>
    </head>
    <body>
      <div class="box">
        <div class="box-judul">
          <p><img src="judul1.png"></p>
        </div>
        <div class="box-form">
          <form action="record.php" method="post">
            <p>
              <input type="text" name="nis" class="form-input" placeholder="NIS" required>
            </p>
            <p>
              <input type="password" name="password" class="form-input" placeholder="password" required><br>
            </p>
            <p>
              <input type="submit" name="submit" class="submit" value="S I G N  I N">
            </p>
          </form>
        </div>
        <?php
          if(isset($_GET["error"]))
           {
             if($_GET["error"] == "wrong")
              {
                echo "<h3>NIS dan Password salah!</h3>";
              }
           }
        ?>
      </div>
    </body>
</html>
