CREATE DATABASE pawsandbreeds;


CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_firstname VARCHAR(50),
    user_lastname VARCHAR(50),
    user_email VARCHAR(100),
    user_password VARCHAR(255),  
    user_username VARCHAR(50),
    user_status INT DEFAULT 1 ,
    user_role ENUM('admin', 'user') DEFAULT 'user'
);


CREATE TABLE dogbreeds(
	Breed_Id INT AUTO_INCREMENT PRIMARY KEY,
	Breed_Name varchar(200),
	Breed_Personality_Description Text,
	Breed_Training_Description Text,
	Brred_HowtoCare_Description Text,
	Breed_Health_Description Text,
	Breed_Groom_Description Text,
	Breed_PhysicalActivity_Description Text,
	Breed_Nutritional_Req_Description Text,
	Breed_Brief_History_Description Text,
	Breed_Active_Status Int Default 0,
	Breed_UserWhoAdded INT,
	Breed_ImageNames Text,
	FOREIGN KEY (Breed_UserWhoAdded) REFERENCES users(user_id)
);


CREATE TABLE CommentReviews(
	Review_Id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT,
	Review_Rating INT,
	Review_Description TEXT,
	Review_Active_Status INT,
	FOREIGN KEY (user_id) REFERENCES users(user_id)
);