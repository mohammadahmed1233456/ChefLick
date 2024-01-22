document.addEventListener("DOMContentLoaded", function () {
    var accountNumber = document.getElementById("account-number");
    var cvv = document.getElementById("cvv");
    var expiry = document.getElementById("expiry");

    accountNumber.addEventListener("input", function () {
        var value = accountNumber.value;

        // Remove any non-digit characters from the input value
        var cleanValue = value.replace(/\D/g, '');

        // Check if the input value passes the Luhn algorithm
        // if (!luhnCheck(cleanValue)) {
        //     accountNumber.setCustomValidity("Please enter a valid debit card number.");
        //     return;
        // }

        // Add spaces every four digits
        cleanValue = cleanValue.match(/.{1,4}/g).join(' ');

        // Update the input value with the formatted value
        accountNumber.value = cleanValue;

        // Clear any previous validation messages
        accountNumber.setCustomValidity("");
    });

    function luhnCheck(value) {
        // The Luhn algorithm is used to validate credit card numbers
        // Source: https://en.wikipedia.org/wiki/Luhn_algorithm

        var sum = 0;
        var doubleUp = false;

        for (var i = value.length - 1; i >= 0; i--) {
            var digit = parseInt(value.charAt(i));

            if (doubleUp) {
                digit *= 2;

                if (digit > 9) {
                    digit -= 9;
                }
            }

            sum += digit;
            doubleUp = !doubleUp;
        }

        return (sum % 10) == 0;
    }
    cvv.addEventListener("input", function () {
        var value = cvv.value;

        // Perform validation
        // Remove non-digit characters from the expiry value
        var cleanValue = value.replace(/\D/g, '');

        // Format the expiry value with a slash between the month and year
        var formattedValue = cleanValue.replace(/^(\d{1,2})(\d{1,2})$/g, '$1/$2');
        cvv.value = formattedValue
    });
    expiry.addEventListener("input", function () {
        var value = expiry.value;


        // Remove non-digit characters from the expiry value
        var cleanValue = value.replace(/\D/g, '');

        // Format the expiry value with a slash between the month and year
        var formattedValue = cleanValue.replace(/^(\d{1,2})(\d{1,2})$/g, '$1/$2');

        // Update the expiry value with the formatted value
        expiry.value = formattedValue;



        // Perform validation
        if (!formattedValue.match(/^(0[1-9]|1[0-2])\/\d{2}$/)) {
            expiry.setCustomValidity("Please enter a valid expiration date (MM/YY).");
        } else {
            expiry.setCustomValidity("");
        }
    });
});