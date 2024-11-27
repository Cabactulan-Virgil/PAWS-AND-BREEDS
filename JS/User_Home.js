// LOGIN AUTH CHECKER
var UserID;

document.addEventListener('DOMContentLoaded', function () {
    UserID = sessionStorage.getItem('user_id'); 
    if (!UserID) {
        window.location.href = '../index.php'; 
    } else {
        console.log('UserID:', UserID); 
        fetchUserData(); 
    }
});
var OrigPassword;
// FETCH USER DATA FUNCTION
function fetchUserData() {
    fetch(`../PHP/fetch_user_data.php?user_id=${UserID}`) // Pass user_id as query parameter
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.log(data.error);
            } else {
                const loginLabel = document.getElementById("login-label");
                loginLabel.textContent = data.user_username || "User"; // Default to "User" if username is unavailable
            }
        })
        .catch(error => console.error('Error fetching user data:', error));
}





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





