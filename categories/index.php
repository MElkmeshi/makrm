<!DOCTYPE html>
<?php
include '../config.php';
include '../lang.php';
?>
<html <?php if ($lang == "en") {
        echo "lang='en' dir='ltr'";
      } else {
        echo "lang='ar' dir='rtl'";
      }
      ?> data-bs-theme="light">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>مخرم للمجوهرات</title>
<!-- <link rel="stylesheet" href="style.css"  /> -->
<link rel="stylesheet" href="" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<!-- <link rel="stylesheet" href="style.css"  /> -->
<style>
  body,
  html {
    margin: 0;
    padding: 0;
    height: 100%;
  }

  a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
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
    width: 150px;
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

  @media (max-width: 576px) {
    .navbar-brand {
      margin-top: 50px;
    }

    #mobile-navbar {
      display: block;
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
  }
</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <div class="navbar-brand mx-auto">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-0 collapse navbar-collapse col-md-2 mb-1 mb-md-0">
          <a href="/<?php ($lang == "en") ? print "?lang=en" : "" ?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="/img/tmp_724f0be9-6c0f-417a-8e94-ba63e5ef2cde.png" width="175" />
          </a>
        </div>
      </div>
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

  <section style="margin-bottom: -300px">
    <center>
      <div class="album bg-body-tertiary" style="margin: 150px 0">
        <?php
        if ($categories = mysqli_query($con, "SELECT * FROM category")) {
          while ($category = mysqli_fetch_assoc($categories)) {
            if ($row['categoryID'] == 11 || $row['categoryID'] == 13) {
              continue;
            }
            echo "<div class='album bg-body-tertiary' style='margin: 150px 0'><center style='margin-bottom: 30px'> <span style=' color: #264d42; text-align: center; font-family: Inter; font-size: 35px; font-style: normal; font-weight: 800; line-height: 120%; /* 42px */ text-transform: capitalize; ' > ";
            if ($lang == "en") {
              echo $category['categoryNameEN'];
            } else {
              echo rawurldecode($category['categoryName']);
            }
            echo  "</span > </center>";
            echo "<div class='container' style='margin-bottom: ' 50px> <div class='row' row-cols-1 row-cols-sm-2 row-cols-md-3 g-3>";
            if ($products = mysqli_query($con, "SELECT * FROM product WHERE categoryID = " . $category['categoryID'] . " LIMIT 2")) {
              while ($product = mysqli_fetch_assoc($products)) {
                echo "<div class='col mx-auto'> <img src='" . $product["productImage"] . "' alt='' /> </div> ";
              }
              echo "  </div></div></div>";
              echo "<div> <a href='/category/?cat=" . $category['categoryName'];
              if ($lang == "en") {
                echo "&lang=en";
              }
              echo  "'> <div style=' color: #264d42; font-family: Inter; font-size: 28px; font-style: normal; font-weight: 800; line-height: 120%; /* 36px */ text-transform: capitalize; padding-bottom: 30px; ' > ";
              if ($lang == "en") {
                echo "View More";
              } else {
                echo "عرض المزيد";
              }
              echo " </div> </a> </div>";
            }
          }

          mysqli_free_result($categories);
        }
        ?>
      </div>
    </center>
  </section>
  <section class="h-100 d-flex align-items-center justify-content-center">
    <a href="/our-brunches/<?php ($lang == "en") ? print "?lang=en" : "" ?>">
      <img src="svg/<?php ($lang == "en") ? print "en.svg" : print "ar.svg" ?>" alt="">
    </a>
  </section>
  <?php include '../footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>