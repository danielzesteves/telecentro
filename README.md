# telecentro

---DOCKER---

En la maquina que se ejecute no debe estar corriendo apache2, ni nginx ni mysql ya que generar conflictp

EN la raiz de la carpeta docker ejecutar lo siguiente

Iniciar contendor
cp env-example .env

docker-compose up -d nginx mysql

Entrar al contendor
docker-compose exec workspace bash



-------LARAVEL--------
Pasos para instalacion

User archivo .env_PARA_USAR

Dentro del contenedsor ejecutar los siguientes comandos

composer install


Generar link simbolico
php artisan storage:link

Generar migracion y seeders

php artisan migrate:fresh --seed

Passport
php artisan passport:client --personal
php artisan passport:keys
php artisan vendor:publish --tag=passport-components

--- VUE ----
Instalar

npm install

Correr

npm run serve

ESta configurado para usar como api localhost (Laravel)
