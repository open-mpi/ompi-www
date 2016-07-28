<?
$subject_val = "[OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 07:05:32 2012" -->
<!-- isoreceived="20120425110532" -->
<!-- sent="Wed, 25 Apr 2012 14:05:27 +0300" -->
<!-- isosent="20120425110527" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] How to debug segv" -->
<!-- id="4F97DA77.4070903_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> [OMPI devel] How to debug segv<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 07:05:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10919.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm getting a segv error off my build of the trunk. I know that my BTL 
<br>
module is responsible (&quot;-mca btl self,tcp&quot; works, &quot;-mca btl self,mosix&quot; 
<br>
fails). Smaller/simpler test applications pass, NPB doesn't. Can anyone 
<br>
suggest how to proceed with debugging this? my attempts include some 
<br>
debug printouts, and GDB which appears below... What can I do next?
<br>
<p>I'll appreciate any input,
<br>
Alex
<br>
<p>alex_at_singularity:~/huji/benchmarks/mpi/npb$ mpirun --debug-daemons -d -n 
<br>
4 xterm -l -e gdb ft.S.4
<br>
[singularity:07557] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/44228/0/0
<br>
[singularity:07557] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/0
<br>
[singularity:07557] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:07557] tmp: /tmp
<br>
[singularity:07557] [[44228,0],0] hostfile: checking hostfile 
<br>
/home/alex/huji/ompi/etc/openmpi-default-hostfile for nodes
<br>
[singularity:07557] [[44228,0],0] hostfile: filtering nodes through 
<br>
hostfile /home/alex/huji/ompi/etc/openmpi-default-hostfile
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_ADD_LOCAL_PROCS
<br>
[singularity:07557] [[44228,0],0] orted_cmd: received add_local_procs
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 4
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, singularity, /usr/bin/xterm, 7558)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, singularity, /usr/bin/xterm, 7559)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, singularity, /usr/bin/xterm, 7560)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, singularity, /usr/bin/xterm, 7561)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
[singularity:07592] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/44228/1/3
<br>
[singularity:07592] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
<br>
[singularity:07592] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:07592] tmp: /tmp
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
<br>
[singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from 
<br>
local proc [[44228,1],3]
<br>
[singularity:07592] [[44228,1],3] decode:nidmap decoding nodemap
<br>
[singularity:07592] [[44228,1],3] decode:nidmap decoding 1 nodes
<br>
[singularity:07592] [[44228,1],3] node[0].name singularity daemon 0
<br>
[singularity:07594] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/44228/1/1
<br>
[singularity:07594] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
<br>
[singularity:07594] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:07594] tmp: /tmp
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
<br>
[singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from 
<br>
local proc [[44228,1],1]
<br>
[singularity:07594] [[44228,1],1] decode:nidmap decoding nodemap
<br>
[singularity:07594] [[44228,1],1] decode:nidmap decoding 1 nodes
<br>
[singularity:07594] [[44228,1],1] node[0].name singularity daemon 0
<br>
[singularity:07596] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/44228/1/0
<br>
[singularity:07596] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
<br>
[singularity:07596] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:07596] tmp: /tmp
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
<br>
[singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from 
<br>
local proc [[44228,1],0]
<br>
[singularity:07596] [[44228,1],0] decode:nidmap decoding nodemap
<br>
[singularity:07596] [[44228,1],0] decode:nidmap decoding 1 nodes
<br>
[singularity:07596] [[44228,1],0] node[0].name singularity daemon 0
<br>
[singularity:07598] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/44228/1/2
<br>
[singularity:07598] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
<br>
[singularity:07598] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:07598] tmp: /tmp
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
<br>
[singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from 
<br>
local proc [[44228,1],2]
<br>
[singularity:07598] [[44228,1],2] decode:nidmap decoding nodemap
<br>
[singularity:07598] [[44228,1],2] decode:nidmap decoding 1 nodes
<br>
[singularity:07598] [[44228,1],2] node[0].name singularity daemon 0
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_MESSAGE_LOCAL_PROCS
<br>
[singularity:07557] [[44228,0],0] orted_cmd: received message_local_procs
<br>
[singularity:07557] [[44228,0],0] orted:comm:message_local_procs 
<br>
delivering message to job [44228,1] tag 30
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_MESSAGE_LOCAL_PROCS
<br>
[singularity:07557] [[44228,0],0] orted_cmd: received message_local_procs
<br>
[singularity:07557] [[44228,0],0] orted:comm:message_local_procs 
<br>
delivering message to job [44228,1] tag 30
<br>
[singularity:07557] [[44228,0],0]:errmgr_default_hnp.c(418) updating 
<br>
exit status to 1
<br>
[singularity:07557] [[44228,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_EXIT_CMD
<br>
[singularity:07557] [[44228,0],0] orted_cmd: received exit cmd
<br>
[singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
<br>
[singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
<br>
[singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
<br>
[singularity:07557] [[44228,0],0] orted_cmd: all routes and children 
<br>
gone - exiting
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 7560 on
<br>
node singularity exiting improperly. There are three reasons this could 
<br>
occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>--------------------------------------------------------------------------
<br>
[singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
<br>
exiting with status 1
<br>
alex_at_singularity:~/huji/benchmarks/mpi/npb$ grep SIGSEGV *
<br>
Xterm.log.singularity.2012.04.24.20.38.03.6992:During startup program 
<br>
terminated with signal SIGSEGV, Segmentation fault.
<br>
Xterm.log.singularity.2012.04.25.13.55.01.7560:During startup program 
<br>
terminated with signal SIGSEGV, Segmentation fault.
<br>
alex_at_singularity:~/huji/benchmarks/mpi/npb$ cat 
<br>
Xterm.log.singularity.2012.04.25.13.55.01.7560
<br>
GNU gdb (Ubuntu/Linaro 7.3-0ubuntu2) 7.3-2011.08
<br>
Copyright (C) 2011 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later 
<br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-linux-gnu&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://bugs.launchpad.net/gdb-linaro/">http://bugs.launchpad.net/gdb-linaro/</a>&gt;...
<br>
Reading symbols from 
<br>
/home/alex/huji/benchmarks/mpi/NPB3.3.1/NPB3.3-MPI/bin/ft.S.4...(no 
<br>
debugging symbols found)...done.
<br>
(gdb) r
<br>
Starting program: 
<br>
/home/alex/huji/benchmarks/mpi/NPB3.3.1/NPB3.3-MPI/bin/ft.S.4
<br>
warning: Error disabling address space randomization: Function not 
<br>
implemented
<br>
During startup program terminated with signal SIGSEGV, Segmentation fault.
<br>
(gdb) l
<br>
No symbol table is loaded.  Use the &quot;file&quot; command.
<br>
(gdb) bt
<br>
No stack.
<br>
(gdb) alex_at_singularity:~/huji/benchmarks/mpi/npb$
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10919.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10921.php">Ralph Castain: "Re: [OMPI devel] How to debug segv"</a>
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
