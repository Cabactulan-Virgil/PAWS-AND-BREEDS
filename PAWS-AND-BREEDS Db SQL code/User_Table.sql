CREATE DATABASE pawnandbreeds;

USE pawnandbreeds;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_firstname VARCHAR(50) NOT NULL,
    user_lastname VARCHAR(50) NOT NULL,
    user_email VARCHAR(100) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,  
    user_username VARCHAR(50) NOT NULL UNIQUE,
    user_status INT DEFAULT 1  
);