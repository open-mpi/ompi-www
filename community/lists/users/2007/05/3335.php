<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 22:21:50 2007" -->
<!-- isoreceived="20070529022150" -->
<!-- sent="Tue, 29 May 2007 05:21:59 +0300" -->
<!-- isosent="20070529022159" -->
<!-- name="Tahir Malas" -->
<!-- email="tmalas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing an array in an MPI program?" -->
<!-- id="00c701c7a198$22b2c2b0$d80cb38b_at_bs" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C280C566.7B96%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Tahir Malas (<em>tmalas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 22:21:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3336.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>In reply to:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3336.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3336.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<span class="quotelev1">&gt; There is nothing preventing you from creating your own shared memory
</span><br>
<span class="quotelev1">&gt; segment
</span><br>
<span class="quotelev1">&gt; for use by your application.  This does not impact the MPI implementation.
</span><br>
<span class="quotelev1">&gt; You need to make sure you take care of all the issues associated with
</span><br>
<span class="quotelev1">&gt; multiple procs/threads accessing the same cache lines, which can cause
</span><br>
<span class="quotelev1">&gt; quite
</span><br>
<span class="quotelev1">&gt; a bit of performance degradation, if not managed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>How can we create &quot;our own shared memory segment?&quot; Do you mean Linux System
<br>
calls? I see shmget routine, for example, but it is a C routine. Do we have
<br>
to write a fortran interface to use it? 
<br>
Tahir.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3336.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>In reply to:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3336.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3336.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
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
