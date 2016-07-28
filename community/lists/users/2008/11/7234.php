<?
$subject_val = "Re: [OMPI users] OpenMPI and OAR issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:47:58 2008" -->
<!-- isoreceived="20081106204758" -->
<!-- sent="Thu, 06 Nov 2008 15:47:45 -0500" -->
<!-- isosent="20081106204745" -->
<!-- name="Andrea Pellegrini" -->
<!-- email="andrea.pellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and OAR issues" -->
<!-- id="491357F1.7030304_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B189131D-B189-4B3D-AD1B-83EB70648413_at_lanl.gov" -->
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
<strong>From:</strong> Andrea Pellegrini (<em>andrea.pellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 15:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Previous message:</strong> <a href="7233.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7233.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks guys!
<br>
I finally fixed my problem!!!
<br>
<p>apellegr_at_m45-039:~$ mpirun -prefix ~/openmpi -machinefile 
<br>
$OAR_FILE_NODES -mca pls_rsh_assume_same_shell 0 -mca pls_rsh_agent 
<br>
&quot;oarsh&quot; -np 2 /n/poolfs/z/home/apellegr/mpi_test/hello_world.x86
<br>
Warning: Permanently added '[m45-039.pool]:6667' (RSA) to the list of 
<br>
known hosts.
<br>
m45-039.pool: hello world from rank 0
<br>
m45-040.pool: hello world from rank 1
<br>
apellegr_at_m45-039:~$
<br>
<p>It was a problem with the consoles.
<br>
Thanks again!
<br>
~Andrea
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks for the OAR explanation!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry - I should have been clearer in my comment. I was trying to 
</span><br>
<span class="quotelev1">&gt; indicate that the cmd starting with &quot;set&quot; is indicating a bash syntax 
</span><br>
<span class="quotelev1">&gt; error, and that is why the launch fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rsh launcher uses a little &quot;probe&quot; technique to try and guess the 
</span><br>
<span class="quotelev1">&gt; remote shell. Apparently, it thinks this is tcsh, while the remote 
</span><br>
<span class="quotelev1">&gt; node thinks it will use bash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you running this from bash? If so, you could perhaps resolve the 
</span><br>
<span class="quotelev1">&gt; problem by specifying -mca pls_rsh_assume_same_shell 1 on your command 
</span><br>
<span class="quotelev1">&gt; line. This will override the probe and force the system to use the 
</span><br>
<span class="quotelev1">&gt; syntax appropriate to the same shell you used for mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you could set -mca pls_rsh_debug 1 to see all the debug 
</span><br>
<span class="quotelev1">&gt; output as the system probes your remote shell. Might help you figure 
</span><br>
<span class="quotelev1">&gt; out why it thinks it is tcsh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2008, at 1:31 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OAR is the batch scheduler used on the Grid5K platform. As far as I 
</span><br>
<span class="quotelev2">&gt;&gt; know, set is a basic shell internal command, and it is understood by 
</span><br>
<span class="quotelev2">&gt;&gt; all shells. The problem here seems to be that somehow we're using 
</span><br>
<span class="quotelev2">&gt;&gt; bash, but with a tcsh shell code (because setenv is definitively not 
</span><br>
<span class="quotelev2">&gt;&gt; something that bash understand).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 6, 2008, at 3:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no idea what &quot;oar&quot; is, but it looks to me like the rsh 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launcher is getting confused about the remote shell it will use - I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't believe that the &quot;set&quot; cmd shown below is proper bash syntax, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that is the error that is causing the launch to fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What remote shell should it fine? I know we don't have any &quot;oar&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell-specific code in the system, but maybe it looks like something 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 6, 2008, at 12:55 PM, Andrea Pellegrini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to run an openmpi application on a oar cluster. I think 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the cluster is configured correctly but I still have problems when 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; apellegr_at_m45-037:~$ mpirun -prefix 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi -machinefile $OAR_FILE_NODES -mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_rsh_agent &quot;oarsh&quot; -np 10 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/mpi_test/hello_world.x86 bash: -c: line 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: ` set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.4 --num_procs 5 --vpid_start 0 --nodename m45-040.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29482 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: ` set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.2 --num_procs 5 --vpid_start 0 --nodename m45-038.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29482 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-038.pool failed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: There may be more information available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: ` set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.3 --num_procs 5 --vpid_start 0 --nodename m45-039.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29482 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-039.pool failed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: There may be more information available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp.c at line 90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-040.pool failed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: There may be more information available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; apellegr_at_m45-037:~$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I run it with the option &quot;-mca pls_rsh_debug 1&quot; I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; apellegr_at_m45-037:~$ mpirun -prefix 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi -machinefile $OAR_FILE_NODES -mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_rsh_debug 1 -mca pls_rsh_agent &quot;oarsh&quot; -np 10 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/mpi_test/hello_world.x86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: assuming same remote shell as local 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: final template argv:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh:     /usr/bin/oarsh &lt;template&gt; orted 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 5 --vpid_start 0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --nodename &lt;template&gt; --universe 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-037.pool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-037.pool is a LOCAL node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: reset PATH: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: reset LD_LIBRARY_PATH: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: changing to directory /home/apellegr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (/n/poolfs/z/home/apellegr/openmpi/bin/orted) orted --bootproxy 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --name 0.0.1 --num_procs 5 --vpid_start 0 --nodename m45-037.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --set-sid [OAR_JOBID=597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HOST=m45-037.pool TERM=xterm SHELL=/bin/tcsh 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_WORKING_DIRECTORY=/home/apellegr SSH_CLIENT=10.11.0.4 50481 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6667 OAR_USER=apellegr GROUP=csestudents USER=apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SUDO_USER=oar OAR_WORKDIR=/home/apellegr SUDO_UID=30143 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODE_FILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAIL=/var/mail/oar 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/n/poolfs/z/home/apellegr/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODEFILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OLDPWD=/home/apellegr/openmpi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/n/poolfs/z/home/apellegr/openmpi/lib OMPI_MCA_seed=0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-038.pool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-038.pool is a REMOTE node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/oarsh m45-038.pool  set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.2 --num_procs 5 --vpid_start 0 --nodename m45-038.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODE_FILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAIL=/var/mail/oar 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODEFILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OLDPWD=/home/apellegr/openmpi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: ` set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.2 --num_procs 5 --vpid_start 0 --nodename m45-038.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-039.pool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-038.pool failed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: There may be more information available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-039.pool is a REMOTE node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/oarsh m45-039.pool  set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.3 --num_procs 5 --vpid_start 0 --nodename m45-039.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODE_FILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAIL=/var/mail/oar 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODEFILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OLDPWD=/home/apellegr/openmpi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: ` set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.3 --num_procs 5 --vpid_start 0 --nodename m45-039.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-040.pool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-039.pool failed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: There may be more information available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-040.pool is a REMOTE node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/oarsh m45-040.pool  set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.4 --num_procs 5 --vpid_start 0 --nodename m45-040.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856 HOST=m45-037.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME= 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODE_FILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAIL=/var/mail/oar 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/poolfs/z/home/apellegr/openssl/bin 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_PROJECT_NAME=default OAR_JOB_WALLTIME_SECONDS=7200 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PWD=/home/apellegr HOME=/home/apellegr SUDO_COMMAND=OAR SHLVL=2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_FILE_NODES=/var/lib/oar/597856 OSTYPE=linux VENDOR=intel 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_WALLTIME=2:0:0 MACHTYPE=i486 LOGNAME=apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_NODEFILE=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _=/n/poolfs/z/home/apellegr/openmpi/bin/mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OLDPWD=/home/apellegr/openmpi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh OMPI_MCA_seed=0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash: -c: line 0: ` set path = ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin $path ) ; if ( 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /n/poolfs/z/home/apellegr/openmpi/bin/orted --bootproxy 1 --name 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.0.4 --num_procs 5 --vpid_start 0 --nodename m45-040.pool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --universe apellegr_at_m45-037.pool:default-universe-29473 --nsreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-040.pool failed to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: There may be more information available 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; apellegr_at_m45-037:~$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can anybody help me?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~Andrea
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Previous message:</strong> <a href="7233.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7233.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- nextthread="start" -->
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
