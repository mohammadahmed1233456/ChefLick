// async function postData(url, data) {
//     const response = await fetch(`${baseURL}${url}`, {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(data)
//     });
//     return await response.json();
// }






// const signUp = async (data, url) => {
//     try {
//         return response = await postData(url, data)
//     } catch (err) {
//         console.log(err)
//     }

// }
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
const getCords = async () => {
    return new Promise((resolve, reject) => {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                position => resolve(position.coords),
                error => reject(error)
            );
        } else {
            reject(new Error("Geolocation is not supported by this browser."));
        }
    });
};
const getDeviceType = () => {
    var deviceType;

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return deviceType = 'mobile';
    } else {
        return deviceType = 'desktop';
    }
}


// Get the form element
const form = document.getElementById('signup-form');

// Attach a submit event listener to the form
form.addEventListener('submit', async e => {
    e.preventDefault();

    // Get the form data
    const name = document.getElementById('full-name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone-number').value;
    const address = document.getElementById('address').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const secondaryAddress = document.getElementById('secondary-address').value;
    const city = document.getElementById('city').value;
    console.log(city)
    // get langitute, longitude, device type, device_token 
    const coords = await getCords();
    // Create the user object
    const user = {
        full_name: name,
        email: email,
        phone: `92${phone}`,
        address: address,
        password: password,
        confirm_password: confirmPassword,
        device_type: getDeviceType(),
        device_token: "123",
        latitude: coords.latitude,
        longitude: coords.longitude,
        address1: secondaryAddress,
        user_city: city
    };

    // Send a POST request to the API with the user data
    try {
        const response = await fetch('https://api.cheflick.net/api/user/create-user', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(user)
        })
        const data = await response.json()

        data.status ? setCookie('rememberToken', data.data.remember_token, 1) : console.log(data)
        console.log(data)
    } catch (err) {
        console.log(err)
    }

});
