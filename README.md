# Laravel-RESTful-api-crud-scafold
A laravel RESTful crud scafold

## TO-DO 
Install 
Make a controller
Make Route
Write small code
Test API on postman
Interview Questions

## installation
composer create-project laravel/laravel example-app

## Make Migrations
php artisan make:migration
sample code

```
Schema::create('task', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id');

            $table->string('description');
            $table->date('dueDate');
            $table->string('comment');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('project');
        });
```
