###################
Install MSSQL in PHP via XAMPP
###################

*******************
Links
*******************
- XAMPP - https://www.apachefriends.org/download.html
- SQL Server 2012 - https://www.microsoft.com/en-us/download/details.aspx?id=29062
- ODBC Driver for SQL Server - https://docs.microsoft.com/en-us/sql/connect/odbc/download-odbc-driver-for-sql-server
- PHP Driver for SQL Server - https://docs.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server or https://github.com/Microsoft/msphpsql/releases

*******************
Installation
*******************
1. Install XAMPP, SQL Server 2012 and ODBC Driver for SQL Server.
2. Download the appopriate PHP Driver for SQL Server based on: 
	* PHP version, 
	* system archritecture
	* and Thread Safety through ``localhost/dashboard/phpinfo.php``
3. Get the ``php_sqlsrv.dll`` and ``php_pdo_sqlsrv.dll`` and paste it to ``C:\xampp\php\ext``
4. Config your ``C:\xampp\php\php.ini`` and add the DLL extension to "Dynamic Extensions".

| **Example:**
| extension=*file_name_of_dll*
| extension=php_sqlsrv
| extension=php_pdo_sqlsrv
| or 
| extension=php_pdo_sqlsrv_74_ts_x64
| extension=php_sqlsrv_74_ts_x64
| 
| If it doesn't work (PDO doesn't show up) try:
| extension=php_sqlsrv.dll
| extension=php_pdo_sqlsrv.dll
