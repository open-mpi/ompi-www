<?
$subject_val = "Re: [OMPI users] running external program on same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 12:24:04 2010" -->
<!-- isoreceived="20100303172404" -->
<!-- sent="Wed, 3 Mar 2010 18:23:54 +0100" -->
<!-- isosent="20100303172354" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program on same	processor	(Fortran)" -->
<!-- id="F0C20882-5F5B-4347-8A5C-54AA3A742AEF_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B8E8F20.1080500_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] running external program on same	processor	(Fortran)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 12:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you speaking of the same?
<br>
<p>Am 03.03.2010 um 17:32 schrieb Prentice Bisbal:
<br>
<p><span class="quotelev1">&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Surely this is the problem of the scheduler that your system uses,
</span><br>
<p>This I would also state.
<br>
<p><p><span class="quotelev2">&gt;&gt; rather than MPI?
</span><br>
<p>Scheduler in the Linux kernel?
<br>
<p><p><span class="quotelev1">&gt; That's not true. The scheduler only assigns the initial processes to
</span><br>
<span class="quotelev1">&gt; nodes
</span><br>
<p>Scheduler in MPI?
<br>
<p><p><span class="quotelev1">&gt; and starts them. It can kill the processes it starts if they use
</span><br>
<span class="quotelev1">&gt; too much memory or run too long, but doesn't prevent them from  
</span><br>
<span class="quotelev1">&gt; spawning
</span><br>
<span class="quotelev1">&gt; more processes, and once spawned,
</span><br>
<p>When the processes are bound to one and the same core, these  
<br>
addititonal processes won't intefere with other jobs' processes on  
<br>
the same node which run on the other cores.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; unless they are spawned through the
</span><br>
<span class="quotelev1">&gt; scheduler, it has no control over them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2010-03-03 at 00:48 +0000, abc def wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if someone can help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The situation is that I have an MPI-parallel fortran program. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it's distributed on N cores, and each of these processes must  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an external program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This external program is also an MPI program, however I want to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in serial, on the core that is calling it, as if it were part of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fortran program. The fortran program waits until the external  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has completed, and then continues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that this external program seems to run on any core,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and not necessarily the (now idle) core that called it. This slows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things down a lot as you get one core doing multiple tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone tell me how I can call the program and ensure it runs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the core that's calling it? Note that there are several cores per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node. I can ID the node by running the hostname command (I don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a way to do this for individual cores).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Extra information that might be helpful:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I simply run the external program from the command line (ie, type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fortran program by calling it via
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it doesn't run at all (doesn't even start) and everything crashes. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't know why this is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I call it using mpiexec:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then it does work, but I get the problem that it can go on any core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____________________________________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you want a Hotmail account? Sign-up now - Free
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12222.php">Prentice Bisbal: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
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
