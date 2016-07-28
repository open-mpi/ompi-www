<?
$subject_val = "[OMPI users] OpenMPI and OAR issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 14:56:07 2008" -->
<!-- isoreceived="20081106195607" -->
<!-- sent="Thu, 06 Nov 2008 14:55:54 -0500" -->
<!-- isosent="20081106195554" -->
<!-- name="Andrea Pellegrini" -->
<!-- email="andrea.pellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and OAR issues" -->
<!-- id="49134BCA.5050400_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] OpenMPI and OAR issues<br>
<strong>From:</strong> Andrea Pellegrini (<em>andrea.pellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 14:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I'm trying to run an openmpi application on a oar cluster. I think the 
<br>
cluster is configured correctly but I still have problems when I run 
<br>
mpirun:
<br>
<p>apellegr_at_m45-037:~$ mpirun -prefix /n/poolfs/z/home/apellegr/openmpi 
<br>
-machinefile $OAR_FILE_NODES -mca pls_rsh_agent &quot;oarsh&quot; -np 10 
<br>
/n/poolfs/z/home/apellegr/mpi_test/hello_world.x86 bash: -c: line 0: 
<br>
syntax error near unexpected token `('
<br>
bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/bin 
<br>
$path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( 
<br>
$?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) 
<br>
setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.4 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-040.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29482 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:36790&quot;'
<br>
bash: -c: line 0: syntax error near unexpected token `('
<br>
bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/bin 
<br>
$path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( 
<br>
$?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) 
<br>
setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.2 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-038.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29482 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:36790&quot;'
<br>
[m45-037.pool:29482] ERROR: A daemon on node m45-038.pool failed to 
<br>
start as expected.
<br>
[m45-037.pool:29482] ERROR: There may be more information available from
<br>
[m45-037.pool:29482] ERROR: the remote shell (see above).
<br>
[m45-037.pool:29482] ERROR: The daemon exited unexpectedly with status 2.
<br>
bash: -c: line 0: syntax error near unexpected token `('
<br>
bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/bin 
<br>
$path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( 
<br>
$?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) 
<br>
setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.3 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-039.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29482 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:36790&quot;'
<br>
[m45-037.pool:29482] ERROR: A daemon on node m45-039.pool failed to 
<br>
start as expected.
<br>
[m45-037.pool:29482] ERROR: There may be more information available from
<br>
[m45-037.pool:29482] ERROR: the remote shell (see above).
<br>
[m45-037.pool:29482] ERROR: The daemon exited unexpectedly with status 2.
<br>
[m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 275
<br>
[m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1158
<br>
[m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp.c at line 90
<br>
[m45-037.pool:29482] ERROR: A daemon on node m45-040.pool failed to 
<br>
start as expected.
<br>
[m45-037.pool:29482] ERROR: There may be more information available from
<br>
[m45-037.pool:29482] ERROR: the remote shell (see above).
<br>
[m45-037.pool:29482] ERROR: The daemon exited unexpectedly with status 2.
<br>
[m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
<br>
[m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. 
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
apellegr_at_m45-037:~$
<br>
<p><p>If I run it with the option &quot;-mca pls_rsh_debug 1&quot; I get:
<br>
<p>apellegr_at_m45-037:~$ mpirun -prefix /n/poolfs/z/home/apellegr/openmpi 
<br>
-machinefile $OAR_FILE_NODES -mca pls_rsh_debug 1 -mca pls_rsh_agent 
<br>
&quot;oarsh&quot; -np 10 /n/poolfs/z/home/apellegr/mpi_test/hello_world.x86
<br>
[m45-037.pool:29473] pls:rsh: local shell: 2 (tcsh)
<br>
[m45-037.pool:29473] pls:rsh: assuming same remote shell as local shell
<br>
[m45-037.pool:29473] pls:rsh: remote shell: 2 (tcsh)
<br>
[m45-037.pool:29473] pls:rsh: final template argv:
<br>
[m45-037.pool:29473] pls:rsh:     /usr/bin/oarsh &lt;template&gt; orted 
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 5 --vpid_start 0 --nodename 
<br>
&lt;template&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 
<br>
--nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot;
<br>
[m45-037.pool:29473] pls:rsh: launching on node m45-037.pool
<br>
[m45-037.pool:29473] pls:rsh: m45-037.pool is a LOCAL node
<br>
[m45-037.pool:29473] pls:rsh: reset PATH: 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
<br>
<p>[m45-037.pool:29473] pls:rsh: reset LD_LIBRARY_PATH: 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib
<br>
[m45-037.pool:29473] pls:rsh: changing to directory /home/apellegr
<br>
[m45-037.pool:29473] pls:rsh: executing: 
<br>
(/n/poolfs/z/home/apellegr/openmpi/bin/orted) orted --bootproxy 1 --name 
<br>
0.0.1 --num_procs 5 --vpid_start 0 --nodename m45-037.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --set-sid [OAR_JOBID=597856 
<br>
HOST=m45-037.pool TERM=xterm SHELL=/bin/tcsh 
<br>
OAR_WORKING_DIRECTORY=/home/apellegr SSH_CLIENT=10.11.0.4 50481 6667 
<br>
OAR_USER=apellegr GROUP=csestudents USER=apellegr SUDO_USER=oar 
<br>
OAR_WORKDIR=/home/apellegr SUDO_UID=30143 HOSTTYPE=i486-linux 
<br>
USERNAME=apellegr OAR_JOB_NAME= OAR_NODE_FILE=/var/lib/oar/597856 
<br>
OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
<br>
MAIL=/var/mail/oar 
<br>
PATH=/n/poolfs/z/home/apellegr/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
<br>
OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
<br>
PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
<br>
OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
<br>
OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
<br>
OAR_NODEFILE=/var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856 
<br>
SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
<br>
_=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
<br>
OLDPWD=/home/apellegr/openmpi 
<br>
OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 OMPI_MCA_pls_rsh_debug=1 
<br>
OMPI_MCA_pls_rsh_agent=oarsh 
<br>
LD_LIBRARY_PATH=/n/poolfs/z/home/apellegr/openmpi/lib OMPI_MCA_seed=0]
<br>
[m45-037.pool:29473] pls:rsh: launching on node m45-038.pool
<br>
[m45-037.pool:29473] pls:rsh: m45-038.pool is a REMOTE node
<br>
[m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) 
<br>
/usr/bin/oarsh m45-038.pool  set path = ( 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( $?LD_LIBRARY_PATH 
<br>
== 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH == 0 ) setenv 
<br>
LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib ; if ( 
<br>
$?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.2 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-038.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool 
<br>
TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr 
<br>
SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents 
<br>
USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr SUDO_UID=30143 
<br>
HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
<br>
OAR_NODE_FILE=/var/lib/oar/597856 
<br>
OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
<br>
MAIL=/var/mail/oar 
<br>
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
<br>
OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
<br>
PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
<br>
OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
<br>
OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
<br>
OAR_NODEFILE=/var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856 
<br>
SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
<br>
_=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
<br>
OLDPWD=/home/apellegr/openmpi 
<br>
OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 OMPI_MCA_pls_rsh_debug=1 
<br>
OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
<br>
bash: -c: line 0: syntax error near unexpected token `('
<br>
bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/bin 
<br>
$path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( 
<br>
$?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) 
<br>
setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.2 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-038.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot;'
<br>
[m45-037.pool:29473] pls:rsh: launching on node m45-039.pool
<br>
[m45-037.pool:29473] ERROR: A daemon on node m45-038.pool failed to 
<br>
start as expected.
<br>
[m45-037.pool:29473] ERROR: There may be more information available from
<br>
[m45-037.pool:29473] ERROR: the remote shell (see above).
<br>
[m45-037.pool:29473] ERROR: The daemon exited unexpectedly with status 2.
<br>
[m45-037.pool:29473] pls:rsh: m45-039.pool is a REMOTE node
<br>
[m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) 
<br>
/usr/bin/oarsh m45-039.pool  set path = ( 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( $?LD_LIBRARY_PATH 
<br>
== 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH == 0 ) setenv 
<br>
LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib ; if ( 
<br>
$?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.3 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-039.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool 
<br>
TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr 
<br>
SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents 
<br>
USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr SUDO_UID=30143 
<br>
HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
<br>
OAR_NODE_FILE=/var/lib/oar/597856 
<br>
OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
<br>
MAIL=/var/mail/oar 
<br>
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
<br>
OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
<br>
PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
<br>
OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
<br>
OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
<br>
OAR_NODEFILE=/var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856 
<br>
SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
<br>
_=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
<br>
OLDPWD=/home/apellegr/openmpi 
<br>
OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 OMPI_MCA_pls_rsh_debug=1 
<br>
OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
<br>
bash: -c: line 0: syntax error near unexpected token `('
<br>
bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/bin 
<br>
$path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( 
<br>
$?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) 
<br>
setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.3 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-039.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot;'
<br>
[m45-037.pool:29473] pls:rsh: launching on node m45-040.pool
<br>
[m45-037.pool:29473] ERROR: A daemon on node m45-039.pool failed to 
<br>
start as expected.
<br>
[m45-037.pool:29473] ERROR: There may be more information available from
<br>
[m45-037.pool:29473] ERROR: the remote shell (see above).
<br>
[m45-037.pool:29473] ERROR: The daemon exited unexpectedly with status 2.
<br>
[m45-037.pool:29473] pls:rsh: m45-040.pool is a REMOTE node
<br>
[m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) 
<br>
/usr/bin/oarsh m45-040.pool  set path = ( 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( $?LD_LIBRARY_PATH 
<br>
== 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH == 0 ) setenv 
<br>
LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib ; if ( 
<br>
$?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.4 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-040.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool 
<br>
TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr 
<br>
SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents 
<br>
USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr SUDO_UID=30143 
<br>
HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
<br>
OAR_NODE_FILE=/var/lib/oar/597856 
<br>
OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
<br>
MAIL=/var/mail/oar 
<br>
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
<br>
OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
<br>
PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
<br>
OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
<br>
OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
<br>
OAR_NODEFILE=/var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856 
<br>
SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
<br>
_=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
<br>
OLDPWD=/home/apellegr/openmpi 
<br>
OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 OMPI_MCA_pls_rsh_debug=1 
<br>
OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
<br>
bash: -c: line 0: syntax error near unexpected token `('
<br>
bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/bin 
<br>
$path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( 
<br>
$?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) 
<br>
setenv LD_LIBRARY_PATH 
<br>
/n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
<br>
/n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 0.0.4 
<br>
--num_procs 5 --vpid_start 0 --nodename m45-040.pool --universe 
<br>
apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://10.11.45.37:55477&quot;'
<br>
[m45-037.pool:29473] ERROR: A daemon on node m45-040.pool failed to 
<br>
start as expected.
<br>
[m45-037.pool:29473] ERROR: There may be more information available from
<br>
[m45-037.pool:29473] ERROR: the remote shell (see above).
<br>
[m45-037.pool:29473] ERROR: The daemon exited unexpectedly with status 2.
<br>
[m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
<br>
[m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
<br>
../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. 
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
apellegr_at_m45-037:~$
<br>
<p>Can anybody help me?
<br>
Thanks,
<br>
~Andrea
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
