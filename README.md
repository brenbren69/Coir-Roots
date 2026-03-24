# Coir-Roots

Coir-Roots is a CodeIgniter 4 web application focused on coconut coir products and sustainability in the Philippines.

## Project Notes

- Built with CodeIgniter 4
- Includes customer product browsing, checkout, and transaction history
- Includes admin product and user management pages

## Local Setup

1. Copy `env` to `.env` if needed and configure your app settings.
2. Update your database credentials.
3. Run the migrations with `php spark migrate`.
4. Serve the app through the `public` directory.

## Deploying To Railway

This repository is now prepared for Railway with:

- `Dockerfile` for Apache + PHP 8.2
- `railway.json` for Docker build, healthcheck, and automatic migrations
- `docker/start-container.sh` to prepare `writable/` and `public/uploads/`

### Railway setup

1. Push this repository to GitHub.
2. In Railway, create a new project and choose `Deploy from GitHub repo`.
3. Add a `MySQL` service to the same Railway project.
4. In your web service variables, add:

```env
CI_ENVIRONMENT=production
app_baseURL=https://${{RAILWAY_PUBLIC_DOMAIN}}
database_default_hostname=${{MySQL.MYSQLHOST}}
database_default_port=${{MySQL.MYSQLPORT}}
database_default_database=${{MySQL.MYSQLDATABASE}}
database_default_username=${{MySQL.MYSQLUSER}}
database_default_password=${{MySQL.MYSQLPASSWORD}}
database_default_DBDriver=MySQLi
```

5. Add your SMTP variables in Railway too. Recommended keys:

```env
email_fromEmail=your_email@example.com
email_fromName=Coir Roots PH
email_protocol=smtp
email_SMTPHost=smtp.gmail.com
email_SMTPUser=your_email@example.com
email_SMTPPass=your_app_password
email_SMTPPort=587
email_SMTPCrypto=tls
email_mailType=html
email_charset=utf-8
email_newline=\r\n
```

6. Optional but recommended: attach a Railway volume and mount it at `/data` so profile uploads and writable files persist between deploys.

### Notes

- Railway supports config-as-code via `railway.json`.
- Railway pre-deploy commands run before the app starts, which is why migrations are configured there.
- Railway provides `RAILWAY_PUBLIC_DOMAIN` and volume mount variables automatically.
