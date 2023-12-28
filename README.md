# Laravel User and Admin Login Panel with Laravel Sanctum

This project is a Laravel-based application that provides a secure and flexible user and admin login panel with user registration capabilities. Laravel Sanctum is utilized to manage user authentication and authorization, ensuring a seamless and secure experience.

## Features

### Admin Panel

- **Admin Registration and Login:** Admins can register and log in securely.

- **User Management:** Admins can view a list of users, block/delete users, and manage user accounts.

### User Panel

- **User Registration and Login:** Users can register and log in securely.

- **User CRUD Operations:** Users have the ability to create, read, update, and delete their own accounts.

## Getting Started

Follow these steps to set up the project:

### Prerequisites

- PHP
- Composer
- Laravel
- Laravel Sanctum

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/projectname.git
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Copy the environment file:

    ```bash
    cp .env.example .env
    ```

4. Configure the environment:

    Update the `.env` file with your database and other configuration settings.

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Migrate the database:

    ```bash
    php artisan migrate
    ```

7. Install Laravel Sanctum:

    ```bash
    composer require laravel/sanctum
    ```

    ```bash
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    ```

    ```bash
    php artisan migrate
    ```

    ```bash
    php artisan sanctum:install
    ```

    ```bash
    php artisan migrate
    ```

### Usage

- Run the development server:

    ```bash
    php artisan serve
    ```

- Access the application in your browser:

    ```
    http://localhost:8000
    ```

## Usage and Workflow

### Admin

1. Register and log in as an admin.
2. Navigate to the admin panel to view and manage users.

### User

1. Register and log in as a user.
2. Perform CRUD operations on your own account.

## Contributing

Feel free to contribute to the development of this project. Open issues and submit pull requests to enhance features or fix bugs.

Enjoy using the Laravel User and Admin Login Panel with Laravel Sanctum! If you encounter any issues or have suggestions for improvement, feel free to let me know. Happy coding!
