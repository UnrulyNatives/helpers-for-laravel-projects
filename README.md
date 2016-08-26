# laravel-helpers
A set of code snippets, traits and functions to use across all projects

# Current version: 0.0.7

# Features

- extends User model with gravatar

# Installation

1. add `"unrulynatives/helpers": "0.*"` to your `composer.json` file

2. add these lines to your `User` model

`use Unrulynatives\Helpers\UserExtensions;


class User extends Authenticatable
{

    use UserExtensions;`


# Example usage: 


# Future development

In the nearest future this package would contain all functions, vidgets and snippets currently developed as a part of my Laravel 5.3 starter kit: https://github.com/UnrulyNatives/laravel-starter-kit-and-snippets

Contributors welcome!