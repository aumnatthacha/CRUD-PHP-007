<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=".css" type="text/css"/>
    <style>
        h1 {text-align: center;}
    </style>
</head>
<body>



<div class="row">
        <?php
            if ($result > 0) {
            foreach ($result as $row) {
        ?>      
        <div class="w3-container w3-center">
    <h3>นักศึกษา</h3>
        <img src="<?=$row['img']?>" alt="Avatar" style width="300" height="395">
        <br></br>
        <h5><span class=""><?=$row['StudentID']?></span><br></h5>
        <br></br>

         <a href="insert.php" class="btn btn-success">Go to Insert</a>
         <a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
         <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>

        <h5>
          <br><a href="?route=detail&id=<?=$row['id']?>" class="btn btn-primary">รายละเอียดเพิ่มเติม</a></br>
        </h5>

        <?php }}?>
        </div>
</div>


</body>
</html>