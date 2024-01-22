const form = document.getElementById('cooking-star-form')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    console.log('cooking star registration form has submitted')

    fullName = document.getElementById('full-name').value
    businessName = document.getElementById('business-name').value
    socialRefrences = document.getElementById('social-refrences').value
    whenShouldContact = document.getElementById('when-should-contact').value
    phoneNumber = document.getElementById('phone-number').value
    email = document.getElementById('email').value
    city = document.getElementById('city').value

    if (fullName && businessName && socialRefrences && whenShouldContact && phoneNumber && email && city) {
        console.log("form pura fill hai")
        window.location.href = "../pages/payment-checkout.php";
    } else {
        console.log("form pora fill nahi hai")
    }
})