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