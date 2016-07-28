<?
$subject_val = "Re: [OMPI users] BLCR &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 12:24:39 2016" -->
<!-- isoreceived="20160321162439" -->
<!-- sent="Mon, 21 Mar 2016 16:24:37 +0000" -->
<!-- isosent="20160321162437" -->
<!-- name="Meij, Henk" -->
<!-- email="hmeij_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR &amp;amp; openmpi" -->
<!-- id="8688BD11DAC0574AA90295127E9E9F4AD773DFD3_at_EXCHANGEWES10.wesad.wesleyan.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8688BD11DAC0574AA90295127E9E9F4AD773DF8C_at_EXCHANGEWES10.wesad.wesleyan.edu" -->
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
<strong>From:</strong> Meij, Henk (<em>hmeij_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 12:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28777.php">Brian Dobbins: "[OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28775.php">Meij, Henk: "[OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28775.php">Meij, Henk: "[OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hmm, I'm not correct. cr_restart starts with no errors, launches some of the processes, then suspends itself. strace on mpirun on this manual invocation yields the behavior same as below.
<br>
<p><p><p>-Henk
<br>
<p><p><p>[hmeij_at_swallowtail kflaherty]$ ps -u hmeij
<br>
&nbsp;&nbsp;PID TTY          TIME CMD
<br>
29481 ?        00:00:00 res
<br>
29485 ?        00:00:00 1458575067.384
<br>
29488 ?        00:00:00 1458575067.384.
<br>
29508 ?        00:00:00 cr_restart
<br>
29509 ?        00:00:00 blcr_watcher
<br>
29512 ?        00:00:02 lava.openmpi.wr
<br>
29514 ?        00:38:35 mpirun
<br>
30313 ?        00:00:01 sshd
<br>
30314 pts/1    00:00:00 bash
<br>
30458 ?        00:00:00 sleep
<br>
30483 ?        00:00:00 sleep
<br>
30650 pts/1    00:00:00 cr_restart
<br>
30652 pts/1    00:00:00 lava.openmpi.wr
<br>
30653 pts/1    00:00:00 mpirun
<br>
30729 pts/1    00:00:00 ps
<br>
[hmeij_at_swallowtail kflaherty]$ jobs
<br>
[1]+  Stopped                 cr_restart --no-restore-pid --no-restore-pgid --no-restore-sid --relocate /sanscratch/383=/sanscratch/000 /sanscratch/checkpoints/383/chk.28244
<br>
<p>________________________________
<br>
From: Meij, Henk
<br>
Sent: Monday, March 21, 2016 12:04 PM
<br>
To: users_at_[hidden]
<br>
Subject: BLCR &amp; openmpi
<br>
<p><p>openmpi1.2 (yes, I know old),python 2.6.1 blcr 0.8.5
<br>
<p><p><p>when I attempt to cr_restart (having performed cr_checkpoint --save-all) I can restart the job manually with blcr on a node. but when I go through my openlava scheduler, the cr_restart launches mpirun, then nothing. no orted or the python processes that were running. the new scheduler job performing the restart puts in place the old machinefile and stderr and stdout files. here is what I view on an strace of mpirun
<br>
<p><p><p>What problem is this pointing at?
<br>
<p>Thanks,
<br>
<p><p><p>-Henk
<br>
<p><p><p>poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=6, events=POLLIN}, {fd=11, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=10, events=POLLIN}], 8, 1000) = 8 ([{fd=5, revents=POLLNVAL}, {fd=4, revents=POLLNVAL}, {fd=6, revents=POLLNVAL}, {fd=11, revents=POLLNVAL}, {fd=7, revents=POLLNVAL}, {fd=8, revents=POLLNVAL}, {fd=9, revents=POLLNVAL}, {fd=10, revents=POLLNVAL}])
<br>
rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
<br>
rt_sigaction(SIGCHLD, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGTERM, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGINT, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGUSR1, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGUSR2, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
sched_yield()                           = 0
<br>
rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
<br>
rt_sigaction(SIGCHLD, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGTERM, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGINT, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGUSR1, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
rt_sigaction(SIGUSR2, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28776/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28777.php">Brian Dobbins: "[OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28775.php">Meij, Henk: "[OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28775.php">Meij, Henk: "[OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
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
