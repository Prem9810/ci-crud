<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
$hook['pre_controller'] = array(  
        'class' => 'Example',  
        'function' => 'index',  
        'filename' => 'Exm.php',  
        'filepath' => 'hooks',  
        );  
?>  