<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 17:47:11 2014" -->
<!-- isoreceived="20141210224711" -->
<!-- sent="Wed, 10 Dec 2014 15:47:09 -0700" -->
<!-- isosent="20141210224709" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE hang" -->
<!-- id="20141210224709.GB31431_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 17:47:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25959.php">Luca Fini: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Previous message:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>In reply to:</strong> <a href="25956.php">Christopher O'Grady: "[OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Several things:
<br>
<p>&nbsp;- In 1.8.x only shared memory windows work with multiple threads. This
<br>
&nbsp;&nbsp;&nbsp;problem will be fixed in the master branch soon. A back-port to 1.8 is
<br>
&nbsp;&nbsp;&nbsp;unlikely given the magnitude of the changes.
<br>
<p>&nbsp;- I highly recommend using the MPI-3 call MPI_Win_allocate over
<br>
&nbsp;&nbsp;&nbsp;MPI_Win_create. The new call will give better performance once we
<br>
&nbsp;&nbsp;&nbsp;roll out better one-sided support in master over the next month or
<br>
&nbsp;&nbsp;&nbsp;so.
<br>
<p>-Nathan
<br>
<p>On Wed, Dec 10, 2014 at 02:00:43PM -0800, Christopher O'Grady wrote:
<br>
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
<span class="quotelev1">&gt;             --with-lsf=no \
</span><br>
<span class="quotelev1">&gt;             --enable-mpi-thread-multiple
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25958/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25959.php">Luca Fini: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>Previous message:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>In reply to:</strong> <a href="25956.php">Christopher O'Grady: "[OMPI users] MPI_THREAD_MULTIPLE hang"</a>
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
