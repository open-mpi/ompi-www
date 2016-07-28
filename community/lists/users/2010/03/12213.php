<?
$subject_val = "Re: [OMPI users] running external program on same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 09:24:43 2010" -->
<!-- isoreceived="20100303142443" -->
<!-- sent="Wed, 3 Mar 2010 07:24:32 -0700" -->
<!-- isosent="20100303142432" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program on same	processor	(Fortran)" -->
<!-- id="31B865F1-ED7C-4621-AD1B-36CCFF6AB061_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT110-W3962B134EA67B558FBFDD88B3A0_at_phx.gbl" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 09:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12258.php">abc def: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12258.php">abc def: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It also would have been really helpful to know that you were using MVAPICH and -not- Open MPI as this mailing list is for the latter. We could have directed you to the appropriate place if we had known.
<br>
<p><p>On Mar 3, 2010, at 5:17 AM, abc def wrote:
<br>
<p><span class="quotelev1">&gt; I don't know (I'm a little new to this area), but I figured out how to get around the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using SGE and MVAPICH2, the &quot;-env MV2_CPU_MAPPING 0:1.....&quot; option in mpiexec seems to do the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So when calling the external program with mpiexec, I map the called process to the current core rank, and it seems to stay distributed and separated as I want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope someone else finds this useful in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 3 Mar 2010 13:13:01 +1100
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] running external program on same	processor	(Fortran)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Surely this is the problem of the scheduler that your system uses,
</span><br>
<span class="quotelev2">&gt; &gt; rather than MPI?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2010-03-03 at 00:48 +0000, abc def wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I wonder if someone can help.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The situation is that I have an MPI-parallel fortran program. I run it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and it's distributed on N cores, and each of these processes must call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; an external program.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This external program is also an MPI program, however I want to run it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in serial, on the core that is calling it, as if it were part of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fortran program. The fortran program waits until the external program
</span><br>
<span class="quotelev3">&gt; &gt; &gt; has completed, and then continues.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The problem is that this external program seems to run on any core,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and not necessarily the (now idle) core that called it. This slows
</span><br>
<span class="quotelev3">&gt; &gt; &gt; things down a lot as you get one core doing multiple tasks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can anyone tell me how I can call the program and ensure it runs only
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on the core that's calling it? Note that there are several cores per
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node. I can ID the node by running the hostname command (I don't know
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a way to do this for individual cores).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ====
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Extra information that might be helpful:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I simply run the external program from the command line (ie, type
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fortran program by calling it via
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it doesn't run at all (doesn't even start) and everything crashes. I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; don't know why this is.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I call it using mpiexec:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; then it does work, but I get the problem that it can go on any core. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ______________________________________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you want a Hotmail account? Sign-up now - Free
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not got a Hotmail account? Sign-up now - Free _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12213/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12212.php">abc def: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12258.php">abc def: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12258.php">abc def: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
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
