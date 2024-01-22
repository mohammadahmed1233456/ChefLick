const passwordFields = document.querySelectorAll('.password');

passwordFields.forEach(field => {
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-eye-slash', 'password-icon');
    iconRight = getComputedStyle(field).paddingRight
    icon.style.right = iconRight;
    const container = document.createElement('div');
    container.classList.add('password-container');
    field.parentNode.insertBefore(container, field);

    container.appendChild(field);
    container.appendChild(icon);

    icon.addEventListener('click', () => {
        if (field.type === 'password') {
            field.type = 'text';
            icon.classList.add('fa-eye');
            icon.classList.remove('fa-eye-slash');
        } else {
            field.type = 'password';
            icon.classList.add('fa-eye-slash');
            icon.classList.remove('fa-eye');
        }
    });
});