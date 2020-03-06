# vagrant_test
composer install
cp .env .env.local # edit credentials for connecting database
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load

GET ./public/index.php/api/users
