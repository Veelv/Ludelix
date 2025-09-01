# Ludelix Application Skeleton

[![PHP Version](https://img.shields.io/badge/php-8.1%2B-blue)](https://www.php.net/)
[![License](https://img.shields.io/github/license/veeelv/ludelix)](LICENSE)

Ludelix is a modern PHP application skeleton with integrated Single Page Application (SPA) support, designed for rapidly building PHP web applications.

## Features

- Modern PHP 8.1+ application architecture
- PSR-4 autoloading support
- Integrated SPA support for frontend development
- Comprehensive routing system with controller support
- Dependency injection container
- Security middleware (CSRF protection, security headers)
- Session management
- Multi-tenancy support
- WebSocket support
- Database configuration (MySQL, SQLite, PostgreSQL)
- Logging with Monolog
- Testing with PHPUnit
- Configuration management
- Fluid CSS system
- Encryption capabilities

## Requirements

- PHP 8.1 or higher
- Composer
- Web server (Apache/Nginx)

## Installation

Create a new Ludelix project using Composer:

```bash
composer create-project veeelv/ludelix my-project
```

Or if you want to install the latest development version:

```bash
composer create-project veeelv/ludelix my-project dev-main
```

After installation, navigate to your project directory:

```bash
cd my-project
```

Configure your environment:
```bash
cp .env.example .env
```
Edit the `.env` file according to your environment settings.

Configure your web server to point to the `public` directory.

## Application Overview

Ludelix is built with a modern architecture that separates concerns and follows best practices. The application structure is designed to be scalable and maintainable.

### Key Components

1. **Frontend Integration**: Built-in support for SPA applications with seamless backend integration.
2. **Routing System**: Flexible routing with support for both closure-based and controller-based routes.
3. **Security**: Comprehensive security features including CSRF protection, security headers, and encryption.
4. **Database**: Support for multiple database systems with easy configuration.
5. **Multi-tenancy**: Native multi-tenancy support with domain or subdomain identification.
6. **WebSocket**: Built-in WebSocket support for real-time applications.
7. **Session Management**: Robust session handling with file-based storage.
8. **Caching**: Configurable caching system for improved performance.
9. **Logging**: Comprehensive logging with Monolog integration.

## Directory Structure

```
app/
  Commands/         # Custom commands
  Controllers/      # Controller classes
  Entities/         # Data entities
  Jobs/             # Background jobs
  Middleware/       # Custom middleware
  Providers/        # Service providers
  Repositories/     # Data repositories
  Requests/         # Form requests
  Services/         # Business logic services
  WebSocket/        # WebSocket handlers
bootstrap/          # Application bootstrap files
config/             # Configuration files
cubby/              # Storage for logs, cache, sessions, etc.
frontend/           # Frontend assets and language files
public/             # Publicly accessible files
routes/             # Route definitions
tests/              # Test files
vendor/             # Composer dependencies
```

## Configuration

All configuration files are located in the `config/` directory. Key configuration files include:

- `app.php` - General application settings including name, environment, debug mode, timezone, locale, security keys, WebSocket and multi-tenancy settings
- `database.php` - Database configuration for MySQL, SQLite, and PostgreSQL
- `routes.php` - Routing configuration
- `security.php` - Security settings including CSRF protection and security headers
- `session.php` - Session management settings
- `cache.php` - Cache configuration
- `fluid.php` - Fluid CSS system configuration
- `assets.php` - Asset management settings
- `ludou.php` - Template engine configuration
- `upload.php` - Upload settings
- `bridge.php` - Bridge system configuration

### Environment Variables

The application uses environment variables for configuration. Key variables include:
- `APP_NAME` - Application name
- `APP_ENV` - Environment (development, production, etc.)
- `APP_DEBUG` - Debug mode
- `APP_URL` - Application URL
- `APP_KEY` - Application encryption key
- `DB_CONNECTION` - Database connection type
- `DB_HOST` - Database host
- `DB_PORT` - Database port
- `DB_DATABASE` - Database name
- `DB_USERNAME` - Database username
- `DB_PASSWORD` - Database password

## Routing

Routes are defined in `routes/web.php`. The framework supports both closure-based routes and controller-based routes.

## Controllers

Controllers are located in `app/Controllers/` and should extend the base `Controller` class.

## Database

The application supports multiple database systems:
- MySQL
- SQLite
- PostgreSQL

Database configuration is managed through the `config/database.php` file and environment variables. SQLite is configured by default using the `cubby/database.sqlite` file.

## Security

The framework includes built-in security middleware that provides:
- CSRF protection
- Security headers (X-Content-Type-Options, X-Frame-Options, X-XSS-Protection)
- Encryption capabilities

## Multi-tenancy

Ludelix has native multi-tenancy support that can be enabled/disabled through the `config/app.php` file. It supports:
- Domain-based tenant identification
- Subdomain-based tenant identification
- Header-based tenant identification

## WebSocket Support

Real-time capabilities are provided through WebSocket support that can be configured in `config/app.php`. The WebSocket server can be configured with SSL support.

## Session Management

Session handling is configured through `config/session.php` with file-based storage by default. Sessions are stored in the `cubby/session` directory.

## Caching

The application includes a caching system configured through `config/cache.php`. Multiple cache drivers are supported.

## Fluid CSS System

Ludelix includes a Fluid CSS system that can be configured through `config/fluid.php`. This system allows for custom utility classes similar to Tailwind CSS.

## Logging

Application logging is handled by Monolog and configured through the application settings. Logs are stored in the `cubby/logs` directory.

## Testing

Run tests using PHPUnit:

```bash
./vendor/bin/phpunit
```

## Contributing

Thank you for considering contributing to the Ludelix framework! The contribution guide can be found in the [Ludelix documentation](https://ludelix.com/docs/contributions).

## Code of Conduct

In order to ensure that the Ludelix community is welcoming to all, please review and abide by the [Code of Conduct](https://ludelix.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Ludelix, please send an e-mail to the Ludelix Team via [team@ludelix.com](mailto:team@ludelix.com). All security vulnerabilities will be promptly addressed.

## License

The Ludelix framework is open-sourced software licensed under the [MIT license](LICENSE).
