<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb2cfeef2f.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="min.css">
</head>
</head>
<body class="bg-primary">
    <form action="insert.php" method="GET">

<div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6 ">
        <h3>TODO LIST</h3>

        <div class="col-8"></dic>

    
    

    
<input type="text" name="list" class="form-container" placeholder="Type something here...." autocomplete="off" id="">


</div>
<div class="col-2">
    <button class="btn btn-outline-primary">

       
       

            
       
        ADD

    </button>
</div>
</form>
<!-- getdata -->

<?php
include "config.php";
$rawData=mysqli_query($con , "select * from tbltodo");
?>

<div class="container">
    <div class="col-8 bg-white m-auto mt-3">
<table class="table">
    <tbody>

    <?php
while($row=mysqli_fetch_array($rawData)){



    ?>
        <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['list'] ?></td>
    <td stylE="width:10%"><a href="delete.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">   
    
  
   
    
    DELTETE</a></td>
    <td stylE="width:10%"><a href="update.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-success" >UPDATE</a></td>
    </tr>
    <?php

     }
    ?>
    
</tbody>

</table>
</div>
</div>

    
</body>
</html>