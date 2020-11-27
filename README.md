## gipnopill
 ```sh
   $ docker-compose up -d
   ```
 ```sh
   $ composer install
  ```
 ```sh
   $ php init
```
#### app/common/config/main-local.php >>

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=db;dbname=library',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],

 ```sh
   $ docker exec -it (root_folder)_php_1 bash
   $ yes
   $ exit
```