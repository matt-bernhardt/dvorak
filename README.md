Dvorak
========

[![Maintainability](https://api.codeclimate.com/v1/badges/d1429a62ed1fb4f8da9d/maintainability)](https://codeclimate.com/github/matt-bernhardt/dvorak/maintainability)

A simple Wordpress theme to work out how to use Composer to manage dependencies

## A note for developers and contributors:

Pull requests are evaluated by Travis-CI for syntax errors and security flaws using relevant sections of the WordPress Coding Standards. They are also evaluated by CodeClimate using static code analysis and linting provided by PHPCS and PHPMD. We expect that contributors are running those tools locally, or otherwise ensuring that pull requests conform to those standards. We have included the `codesniffer.local.xml` configuration for local use, which is typically invoked by the following command:

```
phpcs -psvn . --standard=./codesniffer.local.xml --extensions=php --report=source --report=full
```
