DROP DATABASE DigitalGarden;
CREATE DATABASE DigitalGarden;
USE DigitalGarden;

CREATE TABLE Client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    registrationdate DATE
);

CREATE TABLE Theme (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    color VARCHAR(50),
    creationdate DATE,
    modificationdate DATE,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Client(id) ON DELETE CASCADE
);

CREATE TABLE Note (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT,
    importance INT CHECK (importance >= 0 AND importance <= 5),
    creationdate DATE,
    theme_id INT NOT NULL,
    FOREIGN KEY (theme_id) REFERENCES Theme(id) ON DELETE CASCADE
);