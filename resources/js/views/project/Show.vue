<template>
  <div class="container">
    <h1>{{ project.nama }}</h1>
    <hr />
    <div class="mb-4">
      {{ project.published }} - {{ project.email }}- {{ project.instansi }}-
      {{ project.nomor_wa }}
    </div>

    <div class="row d-flex flex-wrap">
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Deadline</div>
          <div class="card-body">
            {{ project.deadline }}
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Jenis Proyek</div>
          <div class="card-body">
            {{ project.jenis_proyek }}
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Tujuan Pembuatan</div>
          <div class="card-body">
            {{ project.tujuan_pembuatan }}
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Deskripsi Proyek</div>
          <div class="card-body">
            {{ project.deskripsi }}
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Apakah ada desain</div>
          <div class="card-body">
            {{ project.desain }}
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Catatan Proyek</div>
          <div class="card-body">
            {{ project.catatan }}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Pertanyaan</div>
          <div class="card-body">
            {{ project.pertanyaan }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      project: [],
    };
  },
  mounted() {
    this.getproject();
  },

  methods: {
    async getproject() {
      let response = await axios.get(
        "/api/projects/" + this.$route.params.projectSlug
      );
      this.project = response.data.data;
    },
  },
};
</script>

<style>
</style>