<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 09:54:01 2005" -->
<!-- isoreceived="20050825145401" -->
<!-- sent="Thu, 25 Aug 2005 17:53:27 +0300" -->
<!-- isosent="20050825145327" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050825145327.GI20755_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050825144331.GK1685_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-08-25 09:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 25, 2005 at 09:43:31AM -0500, Troy Benjegerdes wrote:
<br>
<span class="quotelev1">&gt; On Thu, Aug 25, 2005 at 04:35:41PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Aug 24, 2005 at 09:21:37PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I also get the following messages on startup:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	[0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	No hca's found on this host!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	
</span><br>
<span class="quotelev2">&gt; &gt; Look for RTLD_GLOBAL in opal/libltdl/ltdl.c. If it is not there openib
</span><br>
<span class="quotelev2">&gt; &gt; will not work if compiled as dynamic module. What version of libtool are
</span><br>
<span class="quotelev2">&gt; &gt; you using? Older libtool haven't used RTLD_GLOBAL for opening libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not there... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; troy_at_opteron1:~$ libtool --version
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 1.5.6 (1.1220.2.95 2004/04/11 05:50:42) Debian: 224 $
</span><br>
1.5.6 from debian do the same for me. But 1.5.8 works OK. If it is a problem for you 
<br>
to reinstall libtool edit file opal/libltdl/ltdl.c and change line
<br>
#    define LT_LAZY_OR_NOW      RTLD_LAZY
<br>
to
<br>
#    define LT_LAZY_OR_NOW      (RTLD_LAZY|RTLD_GLOBAL)
<br>
And recompile. (don't run autogen.sh, this will regenerate the file).
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0230.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
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
