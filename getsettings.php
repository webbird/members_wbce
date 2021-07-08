<?php require('../../config.php');

// Get id
if(!isset($_GET['section_id']) OR !is_numeric($_GET['section_id'])) {
  die("Location: ".ADMIN_URL."/pages/index.php");
} else {
  $section_id = $_GET['section_id'];  
}

// Get style
$style = 0;
if(isset($_GET['style']) AND is_numeric($_GET['style'])) { $style = $_GET['style'];}


require_once(WB_PATH.'/framework/class.wb.php');
$wb = new wb;
if ($wb->is_authenticated()) {echo "//Starting Javascript\n";} else {die("Sorry, no access");}

/*
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin;
if ($admin->is_authenticated()) {echo "//Starting Javascript\n";} else {die("Sorry, no access");}
*/

// Get header and footer
	$query_content = $database->query("SELECT * FROM `".TABLE_PREFIX."mod_members_settings` WHERE `section_id` = '$section_id'");
	$fetch_content = $query_content->fetchRow();
	if ($style==1) {echo "\nthepresetsdescription = 'Short Description here';\n\n";}

	echo "document.edit.pic_loc.value = '".$fetch_content['pic_loc']."';\n";
	echo "document.edit.extensions.value = '".$fetch_content['extensions']."';\n";
	echo 'selectDropdownOption (document.edit.sort_grp_name, '.$fetch_content['sort_grp_name'].");\n";
	echo 'selectDropdownOption (document.edit.delete_grp_members, '.$fetch_content['delete_grp_members'].");\n";
		
	echo 'selectDropdownOption (document.edit.sort_mem_name, '.$fetch_content['sort_mem_name'].");\n";	
	echo 'selectDropdownOption (document.edit.sort_mem_desc, '.$fetch_content['sort_mem_desc'].");\n";
	echo 'selectDropdownOption (document.edit.hide_email, '.$fetch_content['hide_email'].");\n";	
	
	echo "document.edit.t_memberpage_id.value = '".$fetch_content['t_memberpage_id']."';\n";
	echo "document.edit.t_link.value = '".$fetch_content['t_link']."';\n";
	echo "document.edit.t_short1.value = '".$fetch_content['t_short1']."';\n";
	echo "document.edit.t_short2.value = '".$fetch_content['t_short2']."';\n";
	echo "document.edit.t_long1.value = '".$fetch_content['t_long1']."';\n";
	echo "document.edit.t_long2.value = '".$fetch_content['t_long2']."';\n";
	
	
	
	$output = preg_replace("/\r|\n/s", "\\n", $fetch_content['header']);
	echo "document.edit.header.value = '".str_replace("\\n\\n", "\\n", $output)."';\n";
	
	$output = preg_replace("/\r|\n/s", "\\n", $fetch_content['footer']);
	echo "document.edit.footer.value = '".str_replace("\\n\\n", "\\n", $output)."';\n";
	
	
	$output = preg_replace("/\r|\n/s", "\\n", $fetch_content['grp_head']);
	echo "document.edit.grp_head.value = '".str_replace("\\n\\n", "\\n", $output)."';\n";
		
	$output = preg_replace("/\r|\n/s", "\\n", $fetch_content['member_loop']);
	echo "document.edit.member_loop.value = '".str_replace("\\n\\n", "\\n", $output)."';\n";
	
	$output = preg_replace("/\r|\n/s", "\\n", $fetch_content['grp_foot']);
	echo "document.edit.grp_foot.value = '".str_replace("\\n\\n", "\\n", $output)."';\n";
	
	if ($style==1) {
		echo "document.getElementById('presetsdescription').innerHTML = thepresetsdescription;\n";
		echo "alert('jepp!');\n";
	} else {
		echo "document.getElementById('getfromdescription').innerHTML = 'Check changed fields';\n";
		echo "alert('Done');\n";
	}
	?>