<!DOCTYPE html>
<?php
require "../lang.php";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    body,
    html {
      max-width: 100%;
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: "Inter", sans-serif;
    }

    a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
    }

    #nav.navbar,
    #nav .navbar-collapse,
    #nav .navbar-nav {
      background: transparent !important;
    }

    .dropdown-menu {
      background: transparent !important;
    }


    .link-secondary,
    .nav-link,
    .dropdown-item {
      color: #d9d9d9 !important;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
    }

    .album {
      margin: 2rem;
      padding: 2rem;
    }

    .custom-card {
      background: #f8f9fa;
      border-radius: 25px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: auto;
      max-width: 700px;
      padding: 3rem;
      text-align: center;
      font-size: 25px;
      font-weight: 600;
      line-height: 1.2;
      color: rgba(0, 0, 0, 0.8);
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      box-sizing: border-box;
      margin-bottom: 2rem;
    }

    .custom-card-2 {
      margin-top: 100px;
      color: #013624;
      text-align: center;
      font-family: Inter;
      font-size: 30px;
      font-style: normal;
      font-weight: 600;
      line-height: 120%;
      text-transform: capitalize;
      max-width: 700px;
    }



    .square-container {
      position: relative;
      width: 100%;
      padding-top: 100%;
      overflow: hidden;
    }

    .square-content {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
    }

    .square-content img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .container2 {
      overflow: hidden;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 0px;
      width: 100%;
    }

    .item {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .item::before {
      content: "";
      display: block;
      padding-top: 100%;
    }

    .item-content {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
    }

    .item-content img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @media (max-width: 576px) {

      .custom-card,
      .custom-card-2 {
        margin-bottom: 0;
      }

      .album {
        margin: 0rem;
        padding: 0rem;
      }
    }
  </style>
</head>

<body>
  <div style="
        height: 100vh;
        background-image: url('img/rectangle-710.png');
        background-position: center; /* Center the image */
        background-size: auto; /* Make the full image fit into the container */
      ">
    <?php require "../header.php"; ?>

  </div>
  <section>
    <div class="album" style="margin: 7rem 1rem; padding: 10rem 1rem;">
      <div class="custom-card" style="margin-bottom: 120px;">
        <?php if ($lang == "en") {
          echo "Makram Group was founded in 2004
          in one of the streets of the ancient city of Tripoli, and from there Makram Group started to be in several key areas with five branches.";
        } else {
          echo "تأسست مجموعة مخرّم في عام 2004
          بأحد شوارع مدينة طرابلس العريقة، ومن هناك انطلقت مجموعة مخرّم لتكون في عديد من المناطق الاساسية ب خمس فروع";
        }
        ?>

      </div>
      <div class="custom-card">
        <?php if ($lang == "en") {
          echo "Makram Jewelry has embodied its long journey in the world of jewelry with a distinctive luster, one of the most prestigious brands in Libya, reflecting the local identity in a contemporary style.";
        } else {
          echo "مجوهرات مخرّم مملكة جسدت رحلتها المديدة بعالم الحليّ برونق مميز ،من
        أبرز العلامات التجارية المرموقة في ليبيا ، تعكس الهوية المحلية بأسلوب
        معاصر.";
        }
        ?>

      </div>
      <center>

        <div class="custom-card-2">
          <?php if ($lang == "en") {
            echo "Enjoy and shine with perforated pieces and highlight your beauty with touches of enchanting charm.";
          } else {
            echo "استمتعي وتألقي بقطع مخرّم وابرزي جمالك بلمسات من السحر الأخاذ .";
          }
          ?>
      </center>
    </div>

    </div>
  </section>
  <section style="margin-bottom: 150px">
    <div class="container container2">
      <div class="item">
        <div class="item-content">
          <img src="img/tmp-724-f-0-be-9-6-c-0-f-417-a-8-e-94-ba-63-e-5-ef-2-cde-40.png" alt="Image Description" />
        </div>
      </div>
      <div class="item">
        <div class="item-content">
          <img src="img/rectangle-240.png" alt="Image Description" />
        </div>
      </div>
      <div class="item">
        <div class="item-content">
          <img src="img/rectangle-250.png" alt="Image Description" />
        </div>
      </div>
      <div class="item">
        <div class="item-content">
          <img src="img/tmp-724-f-0-be-9-6-c-0-f-417-a-8-e-94-ba-63-e-5-ef-2-cde-40.png" alt="Image Description" />
        </div>
      </div>
    </div>
  </section>
  <?php require "../footer.php"; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>