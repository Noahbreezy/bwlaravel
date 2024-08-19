# **Laravel project for backend web**

In this backend web project, I will make a website that displays user statistics of a game as well as news announcements on the home page.

## **Database table structure:**

Users: 
userID INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(15),
birthday DATE,
avatar BLOB,
aboutMe VARCHAR(100),
admin BOOLEAN,
email VARCHAR(),
password VARCHAR(TBD),
rememberCookie TBD

kills:
killID INT PRIMARY KEY AUTO_INCREMENT,
userID INT,
killCount BIGINT,
timestamp DATETIME,
FOREIGN KEY (userID) REFERENCES users(userID)

Posts:
postID INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(25),
cover BLOB,
content VARCHAR(400),
author INT,
publishDate DATE,
FOREIGN KEY (author) REFERENCES users(userID)

faqs:
faqID INT PRIMARY KEY AUTO_INCREMENT,
question VARCHAR(100),
answer VARCHAR(1000)

## Follow my progress:

https://github.com/Noahbreezy/backend-web