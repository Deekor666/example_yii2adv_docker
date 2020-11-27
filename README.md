## gipnopill
1. ```sh
   $ docker-compose up -d
   ```
2. ```sh
   $ composer install
      ```
3. ```sh
   $ php init
     ```
4. app/common/config/main-local.php 

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=db;dbname=library',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],

5. ```sh
   $ docker exec -it (root_folder)_php_1 bash
   $ yes
   $ exit
    ```