<?
$subject_val = "Re: [OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 07:57:44 2012" -->
<!-- isoreceived="20120425115744" -->
<!-- sent="Wed, 25 Apr 2012 05:57:35 -0600" -->
<!-- isosent="20120425115735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to debug segv" -->
<!-- id="7C8041A2-B58D-4156-8972-E607138974A0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F97DA77.4070903_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to debug segv<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 07:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10920.php">Alex Margolin: "[OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10920.php">Alex Margolin: "[OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange that your code didn't generate any symbols - is that a mosix thing? Have you tried just adding opal_output (so it goes to a special diagnostic output channel) statements in your code to see where the segfault is occurring?
<br>
<p>It looks like you are getting thru orte_init. You could add -mca grpcomm_base_verbose 5 to see if you are getting in/thru the modex - if so, then you are probably failing in add_procs.
<br>
<p><p>On Apr 25, 2012, at 5:05 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a segv error off my build of the trunk. I know that my BTL module is responsible (&quot;-mca btl self,tcp&quot; works, &quot;-mca btl self,mosix&quot; fails). Smaller/simpler test applications pass, NPB doesn't. Can anyone suggest how to proceed with debugging this? my attempts include some debug printouts, and GDB which appears below... What can I do next?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll appreciate any input,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/mpi/npb$ mpirun --debug-daemons -d -n 4 xterm -l -e gdb ft.S.4
</span><br>
<span class="quotelev1">&gt; [singularity:07557] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/0/0
</span><br>
<span class="quotelev1">&gt; [singularity:07557] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/0
</span><br>
<span class="quotelev1">&gt; [singularity:07557] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:07557] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] hostfile: checking hostfile /home/alex/huji/ompi/etc/openmpi-default-hostfile for nodes
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] hostfile: filtering nodes through hostfile /home/alex/huji/ompi/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_ADD_LOCAL_PROCS
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 4
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, singularity, /usr/bin/xterm, 7558)
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (1, singularity, /usr/bin/xterm, 7559)
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (2, singularity, /usr/bin/xterm, 7560)
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (3, singularity, /usr/bin/xterm, 7561)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; [singularity:07592] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1/3
</span><br>
<span class="quotelev1">&gt; [singularity:07592] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
</span><br>
<span class="quotelev1">&gt; [singularity:07592] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:07592] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from local proc [[44228,1],3]
</span><br>
<span class="quotelev1">&gt; [singularity:07592] [[44228,1],3] decode:nidmap decoding nodemap
</span><br>
<span class="quotelev1">&gt; [singularity:07592] [[44228,1],3] decode:nidmap decoding 1 nodes
</span><br>
<span class="quotelev1">&gt; [singularity:07592] [[44228,1],3] node[0].name singularity daemon 0
</span><br>
<span class="quotelev1">&gt; [singularity:07594] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1/1
</span><br>
<span class="quotelev1">&gt; [singularity:07594] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
</span><br>
<span class="quotelev1">&gt; [singularity:07594] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:07594] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from local proc [[44228,1],1]
</span><br>
<span class="quotelev1">&gt; [singularity:07594] [[44228,1],1] decode:nidmap decoding nodemap
</span><br>
<span class="quotelev1">&gt; [singularity:07594] [[44228,1],1] decode:nidmap decoding 1 nodes
</span><br>
<span class="quotelev1">&gt; [singularity:07594] [[44228,1],1] node[0].name singularity daemon 0
</span><br>
<span class="quotelev1">&gt; [singularity:07596] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1/0
</span><br>
<span class="quotelev1">&gt; [singularity:07596] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
</span><br>
<span class="quotelev1">&gt; [singularity:07596] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:07596] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from local proc [[44228,1],0]
</span><br>
<span class="quotelev1">&gt; [singularity:07596] [[44228,1],0] decode:nidmap decoding nodemap
</span><br>
<span class="quotelev1">&gt; [singularity:07596] [[44228,1],0] decode:nidmap decoding 1 nodes
</span><br>
<span class="quotelev1">&gt; [singularity:07596] [[44228,1],0] node[0].name singularity daemon 0
</span><br>
<span class="quotelev1">&gt; [singularity:07598] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1/2
</span><br>
<span class="quotelev1">&gt; [singularity:07598] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/44228/1
</span><br>
<span class="quotelev1">&gt; [singularity:07598] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:07598] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_recv: received sync+nidmap from local proc [[44228,1],2]
</span><br>
<span class="quotelev1">&gt; [singularity:07598] [[44228,1],2] decode:nidmap decoding nodemap
</span><br>
<span class="quotelev1">&gt; [singularity:07598] [[44228,1],2] decode:nidmap decoding 1 nodes
</span><br>
<span class="quotelev1">&gt; [singularity:07598] [[44228,1],2] node[0].name singularity daemon 0
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_MESSAGE_LOCAL_PROCS
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:message_local_procs delivering message to job [44228,1] tag 30
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_MESSAGE_LOCAL_PROCS
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:message_local_procs delivering message to job [44228,1] tag 30
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0]:errmgr_default_hnp.c(418) updating exit status to 1
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_EXIT_CMD
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [singularity:07557] [[44228,0],0] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 7560 on
</span><br>
<span class="quotelev1">&gt; node singularity exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [singularity:07557] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; exiting with status 1
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/mpi/npb$ grep SIGSEGV *
</span><br>
<span class="quotelev1">&gt; Xterm.log.singularity.2012.04.24.20.38.03.6992:During startup program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; Xterm.log.singularity.2012.04.25.13.55.01.7560:During startup program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/mpi/npb$ cat Xterm.log.singularity.2012.04.25.13.55.01.7560
</span><br>
<span class="quotelev1">&gt; GNU gdb (Ubuntu/Linaro 7.3-0ubuntu2) 7.3-2011.08
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2011 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-linux-gnu&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://bugs.launchpad.net/gdb-linaro/">http://bugs.launchpad.net/gdb-linaro/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /home/alex/huji/benchmarks/mpi/NPB3.3.1/NPB3.3-MPI/bin/ft.S.4...(no debugging symbols found)...done.
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; Starting program: /home/alex/huji/benchmarks/mpi/NPB3.3.1/NPB3.3-MPI/bin/ft.S.4
</span><br>
<span class="quotelev1">&gt; warning: Error disabling address space randomization: Function not implemented
</span><br>
<span class="quotelev1">&gt; During startup program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; (gdb) l
</span><br>
<span class="quotelev1">&gt; No symbol table is loaded.  Use the &quot;file&quot; command.
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; No stack.
</span><br>
<span class="quotelev1">&gt; (gdb) alex_at_singularity:~/huji/benchmarks/mpi/npb$
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10920.php">Alex Margolin: "[OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10920.php">Alex Margolin: "[OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
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
