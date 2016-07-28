<?
$subject_val = "Re: [OMPI users] running external program on same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 07:17:35 2010" -->
<!-- isoreceived="20100303121735" -->
<!-- sent="Wed, 3 Mar 2010 12:17:30 +0000" -->
<!-- isosent="20100303121730" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program on same	processor	(Fortran)" -->
<!-- id="SNT110-W3962B134EA67B558FBFDD88B3A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> abc def (<em>cannonjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 07:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know (I'm a little new to this area), but I figured out how to get around the problem:
<br>
<p>Using SGE and MVAPICH2, the &quot;-env MV2_CPU_MAPPING 0:1.....&quot; option in mpiexec seems to do the trick.
<br>
<p><p><p>So when calling the external program with mpiexec, I map the called
<br>
process to the current core rank, and it seems to stay distributed and
<br>
separated as I want.
<br>
<p>Hope someone else finds this useful in the future.
<br>
<p><span class="quotelev1">&gt; Date: Wed, 3 Mar 2010 13:13:01 +1100
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] running external program on same	processor	(Fortran)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Surely this is the problem of the scheduler that your system uses,
</span><br>
<span class="quotelev1">&gt; rather than MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2010-03-03 at 00:48 +0000, abc def wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wonder if someone can help.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The situation is that I have an MPI-parallel fortran program. I run it
</span><br>
<span class="quotelev2">&gt; &gt; and it's distributed on N cores, and each of these processes must call
</span><br>
<span class="quotelev2">&gt; &gt; an external program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This external program is also an MPI program, however I want to run it
</span><br>
<span class="quotelev2">&gt; &gt; in serial, on the core that is calling it, as if it were part of the
</span><br>
<span class="quotelev2">&gt; &gt; fortran program. The fortran program waits until the external program
</span><br>
<span class="quotelev2">&gt; &gt; has completed, and then continues.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that this external program seems to run on any core,
</span><br>
<span class="quotelev2">&gt; &gt; and not necessarily the (now idle) core that called it. This slows
</span><br>
<span class="quotelev2">&gt; &gt; things down a lot as you get one core doing multiple tasks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone tell me how I can call the program and ensure it runs only
</span><br>
<span class="quotelev2">&gt; &gt; on the core that's calling it? Note that there are several cores per
</span><br>
<span class="quotelev2">&gt; &gt; node. I can ID the node by running the hostname command (I don't know
</span><br>
<span class="quotelev2">&gt; &gt; a way to do this for individual cores).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ====
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Extra information that might be helpful:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I simply run the external program from the command line (ie, type
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within the
</span><br>
<span class="quotelev2">&gt; &gt; fortran program by calling it via
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; it doesn't run at all (doesn't even start) and everything crashes. I
</span><br>
<span class="quotelev2">&gt; &gt; don't know why this is.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I call it using mpiexec:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; then it does work, but I get the problem that it can go on any core. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ______________________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Do you want a Hotmail account? Sign-up now - Free
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
We want to hear all your funny, exciting and crazy Hotmail stories. Tell us now
<br>
<a href="http://clk.atdmt.com/UKM/go/195013117/direct/01/">http://clk.atdmt.com/UKM/go/195013117/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12212/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
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
