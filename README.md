## System requirement 
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* [Composer](https://getcomposer.org) to manage dependencies. You can follow instruction [here](https://getcomposer.org/doc/00-intro.md) to install easily.

## How to run the project
### Configuration
After clone project from github, please kindly goto .env file and fill the following info
* DB_DATABASE: you MUST create a blank DB in mysql before key in this field
* DB_USERNAME: that you granted permission to access the DB
* DB_PASSWORD: for secure reason, you should create strong user password includes upper case, number, text and special character. 

### Run commands
Run following commands in order to setup project
```
composer install
```
to install app dependencies.

Then run
```
php artisan migrate --seed

```
to create database tables and seed them. 

Next, to get access token, you need to login using API: /api/v1/login. 
After got token, you have to add 
