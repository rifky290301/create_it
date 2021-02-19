<template>
  <div class="" style="margin-top: -3rem !important">
    <!-- Header -->
    <div id="header">
      <!-- <span class="logo icon fa-paper-plane-o"></span> -->
      <span><img :src="'images/global/IG LOGO.svg'" /></span>
      <h1 class="py-3">
        <img :src="'images/home/WELCOME VIX_animated.svg'" />
      </h1>
      <p>
        create IT adalah badan usaha yang melayani pembuatan berbgai produk
        berbasis IT khusunya dalam bidang multimedia seperti foto dan video dan
        dibawah naungan langsung oleh Himpunan Mahasiswa Informatika Universitas
        Jember
      </p>
      <ul class="actions mt-5">
        <a href="/request" class="button">Request Project</a>
      </ul>
    </div>

    <!-- Main -->
    <div id="main">
      <header class="major container 75%">
        <h2>
          Bagaimana cara kerjanya ?
          <br />
          simak penjelasannya dibawah ini
        </h2>
      </header>
      <div class="box alt container">
        <section class="feature left">
          <div class="image">
            <img
              :src="'images/home/undrow/undraw_add_document_0hek.svg'"
              alt=""
            />
          </div>
          <div class="content">
            <h3>
              <span class="highligt">1.</span> Mengisi Form Pengajuan Proyek
            </h3>
            <p>Form pengajuan dapat diisi di halaman ini</p>
          </div>
        </section>
        <section class="feature right">
          <div class="image">
            <img
              :src="'images/home/undrow/undraw_Mobile_messages_re_yx8w.svg'"
              alt=""
            />
          </div>
          <div class="content">
            <h3><span class="highligt">2.</span>Diskusi dengan Klien</h3>
            <p>
              Client dapat menghubungi admin, lalu mendiskusikan proyek yang
              telah diisikan di form pada tahap pertama
            </p>
          </div>
        </section>
        <section class="feature left">
          <div class="image">
            <img
              :src="'images/home/undrow/undraw_people_search_wctu.svg'"
              alt=""
            />
          </div>
          <div class="content">
            <h3><span class="highligt">3.</span>Mencari Desainer</h3>
            <p>
              Admin akan mencarikan desainer yang cocok dengan request proyek
              yang telah diajukan
            </p>
          </div>
        </section>
        <section class="feature right">
          <div class="image">
            <img :src="'images/home/undrow/undraw_agreement_aajr.svg'" alt="" />
          </div>
          <div class="content">
            <h3><span class="highligt">4.</span>Persetujuan Perjanjian</h3>
            <p>
              Melakukan kesepakatan admin dengan client seperti harga, deadline,
              dll
            </p>
          </div>
        </section>
        <section class="feature left">
          <div class="image">
            <img
              :src="'images/home/undrow/undraw_innovative_b409.svg'"
              alt=""
            />
          </div>
          <div class="content">
            <h3><span class="highligt">5.</span>Pengerjaan Proyek</h3>
            <p>
              Desiner melakukan pengerjaan proyek yang telah diberikan. Dan di
              kontrol oleh admin
            </p>
          </div>
        </section>
        <section class="feature right">
          <div class="image">
            <img
              :src="'images/home/undrow/undraw_Checklist__re_2w7v.svg'"
              alt=""
            />
          </div>
          <div class="content">
            <h3><span class="highligt">6.</span>Selesai</h3>
            <p>
              Proyek selesai dikerjakan dan diserahkan kepada client. Dan
              melakukan pembayaran sesuai dengan kesepakatan
            </p>
          </div>
        </section>
      </div>

      <footer class="d-flex" style="flex-direction: column">
        <h3 style="font-family: Poppins-Medium" class="m-auto">
          Tertarik menggunakan jasa kami?
        </h3>
        <ul class="actions mt-3">
          <router-link :to="'/request'" class="button"
            >Request Project</router-link
          >
        </ul>
      </footer>
    </div>

    <!-- Footer -->
    <div id="footer">
      <div class="containerr">
        <header class="major last" id="feed">
          <h2>Pertanyaan atau komentar?</h2>
        </header>

        <form action="#" method="post" @submit.prevent="store">
          <div class="row justify-content-between input100">
            <div class="input-feedback">
              <input type="text" v-model="form.nama" placeholder="Name" />
              <div v-if="theErrors.nama" class="mt-2 text-danger">
                {{ theErrors.nama[0] }}
              </div>
            </div>
            <div class="input-feedback">
              <input type="email" v-model="form.email" placeholder="Email" />
              <div v-if="theErrors.email" class="mt-2 text-danger">
                {{ theErrors.email[0] }}
              </div>
            </div>
          </div>
          <div class="row mt-3 mb-3">
            <div class="area-text">
              <textarea v-model="form.pesan" placeholder="Message"></textarea>
              <div v-if="theErrors.pesan" class="mt-2 text-danger">
                {{ theErrors.pesan[0] }}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="d-flex m-auto">
              <ul class="actions">
                <input class="button" type="submit" value="Send Message" />
              </ul>
            </div>
          </div>
        </form>

        <ul class="icons">
          <li>
            <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#" class="icon"><i class="fab fa-github"></i></a>
          </li>
          <li>
            <a href="#" class="icon"><i class="fab fa-dribbble"></i></a>
          </li>
        </ul>

        <ul class="copyright">
          <li>&copy; create IT HMIF UNEJ 2021. All rights reserved.</li>
        </ul>
      </div>
    </div>
  </div>
