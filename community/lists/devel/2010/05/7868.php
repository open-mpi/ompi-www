<?
$subject_val = "Re: [OMPI devel] openib btl thread safety warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 00:12:35 2010" -->
<!-- isoreceived="20100503041235" -->
<!-- sent="Mon, 3 May 2010 13:40:04 +0930" -->
<!-- isosent="20100503041004" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl thread safety warning" -->
<!-- id="20100503134004.6501a23f_at_lilo" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D3DBBF45-A931-44C3-B26E-2C55B7FE737F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl thread safety warning<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 00:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7867.php">Christopher Samuel: "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7826.php">Jeff Squyres: "[OMPI devel] openib btl thread safety warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sorry I've been on vacation so didn't reply sooner - some
<br>
comments below...
<br>
<p>On Tue, 27 Apr 2010 16:50:49 -0400
<br>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev1">&gt;         do {
</span><br>
<span class="quotelev1">&gt;           ftr-&gt;seq = ep-&gt;eager_rdma_remote.seq;
</span><br>
<span class="quotelev1">&gt;         } while (!OPAL_ATOMIC_CMPSET_32(&amp;ep-&gt;eager_rdma_remote.seq,
</span><br>
<span class="quotelev1">&gt; ftr-&gt;seq, ftr-&gt;seq+1)); #endif
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This line produces the following compiler warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h:505: warning: pointer targets in passing
</span><br>
<span class="quotelev1">&gt; argument 1 of &#226;&#128;&#152;opal_atomic_cmpset_32&#226;&#128;&#153; differ in signedness -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Line 505 is the ATOMIC_CMPSET line.  Chris -- you last touched this
</span><br>
<span class="quotelev1">&gt; line.  Can you fix?
</span><br>
<p>Previously the counter was incremented non atomically which
<br>
when run multithreaded caused spurious warnings about sequence numbers
<br>
not being correct.
<br>
<p>Now I can get rid of the warnings if I change the line to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (!OPAL_ATOMIC_CMPSET_32((int32_t*)&amp;ep-&gt;eager_rdma_remote.seq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int32_t)ftr-&gt;seq, (int32_t)(ftr-&gt;seq+1)));
<br>
<p>The problem is that the underlying atomic cmpset takes an signed int32_t
<br>
but the counter is a uint32_t. 
<br>
<p>I think its ok to just cast like this as it should still wrap correctly? Alternatively 
<br>
could add an unsigned version of atomic_cmpset_32 but seems a bit like overkill
<br>
for what essentially is a bit of debug code. Any preference?
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7867.php">Christopher Samuel: "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7826.php">Jeff Squyres: "[OMPI devel] openib btl thread safety warning"</a>
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
