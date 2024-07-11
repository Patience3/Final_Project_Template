DROP DATABASE IF EXISTS ChorIn;
CREATE DATABASE ChorIn;
USE ChorIn;

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    home_address VARCHAR(255) NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    tel VARCHAR(20) NOT NULL,
    role_ ENUM('client', 'admin') NOT NULL,
    profile_details TEXT
);

CREATE TABLE availability (
    availability_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    date DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    status ENUM('available', 'booked') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE jobs (
    job_id INT PRIMARY KEY AUTO_INCREMENT,
    admin_id INT NOT NULL,
    location VARCHAR(255) NOT NULL,
    required_time INT NOT NULL,
    job_details TEXT,
    status ENUM('open', 'assigned', 'completed') NOT NULL,
    FOREIGN KEY (admin_id) REFERENCES users(user_id)
);

CREATE TABLE assignments (
    assignment_id INT PRIMARY KEY AUTO_INCREMENT,
    job_id INT NOT NULL,
    user_id INT NOT NULL,
    assigned_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'confirmed') NOT NULL,
    FOREIGN KEY (job_id) REFERENCES jobs(job_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
