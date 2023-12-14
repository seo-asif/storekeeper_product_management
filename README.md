# Laravel Store Management System

This Laravel project is designed to serve as a basic store management system for storekeepers. It utilizes Laravel's routes, controllers, migrations, and query builder to facilitate the management of products, sales, and pricing.

## Features

- **Product Management:**
  - Add new products using a form that includes the product name, description, and quantity.
  - Update product quantity data when a new item is sold.

- **Price Management:**
  - Store owners can collaborate with syndicate consultants to change product prices.

- **Dashboard:**
  - Display a dashboard with four cards showing sales figures for today, yesterday, this month, and last month.

- **Transaction History:**
  - View a detailed table of sale transactions on a separate page.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/seo-asif/storekeeper_product_management.git
   ```

2. Navigate to the project directory:

   ```bash
   cd laravel-store-management
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your database connection in the `.env` file:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=your_database_host
   DB_PORT=your_database_port
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

7. Run database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

   The application will be accessible at [http://localhost:8000](http://localhost:8000).

## Usage

1. Open the application in your browser.
2. Use the provided forms to add new products and update product quantities.
3. Collaborate with syndicate consultants to manage product prices.
4. Access the dashboard to view sales figures for different time periods.
5. Navigate to the transaction history page to see detailed sale transactions.

Feel free to customize and extend the functionality to meet your specific store management needs.

## Contributing

If you'd like to contribute to this project, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This Laravel Store Management System is open-sourced software licensed under the [MIT license](LICENSE).