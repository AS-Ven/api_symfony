# API Symfony - Stable & Uma

This project is a REST API built with Symfony and API Platform, featuring a simple frontend dashboard.

## Contributeurs

> Aldric Vendas ([AS-Ven](https://github.com/AS-Ven))

> Jérôme ZHAO ([TerukiDev](https://github.com/TerukiDev))

## Prerequisites

- **Docker & Docker Compose** (for the database)
- **PHP 8.2+**
- **Composer**
- **Symfony CLI** (recommended)

## Installation & Setup

Follow these steps to get the project running after cloning/forking:

### 1. Install Dependencies

```bash
composer install
```

### 2. Start the Database

Start the MySQL and PHPMyAdmin containers:

```bash
docker compose up -d
```

*   **MySQL** will be available on port `3307`.
*   **PHPMyAdmin** will be available at [http://localhost:8080](http://localhost:8080).
    *   **Server**: `database`
    *   **User**: `app`
    *   **Password**: `!ChangeMe!`

### 3. Setup the Database Schema

Create the database and run the migrations to create the tables:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

### 4. Start the Web Server

You can use the Symfony CLI (recommended for HTTPS support):

```bash
symfony server:start
```

Or the built-in PHP server:

```bash
php -S 127.0.0.1:8000 -t public
```

## Usage

### Frontend Dashboard
Access the dashboard to view Stables and Umas:
👉 **[https://127.0.0.1:8000/](https://127.0.0.1:8000/)**

### API Documentation (Swagger UI)
Access the API documentation to test endpoints:
👉 **[https://127.0.0.1:8000/api](https://127.0.0.1:8000/api)**

*Note: If using `symfony server:start`, you might see a browser warning about a self-signed certificate. You can accept it to proceed.*

## Entities

-   **Stable**: Represents a stable (Name).
-   **Uma**: Represents a horse (Name, Race, Style) belonging to a Stable.
