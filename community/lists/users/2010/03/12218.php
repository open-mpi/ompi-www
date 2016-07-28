<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 12:05:58 2010" -->
<!-- isoreceived="20100303170558" -->
<!-- sent="Wed, 03 Mar 2010 09:07:50 -0800" -->
<!-- isosent="20100303170750" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="4B8E9766.7050105_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 12:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt;Is there a limit on how many MPI processes can run on a single host?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a user trying to test his code on the command-line on a single
</span><br>
<span class="quotelev1">&gt;host before running it on our cluster like so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -np X foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When he tries to run it on large number of process (X = 256, 512), the
</span><br>
<span class="quotelev1">&gt;program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
</span><br>
<span class="quotelev1">&gt;program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpirun -np 256 mpihello
</span><br>
<span class="quotelev1">&gt;mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev1">&gt;exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;252 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I've done some testing and found that X &lt;155 for this program to work.
</span><br>
<span class="quotelev1">&gt;Is this a bug, part of the standard, or design/implementation decision?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
One possible issue is the limit on the number of descriptors.  The error 
<br>
message should be pretty helpful and descriptive, but perhaps you're 
<br>
using an older version of OMPI.  If this is your problem, one workaround 
<br>
is something like this:
<br>
<p>unlimit descriptors
<br>
mpirun -np 256 mpihello
<br>
<p>though I guess the syntax depends on what shell you're running.  Another 
<br>
is to set the MCA parameter opal_set_max_sys_limits to 1.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
