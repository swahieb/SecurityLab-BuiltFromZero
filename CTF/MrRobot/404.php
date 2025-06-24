This image shows the 404.php file of the Twenty Fifteen WordPress theme being edited through the dashboard.

Purpose:

The 404.php page is commonly writable via the admin dashboard and is used here to inject a PHP reverse shell.

By replacing or appending the file contents with a reverse shell payload (e.g. from Pentestmonkey), it allows for a remote shell once triggered in a browser.

Steps to Take:

Navigate to Appearance > Editor inside the WordPress admin panel.

Select the 404 Template (404.php) file.

Paste reverse shell PHP code and save changes.

Trigger the shell by visiting:
http://10.38.1.111/wp-content/themes/twentyfifteen/404.php

Takeaway:
Modifying theme files in WordPress is a reliable way to gain remote code execution when admin credentials are available.

