<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>X-editable PHP backend sample</title>
        <!-- jquery -->
		<script type="text/javascript" src="../js/jquery1.10.2.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">


        <!-- x-editable -->
        <link href="css/bootstrap-editable.css" rel="stylesheet">
        <script src="js/bootstrap-editable.js"></script>
    </head>
    <body style="padding: 100px 100px">
         
      <?php
      /*
      Let's assume we have loaded record from database 
      */
      $user = array(
      'user_id' => 1,
      'user_name' => 'Awesome',
      'group_id' => 3
      );
      
      /*
      Render user_name and group as editable links
      */
      echo '<div id="user">';
      echo 'Username: <a href="#" id="user_name" data-ol="cname_ch" data-type="text" title="Enter username">'.$user['user_name'].'</a><br>';
      echo 'Group: <a href="#" id="group_id" data-type="select" data-value="'.$user['group_id'].'" data-source="groups.php" title="Select group"></a><br>';
      echo '</div>';
      ?>
                         
     <?
      /*
       In javascript apply $().editable() to both links on DOM ready
      */
     ?>
     <script>   
       $(function(){
          $('#user a').editable({
			 pk:'5',
             url: 'post.php' ,
				params: function (params) {
					params.lookup_field = 'cid',
					params.table = 'merimies_product_cat',
					params.field_to_edit = 'cname_ch'          
					return params;
				}
	 
          });
       });
     </script>
        
    </body>
</html>