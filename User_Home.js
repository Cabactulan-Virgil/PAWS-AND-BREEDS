
//LOGIN AUTH CHECKER
var UserID;
document.addEventListener('DOMContentLoaded', function() {
    UserID = sessionStorage.getItem('user_id'); 

    if (!UserID) {
        window.location.href = 'Home.htm'; 
    }

    else {
        console.log('UserID:', UserID); 
        fetchUserData(); 
    }
});


document.getElementById("LogoutButton").addEventListener("click", function() {
    window.location.href = 'Home.htm'; 
});




function fetchUserData() { // Ensure UserID is passed as a parameter
    console.log(UserID);
    fetch(`fetch_user_data.php?user_id=${UserID}`) // Pass user_id as query parameter
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.log(data.error);
            } else {
                document.getElementById("UsernameArea").textContent = data.user_username;
                document.getElementById("FirstnameArea").textContent = data.user_firstname;
                document.getElementById("LastNameArea").textContent = data.user_lastname;
                document.getElementById("EmailArea").textContent = data.user_email;
            }
        })
        .catch(error => console.error('Error fetching user data:', error));
}
