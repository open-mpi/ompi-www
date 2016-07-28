<?
$subject_val = "[OMPI users] MPI_THREAD_MULTIPLE hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 17:00:45 2014" -->
<!-- isoreceived="20141210220045" -->
<!-- sent="Wed, 10 Dec 2014 14:00:43 -0800" -->
<!-- isosent="20141210220043" -->
<!-- name="Christopher O'Grady" -->
<!-- email="cpo_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_THREAD_MULTIPLE hang" -->
<!-- id="21640.49803.168415.348739_at_rhel6-64h.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_THREAD_MULTIPLE hang<br>
<strong>From:</strong> Christopher O'Grady (<em>cpo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 17:00:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Previous message:</strong> <a href="25955.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Reply:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Reply:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I see what looks like a bug in openmpi involving the
<br>
MPI_THREAD_MULTIPLE.  When we call MPI_Init_thread with this argument,
<br>
this 61-line example hangs:
<br>
<p><a href="http://www.slac.stanford.edu/~cpo/mpi_one_sided.cc">http://www.slac.stanford.edu/~cpo/mpi_one_sided.cc</a>
<br>
<p>There are some commented out lines in that file that we can use
<br>
to workaround the problem.
<br>
<p>We use openmpi 1.8.1 configured like this:
<br>
<p>./configure --prefix=%{instdir} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-lsf=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple
<br>
<p>I looked through the mailing list archives, and saw some posts that
<br>
looked similar for version 1.7.1.  Is this still a known issue for
<br>
1.8.1?
<br>
<p>Thanks for any thoughts...
<br>
<p>chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Previous message:</strong> <a href="25955.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Reply:</strong> <a href="25957.php">Ralph Castain: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
<li><strong>Reply:</strong> <a href="25958.php">Nathan Hjelm: "Re: [OMPI users] MPI_THREAD_MULTIPLE hang"</a>
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
