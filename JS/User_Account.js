// LOGIN AUTH CHECKER
var UserID;

document.addEventListener('DOMContentLoaded', function () {
    const INPUTUserID = document.getElementById("Stored_User_ID");
    UserID = sessionStorage.getItem('user_id'); 
    INPUTUserID.value = UserID;
    console.log(INPUTUserID);
    if (!UserID) {
        window.location.href = '../index.php'; 
    } else {
        console.log('UserID:', UserID); 
        fetchUserData(); 
    }
});

// NAVIGATION FUNCTIONS
document.getElementById('Goto_UserAccountArea').addEventListener('click', () => {
    window.location.href = 'User_Account.php';
});
document.getElementById('Goto_DogBreeds').addEventListener('click', () => {
    window.location.href = 'User_DogBreeds.php';
});
document.getElementById('Goto_Homee').addEventListener('click', () => {
    window.location.href = 'User_Home.php';
});




document.getElementById('EditUserBtn').addEventListener('click', function() {
    document.getElementById('UserDetails').style.display = 'none'; // Hide the user details
    document.getElementById('EditForm').style.display = 'flex'; // Show the edit form
    fetch(`../PHP/fetch_user_data.php?user_id=${UserID}`) 
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            console.log(data.error);
        } else {
            // Update user data areas in your application
            document.getElementById("Edit_FirstName").value = data.user_firstname;
            document.getElementById("Edit_LastName").value = data.user_lastname;
            document.getElementById("Edit_Username").value = data.user_username;
            document.getElementById("Edit_Password").value = data.user_password;
            document.getElementById("Edit_Email").value = data.user_email;
        }
    })
    .catch(error => console.error('Error fetching user data:', error));
});

document.getElementById('CancelUserBtn').addEventListener('click', function() {
    document.getElementById('EditForm').style.display = 'none'; // Hide the edit form
    document.getElementById('UserDetails').style.display = 'flex'; // Show the user details again
});




document.getElementById('PasswordShowerBtn').addEventListener('click', function() {
    var passwordArea = document.getElementById('PasswordArea');
    var btn = document.getElementById('PasswordShowerBtn');
    
    // Check if the password is currently displayed as asterisks or plain text
    if (btn.textContent === 'Show') {
        // Show the actual password
        passwordArea.textContent = OrigPassword; // Use the original password stored in data-password attribute
        btn.textContent = 'Hide';
    } else {
        // Convert the password to asterisks
        var passwordLength = passwordArea.textContent.length;
        passwordArea.textContent = '*'.repeat(passwordLength); // Convert the characters to asterisks
        btn.textContent = 'Show';
    }
});

function Hidepassword(){
    var passwordArea = document.getElementById('PasswordArea');
    var btn = document.getElementById('PasswordShowerBtn');
    var passwordLength = passwordArea.textContent.length;
    passwordArea.textContent = '*'.repeat(passwordLength);
    btn.textContent = 'Show';
}



document.getElementById("login-label").addEventListener("click", function () {
    var dropdown = document.getElementById("Dropdownnn");
    if (dropdown.style.display === 'block') {
        document.getElementById("login-label").style.backgroundColor = "";
        document.getElementById("login-label").style.color = "";
        dropdown.style.display = 'none';  // Hide the element
    } else {
        document.getElementById("login-label").style.color = "#fff";
        document.getElementById("login-label").style.backgroundColor = "#6A1C1C";
        dropdown.style.display = 'block'; // Show the element
    }
});



// LOGOUT HANDLER
document.getElementById("LogoutButton").addEventListener("click", function () {
    sessionStorage.removeItem('user_id'); // Clear user session
    document.getElementById("login-label").textContent = 'Login'; // Reset login label
    window.location.href = '../index.php'; 
});




var OrigPassword;
// FETCH USER DATA FUNCTION
function fetchUserData() {
    console.log(UserID);

    fetch(`../PHP/fetch_user_data.php?user_id=${UserID}`) // Pass user_id as query parameter
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.log(data.error);
            } else {
                // Update user data areas in your application
                document.getElementById("UsernameArea").textContent = data.user_username;
                document.getElementById("FirstnameArea").textContent = data.user_firstname;
                document.getElementById("LastNameArea").textContent = data.user_lastname;
                document.getElementById("UsernameArea").textContent = data.user_username;
                OrigPassword = data.user_password;
                document.getElementById("PasswordArea").textContent = data.user_password;
                document.getElementById("EmailArea").textContent = data.user_email;

                // Update the navigation "Login" label to the username
                const loginLabel = document.getElementById("login-label");
                loginLabel.textContent = data.user_username || "User"; // Default to "User" if username is unavailable
                Hidepassword();
            }
        })
        .catch(error => console.error('Error fetching user data:', error));
}


document.getElementById("SaveUserBtn").addEventListener("click", function(event) {
    event.preventDefault();  // Prevent default form submission

    // Collect form data
    var userId = document.getElementById("Stored_User_ID").value;
    var firstName = document.getElementById("Edit_FirstName").value;
    var lastName = document.getElementById("Edit_LastName").value;
    var username = document.getElementById("Edit_Username").value;
    var password = document.getElementById("Edit_Password").value;
    var email = document.getElementById("Edit_Email").value;

    // Prepare the data object to send
    var data = {
        user_id: userId,
        firstname: firstName,
        lastname: lastName,
        username: username,
        password: password,
        email: email
    };


    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#257914FF",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Update!"
    }).then((result) => {
        if (result.isConfirmed) {
            // Send the request via fetch
            fetch('../PHP/User_UpdateData.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(responseData => {
                if (responseData.success) {
                    Swal.fire({
                        title: "Account Successfully Updated.",
                        text: "Press okay to Proceed",
                        icon: "success",
                        confirmButtonColor: '#469F22FF'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }else{
                            location.reload();
                        }
                    });

                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: responseData.message,
                        icon: "error",
                        confirmButtonColor: '#9F2222FF'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }else{
                            location.reload();
                        }
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: "Oops...",
                    text: 'Error updating user information:'+error,
                    icon: "error",
                    confirmButtonColor: '#469F22FF'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }else{
                        location.reload();
                    }
                });
            });
        }
    });
});



