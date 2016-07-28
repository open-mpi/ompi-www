<?
$subject_val = "Re: [OMPI users] BLCR &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 12:27:05 2016" -->
<!-- isoreceived="20160323162705" -->
<!-- sent="Wed, 23 Mar 2016 12:27:03 -0400" -->
<!-- isosent="20160323162703" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR &amp;amp; openmpi" -->
<!-- id="CAMJJpkXRFZFDwfQ2-TAwHvJ0yKxt=hVkyLJQ-O1dL8D-6bvBew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 12:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28809.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28807.php">Ralph Castain: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28809.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="28809.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both BLCR and Open MPI work just fine. Independently.
<br>
<p>Checkpointing and restarting a parallel application is not as simple as
<br>
mixing 2 tools together (especially when we talk about a communication
<br>
library, aka. MPI), they have to cooperate in order to achieve the desired
<br>
goal of being able to continue the execution on another set of resources.
<br>
Open MPI had support for C/R but this feature has been lost.
<br>
<p>1. It is not clear from your email what exactly you checkpoint. Are you
<br>
checkpointing the mpirun process, or are you checkpointing all the MPI
<br>
processes ?
<br>
<p>2. What are you recovering? Assuming that you checkpoint your MPI processes
<br>
(and not the mpirun), what you can try to do during the recovery is to
<br>
spawn a new set of MPI processes (that will give you new orteds) and then
<br>
let each one of these processes call the corresponding BLCR cr_restart.
<br>
<p>3. This will not give you a working MPI environment, as the processes will
<br>
know each other from the original execution, and will be unable to connect
<br>
to each other to resume communications. You will have to dig a little more
<br>
in the code in order to achieve what you want/need.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Mar 23, 2016 at 12:14 PM, Meij, Henk &lt;hmeij_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So I've redone this with openmpi 1.10.2 and another piece of software
</span><br>
<span class="quotelev1">&gt; (lammps 16feb16) and get same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Upon cr_restart I see the openlava_wrapper process, the mpirun process
</span><br>
<span class="quotelev1">&gt; reappearing but no orted and no lmp_mpi processes. Not obvious error
</span><br>
<span class="quotelev1">&gt; anywhere. Using the --save-all feature from BLCR and ignore pids.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does BLCR and openmpi work? Anybody have any idea as to where to look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Meij, Henk
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, March 21, 2016 12:24 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* RE: BLCR &amp; openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hmm, I'm not correct. cr_restart starts with no errors, launches some
</span><br>
<span class="quotelev1">&gt; of the processes, then suspends itself. strace on mpirun on this manual
</span><br>
<span class="quotelev1">&gt; invocation yields the behavior same as below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; [1]+  Stopped                 cr_restart --no-restore-pid
</span><br>
<span class="quotelev1">&gt; --no-restore-pgid --no-restore-sid --relocate
</span><br>
<span class="quotelev1">&gt; /sanscratch/383=/sanscratch/000 /sanscratch/checkpoints/383/chk.28244
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Meij, Henk
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, March 21, 2016 12:04 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* BLCR &amp; openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi1.2 (yes, I know old),python 2.6.1 blcr 0.8.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I attempt to cr_restart (having performed cr_checkpoint --save-all) I
</span><br>
<span class="quotelev1">&gt; can restart the job manually with blcr on a node. but when I go through my
</span><br>
<span class="quotelev1">&gt; openlava scheduler, the cr_restart launches mpirun, then nothing. no orted
</span><br>
<span class="quotelev1">&gt; or the python processes that were running. the new scheduler job performing
</span><br>
<span class="quotelev1">&gt; the restart puts in place the old machinefile and stderr and stdout files.
</span><br>
<span class="quotelev1">&gt; here is what I view on an strace of mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What problem is this pointing at?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=4, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=11, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=9, events=POLLIN}, {fd=10, events=POLLIN}], 8, 1000) = 8 ([{fd=5,
</span><br>
<span class="quotelev1">&gt; revents=POLLNVAL}, {fd=4, revents=POLLNVAL}, {fd=6, revents=POLLNVAL},
</span><br>
<span class="quotelev1">&gt; {fd=11, revents=POLLNVAL}, {fd=7, revents=POLLNVAL}, {fd=8,
</span><br>
<span class="quotelev1">&gt; revents=POLLNVAL}, {fd=9, revents=POLLNVAL}, {fd=10, revents=POLLNVAL}])
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; sched_yield()                           = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGTERM, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGINT, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR1, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGUSR2, {0x2b7ca19cb30a, [INT USR1 USR2 TERM CHLD],
</span><br>
<span class="quotelev1">&gt; SA_RESTORER|SA_RESTART, 0x397840f790}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28806.php">http://www.open-mpi.org/community/lists/users/2016/03/28806.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28809.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="28807.php">Ralph Castain: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28806.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28809.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="28809.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
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
