

var cities = ["Karachi", "Lahore", "Islamabad", "Peshawar", "Quetta", "Multan", "Rawalpindi", "Faisalabad", "Gujranwala", "Hyderabad", "Bahawalpur", "Sargodha", "Sialkot", "Jhelum", "Shekhupura", "Mardan", "Kasur", "Rahim Yar Khan", "Sahiwal", "Okara", "Wah Cantonment", "Gujrat", "Mianwali", "Sadiqabad", "Dera Ghazi Khan", "Mingora", "Mirpur Khas", "Chiniot", "Kamoke", "Khanewal", "Jhang", "Burewala", "Bahawalnagar", "Tando Adam", "Mandi Bahauddin", "Narowal", "Kotri", "Shikarpur", "Jacobabad", "Khairpur", "Khuzdar", "Larkana", "Attock", "Taxila", "Gojra", "Jaranwala", "Chishtian", "Ahmadpur East", "Kandhkot", "Bhakkar", "Umerkot", "Turbat", "Khushab", "Vihari", "Dadu", "Thatta", "Nowshera Virkan", "Pattoki", "Ghotki", "Kamber Ali Khan", "Mailsi", "Chakwal", "Narang Mandi", "Lalian", "Karak", "Lodhran", "Muzaffargarh", "Mian Channu", "Risalpur", "Kohat", "Swabi", "Nowshera", "Kohistan", "Malakand", "Dijkot", "Takht Bhai", "Kamalia", "Raja Jang", "Moro", "Zhob", "Khanpur", "Dipalpur", "Muzaffarabad", "Chaman", "Sibi", "Saddiqabad", "Dalbandin", "Kharian", "Pano Aqil", "Naudero", "Bhalwal", "Kot Abdul Malik", "Mianwali Bangla", "Tandlianwala", "Jatoi", "Shahdadpur", "Arifwala", "Vitali", "Jalalpur Jattan", "Ranipur", "Dunyapur", "Matiari", "Hasilpur", "Chishtian Mandi", "Talhar", "Jampur", "Lalamusa", "Lahri", "Mailsi", "New Badah", "Chuhar Kana", "Charsadda", "Nokkundi", "Mansehra", "Gadani", "Nasirabad", "Rohri", "Khairpur Nathan Shah", "Mehar", "Charsadda", "Tando Allahyar", "Mastung", "Chuhar Jamali", "Dera Murad Jamali", "Ranipur", "Kharan", "Mehrabpur", "Swan", "Hala", "Kashmore", "Dera Ismail Khan", "Tando Muhammad khan"]
var message = document.createElement("div")
message.style.color = "red"
var select = document.getElementById("city");

for (var i = 0; i < cities.length; i++) {
    var option = document.createElement("option");
    option.value = cities[i]
    option.text = cities[i];
    select.add(option);
}


function checkPassword() {
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirm-password");

    if (password.value !== confirmPassword.value) {
        message = document.createElement("div");
        message.classList.add("message");
        message.innerHTML = "Passwords do not match, Try again ";
        password.parentElement.parentElement.appendChild(message)
        document.getElementById("password").style.border = "2 solid red";
        document.getElementById("confirm-password").style.border = "2px solid red";
    }
}

function resetPassword() {
    const message = document.querySelector(".message");
    if (message) {
        message.remove();
    }
    document.getElementById("password").style.border = "0px";
    document.getElementById("confirm-password").style.border = "0px";
}


