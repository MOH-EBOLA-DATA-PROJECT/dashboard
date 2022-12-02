<?php
include("./includes/header.php");
include("./includes/sidebar.php");
?>
<div class="content">
<?php
include("./includes/navbar.php");
?>
<div class="main-content bg-light">

<!-- cards -->

            <div class="row p-4">
              <div class="col-lg-4">
                <div class="card shadow bg-secondary">
                  <img class="card-img-top" src="holder.js/100x180/" alt="">
                  <div class="card-body">
                    <h4 class="card-title">death</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 ">
                <div class="card shadow bg-warning">
                  <img class="card-img-top" src="holder.js/100x180/" alt="">
                  <div class="card-body">
                    <h4 class="card-title">In patients</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card shadow bg-danger">
                  <img class="card-img-top" src="holder.js/100x180/" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Recovered outpatients</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="row pl-5 pr-5">
            <div class="col-lg-4">
              <canvas id="mychart"></canvas>
            </div>
            <div class="col-lg-8">
              <canvas id="chart2"></canvas>
            </div>
          </div>
        </div>
        <!-- cards -->
</div>
      
        <!-- content -->
  <?php
  include('./includes/footer.php');
  ?>