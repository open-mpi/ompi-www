<?
$subject_val = "Re: [OMPI users] running external program	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 20:50:50 2010" -->
<!-- isoreceived="20100304015050" -->
<!-- sent="Thu, 04 Mar 2010 12:50:39 +1100" -->
<!-- isosent="20100304015039" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program	on	same	processor	(Fortran)" -->
<!-- id="1267667439.5836.134.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4B8EA31B.1000303_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] running external program	on	same	processor	(Fortran)<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 20:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12235.php">马少杰: "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12233.php">Fernando Lemos: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-03-03 at 12:57 -0500, Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Are you speaking of the same?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good point, Reuti. I was thinking of a cluster scheduler like SGE or
</span><br>
<span class="quotelev1">&gt; Torque.
</span><br>
<p><p>Yeah, I meant the scheduler in the CPU time slice sense.
<br>
<p><a href="http://en.wikipedia.org/wiki/Scheduling_(computing">http://en.wikipedia.org/wiki/Scheduling_(computing</a>)
<br>
vs.
<br>
<a href="http://en.wikipedia.org/wiki/Job_scheduler">http://en.wikipedia.org/wiki/Job_scheduler</a>
<br>
<p><p><p><p><span class="quotelev2">&gt; &gt; Am 03.03.2010 um 17:32 schrieb Prentice Bisbal:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Surely this is the problem of the scheduler that your system uses,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This I would also state.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rather than MPI?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Scheduler in the Linux kernel?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's not true. The scheduler only assigns the initial processes to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Scheduler in MPI?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and starts them. It can kill the processes it starts if they use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; too much memory or run too long, but doesn't prevent them from spawning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; more processes, and once spawned,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When the processes are bound to one and the same core, these addititonal
</span><br>
<span class="quotelev2">&gt; &gt; processes won't intefere with other jobs' processes on the same node
</span><br>
<span class="quotelev2">&gt; &gt; which run on the other cores.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unless they are spawned through the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; scheduler, it has no control over them.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, 2010-03-03 at 00:48 +0000, abc def wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I wonder if someone can help.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The situation is that I have an MPI-parallel fortran program. I run it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and it's distributed on N cores, and each of these processes must call
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; an external program.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This external program is also an MPI program, however I want to run it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in serial, on the core that is calling it, as if it were part of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fortran program. The fortran program waits until the external program
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; has completed, and then continues.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The problem is that this external program seems to run on any core,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and not necessarily the (now idle) core that called it. This slows
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; things down a lot as you get one core doing multiple tasks.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can anyone tell me how I can call the program and ensure it runs only
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; on the core that's calling it? Note that there are several cores per
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; node. I can ID the node by running the hostname command (I don't know
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a way to do this for individual cores).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ====
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Extra information that might be helpful:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If I simply run the external program from the command line (ie, type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fortran program by calling it via
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it doesn't run at all (doesn't even start) and everything crashes. I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; don't know why this is.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If I call it using mpiexec:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; then it does work, but I get the problem that it can go on any core.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Do you want a Hotmail account? Sign-up now - Free
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Prentice Bisbal
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux Software Support Specialist/System Administrator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; School of Natural Sciences
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Institute for Advanced Study
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Princeton, NJ
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12235.php">马少杰: "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12233.php">Fernando Lemos: "[OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
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
