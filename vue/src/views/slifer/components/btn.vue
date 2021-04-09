<template>
  <button :class="`btn-${type}`">{{ value }}</button>
</template>
<script>
export default {
  props: {
    type: {
      color: String,
      default: "blue",
      require: false,
    },
    value: {
      type: String,
      require: true,
    },
  },
  setup() {},
};
</script>
