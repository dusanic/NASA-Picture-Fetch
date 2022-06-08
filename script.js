const toggleButton = document.querySelector(".toggle-button")
const navbarLinks = document.querySelector(".navbar-links")

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active');
})

const loadingScreen = document.querySelector(".loading")

window.onload = (event) => {
    loadingScreen.style.opacity = "0"
    setTimeout(() => {
        loadingScreen.remove()
    }, 800)
}

async function fetchData() {
    const response = await fetch("https://apod.nasa.gov/apod/astropix.html", {method: "GET", headers: {'Content-Type': 'application/json'}})
    var data = await response.json()
    console.log(data)
}

fetchData()
