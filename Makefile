up:
	docker-compose up -d

build:
	docker-compose up -d --build

install-dependencies:
	docker exec --workdir=/srv/www php composer install

down:
	docker-compose down

terminal:
	docker exec -ti php /bin/bash

run-tests:
	docker exec --workdir=/srv/www php vendor/bin/phpunit tests

analyse:
	docker exec --workdir=/srv/www php vendor/bin/phpstan analyse -l 8 src

start-database:
	docker exec --workdir=/srv/www php bin/console doctrine:database:create

check-migration:
	docker exec --workdir=/srv/www php bin/console make:migration

migrate:
	docker exec --workdir=/srv/www php bin/console doctrine:migrations:migrate
