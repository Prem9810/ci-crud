<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-26 09:44:15 --> Severity: Warning --> Illegal offset type in isset or empty /home/prem/web/ci3.app.local/public_html/system/libraries/Session/Session.php 798
ERROR - 2023-04-26 09:44:30 --> Severity: Warning --> Illegal offset type in isset or empty /home/prem/web/ci3.app.local/public_html/system/libraries/Session/Session.php 798
ERROR - 2023-04-26 09:48:46 --> Severity: error --> Exception: Too few arguments to function CI_Session::set_userdata(), 0 passed in /home/prem/web/ci3.app.local/public_html/application/controllers/User.php on line 64 and at least 1 expected /home/prem/web/ci3.app.local/public_html/system/libraries/Session/Session.php 834
ERROR - 2023-04-26 09:49:02 --> Severity: error --> Exception: Too few arguments to function CI_Session::set_userdata(), 0 passed in /home/prem/web/ci3.app.local/public_html/application/controllers/User.php on line 64 and at least 1 expected /home/prem/web/ci3.app.local/public_html/system/libraries/Session/Session.php 834
ERROR - 2023-04-26 09:49:09 --> Severity: error --> Exception: Too few arguments to function CI_Session::set_userdata(), 0 passed in /home/prem/web/ci3.app.local/public_html/application/controllers/User.php on line 64 and at least 1 expected /home/prem/web/ci3.app.local/public_html/system/libraries/Session/Session.php 834
ERROR - 2023-04-26 11:09:42 --> Query error: Unknown column 'u.user_id' in 'where clause' - Invalid query: SELECT *
FROM `users`
JOIN `employee` ON `users`.`user_id` = `employee`.`user_id`
WHERE `u`.`user_id` = 1
ERROR - 2023-04-26 11:10:02 --> Query error: Unknown column 'u.user_id' in 'where clause' - Invalid query: SELECT *
FROM `users`
JOIN `employee` ON `users`.`user_id` = `employee`.`user_id`
WHERE `u`.`user_id` = 1
ERROR - 2023-04-26 11:10:03 --> Query error: Unknown column 'u.user_id' in 'where clause' - Invalid query: SELECT *
FROM `users`
JOIN `employee` ON `users`.`user_id` = `employee`.`user_id`
WHERE `u`.`user_id` = 1
ERROR - 2023-04-26 11:24:31 --> Severity: error --> Exception: Object of class CI_DB_mysqli_result could not be converted to string /home/prem/web/ci3.app.local/public_html/application/models/Employee_model.php 36
ERROR - 2023-04-26 11:34:19 --> Severity: Notice --> Trying to access array offset on value of type int /home/prem/web/ci3.app.local/public_html/application/controllers/User.php 128
ERROR - 2023-04-26 11:34:24 --> Severity: Notice --> Trying to access array offset on value of type int /home/prem/web/ci3.app.local/public_html/application/controllers/User.php 128
ERROR - 2023-04-26 11:56:34 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::count_all() /home/prem/web/ci3.app.local/public_html/application/models/Employee_model.php 58
ERROR - 2023-04-26 11:58:41 --> Query error: No tables used - Invalid query: SELECT *
