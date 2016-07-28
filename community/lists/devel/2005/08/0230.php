<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 09:43:33 2005" -->
<!-- isoreceived="20050825144333" -->
<!-- sent="Thu, 25 Aug 2005 09:43:31 -0500" -->
<!-- isosent="20050825144331" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050825144331.GK1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050825133541.GH20755_at_minantech.com" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 09:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 25, 2005 at 04:35:41PM +0300, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Aug 24, 2005 at 09:21:37PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I also get the following messages on startup:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt; &gt; uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev2">&gt; &gt; 	[0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev2">&gt; &gt; 	No hca's found on this host!
</span><br>
<span class="quotelev2">&gt; &gt; 	
</span><br>
<span class="quotelev1">&gt; Look for RTLD_GLOBAL in opal/libltdl/ltdl.c. If it is not there openib
</span><br>
<span class="quotelev1">&gt; will not work if compiled as dynamic module. What version of libtool are
</span><br>
<span class="quotelev1">&gt; you using? Older libtool haven't used RTLD_GLOBAL for opening libraries.
</span><br>
<p>It's not there... 
<br>
<p>troy_at_opteron1:~$ libtool --version
<br>
ltmain.sh (GNU libtool) 1.5.6 (1.1220.2.95 2004/04/11 05:50:42) Debian: 224 $
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0228.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
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
