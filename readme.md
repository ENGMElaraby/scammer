# Scammer Laravel Package
This is a simple package aiming to solve the issue of a scammer , the scammer in this context is a customer not willing to pay the developer and trying to steal the developer
work .
## Installation
``` composer require fania/scammer ```
## Usage
After installing the package remember to publish the config file <br>
``` php artisan vendor:publish --tag scammer-config ``` <br>
it's Very important that you publish the config file , otherwise the package can't work.<br>
You can use the package in two ways , either in the command line
``` php artisan scammer:kill {type} ```
the method is useful if you lost access to the files but still have an SSH access of some kind , however the main usage of this package is when you completely lose access to the site , in which
case you will have access to new route /kill-site and you can continue from there
## Killing Types
There is 3 ways you can kill a website in scammer
+ Soft Kill
delete the routes files and inject your custom message to index.php
+ Med Kill
delete the routes , public , resources , app and database folders and inject your custom message to index.php
+ Hard Kill
delete the entire website and the database , then injects your custom message to index.php
## Configuration
You can add a custom message to show on the homepage of the killed site , to edit the default message head to config/scammer.php (after publishing the config file) you will find there :
```php
'message' => 'I Would Like to Get My Money Please , Your Beloved Developer <b>Jhon Doe</b>'
```
## Important Notes
This package requires Laravel 5 or Later , We highly recommend that the usage of this package is actually your last line of defense
## License
Do what ever you want
