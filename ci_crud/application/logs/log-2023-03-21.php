<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-21 06:12:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user ''@'localhost' (using password: NO) /home/prem/web/ci3.app.local/public_html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2023-03-21 06:12:44 --> Unable to connect to the database
ERROR - 2023-03-21 06:12:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user ''@'localhost' (using password: NO) /home/prem/web/ci3.app.local/public_html/system/database/drivers/mysqli/mysqli_driver.php 211
ERROR - 2023-03-21 06:12:48 --> Unable to connect to the database
ERROR - 2023-03-21 06:36:06 --> 404 Page Not Found: Register/index
ERROR - 2023-03-21 06:36:22 --> Severity: error --> Exception: Class Register already exists and doesn't extend CI_Model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 354
ERROR - 2023-03-21 06:41:17 --> Severity: error --> Exception: Class Register already exists and doesn't extend CI_Model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 354
ERROR - 2023-03-21 06:53:06 --> Severity: error --> Exception: Class Register already exists and doesn't extend CI_Model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 354
ERROR - 2023-03-21 06:54:03 --> Severity: error --> Exception: Class Register already exists and doesn't extend CI_Model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 354
ERROR - 2023-03-21 06:55:00 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 06:57:19 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 06:57:55 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 06:58:43 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 07:00:42 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 07:02:59 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 07:04:42 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 07:04:44 --> Severity: error --> Exception: Unable to locate the model you have specified: Registers_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 07:19:17 --> Severity: Notice --> Undefined property: Register::$registers_model /home/prem/web/ci3.app.local/public_html/application/controllers/Register.php 51
ERROR - 2023-03-21 07:19:17 --> Severity: error --> Exception: Call to a member function register() on null /home/prem/web/ci3.app.local/public_html/application/controllers/Register.php 51
ERROR - 2023-03-21 07:19:46 --> Severity: Notice --> Undefined property: Register::$registers_model /home/prem/web/ci3.app.local/public_html/application/controllers/Register.php 51
ERROR - 2023-03-21 07:19:46 --> Severity: error --> Exception: Call to a member function register() on null /home/prem/web/ci3.app.local/public_html/application/controllers/Register.php 51
ERROR - 2023-03-21 07:24:37 --> Query error: Table 'ci_app.entries' doesn't exist - Invalid query: INSERT INTO `entries` (`username`, `email`, `password`) VALUES ('prem', 'prem@gmail.com', 'prem')
ERROR - 2023-03-21 07:24:57 --> Query error: Unknown column 'username' in 'field list' - Invalid query: INSERT INTO `users` (`username`, `email`, `password`) VALUES ('prem', 'prem@gmail.com', 'prem')
ERROR - 2023-03-21 07:28:25 --> Query error: Unknown column 'username' in 'field list' - Invalid query: INSERT INTO `users` (`username`, `email`, `password`) VALUES ('prem', 'prem@gmail.com', '123')
ERROR - 2023-03-21 07:34:48 --> Query error: Duplicate entry '0' for key 'users.PRIMARY' - Invalid query: INSERT INTO `users` (`username`, `email`, `password`) VALUES ('prem', 'prem@gmail.com', '123')
ERROR - 2023-03-21 07:34:55 --> Query error: Duplicate entry '0' for key 'users.PRIMARY' - Invalid query: INSERT INTO `users` (`username`, `email`, `password`) VALUES ('prem', 'prem@gmail.com', '123')
ERROR - 2023-03-21 07:36:11 --> Query error: Duplicate entry '0' for key 'users.PRIMARY' - Invalid query: INSERT INTO `users` (`username`, `email`, `password`) VALUES ('prem', 'prem@gmail.com', '123')
ERROR - 2023-03-21 10:40:48 --> Severity: Warning --> require(): http:// wrapper is disabled in the server configuration by allow_url_include=0 /home/prem/web/ci3.app.local/public_html/application/views/register/register.php 1
ERROR - 2023-03-21 10:40:48 --> Severity: Warning --> require(http://ci3.app.local/application/views/common/header.php): failed to open stream: no suitable wrapper could be found /home/prem/web/ci3.app.local/public_html/application/views/register/register.php 1
ERROR - 2023-03-21 10:40:48 --> Severity: Compile Error --> require(): Failed opening required 'http://ci3.app.local/application/views/common/header.php' (include_path='.:/usr/share/php') /home/prem/web/ci3.app.local/public_html/application/views/register/register.php 1
ERROR - 2023-03-21 10:56:45 --> Severity: error --> Exception: Unable to locate the model you have specified: User_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 10:57:15 --> Severity: error --> Exception: Unable to locate the model you have specified: User_model /home/prem/web/ci3.app.local/public_html/system/core/Loader.php 349
ERROR - 2023-03-21 10:58:25 --> 404 Page Not Found: Register/register
ERROR - 2023-03-21 10:58:27 --> 404 Page Not Found: Register/register
ERROR - 2023-03-21 12:04:15 --> Severity: Notice --> Undefined property: User::$register /home/prem/web/ci3.app.local/public_html/application/controllers/User.php 101
ERROR - 2023-03-21 12:04:15 --> Severity: error --> Exception: Call to a member function checkUser() on null /home/prem/web/ci3.app.local/public_html/application/controllers/User.php 101
ERROR - 2023-03-21 12:16:31 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::rows() /home/prem/web/ci3.app.local/public_html/application/models/User_model.php 26
ERROR - 2023-03-21 12:19:40 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::rows_array() /home/prem/web/ci3.app.local/public_html/application/models/User_model.php 26
