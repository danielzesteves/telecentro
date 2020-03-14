# telecentro
# telecentro

---DOCKER---

El archivo .env modificar la version de Mysql a 5.7 ya que con la ultima
version da error

Iniciar contendor
docker-compose up -d nginx mysql

Entrar al contendor
docker-compose exec workspace bash

-------LARAVEL--------
Pasos para instalacion

Dentro del contenedsor ejecutar los siguientes comandos

composer install


Generar link simbolico
php artisan storage:link

Generar migracion y seeders

php artisan migrate:fresh --seed

Passport

php artisan passport:keys
php artisan vendor:publish --tag=passport-components

--- VUE ----
Instalar

npm install

Correr

npm run serve

ESta configurado para usar como api localhost (Laravel)
