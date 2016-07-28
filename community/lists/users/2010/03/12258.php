<?
$subject_val = "Re: [OMPI users] running external program on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 09:52:15 2010" -->
<!-- isoreceived="20100305145215" -->
<!-- sent="Fri, 5 Mar 2010 14:52:09 +0000" -->
<!-- isosent="20100305145209" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running external program on	same	processor	(Fortran)" -->
<!-- id="SNT110-W605F58FB0091206F963C148B380_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="31B865F1-ED7C-4621-AD1B-36CCFF6AB061_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running external program on	same	processor	(Fortran)<br>
<strong>From:</strong> abc def (<em>cannonjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 09:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for the comments. Indeed, until yesterday, I didn't realise the difference between MVAPICH, MVAPICH2 and Open-MPI.
<br>
<p>This problem has moved from mvapich2 to open-mpi now however, because I now realise that the production environment uses Open-MPI, which means my solution for mvapich2 doesn't work now. So if I may ask your kind assistance:
<br>
<p>Just to re-cap, I have an MPI fortran program, which runs on N nodes, and each node needs to run an external program. This is external program was written for MPI, although I want to run it in serial as part of the process on each node.
<br>
<p>Is there any way at all to launch this external MPI program so it's treated simply as a (serial) extension of the current node's processes? As I say, the MPI originating program simply waits for the external program to finish before continuing, so it it's essentially a bit like a &quot;subroutine&quot;, in that sense.
<br>
<p>I'm having problems launching this external program from within my MPI program, under the open-mpi system, even without worrying about node assignment, and I think this might be because the system detects that I'm trying to launch another process from one of the nodes, and stops it. I'm guessing here, but it simply stops with an error saying the MPI process was stopped.
<br>
<p>Any help is very much appreciated; I have been going at this for more than a day now and don't seem to be getting anywhere.
<br>
<p>Thank you!
<br>
<p>From: rhc_at_[hidden]
<br>
Date: Wed, 3 Mar 2010 07:24:32 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] running external program on	same	processor	(Fortran)
<br>
<p><p><p>It also would have been really helpful to know that you were using MVAPICH and -not- Open MPI as this mailing list is for the latter. We could have directed you to the appropriate place if we had known.
<br>
<p>On Mar 3, 2010, at 5:17 AM, abc def wrote:I don't know (I'm a little new to this area), but I figured out how to get around the problem:
<br>
<p>Using SGE and MVAPICH2, the &quot;-env MV2_CPU_MAPPING 0:1.....&quot; option in mpiexec seems to do the trick.
<br>
<p>So when calling the external program with mpiexec, I map the called process to the current core rank, and it seems to stay distributed and separated as I want.
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
<p>Not got a Hotmail account? Sign-up now - Free _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12257.php">Joshua Hursey: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>In reply to:</strong> <a href="12213.php">Ralph Castain: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
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
