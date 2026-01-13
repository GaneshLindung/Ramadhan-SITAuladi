import './bootstrap'

// Smooth scroll untuk anchor
document.addEventListener('click', (e) => {
  const a = e.target.closest('a[href^="#"]')
  if (!a) return
  const id = a.getAttribute('href')
  const el = document.querySelector(id)
  if (!el) return
  e.preventDefault()
  el.scrollIntoView({ behavior: 'smooth', block: 'start' })
})

// Countdown (set tanggal Idul Fitri — bisa kamu ubah)
const target = new Date('2026-03-20T00:00:00') // UBAH sesuai kebutuhan

function tick() {
  const now = new Date()
  const diff = Math.max(0, target - now)

  const days = Math.floor(diff / (1000 * 60 * 60 * 24))
  const hours = Math.floor((diff / (1000 * 60 * 60)) % 24)
  const mins = Math.floor((diff / (1000 * 60)) % 60)
  const secs = Math.floor((diff / 1000) % 60)

  const set = (key, val) => {
    const el = document.querySelector(`[data-cd="${key}"]`)
    if (el) el.textContent = String(val)
  }

  set('days', days)
  set('hours', hours)
  set('mins', mins)
  set('secs', secs)
}

tick()
setInterval(tick, 1000)
