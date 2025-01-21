# PHP CRUD Application with Email Account Activation and Password Reset

## Overview
This project is a PHP-based web application that provides basic CRUD (Create, Read, Update, Delete) operations and user account management features, including email-based account activation and password reset. It 
 demonstrates secure coding practices and integrates common features in modern web applications.

---

## Features

### User Functionality
- **CRUD Operations:**
  - Create, Read, Update, and Delete records in the application.
- **User Registration:**
  - Register with an email address and receive an activation link.
- **Account Activation:**
  - Activate accounts via a unique token sent to the registered email.
- **Password Reset:**
  - Request a password reset link via email and set a new password securely.
- **Login & Logout:**
  - Secure authentication using PHP sessions.

### Admin Functionality
- Manage users (view, update, and delete accounts).
- Control application records with full CRUD operations.

---

## Tech Stack
- **Frontend:**
  - HTML5, CSS3, Bootstrap for responsive design
  - JavaScript (optional, for interactive elements)
- **Backend:**
  - PHP (7.4+ recommended)
- **Database:**
  - MySQL or MariaDB
- **Email Service:**
  - PHPMailer for sending emails
- **Version Control:**
  - Git for managing source code

---

## Installation

### Prerequisites
- PHP 7.4+ installed on your system
- MySQL or MariaDB database
- Web server (e.g., Apache or Nginx)
- Composer installed for dependency management
**SQL database**
CREATE TABLE users 
    AID INT(11) AUTO_INCREMENT PRIMARY KEY, -- Auto-incrementing unique ID for each user
    NAME VARCHAR(150) NOT NULL,             -- User's name
    AMAIL VARCHAR(150) NOT NULL,            -- User's email address (unique)
    APASS VARCHAR(150) NOT NULL,            -- User's hashed password
    reset_token_hash VARCHAR(64) DEFAULT NULL, -- Token hash for password reset
    reset_token_expires DATETIME DEFAULT NULL, -- Expiry date for the reset token
    account_activation VARCHAR(64) DEFAULT NULL, -- Token for account activation
    dob DATE DEFAULT NULL,                  -- User's date of birth
    address VARCHAR(225) NOT NULL,          -- User's address
    pnumber VARCHAR(15) NOT NULL,           -- User's phone number
    INDEX (AMAIL),                          -- Index on email for faster lookups
    INDEX (reset_token_hash),               -- Index on reset token hash
    INDEX (account_activation)              -- Index on account activation token



