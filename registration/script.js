// script.js

function validateRegistrationForm() {
    // Check if the user has agreed to the consent
    var consentValue = document.querySelector('input[name="consent"]:checked');

    if (!consentValue || consentValue.value !== "IAgree") {
        // If the user hasn't agreed, prevent the form submission
        alert("You must agree to the consent before continuing.");
        return false;
    }

    // Array of field IDs to validate
    var fields = ['firstName', 'middleName', 'lastName', 'age', 'email', 'password', 'repeatPassword'];

    for (var i = 0; i < fields.length; i++) {
        var fieldValue = document.getElementById(fields[i]).value.trim();

        if (!fieldValue) {
            alert('Please fill out all required fields in the Registration form.');
            return false;
        }
    }

    // Check if passwords match
    var password = document.getElementById('password').value;
    var repeatPassword = document.getElementById('repeatPassword').value;

    if (password !== repeatPassword) {
        alert('Passwords do not match.');
        return false;
    }

    // Validate password length
    if (password.length < 8) {
        alert('Password must be 8 characters or longer.');
        return false;
    }

    // Show registration success alert
    alert("You're now registered!");

    // Redirect to login.html
    // window.location.href = 'login.html'; // Uncomment this line if you want to redirect

    return false; // Prevent form submission
}




function validateEnrollmentForm() {
    // Define an array of form field IDs to validate
    const enrollmentFields = [
        'dob', 'gradeLevel', 'guardianName', 'guardianContact', 'contactNumber', 'address',
        'facebookName', 'program', 'Schedule', 'lrn', 'voucher', 'AdviserName', 'SectionSy',
        'SchoolAttended', 'Learning', 'Admission',
    ];

    // Iterate through the array of form field IDs
    for (const field of enrollmentFields) {
        // Get a reference to the form field element
        const element = document.getElementById(field);

        // Check if the form field element exists
        if (element === null) {
            // Display an error alert message
            alert('Error: Element with ID ' + field + ' not found.');
            return false;
        }

        // Get the value of the form field
        const value = element.value;

        // Check if the form field is empty
        if (value.trim() === '') {
            // Display an error message
            alert('Please fill out all required fields in the Enrollment form.');
            return false;
        }
    

    // If the form is valid, submit it
    return true;
}

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

    }

    function redirectHomepage() {
        window.location.href = 'index.html';
     }
     
     document.addEventListener('DOMContentLoaded', function() {
        const wrapper = document.querySelector(".wrapper");
        const loginBtn = document.querySelector(".btnLogin-popup");
        const logoutBtn = document.querySelector(".btnLogout-popup");
        const closeIcon = document.querySelector(".icon-close");
    
        loginBtn.addEventListener("click", function() {
            redirectLogin();
        });
    
        logoutBtn.addEventListener("click", function() {
            logout();
        });
    
        closeIcon.addEventListener("click", function() {
            wrapper.style.display = "none";
        });
    
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
    