<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 22:43:03 2007" -->
<!-- isoreceived="20070529024303" -->
<!-- sent="Mon, 28 May 2007 22:42:56 -0400" -->
<!-- isosent="20070529024256" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing an array in an MPI program?" -->
<!-- id="C2810B70.7BAF%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00c701c7a198$22b2c2b0$d80cb38b_at_bs" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 22:42:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>In reply to:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tahir,
<br>
&nbsp;&nbsp;There are a variety of ways to create shared memory segments.  I am not a
<br>
&nbsp;Fortran expert, but do believe this is something that needs to be done from
<br>
c/c++.
<br>
&nbsp;In Open MPI we use the mmap set of routines to create the shared memory
<br>
segments
<br>
&nbsp;we use.
<br>
<p>Rich
<br>
<p><p>On 5/28/07 10:21 PM, &quot;Tahir Malas&quot; &lt;tmalas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There is nothing preventing you from creating your own shared memory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; segment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for use by your application.  This does not impact the MPI implementation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You need to make sure you take care of all the issues associated with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; multiple procs/threads accessing the same cache lines, which can cause
</span><br>
<span class="quotelev3">&gt;&gt; &gt; quite
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a bit of performance degradation, if not managed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can we create &quot;our own shared memory segment?&quot; Do you mean Linux System
</span><br>
<span class="quotelev1">&gt; calls? I see shmget routine, for example, but it is a C routine. Do we have
</span><br>
<span class="quotelev1">&gt; to write a fortran interface to use it?
</span><br>
<span class="quotelev1">&gt; Tahir.
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>In reply to:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
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
