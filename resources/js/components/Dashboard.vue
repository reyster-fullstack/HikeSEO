<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Hayden's Garage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/dashboard">Dashboard</a>
                <a class="nav-item nav-link" href="/booking">Book Now</a>
                <a class="nav-item nav-link" href="/aboutus">About Us</a>

            </div>
        </div>
    </nav>

    <main>
        <div class="w-100 d-flex justify-content-center pt-5">
            <div class="w-75">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../../images/BMW M Series.jpg" class="d-block w-100 carousel-image" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../images/Mustang GT.jpg" class="d-block w-100 carousel-image" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../../images/Toyota Supra MK4.jpeg" class="d-block w-100 carousel-image" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </div>
        </div>
    </main>
  </template>
  
  <script>
  export default {
    name: 'Dashboard',
  }
  </script>
  
  <style scoped>
    .carousel-image {
        width: 100%;  /* This makes the image responsive and covers the width of the carousel */
        height: 500px; /* Fixed height */
        object-fit: cover; /* This ensures the image covers the area without stretching. */
    }
  </style>
  