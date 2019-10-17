## PHP Automation Lambdatest

PHP selenium automation sample test for Lambdatest Cloud GRID.

### Install PHP
- Download & Install PHP from
   http://php.net/manual/en/install.php

### Install Composer
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```

### Composer configuration
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


### Configuring Test
- Replace {username} with your username 
- Replace {accessToken}  with your username 
- List of supported platfrom, browser, version can be found at https://www.lambdatest.com/capabilities-generator/


### Executing Test
```bash
vendor/bin/phpunit Lambdatest.php
```

## About LambdaTest
[LambdaTest](https://www.lambdatest.com/) is a cloud based selenium grid infrastructure that can help you run automated cross browser compatibility tests on 2000+ different browser and operating system environments. All test data generated during testing including Selenium command logs, screenshots generated in testing, video logs, selenium logs, network logs, console logs, and metadata logs can be extracted using [LambdaTest automation APIs](https://www.lambdatest.com/support/docs/api-doc/). This data can then be used for creating custom reports.
