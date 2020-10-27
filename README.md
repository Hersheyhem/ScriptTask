# ScriptTask

Create a PHP script, that is executed from the command line, which accepts a CSV file as input
(see command line directives below) and processes the CSV file. The parsed file data is to be
inserted into a MySQL database. A CSV file is provided as part of this task that contains test
data, the script must be able to process this file appropriately.</br>

**The PHP script will need to correctly handle the following criteria:** </br>
• CSV file will contain user data and have three columns: name, surname, email
(see table definition below) </br>
• CSV file will have an arbitrary list of users </br>
• Script will iterate through the CSV rows and insert each record into a dedicated
MySQL database into the table “users” </br>
• The users database table will need to be created/rebuilt as part of the PHP script.
This will be defined as a Command Line directive below </br>
• Name and surname field should be set to be capitalised e.g. from “john” to “John”
before being inserted into DB </br>
• Emails need to be set to be lower case before being inserted into DB </br>
• The script should validate the email address before inserting, to make sure that it
is valid (valid means that it is a legal email format, e.g. “xxxx@asdf@asdf” is not
a legal format). In case that an email is invalid, no insert should be made to
database and an error message should be reported to STDOUT. </br>

**To connect to database and parse csv file:**
hemlatamahaur@Hemlatas-MacBook-Pro task1 % php user_upload.php --file=users.csv</br>
Connected to Database</br>
</br>
**To create a table in database:**</br>
hemlatamahaur@Hemlatas-MacBook-Pro task1 % mysql -u root -p</br>
Enter password: </br>
Welcome to the MariaDB monitor.  Commands end with ; or \g.</br>
Your MySQL connection id is 13</br>
Server version: 8.0.21 Homebrew</br>
</br>
Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.</br>
</br>
Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.</br>
</br>
MySQL [(none)]> SHOW DATABASES;</br>
+--------------------+</br>
| Database           |</br>
+--------------------+</br>
| information_schema |</br>
| mysql              |</br>
| performance_schema |</br>
| sys                |</br>
+--------------------+</br>
4 rows in set (13.295 sec)</br>
</br>
MySQL [(none)]> CREATE DATABASE userDetails;</br>
Query OK, 1 row affected (0.650 sec)</br>
</br>
MySQL [(none)]> SHOW DATABASES;</br>
+--------------------+</br>
| Database           |</br>
+--------------------+</br>
| information_schema |</br>
| mysql              |</br>
| performance_schema |</br>
| sys                |</br>
| userDetails        |</br>
+--------------------+</br>
5 rows in set (0.156 sec)</br>
</br>
MySQL [(none)]> USE userDetails;</br>
Database changed</br>
MySQL [userDetails]> CREATE TABLE users (</br>
    -> </br>
    -> id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, </br>
    -> name VARCHAR(255) NOT NULL,</br>
    -> surname VARCHAR(255) NOT NULL,</br>
    -> email VARCHAR(254) UNIQUE NOT NULL</br>
    -> Ctrl-C -- exit!</br>


