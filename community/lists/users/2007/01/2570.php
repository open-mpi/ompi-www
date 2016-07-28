<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 12:57:12 2007" -->
<!-- isoreceived="20070130175712" -->
<!-- sent="Tue, 30 Jan 2007 12:57:00 -0500" -->
<!-- isosent="20070130175700" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mutex deadlock in btl tcp" -->
<!-- id="B13CD16D-7A04-4B58-A1F3-020824C6F5C5_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45BF0486.4030509_at_irisa.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 12:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2571.php">Bert Wesarg: "[OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<li><strong>Previous message:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2563.php">Jeremy Buisson: "[OMPI users] mutex deadlock in btl tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeremy,
<br>
<p>You're right. Thanks for point it out. I do the change in the trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 30, 2007, at 3:40 AM, Jeremy Buisson wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI users list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From time to time, I experience a mutex deadlock in Open-MPI 1.1.2.  
</span><br>
<span class="quotelev1">&gt; The stack
</span><br>
<span class="quotelev1">&gt; trace is available at the end of the mail. The deadlock seems to be  
</span><br>
<span class="quotelev1">&gt; caused by
</span><br>
<span class="quotelev1">&gt; lines 118 &amp; 119 of the ompi/mca/btl/tcp/btl_tcp.c file, in function
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_add_procs:
</span><br>
<span class="quotelev1">&gt;             OBJ_RELEASE(tcp_endpoint);
</span><br>
<span class="quotelev1">&gt;             OPAL_THREAD_UNLOCK(&amp;tcp_proc-&gt;proc_lock);
</span><br>
<span class="quotelev1">&gt; (of course, I did not check whether line numbers have changed since  
</span><br>
<span class="quotelev1">&gt; 1.1.2.)
</span><br>
<span class="quotelev1">&gt; Indeed, releasing tcp_endpoint causes a call to  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_proc_remove that
</span><br>
<span class="quotelev1">&gt; attempts to acquire the mutex tcp_proc-&gt;proc_lock, which is already  
</span><br>
<span class="quotelev1">&gt; held by the
</span><br>
<span class="quotelev1">&gt; thread (OBJ_THREAD_LOCK(&amp;tcp_proc-&gt;proc_lock) at line 103 of the
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/tcp/btl_tcp.c file). Switching the two lines above (ie  
</span><br>
<span class="quotelev1">&gt; releasing
</span><br>
<span class="quotelev1">&gt; the mutex before destructing tcp_endpoint) seems to be sufficient  
</span><br>
<span class="quotelev1">&gt; to fix the
</span><br>
<span class="quotelev1">&gt; deadlock. Maybe should the changes done in the  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_proc_insert function
</span><br>
<span class="quotelev1">&gt; be reverted rather than releasing the mutex before tcp_endpoint?
</span><br>
<span class="quotelev1">&gt; As far as I looked, the problem seems to still appear in the trunk  
</span><br>
<span class="quotelev1">&gt; revision 13359.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second point. Is there any reason why MPI_Comm_spawn is restricted  
</span><br>
<span class="quotelev1">&gt; to execute
</span><br>
<span class="quotelev1">&gt; the new process(es) only on hosts listed in either the --host  
</span><br>
<span class="quotelev1">&gt; option or in the
</span><br>
<span class="quotelev1">&gt; hostfile? Or did I miss something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Jeremy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; stack trace as dumped by open-mpi (gdb version follows):
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev1">&gt; [0] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libopal.so.0  
</span><br>
<span class="quotelev1">&gt; [0x8addeb]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/tls/libpthread.so.0 [0x176e40]
</span><br>
<span class="quotelev1">&gt; [2] func:/lib/tls/libc.so.6(abort+0x1d5) [0xa294e5]
</span><br>
<span class="quotelev1">&gt; [3] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x65f8a3]
</span><br>
<span class="quotelev1">&gt; [4]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_tcp_proc_remove+0x2a)
</span><br>
<span class="quotelev1">&gt; [0x65fff0]
</span><br>
<span class="quotelev1">&gt; [5] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x65cb24]
</span><br>
<span class="quotelev1">&gt; [6] func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; [0x659465]
</span><br>
<span class="quotelev1">&gt; [7]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_btl_tcp.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_tcp_add_procs+0x10f)
</span><br>
<span class="quotelev1">&gt; [0x65927b]
</span><br>
<span class="quotelev1">&gt; [8]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; (mca_bml_r2_add_procs+0x1bb)
</span><br>
<span class="quotelev1">&gt; [0x628023]
</span><br>
<span class="quotelev1">&gt; [9]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_add_procs+0xd6)
</span><br>
<span class="quotelev1">&gt; [0x61650b]
</span><br>
<span class="quotelev1">&gt; [10]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_comm_get_rport+0x1f8)
</span><br>
<span class="quotelev1">&gt; [0xb82303]
</span><br>
<span class="quotelev1">&gt; [11]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (ompi_comm_connect_accept+0xbb)
</span><br>
<span class="quotelev1">&gt; [0xb81b43]
</span><br>
<span class="quotelev1">&gt; [12]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/soft/openmpi-1.1.2/lib/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; (PMPI_Comm_spawn+0x3de)
</span><br>
<span class="quotelev1">&gt; [0xbb671a]
</span><br>
<span class="quotelev1">&gt; [13]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/target/bin/mpi-spawner(__gxx_personality_v0 
</span><br>
<span class="quotelev1">&gt; +0x3d2)
</span><br>
<span class="quotelev1">&gt; [0x804bb8e]
</span><br>
<span class="quotelev1">&gt; [14] func:/home1/jbuisson/target/bin/mpi-spawner [0x804bdff]
</span><br>
<span class="quotelev1">&gt; [15] func:/home1/jbuisson/target/bin/mpi-spawner [0x804bfd4]
</span><br>
<span class="quotelev1">&gt; [16] func:/lib/tls/libc.so.6(__libc_start_main+0xda) [0xa1578a]
</span><br>
<span class="quotelev1">&gt; [17]
</span><br>
<span class="quotelev1">&gt; func:/home1/jbuisson/target/bin/mpi-spawner(__gxx_personality_v0+0x75)
</span><br>
<span class="quotelev1">&gt; [0x804b831]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same stack, dumped by gdb:
</span><br>
<span class="quotelev1">&gt; #0  0x00176357 in __pause_nocancel () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x008ade9b in opal_show_stackframe (signo=6, info=0xbfff9290,
</span><br>
<span class="quotelev1">&gt; p=0xbfff9310) at stacktrace.c:306
</span><br>
<span class="quotelev1">&gt; #2  &lt;signal handler called&gt;
</span><br>
<span class="quotelev1">&gt; #3  0x00a27cdf in raise () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00a294e5 in abort () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0065f8a3 in opal_mutex_lock (m=0x8ff8250) at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/threads/mutex_unix.h:104
</span><br>
<span class="quotelev1">&gt; #6  0x0065fff0 in mca_btl_tcp_proc_remove (btl_proc=0x8ff8220,
</span><br>
<span class="quotelev1">&gt; btl_endpoint=0x900eba0) at btl_tcp_proc.c:296
</span><br>
<span class="quotelev1">&gt; #7  0x0065cb24 in mca_btl_tcp_endpoint_destruct  
</span><br>
<span class="quotelev1">&gt; (endpoint=0x900eba0) at
</span><br>
<span class="quotelev1">&gt; btl_tcp_endpoint.c:99
</span><br>
<span class="quotelev1">&gt; #8  0x00659465 in opal_obj_run_destructors (object=0x900eba0) at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/class/opal_object.h:405
</span><br>
<span class="quotelev1">&gt; #9  0x0065927b in mca_btl_tcp_add_procs (btl=0x8e57c30, nprocs=1,
</span><br>
<span class="quotelev1">&gt; ompi_procs=0x8ff7ac8, peers=0x8ff7ad8, reachable=0xbfff98e4) at
</span><br>
<span class="quotelev1">&gt; btl_tcp.c:118
</span><br>
<span class="quotelev1">&gt; #10 0x00628023 in mca_bml_r2_add_procs (nprocs=1, procs=0x8ff7ac8,
</span><br>
<span class="quotelev1">&gt; bml_endpoints=0x8ff60b8, reachable=0xbfff98e4) at bml_r2.c:231
</span><br>
<span class="quotelev1">&gt; #11 0x0061650b in mca_pml_ob1_add_procs (procs=0xbfff9930,  
</span><br>
<span class="quotelev1">&gt; nprocs=1) at
</span><br>
<span class="quotelev1">&gt; pml_ob1.c:133
</span><br>
<span class="quotelev1">&gt; #12 0x00b82303 in ompi_comm_get_rport (port=0x0, send_first=0,
</span><br>
<span class="quotelev1">&gt; proc=0x8e51c70, tag=2000) at communicator/comm_dyn.c:305
</span><br>
<span class="quotelev1">&gt; #13 0x00b81b43 in ompi_comm_connect_accept (comm=0x8ff8ce0, root=0,
</span><br>
<span class="quotelev1">&gt; port=0x0, send_first=0, newcomm=0xbfff9a38, tag=2000) at
</span><br>
<span class="quotelev1">&gt; communicator/comm_dyn.c:85
</span><br>
<span class="quotelev1">&gt; #14 0x00bb671a in PMPI_Comm_spawn (command=0x8ff88f0
</span><br>
<span class="quotelev1">&gt; &quot;/home1/jbuisson/target/bin/sample-npb-ft-pp&quot;, argv=0xbfff9b40,
</span><br>
<span class="quotelev1">&gt; maxprocs=1, info=0x8ff73e0, root=0,
</span><br>
<span class="quotelev1">&gt;     comm=0x8ff8ce0, intercomm=0xbfff9aa4, array_of_errcodes=0x0) at
</span><br>
<span class="quotelev1">&gt; pcomm_spawn.c:110
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2571.php">Bert Wesarg: "[OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<li><strong>Previous message:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2563.php">Jeremy Buisson: "[OMPI users] mutex deadlock in btl tcp"</a>
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
