<?php

function contains($str, array $arr)
{
	foreach($arr as $a) {
		if (stripos($str, $a) !== false) return true;
	}
	return false;
}

	$command = $_POST["command"];

	if(! empty($command))
	{
		//cant use commands
		$cmds = array("cat", "more", "tail", "nano", "vim", "vi", "ls -a", "ls -al", "rm", "rmdir", "su", "..", "/", "python", "who", "mkdir", "touch", "pwd");
	//	$cmds = array("head", "ping", "ls");

		
		if(contains($command, $cmds)) {
			$result = array(
				"message" => "Command disabled");
			
		}
		else {
		    $output = shell_exec("$command");
			$result = array(
				"message" => "<div class='success-msg' role='alert'><pre>$output</pre></div>");	
				
		}
	}       
	else
        {
                $result = array(
                        "message" => "Enter command");
        }
?>
