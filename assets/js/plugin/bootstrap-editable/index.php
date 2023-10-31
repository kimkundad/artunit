<?php
session_start();
include('../../../Connections/merimies.php');
include('../../../global.php');
$admin_mode = false;
$command_file = "post.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>X-editable PHP backend sample</title>
        <!-- jquery -->
		<script type="text/javascript" src="../../../js/jquery1.10.2.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.js"></script>

        
        <link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.css">


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
      

      echo '<div id="user">';
      echo 'Username: <a href="#" id="user_name" data-type="text" title="Enter username">'.$user['user_name'].'</a><br>';
      echo 'Group: <a href="#" id="group_id" data-type="select" data-value="'.$user['group_id'].'" data-source="groups.php" title="Select group"></a><br>';
      echo '</div><br /><br /><br /><br /><br />';

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
     
     
     
<?php 
	mysql_select_db($database_merimies, $merimies);
	
	$table_name = $tb_product_cat;

	$query_category_list= "SELECT * FROM $table_name ORDER BY sort ASC";
	$array_category_list = mysql_query($query_category_list, $merimies) or die(mysql_error());
	//$result_category_list = mysql_fetch_array($array_category_list);
	$num_result_category_list  = 14;//mysql_num_rows($array_category_list);
?>

<div class="container">
<?php
	$z = 1;

	while($result_category_list = mysql_fetch_array($array_category_list)) { 
		$data_row = $result_category_list['cid'];
?>
   <div class="row">
       <div class="col-md-3"><a href="#" id="cname_<?php echo $result_category_list['cid']; ?>">
            <?php echo $result_category_list['cname']; ?></a>
       </div>
   </div>
<?php $z++; } ?>

</div><!--End Row-->
<?php 


if ($admin_mode){ ?>
	<script>
	$(document).ready(function() {
		$.fn.editable.defaults.mode = 'popup';
		
		<?php for($a=1; $a<$z ;$a++){ ?>
				$('#cname_<?php echo $a; ?>').editable({
					 pk:'<?php echo $a; ?>',
					 url: 'post.php' ,
						params: function (params) {
							params.lookup_field = 'cid',
							params.table = 'merimies_product_cat',
							params.field_to_edit = 'cname'          
							return params;
						}	
				});
		<?php }	?>
		
		
	});
	</script>
<?php } ?>
        
</body>
</html>