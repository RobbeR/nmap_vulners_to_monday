<?php

/* CONFIGURATION */
$targets = [
	"Hack.me"	=> "hack.me"
];
$mincve = 7;
$abspath = '/path/to/your_directory/';
/* CONFIGURATION */

foreach($targets as $targetName => $target) {
	$output = shell_exec($abspath . 'nmap_test.sh ' . $target . ' ' . $mincve);
	$content = $output;
	$subject = "OK - " . $targetName;
	if(substr_count($content, "CVE") > 0) {
		$subject = "ACTION REQUIRED - " . $targetName;
	}

	shell_exec('(/bin/echo "Subject: ' . $subject . '"; /bin/echo ""; /bin/echo "' . $content . '") | /usr/sbin/ssmtp your_monday_board@your_monday_workspace.monday.com');
}

?>
