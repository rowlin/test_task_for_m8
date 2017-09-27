## Test task for M8 Solutions OÜ

- No clear description on how to get it running

In the task I used framework laravel.
Task posted in a public repository - for this did not consider it necessary to do a description.
To run - it is necessary:

>vagrant@homestead:~/Code$ git clone https://github.com/rowlin/test_task_for_m8.git ./test2 

>vagrant@homestead:~/Code$ cd test2

>vagrant@homestead:~/Code/test2$ composer update  

...

rename .env.examle.php as ./.env  and configure database setting :

>vagrant@homestead:~/Code/test2$ vi ./.env

```

DB_CONNECTION=mysql
DB_HOST=phpmyadmin.app
DB_PORT=3306
DB_DATABASE=test2
DB_USERNAME=homestead
DB_PASSWORD=secret

```

>vagrant@homestead:~/Code/test2$ php artisan   key:generate     

Application key [base64:fSLvGIAIHab8NTgtyIEbVFNJ/0Jv1FBPRL1gfeZZ+5Y=] set successfully.


>vagrant@homestead:~/Code/test2$ php artisan migrate 

>Migration table created successfully.

>Migrating: 2017_09_06_154744_create_data_table

>Migrated:  2017_09_06_154744_create_data_table

>vagrant@homestead:~/Code/test2$ php artisan db:seed

>Seeding: DataTableSeeder

- Encryption failing - no explanation on how to set it up

>vagrant@homestead:~/Code/test2$ php artisan   key:generate  

>Application key [base64:fSLvGIAIHab8NTgtyIEbVFNJ/0Jv1FBPRL1gfeZZ+5Y=] set successfully.


You can turn on server how (I use homestead):

>vagrant@homestead:~/Code/test2$ php artisan serve --port=8080

Laravel development server started: <http://127.0.0.1:8080>


- No DB structure provided

I use Eloquent 

>vagrant@homestead:~/Code/test2$ vi database/migrations/2017_09_06_154744_create_data_table.php

```
    Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->timestamps();
        });
```

- Delete button in edit view does nothing

Yes - i dont undestand there action.

- Responsive design could be better

I now, but this is test.

- Unused code (security) 

Ok .. I should not used framework...
