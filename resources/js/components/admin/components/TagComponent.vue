<template>
  <div class="inline-flex items-center rounded-full bg-primary text-white px-3 gap-2 py-1 text-sm font-medium">
    <slot></slot>
    <button class="fa-solid fa-xmark close-btn" @click="reset(this.$props.id)"></button>
  </div>
</template>

<script>
export default {
  name: 'TagComponent',
  props: {
    id: Number,
    reset: Function
  },
  methods: {
    reset: function (id) {
        this.$props.reset(id);
    }
  }
}
</script>
