<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 14:16:05 2010" -->
<!-- isoreceived="20100303191605" -->
<!-- sent="Wed, 03 Mar 2010 14:16:00 -0500" -->
<!-- isosent="20100303191600" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="4B8EB570.1020405_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B8EAAC0.9050100_at_sun.com" -->
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
<strong>Date:</strong> 2010-03-03 14:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a limit on how many MPI processes can run on a single host?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; Depending on which OMPI release you're using, I think you need something
</span><br>
<span class="quotelev1">&gt; like 4*np up to 7*np (plus a few) descriptors.  So, with 256, you need
</span><br>
<span class="quotelev1">&gt; 1000+ descriptors.  You're quite possibly up against your limit, though
</span><br>
<span class="quotelev1">&gt; I don't know for sure that that's the problem here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You say you're running 1.2.8.  That's &quot;a while ago&quot;, so would you
</span><br>
<span class="quotelev1">&gt; consider updating as a first step?  Among other things, newer OMPIs will
</span><br>
<span class="quotelev1">&gt; generate a much clearer error message if the descriptor limit is the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p>While 1.2.8 might be &quot;a while ago&quot;, upgrading software just because it's
<br>
&quot;old&quot; is not a valid argument.
<br>
<p>I can install the lastest version of OpenMPI, but it will take a little
<br>
while.
<br>
<p><p><span class="quotelev4">&gt;&gt;&gt;&gt; I have a user trying to test his code on the command-line on a single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host before running it on our cluster like so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np X foo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When he tries to run it on large number of process (X = 256, 512), the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 256 mpihello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've done some testing and found that X &lt;155 for this program to work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this a bug, part of the standard, or design/implementation decision?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One possible issue is the limit on the number of descriptors.  The error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message should be pretty helpful and descriptive, but perhaps you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using an older version of OMPI.  If this is your problem, one workaround
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimit descriptors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 256 mpihello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like I'm not allowed to set that as a regular user:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ulimit -n 2048
</span><br>
<span class="quotelev2">&gt;&gt; -bash: ulimit: open files: cannot modify limit: Operation not permitted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since I am the admin, I could change that elsewhere, but I'd rather not
</span><br>
<span class="quotelev2">&gt;&gt; do that system-wide unless absolutely necessary.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though I guess the syntax depends on what shell you're running.  Another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is to set the MCA parameter opal_set_max_sys_limits to 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; That didn't work either:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca opal_set_max_sys_limits 1 -np 256 mpihello
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12224.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12231.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
