# Univers Labs WordPress Test

## Deployment requirements

- Docker, Docker-Compose
- Containers:
  - [WordPress](https://hub.docker.com/_/wordpress/)
  - [phpMyAdmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)
  - [MySQL](https://hub.docker.com/_/mysql/)

## Environment variables

**Example .env.example is included in the repository files. Make sure to use secure passwords in deployment!**

| Name | Purpose | Default value |
|---|---|---|
| `DB_ROOT_PASSWORD` | MySQL database root password | null |
| `DB_NAME` | MySQL database name | `wordpress` |

## Deployment

1. Clone repository to your destination folder.
2. Create containers with `docker-compose up -d`.
3. Open WordPress at `localhost` in your browser.

## Credentials

phpMyAdmin:
User: `root`
Pass: as defined in `DB_ROOT_PASSWORD`

WordPress details:
User: `user`
Pass: `UniversLabs`

## Creating database dumps

## WPCD - WordPress Docker Compose

[nezhar/wordpress-docker-compose](https://github.com/nezhar/wordpress-docker-compose) was used as a base for this project. See [nezhar's readme](https://github.com/nezhar/wordpress-docker-compose#readme) for additional detail.