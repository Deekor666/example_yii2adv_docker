## gipnopill
 ```sh
   $ docker-compose up -d
   ```
 ```sh
   $ docker exec -it (root_folder)_php_1 bash
   $ cd app/
   $ composer install
   $ php init
   $ php yii migrate
   $ yes
   $ exit
   ```
```sh
   $ sudo chmod 777 www/app
   ```

#### app/common/config/main-local.php >>

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=db;dbname=library',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],

> front - 127.0.0.1
> back  - 127.0.0.1/admin
> db    - 127.0.0.1:8080
