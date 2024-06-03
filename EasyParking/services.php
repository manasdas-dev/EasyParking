<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EasyParking</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require ('inc/links.php'); ?>
  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-white">
  <?php require ('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">Our Services</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">At EasyParking, we offer a comprehensive vehicle parking service that prioritizes
      convenience, security, and ease of use. Our network of parking locations ensures<br>that you can find a spot near
      your destination, whether you're heading to a busy city center, an event venue, or an airport</p>
  </div>
  <div class="cotainer">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/services/parking.svg" width="40px">
            <h5 class="m-0 ms-3">Parking</h5>
          </div>
          <p>At EasyParking, we offer a comprehensive vehicle parking service that prioritizes convenience, security,
            and ease of use. Our network of parking locations ensures that you can find a spot near your destination,
            whether you're heading to a busy city center, an event venue, or an airport</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/services/washing.svg" width="40px">
            <h5 class="m-0 ms-3">Car Washing</h5>
          </div>
          <p>At EasyParking, we understand the importance of maintaining a clean and presentable vehicle. That's why we
            offer on-site vehicle washing and detailing services at select parking locations. Whether you're looking for
            a quick wash or a thorough detailing, our professional car care partners are ready to meet your needs</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/services/ev.svg" width="40px">
            <h5 class="m-0 ms-3">EV Charging</h5>
          </div>
          <p>EasyParking is committed to supporting sustainable transportation options. That's why we provide access to
            Electric Vehicle (EV) charging stations at select parking locations. With our EV charging services, you can
            conveniently charge your electric vehicle while it's parked, ensuring you have a fully charged battery when
            you're ready to hit the road

          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/services/cycle.svg" width="40px">
            <h5 class="m-0 ms-3">Cycle Rent</h5>
          </div>
          <p>At EasyParking, we offer a comprehensive vehicle parking service that prioritizes convenience, security,
            and ease of use. Our network of parking locations ensures that you can find a spot near your destination,
            whether you're heading to a busy city center, an event venue, or an airport</p>
        </div>
      </div>
    </div>
  </div>

  <?php require ('inc/footer.php'); ?>


</body>

</html>