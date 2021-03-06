INFO
-------------

Test task executed as a module, so all the code is in folder `/modules/monopaint`.

CONFIGURATION
-------------
### Server

Server must be configuration to path `path/to/project/monopaint/web`

For example in apache server:
	`<Directory path/to/project/monopaint/web>
    		Order deny,allow
    		Allow from all
	        AllowOverride All
            Require all granted
	</Directory>`
	
### Database

Edit the file `config/db.php` with real data, for example:

`php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=monopaint',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];`


**NOTE:** Create database with name that write after `dbname=`

### Install

1. Install dependency via composer `composer install`
2. Create table in database `php yii migrate/up --migrationPath=@app/modules/monopaint/migrations`
3. Initial demo data `php yii picture/init`

**NOTE:** Check if folder `web/upload/` have permission to write a files. If not, set access.

**NOTE:** If you want edit demo data check permission too `web/upload/1-7.jpg`.

