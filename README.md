# 🐳 LAMP Stack Docker

A complete LAMP (Linux, Apache, MySQL, PHP) development environment containerized with Docker and Docker Compose.

## ✨ Features

- **Apache Web Server** with full PHP support
- **PHP** with PDO and PDO_MySQL extensions pre-installed
- **MySQL 8.1.0** database server
- **phpMyAdmin** for database management
- **Hot-reload** for PHP code changes
- Isolated and portable configuration

## 📑 Table of Contents

- [Prerequisites](#-prerequisites)
- [Quick Start](#-quick-start)
- [Project Structure](#-project-structure)
- [Usage](#-usage)
- [Container Management](#-container-management)
- [Useful Commands](#-useful-commands)
- [Troubleshooting](#-troubleshooting)
- [Tech Stack](#-tech-stack)
- [Security Notice](#-security-notice)
- [Author](#-author)

___
## 🔧 Prerequisites

- [Docker](https://docs.docker.com/get-docker/) (version 20.10+)
- [Docker Compose](https://docs.docker.com/compose/install/) (version 2.0+)
___
## 🚀 Quick Start

### 1. Build Docker Image

```bash
docker build .
```


### 2. Start Containers

```shell script
docker compose up -d
```


### 3. Access Services

| Service | URL | Description |
|---------|-----|-------------|
| **Web Application** | http://localhost | Your PHP application |
| **phpMyAdmin** | http://localhost:8080 | MySQL database management |
___
## 📁 Project Structure

```
lamp-docker/
├── docker-compose.yml      # Docker services configuration
├── Dockerfile              # Custom PHP + Apache image
├── README.md              
├── html/                   # Web root (mapped to /var/www/html)
│   └── index.php          
└── mysql_data/             # MySQL persistent volume (auto-generated)
```

___
## 💻 Usage

### Development

1. Add your PHP files to the `html/` folder
2. Changes are immediately visible (no rebuild needed)
3. Access via browser: `http://localhost/yourfile.php`

### Database Connection

```php
<?php
try {
    $pdo = new PDO('mysql:host=db;dbname=your_database', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
```

> ⚠️ **Important Note**: Always use `db` as the host (the service name in docker-compose), NOT `localhost`. ⚠️
### phpMyAdmin Access

- URL: http://localhost:8080
- Username: `root`
- Password: (leave empty)
___
## 🔄 Container Management

```shell script
# Start services
docker-compose up -d

# Stop services
docker-compose stop

# Stop and remove containers
docker-compose down

# Restart services
docker-compose restart

# View logs
docker-compose logs -f

# Rebuild after Dockerfile changes
docker-compose up -d --build
```

___
## 📝 Useful Commands

```shell script
# Check status
docker-compose ps

# Execute commands in container
docker-compose exec web bash
docker-compose exec db mysql -uroot

# Backup database
docker-compose exec db mysqldump -uroot database_name > backup.sql

# Import database
docker-compose exec -T db mysql -uroot database_name < backup.sql
```
___

## 🐛 Troubleshooting

### Port Already in Use

Modify port in `docker-compose.yml`:
```yaml
ports:
  - "8000:80"  # Use port 8000 instead of 80
```


### View Logs

```shell script
docker-compose logs web
docker-compose logs db
```


### Clean Start

```shell script
docker-compose down -v
docker rmi lamp-php-apache
docker build -t lamp-php-apache .
docker-compose up -d
```

___
## 🛠️ Tech Stack

- **Docker** 🐳 - Containerization
- **Apache 2.4** - Web server
- **PHP** (latest) - Programming language
- **MySQL 8.1.0** - Database
- **phpMyAdmin** - Database management interface
___
## 🔐 Security Notice

⚠️ **This configuration is for LOCAL DEVELOPMENT ONLY.**

Do NOT use in production without:
- Secure MySQL passwords
- HTTPS/SSL configuration
- Firewall and network restrictions
- Regular security updates
___
## 👤 Author

**Maniglio Federico**

---

**Happy coding! 🚀**
