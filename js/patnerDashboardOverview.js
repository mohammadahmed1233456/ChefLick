const overviewLinkContainer = document.querySelector(".overview-link-container")
const copyIcon = overviewLinkContainer.querySelector(".fa-copy")
const copiedMessageContainer = overviewLinkContainer.querySelector(".copied-message")
// copy link text functionality
copyIcon.addEventListener("click", () => {
    const linkText = overviewLinkContainer.querySelector(".link-text").textContent

    navigator.clipboard.writeText(linkText)
        .then(() => {
            copiedMessageContainer.style.display = "flex"
            copyIcon.style.display = "none"
            setTimeout(function () {
                copiedMessageContainer.style.display = "none"
                copyIcon.style.display = "block"
            }, 2000);
        })
        .catch((error) => {
            console.error('Failed to copy text to clipboard:', error);
        });
})

// fetching data into table
const overviewTable = document.querySelector("#overviewTable")
// data coming from dashboard table.js
populateTable(1, data, overviewTable);
updatePageIndicator();