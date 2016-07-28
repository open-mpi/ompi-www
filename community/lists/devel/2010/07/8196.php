<?
$subject_val = "Re: [OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 08:21:50 2010" -->
<!-- isoreceived="20100720122150" -->
<!-- sent="Tue, 20 Jul 2010 08:22:26 -0400" -->
<!-- isosent="20100720122226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB warnings" -->
<!-- id="6F2472D4-1D61-4939-823B-259569AC78EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.3.1007201303570.31608_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 08:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2010, at 8:03 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Also, it seems like the 3rd parameter could be problematic if it ever
</span><br>
<span class="quotelev2">&gt; &gt; goes larger than 2B -- it'll increment in the wrong direction, won't it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not on most systems.  
</span><br>
<p>Ah -- I just checked -- the associativity of + and (cast) are equal, and are right to left.  So it should be ok.  But still, for defensive programming purposes, I'd prefer this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (!OPAL_ATOMIC_CMPSET_32((int32_t*)&amp;ep-&gt;eager_rdma_remote.seq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int32_t)ftr-&gt;seq, (int32_t)(ftr-&gt;seq+1)));
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8195.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8197.php">N.M. Maclaren: "Re: [OMPI devel] IB warnings"</a>
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
