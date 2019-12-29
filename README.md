# uofrpublicparkingsystem
bookmarker folder contains all the folders related to project

## Required Softwares
1. XAMPP
2. MariaDB/MySQL
3. CakePHP 3.8 
4. Composer installation from https://getcomposer.org/download/

## Steps to setup
1. Install in the folder where you required this project to run ( Generally, it would be htdocs of XAMPP)
2. Install the composer by  running the commands mentioned in the the https://getcomposer.org/download/ ( I used command line installation)
3. Run this command php composer.phar create-project --prefer-dist cakephp/app bookmarker ( in command prompt)
4. The above command creates a folder bookmarker
5. or
6. Copy all the files in bookmarker(github ) folder to bookmarker files in desktop

## File Changes required
Config/app.php  
1. Set the email mode of transport as it works in observer pattern way
2. Update username, database and password as per your local installation

## Start the Local cake server
1. Open cmd
2. Route it to the bookmarker/bin folder
3. Run by typing command 'cake server' ( to start the cake server)
4. Runs in the http://localhost:8765/ link, with this application in localhost can be accessed
