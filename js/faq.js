const questionContainers = document.querySelectorAll('.question-container');

questionContainers.forEach(container => {
    const icon = container.querySelector('.top').children[1]
    const ans = container.querySelector('.answer')

    icon.addEventListener('click', () => {
        icon.classList.toggle('fa-angle-down');
        icon.classList.toggle('fa-angle-up');
        ans.classList.toggle('active')
        console.log("yes")
    })
});

