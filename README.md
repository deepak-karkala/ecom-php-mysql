# Ecommerce website using PHP and MySQL

This project aims to build an ecommerce application using PHP and MySQL. A book store with multiple categories is used as an example. Over the last few years, there have been a number of options for backend scripting, but PHP along with MySQL database is still one of the most popular technologies.


In this web application, we have an ecommerce store with books in multiple categories (Fiction, Science). The homepage is loosely based on Amazon's homepage. The application currently provides the following features:
	1. Homepage provides a search bar to search for titles
	2. Users can view books in all categories or in specific category
	3. Books can be sorted based on price, rating etc
	4. Book details can be viewed by clicking on the title/image of the book
	5. Users can add reviews of books which when submitted will be added to database and also displayed in the reviews section.

The following features are yet to be added to the application:
	1. Tracking and managing user sessions
	2. Adding support for shopping cart
	3. Option to make payments (such as PayPal)

The following steps were involved in building this web application.
	1. Creating and setting up MAMP server and the project
	2. Create front end using HTML, CSS and Bootstrap
	3. Creating a MySQL database and tables for books and reviews
	4. Access data in database using SQL queries with PHP
	5. Based on user input, run relevant SQL queries and update the database
	6. Create a database on AWS EC2 instance using Heroku ClearDB and export data from local database to remote database using MySQLWorkbench.
	7. Deploying the application using Heroku