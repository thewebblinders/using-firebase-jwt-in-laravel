Step 1: Download and extract php-jwt library to your laravel project directory.

In this case , root directory / libraries / php-jwt / jwt library package files from src directory

Step 2 :

Open composer.jon and update autoload property.

Add php-jwt library path to classmap array(create classmap, if it doesn't exist in autoload property)

"classmap": [
    "libraries/php-jwt"
]

Next run this command

Step 3:

composer dump-autoload

Step 4:

Now you can use JWT package in your controller by adding below line

use \Firebase\JWT\JWT;

