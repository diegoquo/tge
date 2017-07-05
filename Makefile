all:
	docker-compose build
	docker-compose run --rm php bash -c "cd /code && composer install"
