<?
$subject_val = "[OMPI users] BLCR &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 12:04:22 2016" -->
<!-- isoreceived="20160321160422" -->
<!-- sent="Mon, 21 Mar 2016 16:04:20 +0000" -->
<!-- isosent="20160321160420" -->
<!-- name="Meij, Henk" -->
<!-- email="hmeij_at_[hidden]" -->
<!-- subject="[OMPI users] BLCR &amp;amp; openmpi" -->
<!-- id="8688BD11DAC0574AA90295127E9E9F4AD773DF8C_at_EXCHANGEWES10.wesad.wesleyan.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] BLCR &amp; openmpi<br>
<strong>From:</strong> Meij, Henk (<em>hmeij_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 12:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
openmpi1.2 (yes, I know old),python 2.6.1 blcr 0.8.5
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
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
