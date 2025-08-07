<template>
  <div v-if="visible" class="loading">
    {{ message }}
  </div>
</template>

<script setup lang="ts">
  // defineProps<{
  //   visible: boolean
  //   message?: string
  // }>()

  withDefaults(defineProps<{
    visible: boolean
    message?: string
  }>(), {
    visible: false,
    message: 'Loading more...',
  })
</script>

<style scoped>
.loading {
  text-align: center;
  padding: 16px;
  color: #999;
}
</style>
