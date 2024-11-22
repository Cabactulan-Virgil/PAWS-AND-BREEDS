
//LOGIN AUTH CHECKER
var UserID;
document.addEventListener('DOMContentLoaded', function() {
    UserID = sessionStorage.getItem('user_id'); 

    if (!UserID) {
        window.location.href = 'Home.htm'; 
    }

    else {
        console.log('UserID:', UserID); 
    }
});


document.getElementById("LogoutButton").addEventListener("click", function() {
    window.location.href = 'Home.htm'; 
});

