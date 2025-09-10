

# MCP Server Laravel

Repository: https://github.com/srvrsoorg/mcp-server-laravel

MCP Server Laravel is a web application built with the Laravel framework, designed to provide a robust backend for MCP (Model Context Protocol) services. It leverages Laravel's expressive syntax and powerful features to deliver scalable, secure, and maintainable APIs and web endpoints.

## Features

- RESTful API endpoints for MCP operations
- User authentication and management
- Database migrations and seeders
- Job queue and cache support
- Modern frontend integration with Vite

## Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js & npm (for frontend assets)
- SQLite (default) or other supported database

### Installation
1. Clone the repository:
	```bash
	git clone https://github.com/srvrsoorg/mcp-server-laravel.git
	cd mcp-server-laravel
	```
2. Install PHP dependencies:
	```bash
	composer install
	```
3. Install frontend dependencies:
	```bash
	npm install
	```
4. Copy the example environment file and configure:
	```bash
	cp .env.example .env
	# Edit .env as needed
	```
5. Generate application key:
	```bash
	php artisan key:generate
	```
6. Run database migrations and seeders:
	```bash
	php artisan migrate --seed
	```
7. Build frontend assets:
	```bash
	npm run build
	```

### Running the Application
Start the local development server:
```bash
php artisan serve
```
Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Project Structure
- `app/` - Application core (models, controllers, providers)
- `routes/` - Route definitions (web, API, console, MCP)
- `database/` - Migrations, seeders, factories
- `resources/` - Frontend assets and Blade views
- `public/` - Public web root
- `tests/` - Unit and feature tests

## Running Tests
Run all tests with PHPUnit:
```bash
php artisan test
```

## Contributing
Contributions are welcome! Please submit issues or pull requests via GitHub. See the [Laravel contribution guide](https://laravel.com/docs/contributions) for best practices.

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
