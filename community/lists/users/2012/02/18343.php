<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 05:49:49 2012" -->
<!-- isoreceived="20120201104949" -->
<!-- sent="Wed, 1 Feb 2012 11:49:35 +0100" -->
<!-- isosent="20120201104935" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="FD70E381-4368-4BD1-89D1-3E97851165D2_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2A95A609-9711-4875-9904-F9B00FEB1951_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 05:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18342.php">G&#246;tz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="../../2012/01/18339.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2012 um 21:25 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 12:58 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 31.01.2012 um 20:38 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure I fully grok this thread, but will try to provide an answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When you start a singleton, it spawns off a daemon that is the equivalent of &quot;mpirun&quot;. This daemon is created for the express purpose of allowing the singleton to use MPI dynamics like comm_spawn - without it, the singleton would be unable to execute those functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The first thing the daemon does is read the local allocation, using the same methods as used by mpirun. So whatever allocation is present that mpirun would have read, the daemon will get. This includes hostfiles and SGE allocations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it should honor also the default hostfile of Open MPI if running outside of SGE, i.e. from the command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes
</span><br>
<p>BTW: is there any default for a hostfile for Open MPI - I mean any in my home directory or /etc? When I check `man orte_hosts`, and all possible optiions are unset (like in a singleton run), it will only run local (Job is co-located with mpirun).
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; The exception to this is when the singleton gets started in an altered environment - e.g., if SGE changes the environmental variables when launching the singleton process. We see this in some resource managers - you can get an allocation of N nodes, but when you launch a job, the envar in that job only indicates the number of nodes actually running processes in that job. In such a situation, the daemon will see the altered value as its &quot;allocation&quot;, potentially causing confusion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure whether I get it right. When I launch the same application with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpiexec -np1 ./Mpitest&quot; (and get an allocation of 2+2 on the two machines):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 27422 ?        Sl     4:12 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev2">&gt;&gt; 9504 ?        S      0:00  \_ sge_shepherd-3791 -bg
</span><br>
<span class="quotelev2">&gt;&gt; 9506 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15370/job_scripts/3791
</span><br>
<span class="quotelev2">&gt;&gt; 9507 ?        S      0:00          \_ mpiexec -np 1 ./Mpitest
</span><br>
<span class="quotelev2">&gt;&gt; 9508 ?        R      0:07              \_ ./Mpitest
</span><br>
<span class="quotelev2">&gt;&gt; 9509 ?        Sl     0:00              \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15381  orted -mca
</span><br>
<span class="quotelev2">&gt;&gt; 9513 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2861 ?        Sl    10:47 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev2">&gt;&gt; 25434 ?        Sl     0:00  \_ sge_shepherd-3791 -bg
</span><br>
<span class="quotelev2">&gt;&gt; 25436 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15381/active_jobs/3791.1/1.pc15381
</span><br>
<span class="quotelev2">&gt;&gt; 25444 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 821952512 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt;&gt; 25447 ?        S      0:01              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; 25448 ?        S      0:01              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is what I expect (main + 1 child, other node gets 2 children). Now I launch the singleton instead (nothing changed besides this, still 2+2 granted):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;./Mpitest&quot; and get:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 27422 ?        Sl     4:12 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev2">&gt;&gt; 9546 ?        S      0:00  \_ sge_shepherd-3793 -bg
</span><br>
<span class="quotelev2">&gt;&gt; 9548 ?        Ss     0:00      \_ /bin/sh /var/spool/sge/pc15370/job_scripts/3793
</span><br>
<span class="quotelev2">&gt;&gt; 9549 ?        R      0:00          \_ ./Mpitest
</span><br>
<span class="quotelev2">&gt;&gt; 9550 ?        Ss     0:00              \_ orted --hnp --set-sid --report-uri 6 --singleton-died-pipe 7
</span><br>
<span class="quotelev2">&gt;&gt; 9551 ?        Sl     0:00                  \_ /usr/sge/bin/lx24-x86/qrsh -inherit -nostdin -V pc15381 orted
</span><br>
<span class="quotelev2">&gt;&gt; 9554 ?        S      0:00                  \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; 9555 ?        S      0:00                  \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2861 ?        Sl    10:47 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev2">&gt;&gt; 25494 ?        Sl     0:00  \_ sge_shepherd-3793 -bg
</span><br>
<span class="quotelev2">&gt;&gt; 25495 ?        Ss     0:00      \_ /usr/sge/utilbin/lx24-x86/qrsh_starter /var/spool/sge/pc15381/active_jobs/3793.1/1.pc15381
</span><br>
<span class="quotelev2">&gt;&gt; 25502 ?        S      0:00          \_ orted -mca ess env -mca orte_ess_jobid 814940160 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt;&gt; 25503 ?        S      0:00              \_ /home/reuti/mpitest/Mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Only one child is going to the other node. The environment is the same in both cases. Is this the correct behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We probably aren't correctly marking the original singleton on that node, and so the mapper thinks there are still two slots available on the original node.
</span><br>
<p>Okay. There is something to discuss/fix. BTW: if started as singleton I get an error at the end with the program the OP provided:
<br>
<p>[pc15381:25502] [[12435,0],1] routed:binomial: Connection to lifeline [[12435,0],0] lost
<br>
<p>It's not the case if run by mpiexec.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18342.php">G&#246;tz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>In reply to:</strong> <a href="../../2012/01/18339.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18344.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
