const nav = document.getElementById("header")
const btn = document.getElementById("navBurger")
const link = document.querySelectorAll( '.navLink')
const lines = document.querySelectorAll('.line')


btn.addEventListener('click', e => {
    e.preventDefault()
    nav.classList.toggle('active')
    e.target.classList.toggle('active')
})
lines.forEach(e => {
    e.addEventListener('click', event => {
        event.preventDefault()
    })
})


function loadActive() {

    link.forEach(a => {
        a.classList.remove('active')
        if (window.location.pathname === a.pathname) {
            a.classList.add('active')
        }
    })
}


window.addEventListener('load', loadActive);