<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Архів/Пошук</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=1440">
    <link rel="stylesheet" href="css/button_video.css">
  </head>
  <body>
    <?php require'pages/header.php' ?>
    <?php require'pages/about.php' ?>
    <div class="container mt-2">
      <div class="row mt-5 justify-conten-start">

        <div class="col-md-4 filter">
          <div class="filter_head">
            <h5 class="text-uppercase">Фільтрувати за</h5>
          </div>
          <div class="filter_theme mt-3">
            <h6 class="mb-1">Тема</h6>
              <select>
                 <option value="">Оберіть тему</option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
                 <option value=""></option>
              </select>
          </div>

          <div class="filter_main mt-3">
            <h6 class="mt-3 mb-1">Оповідач</h6>
            <input type="text" name="" value="" placeholder="Введіть прізвище / псевдо">

            <p class="mt-4">Стать</p>
            <input type="radio" id="gender">
              <label for="gender">Чоловік</label>
              <br>
              <input type="radio" id="gender">
                <label for="gender">Жінка</label>

                <h6 class="mt-3 mb-2">Місце народження</h6>
                <input type="text" name="" value="" placeholder="Введіть місце народження">

                <h6 class="mt-3 mb-2">Місце проживання</h6>
                <input type="text" name="" value="" placeholder="Введіть місце проживання">

                <h6 class="mt-3 mb-2">Дата народження</h6>
                <select>
                   <option value="">Виберіть дату народження</option>
                   <option value=""></option>
                   <option value=""></option>
                   <option value=""></option>
                   <option value=""></option>
                </select>
</div>
                <div class="filter_foot mt-3">
                  <h6 class="mt-3 mb-2">Мова оповіді</h6>
                  <select>
                     <option value="">Виберіть мову оповіді</option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                  </select>

                  <h6 class="mt-3 mb-2">Категорія участі</h6>
                  <select>
                     <option value="">Виберіть категорію участі</option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                  </select>

                  <h6 class="mt-3 mb-2">Форма запису</h6>
                  <select>
                     <option value="">Виберіть форму запису</option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                  </select>

                  <h6 class="mt-3 mb-2">Ключові слова</h6>
                  <input type="text" name="" value="" placeholder="Введіть ключеві слова">
                </div>
                <a href="#"><button class="btn_succsess float-right mt-4 mb-4">Шукати</button></a>

        </div>
        <div class="col-md-8 p-0">
          <div class="head_content_archive">
            <p class="ml-2 mr-3 float-left">Сортувати за:</p>
            <select class="select1 mr-2">
               <option value="">Тема</option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
            </select>
            <select class="select2  mr-2">
               <option value="">А-Я</option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
            </select>
            <select class="select3  mr-2">
               <option value="">Фонд</option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
            </select>
            <select class="select4  mr-2">
               <option value="">Інтервю`ер</option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
            </select>
            <select class="select5 ">
               <option value="">Дата інтерв`ю</option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
            </select>
          </div>

          <div class="content_archive mt-5 pt-4">
            <?php require'pages/content.php' ?>
            <?php require'pages/content.php' ?>
            <?php require'pages/content.php' ?>
            <?php require'pages/content.php' ?>
            <?php require'pages/content.php' ?>
            <?php require'pages/content.php' ?>
            <?php require'pages/content.php' ?>

          </div>
          <div class="button_menu mt-5 ml-3">
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
      </div>
    </div>
    <?php require'pages/footer.php' ?>
  </body>
</html>
