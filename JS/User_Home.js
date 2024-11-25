// LOGIN AUTH CHECKER
var UserID;

document.addEventListener('DOMContentLoaded', function () {
    const INPUTUserID = document.getElementById("user_id");
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






document.getElementById('EditUserBtn').addEventListener('click', function() {
    document.getElementById('UserDetails').style.display = 'none'; // Hide the user details
    document.getElementById('EditForm').style.display = 'block'; // Show the edit form
});

document.getElementById('CancelUserBtn').addEventListener('click', function() {
    document.getElementById('EditForm').style.display = 'none'; // Hide the edit form
    document.getElementById('UserDetails').style.display = 'block'; // Show the user details again
});








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
                document.getElementById("EmailArea").textContent = data.user_email;

                // Update the navigation "Login" label to the username
                const loginLabel = document.getElementById("login-label");
                loginLabel.textContent = data.user_username || "User"; // Default to "User" if username is unavailable
            }
        })
        .catch(error => console.error('Error fetching user data:', error));
}
