         document.addEventListener("DOMContentLoaded", function() {
            const worktimeHeader = document.querySelector('.worktime h2');
            const worktimeElements = document.querySelectorAll('.worktime p, .worktime h3');
            const icon = document.querySelector('.worktime .icon');
            
            worktimeHeader.addEventListener('click', function() {
                worktimeElements.forEach(el => {
                    el.classList.toggle('show');
                });
                icon.classList.toggle('rotate');
            });
        });


function showOrderForm(serviceTitle) {
    document.getElementById('service').value = serviceTitle;
    document.getElementById('orderFormContainer').style.display = 'block';
    window.scrollTo(0, document.getElementById('orderFormContainer').offsetTop);
}

