const restuarantsDropDownMenu = document.querySelector(".restuarants-drop-down")
const restuarantsDropDownBtn = document.querySelector("#restuarants-drop-down-btn");
const drowDownModalContainer = document.querySelector(".drop-down-modal-container")
drowDownModalContainer.style.top = `${drowDownModalContainer.parentElement.clientHeight + 3}px`;

// Disable scrolling on the page
const disableScroll = () => document.body.style.overflow = "hidden";
// Enable scrolling on the page
const enableScroll = () => document.body.style.overflow = "auto";
const dropDownActivation = () => {
    drowDownModalContainer.classList.toggle("active")
    drowDownModalContainer.classList.contains("active") ? disableScroll() : enableScroll()
}
restuarantsDropDownBtn.addEventListener("click", dropDownActivation)
drowDownModalContainer.addEventListener("click", dropDownActivation)



document.body.style.overflow = "hidden";