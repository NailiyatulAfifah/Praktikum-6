<?php

session_start();

include "connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if(mysqli_num_rows($result)){  
?>

<?php
}
else{
    echo 'Data Tidak Ditemukan';
}
mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student's Database</title>
    <link rel="stylesheet" href="record.css">
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

       <h2> Student's Database </h2>
       <div class="content">
       <table border=1 cellspacing=1 cellpadding=5>
         <tr>
             <th>#</th>
             <th width=100>NIS</th>
             <th width=150>Nama</th>
             <th>Alamat</th>
        </tr>
         <?php
             $i = 1;
            while($row = mysqli_fetch_row($result)){
         ?>
        <tr>
            <td>
              <?php echo $i;?>
            </td>
            <td>
              <?php echo $row[0];?>
            </td>
            <td>
              <?php echo $row[1];?>
            </td>
            <td>
              <?php echo $row[2];?>
            </td>
        </tr>
        <?php
            $i++;
        }
        ?>
        </table>
       </div>
    </body>
</html>