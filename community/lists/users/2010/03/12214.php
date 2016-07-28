<?
$subject_val = "Re: [OMPI users] running external program on same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 11:49:06 2010" -->
<!-- isoreceived="20100303164906" -->
<!-- sent="Wed, 03 Mar 2010 11:32:32 -0500" -->
<!-- isosent="20100303163232" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program on same	processor	(Fortran)" -->
<!-- id="4B8E8F20.1080500_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1267582381.5836.106.camel_at_rscpc28.anu.edu.au" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 11:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; Surely this is the problem of the scheduler that your system uses,
</span><br>
<span class="quotelev1">&gt; rather than MPI?
</span><br>
<p>That's not true. The scheduler only assigns the initial processes to
<br>
nodes and starts them. It can kill the processes it starts if they use
<br>
too much memory or run too long, but doesn't prevent them from spawning
<br>
more processes, and once spawned, unless they are spawned through the
<br>
scheduler, it has no control over them.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2010-03-03 at 00:48 +0000, abc def wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if someone can help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The situation is that I have an MPI-parallel fortran program. I run it
</span><br>
<span class="quotelev2">&gt;&gt; and it's distributed on N cores, and each of these processes must call
</span><br>
<span class="quotelev2">&gt;&gt; an external program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This external program is also an MPI program, however I want to run it
</span><br>
<span class="quotelev2">&gt;&gt; in serial, on the core that is calling it, as if it were part of the
</span><br>
<span class="quotelev2">&gt;&gt; fortran program. The fortran program waits until the external program
</span><br>
<span class="quotelev2">&gt;&gt; has completed, and then continues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that this external program seems to run on any core,
</span><br>
<span class="quotelev2">&gt;&gt; and not necessarily the (now idle) core that called it. This slows
</span><br>
<span class="quotelev2">&gt;&gt; things down a lot as you get one core doing multiple tasks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone tell me how I can call the program and ensure it runs only
</span><br>
<span class="quotelev2">&gt;&gt; on the core that's calling it? Note that there are several cores per
</span><br>
<span class="quotelev2">&gt;&gt; node. I can ID the node by running the hostname command (I don't know
</span><br>
<span class="quotelev2">&gt;&gt; a way to do this for individual cores).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ====
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Extra information that might be helpful:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I simply run the external program from the command line (ie, type
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within the
</span><br>
<span class="quotelev2">&gt;&gt; fortran program by calling it via
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it doesn't run at all (doesn't even start) and everything crashes. I
</span><br>
<span class="quotelev2">&gt;&gt; don't know why this is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I call it using mpiexec:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then it does work, but I get the problem that it can go on any core. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Do you want a Hotmail account? Sign-up now - Free
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12215.php">Prentice Bisbal: "[OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
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
