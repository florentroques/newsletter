# Installation
The following step by step application installation until ready to use, both the level of development and
production.  

Before following these steps, make sure you are familiar with the command line in Linux and OSX.
Customize when using a Windows based operating system, as there are several different commands.

## Initilization
1. Copy the app repository with the command ```git clone https: // github.com / arvernester / newsletter```  
2. Log into the application directory, then update the dependency framework and libraries with the ```composer update``` command  

Up here, basically the application is ready to use. Run buil-tin server with the command ``` php artisan
serve``` then access through the browser.

## Install Sample Data

In the application, there is a seeder to create some sample data to facilitate when in the development
environment. As for generating the sample data, can use the following command:  

``` php artisan db:seed```  

Some examples of data to be created automatically are:
- Users
- List (group)
- Contact
- Subscriber
- Newsletter templates
- Unsubscribe reason
