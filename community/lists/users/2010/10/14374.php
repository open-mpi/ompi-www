<?
$subject_val = "Re: [OMPI users] Granular locks?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 10:38:09 2010" -->
<!-- isoreceived="20101004143809" -->
<!-- sent="Mon, 4 Oct 2010 08:37:54 -0600" -->
<!-- isosent="20101004143754" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Granular locks?" -->
<!-- id="352F3C66-03DC-40F2-9CA6-D77BE179043A_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="003CEAE0-91E5-4DC7-9A94-D258769CF8A7_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Granular locks?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 10:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14375.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>In reply to:</strong> <a href="14366.php">Gijsbert Wiesenekker: "[OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 1, 2010, at 3:24 PM, Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; I have a large array that is shared between two processes. One process updates array elements randomly, the other process reads array elements randomly. Most of the time these writes and reads do not overlap.
</span><br>
<span class="quotelev1">&gt; The current version of the code uses Linux shared memory with NSEMS semaphores. When array element i has to be read or updated semaphore (i % NSEMS) is used. if NSEMS = 1 the entire array will be locked which leads to unnecessary waits because reads and writes do not overlap most of the time. Performance increases as NSEMS increases, and flattens out at NSEMS = 32, at which point the code runs twice as fast when compared to NSEMS = 1.
</span><br>
<span class="quotelev1">&gt; I want to change the code to use OpenMPI RMA, but MPI_Win_lock locks the entire array, which is similar to NSEMS = 1. Is there a way to have more granular locks?
</span><br>
<p>The MPI standard defines MPI_WIN_LOCK as protecting the entire window, so the short answer to your question is no.  Depending on your application, it may be possible to have multiple windows independent pieces of the data to get the behavior you want, but that does seem icky.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14375.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>In reply to:</strong> <a href="14366.php">Gijsbert Wiesenekker: "[OMPI users] Granular locks?"</a>
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
