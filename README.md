# Url Shorter (shortURL):

A website to work with URL Shortening.

### Routes:
- ```/```: The main route of the project, it has the homepage.
- ```/create```: The route to create the UUID of the Shortened URL. It's meant to be used by AJAX.
- ```/{uuid}```: the route to open the shortened URL and to show the user the main URL and redirect the user to it.

### Used Tools:
- Laravel.

### How to run the project:
After cloning the project and entering the project folder:
- ```composer install```
- ```php -r "file_exists('.env') || copy('.env.example', '.env');"```
- ```php artisan key:generate --ansi```
- Then serve it via the preferred method, eg. ```php artisan serve```
