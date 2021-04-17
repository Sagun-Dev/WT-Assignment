# Lab 7

>> Starting MySQL
```
C:\xampp\mysql\bin>mysql -u root -p
```
>> Creating Database
```
MariaDB [(none)]> CREATE database gces;
```
>> Changing Active Database
```
MariaDB [(none)]> USE gces;
```
>> Show Database List
```
MariaDB [gces]> show databases;
```
>> Create Table
```
MariaDB [gces]> CREATE TABLE student(
    -> id int UNIQUE AUTO_INCREMENT,
    -> name varchar(100),
    -> address varchar(100),
    -> phone_number int UNIQUE,
    -> bio text
    -> );
```
>> Insert Single Data
```
MariaDB [gces]> INSERT INTO student (`name`,`address`,`phone_number`,`bio`) 
VALUES ("xyz","address",9863795161,"hello");
```
>> Insert Multiple Data
```
MariaDB [gces]> INSERT INTO student 
(`name`,`address`,`phone_number`,`bio`) VALUES 
("bandana","mahendrapool",98263795161,"hello"),
("avishek","hemja",846543654,"opkanxa"),
("pramod","pokhara",6546854,"guru"),
("suvham","lekhnath",48645321,"loaded");
```
>> Rename Table
```
MariaDB [gces]> ALTER TABLE student
    -> RENAME TO students;
```
>> Add Column
```
MariaDB [gces]> ALTER TABLE students
    -> ADD (user_id int);
```
>> Update Record
```
MariaDB [gces]> UPDATE students
    -> SET user_id = 45
    -> WHERE id = 10;
```
>> Select Record
```
MariaDB [gces]> SELECT * FROM students WHERE name = "avishek";
MariaDB [gces]> SELECT * FROM students WHERE name LIKE "a%";
```
>> Update Record
```
MariaDB [gces]> UPDATE students
    -> SET address = "nadipur"
    -> WHERE id = 12
    -> ;
```
>> Delete Record
```
MariaDB [gces]> DELETE FROM students WHERE id = 10;
```