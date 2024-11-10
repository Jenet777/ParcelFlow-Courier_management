# Courier Management System

This repository contains a PHP-based Courier Management System to manage courier services effectively. It provides a user-friendly interface for managing packages, tracking shipments, and handling user accounts.

## Folder Structure

- **admin/**: Contains administrative pages for managing couriers, users, and other settings.
- **css/**: Holds the CSS files for styling the web pages.
- **database/**: Contains database-related files, such as SQL scripts for setting up tables.
- **dbimages/**: Stores images related to database records, such as package images.
- **home/**: The main landing page and general information about the service.
- **images/**: Holds images used throughout the website.

## Key Files

- **dbconnection.php**: Establishes a connection to the MySQL database.
- **index.php**: The main entry point of the application (login page).
- **logout.php**: Handles user logout functionality.
- **register.php**: User registration page for creating new accounts.
- **reset.php**: Page for password reset.
- **resetpswd.php**: Script for handling password reset requests.
- **session.php**: Manages user sessions to ensure authenticated access.

## Setup and Usage

1. **Database Setup**

   Import the SQL file from the `database/` folder into your MySQL database to set up the required tables.

2. **Database Configuration**

   Update `dbconnection.php` with your database credentials.

3. **Run the Application**

   Place the project files in the root directory of your PHP server (e.g., `htdocs` for XAMPP) and start the server. Open the browser and go to `http://localhost/<your_project_folder>/index.php` to access the login page.

