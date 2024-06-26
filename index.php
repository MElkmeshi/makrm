<!DOCTYPE html>
<?php
require "lang.php";
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
  <!-- <link rel="stylesheet" href="" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    .full-height-section {
      height: 85vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .full-height-section img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    a {
      text-decoration: none;
      color: rgba(255, 255, 255, 0.7);
    }

    .card img {
      /* width: 331px; */
      height: 323px;
      flex-shrink: 0;
      object-fit: cover;
      border-radius: 40px 40px 0 0;
    }

    .card {
      border-radius: 40px 40px 20px 20px;
      background: #fff;
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .buybutton {
      border-radius: 10px;
      background: rgba(222, 222, 222, 0.4);
      color: rgba(0, 0, 0, 0.7);
      text-align: center;
      font-family: Inter;
      font-size: 20px;
      font-style: normal;
      font-weight: 400;
      line-height: 120%;
      text-transform: capitalize;
      /* white-space: nowrap; */
      width: 200px;
    }
  </style>
</head>

<body>
  <?php require "header.php"; ?>
  <section class="full-height-section position-relative" style="margin-bottom: 200px">
    <img src="img/Screenshot 2024-03-17 235544.png" alt="Descriptive Text for Accessibility" />

    <!-- <div class="overlay-section">
        <div class="container pb-5">
          <div class="row">
            <div class="col">
              <div style="width: 50%; max-width: 200px; margin: auto">
                <img
                  src="img/tmp_724f0be9-6c0f-417a-8e94-ba63e5ef2cde.png"
                  alt="Your Image Description"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col" style="padding: 0">
              <center>
                <a href="about-us">
                  <button class="greenbutton btn btn-primary">
                    <span class="greenbutton-text">تواصل معنا</span>
                  </button>
                </a>
              </center>
            </div>
            <div class="col" style="padding: 0">
              <center>
                <a href="our-brunches">
                  <button class="greenbutton btn btn-primary" id="greenbutton">
                    <span class="greenbutton-text">فروعنا</span>
                  </button>
                </a>
              </center>
            </div>
          </div>
        </div>
      </div> -->
  </section>
  <section>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3" style="margin-bottom: 70px">
          <div class="col 1">
            <div class="card shadow-sm products">
              <img src="img/DSC04249.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="/our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 2">
            <div class="card shadow-sm">
              <img src="img/as (1).jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 3">
            <div class="card shadow-sm">
              <img src="img/scz.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 4">
            <div class="card shadow-sm">
              <img src="img/W.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 5">
            <div class="card shadow-sm">
              <img src="img/DSC03855.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 6">
            <div class="card shadow-sm">
              <img src="img/DSC04202.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 7">
            <div class="card shadow-sm">
              <img src="img/DSC03877.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col 8">
            <div class="card shadow-sm">
              <img src="img/DSC03100.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center h-100" style="margin-bottom: 150px">
      <a href="categories/<?php ($lang == "en") ? print "?lang=en" : "" ?>">
        <button style="
              color: rgba(0, 0, 0, 0.7);
              text-align: center;
              text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
              font-family: Inter;
              font-size: 20px;
              font-style: normal;
              font-weight: 400;
              line-height: 120%; /* 24px */
              text-transform: capitalize;
              border-radius: 20px;
              border: none;
              background: rgba(212, 212, 212, 0.5);
              box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
              width: 170px;
              height: 50px;
              flex-shrink: 0;
              position: relative;
              bottom: 30px;
            ">
          <?php if ($lang == "en") {
            echo "View More";
          } else {
            echo "عرض المزيد";
          } ?>
        </button>
      </a>
    </div>
  </section>
  <section>
    <div class="album bg-body-tertiary" style="margin: 0 0; padding: 100px 0">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
          <div class="col mx-auto">
            <div class="card shadow-sm">
              <img src="img/0000023.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mx-auto">
            <div class="card shadow-sm">
              <img src="img/000022.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col mx-auto">
            <div class="card shadow-sm">
              <img src="img/00021.jpg" alt="" />
              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <a href="our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>">
                    <div class="buybutton"><?php ($lang == "en") ? print "Get it" : print "احصل عليها من اقرب فرع" ?></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center h-100" style="margin-bottom: 150px">
      <a href="/category?cat=عربي<?php ($lang == "en") ? print "&lang=en" : "" ?>">
        <button style="
              color: rgba(0, 0, 0, 0.7);
              text-align: center;
              text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
              font-family: Inter;
              font-size: 20px;
              font-style: normal;
              font-weight: 400;
              line-height: 120%; /* 24px */
              text-transform: capitalize;
              border-radius: 20px;
              border: none;
              background: rgba(212, 212, 212, 0.5);
              box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
              width: 170px;
              height: 50px;
              flex-shrink: 0;
              position: relative;
              bottom: 30px;
            ">
          <?php ($lang == "en") ? print "View More"  :  print "عرض المزيد";
          ?>
        </button>
      </a>
    </div>
  </section>

  <?php require "footer.php"; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>