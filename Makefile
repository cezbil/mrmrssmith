build:
	@docker compose build --pull --no-cache
	@docker docker compose up -d

stop:
	@docker compose down --remove-orphans

ecs:
	@php vendor/bin/ecs check -c ecs.php --clear-cache

ecs-fix:
	@php vendor/bin/ecs check -c ecs.php --clear-cache --fix

unit:
	@php bin/phpunit

unit-coverage:
	@php bin/phpunit --coverage-clover coverage/unit-clover.xml --coverage-html coverage --verbose --coverage-xml=coverage --log-junit=coverage/phpunit.junit.xml

