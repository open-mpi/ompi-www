<?
$subject_val = "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 16:49:23 2009" -->
<!-- isoreceived="20090824204923" -->
<!-- sent="Mon, 24 Aug 2009 16:49:17 -0400" -->
<!-- isosent="20090824204917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="A3ED4AA6-2680-4264-A122-1B90AD470F71_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A92F6C2.6060507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 16:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 4:23 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Meanwhile, the last process, P2, is waiting on a receive before it
</span><br>
<span class="quotelev1">&gt; enters the barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right-o -- I missed that key point.  So yes, P0's send will definitely  
<br>
match that first recv (before the barrier).  If the barrier was not  
<br>
there and the P0 send was a different length from the P1 send, and  
<br>
P2's receives assume that they come in that order, Bad Things could  
<br>
happen if the barrier was removed.
<br>
<p>The statement I made that started this whole thread was probably  
<br>
something along the lines of &quot;Any MPI application that relies on  
<br>
MPI_BARRIER for correctness is erroneous.&quot;  I'll now revise that  
<br>
statement; how about &quot;Any MPI application that relies on MPI_BARRIER  
<br>
for correctness is a bad idea.&quot;
<br>
<p>:-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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