</template>


	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>
<script>
export default {
  data() {
    return {
      form: {
        nama: "",
        email: "",
        pesan: "",
      },

      // untuk validasi saat tidak diisi
      theErrors: [],
    };
  },

  mounted() {},

  methods: {
    async store() {
      try {
        let response = await axios.post("/api/feedback/create", this.form);
        if (response.status == 200) {
          // this.subjects = response.data;
          this.form.nama = "";
          this.form.email = "";
          this.form.pesan = "";
          // apabila eror harus dihapus erornya dengan ini setelah form diisi
          this.theErrors = [];
        }
        this.$swal({
          position: "top-end",
          icon: "success",
          title: "Feedback berhasil dikirim",
          showConfirmButton: false,
          timer: 1500,
        });
      } catch (e) {
        this.theErrors = e.response.data.errors;
      }
    },
  },
};
</script>
<style>
@import url("/css/home/responsif.css");

#header {
  background-attachment: scroll, scroll, fixed;
  background: #3fa9f5;
  /* background-image: url("images/top-1600.svg"), url("images/overlay.png"), url("../images/header.jpg"); */

  background-image: url("/images/home/top-3200.svg");
  /* background-image: url("images/top-1600.svg"); */
  background-position: bottom center, top left, center center;
  background-repeat: repeat-x, repeat, no-repeat;
  background-size: 3200px 460px, auto, cover;
  color: rgba(255, 255, 255, 0.8);
  padding: 10em 0 20em 0;
  position: relative;
  text-align: center;
}

#header:before {
  height: calc(100% - 50px);
  opacity: 0.15;
  top: 0;
}

#header:after {
  bottom: 0;
  height: 50px;
}

#header a {
  border-bottom-color: rgba(255, 255, 255, 0.35);
  color: rgba(255, 255, 255, 0.8);
}

#header a:hover {
  border-bottom-color: transparent;
  color: #3fa9f5;
}

#header strong,
#header b {
  color: white;
}

#header h1,
#header h2,
#header h3,
#header h4,
#header h5,
#header h6 {
  color: white;
}

#header input[type="submit"],
#header input[type="reset"],
#header input[type="button"],
#header .button {
  background: white;
  color: #544d55;
}

#header .logo {
  background: #0c2b6c;
  border-radius: 100%;
  color: white;
  cursor: default;
  display: inline-block;
  font-size: 2.25em;
  height: 2.35em;
  line-height: 2.35em;
  margin: 0 0 0.75em 0;
  text-align: center;
  width: 2.35em;
}

#header h1 {
  font-size: 2.5em;
  margin: 0;
}

#header p {
  font-size: 1.5em;
  line-height: 1.5em;
  margin: 0 10vw;
  font-family: "Poppins-Regular";
}

#header span img {
  /* filter: drop-shadow(1px 1px 0px purple) drop-shadow(-1px 1px 0px purple) drop-shadow(1px -1px 0px purple) drop-shadow(-1px -1px 0px purple); */
  filter: drop-shadow(0 0 0.3rem black);
}

header {
  text-align: center;
}

