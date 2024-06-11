<section class="container-fluid m-0 p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <img src="./assets/logo/logo-dark.svg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center flex-xl-grow-1" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-primary" aria-current="page" href="<?= BASE_URL; ?>/home">Home</a>
                    <a class="nav-link" href="<?= BASE_URL; ?>/rooms">Rooms</a>
                    <a class="nav-link" href="./pages/facilites.html">Facilities</a>
                    <a class="nav-link" href="./pages/contact.html">Contact</a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end flex-grow-0" id="navbarNavAltMarkup">
                <a href="./auth/signin.html" id="btn1" type="button" class="btn btn-outline-primary me-2 rounded-0">Sign In</a>
                <a href="./auth/signup.html" id="btn2" type="button" class="btn btn-primary rounded-0">Sign Up</a>
            </div>
        </div>
        </div>
    </nav>

    <div class="position-relative mb-5">
        <img src="./assets/img/Hotel-Hero.png" style="width: 100%; height: 100dvh;" class="object-fit-cover ">
        <div class="container">
            <div class="position-absolute top-50 translate-middle-y">
                <h1 class="text-white mb-2">CREATE YOUR STORY</h1>
                <h4 class="text-white fw-light text-start mb-3">EXPERIENCE, STAY, EVENTS</h4>
                <a href="./pages/rooms.html" class="btn btn-big py-2 px-3 rounded-0">BOOK NOW</a>
            </div>
        </div>
    </div>

    <div class="w-100 container text-center">
        <h1 class="fw-semibold">OUR ROOMS</h1>
        <p class="fs-6 fw-light px-5">To our elegant hotel room designed for your utmost comfort
            and
            relaxation. Step
            into
            a
            haven of
            tranquility, where modern sophistication meets timeless luxury. The spacious room boasts tasteful décor,
            plush furnishings, and soft ambient lighting, creating a serene atmosphere for your stay.</p>

        <div class="container d-flex justify-content-center flex-wrap mb-5">
            <div class="card m-3 border-0 shadow-none" style="width: 18rem;">
                <img src="./assets/img/deluxe.jpg" class="card-img-top rounded-2">
                <div class="card-body">
                    <p class="card-text fs-4 fw-medium">SUPERIOR</p>
                </div>
            </div>

            <div class="card m-3 border-0 shadow-none" style="width: 18rem;">
                <img src="./assets/img/deluxe.jpg" class="card-img-top rounded-2">
                <div class="card-body">
                    <p class="card-text fs-4 fw-medium">DELUXE</p>
                </div>
            </div>

            <div class="card m-3 border-0 shadow-none" style="width: 18rem;">
                <img src="./assets/img//superior-twin.jpg" class="card-img-top rounded-2">
                <div class="card-body">
                    <p class="card-text fs-4 fw-medium">SUPERIOR TWIN</p>
                </div>
            </div>

            <div class="card m-3 border-0 shadow-none" style="width: 18rem;">
                <img src="./assets/img/deluxe-twin.jpg" class="card-img-top rounded-2">
                <div class="card-body">
                    <p class="card-text fs-4 fw-medium">DELUXE TWIN</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-dark py-5">
        <div class="w-100 container text-center">
            <h1 class="mb-5 text-white fw-semibold">OUR FACILITIES</h1>

            <div class="container d-flex justify-content-center flex-wrap m-0 p-0">
                <div class="card m-3 bg-dark text-white shadow-none border-0" style="width: 18rem;">
                    <img src="./assets/img/bar.jpg" class="card-img-top rounded-2">
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium">BAR
                        </p>
                    </div>
                </div>

                <div class="card m-3 bg-dark text-white shadow-none border-0" style="width: 18rem;">
                    <img src="./assets/img/sauna.jpg" class="card-img-top rounded-2">
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium">SAUNA
                        </p>
                    </div>
                </div>

                <div class="card m-3 bg-dark text-white shadow-none border-0" style="width: 18rem;">
                    <img src="./assets/img/restaurant.jpg" class="card-img-top rounded-2">
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium">RESTAURANT
                        </p>
                    </div>
                </div>

                <div class="card m-3 bg-dark text-white shadow-none border-0" style="width: 18rem;">
                    <img src="./assets/img/gym.jpg" class="card-img-top rounded-2">
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium">GYM
                        </p>
                    </div>
                </div>

                <div class="card m-3 bg-dark text-white shadow-none border-0" style="width: 18rem;">
                    <img src="./assets/img/swimmingPool.jpg" class="card-img-top rounded-2 object-fit-cover " style="height: 230px;">
                    <div class="card-body">
                        <p class="card-text fs-4 fw-medium">SWIMMING POOL
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
</section>