<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href=".css" type="text/css"/>

<body>

<link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Signika:400' rel='stylesheet' type='text/css'>
        <div class="card-holder">
        <div class="card">
        <img src="https://www.npru.ac.th/2019/img/logo.png" width="375"><br>
      
            <img src="<?=$result['img']?>" alt="Avatar" ALIGN = "RIGHT" hspace="50"	 style width="130" height="175" > <br>
            <span class="name">รหัสนักศึกษา : <?=$result['StudentID']?></span><br>
            <span class="name">ชื่อ-นามสกุล : <?=$result['name']?></span><br>
            <span class="name">สาขาวิชา : <?=$result['se']?></span><br>

            <span class=""></span>
            <span class="VISA"></span>
            <span class="chipcard"></span>
            <span class="payweve"></span>
            <span class="name">อายุ : <?=$result['age']?></span><br>
            <span class="name">ปีการศึกษา : <?=$result['year']?></span><br>
            <span class="name"><?=$result['nameEng']?></span><br>
            <span class="number emboss"><?=$result['embossnumber']?></span>

</body>
</html>