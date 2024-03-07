// Der Gewinner
const win = document.querySelector('#winner');
const card = document.querySelector('#card');
win.addEventListener('click',function(){card.style.display = 'flex';});


// Check if the success message exists in the DOM
if (document.getElementById('successMessage')) {
    // Wait 10 seconds (10000 milliseconds) before fading out the message
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        // Fade out effect
        var fadeEffect = setInterval(function () {
            if (!successMessage.style.opacity) {
                successMessage.style.opacity = 1;
            }
            if (successMessage.style.opacity > 0) {
                successMessage.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
                // Optionally, remove the element or hide it after fade out
                successMessage.style.display = 'none';
            }
        }, 100);
    }, 10000);
}