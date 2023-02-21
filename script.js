const modeToggle = document.getElementById('mode-toggle');
const container = document.querySelector('.container');
const modeIcon = document.getElementById('.mode-icon');

modeToggle.addEventListener('click', () => {
    if (container.classList.contains('light-mode')) {
        container.classList.remove('light-mode');
        container.classList.add('dark-mode');
        modeIcon.classList.remove('bx-sun');
        modeIcon.classList.add('bx-moon');
        modeIcon.style.color = '#000';
    } else {
        container.classList.remove('dark-mode');
        container.classList.add('light-mode');
        modeIcon.classList.remove('bx-moon');
        modeIcon.classList.add('bx-sun');
        modeIcon.style.color = '#fff';
    }
});