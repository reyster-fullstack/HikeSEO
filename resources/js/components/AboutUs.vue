<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Hayden's Garage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-item nav-link" href="/booking">Book Now</a>
                <a class="nav-item nav-link active" href="/aboutus">About Us</a>
            </div>
        </div>
    </nav>

    <div class="about-us">
        <h1>About Us</h1>
        <p>Welcome to our car booking system. Our platform offers easy and fast car booking services to meet all your transportation needs. With a wide range of vehicles to choose from, we ensure a comfortable and reliable ride every time.</p>
        <p>Our dedicated team is committed to providing exceptional customer service and support. Whether you need a car for a business trip, vacation, or any other occasion, our system is designed to make your booking experience seamless and hassle-free.</p>
    </div>

    
  </template>
  
  <script>
  export default {
    name: 'AboutUs',
  }
  </script>
  
  <style scoped>
    .about-us {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
  </style>
  