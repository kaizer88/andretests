# andretests
Andre  assessment written in PHP 

I am was using XAMPP for Windows 7.3.20 Architecture *64.
MongoDB extension version = 1.8.0RC1
SQLLite DB

To add MongoDB externsion, go to C:\xampp\php\ext and paste the dll.
After that GO to php.ini file and add the file name to externsions.

Example: My dll mame is php_mongodb.dll so add it like this: extension=php_mongodb.dll to activate
Then uncomment extension=sqlite3 from the same php.ini file.

After that you can restart apache server.

Create a folder under C:\xampp\htdocs and can name it whatever you want.

And lastly, assuming that your php runs under default port:
Go to the url and rum localhost/"foldername you created under C:\xampp\htdocs"

Changelles:
Setting up mongo with PHP as I decided to use cloud instance as I was using php 7.4.8 and decided to downgrade to 7.3.20.

Recorded time: 
34 hours as I spend time to reseach about my setup

Thank you

