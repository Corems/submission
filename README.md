## INSTALLATION

1. clone repository
2. cd /path/to
3. install docker if you don't have it
4. run containers *docker-compose up -d*
5. get it to the container ( *docker-compose exec server bash* )
6. *composer install*
7. migrate tables ( *php artisan migrate && php artisan migrate --database=testing* )
8. check tests: *php artisan test*
9. run queue listener ( *php artisan queue:listen* )
10. try to test with POSTMAN this endpoint (POST) http://localhost/api/submit
11. you are able to check records in database http://localhost:8070/?server=db&username=root&db=laravel&&select=submissions ( password: *root* )

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
