<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Архів/Каталоги</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=1440">
    <link rel="stylesheet" href="css/button_video.css">
  </head>
  <body>
<?php require'pages/header.php' ?>
<?php require'pages/about.php' ?>
<?php require'pages/archive_search.php' ?>

  <div class="container mt-5 pt-4 pb-5">
    <a href="" class="path">Архів</a><svg class="path" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.500651 9.07143L4.14648 5.5L0.500651 1.92857L1.22982 0.5L6.33398 5.5L1.22982 10.5L0.500651 9.07143Z" fill="#828282"/>
</svg>
<a href="" class="path">Каталоги</a>
  </div>
  <div class="container pt-3">
<h2>Каталоги</h2>
<div class="row">
  <?php require'pages/catalogies_content_main.php' ?>
  <?php require'pages/catalogies_content_main.php' ?>
  <?php require'pages/catalogies_content_main.php' ?>
  <?php require'pages/catalogies_content_main.php' ?>
  <?php require'pages/catalogies_content_main.php' ?>
  <?php require'pages/catalogies_content_main.php' ?>
</div>
<div class="button_menu mt-4">
  <a class="mr-2" href="#">
  <label class="label_num" for="">1</label>
</a>
<a class="mr-2" href="#">
<label class="label_num" for="">2</label>
</a>

<a class="mr-2" href="#">
<label class="label_num" for="">3</label>
</a>

<a class="mr-2" href="#">
<label class="label_num" for="">4</label>
</a>

<a class="mr-2" href="#">
<label class="label_num" for="">5</label>
</a>

<a href="#">
<label class="main_button">Наст <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.666667 10.862L5.25 6.33822L0.666667 1.81441L1.58333 0.00488281L8 6.33822L1.58333 12.6715L0.666667 10.862Z" fill="#BDBDBD"/>
</svg>
</label></a>
</div>
  </div>
  <?php require'pages/footer.php' ?>
  </body>
</html>
