<?php

@session_start();
class Mobile extends WebBase{
	public $title='lonely core 1.0';
	private $vcodeSessionName='ssc_vcode_session_name';
	
	public final function info(){
		$this->display('mobile/info.php');
	}
}
