<?php

require('rcs_function.php');

// get all the variables from the environmental variable
$agent_hostname = getenv('UPTIME_HOSTNAME');
$agent_port     = getenv('UPTIME_PORT');
$agent_password = getenv('UPTIME_PASSWORD');
$remote_script  = "/opt/uptime-agent/scripts/wpar-monitor.sh";


$agent_output = uptime_remote_custom_monitor($agent_hostname, $agent_port, $agent_password, $remote_script);
if (strlen($agent_output) == 0) {
	print "Error: No lines returned from agent. Make sure the script is configured properly on the remote system.";
	exit(1);
}
if ($agent_output == "ERR")  {
	print "Error: Output received: 'ERR'. The agent may not be configured correctly. Check the password?";
	exit(2);
}
if ((strstr($agent_output, "ERROR")) != "")  {
	print "Error: Some commands are not available on the agent.";
	print $agent_output;
	exit(2);
}

print $agent_output;
exit(0);

?>