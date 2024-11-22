///Login Forms Section Handler
document.getElementById("Lexitbtnnn").addEventListener("click", function() {
    document.getElementById("LoginAreaaa").style.display = "none";
});
document.getElementById("login-now-btn").addEventListener("click", function() {
    document.getElementById("LoginAreaaa").style.display = "flex";
});

///Register Forms Section Handler
document.getElementById("Rexitbtnnn").addEventListener("click", function() {
    document.getElementById("RegisterAreaaa").style.display = "none";
});
document.getElementById("register-now-btn").addEventListener("click", function() {
    document.getElementById("RegisterAreaaa").style.display = "flex";
});


///Switch Register to Login
document.getElementById("switchToLogin").addEventListener("click", function() {
    document.getElementById("LoginAreaaa").style.display = "flex";
    document.getElementById("RegisterAreaaa").style.display = "none";
});
///Switch Login to Register
document.getElementById("switchToRegister").addEventListener("click", function() {
    document.getElementById("LoginAreaaa").style.display = "none";
    document.getElementById("RegisterAreaaa").style.display = "flex";
});



//CLEAR ACCOUNT SESSIONSTORAGE
window.onload = function() {
    sessionStorage.removeItem('user_id');
    const UserIDSS = sessionStorage.getItem('user_id');
    console.log('UserID: ', UserIDSS); 
};





// LOGIN FUNCTION
document.getElementById('loginbuttnnn').addEventListener('click', async (event) => {
    event.preventDefault(); // Prevent the default form submission

    const usernameInput = document.getElementById('Usernameinput');
    const passwordInput = document.getElementById('Passwordinput');

    // Clear previous custom validity messages
    usernameInput.setCustomValidity('');
    passwordInput.setCustomValidity('');

    const username = usernameInput.value.trim();
    const password = passwordInput.value;

    // Input validation
    if (!username || !password) {
        if (!username) {
            usernameInput.setCustomValidity("Please fill in the username.");
        }
        if (!password) {
            passwordInput.setCustomValidity("Please fill in the password.");
        }
        passwordInput.reportValidity(); // Show the message
        usernameInput.reportValidity(); // Show the message
        return;
    }

    if (username.length < 5) {
        usernameInput.setCustomValidity("Username must be at least 5 characters long.");
        usernameInput.reportValidity(); // Show the message
        return;
    }

    if (password.length < 6) {
        passwordInput.setCustomValidity("Password must be at least 6 characters long.");
        passwordInput.reportValidity(); // Show the message
        return;
    }

    // If all validations pass, proceed with the login
    try {
        const response = await fetch('Home_LoginFunction.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ username, password }),
        });

        const result = await response.json();

        if (result.success) {
            // Store the facultyId in sessionStorage (or localStorage)
            sessionStorage.setItem('user_id', result.user_id); // Store facultyId in sessionStorage

            alert("Successfully Logged In.");

            window.location.href = `User_Home.html`; //WHERE TO GO?
        } else {
            // Handle server response errors
            usernameInput.setCustomValidity(result.message);
            usernameInput.reportValidity(); // Show the message
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    }
});




// REGISTRATION FUNCTION
document.getElementById('Registerbuttnnn').addEventListener('click', async (event) => {
    event.preventDefault(); // Prevent the default form submission

    // Clear previous custom validity messages
    ['Regis_Firstname', 'Regis_LastName', 'Regis_Email', 'Regis_Username', 'Regis_Password'].forEach(id => {
        document.getElementById(id).addEventListener('input', function() {
            this.setCustomValidity('');
        });
    });

    // Get form field values
    const Firstnamee = document.getElementById('Regis_Firstname');
    const Lastnamee = document.getElementById('Regis_LastName');
    const Emaill = document.getElementById('Regis_Email');
    const Usernamee = document.getElementById('Regis_Username');
    const Passwordd = document.getElementById('Regis_Password');

    // Validate Full Name
    if (Firstnamee.value.trim() === '') {
        Firstnamee.setCustomValidity('First Name is required.');
        Firstnamee.reportValidity(); // Show message
        return; // Stop processing if validation fails
    }

    if (Lastnamee.value.trim() === '') {
        Lastnamee.setCustomValidity('Last Name is required.');
        Lastnamee.reportValidity(); // Show message
        return; // Stop processing if validation fails
    }

    // Validate Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email regex
    if (!emailPattern.test(Emaill.value)) {
        Emaill.setCustomValidity('Please enter a valid email address.');
        Emaill.reportValidity(); // Show message
        return; // Stop processing if validation fails
    }

    // Validate Username
    if (Usernamee.value.trim().length < 5) {
        Usernamee.setCustomValidity('Username must be at least 5 characters long.');
        Usernamee.reportValidity(); // Show message
        return; // Stop processing if validation fails
    }

    // Validate Password
    if (Passwordd.value.trim().length < 6) {
        Passwordd.setCustomValidity('Password must be at least 6 characters long.');
        Passwordd.reportValidity(); // Show message
        return; // Stop processing if validation fails
    }

    // If all validations pass, proceed with registration
    try {
        const response = await fetch('Home_RegistrationFunction.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                firstname: Firstnamee.value,
                lastname: Lastnamee.value,
                email: Emaill.value,
                username: Usernamee.value,
                password: Passwordd.value
            }),
        });

        const result = await response.json(); // Get the response from the server

        // Handle the response
        if (result.success) {
            alert('Registration successful!');
            location.reload();
        } else {
            alert(result.message || 'An error occurred during registration.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An unexpected error occurred.');
    }
});
