import { describe, it, expect } from 'vitest'
import { mount } from '@vue/test-utils'
import Forex from '@/views/Forex.vue'
import CustomDate from '@/components/CustomDate.vue'

describe('Forex.vue', () => {
  it('Title Renderes', () => {
    const wrapper = mount(Forex)

    expect(wrapper.text()).toContain('Forex')
  })
})

describe('Forex.vue', () => {
  it('renders CustomDate input with selected date', () => {
    const wrapper = mount(Forex, {
      global: {
        stubs: {
          CustomDate,
        }
      }
    })

    const input = wrapper.find('input[type="date"]')
    const today = new Date().toISOString().split('T')[0]

    expect((input.element as HTMLInputElement).value).toBe(today)
  })
})
