# Blood Bank

A PHP based Web Application for the Inventory Management of Blood Types.

## Table of Contents
1. [Tech Stack Used](#tech-stack-used)
2. [Set Up](#set-up)
3. [Running Instance](#running-instance)

### Tech Stack Used
* PHP
* HTML/CSS/JS
* MySQL

### Set Up
* **Setting up Database:**
    * Set up a MySQL `<user_name>` and `<password>`.
    * Create a database in MySQL. `create database BloodBankDB`
    * Import the database file in the repository.  `mysql -u <username> -p BloodbankDB <  database.sql `.
    * Make changes in `config.php` file regarding the database server, username and password.	

* **Setting up Apache Server (Linux):**
	* Install Apache Server and start the service using `systemctl start apache2.service`.
	* Copy the files in  `/var/www/html`.
	* Can be accessed through `http://localhost`.


### Running Instance

There is a running instance of the Web App hosted on : https://basic-blood2.herokuapp.com

## Types of Users

1. Receivers: The Users who can request the Blood Sample from the available Blood Bank.
2. Hospitals: The Users who can add the Blood Sample to the Available Blood Bank.