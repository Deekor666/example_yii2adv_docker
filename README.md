## gipnopill
#### If the system has a composer and everything that is needed for Yii2
 ```sh
   $ docker-compose up -d
   $ cd www/app
   $ composer install
   $ php init | 0 | yes
   ```
##### app/common/config/main-local.php >>

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=db;dbname=library',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],


 ```sh
   $ docker exec -it (root_folder)_php_1 bash
   $ cd app/
   $ php yii migrate | yes | exit
   $ root_folder/ docker-compose down
   $ root_folder/ docker-compose up -d
   ```
#### Else deploy the project in docker container
 ```sh
  $ docker-compose up -d
  $ docker exec -it (root_folder)_php_1 bash
  $ cd app/
  $ composer install
  $ php init | 0 | yes
  ```
app/common/config/main-local.php >>

    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=db;dbname=library',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ],

 ```sh
  $ php yii migrate | yes | exit
  $ root_folder/ sudo chmod 777 www/app
   ```




> front - 127.0.0.1
>
> back  - 127.0.0.1/admin
>
> db    - 127.0.0.1:8080
