<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php

$id = $_GET['id'];
include "config.php";
$Rdata = mysqli_query($con,"select * from tbltodo where id = $id");
$data = mysqli_fetch_array($Rdata);

?>


<body class="bg-info" style="justify-content:center">

<form action="update1.php" method="GET">

<div class="container">
    <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6 ">
        <h3 >UPDATE</h3>

        <div class="col-10"></div>

    
    <input type="text"  value="<?php echo $data['list']?>" name="list" class="form-container" id="">
</div>
<div class="col-1" >
    <button class="btn btn-outline-primary "style="background-color:#ffff"; >
        UPDATE

    </button>

    <input type="hidden" name="id" value="<?php echo $data['id']?>">
</div>
</form>
    
</body>
</html>