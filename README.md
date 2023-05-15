## How to get the project going
normally I would send a project dockerised but because of hardware changes I had to do it old school (sorry) 

 - create db - `php artisan db:create your_database_name`
 - make sure you `.env` has the right db name
 - run migrations - `php artisan migrate`
 - run seeders for sample data - `php artisan db:seed --class=CategorySeeder` & `php artisan db:seed --class=EventsSeeder`
