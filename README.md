# Avoca-Framework
A powerful PHP framework with high performance and easy to use

## Install
* install composer
* composer install

## Run
#### Run from public/ folder
* Setup virtual host to public/ folder
* Go to application/config/avoca.php
* Change value to
`$config['public_folder'] = '';`

#### Run from root folder
* Go to application/config/avoca.php
* Change value to
`$config['public_folder'] = 'public';`

## Config
* Go to application/config/config.php
* Change
`$config['base_url'] = 'http://localhost/Avoca-Profile';`

## Developer
* First controller: application/controllers
* View auto load from views/[theme]/templates/[controller]/[action].twig