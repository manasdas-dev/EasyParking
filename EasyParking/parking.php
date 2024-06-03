<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EasyParking</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require ('inc/links.php'); ?>
</head>

<body class="bg-white">
  <?php require ('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">Parking</h2>
    <div class="h-line bg-dark"></div>
  </div>
  <div class="cotainer p-4">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">VEHICLE</h5>
                <label class="form-label" style="font-weight:500;">Vehicle Type</label>
                <select class="form-select shadow-none">
                  <option selected>choose</option>
                  <option value="1">Two Wheeler</option>
                  <option value="2">There Wheeler</option>
                  <option value="3">Four Wheeler</option>
                  <option value="4">Six/more Wheeler</option>
                </select>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/parking/2.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Two Wheeler</h5>
              <div class="services mb-3">
                <h6 class="mb-1">Services</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Parking
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Car Washing
                </span>
              </div>
              <div class="rating mb-0">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-center">
              <h6 class="mb-4">₹5 per Hour</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100  btn-outline-dark shadow-none">more details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/parking/3.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Three Wheeler</h5>
              <div class="services mb-3">
                <h6 class="mb-1">Services</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Parking
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Car Washing
                </span>
              </div>
              <div class="rating mb-0">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-center">
              <h6 class="mb-4">₹10 per Hour</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100  btn-outline-dark shadow-none">more details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/parking/4.jpg" class="img-fluid rounded ">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Four Wheeler</h5>
              <div class="services mb-3">
                <h6 class="mb-1">Services</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Parking
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Car Washing
                </span>
              </div>
              <div class="rating mb-0">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-center">
              <h6 class="mb-4">₹20 per Hour</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100  btn-outline-dark shadow-none">more details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require ('inc/footer.php'); ?>


</body>

</html>