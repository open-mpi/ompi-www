<?
$subject_val = "Re: [OMPI users] BLCR &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 12:25:21 2016" -->
<!-- isoreceived="20160323162521" -->
<!-- sent="Wed, 23 Mar 2016 09:25:17 -0700" -->
<!-- isosent="20160323162517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR &amp;amp; openmpi" -->
<!-- id="8766372D-4DF8-4075-A55A-DE6D2CB7941F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8688BD11DAC0574AA90295127E9E9F4AD7740CE1_at_EXCHANGEWES10.wesad.wesleyan.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR &amp; openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 12:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#226;&#128;&#153;t believe checkpoint/restart is supported in OMPI past the 1.6 series. There was some attempt to restore it, but that person graduated prior to fully completing the work.
<br>
<p><p><span class="quotelev1">&gt; On Mar 23, 2016, at 9:14 AM, Meij, Henk &lt;hmeij_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I've redone this with openmpi 1.10.2 and another piece of software (lammps 16feb16) and get same results.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Upon cr_restart I see the openlava_wrapper process, the mpirun process reappearing but no orted and no lmp_mpi processes. Not obvious error anywhere. Using the --save-all feature from BLCR and ignore pids.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does BLCR and openmpi work? Anybody have any idea as to where to look?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -Henk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Meij, Henk
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 21, 2016 12:24 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: RE: BLCR &amp; openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hmm, I'm not correct. cr_restart starts with no errors, launches some of the processes, then suspends itself. strace on mpirun on this manual invocation yields the behavior same as below.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -Henk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [hmeij_at_swallowtail kflaherty]$ ps -u hmeij
</span><br>
<span class="quotelev1">&gt;   PID TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt; 29481 ?        00:00:00 res
</span><br>
<span class="quotelev1">&gt; 29485 ?        00:00:00 1458575067.384
</span><br>
<span class="quotelev1">&gt; 29488 ?        00:00:00 1458575067.384.
</span><br>
<span class="quotelev1">&gt; 29508 ?        00:00:00 cr_restart
</span><br>
<span class="quotelev1">&gt; 29509 ?        00:00:00 blcr_watcher
</span><br>
<span class="quotelev1">&gt; 29512 ?        00:00:02 lava.openmpi.wr
</span><br>
<span class="quotelev1">&gt; 29514 ?        00:38:35 mpirun
</span><br>
<span class="quotelev1">&gt; 30313 ?        00:00:01 sshd
</span><br>
<span class="quotelev1">&gt; 30314 pts/1    00:00:00 bash
</span><br>
<span class="quotelev1">&gt; 30458 ?        00:00:00 sleep
</span><br>
<span class="quotelev1">&gt; 30483 ?        00:00:00 sleep
</span><br>
<span class="quotelev1">&gt; 30650 pts/1    00:00:00 cr_restart
</span><br>
<span class="quotelev1">&gt; 30652 pts/1    00:00:00 lava.openmpi.wr
</span><br>
<span class="quotelev1">&gt; 30653 pts/1    00:00:00 mpirun
</span><br>
<span class="quotelev1">&gt; 30729 pts/1    00:00:00 ps
</span><br>
<span class="quotelev1">&gt; [hmeij_at_swallowtail kflaherty]$ jobs
</span><br>
<span class="quotelev1">&gt; [1]+  Stopped                 cr_restart --no-restore-pid --no-restore-pgid --no-restore-sid --relocate /sanscratch/383=/sanscratch/000 /sanscratch/checkpoints/383/chk.28244
</span><br>
<span class="quotelev1">&gt; From: Meij, Henk
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 21, 2016 12:04 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: BLCR &amp; openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi1.2 (yes, I know old),python 2.6.1 blcr 0.8.5
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; when I attempt to cr_restart (having performed cr_checkpoint --save-all) I can restart the job manually with blcr on a node. but when I go through my openlava scheduler, the cr_restart launches mpirun, then nothing. no orted or the python processes that were running. the new scheduler job performing the restart puts in place the old machinefile and stderr and stdout files. here is what I view on an strace of mpirun
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What problem is this pointing at?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -Henk
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=6, events=POLLIN}, {fd=11, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=10, events=POLLIN}], 8, 1000) = 8 ([{fd=5, revents=POLLNVAL}, {fd=4, revents=POLLNVAL}, {fd=6, revents=POLLNVAL}, {fd=11, revents=POLLNVAL}, {fd=7, revents=POLLNVAL}, {fd=8, revents=POLLNVAL}, {fd=9, revents=POLLNVAL}, {fd=10, revents=POLLNVAL}])
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; sched_yield()                           = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28806.php">http://www.open-mpi.org/community/lists/users/2016/03/28806.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28806.php">http://www.open-mpi.org/community/lists/users/2016/03/28806.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
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
