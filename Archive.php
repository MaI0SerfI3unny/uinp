<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Архів</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=1440">
    <link rel="stylesheet" href="css/button_video.css">
  </head>
  <body>
    <?php require'pages/header.php' ?>
    <?php require'pages/about.php' ?>
  <?php require'pages/archive_search.php' ?>
  <div class="container mt-5 pt-4">
  <div class="row ">
    <div class="col-md-8">
      <h4 class="mb-3">Каталоги</h4>
      <div class="row ">
        <?php require'pages/catalogies_archive.php' ?>
        <?php require'pages/catalogies_archive.php' ?>
        <?php require'pages/catalogies_archive.php' ?>
<?php require'pages/catalogies_archive.php' ?>

      </div>
  </div>
  <div class="col-md-4">
    <a class="text-uppercase float-right button_more" href="#">Дивитись всі<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M0.666667 11.3571L5.25 6.83333L0.666667 2.30952L1.58333 0.5L8 6.83333L1.58333 13.1667L0.666667 11.3571Z" fill="#9A0000"/>
  </svg>
  </a>
  <h4 class="mb-4">Теми</h4>
<div class="row">
  <?php require'pages/theme_archive.php' ?>
  <?php require'pages/theme_archive.php' ?>
  <?php require'pages/theme_archive.php' ?>
  <?php require'pages/theme_archive.php' ?>
  <?php require'pages/theme_archive.php' ?>
<?php require'pages/theme_archive.php' ?>

</div>
  </div>
</div>
  </div>
<?php require'pages/send_archive.php' ?>

<div class="container pt-4">
  <h4 class="float-left">Інтерв’юери</h4>
  <a class="text-uppercase float-right button_more" href="#">Дивитись всі<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.666667 11.3571L5.25 6.83333L0.666667 2.30952L1.58333 0.5L8 6.83333L1.58333 13.1667L0.666667 11.3571Z" fill="#9A0000"/>
</svg>
</a>
</div>
<div class="interviewer">
<div class="container">
<div class="row">
  <?php require'pages/interviewer_person.php' ?>
  <?php require'pages/interviewer_person.php' ?>
  <?php require'pages/interviewer_person.php' ?>
  <?php require'pages/interviewer_person.php' ?>
  <?php require'pages/interviewer_person.php' ?>
  <?php require'pages/interviewer_person.php' ?>
</div>
</div>
</div>
<?php require'pages/footer.php' ?>
  </body>
</html>
