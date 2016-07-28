<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 08:12:37 2007" -->
<!-- isoreceived="20070917121237" -->
<!-- sent="Mon, 17 Sep 2007 08:08:52 -0400" -->
<!-- isosent="20070917120852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv" -->
<!-- id="E0FE510F-9FF1-44B2-96EA-21A5EC85B1C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="572410.11619.qm_at_web52205.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 08:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4025.php">attitude_man_at_[hidden]: "[OMPI users] [SPAM:### 81%] simulations for SLES 10"</a>
<li><strong>Previous message:</strong> <a href="4023.php">cutecalin: "[OMPI users] Do we like the same books?"</a>
<li><strong>In reply to:</strong> <a href="3993.php">Daniel Rozenbaum: "[OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like we have a missed corner case of the OMPI run-time not  
<br>
cleaning properly.  I know one case like this came up recently (if an  
<br>
app calls exit() without calling MPI_FINALIZE, OMPI v1.2.x hangs) and  
<br>
Ralph is working on it.
<br>
<p>This could well be what is happening here...?
<br>
<p>Do you know how your process is exiting?  If a process dies via  
<br>
signal, OMPI *should* be seeing that and cleaning up the whole job  
<br>
properly.
<br>
<p><p><p>On Sep 12, 2007, at 10:50 PM, Daniel Rozenbaum wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on an MPI application for which I recently started  
</span><br>
<span class="quotelev1">&gt; using Open MPI instead of LAM/MPI. Both with Open MPI and LAM/MPI  
</span><br>
<span class="quotelev1">&gt; it mostly runs ok, but there're a number of cases under which the  
</span><br>
<span class="quotelev1">&gt; application terminates abnormally when using LAM/MPI, and hangs  
</span><br>
<span class="quotelev1">&gt; when using Open MPI. I haven't been able to reduce the example  
</span><br>
<span class="quotelev1">&gt; reproducing the problem, so every time it takes about an hour of  
</span><br>
<span class="quotelev1">&gt; running time before the application hangs. It hangs right before  
</span><br>
<span class="quotelev1">&gt; it's supposed to end properly. The master and all the slave  
</span><br>
<span class="quotelev1">&gt; processes are showing in &quot;top&quot; consuming 100% CPU. The application  
</span><br>
<span class="quotelev1">&gt; just hangs there like that until I interrupt it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orterun --prefix /path/to/openmpi -mca btl tcp,self -x PATH -x  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH --hostfile hostfile1 /path/to/app_executable &lt;app  
</span><br>
<span class="quotelev1">&gt; params&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostfile1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; host1 slots=3
</span><br>
<span class="quotelev1">&gt; host2 slots=4
</span><br>
<span class="quotelev1">&gt; host3 slots=4
</span><br>
<span class="quotelev1">&gt; host4 slots=4
</span><br>
<span class="quotelev1">&gt; host5 slots=4
</span><br>
<span class="quotelev1">&gt; host6 slots=4
</span><br>
<span class="quotelev1">&gt; host7 slots=4
</span><br>
<span class="quotelev1">&gt; host8 slots=4
</span><br>
<span class="quotelev1">&gt; host9 slots=4
</span><br>
<span class="quotelev1">&gt; host10 slots=4
</span><br>
<span class="quotelev1">&gt; host11 slots=4
</span><br>
<span class="quotelev1">&gt; host12 slots=4
</span><br>
<span class="quotelev1">&gt; host13 slots=4
</span><br>
<span class="quotelev1">&gt; host14 slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each host is a dual-CPU dual-core Intel box running Red Hat  
</span><br>
<span class="quotelev1">&gt; Enterprise Server 4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I caught the following error messages on app's stderr during the run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev1">&gt; [host8][0,1,29][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=113
</span><br>
<span class="quotelev1">&gt; &lt;later&gt;
</span><br>
<span class="quotelev1">&gt; [host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excerpts from strace output, and ompi_info are attached below.
</span><br>
<span class="quotelev1">&gt; Any advice would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strace on the orterun process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; poll([{fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=5,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=10, events=POLLIN}, {fd=11, events=POLLIN}, {fd=12,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=13, events=POLLIN}, {fd=14, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=15, events=POLLIN}, {fd=16, events=POLLIN}, {fd=17,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=18, events=POLLIN}, {fd=19, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=20, events=POLLIN}, {fd=0, events=POLLIN}, {fd=21,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=22, events=POLLIN}, {fd=23, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=24, events=POLLIN}, {fd=25, events=POLLIN}, {fd=26,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=27, events=POLLIN}, {fd=28, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=29, events=POLLIN}, {fd=30, events=POLLIN}, {fd=31,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=34, events=POLLIN}, {fd=33, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=32, events=POLLIN}, {fd=35, events=POLLIN}, ...], 71, 1000) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; sched_yield()                           = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD],  
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=5, events=POLL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strace on the master process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=14, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=16, events=POLLIN}, {fd=15, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=20, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=23, events=POLLIN}, {fd=67, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=25, events=POLLIN}, {fd=66, events=POLLIN}, {fd=26,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=27, events=POLLIN}, {fd=28, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=29, events=POLLIN}, {fd=30, events=POLLIN}, {fd=31,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=32, events=POLLIN}, {fd=33, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=34, events=POLLIN}, {fd=35, events=POLLIN}, {fd=36,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=37, events=POLLIN}, {fd=38, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=39, events=POLLIN}, {fd=40, events=POLLIN}, ...], 56, 0) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=14, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=16, events=POLLIN}, {fd=15, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=20, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=23, events=POLLIN}, {fd=67, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=25, events=POLLIN}, {fd=66, events=POLLIN}, {fd=26,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=27, events=POLLIN}, {fd=28, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=29, events=POLLIN}, {fd=30, events=POLLIN}, {fd=31,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=32, events=POLLIN}, {fd=33, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=34, events=POLLIN}, {fd=35, events=POLLIN}, {fd=36,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=37, events=POLLIN}, {fd=38, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=39, events=POLLIN}, {fd=40, events=POLLIN}, ...], 56, 0) = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; strace on one of the slaves:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=11, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=15,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=14, events=POLLIN}, {fd=16, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=17, events=POLLIN}, {fd=18, events=POLLIN}, {fd=19,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=20, events=POLLIN}, {fd=21, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=22, events=POLLIN}, {fd=23, events=POLLIN}], 17, 0) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=11, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=15,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=14, events=POLLIN}, {fd=16, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=17, events=POLLIN}, {fd=18, events=POLLIN}, {fd=19,  
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=20, events=POLLIN}, {fd=21, events=POLLIN},  
</span><br>
<span class="quotelev1">&gt; {fd=22, events=POLLIN}, {fd=23, events=POLLIN}], 17, 0) = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.3
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.3
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.3
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r15136
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3,  
</span><br>
<span class="quotelev1">&gt; Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /path/to/openmpi
</span><br>
<span class="quotelev1">&gt;                   Bindir: /path/to/openmpi/bin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /path/to/openmpi/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /path/to/openmpi/include
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /path/to/openmpi/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /path/to/openmpi/etc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: user1
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Sep 11 15:57:23 EDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: host1.domain.com
</span><br>
<span class="quotelev1">&gt;                 Built by: user1
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Sep 11 16:09:44 EDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: host1.domain.com
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -finline-functions -fno- 
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/home/user1/.openmpi/mca-params.conf:/path/to/openmpi/etc/ 
</span><br>
<span class="quotelev1">&gt; openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files  
</span><br>
<span class="quotelev1">&gt; containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/path/to/openmpi/lib/openmpi:/home/user1/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components  
</span><br>
<span class="quotelev1">&gt; that failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening  
</span><br>
<span class="quotelev1">&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters  
</span><br>
<span class="quotelev1">&gt; checked at run-time or not.  Possible values are 0 (no checking)  
</span><br>
<span class="quotelev1">&gt; and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI  
</span><br>
<span class="quotelev1">&gt; communication (for MPI processes, will default to 1 when  
</span><br>
<span class="quotelev1">&gt; oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications  
</span><br>
<span class="quotelev1">&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI  
</span><br>
<span class="quotelev1">&gt; handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when  
</span><br>
<span class="quotelev1">&gt; their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter value  
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting  
</span><br>
<span class="quotelev1">&gt; this string to a valid filename tells Open MPI to dump all the MCA  
</span><br>
<span class="quotelev1">&gt; parameter values into a file suitable for reading via the  
</span><br>
<span class="quotelev1">&gt; mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the  
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind processes  
</span><br>
<span class="quotelev1">&gt; to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of  
</span><br>
<span class="quotelev1">&gt; all MPI peer processes (mostly for error / debugging output  
</span><br>
<span class="quotelev1">&gt; messages).  This can add quite a bit of memory usage to each MPI  
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying  
</span><br>
<span class="quotelev1">&gt; message when MPI_ABORT is invoked (hostname, PID of the process  
</span><br>
<span class="quotelev1">&gt; that called MPI_ABORT) and delay for that many seconds before  
</span><br>
<span class="quotelev1">&gt; exiting (a negative delay value means to never abort).  This allows  
</span><br>
<span class="quotelev1">&gt; attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when  
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to create  
</span><br>
<span class="quotelev1">&gt; connections / warmup with *all* peers during MPI_INIT (vs. making  
</span><br>
<span class="quotelev1">&gt; connections lazily -- upon the first MPI traffic between each  
</span><br>
<span class="quotelev1">&gt; process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully  
</span><br>
<span class="quotelev1">&gt; wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot;  
</span><br>
<span class="quotelev1">&gt; protocol or not.  Enabling this setting can help bandwidth  
</span><br>
<span class="quotelev1">&gt; performance when repeatedly sending and receiving large messages  
</span><br>
<span class="quotelev1">&gt; with the same buffers over RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned  
</span><br>
<span class="quotelev1">&gt; pipeline&quot; protocol or not.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to properly daemonize the ORTE  
</span><br>
<span class="quotelev1">&gt; daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a  
</span><br>
<span class="quotelev1">&gt; @mpirun_args@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to  
</span><br>
<span class="quotelev1">&gt; search for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in seconds] before giving  
</span><br>
<span class="quotelev1">&gt; up on aborting an ORTE operation
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be  
</span><br>
<span class="quotelev1">&gt; measured
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the  
</span><br>
<span class="quotelev1">&gt; stack trace frame
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the backtrace framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev1">&gt; be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace  
</span><br>
<span class="quotelev1">&gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the memory framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework  
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the paffinity framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev1">&gt; be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information  
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a  
</span><br>
<span class="quotelev1">&gt; system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information  
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a  
</span><br>
<span class="quotelev1">&gt; system where CPU_ZERO() is functional or broken (1 = functional, 0  
</span><br>
<span class="quotelev1">&gt; = broken/not available)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information  
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           The number of parameters that  
</span><br>
<span class="quotelev1">&gt; sched_set_affinity() takes on the machine where this component was  
</span><br>
<span class="quotelev1">&gt; compiled
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the maffinity framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev1">&gt; be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;maffinity_libnuma_priority&quot; (current value: &quot;25&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the libnuma maffinity component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the timer framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework  
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the allocator framework (&lt;none&gt; means &quot;use all components that can  
</span><br>
<span class="quotelev1">&gt; be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator  
</span><br>
<span class="quotelev1">&gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the coll framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a  
</span><br>
<span class="quotelev1">&gt; communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should  
</span><br>
<span class="quotelev1">&gt; usually be either the length of a cache line on most SMPs, or the  
</span><br>
<span class="quotelev1">&gt; size of a page on machines that support direct memory affinity page  
</span><br>
<span class="quotelev1">&gt; placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_bootstrap_filename&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                           Filename (in the Open MPI session  
</span><br>
<span class="quotelev1">&gt; directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing  
</span><br>
<span class="quotelev1">&gt; data through shared memory (will be rounded up to the nearest  
</span><br>
<span class="quotelev1">&gt; control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a  
</span><br>
<span class="quotelev1">&gt; message passing area segment as currently being used or not (must  
</span><br>
<span class="quotelev1">&gt; be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's  
</span><br>
<span class="quotelev1">&gt; shared memory message passing area (must be &gt;= 2, and must be a  
</span><br>
<span class="quotelev1">&gt; multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based  
</span><br>
<span class="quotelev1">&gt; operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the  
</span><br>
<span class="quotelev1">&gt; shared memory bootstrap area (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the  
</span><br>
<span class="quotelev1">&gt; calculation of the shared_mem_size MCA information parameter (must  
</span><br>
<span class="quotelev1">&gt; be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the  
</span><br>
<span class="quotelev1">&gt; shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre- 
</span><br>
<span class="quotelev1">&gt; allocating memory for the fixed internal buffer used for message  
</span><br>
<span class="quotelev1">&gt; requests etc that is hung off the communicator data segment. I.e.  
</span><br>
<span class="quotelev1">&gt; if you have a 100'000 nodes you might not want to pre-allocate  
</span><br>
<span class="quotelev1">&gt; 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies  
</span><br>
<span class="quotelev1">&gt; for each communicator. This is only an initial guess, if a tuned  
</span><br>
<span class="quotelev1">&gt; collective needs a different fanout for an operation, it build it  
</span><br>
<span class="quotelev1">&gt; dynamically. This parameter is only for the first guess and might  
</span><br>
<span class="quotelev1">&gt; save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout  
</span><br>
<span class="quotelev1">&gt; followed by pipeline) topologies for each communicator. This is  
</span><br>
<span class="quotelev1">&gt; only an initial guess, if a tuned collective needs a different  
</span><br>
<span class="quotelev1">&gt; fanout for an operation, it build it dynamically. This parameter is  
</span><br>
<span class="quotelev1">&gt; only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static  
</span><br>
<span class="quotelev1">&gt; (compiled/if statements) or dynamic (built at runtime) decision  
</span><br>
<span class="quotelev1">&gt; function rules
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request  
</span><br>
<span class="quotelev1">&gt; freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable set of Open MPI-added options to  
</span><br>
<span class="quotelev1">&gt; improve collective file i/o performance
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the mpool framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework  
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the  
</span><br>
<span class="quotelev1">&gt; mpool should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           the maximum size of registration cache in  
</span><br>
<span class="quotelev1">&gt; bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of  
</span><br>
<span class="quotelev1">&gt; the run
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with  
</span><br>
<span class="quotelev1">&gt; sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of the sm mpool shared  
</span><br>
<span class="quotelev1">&gt; memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared  
</span><br>
<span class="quotelev1">&gt; memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) to allocate per local  
</span><br>
<span class="quotelev1">&gt; peer in the sm mpool shared memory file, bounded by min_size and  
</span><br>
<span class="quotelev1">&gt; max_size
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use memory hooks for deregistering freed  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use mallopt to override calling sbrk  
</span><br>
<span class="quotelev1">&gt; (doesn't return memory to OS!)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use  
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the pml framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pml framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing  
</span><br>
<span class="quotelev1">&gt; request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the bml framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are  
</span><br>
<span class="quotelev1">&gt; unreachable
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rcache framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework  
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is  
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the btl framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager size fragmeng (before the rendez- 
</span><br>
<span class="quotelev1">&gt; vous ptotocol)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Device exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Active behavior flags
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning  
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the mtl framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the topo framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the osc framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if  
</span><br>
<span class="quotelev1">&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the errmgr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;errmgr_orted_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;errmgr_proxy_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the gpr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the iof framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the oob framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to  
</span><br>
<span class="quotelev1">&gt; exclude
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) random sleep for  
</span><br>
<span class="quotelev1">&gt; connection wireup
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                           Mode for HNP to accept incoming  
</span><br>
<span class="quotelev1">&gt; connections: event, listen_thread
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           High water mark for queued accepted  
</span><br>
<span class="quotelev1">&gt; socket list size
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum amount of time (in milliseconds)  
</span><br>
<span class="quotelev1">&gt; to wait between processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of times to let accept return  
</span><br>
<span class="quotelev1">&gt; EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the dash_host RAS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging output for the  
</span><br>
<span class="quotelev1">&gt; gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for the gridengine  
</span><br>
<span class="quotelev1">&gt; ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the localhost RAS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for hostfile RDS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/path/to/openmpi/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for resfile RDS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI  
</span><br>
<span class="quotelev1">&gt; applications on the same node as mpirun (default).  If true, do not  
</span><br>
<span class="quotelev1">&gt; schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow  
</span><br>
<span class="quotelev1">&gt; oversubscription of nodes - mpirun will return an error if there  
</span><br>
<span class="quotelev1">&gt; aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rmaps framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for Round Robin RMAPS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for Round Robin RMAPS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rmgr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rml framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, reuse daemons to launch  
</span><br>
<span class="quotelev1">&gt; dynamically spawned processes.  If zero, do not reuse daemons  
</span><br>
<span class="quotelev1">&gt; (default)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the pls framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pls framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output of the gridengine  
</span><br>
<span class="quotelev1">&gt; qrsh -inherit command
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the gridengine pls  
</span><br>
<span class="quotelev1">&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output  
</span><br>
<span class="quotelev1">&gt; for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                           How many pls_rsh_agent instances to  
</span><br>
<span class="quotelev1">&gt; invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh,  
</span><br>
<span class="quotelev1">&gt; even for local daemons
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the rsh pls  
</span><br>
<span class="quotelev1">&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of  
</span><br>
<span class="quotelev1">&gt; the remote agent, but only used when the &quot;debug&quot; MCA parameter is  
</span><br>
<span class="quotelev1">&gt; true, or the top-level MCA debugging is enabled (otherwise this  
</span><br>
<span class="quotelev1">&gt; value is ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, wait for all the processes  
</span><br>
<span class="quotelev1">&gt; to complete before exiting.  Otherwise, quit immediately -- without  
</span><br>
<span class="quotelev1">&gt; waiting for confirmation that all other processes in the job have  
</span><br>
<span class="quotelev1">&gt; completed.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the  
</span><br>
<span class="quotelev1">&gt; remote node is the same as the shell on the local node.  Otherwise,  
</span><br>
<span class="quotelev1">&gt; probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;ssh : rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on  
</span><br>
<span class="quotelev1">&gt; remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the sds framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sds framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4025.php">attitude_man_at_[hidden]: "[OMPI users] [SPAM:### 81%] simulations for SLES 10"</a>
<li><strong>Previous message:</strong> <a href="4023.php">cutecalin: "[OMPI users] Do we like the same books?"</a>
<li><strong>In reply to:</strong> <a href="3993.php">Daniel Rozenbaum: "[OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
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
