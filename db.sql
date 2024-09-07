CREATE DATABASE TRIP;

USE TRIP;

CREATE TABLE TRIP(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    age INT,
    gender VARCHAR(20),
    email VARCHAR,
    phone INT,
    other TEXT(255)
);
