<?
$subject_val = "Re: [OMPI users] running external program on same processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 21:13:12 2010" -->
<!-- isoreceived="20100303021312" -->
<!-- sent="Wed, 03 Mar 2010 13:13:01 +1100" -->
<!-- isosent="20100303021301" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program on same processor	(Fortran)" -->
<!-- id="1267582381.5836.106.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="SNT110-W29DBAC3AE6F0F018EAB4068B3A0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] running external program on same processor	(Fortran)<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 21:13:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12209.php">Damien Hocking: "[OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12207.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12206.php">abc def: "[OMPI users] running external program on same processor (Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Surely this is the problem of the scheduler that your system uses,
<br>
rather than MPI?
<br>
<p><p>On Wed, 2010-03-03 at 00:48 +0000, abc def wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if someone can help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The situation is that I have an MPI-parallel fortran program. I run it
</span><br>
<span class="quotelev1">&gt; and it's distributed on N cores, and each of these processes must call
</span><br>
<span class="quotelev1">&gt; an external program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This external program is also an MPI program, however I want to run it
</span><br>
<span class="quotelev1">&gt; in serial, on the core that is calling it, as if it were part of the
</span><br>
<span class="quotelev1">&gt; fortran program. The fortran program waits until the external program
</span><br>
<span class="quotelev1">&gt; has completed, and then continues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that this external program seems to run on any core,
</span><br>
<span class="quotelev1">&gt; and not necessarily the (now idle) core that called it. This slows
</span><br>
<span class="quotelev1">&gt; things down a lot as you get one core doing multiple tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone tell me how I can call the program and ensure it runs only
</span><br>
<span class="quotelev1">&gt; on the core that's calling it? Note that there are several cores per
</span><br>
<span class="quotelev1">&gt; node. I can ID the node by running the hostname command (I don't know
</span><br>
<span class="quotelev1">&gt; a way to do this for individual cores).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Extra information that might be helpful:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I simply run the external program from the command line (ie, type
</span><br>
<span class="quotelev1">&gt; &quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within the
</span><br>
<span class="quotelev1">&gt; fortran program by calling it via
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it doesn't run at all (doesn't even start) and everything crashes. I
</span><br>
<span class="quotelev1">&gt; don't know why this is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I call it using mpiexec:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then it does work, but I get the problem that it can go on any core. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Do you want a Hotmail account? Sign-up now - Free
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
<li><strong>Next message:</strong> <a href="12209.php">Damien Hocking: "[OMPI users] noob warning - problems testing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12207.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12206.php">abc def: "[OMPI users] running external program on same processor (Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
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