header p {
  position: relative;
  top: -1em;
  color: #888888;
  text-transform: uppercase;
  letter-spacing: 0.075em;
}

header.major {
  margin-bottom: 6em;
  padding: 4em 0;
  position: relative;
}

header.major:before {
  top: 10px;
}

header.major:after {
  bottom: 10px;
}

header.major h2 {
  margin: 0;
  font-family: "Poppins-Medium";
}

header.major p {
  top: 0;
  margin: 1.5em 0 0 0;
  padding: 1.5em 1.5em 0 1.5em;
  font-size: 1.5em;
  line-height: 1.75em;
  border-top: solid 1px rgba(224, 224, 224, 0.75);
  display: inline-block;
}

header.major.last {
  border-bottom: 0;
  margin-bottom: 0;
  padding-bottom: 0;
}

header.major.last:after {
  display: none;
}

header.major.last h2 {
  margin-bottom: 1em;
}

/* Box */

.box {
  background: white;
  border: solid 1px rgba(224, 224, 224, 0.75);
  margin-bottom: 6em;
  padding: 3.5em;
}

.box.alt {
  background: none;
  border: none;
  padding: 0;
}

/* Feature */

.feature {
  position: relative;
  height: 20em;
}

.feature:after {
  clear: both;
  content: "";
  display: block;
}

.feature h3 {
  text-align: inherit;
}

@media (max-width: 480px) {
  .feature h3 {
    font-size: 1.3rem;
  }

  .feature .content {
    padding: 0 1rem !important;
    vertical-align: unset !important;
  }
}

.feature .image {
  display: inline-block;
  height: 100%;
  overflow: hidden;
  position: relative;
  width: 50%;
}

.feature .image img {
  display: block;
  max-height: 100%;
  max-width: 100%;
  position: absolute;
}

.feature:before {
  background: blue;
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.feature .content {
  display: inline-block;
  padding: 3.5em;
  vertical-align: middle;
  width: 48%;
}

.feature .content h3 {
  margin-bottom: 0.5em;
  /* font-weight: 600; */
  font-family: "Poppins-Medium";
}

.feature .content :last-child {
  margin: 0;
  line-height: 1.2rem;
  font-size: 1rem;
  font-family: "Poppins-Light";
}

.feature.left {
  text-align: left;
}

.feature.left .image {
  float: left;
}

.feature.left .image img {
  right: 0;
  top: 0;
}

.feature.left .content {
  padding-right: 0;
}

.feature.right {
  text-align: right;
}

.feature.right .image {
  float: right;
}

.feature.right .image img {
  left: 0;
  top: 0;
}

.feature.right .content {
  padding-left: 0;
}

.feature.long .content {
  padding-top: 0;
}

/* Footer */

#footer {
  background-attachment: scroll;
  background-color: #3fa9f5;
  background-image: url("/images/home/bottom-3200.svg");
  /* background-image: url("images/bottom-1600.svg"); */
  background-position: top center;
  background-repeat: repeat-x;
  background-size: 3200px 460px;
  color: rgba(255, 255, 255, 0.8);

  padding: calc(460px + 6em) 0 10em 0;
  position: relative;
  text-align: center;
}

#footer a {
  color: white;
}

#footer strong,
#footer b {
  color: white;
}

#footer h1,
#footer h2,
#footer h3,
#footer h4,
#footer h5,
#footer h6 {
  color: white;
}

#footer header p {
  color: rgba(255, 255, 255, 0.5);
}

#footer input[type="submit"],
#footer input[type="reset"],
#footer input[type="button"],
#footer .button,
#header .button {
  background: white;
  box-shadow: inset 0 0 0 1px white;
  color: #3fa9f5;
}

#footer input[type="submit"]:hover,
#footer input[type="reset"]:hover,
#footer input[type="button"]:hover,
#header .button:hover,
#footer .button:hover {
  background: rgba(224, 224, 224, 0.15);
  color: white;
}

#footer input[type="text"]:focus,
#footer input[type="password"]:focus,
#footer input[type="email"]:focus,
#footer select:focus,
#footer textarea:focus {
  border-color: white;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
select:focus,
textarea:focus {
  background: rgba(224, 224, 224, 0.15);
  border-color: #3fa9f5;
}

::-webkit-input-placeholder {
  color: inherit;
  opacity: 0.5;
  position: relative;
  top: 3px;
}

