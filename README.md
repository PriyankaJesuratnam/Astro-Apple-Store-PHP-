# Astro-Apple-Store-PHP-
# Astro Apple Store

Astro Apple Store is a user-centric e-commerce web application designed to provide a seamless and enjoyable shopping experience for Apple product enthusiasts. This platform is developed using PHP for dynamic content management, CSS for elegant and responsive design, and MySQL for database management. It is optimized for performance, usability, and aesthetic appeal.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Pages](#pages)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- User authentication (Sign In, Log In)
- Browse and purchase Apple products (iPhones, iPads, Watches)
- Responsive and aesthetically pleasing design
- Dynamic content management
- Order management

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## Pages

- **Home Page (Home Page.php)**: The landing page of the web application.
- **Buy Phone (Buy Phone.php)**: Page to browse and purchase iPhones.
- **Footer (fooder.php)**: Contains the footer section included in various pages.
- **Login (login.php)**: Page for user login.
- **Order Here (orderhere.php)**: Page for placing orders.
- **Sign In (signin.php)**: Page for new user registration.
- **Watch (watch.php)**: Page to browse and purchase Apple Watches.
- **iPad (ipad.php)**: Page to browse and purchase iPads.
- **iPhone (iphone.php)**: Page dedicated to showcasing iPhones.

## Setup Instructions

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/astro-apple-store.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd astro-apple-store
    ```

3. **Set up the database:**

    - Create a MySQL database named `astro_apple_store`.
    - Import the provided SQL file to set up the necessary tables.

    ```sql
    CREATE DATABASE astro_apple_store;
    USE astro_apple_store;
    SOURCE path/to/your/database.sql;
    ```

4. **Configure the database connection:**

    - Open `db_config.php` and update the database connection details.

    ```php
    <?php
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "astro_apple_store";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

5. **Run the application:**

    - Make sure you have a local server running (like XAMPP, WAMP, or MAMP).
    - Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
    - Access the application via `http://localhost/astro-apple-store`.

## Usage

- **Home Page**: Browse the latest Apple products and promotions.
- **Buy Phone**: Select and purchase from a range of iPhones.
- **Login/Sign In**: Authenticate yourself to place orders.
- **Order Here**: Place orders for selected products.
- **Product Pages**: Browse specific categories like Watches, iPads, and iPhones.

## Contributing

We welcome contributions to enhance the functionality and user experience of Astro Apple Store. Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Create a new Pull Request.

