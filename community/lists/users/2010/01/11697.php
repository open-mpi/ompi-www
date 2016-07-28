<?
$subject_val = "Re: [OMPI users] openib btl slows down application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 16:43:38 2010" -->
<!-- isoreceived="20100105214338" -->
<!-- sent="Tue, 5 Jan 2010 16:43:33 -0500" -->
<!-- isosent="20100105214333" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib btl slows down application" -->
<!-- id="2D4F6052-E430-46C1-8906-6FE808647C9A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B423B39.4070507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib btl slows down application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 16:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<li><strong>Previous message:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<li><strong>In reply to:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2010, at 2:02 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Maybe the experts on this list can comment on what *should* be happening inside OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meanwhile, you should probably avoid MPI_Sendrecv_replace if you care about performance.  The function is mostly a convenience function and if you care about performance you'd be safest, if you're going to run with different MPIs, to use MPI_Sendrecv instead.  That means you need a send buffer and a receive buffer.  A little more hassle, perhaps, but it means you have better control over the performance characteristics.  E.g., you won't have all those extra allocs/frees, which is what you almost surely have with most MPI implementations.
</span><br>
<p>Agreed.
<br>
<p>It's a tough call about how to make MPI_Sendrecv_replace &quot;better&quot; -- because there's several different definitions of &quot;better&quot; that might fit here...
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
<li><strong>Next message:</strong> <a href="11698.php">Leonardo Machado Moreira: "Re: [OMPI users] How to test it"</a>
<li><strong>Previous message:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<li><strong>In reply to:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
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
