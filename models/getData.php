<?php
function getData($purpose){
	if(isset($_SESSION['nUserID'])){
		$userInfos = "SELECT strFirstName, strProfilePhoto, strCoverPhoto FROM users WHERE id=".$_SESSION['nUserID'];
		$userHubsIDs = "SELECT GROUP_CONCAT(nHubID) FROM hubs_users WHERE nUserID=".$_SESSION['nUserID'];
		$hubsName = "SELECT strName FROM hubs WHERE hubs.id IN (".$userHubsIDs.")";
		$hubsPhotosIDs = "SELECT GROUP_CONCAT(nPhotoID) FROM users_posts WHERE nHubID IN ('".$userHubsIDs."')";
		$arrUserLastFeeds = "SELECT * FROM feeds WHERE nPhotoID IN ('".$hubsPhotosIDs."') ORDER BY nUTCsubmited DESC LIMIT 5";
		switch ($purpose){
			case 'profile':
				$arrData = Connect::runSql("singleData", $userInfos);
				break;
			case 'allHubs':
				$arrData = Connect::runSql("getData", $hubsName);
				break;
			default:
				break;
		}
		return $arrData;
	}else{
		return;
	}
}

?>