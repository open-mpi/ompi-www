<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 11:59:20 2010" -->
<!-- isoreceived="20100303165920" -->
<!-- sent="Wed, 3 Mar 2010 09:59:10 -0700" -->
<!-- isosent="20100303165910" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="CD08CDE9-226C-4A2B-81DE-B9C351B8121E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8E9387.6040405_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Limit to number of processes on one node?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 11:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12221.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12221.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It helps to have some idea what version you are talking about...
<br>
<p>On Mar 3, 2010, at 9:51 AM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; Is there a limit on how many MPI processes can run on a single host?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a user trying to test his code on the command-line on a single
</span><br>
<span class="quotelev1">&gt; host before running it on our cluster like so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np X foo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When he tries to run it on large number of process (X = 256, 512), the
</span><br>
<span class="quotelev1">&gt; program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
</span><br>
<span class="quotelev1">&gt; program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 256 mpihello
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've done some testing and found that X &lt;155 for this program to work.
</span><br>
<span class="quotelev1">&gt; Is this a bug, part of the standard, or design/implementation decision?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Prentice Bisbal
</span><br>
<span class="quotelev1">&gt; Linux Software Support Specialist/System Administrator
</span><br>
<span class="quotelev1">&gt; School of Natural Sciences
</span><br>
<span class="quotelev1">&gt; Institute for Advanced Study
</span><br>
<span class="quotelev1">&gt; Princeton, NJ
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
<li><strong>Next message:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12221.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12221.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
