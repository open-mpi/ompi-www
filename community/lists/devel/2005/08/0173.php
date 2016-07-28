<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 09:39:34 2005" -->
<!-- isoreceived="20050817143934" -->
<!-- sent="Wed, 17 Aug 2005 10:39:30 -0400" -->
<!-- isosent="20050817143930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="f7c579e4786c59be3e88db10931d868e_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9e94414e359dc6560a7412ac62b54ec6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-17 09:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0171.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2005, at 8:48 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 80)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 194)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 80)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 194)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 80)
</span><br>
<span class="quotelev2">&gt;&gt; Request for 0 bytes (coll_basic_reduce.c, 194)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hum.  I was under the impression that George had fixed these, but I get
</span><br>
<span class="quotelev1">&gt; the same warnings.  I'll have a look...
</span><br>
<p>Ok, I tracked this down -- not George's fault.  :-)
<br>
<p>Brian noted that this is an illegal program -- PMB is calling 
<br>
MPI_Reduce() with a count == 0, but MPI-1 specifically states in the 
<br>
description of MPI_REDUCE (p114, 1st paragraph):
<br>
<p>&quot;Each process can provide one element, or a sequence of elements, in 
<br>
which case the combine operation is executed....&quot;
<br>
<p>A similar situation is true for MPI_REDUCE_SCATTER -- PMB is passing in 
<br>
an array of recvcounts that are all 0.
<br>
<p>I'll do 2 things for this:
<br>
<p>1. Mail the PMB guys and tell them about this problem
<br>
2. Add an &quot;if&quot; statement for REDUCE to make it return MPI_SUCCESS 
<br>
immediately if the count is 0, and similarly for REDUCE_SCATTER (I'm 
<br>
unhappy about this -- adding a conditional branch and a loop in 
<br>
performance-critical paths... grumble... I'll add it in the parameter 
<br>
checking section, so at least it won't affect optimized builds)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0174.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0171.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
