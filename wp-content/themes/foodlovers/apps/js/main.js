/*----------------------------------------------------------------
# Ripple Button JS init
----------------------------------------------------------------*/
const buttons = document.querySelectorAll('.main-btn');

buttons.forEach(function (btn) {
    btn.addEventListener('click', rippleBtn);
});

function rippleBtn(e) {
    const circle = document.createElement('span');
    circle.className = 'btn-ripple';
    this.appendChild(circle);

    const x = Math.max(this.clientWidth, this.clientHeight);
    circle.style.width = circle.style.height = x + 'px';

    let rect = this.getBoundingClientRect();
    circle.style.left = e.clientX - rect.left - x / 2 + 'px';
    circle.style.top = e.clientY - rect.top - x / 2 + 'px';

    // Prevent Default
    e.preventDefault();
}

/*----------------------------------------------------------------
# Counter Jquery init
----------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});





