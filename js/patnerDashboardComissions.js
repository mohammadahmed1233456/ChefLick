const commissionsTable = document.querySelector("#commissionsTable")
const filteredData = data.filter(data => { return data.paymentStatus === "completed" })
console.log(filteredData)
populateTable(1, filteredData, commissionsTable);
updatePageIndicator();