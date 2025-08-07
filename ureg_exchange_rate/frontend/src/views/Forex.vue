<template>
  <div class="forex-container" @scroll.passive="onScroll" ref="scrollContainer">
    <HeaderPage :title="'Yet Another Forex'"/>
    <section class="forex-content">
      <div class="forex-date-row">
        <h2>Rates as of {{ selectedDate }}</h2>
        <CustomDate v-model="selectedDate"/>
      </div>

      <div class="forex-grid">
        <div
          class="forex-card"
          v-for="rate in visibleRates"
          :key="rate.target_currency.code + rate.effective_date"
        >
          <div class="forex-code">{{ rate.target_currency.code }}</div>
          <div class="forex-rate">{{ parseFloat(rate.rate).toFixed(3) }}</div>
        </div>
      </div>

      <LoadMore :visible="loading"/>
    </section>
  </div>
</template>

<script setup>
  import { ref, onMounted, computed, watch } from 'vue'
  import api from '@/plugins/axios.ts'
  import LoadMore from '@/components/LoadMore.vue'
  import HeaderPage from '@/components/HeaderPage.vue'
  import CustomDate from '@/components/CustomDate.vue'

  const rates = ref([])
  const selectedDate = ref(new Date().toISOString().split('T')[0])
  const perPage = 12
  const page = ref(1)
  const loading = ref(false)
  const scrollContainer = ref(null)

  const visibleRates = computed(() => {
    const allRates = rates.value
    const totalToShow = page.value * perPage

    const slicedRates = allRates.slice(0, totalToShow)

    return slicedRates
  })

  const fetchRates = async () => {
    try {
      loading.value = true

      const response = await api.get(`/exchange_rate/${selectedDate.value}`)
      rates.value = response.data.data
      page.value = 1
    } catch (error) {
      console.error('Error fetching exchange rates:', error)
    } finally {
      loading.value = false
    }
  }

  const reloadRates = () => {
    rates.value = []
    page.value = 1
    fetchRates()
  }

  const onScroll = () => {
    const el = scrollContainer.value
    if (!el || loading.value) return

    const scrollPosition = el.scrollTop + el.clientHeight
    const bottomThreshold = el.scrollHeight - 100

    const hasMore = visibleRates.value.length < rates.value.length

    if (scrollPosition >= bottomThreshold && hasMore) {
      loading.value = true
      setTimeout(() => {
        page.value++
        loading.value = false
      }, 300)
    }
  }

  onMounted(fetchRates)

  watch(selectedDate, () => {
    reloadRates()
  })
</script>


<style scoped>
.forex-container {
  font-family: system-ui, sans-serif;
  background-color: #fafafa;
  height: 90vh;
  overflow-y: auto;
  padding: 0;
  margin: 0;
}

.forex-content {
  min-height: 100%;
  padding-bottom: 100px;
}

.forex-date-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.forex-date-row input[type='date'] {
  padding: 6px;
  font-size: 16px;
}

.forex-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}

.forex-card {
  background: #ffffff;
  border: 1px solid #d1d5db;
  border-radius: 8px;
  padding: 12px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06);
}

.forex-code {
  font-size: 18px;
  font-weight: 600;
  color: #111827;
}

.forex-rate {
  font-size: 24px;
  color: #2563eb;
  font-weight: bold;
  margin-top: 8px;
}
</style>
