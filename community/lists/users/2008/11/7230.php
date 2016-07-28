<?
$subject_val = "Re: [OMPI users] OpenMPI and OAR issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:07:40 2008" -->
<!-- isoreceived="20081106200740" -->
<!-- sent="Thu, 6 Nov 2008 13:07:30 -0700" -->
<!-- isosent="20081106200730" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and OAR issues" -->
<!-- id="1018A8FF-DA7D-49E4-9CF0-B2250A820B36_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49134BCA.5050400_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and OAR issues<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 15:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7231.php">George Bosilca: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7229.php">Andrea Pellegrini: "[OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7229.php">Andrea Pellegrini: "[OMPI users] OpenMPI and OAR issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7231.php">George Bosilca: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7231.php">George Bosilca: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no idea what &quot;oar&quot; is, but it looks to me like the rsh launcher  
<br>
is getting confused about the remote shell it will use - I don't  
<br>
believe that the &quot;set&quot; cmd shown below is proper bash syntax, and that  
<br>
is the error that is causing the launch to fail.
<br>
<p>What remote shell should it fine? I know we don't have any &quot;oar&quot; shell- 
<br>
specific code in the system, but maybe it looks like something else?
<br>
<p>On Nov 6, 2008, at 12:55 PM, Andrea Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I'm trying to run an openmpi application on a oar cluster. I think  
</span><br>
<span class="quotelev1">&gt; the cluster is configured correctly but I still have problems when I  
</span><br>
<span class="quotelev1">&gt; run mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apellegr_at_m45-037:~$ mpirun -prefix /n/poolfs/z/home/apellegr/openmpi  
</span><br>
<span class="quotelev1">&gt; -machinefile $OAR_FILE_NODES -mca pls_rsh_agent &quot;oarsh&quot; -np 10 /n/ 
</span><br>
<span class="quotelev1">&gt; poolfs/z/home/apellegr/mpi_test/hello_world.x86 bash: -c: line 0:  
</span><br>
<span class="quotelev1">&gt; syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.4 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-040.pool --universe apellegr_at_m45-037.pool:default-universe-29482  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.2 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-038.pool --universe apellegr_at_m45-037.pool:default-universe-29482  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-038.pool failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 2.
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.3 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-039.pool --universe apellegr_at_m45-037.pool:default-universe-29482  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-039.pool failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 2.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-040.pool failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 2.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; apellegr_at_m45-037:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run it with the option &quot;-mca pls_rsh_debug 1&quot; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; apellegr_at_m45-037:~$ mpirun -prefix /n/poolfs/z/home/apellegr/openmpi  
</span><br>
<span class="quotelev1">&gt; -machinefile $OAR_FILE_NODES -mca pls_rsh_debug 1 -mca pls_rsh_agent  
</span><br>
<span class="quotelev1">&gt; &quot;oarsh&quot; -np 10 /n/poolfs/z/home/apellegr/mpi_test/hello_world.x86
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: assuming same remote shell as local  
</span><br>
<span class="quotelev1">&gt; shell
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh:     /usr/bin/oarsh &lt;template&gt; orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name &lt;template&gt; --num_procs 5 --vpid_start 0 -- 
</span><br>
<span class="quotelev1">&gt; nodename &lt;template&gt; --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev1">&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot;
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-037.pool
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: m45-037.pool is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: reset PATH: /n/poolfs/z/home/apellegr/ 
</span><br>
<span class="quotelev1">&gt; openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/ 
</span><br>
<span class="quotelev1">&gt; bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/ 
</span><br>
<span class="quotelev1">&gt; home/apellegr/openssl/bin
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: reset LD_LIBRARY_PATH: /n/poolfs/z/ 
</span><br>
<span class="quotelev1">&gt; home/apellegr/openmpi/lib
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: changing to directory /home/apellegr
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: executing: (/n/poolfs/z/home/apellegr/ 
</span><br>
<span class="quotelev1">&gt; openmpi/bin/orted) orted --bootproxy 1 --name 0.0.1 --num_procs 5 -- 
</span><br>
<span class="quotelev1">&gt; vpid_start 0 --nodename m45-037.pool --universe  
</span><br>
<span class="quotelev1">&gt; apellegr_at_m45-037.pool:default-universe-29473 --nsreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; 10.11.45.37:55477&quot; --set-sid [OAR_JOBID=597856 HOST=m45-037.pool  
</span><br>
<span class="quotelev1">&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents  
</span><br>
<span class="quotelev1">&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME=  
</span><br>
<span class="quotelev1">&gt; OAR_NODE_FILE=/var/lib/oar/597856 OAR_RESOURCE_PROPERTIES_FILE=/var/ 
</span><br>
<span class="quotelev1">&gt; lib/oar/597856_resources MAIL=/var/mail/oar PATH=/n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/ 
</span><br>
<span class="quotelev1">&gt; bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/ 
</span><br>
<span class="quotelev1">&gt; n/poolfs/z/home/apellegr/openssl/bin OAR_PROJECT_NAME=default  
</span><br>
<span class="quotelev1">&gt; OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/apellegr HOME=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SUDO_COMMAND=OAR SHLVL=2 OAR_FILE_NODES=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; OSTYPE=linux VENDOR=intel OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486  
</span><br>
<span class="quotelev1">&gt; LOGNAME=apellegr OAR_NODEFILE=/var/lib/oar/597856 OAR_RESOURCE_FILE=/ 
</span><br>
<span class="quotelev1">&gt; var/lib/oar/597856 SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/ 
</span><br>
<span class="quotelev1">&gt; home/apellegr _=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun OLDPWD=/ 
</span><br>
<span class="quotelev1">&gt; home/apellegr/openmpi OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/n/poolfs/z/home/apellegr/openmpi/lib OMPI_MCA_seed=0]
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-038.pool
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: m45-038.pool is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) /usr/bin/ 
</span><br>
<span class="quotelev1">&gt; oarsh m45-038.pool  set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.2 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-038.pool --universe apellegr_at_m45-037.pool:default-universe-29473  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool  
</span><br>
<span class="quotelev1">&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents  
</span><br>
<span class="quotelev1">&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME=  
</span><br>
<span class="quotelev1">&gt; OAR_NODE_FILE=/var/lib/oar/597856 OAR_RESOURCE_PROPERTIES_FILE=/var/ 
</span><br>
<span class="quotelev1">&gt; lib/oar/597856_resources MAIL=/var/mail/oar PATH=/usr/local/sbin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/ 
</span><br>
<span class="quotelev1">&gt; z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin  
</span><br>
<span class="quotelev1">&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2  
</span><br>
<span class="quotelev1">&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel  
</span><br>
<span class="quotelev1">&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/ 
</span><br>
<span class="quotelev1">&gt; var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/ 
</span><br>
<span class="quotelev1">&gt; poolfs/z/home/apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/ 
</span><br>
<span class="quotelev1">&gt; openmpi OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.2 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-038.pool --universe apellegr_at_m45-037.pool:default-universe-29473  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-039.pool
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-038.pool failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 2.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: m45-039.pool is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) /usr/bin/ 
</span><br>
<span class="quotelev1">&gt; oarsh m45-039.pool  set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.3 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-039.pool --universe apellegr_at_m45-037.pool:default-universe-29473  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool  
</span><br>
<span class="quotelev1">&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents  
</span><br>
<span class="quotelev1">&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME=  
</span><br>
<span class="quotelev1">&gt; OAR_NODE_FILE=/var/lib/oar/597856 OAR_RESOURCE_PROPERTIES_FILE=/var/ 
</span><br>
<span class="quotelev1">&gt; lib/oar/597856_resources MAIL=/var/mail/oar PATH=/usr/local/sbin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/ 
</span><br>
<span class="quotelev1">&gt; z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin  
</span><br>
<span class="quotelev1">&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2  
</span><br>
<span class="quotelev1">&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel  
</span><br>
<span class="quotelev1">&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/ 
</span><br>
<span class="quotelev1">&gt; var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/ 
</span><br>
<span class="quotelev1">&gt; poolfs/z/home/apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/ 
</span><br>
<span class="quotelev1">&gt; openmpi OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.3 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-039.pool --universe apellegr_at_m45-037.pool:default-universe-29473  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-040.pool
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-039.pool failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 2.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: m45-040.pool is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) /usr/bin/ 
</span><br>
<span class="quotelev1">&gt; oarsh m45-040.pool  set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.4 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-040.pool --universe apellegr_at_m45-037.pool:default-universe-29473  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool  
</span><br>
<span class="quotelev1">&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents  
</span><br>
<span class="quotelev1">&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr  
</span><br>
<span class="quotelev1">&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME=  
</span><br>
<span class="quotelev1">&gt; OAR_NODE_FILE=/var/lib/oar/597856 OAR_RESOURCE_PROPERTIES_FILE=/var/ 
</span><br>
<span class="quotelev1">&gt; lib/oar/597856_resources MAIL=/var/mail/oar PATH=/usr/local/sbin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/ 
</span><br>
<span class="quotelev1">&gt; z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin  
</span><br>
<span class="quotelev1">&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2  
</span><br>
<span class="quotelev1">&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel  
</span><br>
<span class="quotelev1">&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/ 
</span><br>
<span class="quotelev1">&gt; var/lib/oar/597856 OAR_RESOURCE_FILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; SUDO_GID=390 OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/ 
</span><br>
<span class="quotelev1">&gt; poolfs/z/home/apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/ 
</span><br>
<span class="quotelev1">&gt; openmpi OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev1">&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev1">&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev1">&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.4 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; m45-040.pool --universe apellegr_at_m45-037.pool:default-universe-29473  
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-040.pool failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 2.
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev1">&gt; file ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; apellegr_at_m45-037:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody help me?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ~Andrea
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7231.php">George Bosilca: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7229.php">Andrea Pellegrini: "[OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7229.php">Andrea Pellegrini: "[OMPI users] OpenMPI and OAR issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7231.php">George Bosilca: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7231.php">George Bosilca: "Re: [OMPI users] OpenMPI and OAR issues"</a>
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
