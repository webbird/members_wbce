<?php

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2007, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/
$query_settings = $database->query("SELECT * FROM `".TABLE_PREFIX."mod_members_settings` WHERE `section_id` = '$section_id'");
if($query_settings->numRows() == 1) {
	$settings_fetch = $query_settings->fetchRow();
	if ($settings_fetch['delete_grp_members'] == 1) {
		//find all members and all aliases of members:

		//---------------------
		//COMING SOON

	}

 }
// Delete section from database
$database->query("DELETE FROM `".TABLE_PREFIX."mod_members_groups` WHERE `section_id` = '$section_id'");
$database->query("DELETE FROM `".TABLE_PREFIX."mod_members_settings` WHERE `section_id` = '$section_id'");

include('kram/tidy_up.inc.php');

?>