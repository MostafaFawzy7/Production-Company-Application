<? if( $_POST['usnw'] ) { ?>
	<?
	$uid = wp_insert_user(
		array(
			'user_login'=>$_POST['usnw'],
			'user_pass'=>$_POST['pwd'],
			'user_email'=>$_POST['emls'],
		)
	);
	header('Location: '.home_url().'');
	die();
	?>
<? } ?>