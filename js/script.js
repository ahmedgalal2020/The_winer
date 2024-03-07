// Der Gewinner
const win = document.querySelector('#winner');
const card = document.querySelector('#card');
win.addEventListener('click',function(){card.style.display = 'flex';});


document.addEventListener('DOMContentLoaded', (event) => {
    if (document.getElementById('successMessage')) {
        setTimeout(function() {
            var successMessage = document.getElementById('successMessage');
            var fadeEffect = setInterval(function () {
                if (!successMessage.style.opacity) {
                    successMessage.style.opacity = 1;
                }
                if (successMessage.style.opacity > 0) {
                    successMessage.style.opacity -= 0.1; // Adjust this value as needed for a smoother or quicker fade
                } else {
                    clearInterval(fadeEffect);
                    successMessage.style.display = 'none';
                }
            }, 100); // Adjust this value as well for a smoother or quicker fade
        }, 2000); // The success message will start fading out after 2 seconds
    }
});