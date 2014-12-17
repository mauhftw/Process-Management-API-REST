******************************
Process managment API 
******************************

1) Shows all processes running (like ps -faxu)

2) Run a process

3) Repriorize a current process

4) Kill a current process 

*******************
INSTRUCTIONS
*******************

user: admin
password supersecret

1) show all processes
$curl -i --user admin:supersecret localhost/index.php/api/processes/


2) Run a process
$curl -i --user admin:supersecret -d 'cmd=nombre_comando' localhost/index.php/api/processes/


3) Repriorize a process
$curl -i -X PUT --user admin:supersecret -d 'prio=n' localhost/index.php/api/processes/numero_pid/


4) Kill a process
   $curl -i -X DELETE --user admin:supersecret localhost/index.php/api/processes/numero_pid



