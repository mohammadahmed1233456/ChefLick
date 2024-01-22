const baseURL = 'https://api.cheflick.net/api/';

exports.postData = async function postData(url, data) {
    const response = await fetch(`${baseURL}${url}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    return await response.json();
}
exports.postData = async function postData(url, data) {
    const response = await fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    return await response.json();
}

