<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 22 15:30:08 2006" -->
<!-- isoreceived="20060222203008" -->
<!-- sent="Wed, 22 Feb 2006 15:29:02 -0500" -->
<!-- isosent="20060222202902" -->
<!-- name="Aniruddha Shet" -->
<!-- email="shet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] Job fails with mpiP" -->
<!-- id="003e01c637ee$9e61c6f0$3401a8c0_at_dl474swarup" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B6BF26C-B72A-447D-9E7C-488E0ED2136D_at_open-mpi.org" -->
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
<strong>From:</strong> Aniruddha Shet (<em>shet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-22 15:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0687.php">Emanuel Ziegler: "[OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0685.php">Cezary Sliwa: "[OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0713.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Reply:</strong> <a href="0713.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies for my delayed response.
<br>
<p>I tried with openmpi-1.1a1r9098.tar.bz2 but still encounter the same
<br>
problem.
<br>
<p>There is no core being produced. I am sending you whatever output trace is
<br>
written. Not sure if the attached trace will allow you to debug the problem.
<br>
<p>Thanks,
<br>
Aniruddha
<br>
<p>----- Original Message -----
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, February 15, 2006 8:27 AM
<br>
Subject: Re: [OMPI users] [O-MPI users] Job fails with mpiP
<br>
<p><p><span class="quotelev1">&gt; Sorry it took so long to reply to this -- the mpiP download site was
</span><br>
<span class="quotelev1">&gt; down for a few days.  I have downloaded and installed mpiP and run it
</span><br>
<span class="quotelev1">&gt; with some toy MPI programs under Open MPI and it seems to work fine
</span><br>
<span class="quotelev1">&gt; for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. We have recently committed some bug fixes to both the trunk and
</span><br>
<span class="quotelev1">&gt; the v1.0 branch (i.e., since you sent this mail).  We don't have a
</span><br>
<span class="quotelev1">&gt; new 1.0.2 alpha yet, but could you try a new nightly tarball from
</span><br>
<span class="quotelev1">&gt; either the trunk or v1.0 branch and see if it solves your problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. From the description in the README in your tarball, it looks like
</span><br>
<span class="quotelev1">&gt; things are dying right away during startup (which is why I was
</span><br>
<span class="quotelev1">&gt; hopeful that I could replicate the problem, even without your
</span><br>
<span class="quotelev1">&gt; application).  It also looks like a process died due to a segv -- was
</span><br>
<span class="quotelev1">&gt; a core produced?  If #1 doesn't solve your problems, can you generate
</span><br>
<span class="quotelev1">&gt; a backtrace from that corefile and send it here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2006, at 5:46 PM, Aniruddha Shet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to profile an Open MPI job using the mpiP profiling
</span><br>
<span class="quotelev2">&gt; &gt; library.
</span><br>
<span class="quotelev2">&gt; &gt; Running the job without the library completes successfully. When I
</span><br>
<span class="quotelev2">&gt; &gt; link the
</span><br>
<span class="quotelev2">&gt; &gt; profiling library into the executable, the job fails to run. I am
</span><br>
<span class="quotelev2">&gt; &gt; able to
</span><br>
<span class="quotelev2">&gt; &gt; build the job with mpiP, but the execution fails. Please see the
</span><br>
<span class="quotelev2">&gt; &gt; attached
</span><br>
<span class="quotelev2">&gt; &gt; tar file for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0686/coretrace">coretrace</a>
</ul>
<!-- attachment="coretrace" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0687.php">Emanuel Ziegler: "[OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="0685.php">Cezary Sliwa: "[OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0713.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Reply:</strong> <a href="0713.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
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
