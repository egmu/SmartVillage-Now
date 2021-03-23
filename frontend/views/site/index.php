<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Yii::$app->name ?></h1>

        <p class="lead">Selamat datang</p>

    </div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
   body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   }
   * {
      box-sizing: border-box;
   }
   .card {
      color: white;
      float: left;
      width: calc(25% - 20px);
      padding: 10px;
      border-radius: 10px;
      margin: 10px;
      height: 162px;
   }
   .card p {
      font-size: 18px;
   }
   .cardContainer:after {
      content: "";
      display: table;
      clear: both;
   }
   @media screen and (max-width: 600px) {
      .card {
         width: 100%;
      }
      
   }
</style>
</head>
<body>
<div class="cardContainer">
<div class="card" style="background-color:rgb(153, 29, 224);">
<h2>Pembangunan</h2>
<p><a class="btn btn-default" href="/smartvillage-1/frontend/web/index.php?r=pembangunan">Here &raquo;</a></p>
</div>
<div class="card" style="background-color:rgb(12, 126, 120);">
<h2>Request Pembangunan</h2>
<p><a class="btn btn-default" href="/smartvillage-1/frontend/web/index.php?r=request-pembangunan">Here &raquo;</a></p>
</div>
<div class="card" style="background-color:rgb(207, 41, 91);">
<h2>Lapor Aduan</h2>
<p><a class="btn btn-default" href="/smartvillage-1/frontend/web/index.php?r=lapor-aduan">Here &raquo;</a></p>
</div>
</div>
</body>
</html>
</div>
