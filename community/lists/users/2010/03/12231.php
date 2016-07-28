<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 17:04:27 2010" -->
<!-- isoreceived="20100303220427" -->
<!-- sent="Wed, 3 Mar 2010 15:04:18 -0700" -->
<!-- isosent="20100303220418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="38CDDB55-D17D-460E-B5C2-21CB4F337572_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8EB570.1020405_at_ias.edu" -->
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
<strong>Date:</strong> 2010-03-03 17:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12230.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>In reply to:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12238.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12238.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 12:16 PM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a limit on how many MPI processes can run on a single host?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depending on which OMPI release you're using, I think you need something
</span><br>
<span class="quotelev2">&gt;&gt; like 4*np up to 7*np (plus a few) descriptors.  So, with 256, you need
</span><br>
<span class="quotelev2">&gt;&gt; 1000+ descriptors.  You're quite possibly up against your limit, though
</span><br>
<span class="quotelev2">&gt;&gt; I don't know for sure that that's the problem here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You say you're running 1.2.8.  That's &quot;a while ago&quot;, so would you
</span><br>
<span class="quotelev2">&gt;&gt; consider updating as a first step?  Among other things, newer OMPIs will
</span><br>
<span class="quotelev2">&gt;&gt; generate a much clearer error message if the descriptor limit is the
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While 1.2.8 might be &quot;a while ago&quot;, upgrading software just because it's
</span><br>
<span class="quotelev1">&gt; &quot;old&quot; is not a valid argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can install the lastest version of OpenMPI, but it will take a little
</span><br>
<span class="quotelev1">&gt; while.
</span><br>
<p>Maybe not because it is &quot;old&quot;, but Eugene is correct. The old versions of OMPI required more file descriptors than the newer versions.
<br>
<p>That said, you'll still need a minimum of 4x the number of procs on the node even with the latest release. I suggest talking to your sys admin about getting the limit increased. It sounds like it has been set unrealistically low.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a user trying to test his code on the command-line on a single
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; host before running it on our cluster like so:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np X foo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When he tries to run it on large number of process (X = 256, 512), the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program fails, and I can reproduce this with a simple &quot;Hello, World&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun -np 256 mpihello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've done some testing and found that X &lt;155 for this program to work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this a bug, part of the standard, or design/implementation decision?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One possible issue is the limit on the number of descriptors.  The error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message should be pretty helpful and descriptive, but perhaps you're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using an older version of OMPI.  If this is your problem, one workaround
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is something like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unlimit descriptors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 256 mpihello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like I'm not allowed to set that as a regular user:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ulimit -n 2048
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash: ulimit: open files: cannot modify limit: Operation not permitted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since I am the admin, I could change that elsewhere, but I'd rather not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do that system-wide unless absolutely necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; though I guess the syntax depends on what shell you're running.  Another
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is to set the MCA parameter opal_set_max_sys_limits to 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That didn't work either:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -mca opal_set_max_sys_limits 1 -np 256 mpihello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 252 additional processes aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12230.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>In reply to:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12238.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12238.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
