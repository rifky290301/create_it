<template>
  <div class="container">
    <div class="d-flex justify-content-between">
      <h3>Table Of project</h3>
      <router-link class="btn btn-primary" to="/feedback">Feedback</router-link>
    </div>
    <hr />
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Instansi</th>
          <th>Deadline</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="project in projects" :key="project.id">
          <td>
            <router-link
              :to="{
                name: 'project.show',
                params: { projectSlug: project.slug },
              }"
              >{{ project.nama }}</router-link
            >
          </td>
          <td>{{ project.email }}</td>
          <td>{{ project.instansi }}</td>
          <td>{{ project.deadline }}</td>
          <td>
            <!-- komponen Deleteproject -->
            <delete-project :endpoint="project.id" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import DeleteProject from "./Delete";

export default {
  components: {
    DeleteProject,
  },

  data() {
    return {
      projects: [],

      akun: ["createit.hmif@gmail.com", "KWU.hmif.createit"],
    };
  },

  mounted() {
    this.getPassword();
  },

  methods: {
    async getProjects() {
      let { data } = await axios.get("/api/projects/read");
      this.projects = data.data;
    },

    // async getUser() {
    //   let { data } = await axios.get("/api/projects/read");
    //   this.akun = data.data;
    // },

    async getPassword() {
      const Swal = require("sweetalert2");
      Swal.mixin({
        confirmButtonText: "Next &rarr;",
        showCancelButton: true,
        progressSteps: ["1", "2"],
      })
        .queue([
          {
            title: "Input email address",
            input: "email",
            inputLabel: "Your email address",
            inputPlaceholder: "Enter your email address",
          },
          {
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
            // result.value[0] == "1" &&
            // result.value[1] == "2"
          ) {
            this.getProjects();
          } else {
            this.getPassword();
          }
        });
    },
  },
};
</script>

<style>
</style>