![PHPUnit](https://github.com/TopTierCode/tdd-php/workflows/PHPUnit/badge.svg?branch=master)

# TDD PHP
[Test Driven Development by Example](https://www.amazon.com/Test-Driven-Development-Kent-Beck/dp/0321146530) 
(by [Kent Beck](https://twitter.com/KentBeck)) PHP Code samples

## Requirements
1. PHP 8.0 or above
2. [Composer](https://getcomposer.org/)

## Setup
Run composer install. 
## How to use this project
Each chapter contains its own folder. Each time EITHER the test OR the 
implementing class are modified in the book, a new folder was created.
The changes are linear. When either the implementation or test file is
modified, a new folder (A,B,C etc) is created. Any test that will fail
is marked as skipped. This ensures that ci will still pass every push.