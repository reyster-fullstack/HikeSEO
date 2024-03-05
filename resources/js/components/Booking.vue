<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Hayden's Garage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/dashboard">Dashboard</a>
                <a class="nav-item nav-link active" href="/booking">Book Now</a>
                <a class="nav-item nav-link" href="/aboutus">About Us</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="w-100 d-flex justify-content-center mt-5">
            <div class="w-50 border p-5">
                <form action="" method="post">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" required>
                </div>
                <div class="mb-3">
                    <label for="emailaddress" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phonenumber" required>
                </div>
                <div class="mb-3">
                    <label for="makemodel" class="form-label">Vehicle Make & Model</label>
                    <input type="text" class="form-control" id="makemodel" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </main>
  </template>
  
  <script>
  export default {
    name: 'Booking',
  }
  </script>
  
  <style scoped>

  </style>
  