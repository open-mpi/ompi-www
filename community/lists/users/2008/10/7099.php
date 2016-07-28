<?
$subject_val = "Re: [OMPI users] job abort on MPI task exit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 09:15:28 2008" -->
<!-- isoreceived="20081027131528" -->
<!-- sent="Mon, 27 Oct 2008 07:15:17 -0600" -->
<!-- isosent="20081027131517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job abort on MPI task exit" -->
<!-- id="796E0E23-BDC2-480F-BDCE-9E7B1DA49ECC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4905A9FF.7050608_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] job abort on MPI task exit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 09:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7097.php">David Singleton: "[OMPI users] job abort on MPI task exit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was added to the 1.3 version - it was not back-ported to the  
<br>
1.2.x series.
<br>
<p>Ralph
<br>
<p>On Oct 27, 2008, at 5:46 AM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apologies if this has been covered in a previous thread - I
</span><br>
<span class="quotelev1">&gt; went back through a lot of posts without seeing anything
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In an attempt to protect some users from themselves, I was hoping
</span><br>
<span class="quotelev1">&gt; that OpenMPI could be configured so that an MPI task calling
</span><br>
<span class="quotelev1">&gt; exit before calling MPI_Finalize() would cause job cleanup, i.e.
</span><br>
<span class="quotelev1">&gt; behave effectively as if MPI_Abort() was called.  The reason is
</span><br>
<span class="quotelev1">&gt; that many users dont realise they need to use MPI_Abort()
</span><br>
<span class="quotelev1">&gt; instead of Fortran stop or C exit.  If exit is called,  all
</span><br>
<span class="quotelev1">&gt; other processes get stuck in the next blocking call and, for a
</span><br>
<span class="quotelev1">&gt; large walltime limit batch job, that can be a real waste of
</span><br>
<span class="quotelev1">&gt; resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think LAM terminated the job if a task exited with non-zero
</span><br>
<span class="quotelev1">&gt; exit status or due to a signal. OpenMPI appears to cleanup
</span><br>
<span class="quotelev1">&gt; only in the case a signalled task.  Ideally, any exit before
</span><br>
<span class="quotelev1">&gt; MPI_Finalize() should be terminal.  Why is this not the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
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
<li><strong>Next message:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Previous message:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7097.php">David Singleton: "[OMPI users] job abort on MPI task exit"</a>
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
