<template>
  <div class="container">
    <div class="d-flex justify-content-between">
      <h3>Table Of Feedback</h3>
    </div>
    <hr />
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Pesan</th>
          <th>Published</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="feedback in feedbacks" :key="feedback.id">
          <td>{{ feedback.nama }}</td>
          <td>{{ feedback.email }}</td>
          <td>{{ feedback.pesan }}</td>
          <td>{{ feedback.published }}</td>
          <td>
            <!-- komponen Deletefeedback -->
            <delete-feedback :endpoint="feedback.pesan" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import DeleteFeedback from "./Delete";

export default {
  components: {
    DeleteFeedback,
  },

  data() {
    return {
      feedbacks: [],
      akun: [],
    };
  },

  mounted() {
    this.getPassword2();
  },

  methods: {
    async getFeedback() {
      let { data } = await axios.get("/api/feedback/read");
      this.feedbacks = data.data;
    },

    async getPassword2() {
      const Swal = require("sweetalert2");
      Swal.mixin({
        input: "email",
        confirmButtonText: "Next &rarr;",
        showCancelButton: true,
        progressSteps: ["1", "2"],
      })
        .queue([
          {
            // title: "Email",
            title: "Input email address",
            input: "text",
            inputLabel: "Your email address",
            inputPlaceholder: "Enter your email address",
          },
          {
            // title: "Password",
            title: "Enter your password",
            input: "password",
            inputLabel: "Password",
            inputPlaceholder: "Enter your password",
          },
        ])
        .then((result) => {
          if (
            result.value &&
            result.value[0] == this.akun[0] &&
            result.value[1] == this.akun[1]
          ) {
            this.getFeedback();
          } else {
            this.getPassword2();
          }
        });
    },
  },
};
</script>

<style>
</style>