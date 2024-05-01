<?php
require_once "config.php";
require_once "lang.php";

?>
<style>
  .jewelers span {
    margin-bottom: 5px;
  }

  .jewelers {
    position: relative;
    <?php
    if ($lang == "en") {
      echo "right: 75px;";
    } else {
      echo "";
    }
    ?>
  }

  .branches {
    position: relative;
    <?php
    if ($lang == "en") {
      echo "right: 45px;";
    } else {
      echo "left: 39px;";
    }
    ?>
  }

  footer {
    color: rgba(255, 255, 255, 0.7);
    background: #013624;
    height: auto;
    width: 100%;
    padding: 20px;
    text-align: center;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    font-family: Inter;
    background: #013624;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%;
    box-sizing: border-box;
  }

  .golden-line {
    background-color: #c28e2c;
    height: 3px;
    width: 80%;
    text-align: center;
    border-bottom: 1px solid #000;
    line-height: 0.1em;
    margin: 10px 0 20px;
  }

  .golden-line span {
    background: #013624;
    padding: 0 10px;
  }

  .full-golden-line {
    background-color: #c28e2c;
    height: 5px;
    width: 100%;
    text-align: center;
    border-bottom: 1px solid #000;
    line-height: 0.1em;
    margin: 10px 0 20px;
  }

  .full-golden-line span {
    background: #013624;
    padding: 0 10px;
  }

  .jewelers-line {
    position: relative;
    right: 35px
  }

  @media (max-width: 576px) {
    .branches {
      position: relative;


      <?php
      if ($lang == "en") {
        echo "right: 30px;";
      } else {
        echo "left: 20px;";
      }
      ?>
    }

    .footerLogo {
      position: relative;
      bottom: 30px;
    }

    .branches span {
      margin-bottom: 2px;
    }

    .jewelers {
      position: relative;
      <?php
      if ($lang == "en") {
        echo "right: 5px;";
      } else {
        echo "right: 14px;";
      }
      ?>
    }


    .jewelers-line {
      position: relative;
      <?php
      if ($lang == "en") {
        echo "left: 10px;";
      } else {
        echo "";
      }
      ?>
    }

  }
</style>

<footer class="footer">
  <div class="container pt-5">
    <div class="row">
      <div class="col">
        <img class="footerLogo" src="/img/tmp_724f0be9-6c0f-417a-8e94-ba63e5ef2cde.png" width="300 " />
      </div>
      <div class="col">
        <div class="row">
          <h4 class="golden-line"><span> <?php ($lang == "en") ? print "Our Branches" : print "فروعنا" ?>
            </span></h4>
        </div>
        <div class="branches">
          <div class="row">
            <a href="https://maps.app.goo.gl/KPBZMawqKXFsyss19">
              <span><?php ($lang == "en") ? print "Al-nofleen" : print "النوفليين" ?>
              </span>
            </a>
          </div>
          <div class="row">
            <a href="https://maps.app.goo.gl/x4rXUNHJQHJNCBjm9">
              <span><?php if ($lang == "en") {
                      echo "Al-jraba";
                    } else {
                      echo "الجرابة";
                    } ?></span>
            </a>
          </div>
          <div class="row">
            <a href="https://maps.app.goo.gl/VvJ46zWdfpJabcJu5">
              <span><?php if ($lang == "en") {
                      echo "Hay Al-andaluse";
                    } else {
                      echo "حي الأندلس";
                    } ?></span>
            </a>
          </div>
          <div class="row">
            <a href="https://maps.app.goo.gl/VgZ7aNaX3mvLcZst5">
              <span><?php if ($lang == "en") {
                      echo "Al-qadesiya";
                    } else {
                      echo "القادسية";
                    } ?></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="row">
          <h4 class="golden-line jewelers-line">
            <span><?php if ($lang == "en") {
                    echo "Jewellery";
                  } else {
                    echo "المجوهرات";
                  } ?></span>
          </h4>
        </div>
        <div class="jewelers">
          <?php
          if ($result = mysqli_query($con, "SELECT * FROM category")) {
            while ($row = mysqli_fetch_assoc($result)) {
              if ($lang == "en") {
                echo "<div class='row'><a href='/" . $row['categoryName'] . "/?lang=en'><span>" . $row['categoryNameEN'] . "</span></a></div>";
              } else {
                echo "<div class='row'><a href='/" . $row['categoryName'] . "'><span>" . urldecode($row['categoryName']) . "</span></a></div>";
              }
            }
            mysqli_free_result($result);
          }
          ?>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="row">
        <h4 class="full-golden-line"><span><?php ($lang == "en") ? print "Contact Us" : print "تواصل معانا" ?></span></h4>
      </div>
      <div class="container contactus">
        <div class="row">
          <div class="col-6 col-md-3">+218-9xxxxxxx</div>
          <div class="col-6 col-md-3">
            <a href="https://www.facebook.com/profile.php?id=100090311872105&mibextid=LQQJ4d"><?php ($lang == "en") ? print "Facebook" : print "فيسبوك" ?></a>
          </div>
          <div class="col-6 col-md-3">xxxx@gmail.com</div>
          <div class="col-6 col-md-3">
            <a href="https://www.instagram.com/mkharrm_jewelry_ly"><?php ($lang == "en") ? print "Instagram" : print "انستقرام" ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>