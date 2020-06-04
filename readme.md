# Hostinger frontend test

My attempt to finish the test as frontend developer

## Tech Stack

* Laravel v5.8
* Vuejs v2.5
* MySQL for local development
* PostgreSQL for production
* Heroku
* Bootstrap v4

## Important!

* For local development make sure to change the `APP_ENV` value to **local**.
* For production development with heroku set `APP_ENV` value to **production** in the _config vars_ at **settings** menu of heroku dashboard
* For hostname of RESTful API set value of `MIX_HOST`
* Heroku database is PostgreSQL so make sure to set the value of `PG_CONNECTION`

## Local Installation

```bash
# clone this repository
# make sure to set value of DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD before installation
git clone https://github.com/doyoque/hostinger-test.git

# do composer install
composer install

# if installed properly do artisan:key generate
php artisan key:generate

# boot up
php artisan serve
```

## Compiling Assets
```bash
# make sure to have nodejs and npm at your machine
npm install

# for development
npm run dev

# development with watch mode
npm run watch

# minify and uglify compiled assets
npm run prod
```
