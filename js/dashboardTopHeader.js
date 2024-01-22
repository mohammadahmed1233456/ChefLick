const pageTitle = document.querySelector(".page-title")
const dropDownContainer = document.querySelector(".drop-down")
const arrowIcon = dropDownContainer.querySelector(".fa-chevron-down")
const dropDownMenu = dropDownContainer.querySelector(".drop-down-menu")

const arrowAction = () => {
    arrowIcon.classList.toggle("fa-chevron-up")
    arrowIcon.classList.toggle("fa-chevron-down")
    dropDownMenu.classList.toggle("active")
}
arrowIcon.addEventListener("click", arrowAction)
dropDownMenu.querySelectorAll(".nav").forEach((nav) => { nav.addEventListener("click", arrowAction) })
pageTitle.innerHTML = pageTopTitle