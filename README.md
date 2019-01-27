# CVWebApp
Curious Vulnerability Web Application is A simple insecure blog made for LCAS to learn about secure web applications.

## How To Run
``` sh
$ git clone git@github.com:ClavinJune/CVWebApp.git
$ cd ./CVWebApp
# import create+insert.sql to your MySQL
# edit file core/bootstrap.php depends on your machine
$ php -S 0.0.0.0:8000
# then, open in your browser at http://localhost:8000
```

### Notes: DO NOT run CVWA on Public Network!

## Technology
- PHP v7.0.0~
- MySQL v15.0~
- bulma.io v0.7.2 (included)
- fontawesome-free v5.6.3 (included)
- jQuery v3.3.1 (included)

## You can learn about
- Stored XSS Attack
- HTML Injection
- PHP Secure Web Programming (Encryption, Prepared Statement, etc)
- SQL Injection
- CSRF Attack
- AJAX Injection

## Difficulties
# ALL EASY!
So it might be possible for new learners to attack this blog.

## Credentials
| username | password |
| -------- | -------- |
| admin    | admin    |
| user     | user     |

## Screenshots
### 1. Login
![Login](https://raw.githubusercontent.com/ClavinJune/CVWebApp/master/screenshots/login.png)

### 2. Home
![Home](https://raw.githubusercontent.com/ClavinJune/CVWebApp/master/screenshots/home.png)

### 3. Add Post
![Add Post](https://raw.githubusercontent.com/ClavinJune/CVWebApp/master/screenshots/add-post.png)

### 4. Stored XSS Example 1
![Stored XSS](https://raw.githubusercontent.com/ClavinJune/CVWebApp/master/screenshots/stored-xss-1.png)

### 5. Stored XSS Example 2
![Stored XSS](https://raw.githubusercontent.com/ClavinJune/CVWebApp/master/screenshots/stored-xss-2.png)

### 6. About
![About](https://raw.githubusercontent.com/ClavinJune/CVWebApp/master/screenshots/about.png)

### All rights reserved | Clavin June 2019
