<!-- Fixed navbar -->
  <div class="container">
        <div class="navbar-header-">
              <?php if (isset($_SESSION['username'])) { ?>
                  <p align="right">Anda masuk sebagai <strong><?=$_SESSION['username']?></strong> | <?=$_SESSION['level']?></p>
            <?php  } else {

            }?>

        </div>
    </div>
