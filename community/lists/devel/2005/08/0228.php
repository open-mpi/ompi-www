<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 08:36:22 2005" -->
<!-- isoreceived="20050825133622" -->
<!-- sent="Thu, 25 Aug 2005 16:35:41 +0300" -->
<!-- isosent="20050825133541" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050825133541.GH20755_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050825022137.GH1685_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 08:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Troy Benjegerdes: "OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 24, 2005 at 09:21:37PM -0500, Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; I also get the following messages on startup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev1">&gt; 	[0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev1">&gt; 	No hca's found on this host!
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
Look for RTLD_GLOBAL in opal/libltdl/ltdl.c. If it is not there openib
<br>
will not work if compiled as dynamic module. What version of libtool are
<br>
you using? Older libtool haven't used RTLD_GLOBAL for opening libraries.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0229.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0222.php">Troy Benjegerdes: "OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
