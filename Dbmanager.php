<?php
/* include_once'IConnectInfo.php';
class Dbmanager implement IConnectInfo {
private $server = IConnectInfo::HOST;
private $currentDB = IConnectInfo::USERNAME;
private $user = IConnectInfo::DBNAME;
private $pass = IConnectInfo::PW;
private $hookup = '';
*/
class Dbmanager {
private $server = 'localhost';
private $currentDB = 'test';
private $user = 'root';
private $pass = '';
private $hookup = '';
	public function OpenDb() {
		
		$this->hookup = mysqli_connect($this->server,$this->user,$this->pass,$this->currentDB);
		if(mysqli_connect_error())
		echo die('Failed to connect');
		else
		echo $this->hookup-host_info;

		mysql_selectdb($this->currentDB);
		if(mysqli_connect_error())
		echo die('Failed to connect');

	}
	
	public function CloseDb() {
		
		mysqli_close();
	
	}
}