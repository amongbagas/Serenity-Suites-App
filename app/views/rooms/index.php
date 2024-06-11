<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
    <div class="container">
        <img src="./assets/logo/logo-dark.svg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center flex-xl-grow-1" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="<?= BASE_URL; ?>/home">Home</a>
                <a class="nav-link active text-primary" aria-current="page" href="<?= BASE_URL; ?>/rooms">Rooms</a>
                <a class="nav-link" href="./facilites.html">Facilities</a>
                <a class="nav-link" href="./contact.html">Contact</a>
            </div>
        </div>
        <div class="collapse navbar-collapse justify-content-end flex-grow-0" id="navbarNavAltMarkup">
            <a href="../auth/signin.html" id="btn1" type="button" class="btn btn-outline-primary me-2 rounded-0">Sign In</a>
            <a href="../auth/signup.html" id="btn2" type="button" class="btn btn-primary rounded-0">Sign Up</a>
        </div>
    </div>
    </div>
</nav>

<div id="rooms" class="container">

    <div class="card w-100 h-100 position-relative mb-5 shadow-lg rounded-5">
        <div class="card-body m-0 p-0">
            <div class="row flex-wrap">
                <div class="col-md-5">
                    <img src="assets/img/superior.jpg" class="card-img-top object-fit-cover w-100 h-100 rounded-start-4 ">
                </div>
                <div class="col-sm p-3 mb-5">
                    <h4 class="fw-light">ROOM TYPE:</h4>
                    <h5 class="fw-bold ">SUPERIOR</h5>
                    <p class="card-text mb-1 mt-4 fw-bold">Facilities : </p>
                    <ul class="fw-light ">
                        <li>Room size 32 meters</li>
                        <li>Bathroom with Shower</li>
                        <li>Coffe Maker</li>
                        <li>Air Conditioner</li>
                        <li>Television 32 inch</li>
                    </ul>
                </div>
                <div class="col-sm px-5 py-3 text-end">
                    <div class="d-none d-md-block">
                        <h4 class="card-text fw-light">AVAILABLE</h4>
                        <h1>20</h1>
                        <h5>ROOM</h5>
                    </div>


                    <div class="position-absolute bottom-0 end-0 pe-4 py-3 w-50">
                        <button type="button" class="btn btn-primary fs-5 w-50">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100 h-100 position-relative mb-5 shadow-lg rounded-5">
        <div class="card-body m-0 p-0">
            <div class="row flex-wrap">
                <div class="col-md-5">
                    <img src="assets/img/deluxe.jpg" class="card-img-top object-fit-cover w-100 h-100 rounded-start-4 ">
                </div>
                <div class="col-sm p-3 mb-5">
                    <h4 class="fw-light">ROOM TYPE:</h4>
                    <h5 class="fw-bold ">DELUXE</h5>
                    <p class="card-text mb-1 mt-4 fw-bold">Facilities : </p>
                    <ul class="fw-light ">
                        <li>Room size 32 meters</li>
                        <li>Bathroom with Shower</li>
                        <li>Coffe Maker</li>
                        <li>Air Conditioner</li>
                        <li>Television 32 inch</li>
                    </ul>
                </div>
                <div class="col-sm px-5 py-3 text-end">
                    <div class="d-none d-md-block">
                        <h4 class="card-text fw-light">AVAILABLE</h4>
                        <h1>20</h1>
                        <h5>ROOM</h5>
                    </div>


                    <div class="position-absolute bottom-0 end-0 pe-4 py-3 w-50">
                        <button type="button" class="btn btn-primary fs-5 w-50">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-5">
    <div class="facilities-hero">
        <div class="container h-100 align-content-center">
            <div class="text-center text-white">
                <h1 class="mb-2 fw-semibold" style="letter-spacing: .1rem; padding-top: 12rem;"><u>OUR
                        ROOMS</u></h1>
            </div>
        </div>
    </div>
</div>

<script src="./assets/js/script.js"></script>