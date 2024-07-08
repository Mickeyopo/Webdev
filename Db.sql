-- Create database
DROP DATABASE IF EXISTS webapp;
CREATE DATABASE IF NOT EXISTS webapp;
USE webapp;

-- Create table
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    userId BIGINT NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(50) NOT NULL DEFAULT '',
    username VARCHAR(50) NOT NULL DEFAULT '',
    email VARCHAR(50) NOT NULL DEFAULT '',
    password VARCHAR(60) NOT NULL DEFAULT '',
    userType VARCHAR(30) NOT NULL DEFAULT '',
    userImage VARCHAR(50) NOT NULL DEFAULT 'userImage.jpg',
    created BIGINT NOT NULL DEFAULT 0,
    updated BIGINT NOT NULL DEFAULT 0,
    UNIQUE KEY (username),
    UNIQUE KEY (email),
    PRIMARY KEY (userId)
);
