# Toilet Shop

This is a PHP-based web application for a fictional shop called "Toilet Shop". The application includes authentication, database interaction, and a basic UI using the Bulma CSS framework.

## Project Structure

- `HtmlDesign/`: Contains the initial HTML design of the application, including CSS and JavaScript files.
- `src/`: Contains the PHP source code for the application.
  - `auth/`: Contains the authentication logic, including login, logout, and registration.
  - `components/`: Contains reusable PHP components for the UI.
  - `db/`: Contains the database connection and query logic.
- `.idea/`: Contains configuration files for the JetBrains IDE.

## Setup

1. Clone the repository.
2. Set up a local PHP server.
3. Set up a local SQL server and import the database schema.
4. Update the database connection details in `src/db/Database.php`.
5. Start the PHP server and navigate to `src/index.php` in your web browser.

## Usage

- Use the [`Auth\login`](src/auth/auth.php) function to log in a user.
- Use the [`Auth\logout`](src/auth/auth.php) function to log out a user.
- Use the [`Database`](src/db/Database.php) class to interact with the database.

## Contributing

Contributions are welcome. Please open an issue or submit a pull request.

## License

This project is licensed under the MIT License.