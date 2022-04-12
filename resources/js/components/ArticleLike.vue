<template>
  <div>
    <button
      type="button"
      class="btn m-0 p-1 shadow-none"
    >
      <i class="fas fa-heart mr-1"
        :class="{'text-danger':this.isLikedBy}"
      />
    </button>
    10
  </div>
</template>

<script>
     export default {
    props: {
      initialIsLikedBy: {
        type: Boolean,
        default: false,
      },
    },
    data() {
      return {
        isLikedBy: this.initialIsLikedBy,
      }
    },
  }
</script>
