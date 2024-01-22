const form = document.getElementById('process-to-pay-form')

form.addEventListener('submit', (e) => {
    e.preventDefault()

    window.location.href = "../pages/payment-form.php";
})