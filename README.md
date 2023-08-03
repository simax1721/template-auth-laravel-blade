
open terminal

type => git clone https://github.com/mfzeref17/template-auth-laravel-blade.git

type => cd template-auth-laravel-blade

copy file .env.example

rename to .env

type => php artisan key:generate

type => php artisan migrate

type => php artisan db:seed --class=UserRoleSeeder
