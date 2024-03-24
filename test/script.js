// script.js
function redirectToRegistration() {
    // Redirect back to the registration form
    window.location.href = 'registration.php';
}



function redirectCreateAccount() {
    window.location.href = 'registration.php';
}
function redirectToEnrollmentForm() {
    // Redirect to the enrollment form page (adjust the URL as needed)
    window.location.href = 'enrollment.php';
}

function redirectToHome() {
    // Redirect to the home page or any other page as needed
    window.location.href = 'home.html';
}

    function redirectHomepage() {
        window.location.href = 'index.html';
     }
     
     document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.querySelector(".wrapper");

    
    
        window.addEventListener("click", function(event) {
            if (event.target === wrapper) {
                wrapper.style.display = "none";
            }
        });
    
        function redirectLogin() {
            window.location.href = 'login.php';
        }
    
        function logout() {
            window.location.href = 'logout.php';
        }
    
        function redirectHomepage() {
            window.location.href = 'home.php';
        }
    });
    