<template>
  <button
    class="btn btn-danger"
    ref="deleteFeedback"
    @click="destroyFeedback()"
  >
    Delete
  </button>
</template>

<script>
export default {
  props: ["endpoint"],

  mounted() {},
  methods: {
    async destroyFeedback() {
      // let q = window.confirm("are you sure?");
      this.$swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.value) {
          this.$swal("Deleted!", "Your file has been deleted.", "success");
          // console.log("berhasil hapus");

          axios.delete(`/api/feedback/${this.endpoint}/delete`);
          this.$refs.deleteFeedback.parentNode.parentNode.remove();
        }
      });
    },
  },
};
</script>

<style>
</style>