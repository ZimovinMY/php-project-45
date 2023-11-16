install:
	composer install

dumb-autoload:
	composer dump-autoload

brain-games:
	./bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
