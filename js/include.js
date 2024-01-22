
// Extract links and scripts from all included content
const includedContent = document.querySelectorAll('.include');
const includeAgreementFooters = document.querySelectorAll(".include-agreement-footer")
const links = [];
const scripts = [];

includedContent.forEach(content => {
    const contentLinks = content.querySelectorAll('link');
    const contentScripts = content.querySelectorAll('script');
    // remove title of include element
    content.querySelector('title').remove()

    const elements = Array.from(content.children)
    const filteredElements = elements.filter(element => {
        const tagName = element.tagName.toLowerCase();
        return tagName !== 'link' && tagName !== 'script' && tagName !== 'meta';
    });
    // remove all links, scripts and meta tages from children of include div
    content.replaceChildren(...filteredElements)
    // replace main containre with the include div
    content.replaceWith(filteredElements[0])


    contentLinks.forEach(link => {
        if (!links.find(l => l.href === link.href)) {
            links.push(link);
        }
    });

    contentScripts.forEach(script => {
        if (!scripts.find(s => s.src === script.src)) {
            scripts.push(script);
        }
    });
});

// Add links and scripts to the head of the parent page
const head = document.querySelector('head');
links.forEach(link => {
    if (!head.querySelector(`link[href="${link.href}"]`)) {
        head.appendChild(link);
    }
});
scripts.forEach(script => {
    if (!head.querySelector(`script[src="${script.src}"]`)) {
        head.appendChild(script);
    }
});

includeAgreementFooters.forEach(foot => {
    const footer = foot.querySelector(".agreement-footer")
    if (foot.classList.contains("page-foot")) {
        footer.classList.add('page-foot')
    }
    foot.replaceWith(footer)
})