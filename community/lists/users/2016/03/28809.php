<?
$subject_val = "Re: [OMPI users] BLCR &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 13:04:53 2016" -->
<!-- isoreceived="20160323170453" -->
<!-- sent="Wed, 23 Mar 2016 17:04:50 +0000" -->
<!-- isosent="20160323170450" -->
<!-- name="Meij, Henk" -->
<!-- email="hmeij_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR &amp;amp; openmpi" -->
<!-- id="8688BD11DAC0574AA90295127E9E9F4AD7740D71_at_EXCHANGEWES10.wesad.wesleyan.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMJJpkXRFZFDwfQ2-TAwHvJ0yKxt=hVkyLJQ-O1dL8D-6bvBew_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-23 13:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28810.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for responding.
<br>
<p><p><p>#1 I am checkpointing the &quot;wrapper&quot; script (for the scheduler) which sets up the mpirun env, builds machinefile etc, then launches mpirun which launches orted which launches lmp_mpi ... this gave me an idea to check BLCR, it states
<br>
<p>&quot; The '--tree' flag to 'cr_checkpoint' requests a checkpoint of the process with the&amp;3 given pid, and all its descendants (excluding those who's parent has exited and thus become children of the 'init' process). &quot; This is the default blcr &gt; 0.6.0. I explicitly added this to make sure. So everything should be checkpointed on down.
<br>
<p><p><p>#2 &amp; 3 will have to brood over that. maybe I can checkpoint my individual lmp_mpi processes directly....
<br>
<p><p><p>Serial invocations and restarts work just fine. I'll go to the BLCR list, maybe they have an idea. As you can tell below, a manual invocation yields the same result as via scheduler, with no messages from --kmsg-warning, like everything is normal.   I'll report back if I get this to work.
<br>
<p><p><p>-Henk
<br>
<p><p><p>[hmeij_at_cottontail ~]$ ssh petaltail /share/apps/blcr/0.8.5/test/bin/cr_restart --kmsg-warning --no-restore-pid --no-restore-pgid --no-restore-sid --relocate /sanscratch/612=/sanscratch/619 /sanscratch/checkpoints/612/chk.21839 &amp;
<br>
<p><p>[hmeij_at_cottontail sharptail]$ ssh petaltail ps -u hmeij
<br>
&nbsp;&nbsp;PID TTY          TIME CMD
<br>
24123 ?        00:00:00 sshd
<br>
24124 ?        00:00:00 cr_restart
<br>
24156 ?        00:00:00 lava.openmpi.wr
<br>
24157 ?        00:00:28 mpirun
<br>
24176 ?        00:00:00 sshd
<br>
24177 ?        00:00:00 ps
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of George Bosilca [bosilca_at_[hidden]]
<br>
Sent: Wednesday, March 23, 2016 12:27 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] BLCR &amp; openmpi
<br>
<p>Both BLCR and Open MPI work just fine. Independently.
<br>
<p>Checkpointing and restarting a parallel application is not as simple as mixing 2 tools together (especially when we talk about a communication library, aka. MPI), they have to cooperate in order to achieve the desired goal of being able to continue the execution on another set of resources. Open MPI had support for C/R but this feature has been lost.
<br>
<p>1. It is not clear from your email what exactly you checkpoint. Are you checkpointing the mpirun process, or are you checkpointing all the MPI processes ?
<br>
<p>2. What are you recovering? Assuming that you checkpoint your MPI processes (and not the mpirun), what you can try to do during the recovery is to spawn a new set of MPI processes (that will give you new orteds) and then let each one of these processes call the corresponding BLCR cr_restart.
<br>
<p>3. This will not give you a working MPI environment, as the processes will know each other from the original execution, and will be unable to connect to each other to resume communications. You will have to dig a little more in the code in order to achieve what you want/need.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Mar 23, 2016 at 12:14 PM, Meij, Henk &lt;hmeij_at_[hidden]&lt;mailto:hmeij_at_[hidden]&gt;&gt; wrote:
<br>
<p>So I've redone this with openmpi 1.10.2 and another piece of software (lammps 16feb16) and get same results.
<br>
<p><p><p>Upon cr_restart I see the openlava_wrapper process, the mpirun process reappearing but no orted and no lmp_mpi processes. Not obvious error anywhere. Using the --save-all feature from BLCR and ignore pids.
<br>
<p><p><p>Does BLCR and openmpi work? Anybody have any idea as to where to look?
<br>
<p><p><p>-Henk
<br>
<p><p><p>________________________________
<br>
From: Meij, Henk
<br>
Sent: Monday, March 21, 2016 12:24 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: RE: BLCR &amp; openmpi
<br>
<p><p>hmm, I'm not correct. cr_restart starts with no errors, launches some of the processes, then suspends itself. strace on mpirun on this manual invocation yields the behavior same as below.
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
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
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
<p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28806.php">http://www.open-mpi.org/community/lists/users/2016/03/28806.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28810.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>Previous message:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="28808.php">George Bosilca: "Re: [OMPI users] BLCR &amp; openmpi"</a>
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
