<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Rooms</title>
    <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>
<body>
    <?php require('inc/header.php');?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="filterDropdown">

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php');?>
    <?php require('inc/modals.php');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>