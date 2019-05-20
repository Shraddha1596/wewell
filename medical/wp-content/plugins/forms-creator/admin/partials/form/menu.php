<?php if ( ! defined( 'ABSPATH' ) ) exit;
	global $wpdb;
	$data = $wpdb->prefix . "wpbiker_tool";
	$data_mails = $wpdb->prefix . "wpbiker_mails";
	$info = (isset($_REQUEST["info"])) ? $_REQUEST["info"] : '';
	if ($info == "saved") {
		echo "<div class='updated' id='message'><p><strong>".__("Record Added", "wpbiker-fp-lang")."</strong>.</p></div>";
	}
	if ($info == "update") {
		echo "<div class='updated' id='message'><p><strong>".__("Record Updated", "wpbiker-fp-lang")."</strong>.</p></div>";
	}
	if ($info == "del") {
		$delid = $_GET["did"];
		$wpdb->query("delete from " . $data . " where id=" . $delid);
		echo "<div class='updated' id='message'><p><strong>".__("Record Deleted", "wpbiker-fp-lang").".</strong>.</p></div>";
	}	
	$resultat = $wpdb->get_results("SELECT * FROM " . $data . " WHERE tool='form'  order by id asc");	
?>

<div class="wpbiker">
    <h1><?php esc_attr_e(WPBIKER_FP_NAME, "wpbiker-fp-lang") ?> <a href='https://www.facebook.com/wowaffect/' target="_blank" title="Join us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> <a href='https://wow-estore.com/en/affiliates/' target="_blank" title="MAKE MONEY WITH US"><i class="fa fa-money" aria-hidden="true"></i></a></h1>
	<ul class="wpbiker-admin-menu">
		<li><a href='admin.php?page=<?php echo WPBIKER_FP_BASENAME;?>'><?php esc_attr_e("List", "wpbiker-fp-lang") ?></a></li>
		<li><a href='admin.php?page=<?php echo WPBIKER_FP_BASENAME;?>&tool=add' ><?php esc_attr_e("Add new", "wpbiker-fp-lang") ?></a></li>
		<li><a href='admin.php?page=<?php echo WPBIKER_FP_BASENAME; ?>&tool=pro' ><?php esc_attr_e("Pro Version", "wplg-pc") ?></a></li>
		<li></li>
	</ul>
<hr class="wp-header-end">