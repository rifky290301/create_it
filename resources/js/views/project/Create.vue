<template>
  <div class="container">
    <div class="middle">
      <form action="#" method="post" @submit.prevent="store">
        <h1>Formulir Pengajuan Proyek</h1>

        <div id="fancy-inputs">
          <label class="input">
            <div class="teks-label text-left mb-5">Siapa nama Anda</div>
            <input id="nama" type="text" v-model="form.nama" />
            <span><span>Nama</span></span>
            <div class="required-star">*</div>
            <div v-if="theErrors.nama" class="mt-2 text-danger">
              {{ theErrors.nama[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">
              Dari instansi atun event apa anda berasal atau hanya kebutuhan
              personal
            </div>
            <input id="instansi" type="text" v-model="form.instansi" />
            <span><span>Instansi</span></span>
            <div class="required-star">*</div>
            <div v-if="theErrors.instansi" class="mt-2 text-danger">
              {{ theErrors.instansi[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">
              Masukkan alamat email Anda
            </div>
            <input type="email" v-model="form.email" />
            <span><span>email</span></span>
            <div class="required-star">*</div>
            <div v-if="theErrors.email" class="mt-2 text-danger">
              {{ theErrors.email[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">Apa nomor WhatsApp Anda</div>
            <input type="text" v-model="form.nomorWa" />
            <span><span>Nomor WhatsApp</span></span>
            <div class="required-star">*</div>
            <div v-if="theErrors.nomorWa" class="mt-2 text-danger">
              {{ theErrors.nomorWa[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">Jenis Proyek</div>
            <select v-model="form.jenisProyek" id="jenisProyek">
              <option disabled selected>Jenis Proyek</option>
              <option
                :key="jenisProyek.id"
                :value="jenisProyek.id"
                v-for="jenisProyek in jenisProyeks"
              >
                {{ jenisProyek.nama_proyek }}
              </option>
            </select>
            <div class="required-star">*</div>
            <!-- <span><span>Jenis Proyek</span></span> -->
            <div v-if="theErrors.jenisProyek" class="mt-2 text-danger">
              {{ theErrors.jenisProyek[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">
              Tujuan pembuatan proyek ini
            </div>
            <input type="text" v-model="form.tujuanPembuatan" />
            <span><span>Tujuan Pembuatan</span></span>
            <div class="required-star">*</div>
            <div v-if="theErrors.tujuanPembuatan" class="mt-2 text-danger">
              {{ theErrors.tujuanPembuatan[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">Deskripsi Proyek</div>
            <input type="text" v-model="form.deskripsi" />
            <span><span>Deskripsi</span></span>
            <div class="required-star">*</div>
            <div v-if="theErrors.deskripsi" class="mt-2 text-danger">
              {{ theErrors.deskripsi[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">Deadline</div>
            <input
              v-model="form.deadline"
              type="datetime-local"
              id="deadline"
            />
            <div class="required-star">*</div>
            <div v-if="theErrors.deadline" class="mt-2 text-danger">
              {{ theErrors.deadline[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">
              Apakah anda memiliki desan kasaran? jelaskan
            </div>
            <input type="text" v-model="form.desain" />
            <span><span>Desain</span></span>
            <div v-if="theErrors.desain" class="mt-2 text-danger">
              {{ theErrors.desain[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">
              Catatan untuk proyek ini
            </div>
            <input type="text" v-model="form.catatan" />
            <span><span>Catatan</span></span>
            <div v-if="theErrors.catatan" class="mt-2 text-danger">
              {{ theErrors.catatan[0] }}
            </div>
          </label>

          <label class="input">
            <div class="teks-label text-left mb-5">Apakah ada pertanyaan?</div>
            <input type="text" v-model="form.pertanyaan" />
            <span><span>Pertanyaan</span></span>
            <div v-if="theErrors.pertanyaan" class="mt-2 text-danger">
              {{ theErrors.pertanyaan[0] }}
            </div>
          </label>
        </div>

        <button type="submit" class="btn mb-3">
          Kirim
          <template v-if="loading">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              style="
                margin: auto;
                background: none;
                display: block;
                shape-rendering: auto;
              "
              width="30px"
              height="30px"
              viewBox="0 0 100 100"
              preserveAspectRatio="xMidYMid"
            >
              <circle
                cx="50"
                cy="50"
                r="32"
                stroke-width="8"
                stroke="#4b79dc"
                stroke-dasharray="50.26548245743669 50.26548245743669"
                fill="none"
                stroke-linecap="round"
              >
                <animateTransform
                  attributeName="transform"
                  type="rotate"
                  dur="1s"
                  repeatCount="indefinite"
                  keyTimes="0;1"
                  values="0 50 50;360 50 50"
                ></animateTransform>
              </circle>
              <circle
                cx="50"
                cy="50"
                r="23"
                stroke-width="8"
                stroke="#6ac2f8"
                stroke-dasharray="36.12831551628262 36.12831551628262"
                stroke-dashoffset="36.12831551628262"
                fill="none"
                stroke-linecap="round"
              >
                <animateTransform
                  attributeName="transform"
                  type="rotate"
                  dur="1s"
                  repeatCount="indefinite"
                  keyTimes="0;1"
                  values="0 50 50;-360 50 50"
                ></animateTransform>
              </circle>
            </svg>
          </template>
        </button>
        <div class="float-left h4 mb-5">
          <span class="required-starr">*</span>
          Wajib diisi
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        nama: "",
        instansi: "",
        email: "",
        nomorWa: "",
        jenisProyek: "",
        tujuanPembuatan: "",
        deskripsi: "",
        deadline: "",
        desain: "",
        catatan: "",
        pertanyaan: "",
      },
      // untuk loading pada tombol
      loading: false,
      // notif untuk sukses create
      successMessage: "",
      jenisProyeks: [],
      // untuk validasi saat tidak diisi
      theErrors: [],
    };
  },

  mounted: function () {
    // Inputs

    $("#fancy-inputs input").blur(function () {
      if ($(this).val().length > 0) {
        $(this).addClass("white");
      } else {
        $(this).removeClass("white");
      }
    });
    // Radios
    $("#fancy-radio input[type=radio]").click(function () {
      $("label.radio").removeClass("selected");
      var inputID = $(this).attr("id");
      if ($(this).is(":checked")) {
        $("." + inputID).addClass("selected");
      } else {
        $("." + inputID).removeClass("selected");
      }
    });

    var inputs = jQuery("form input").get();
    jQuery("form").on("keydown", "input", function (e) {
      if (e.key === "Enter") {
        var which = inputs.indexOf(this),
          next = inputs[which + 1];
        if (next) {
          next.focus();
          // next.parentElement.scrollIntoView({ behavior: "smooth" });
          next.parentElement.scrollIntoView({
            behavior: "smooth",
            block: "center",
            // inline: "nearest",
          });
        }
        e.preventDefault();
        return false;
      }
    });
    this.getJenis();
  },

  methods: {
    async getJenis() {
      let response = await axios.get("/api/jenis_proyek");
      console.log(response.data);

      // cuman memastikan kalau data yang jadi di render
      if (response.status === 200) {
        this.jenisProyeks = response.data;
      }
    },

    async store() {
      this.loading = true;
      try {
        let response = await axios.post("/api/projects/create", this.form);
        if (response.status == 200) {
          // this.subjects = response.data;
          this.form.nama = "";
          this.form.instansi = "";
          this.form.email = "";
          this.form.nomorWa = "";
          this.form.jenisProyek = "";
          this.form.tujuanPembuatan = "";
          this.form.deskripsi = "";
          this.form.deadline = "";
          this.form.desain = "";
          this.form.catatan = "";
          this.form.pertanyaan = "";
          // apabila eror harus dihapus erornya dengan ini setelah form diisi
          this.theErrors = [];

          // notif
          this.successMessage = response.data.message;

          this.$swal({
            position: "top-end",
            icon: "success",
            title: "Data berhasil dikirim",
            showConfirmButton: false,
            timer: 1500,
          });
          // Swal.fire("Any fool can use a computer");
        }
      } catch (e) {
        this.theErrors = e.response.data.errors;
      }
      this.loading = false;
    },
  },
};
</script>

<style>
.middle {
  width: 660px;
  margin: 0 auto;
}

@media (max-width: 770px) {
  .middle {
    width: 90%;
  }
}

.middle h1 {
  margin: 50px 0 0 0;
  color: #3fa9f5;
  /* font-family: "Indie Flower", cursive; */
  font-size: 48px;
  font-weight: normal;
  text-align: center;
  font-family: "Poppins-Bold";
}

@media (max-width: 475px) {
  .middle h1 {
    font-size: 2rem;
  }
}

.middle #fancy-inputs {
  float: left;
  width: 100%;
  margin: 0 0 50px 0;
}

.middle #fancy-inputs label.input {
  float: left;
  width: 100%;
  height: 42px;
  margin: 50px 0 0 0;
  position: relative;
  clear: both;
  margin: 8rem 0;
}

.middle #fancy-inputs label.input span {
  width: 100%;
  height: 40px;
  line-height: 40px;
  position: absolute;
  left: 0;
  cursor: text;
}

.middle #fancy-inputs label.input span span {
  position: absolute;
  top: 0;
  z-index: 1;
  /* font-family: "Indie Flower", cursive; */
  font-size: 22px;
  color: #3fa9f5;
  text-indent: 10px;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
}

.middle #fancy-inputs label.input span:before {
  content: "";
  width: 0%;
  height: 3px;
  background-color: #0c2b6c;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 99;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
}

.middle #fancy-inputs label.input span:after {
  content: "";
  width: 0%;
  height: 3px;
  background-color: #0c2b6c;
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: 99;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
}

.middle #fancy-inputs input,
.middle #fancy-inputs select {
  float: left;
  width: 100%;
  height: 40px;
  padding: 0 10px;
  border: 0;
  border-bottom: 3px solid #3fa9f5;
  background-color: transparent;
  color: #3fa9f5;
  /* font-family: "Indie Flower", cursive; */
  font-size: 22px;
  position: relative;
  z-index: 99;
  font-family: "Poppins-Regular";
}

.middle #fancy-inputs input:focus {
  outline: 0;
}

.middle #fancy-inputs input.white {
  background-color: #f8fafc;
}

.middle #fancy-inputs input:focus + span span {
  cursor: initial;
  position: absolute;
  top: -35px;
  color: #0c2b6c;
}

.middle #fancy-inputs input:focus + span:before {
  width: 50%;
}

.middle #fancy-inputs input:focus + span:after {
  width: 50%;
}

.middle #fancy-inputs span.fixed span {
  top: -35px;
}

.middle #fancy-radio {
  float: left;
  width: 100%;
  margin: 0 0 30px 0;
}

.middle #fancy-radio label.radio {
  float: left;
  width: auto;
  line-height: 30px;
  margin: 0 0 10px 0;
  color: #3fa9f5;
  /* font-family: "Indie Flower", cursive; */
  font-size: 22px;
  cursor: pointer;
  position: relative;
  clear: both;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
}

.middle #fancy-radio label.radio:before {
  content: "";
  float: left;
  width: 29px;
  height: 29px;
  margin: 0 5px 0 0;
  background-color: #3fa9f5;
  border-radius: 100%;
  font-size: 22px;
  text-indent: 40px;
}

.middle #fancy-radio label.radio:after {
  content: "";
  width: 5px;
  height: 5px;
  background-color: #0c2b6c;
  border-radius: 100%;
  position: absolute;
  top: 12px;
  left: 12px;
  opacity: 0;
  transition: 0.2s;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
}

.middle #fancy-radio label.radio.selected:after {
  width: 15.5px;
  height: 15.5px;
  top: 7px;
  left: 7px;
  opacity: 1;
}

.middle #fancy-radio label.radio:hover {
  text-indent: 5px;
}

.middle .btn {
  float: left;
  width: 100%;
  height: 50px;
  line-height: 50px;
  margin: 0 0 50px 0;
  background-color: #0c2b6c;
  color: white;
  /* font-family: "Indie Flower", cursive; */
  font-size: 22px;
  text-decoration: none;
  text-align: center;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
}

.middle .btn:hover {
  background-color: #3fa9f5;
  /* background: repeat padding-box border-box 0% 0% / auto auto scroll linear-gradient(229deg, #b76bdd 0%, rgba(29, 44, 243, 0) 100%), #3d9797; */
}

/* teks */

.middle .teks-label {
  font-size: 1.5rem;
  font-family: "Poppins-Regular";
}

/* star */
.middle .required-star {
  font-size: 24px;
  color: #d12323;
  float: right;
  transform: translateY(-40px);
}

.middle .required-starr {
  font-size: 24px;
  color: #d12323;
  /* float: left; */
}
</style>