:-moz-placeholder {
  color: inherit;
  opacity: 0.5;
}

::-moz-placeholder {
  color: inherit;
  opacity: 0.5;
}

:-ms-input-placeholder {
  color: inherit;
  opacity: 0.5;
}

#footer .formerize-placeholder {
  color: rgba(255, 255, 255, 0.3) !important;
}

#footer form {
  margin: 3em 0;
}

#footer .copyright {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.8em;
  line-height: 1em;
  margin: 3em 0 0 0;
  padding: unset;
}

#footer .copyright li {
  border-left: dotted 1px;
  display: inline-block;
  margin-left: 1em;
  padding-left: 1em;
}

#footer .copyright li:first-child {
  padding: 0;
  margin: 0;
  border: 0;
}

#footer .copyright li a,
#footer .copyright li span {
  color: inherit;
}

#footer .copyright li a:hover,
#footer .copyright li span:hover {
  color: white;
}

.containerr {
  margin-left: auto;
  margin-right: auto;
  width: 48em;
}

@media (max-width: 780px) {
  .containerr {
    width: 80%;
  }
  /* .input100 {
    flex-direction: column !important;
  } */

  input[type="email"],
  input[type="text"] {
    width: 100%;
  }
}

/* Button */
.button {
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
  -ms-appearance: none;
  appearance: none;
  -moz-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
  -webkit-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
  -ms-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
  background: #0c2b6c;
  border-radius: 4px;
  border: 0;
  color: white;
  cursor: pointer;
  display: inline-block;
  font-size: 0.9em;
  font-weight: 700;
  letter-spacing: 0.125em;
  line-height: 3.25em;
  min-width: 15em;
  padding: 0 1.5em;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
}

input[type="email"],
input[type="text"],
textarea {
  transition: background-color 0.2s ease-in-out;
  background: none;
  border-radius: 4px;
  border: 0;
  border: solid 1px rgba(224, 224, 224, 0.75);
  color: inherit;
  display: block;
  outline: 0;
  padding: 0.75em;
  text-decoration: none;
  width: 100%;
  opacity: 1;
}
textarea {
  height: 10rem;
}
.input-feedback {
  width: 48%;
}

.area-text {
  width: 100%;
}

.button:hover {
  background: #264a98;
  color: white;
  text-decoration: none;
}

ul.actions {
  cursor: default;
  text-align: center;
  padding: 0 !important;
}

/* Icon */

.icon {
  text-decoration: none;
  border-bottom: none;
  position: relative;
}

.icon:before {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-transform: none !important;
}

.icon > .label {
  display: none;
}

ul.icons {
  cursor: default;
  padding-left: unset;
}

ul.icons li {
  display: inline-block;
  font-size: 1.25em;
  line-height: 1em;
  padding-left: 0.5em;
}

ul.icons li:first-child {
  padding-left: 0;
}

ul.icons li a,
ul.icons li span {
  -moz-transition: background-color 0.2s ease-in-out;
  -webkit-transition: background-color 0.2s ease-in-out;
  -o-transition: background-color 0.2s ease-in-out;
  -ms-transition: background-color 0.2s ease-in-out;
  transition: background-color 0.2s ease-in-out;
  border-radius: 100%;
  border: solid 1px rgba(224, 224, 224, 0.75);
  display: inline-block;
  height: 2em;
  line-height: 2em;
  text-align: center;
  width: 2em;
}

ul.icons li a:hover,
ul.icons li span:hover {
  background: rgba(224, 224, 224, 0.15);
}

ul.actions {
  cursor: default;
  text-align: center;
}

ul.actions:last-child {
  margin-bottom: 0;
}

ul.actions li {
  display: inline-block;
  padding: 0 0 0 1.5em;
}

ul.actions li:first-child {
  padding: 0;
}

ul.actions.vertical li {
  display: block;
  padding: 1.5em 0 0 0;
}

ul.actions.vertical li:first-child {
  padding: 0;
}

/* GLOBAL */
a {
  text-decoration: none;
}

li {
  list-style: none;
}

/* higlight */
.highligt {
  background-image: linear-gradient(
    0deg,
    #3fa9f5 17.5px,
    #3fa9f5 0,
    transparent 0,
    transparent
  );
}

.feature .content .highligt {
  font-family: "Poppins-Bold";
  font-size: 2rem;
}
</style>

