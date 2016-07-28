<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  5 08:51:18 2012" -->
<!-- isoreceived="20120205135118" -->
<!-- sent="Sun, 5 Feb 2012 14:51:05 +0100" -->
<!-- isosent="20120205135105" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="3ADABD12-1646-44A4-BF71-3B1F49F760CC_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-05 08:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18397.php">Rashid, Z. (Zahid): "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev2">&gt;&gt; Not sure whether I get it right. When I launch the same application with:
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
<p>Was there any further discussion about the different slot allocations between the two startup methods off-list?
<br>
<p>One could even argue, it's the intended way it is right now:
<br>
<p><p>- you have an MPI style application (rank0 is doing work) =&gt; use mpiexec
<br>
<p>Corresponding SGE setting: &quot;job_is_first_task true&quot; in the PE
<br>
<p><p>- you have a true master/slave application and the master is not doing any work =&gt; start it as a singleton
<br>
<p>Corresponding SGE setting: &quot;job_is_first_task false&quot; in the PE
<br>
<p><p>This would then be worth to be noted somewhere in the FAQ.
<br>
<p>(I couldn't compile the Mpitest with MPICH2 to check their behavior, it chocks on some overloading operators.)
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18397.php">Rashid, Z. (Zahid): "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18350.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
