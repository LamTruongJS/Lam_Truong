<<<<<<< HEAD
# Theme WP Start
This is theme wordpress start

## Download and Install Docker
https://docs.docker.com/docker-for-windows/install/

## Download and Install composer
npm install composer-cli

## Start Docker

## Install
```sh
git init && git remote add origin https://git.9wdev.com/Tools/wp-start-sage.git && git fetch && git checkout develop
npm i
```
## Install Composer
access to wp-content/themes/sage-theme
```sh
composer install
```
## Run Website
access to root folder
```sh
docker-compose up
```
## Info
Website Url: http://localhost:3333
Admin Cms Url: http://localhost:3333/wp-admin
Account: admin/123
Php Myadmin Url: http://localhost:5555

## Stop Website
```sh
docker-compose stop
```

## Get Database from dev
Uncommand line 40 in docker-compose.yml file
```sh
docker-compose stop
docker-compose up -d
```

## Sync Advanced Custom Fields
```sh
Go: Custom Fields > Field Groups
Click "Sync" to import ACF default group from JSON files
```

=======
# Hoang-Thanh-Son
Bài tập Training thực thập ở công ty 9thWonder
>>>>>>> 56e1027d7e793e41e674e2d9b9f257aeefc82f8a
