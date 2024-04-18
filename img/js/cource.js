document.addEventListener("DOMContentLoaded", function() {
    const toggleButtons = document.querySelectorAll('.course-toggle-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const content = this.parentElement.nextElementSibling;
            const line = document.querySelector('.course-vertical-line');
        
            // Update content and line height
            content.classList.toggle('active');
            line.style.height = content.classList.contains('active') ? 'calc(100% - ' + (this.parentElement.offsetTop - line.offsetTop) + 'px)' : '0';

               });
    });
});
