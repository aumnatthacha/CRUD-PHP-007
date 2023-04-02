<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $name = $_POST['name'];
        $se = $_POST['se'];
        $StudentID = $_POST['StudentID'];
        $age = $_POST['age'];
        $year = $_POST['year'];
        $embossnumber = $_POST['embossnumber'];
        $img = $_POST['img'];
        
        $sql = $insertdata->insert($name, $se, $StudentID, $age, $year, $embossnumber, $img);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>

<body>
    
<div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        
        <h1 class="mt-5">Insert Page กรอกข้อมูลให้ถูกต้อง</h1>
        <hr>
        <form action="" method="post">
            <div class="col-md-5">
                <label for="name" class="form-label">ชื่อ-สกุล</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-md-5">
                <label for="se" class="form-label">สาขา</label>
                <input type="text" class="form-control" name="se" required>
            </div>
            <div class="col-md-5">
                <label for="StudentID">รหัสนักศึกษา</label>
                <input type="number" class="form-control" name="StudentID" required>
            </div>
            <div class="col-md-5">
                <label for="age">อายุ</label>
                <input type="text" class="form-control" name="age" required>
            </div>
            <div class="col-md-5">
                <label for="year">ปีการศึกษา</label>
                <input type="text" class="form-control" name="year" required>
            </div>
            <div class="col-md-5">
                <label for="embossnumber">รหัสบัตร 16 หลัก</label>
                <input type="text" class="form-control" name="embossnumber" required>
            </div>
        
              <div class="col-sm-5">
              <label for="img">รูปภาพ</label>
                <input type="text" name="img" class="form-control" id="img" placeholder="กรอกชื่อลิงค์รูปภาพ">
              </div>
            <br>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>





<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>