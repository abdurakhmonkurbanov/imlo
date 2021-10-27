    <!-- Full Page Intro -->
<div class="view" style="background-image: url('images/15.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row mt-5">
            <!--Grid column-->
            <div class="col-md-4 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
              <h1 class="h1-responsive font-weight-bold wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Hujjatlarini imloviy tekshirish tizimi bu? </h1>
              <hr class="hr-light wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">
              <h6 class="mb-3 wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Ushbu tizim davlat organlarida ishlab chiqilgan qarorlar, farmonlar, farmoishlar kabi hujjatlarni avtomatik imloviy tekshirishtizimidir.</h6>
              <a class="btn btn-outline-white wow fadeInLeft waves-effect waves-light animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Batafsil</a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-8">
              <!--Form-->
              <?php
				$token = $_GET['token'];
				if (isset($token) == 'file'){
					include('formfile.php');
					
				}
				else{
					include('formtxt.php');
				}
				?>
              </div>
              <!--/.Form-->
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->