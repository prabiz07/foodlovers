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
# CountUp JS init
----------------------------------------------------------------*/

const count = document.querySelectorAll('.number');

count.forEach(function(){
    const arrayInner = count['0', '1', '2', '3'];
    const countInner = arrayInner.innerHTML;
    // count.innerHTML = 0;

    let i = 0;
    const interval = setInterval(function(){
        const math = Math.floor(Math.random()*(countInner/50));
        if(i+math <= countInner){
            i += math;
            count.innerHTML = i;
        }else{
            count.innerHTML = countInner;
            clearInterval(interval);
        }
    }, 5);

    console.log(arrayInner);
});





