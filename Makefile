SHELL := /bin/bash

grn=$'\e[1;32m
yel=$'\e[1;33m
end=$'\e[0m

-include .env

models:
	php artisan ide-helper:models

migrate:
	php artisan migrate

seed:
	php artisan db:seed

rollback:
	php artisan migrate:rollback

clean-cache:
	php artisan route:clear && php artisan view:clear && php artisan cache:clear && php artisan config:clear && php artisan config:cache && php artisan optimize:clear
