<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 13:13:14 2010" -->
<!-- isoreceived="20100303181314" -->
<!-- sent="Wed, 03 Mar 2010 13:13:09 -0500" -->
<!-- isosent="20100303181309" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="4B8EA6B5.60705_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B8E9766.7050105_at_sun.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 13:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a limit on how many MPI processes can run on a single host?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a user trying to test his code on the command-line on a single
</span><br>
<span class="quotelev2">&gt;&gt; host before running it on our cluster like so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np X foo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When he tries to run it on large number of process (X = 256, 512), the
</span><br>
<span class="quotelev2">&gt;&gt; program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
</span><br>
<span class="quotelev2">&gt;&gt; program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 256 mpihello
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've done some testing and found that X &lt;155 for this program to work.
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug, part of the standard, or design/implementation decision?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; One possible issue is the limit on the number of descriptors.  The error
</span><br>
<span class="quotelev1">&gt; message should be pretty helpful and descriptive, but perhaps you're
</span><br>
<span class="quotelev1">&gt; using an older version of OMPI.  If this is your problem, one workaround
</span><br>
<span class="quotelev1">&gt; is something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unlimit descriptors
</span><br>
<span class="quotelev1">&gt; mpirun -np 256 mpihello
</span><br>
<p>Looks like I'm not allowed to set that as a regular user:
<br>
<p>$ ulimit -n 2048
<br>
-bash: ulimit: open files: cannot modify limit: Operation not permitted
<br>
<p>Since I am the admin, I could change that elsewhere, but I'd rather not
<br>
do that system-wide unless absolutely necessary.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; though I guess the syntax depends on what shell you're running.  Another
</span><br>
<span class="quotelev1">&gt; is to set the MCA parameter opal_set_max_sys_limits to 1.
</span><br>
<p>That didn't work either:
<br>
<p>$ mpirun -mca opal_set_max_sys_limits 1 -np 256 mpihello
<br>
mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
<br>
exited on signal 15 (Terminated).
<br>
252 additional processes aborted (not shown)
<br>
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
