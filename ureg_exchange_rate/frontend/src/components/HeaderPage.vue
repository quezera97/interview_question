<template>
  <header class="header">{{ title }}</header>
</template>

<script setup lang="ts">
  defineProps<{
    title: string
  }>()
</script>

<style scoped>
.header {
  background: #1f2937;
  color: white;
  padding: 16px 20px;
  font-size: 22px;
  font-weight: bold;
}
</style>
