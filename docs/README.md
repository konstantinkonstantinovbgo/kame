
I. Server Requirements

1. PHP >= 7.2, PDO PHP Extension, JSON PHP Extension. https://laravel.com/docs/5.7/installation
2. MySQL - 5.7
3. Apache - 2.4
3. Composer 
    Use it: php composer.phar
    OR 
    /usr/local/php72/bin/php-cli composer.phar install

II. Project installation:

1. Clone the project from Git: `git clone https://github.com/konstantinkonstantinovbgo/kame` 
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
        
    3. Languages:
        ### The directory structure is:
        ---------------------------------
            ```
            ├── resources/
                └── lang/
                    └── bg
                        └── projects.php
                        └── messages.php
                    └── de
                        └── projects.php
                        └── messages.php
                    └── en
                        └── projects.php
                        └── messages.php
            ```
        ---------------------------------
        
    3. Video:
        ### The directory structure is:
        ---------------------------------
            ```
            ├── publlic/
                └── video/
                    └── iot.mp4
                    ....
            ```
        ---------------------------------
        
    4. Template:
        ### The code to put it in is:
        ---------------------------------
            ```
            <div class="col-lg-12 order-lg-2 order-1 margin-10">
                <div class="card text-center">
                    <h4 class="mb-10 margin-10">{{ trans('projects.proj4') }}</h4>
                    <img src="{{ URL::asset('projects/4.png') }}" class="img-center" style="width: 50%;">
                    <p class="mb-40">{{ trans('projects.technical-data') }}:</p>
                    <p class="mb-40 text-left">{!! nl2br(trans('projects.proj4-tech-data')) !!}</p>
                </div>
            </div>
            ```
            
            ```
            ├── resources/
                └── views/
                    └── frontend/
                        └── projects.blade.php
            ```
        ---------------------------------
        
    
That's it :)


