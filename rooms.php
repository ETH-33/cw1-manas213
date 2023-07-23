<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Rooms</title>
        <link rel="stylesheet" href="css/rooms.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php require('inc/header.php');?>
    <div class='container rooms-page-wrapper'>
        <div class="row rooms-page gx-5">
            <div class="col-lg-3 col-md-12 col-12 filter-container">
                <h4>Filters</h4>
                <div class="filters">
                    <div class="check_in_out">
                        <h5>Check In</h5>
                        <input type="date" id=""> 
                        <h5>Check Out</h5>
                        <input type="date" id="">
                    </div>
                    <div class="features">
                        <h5>Features</h5>
                        <input type="checkbox" id="">
                        <label for="internet">Internet</label>
                        <input type="checkbox" id="">
                        <label for="hot">Hot Water</label><br>
                        <input type="checkbox" id="">
                        <label for="">Air Conditioner</label>
                        <input type="checkbox" id="">
                        <label for="">Telivision</label><br>
                        <input type="checkbox" id="">
                        <label for="">Balcony View</label>
                        <input type="checkbox" id="">
                        <label for="">Multiple Bathrooms</label>
                    </div>
                    <div class="guests">
                        <h5>Guests</h5>
                        Adult
                        <select>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                        </select>
                        Children
                        <select>
                            <option value="">One</option>
                            <option value="">Two</option>
                            <option value="">Three</option>
                        </select>
                    </div> 
                    <button class="btn btn-warning">Search</button>
                </div>
            </div>
            <div class='col-lg-8 col-md-12 col-12'>
                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                    <!-- <div class="rooms"> -->
                        <img src="images/room2.avif">
                    <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Simple Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>1 Adult</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>

                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                    <!-- <div class="rooms"> -->
                        <img src="images/room2.avif">
                    <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Simple Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>1 Adult</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>

                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                    <!-- <div class="rooms"> -->
                        <img src="images/room2.avif">
                    <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Simple Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>1 Adult</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>
                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                    <!-- <div class="rooms"> -->
                        <img src="images/room2.avif">
                    <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Simple Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>1 Adult</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
    
    <?php require('inc/footer.php');?>
    <?php require('inc/modals.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>