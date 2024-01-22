const registrationsTable = document.querySelector("#registrations-table")
const filteredData = data.filter(data => { return data.paymentStatus === "completed" })
populateTable(1, data, registrationsTable);
updatePageIndicator();
const settingPillActivation = (el) => {

    Array.from(el.parentElement.children).forEach(pill => {
        if (pill.classList.contains("active")) {
            pill.classList.remove("active")
        }
    })
    el.classList.add("active")
}
document.querySelectorAll(".pill").forEach((pill) => {

    pill.addEventListener('click', () => {
        pill.classList.remove("active")
        if (pill.textContent.toLowerCase() === "pending payments") {
            const filteredData = data.filter(data => { return data.paymentStatus === "pending payment" })
            populateTable(1, filteredData, registrationsTable);
            updatePageIndicator();
            settingPillActivation(pill)
        }
        else if (pill.textContent.toLowerCase() === "completed") {
            const filteredData = data.filter(data => { return data.paymentStatus === "completed" })
            populateTable(1, filteredData, registrationsTable);
            updatePageIndicator();
            settingPillActivation(pill)
        }
        else {
            populateTable(1, data, registrationsTable);
            updatePageIndicator();
            settingPillActivation(pill)
        }
    })

})