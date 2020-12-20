<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

</p>

## SetUp

-   Clone the project
-   Setup your database, redis, and mail connection in .env file
-   Make sure you have redis installed in your system
-   Start your redis server
-   run your migration
-   run <code>composer install</code>
-   run <code>php artisan serve</code> to start the app
-   run <code>php artisan schedule:run</code> and <code>php artisan queue:work</code> to start processing jobs on the queue as a daemon
