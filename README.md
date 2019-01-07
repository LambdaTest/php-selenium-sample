## PHP Automation Lambdatest

PHP selenium automation sample test for Lambdatest Cloud GRID.

## Install PHP
- Download & Install PHP from
   http://php.net/manual/en/install.php

## Install Composer
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```

## Composer configuration
- Create composer.json file with following dependencies
```bash
{
  "require": {
    "phpunit/phpunit-selenium": "*",
    "facebook/webdriver": "dev-master"
  }  
}
```
- Install dependencies
```bash
composer install
```


### Configuring test.
- Replace {username} with your username 
- Replace {accessToken}  with your username 
- List of supported platfrom, browser, version can be found at https://www.lambdatest.com/capabilities-generator/


### Executing test
```bash
vendor/bin/phpunit Lambdatest.php
```
