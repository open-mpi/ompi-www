<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 16:10:55 2007" -->
<!-- isoreceived="20070813201055" -->
<!-- sent="Mon, 13 Aug 2007 16:10:44 -0400" -->
<!-- isosent="20070813201044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem in mpool rdma finalize" -->
<!-- id="2A01F402-858C-4212-8904-EBCE4AFB2E96_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070813200407.GE26964_at_minantech.com" -->
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
<strong>Date:</strong> 2007-08-13 16:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2139.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2137.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 4:04 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; mpool rdma finalize was empty function. I changed it to do the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;finalize&quot; job - go over all registered segments in mpool  and  
</span><br>
<span class="quotelev2">&gt;&gt; release
</span><br>
<span class="quotelev2">&gt;&gt; them one by one,
</span><br>
<span class="quotelev2">&gt;&gt; Mpool use reference counter for each memory region and it prevents us
</span><br>
<span class="quotelev2">&gt;&gt; from double free bug. In openib btl all memory that was registered  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; mpool  on finalize stage will be  unregistered with mpool too.
</span><br>
<span class="quotelev2">&gt;&gt; So maybe in gm the memory (that was registred with mpool) released
</span><br>
<span class="quotelev2">&gt;&gt; directly (not via mpool) and it cause the segfault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; As far as I understand the problem Tim see is much more serious.  
</span><br>
<span class="quotelev1">&gt; During
</span><br>
<span class="quotelev1">&gt; finalize gm BTL is unloaded and only after that mpool finalize is
</span><br>
<span class="quotelev1">&gt; called. Mpool uses callbacks into gm BTL to register/unregister  
</span><br>
<span class="quotelev1">&gt; memory,
</span><br>
<span class="quotelev1">&gt; but BTL is not there already.
</span><br>
<p>Right.  We had the same problem in the openib btl, too.  See https:// 
<br>
svn.open-mpi.org/trac/ompi/changeset/15735.
<br>
<p>I don't know if this is the exact same scenario Tim is running into,  
<br>
but the end result is the same (openib btl was being destroyed and  
<br>
still leaving memory registered in the mpool).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2139.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2137.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
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
