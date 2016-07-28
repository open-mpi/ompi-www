<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 10:20:07 2005" -->
<!-- isoreceived="20050817152007" -->
<!-- sent="Wed, 17 Aug 2005 11:20:05 -0400" -->
<!-- isosent="20050817152005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="137067a01a8194410fa8cfc44bea7ff7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f7c579e4786c59be3e88db10931d868e_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-17 10:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">Jeff Squyres: "ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0185.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2005, at 10:39 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; A similar situation is true for MPI_REDUCE_SCATTER -- PMB is passing in
</span><br>
<span class="quotelev1">&gt; an array of recvcounts that are all 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll do 2 things for this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Mail the PMB guys and tell them about this problem
</span><br>
--  
<br>
{+} Jeff Squyres
<br>
{+} The Open MPI Project
<br>
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
<br>
Even more on this...
<br>
<p>Pallas was absorbed by Intel.  So the latest version is not PMB 2.2,  
<br>
it's the IMB 2.3 (Intel MPI Benchmark, which you can download from  
<br>
<a href="http://www.intel.com/cd/software/products/asmo-na/eng/cluster/mpi/">http://www.intel.com/cd/software/products/asmo-na/eng/cluster/mpi/</a> 
<br>
219848.htm).
<br>
<p>IMB 2.3 still does these 0 byte reduces, so I'll mail them about it.
<br>
<p>But there are bugs in PMB 2.2 that cause a no-op 0-byte Reduce_scatter  
<br>
to invoke a seg fault in the PMB code base.  These bugs are fixed in  
<br>
IMB 2.3.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} jsquyres_at_[hidden]
{+} <a href="http://www.lam-mpi.org/">http://www.lam-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0177.php">Jeff Squyres: "ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Previous message:</strong> <a href="0175.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0185.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
