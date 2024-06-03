<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EasyParking</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require ('inc/links.php'); ?>
  <style>
    .availability-form {
      margin-top: -200px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width:575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-white">
  <?php require ('inc/header.php'); ?>
  <!-- Carousel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.jpg" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.jpg" class="w-100 d-block">
        </div>
      </div>
    </div>
  </div>

  <!-- check availability form -->

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Parking</h5>
        <div class="row px-4 align-items-end">
          <div class="col-lg-4 mb-3">
            <label class="form-label" style="font-weight:500;">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-4 mb-3">
            <label class="form-label" style="font-weight:500;">Check-out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500;">Vehicle Type</label>
            <select class="form-select shadow-none">
              <option selected>choose</option>
              <option value="1">Two Wheeler</option>
              <option value="2">There Wheeler</option>
              <option value="3">Four Wheeler</option>
              <option value="4">Six/more Wheeler</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Parking -->

  <div id="parking" class="container pt-5">
    <h2 class="mt-5 mb-3 text-center fw-bold">Parking<h2>
        <div class="row">
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/parking/2.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Two Wheeler</h5>
                <h6 class="mb-4">₹5 per Hour</h6>
                <div class="services mb-4">
                  <h6 class="mb-1">Services</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Parking
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Car Washing
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">more details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/parking/3.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Three Wheeler</h5>
                <h6 class="mb-4">₹10 per Hour</h6>
                <div class="services mb-4">
                  <h6 class="mb-1">Services</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Parking
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Car Washing
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">more details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/parking/4.jpg" class="card-img-top">
              <div class="card-body">
                <h5>four Wheeler</h5>
                <h6 class="mb-4">₹20 per Hour</h6>
                <div class="services mb-4">
                  <h6 class="mb-1">Services</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Parking
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Car Washing
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">more details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More >></a>
          </div>
        </div>
  </div>

  <!-- About -->

  <div id="about" class="container pt-5">
    <h2 class="mt-5 mb-3 text-center fw-bold">About This Website</h2>
    <h6 class="mb-4 text-center">Welcome to EasyParking - Your Ultimate Vehicle Parking Solution! At EasyParking, we
      understand
      the frustrations and challenges that come with finding a convenient and secure parking spot for your vehicle.
      That</h6>
  </div>

  <!-- Services -->

  <div id="service" class="container pt-5">
    <h2 class="mt-5 mb-3 text-center fw-bold">Our Services</h2>
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/services/parking.svg" width="80px">
        <h5 class="mt-3">Parking</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/services/washing.svg" width="80px">
        <h5 class="mt-3">Car Washing</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/services/ev.svg" width="80px">
        <h5 class="mt-3">EV Charging</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/services/cycle.svg" width="80px">
        <h5 class="mt-3">Cycle Rent</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="services.php" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Services >></a>
      </div>
    </div>
  </div>
  <!-----------faq section------------------>

  <div id="question" class="pt-5">
    <h2 class="mt-5 mb-3 text-center fw-bold">Frequently Asked Questions</h2>
    <div class="container p-3 mb-5 bg-body rounded">
      <div class="accordion mt-5" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              How do I make a parking reservation?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Making a parking reservation is quick and easy. Simply visit our website, select your desired
              location, date, and duration, and follow the prompts to complete your reservation. You will receive a
              confirmation email with all the details
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Can I modify or cancel my parking reservation?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes, you can modify or cancel your parking reservation depending on the terms and conditions of the
              specific parking location. Log in to your account on our website and navigate to the reservation
              management section to make any changes or cancellations
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              What happens if I arrive late or early for my reserved parking time?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              We understand that travel plans can change. In most cases, there is a grace period for early or late
              arrivals. However, it is always recommended to adhere to your reserved parking time to ensure a smooth
              experience. Check the specific parking location's terms and conditions for more details
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Is my vehicle safe at the parking facility?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes, we prioritize the safety and security of your vehicle. Our parking facilities are carefully
              selected and equipped with advanced security measures, including surveillance cameras, well-lit areas,
              and on-site personnel. However, we recommend not leaving any valuable items in plain sight inside your
              vehicle
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Are there any height or size restrictions for vehicles? </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Some parking facilities may have height or size restrictions. During the reservation process, you will
              be able to view any limitations or restrictions specific to the chosen parking location. If you have a
              larger or oversized vehicle, it is recommended to check the available options or contact our customer
              support for assistance
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
              What payment methods are accepted?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              We accept various payment methods, including major credit cards, debit cards, and digital wallets. The
              accepted payment options will be displayed during the reservation process. Rest assured that your
              payment information is processed securely
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact us -->
  <div id="contact" class="container pt-5">
    <h2 class="mt-5 mb-5 text-center fw-bold">Contact Us</h2>
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="350px"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14752.179578565505!2d87.861823!3d22.427336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02980f71daa971%3A0xd8a291eb93011bcf!2sCollege%20Of%20Engineering%20%26%20Management%2C%20Kolaghat!5e0!3m2!1sen!2sin!4v1716527581180!5m2!1sen!2sin"
            loading="lazy"></iframe>
          <h5>Address</h5>
          <a herf="https://maps.app.goo.gl/zUj3jD4WhRzpNCXq6" target="_blank"
            class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-geo-alt-fill"></i> Kolaghat,India
          </a>
          <h5 class="mt-4">Call Us</h5>
          <a href="tel:+919330083230" class="d-inline-block mb-2 text-decoration-none text-dark"><i
              class="bi bi-telephone-fill"></i>+91 9330083230
          </a>
          <br>
          <a href="tel:+919875343733" class="d-inline-block text-decoration-none text-dark"><i
              class="bi bi-telephone-fill"></i>+91 9875343733
          </a>
          <h5 class="mt-4">Email</h5>
          <a herf="mailto:easyparking@gmail.com" class="d-inline-block text-decoration-none text-dark"><i
              class="bi bi-envelope-fill"></i> easyparking@gmail.com</a>
          <h5 class="mt-4">Follow Us</h5>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-linkedin me-1"></i>
          </a>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-youtube me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-whatsapp me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require ('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        dealy: 3500,
        disableOnInteraction: false,
      }
    });
  </script>
</body>

</html>