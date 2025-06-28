<style>
    .carousel-inner img {
        border-radius: 15px;
    }

    .department-box {
        border: 2px solid green;
        padding: 1rem;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .department-box .card {
        background-color: rgba(137, 219, 109, 0.72);
        font-weight: bold;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .about-section {
        background-image: url('/img/trinco.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .about-box {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        max-width: 450px;
        margin-left: auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    a {
        text-decoration: none;
        color: black;
    }

    .btn:hover {
        border-color: black 1px solid;
        transition: 0.5s;
    }
</style>

<!-- Carousel -->
<!-- Carousel -->
<div class="container my-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/img/trinco.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/trinco.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img/trinco.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!-- Department -->
<div class="container text-center my-5">
    <h3 class="fw-bold">Department & Course</h3>
    <div class="department-box mt-3">
        <div class="card p-3"><a href="/course/hnd-accounts">Higher national diploma in Accountancy</a></div>
        <div class="card p-3"><a href="/course/hnd-it">Higher national diploma in Information Technology</a></div>
        <div class="card p-3"><a href="#">Higher national diploma in English</a></div>
        <div class="card p-3"><a href="#">Higher national diploma in Tourism & Hotel management</a></div>
    </div>
</div>

<!-- About us section -->
<div class="about-section">
    <div class="container">
        <div class="about-box text-start">
            <h4>About us</h4>
            <strong>Advanced Technological Institute Trincomalee</strong>
            <p class="mt-2">
                ATI Trinco is a part of SLIATE and one of the 19 SLIATE Institutes. It enables many students to their Higher
                Education and become a member of the work force.
            </p>
            <a href="#" class="btn btn-warning mt-2">About us</a>
        </div>
    </div>
</div>