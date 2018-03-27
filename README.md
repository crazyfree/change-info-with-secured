## System requirement 
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

## How to run the project
After clone project from github, please kindly goto .env file and fill the following info
* database name: a blank DBthat you created in mysql
* mysql user name: that you granted permission to access the DB
* mysql user passsword: for secure reason, you should create strong user password includes upper case, number, text and special character. 

Then run commands
```
php artisan migrate
php artisan db:seed

```
in order to create database tables and seeding 
