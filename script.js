const modeToggle = document.getElementById('mode-toggle');
const container = document.querySelector('.container');

modeToggle.addEventListener('click', () => {
    if (container.classList.contains('light-mode')) {
        container.classList.remove('light-mode');
        container.classList.add('dark-mode');
    } else {
        container.classList.remove('dark-mode');
        container.classList.add('light-mode');
    }
});