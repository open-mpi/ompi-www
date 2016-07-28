<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 17:04:00 2014" -->
<!-- isoreceived="20141210220400" -->
<!-- sent="Wed, 10 Dec 2014 14:03:56 -0800" -->
<!-- isosent="20141210220356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE hang" -->
<!-- id="C37724AB-BB00-40E1-871E-58B25A99D877_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21640.49803.168415.348739_at_rhel6-64h.slac.stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE hang<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 17:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Previous message:</strong> <a href="25956.php">Christopher O'Grady: "[OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>In reply to:</strong> <a href="25956.php">Christopher O'Grady: "[OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - it is being fixed for 1.8.4
<br>
<p><span class="quotelev1">&gt; On Dec 10, 2014, at 2:00 PM, Christopher O'Grady &lt;cpo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see what looks like a bug in openmpi involving the
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE.  When we call MPI_Init_thread with this argument,
</span><br>
<span class="quotelev1">&gt; this 61-line example hangs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.slac.stanford.edu/~cpo/mpi_one_sided.cc">http://www.slac.stanford.edu/~cpo/mpi_one_sided.cc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some commented out lines in that file that we can use
</span><br>
<span class="quotelev1">&gt; to workaround the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use openmpi 1.8.1 configured like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=%{instdir} \
</span><br>
<span class="quotelev1">&gt;            --with-lsf=no \
</span><br>
<span class="quotelev1">&gt;            --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked through the mailing list archives, and saw some posts that
</span><br>
<span class="quotelev1">&gt; looked similar for version 1.7.1.  Is this still a known issue for
</span><br>
<span class="quotelev1">&gt; 1.8.1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any thoughts...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chris
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25956.php">http://www.open-mpi.org/community/lists/users/2014/12/25956.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Previous message:</strong> <a href="25956.php">Christopher O'Grady: "[OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>In reply to:</strong> <a href="25956.php">Christopher O'Grady: "[OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
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
