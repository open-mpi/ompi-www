<?
$subject_val = "Re: [OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 08:35:23 2010" -->
<!-- isoreceived="20100720123523" -->
<!-- sent="20 Jul 2010 13:35:17 +0100" -->
<!-- isosent="20100720123517" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB warnings" -->
<!-- id="Prayer.1.3.3.1007201335170.20243_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F2472D4-1D61-4939-823B-259569AC78EE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IB warnings<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 08:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20 2010, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, it seems like the 3rd parameter could be problematic if it ever 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; goes larger than 2B -- it'll increment in the wrong direction, won't 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not on most systems.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah -- I just checked -- the associativity of + and (cast) are equal, and 
</span><br>
<span class="quotelev1">&gt; are right to left. So it should be ok.
</span><br>
<p>No, they aren't!  That's unary plus.  Cast binds more strongly.  The reason
<br>
that it is OK is that uint32_t and int32_t are required to be twos'
<br>
complement.
<br>
<p><span class="quotelev1">&gt; But still, for defensive 
</span><br>
<span class="quotelev1">&gt; programming purposes, I'd prefer this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       } while 
</span><br>
<span class="quotelev1">&gt; (!OPAL_ATOMIC_CMPSET_32((int32_t*)&amp;ep-&gt;eager_rdma_remote.seq,
</span><br>
<span class="quotelev1">&gt;                                       (int32_t)ftr-&gt;seq, 
</span><br>
<span class="quotelev1">&gt; (int32_t)(ftr-&gt;seq+1)));
</span><br>
<p>That parses differently, but is semantically equivalent with twos' 
<br>
complement and quiet wrapping on overflow. I agree that it's a bit cleaner.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
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
