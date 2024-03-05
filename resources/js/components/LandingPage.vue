<template>
  <div class="landing">
    <h1>Welcome to HikeSEO Car Booking</h1>
    <p>Book your ride with us and enjoy the journey!</p>
  </div>
  <div class="continue">
      <div class="w-100 d-flex justify-content-center">
        <a href="/dashboard" class="btn btn-primary">Continue</a>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LandingPage',
}
</script>

<style scoped>
  .landing {
    text-align: center;
    padding: 50px;
  }

  h1 {
    color: #333;
  }

  p {
    color: #666;
    margin-top: 20px;
  }
</style>
