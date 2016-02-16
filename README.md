# BeagleBoneBlack
Web control of on-board LED with bash command and PHP. Install lighttpd (opkg install lighttpd lighttpd-module-fastcgi)
 & PHP (opkg install php php-cgi php-cli). Be sure to disable startup services (cloud9, gateone, bonescript, etc.). This works on model revA5A with Angstrom however should be applicable to newer revs. Also one could write an entire shell script & use PHP to execute it.

