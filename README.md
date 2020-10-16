# Laravel Project 🗽 

We need to make a web application that features statues.  
In it we can add, delete or edit the ones already there.

## Retrieve with Git/Github📚

In the folder where you want to retrieve the project from the command line, you must create a VM.

### Install Composer and Laravel:
In first you must do 4 lines: 
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Now you can check that it is correctly installed by doing:
````
php composer.phar
````
Once Composer is installed, you have to do:
```
sudo mv composer.phar /usr/local/bin/composer
```

Now you need to put your username in the "envvar" file in the following lines:
```
export APACHE_RUN_USER=’username’
export APACHE_GROUP_USER=’username’
```

You must go in the 000-default.conf file: 

````
sudo nano /etc/apache2/sites-available/000-default.conf
````

In the 000-default.conf file you must change your Document ROOT to put it where the project will be, in the line: 

````
DocumentRoot /var/www/html/”Name_Project_Folder”/public
````

Now you have to type the following command line:
````
sudo a2enmod rewrite
````


In the past file (000-default.conf), you also need something under 'DocumentRoot /var/www/html/”nom du dossier laravel”/public':

````
<Directory /var/www/html>
       Options Indexes FollowSymLinks MultiViews
       AllowOverride All
       Require all granted
</Directory>
````


Finally, we need to restart apache2 and update with the following commands:
````
sudo service apache2 restart 
sudo apt update
````

## Clone the GitHub project:

The first command to do in Git is:
````
git clone urlGit Where-you-want-to-put-it
````

Then you have to do:
`````
composer install
`````

After that you have to modify your .env and put the name of your DB, the username and the password.  
These are the following lines:

````
DB_DATABASE=Museum
DB_USERNAME=
DB_PASSWORD=
````

In the search engine after entering the IP address you must refresh the page and click on the button "generate the key" and refresh the page again.  
Then create the "Museum" database, refresh the page and click on the "Run Migrate" button and refresh the page again.


You are done! 🎉   
Enjoy ❤️