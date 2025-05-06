# JSSP - JRMSU SSG Election Stored Procedure Backend API

This is the backend API for the **JRMSU SSG Election System**, built with PHP and structured using the **MVC architecture**. It is **PSR-compliant** as per PHP-FIG standards and utilizes **stored procedures** for database operations.

---

## Features

- 🏛️ Designed for JRMSU Student Government Elections
- ⚙️ Follows PHP-FIG PSR Standards
- 📦 Built on MVC Architecture
- 🗄️ Uses Stored Procedures for efficient database interaction
- 💡 Easily extendable and modifiable

---

## Getting Started

### Prerequisites

- PHP >= 7.4
- MySQL
- Composer (for dependency management)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/JSSP.git
   cd JSSP

2. **Install dependencies (if any are defined)**

   ```bash
   composer install
   ```

3. **Set up your database**

   * Import the SQL file that includes your stored procedures and schema.

4. **Configure environment variables**

   * Create a `.env` file or configure your `config/database.php` for DB credentials.

### Running the Server

Use PHP's built-in development server from the `public` directory:

```bash
php -S localhost:8000 -t public
```

Then open [http://localhost:8000](http://localhost:8000) in your browser or API client.

---

## Folder Structure

```
JSSP/
├── app/                # Controllers, Models, Services
├── config/             # Database and app configuration
├── core/               # Core classes like Router, Controller, Model base
├── public/             # Publicly accessible folder (entry point: index.php)
├── routes/             # Route definitions
├── .env                # Environment variables (optional)
└── README.md
```

---

## License

This project is licensed under the following terms:

> © Raldin C. Disomimba
> You are free to use, modify, and distribute this code for any purpose, **as long as my name is included in the credits** or documentation of your project.

---

## Author

**Raldin C. Disomimba**
📧 Contact: [@raldincasidar-studio](https://github.com/raldincasidar-studio)