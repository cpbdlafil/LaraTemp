
<p align="center"><img src="https://lafilgroup.com.ph/wp-content/uploads/2025/01/LFUCG-LOGO_horizontal_FINAL-HOR-FORMAT.png" width="300px"></p>

# BaseTemplate

This repository serves as a template for starting a new project

# Application
<img src="public/screenshot.png" width="100%" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" />


#  Quick Start

### Configuration
To successfully run the project the following must be ensured:

| Technology | Version |
| ----------- | ----------- |
| Laravel | v12.0 |
| PHP | v8.2 |
| Composer | v2.8.5 up |
| Node | v22 up |

### Compilation
To compile the dist files you need Node.js/npm, clone/download the repo then run the following:

```
composer install
```

```
copy .env.example .env
```

```
# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={DATABASE_NAME}
DB_USERNAME={DATABASE_USER}
DB_PASSWORD={PASSWORD}
```
<sup>Configured .env file 
    <em>(credentials will be given by the administrator)</em>
</sup>

```
php artisan serve
```

```
npm install
```

```
npm run dev
```

# Testing

### Soft Testing

Before doing a `git push origin {branchName}` please make sure to run the following: <br>
<sup><em>This is to follow coding standards and filter out some basic soft testing of the project</em></sup>

```
php artisan test
```

```
npm run lint
```

```
composer lint
```
<sup><em>Please make sure to pass all the necessary test for assurance.</em></sup>

## License

This template is closed-sourced software owned by the [La Filipina Uy Gongo Group of Companies](https://lafilgroup.com.ph/).


