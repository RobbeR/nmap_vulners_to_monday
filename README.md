# nmap_vulners_to_monday

A small tool to create an NMap Vulners (https://github.com/vulnersCom/nmap-vulners) security scan and create a report Item in Monday.com.

## Prerequisites:
1. Install and config SSMTP (https://wiki.archlinux.org/index.php/SSMTP). You can use a Gmail account in the /etc/ssmtp/ssmtp.conf file, for example:
```
root=your_monday_user@gmail.com
mailhub=smtp.gmail.com:465
FromLineOverride=YES
AuthUser=your_monday_user@gmail.com
AuthPass=password
UseTLS=YES
```
2. Add the your_monday_user@gmail.com to your Monday workspace and assign that user(normal or guest) to the board.


## Usage:
1. Setup the configuration inside the runner.php file.
2. Run /usr/bin/php /path/to/your_directory/runner.php
3. Optionally you can add it to your crontab.
