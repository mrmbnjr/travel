<!-- Carousel Section -->
<div class="container">
  <h2>Rental Cars Available </h2>
  <div class="wrapper d-flex align-items-center">
    <i id="left" class="bi bi-chevron-compact-left"></i>
      <ul class="carousel">
      <li class="card">
        <h2 style="font-weight:bold;">Toyota Vios</h2>
        <div class="img"><img src="assets/images/toyota-vios.png" alt="Toyota Vios" draggable="false"> </div>
        <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
        <h2 style="font-weight:bold;">Mitsubishi Mriage</h2>
        <div class="img"><img src="assets/images/mitisubishi-mirage.png" alt="Mitsubishi Mriage" draggable="false"> </div>
        <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
          <h2 style="font-weight:bold;">Mitsubishi Xpander</h2>
          <div class="img"><img src="assets/images/mitsubishi-xpander.png" alt="Mitsubishi Xpander" draggable="false"> </div>
          <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
          <h2 style="font-weight:bold;">Mitsubishi Montero</h2>
          <div class="img"><img src="assets/images/mitsubishi-montero.png" alt="Mitsubishi Montero" draggable="false"> </div>
          <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
          <h2 style="font-weight:bold;">Mitsubishi Montero</h2>
          <div class="img"><img src="assets/images/mitsubishi-montero.png" alt="" draggable="false"> </div>
          <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
          <h2 style="font-weight:bold;">Mitsubishi Montero</h2>
          <div class="img"><img src="assets/images/mitsubishi-montero.png" alt="" draggable="false"> </div>
          <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
          <h2 style="font-weight:bold;">Mitsubishi Montero</h2>
          <div class="img"><img src="assets/images/mitsubishi-montero.png" alt="" draggable="false"> </div>
          <button class="btn btn-primary">View Details</button>
      </li>
      <li class="card">
          <h2 style="font-weight:bold;">Mitsubishi Montero</h2>
          <div class="img"><img src="assets/images/mitsubishi-montero.png" alt="" draggable="false"> </div>
          <button class="btn btn-primary">View Details</button>
      </li>
    </ul>
    <i id="right" class="bi bi-chevron-compact-right"></i>
  </div>
</div>

<hr class="my-4 w-75 mx-auto">

<!-- Customer Reviews Section -->
<div class="container">
  <h2>Customer's Reviews</h2>
  <div class="card w-75">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <h1 class="text-warning">
              <i class="bi bi-star-fill" style="font-size: 140px;"></i>
            </h1>
            <h3 class="fs-5"><b><span id="average_rating" style="color: black;">0.0</span> Ratings</b></h3>
            <h5 class="fs-6 text-secondary"><span class="fs-6" id="total_review">0</span> Review/s</h5>
          </div>
        </div>

        <div class="col-md-7">
          <div class="mb-2">
            <div class="d-flex justify-content-between">
              <b class="lh-lg">5 <i class="bi bi-star-fill text-warning"></i></b>
              <span class="lh-lg fs-6"><span class="fs-6" id="total_five_star_review">0</span> votes</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" id="five_star_progress" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-2">
            <div class="d-flex justify-content-between">
            <b class="lh-lg">4 <i class="bi bi-star-fill text-warning"></i></b>
            <span class="lh-lg fs-6"><span class="fs-6" id="total_four_star_review">0</span> votes</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" id="four_star_progress" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-2">
            <div class="d-flex justify-content-between">
            <b class="lh-lg">3 <i class="bi bi-star-fill text-warning"></i></b>
            <span class="lh-lg fs-6"><span class="fs-6" id="total_three_star_review">0</span> votes</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" id="three_star_progress" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-2">
            <div class="d-flex justify-content-between">
            <b class="lh-lg">2 <i class="bi bi-star-fill text-warning"></i></b>
            <span class="lh-lg fs-6"><span class="fs-6" id="total_two_star_review">0</span> votes</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" id="two_star_progress" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-2">
            <div class="d-flex justify-content-between">
            <b class="lh-lg">1 <i class="bi bi-star-fill text-warning"></i></b>
            <span class="lh-lg fs-6"><span class="fs-6" id="total_one_star_review">0</span> votes</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" id="one_star_progress" role="progressbar" style="width: 10%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="row-sm-4 mt-3 text-center">
          </div>
        </div>

          <button type="button" name="add_review" id="add_review" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#review_modal">Rate us</button>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5" id="review_content"></div>
</div>

<div class="modal fade" id="review_modal" tabindex="-1" aria-labelledby="review_modal_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Submit Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="text-center mt-2 mb-4">
          <i class="fas fa-star star-light submit_star me-1" id="submit_star_1" data-rating="1"></i>
          <i class="fas fa-star star-light submit_star me-1" id="submit_star_2" data-rating="2"></i>
          <i class="fas fa-star star-light submit_star me-1" id="submit_star_3" data-rating="3"></i>
          <i class="fas fa-star star-light submit_star me-1" id="submit_star_4" data-rating="4"></i>
          <i class="fas fa-star star-light submit_star me-1" id="submit_star_5" data-rating="5"></i>
        </h4>
        <div class="mb-3">
          <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
        </div>
        <div class="mb-3">
          <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-primary" id="save_review">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
