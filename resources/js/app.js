import './bootstrap'

// UBAH tanggal ini sesuai awal Ramadhan
const RAMADHAN_START = '2026-02-18T00:00:00'
const targetDate = new Date(RAMADHAN_START)

function pad2(n) { return String(n).padStart(2, '0') }

function updateCountdown() {
  const now = new Date()
  const diff = Math.max(0, targetDate - now)

  const days = Math.floor(diff / (1000 * 60 * 60 * 24))
  const hours = Math.floor((diff / (1000 * 60 * 60)) % 24)
  const mins = Math.floor((diff / (1000 * 60)) % 60)
  const secs = Math.floor((diff / 1000) % 60)

  const set = (key, val) => {
    const el = document.querySelector(`[data-cd="${key}"]`)
    if (el) el.textContent = String(val)
  }

  set('days', days)
  set('hours', pad2(hours))
  set('mins', pad2(mins))
  set('secs', pad2(secs))

  const label = document.getElementById('ramadhan-date-label')
  if (label) {
    const d = targetDate
    label.textContent = `Target: ${pad2(d.getDate())}-${pad2(d.getMonth()+1)}-${d.getFullYear()}`
  }
}

updateCountdown()
setInterval(updateCountdown, 1000)
