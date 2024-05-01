<?php
require_once "config.php";
require_once "lang.php";

?>
<style>
  .nav-link {
    color: rgba(0, 0, 0, 0.7);
    text-shadow: 2px 4px 6px rgba(0, 0, 0, 0.3);
    text-align: center;
    font-family: Inter;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%;
    text-transform: capitalize;
  }

  .dropdown-menu {
    border: 0;
    background-color: #F8F9FA;
  }

  .navbar-brand {
    position: relative;
    <?php if ($lang == "en") {
      echo "left: 40px;";
    } else {
      echo "right: 40px;";
    }
    ?>
  }

  @media(max-width: 576px) {
    .nav-link {
      font-size: 15px;
    }

  }
</style>
<nav id="nav" class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div class="navbar-brand mx-auto">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-0 collapse navbar-collapse col-md-2 mb-1 mb-md-0">
        <a href="/<?php ($lang == "en") ? print "?lang=en" : "" ?>" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="/img/tmp_724f0be9-6c0f-417a-8e94-ba63e5ef2cde.png" width="175" />
        </a>
      </div>
    </div>
    <button style="color: white; border-color: white" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#basic-navbar-nav" aria-controls="basic-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="basic-navbar-nav">
      <ul class="nav navbar-nav col-12 col-md-auto mb-1 justify-content-center mb-md-0">
        <li class="nav-item">
          <a href="/<?php ($lang == "en") ? print "?lang=en" : "" ?>" class="nav-link px-5"> <?php if ($lang == "en") {
                                                                                                echo "Home Page";
                                                                                              } else {
                                                                                                echo "الصفحة الرئيسية";
                                                                                              }
                                                                                              ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if ($lang == "en") {
              echo "Categories";
            } else {
              echo "الاقسام";
            }
            ?>
          </a>
          <ul class="dropdown-menu">
            <?php
            if ($result = mysqli_query($con, "SELECT * FROM category")) {
              while ($row = mysqli_fetch_assoc($result)) {
                if ($row['categoryID'] == 11 || $row['categoryID'] == 13) {
                  continue;
                }
                if ($lang == "en") {
                  echo "<center><li><a class='dropdown-item' href='/category/?lang=en&cat=" . $row['categoryName'] . "'>" . $row['categoryNameEN'] . "</a></li>/center>";
                } else {
                  echo "<center><li><a class='dropdown-item' href='/category/?cat=" . $row['categoryName'] . "'>" . urldecode($row['categoryName']) . "</a></li></center>";
                }
              }
              mysqli_free_result($result);
            }
            ?>
          </ul>
        </li>
        <li class=" nav-item">
          <a href="/about-us<?php ($lang == "en") ? print "?lang=en" : "" ?>" class="nav-link px-5 link-secondary">
            <?php if ($lang == "en") {
              echo "About US";
            } else {
              echo "من نحن";
            }
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a href="/our-brunches<?php ($lang == "en") ? print "?lang=en" : "" ?>" class="nav-link px-5"> <?php if ($lang == "en") {
                                                                                                            echo "Location";
                                                                                                          } else {
                                                                                                            echo "الموقع";
                                                                                                          }
                                                                                                          ?></a>
        </li>
        <li class="nav-item">
          <a href="/<?php ($lang == "en") ? print "" : print "?lang=en" ?>" class="nav-link px-5"> <?php if ($lang == "en") {
                                                                                                      echo "العربية";
                                                                                                    } else {
                                                                                                      echo "English";
                                                                                                    }
                                                                                                    ?></a>
        </li>
      </ul>
      <div class="col-md-2 text-end"></div>
    </div>
  </div>
</nav>