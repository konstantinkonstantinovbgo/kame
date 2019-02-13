
I. Server Requirements

1. PHP >= 7.2, PDO PHP Extension, JSON PHP Extension. https://laravel.com/docs/5.7/installation
2. MySQL - 5.7
3. Apache - 2.4
3. Composer

II. Project installation:

1. Clone the project from Git: `https://github.com/konstantinkonstantinovbgo/kame` 
2. Enter project root folder and execute `composer install` to install all needed dependencies.
3. After finishing the installation process from composer you must enter your db credentials and other project specific parameters in `.env` file.
    ```
    DB_HOST=your.database.host
    DB_DATABASE=database
    DB_USERNAME=username
    DB_PASSWORD=password
    
    ```
4. Execute `php artisan key:generate` to generate a New Application Key.
5. Execute `php artisan migrate` to generate a migration.
6. Execute `php artisan storage:link` to make 'storage/app/public' accessible from the web. It creates symbolic link.

Serving Laravel
Artisan command: `php artisan serve` or you can do virtual host like mysite.dev.

Then type: http://localhost:8000

III. Projects page - structure:
    1. Pictures:
        ### The directory structure is:
        ---------------------------------
            ```
            ├── publlic/
                └── projects/
                    └── 1.png
                    └── 2.png
                    └── 3.png
                    ....
            ```
        ---------------------------------
        
    


That's it :)


