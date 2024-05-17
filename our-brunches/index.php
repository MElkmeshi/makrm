<!DOCTYPE html>
<?php
require_once "../lang.php";
require_once "../config.php";
?>
<html <?php if ($lang == "en") {
        echo "lang='en' dir='ltr'";
      } else {
        echo "lang='ar' dir='rtl'";
      }
      ?> data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مخرم للمجوهرات</title>
  <!-- <link rel="stylesheet" href="style.css"  /> -->
  <link rel="stylesheet" href="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
    }

    .back-to-home-page {
      color: #d9d9d9;
      margin: auto;
      padding: 10px;
      text-align: center;
      font-family: "Inter-Medium", sans-serif;
      font-size: 20px;
      line-height: 120%;
      font-weight: 300;
      border-radius: 0px 0px 30px 30px;
      width: 400px;
      height: 70px;
      background-color: #4e8071;
    }

    #mobile-navbar {
      display: none;
    }

    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
    }



    .imgsvg,
    svg {
      padding-bottom: 100px;
    }

    @media (max-width: 576px) {

      .imgsvg,
      svg {
        width: 350px;
        margin-bottom: 10px;
      }

      .back-to-home-page {
        color: #d9d9d9;
        margin: auto;
        padding: 10px;
        text-align: center;
        font-family: "Inter-Medium", sans-serif;
        font-size: 20px;
        line-height: 120%;
        font-weight: 300;
        border-radius: 0px 0px 30px 30px;
        width: 300px;
        height: 50px;
        background-color: #4e8071;
      }

      .navbar {
        display: none;
      }

      #mobile-navbar {
        display: block;
      }
    }

    .clickable-image {
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .clickable-image:hover {
      opacity: 0.8;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transform: scale(1.05);
    }

    /* .imgsvg:hover {
      filter: grayscale(100%);
    } */
    .image-container {
      position: relative;
      display: inline-block;
    }

    .image-container img {
      display: block;
      transition: all 0.3s ease;
    }

    .image-container::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 1.0);
      /* Increased opacity for a much stronger tint */
      mix-blend-mode: overlay;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .image-container:hover::before {
      opacity: 1;
      /* Make tint fully visible on hover */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <div class="navbar-brand mx-auto">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-0 collapse navbar-collapse col-md-2 mb-1 mb-md-0" style="margin-right: 60px">
          <a href="/<?php ($lang == "en") ? print "?lang=en" : "" ?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="/img/tmp_724f0be9-6c0f-417a-8e94-ba63e5ef2cde.png" width="175" />
          </a>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#basic-navbar-nav" aria-controls="basic-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="basic-navbar-nav">
        <ul class="nav navbar-nav col-12 col-md-auto mb-1 justify-content-center mb-md-0">
          <li class="nav-item">
            <a href="/<?php ($lang == "en") ? print "?lang=en" : "" ?>">
              <div class="back-to-home-page fixed-top">
                <?php ($lang == "en") ? print "Back To Home Screen" : print "الرجوع للصفحة الرئيسية" ?>
              </div>
            </a>
          </li>
        </ul>
        <div class="col-md-2 text-end"></div>
      </div>
    </div>
  </nav>
  <nav id="mobile-navbar">
    <div class="container">
      <div class="mx-auto">
        <a href="/<?php ($lang == "en") ? print "?lang=en" : "" ?>">
          <div class="back-to-home-page fixed-top">
            <?php ($lang == "en") ? print "Back To Home Screen" : print "الرجوع للصفحة الرئيسية" ?>
          </div>
        </a>
      </div>
    </div>
  </nav>

  <section>
    <div class="album py-5 bg-body-tertiary">
      <center>
        <a href="https://maps.app.goo.gl/KPBZMawqKXFsyss19">
          <div class="image-container">
            <img class="imgsvg clickable-image" src="/our-brunches/svg/<?php ($lang == "en") ? print "en" : print "ar" ?>/alnofleen.svg" alt="">
          </div>
        </a>
        <a href="https://maps.app.goo.gl/VvJ46zWdfpJabcJu5">
          <div class="image-container">
            <img class="imgsvg clickable-image" src="/our-brunches/svg/<?php ($lang == "en") ? print "en" : print "ar" ?>/hayalandaluse.svg" alt="">
          </div>
        </a>
        <div class="image-container"> </div>
        <a href="https://maps.app.goo.gl/x4rXUNHJQHJNCBjm9">
          <div class="image-container">
            <img class="imgsvg clickable-image" src="/our-brunches/svg/<?php ($lang == "en") ? print "en" : print "ar" ?>/aljraba.svg" alt="">
          </div>
        </a>
        <a href="https://maps.app.goo.gl/VgZ7aNaX3mvLcZst5">
          <div class="image-container">
            <img class="imgsvg clickable-image" src="/our-brunches/svg/<?php ($lang == "en") ? print "en" : print "ar" ?>/alqadesiya.svg" alt="">
          </div>
        </a>
      </center>
    </div>
  </section>
  <?php require "../footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>