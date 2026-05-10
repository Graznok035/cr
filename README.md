Kasutusel on WSL2 kasutajaga martintursk@California

sudo apt update

sudo apt install mariadb-server

systemctl status mariadb
● mariadb.service - MariaDB 10.11.14 database server
     Loaded: loaded (/usr/lib/systemd/system/mariadb.service; enabled; preset: enabled)

sudo mysql_secure_installation
 
OK, successfully used password, moving on...

You already have your root account protected, so you can safely answer 'n'.

Switch to unix_socket authentication [Y/n] n

kuna programm ütleb, et on okei panna ei siis panin n

You already have your root account protected, so you can safely answer 'n'.
Change the root password? [Y/n] n

Remove anonymous users? [Y/n] Y

Disallow root login remotely? [Y/n] Y

Remove test database and access to it? [Y/n] Y

Failis /etc/mysql/mariadb.conf.d/50-server.cnf kus on read tekstiga

 Instead of skip-networking the default is now to listen only on
 localhost which is more compatible and is not less secure.

lisasin read

bind-address            = 127.0.0.1
local-infile = 0
skip-name-resolve

sudo systemctl restart mariadb

ss -tlnp | grep 3306
LISTEN 0      80          127.0.0.1:3306      0.0.0.0:*

sudo mariadb -u root

SHOW VARIABLES LIKE 'bind_address';
+---------------+-----------+
| Variable_name | Value     |
+---------------+-----------+
| bind_address  | 127.0.0.1 |
+---------------+-----------+
1 row in set (0.001 sec)


<img width="805" height="385" alt="image" src="https://github.com/user-attachments/assets/7a6112ce-928b-41ba-9d1f-a7d1eb8422b1" />
