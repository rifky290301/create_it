<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <router-link class="navbar-brand" to="/"
        ><img width="40" height="40" :src="'images/global/IG LOGO.svg'"
      /></router-link>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a
              style="font-family: Poppins-Light"
              class="nav-link"
              href="#header"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a style="font-family: Poppins-Light" class="nav-link" href="#main"
              >Alur Kerja</a
            >
          </li>
          <li class="nav-item">
            <a style="font-family: Poppins-Light" class="nav-link" href="#feed"
              >Feedback</a
            >
          </li>
          <!-- <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'project.table' }"
              >Tabel Proyek</router-link
            >
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
// tidak jadi
export default {
  name: "navbar",
  props: ["app"],
  data() {
    return {};
  },

  mounted: function () {
    // Add smooth scrolling to all links
    $("a").on("click", function (event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          800,
          function () {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          }
        );
      } // End if
    });
  },

  methods: {
    logout() {
      this.app.req.post("auth/logout").then(() => {
        this.app.user = null;
        this.$router.push("/login");
      });
    },
  },
};
</script>
