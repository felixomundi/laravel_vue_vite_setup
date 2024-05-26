<!-- App.vue -->

<template>
    <div id="app">
      <Navbar />
      <router-view></router-view>
    </div>
  </template>

  <script>
  import Navbar from './Navbar.vue'; // Import the Navbar component
  import Home from './Home.vue';
  export default {
    components: {
      Navbar, // Register the Navbar component
    },
    // Other component logic
  }
  </script>

  <style>
  /* Component styles */
  </style>
