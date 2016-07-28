<?
$subject_val = "Re: [OMPI users] Granular locks?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 10:42:54 2010" -->
<!-- isoreceived="20101004144254" -->
<!-- sent="Mon, 4 Oct 2010 08:42:36 -0600" -->
<!-- isosent="20101004144236" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Granular locks?" -->
<!-- id="7E50C967-2CBA-46F0-A881-FB379C922A7D_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2C682023-E765-409C-9B0F-FED41379D95B_at_gmail.com" -->
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
<strong>Date:</strong> 2010-10-04 10:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14376.php">Ed Peddycoart: "[OMPI users] new open mpi user questions"</a>
<li><strong>Previous message:</strong> <a href="14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<li><strong>In reply to:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15258.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2010, at 2:54 AM, Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 1, 2010, at 23:24 , Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a large array that is shared between two processes. One process updates array elements randomly, the other process reads array elements randomly. Most of the time these writes and reads do not overlap.
</span><br>
<span class="quotelev2">&gt;&gt; The current version of the code uses Linux shared memory with NSEMS semaphores. When array element i has to be read or updated semaphore (i % NSEMS) is used. if NSEMS = 1 the entire array will be locked which leads to unnecessary waits because reads and writes do not overlap most of the time. Performance increases as NSEMS increases, and flattens out at NSEMS = 32, at which point the code runs twice as fast when compared to NSEMS = 1.
</span><br>
<span class="quotelev2">&gt;&gt; I want to change the code to use OpenMPI RMA, but MPI_Win_lock locks the entire array, which is similar to NSEMS = 1. Is there a way to have more granular locks?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gijsbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, is there an MPI_Win_lock equavalent for IPC_NOWAIT?
</span><br>
<p><p>No.  Every call to MPI_Win_lock will (eventually) result in a locking of the window.  Note, however, that MPI_WIN_LOCK returning does not guarantee the remote window has been locked.  It only guarantees that it is now safe to call data transfer operations targeting that window.  An implementation could (and Open MPI frequently does) return immediately, queue up all data transfers until some ACK is received from the target, and then begin data movement operations.  Confusing, but flexible for the wide variety of platforms MPI must target.
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
<li><strong>Next message:</strong> <a href="14376.php">Ed Peddycoart: "[OMPI users] new open mpi user questions"</a>
<li><strong>Previous message:</strong> <a href="14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<li><strong>In reply to:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15258.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
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
