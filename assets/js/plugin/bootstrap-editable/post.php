<?php

include('../global.php');
    /*
    Script for update record from X-editable.
    */

    //delay (for debug only)
    sleep(1); 

    /*
    You will get 'pk', 'name' and 'value' in $_POST array.
    */
    $pk = $_POST['pk'];
    $name = $_POST['name'];
	$lookup_field = $_POST['lookup_field'];
	$table = $_POST['table'];
	$field_to_edit = $_POST['field_to_edit'];
	
    $value = $_POST['value'];

    /*
     Check submitted value
    */
    if(!empty($value)) {
        /*
          If value is correct you process it (for example, save to db).
          In case of success your script should not return anything, standard HTTP response '200 OK' is enough.
          
          for example:
          $result = mysql_query('update users set '.mysql_escape_string($name).'="'.mysql_escape_string($value).'" where user_id = "'.mysql_escape_string($pk).'"');
        */
        
        //here, for debug reason we just return dump of $_POST, you will see result in browser console
		
		$sql_update = "UPDATE `$table` SET `$field_to_edit` = '$value' WHERE `$lookup_field` = $pk";
		
		mysql_query($sql_update, $merimies) or die(mysql_error());
		echo $sql_update;
		
        print_r($_POST);


    } else {
        /* 
        In case of incorrect value or error you should return HTTP status != 200. 
        Response body will be shown as error message in editable form.
        */
        //header('HTTP 400 Bad Request', true, 400);
        echo "This field is required!";
    }

?>