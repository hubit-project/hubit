<?php

class Connect
{
	static function runSql($value, $sql)
	{
		$con = mysqli_connect("192.185.103.161","goki_hubit","1234ABCD*","goki_hubit");

		$result = mysqli_query($con, $sql);

		switch ($value){
			case "getData":
				while ($row = mysqli_fetch_assoc($result)) 
				{
					$arrResult[] = $row;
				}
				return $arrResult;
				break;

			case "saveData":
				$lastID = mysqli_insert_id($con);

				return $lastID;
				break;
			
			case "singleData":
				return mysqli_fetch_assoc($result);
				break;

			default:		 
		}

		mysqli_close($con);

		return $result;	
	}

	static function uploadImg($fileImg)
	{
		$directoryFiles = "assets";

		$serverPlaceName = "../".$directoryFiles."/".$_FILES[$fileImg]["name"];

		move_uploaded_file($_FILES[$fileImg]["tmp_name"], $serverPlaceName);

		return $_FILES[$fileImg]["name"];
	}

	static function getGlobals($type)
	{
	    $arrGlobal = Connect::runSql("getData", "SELECT * FROM globals WHERE strName='".$type."'");
		return $arrGlobal[0]["strValue"];
	}
}

?>