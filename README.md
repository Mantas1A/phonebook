# phonebook
To build project run these commands in phonebook directory:

docker-compose build
docker-compose up -d
docker-compose exec php php bin/console doctrine:schema:create
docker-compose exec php php bin/console docttrine:fixtures:load
