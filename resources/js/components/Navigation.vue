<template>
  <nav
    id="navbar"
    class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
  >
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
        <ul class="navbar-nav mr-auto" v-if="$route.path == '/'">
          <li class="nav-item">
            <a
              style="font-family: Poppins-Light"
              class="nav-link"
              href="#header"
              >Header</a
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
        </ul>
        <ul class="navbar-nav mr-auto" v-else>
          <li class="nav-item">
            <router-link
              style="font-family: Poppins-Light"
              class="nav-link"
              to="/"
              >Home</router-link
            >
          </li>
          <li class="nav-item">
            <router-link
              style="font-family: Poppins-Light"
              class="nav-link"
              to="/request"
              >Request</router-link
            >
          </li>
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
    $("a").on("click", function (event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          800,
          function () {
            window.location.hash = hash;
          }
        );
      } // End if
    });

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos >= currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-70px";
      }
      prevScrollpos = currentScrollPos;
    };
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

<style>
#navbar {
  transition: top 0.3s;
}
</style>