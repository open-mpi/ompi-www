<?
$subject_val = "[OMPI users] Granular locks?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  1 17:24:25 2010" -->
<!-- isoreceived="20101001212425" -->
<!-- sent="Fri, 1 Oct 2010 23:24:16 +0200" -->
<!-- isosent="20101001212416" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] Granular locks?" -->
<!-- id="003CEAE0-91E5-4DC7-9A94-D258769CF8A7_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Granular locks?<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-01 17:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="14365.php">Jeff Squyres: "Re: [OMPI users] Potential developer to reinstate Xgrid support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Reply:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Reply:</strong> <a href="14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a large array that is shared between two processes. One process updates array elements randomly, the other process reads array elements randomly. Most of the time these writes and reads do not overlap.
<br>
The current version of the code uses Linux shared memory with NSEMS semaphores. When array element i has to be read or updated semaphore (i % NSEMS) is used. if NSEMS = 1 the entire array will be locked which leads to unnecessary waits because reads and writes do not overlap most of the time. Performance increases as NSEMS increases, and flattens out at NSEMS = 32, at which point the code runs twice as fast when compared to NSEMS = 1.
<br>
I want to change the code to use OpenMPI RMA, but MPI_Win_lock locks the entire array, which is similar to NSEMS = 1. Is there a way to have more granular locks?
<br>
<p>Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="14365.php">Jeff Squyres: "Re: [OMPI users] Potential developer to reinstate Xgrid support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Reply:</strong> <a href="14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Reply:</strong> <a href="14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
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
