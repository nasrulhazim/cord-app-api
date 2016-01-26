## Development Tools

1. Install [Laragon](http://laragon.org)
2. Install [Git](https://git-scm.com)
3. Signup for [Github Account](https://github.com)

## Steps for API Development with Lumen

1. Create project
	* Menu > Laravel > Create Project > Lumen
		* project name: cord-app-api
		* if ask for token, generate in GitHub > Settings > Personal Access Token:repo
	* http://cord-app-api.dev	

2. Create database
	* `CREATE DATABASE cord-app`

3. Configure `.env`
	* Set database details - database name, user & password
	* Generate 32 character random key(use online tools for this).

4. Create model and save in app/
	* Enable Eloquent in `bootstrap/app.php`, Line 28
	* Schema
		* locations
			* id 
			* name
			* description
			* photo
			* latitude
			* longitude

5. Create migration scripts and execute
	* `php artisan make:migration create_locations_table --create=locations`
	* `php artisan migrate`

6. Update migration scripts schema
	* `php artisan make:migration update_location_table --table=locations`
	* `php artisan migrate`

7. Create factories
	* [Faker](https://github.com/fzaninotto/Faker)

8. Update `database/seeds/DatabaseSeeder.php` and run `php artisan db:seed`

9. Setup Route `app/Http/routes.php`
	* show all record
	* get specific record
	* create record
	* update record
	* delete record

10. Setup Controller `app/Http/Controller/Location.php`
	* index
	* store
	* show
	* update
	* destroy

11. Eloquent
	* Create (store)
	* Read (show)
	* Update (update)
	* Delete (destroy)


## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
