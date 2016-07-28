<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 09:18:08 2005" -->
<!-- isoreceived="20050826141808" -->
<!-- sent="Fri, 26 Aug 2005 09:18:06 -0500" -->
<!-- isosent="20050826141806" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  OpenIB results" -->
<!-- id="20050826141806.GR1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050825145327.GI20755_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-26 09:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Jeff Squyres: "SLURM support"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Jeff Squyres: "F90 support"</a>
<li><strong>In reply to:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0250.php">Ralf Wildenhues: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0250.php">Ralf Wildenhues: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0262.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 25, 2005 at 05:53:27PM +0300, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Thu, Aug 25, 2005 at 09:43:31AM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Aug 25, 2005 at 04:35:41PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Aug 24, 2005 at 09:21:37PM -0500, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I also get the following messages on startup:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; uverbs0 driver search path: /usr/lib/infiniband
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 	[0,1,1][btl_openib_component.c:267:mca_btl_openib_component_init]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 	No hca's found on this host!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 	
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Look for RTLD_GLOBAL in opal/libltdl/ltdl.c. If it is not there openib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will not work if compiled as dynamic module. What version of libtool are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you using? Older libtool haven't used RTLD_GLOBAL for opening libraries.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's not there... 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; troy_at_opteron1:~$ libtool --version
</span><br>
<span class="quotelev2">&gt; &gt; ltmain.sh (GNU libtool) 1.5.6 (1.1220.2.95 2004/04/11 05:50:42) Debian: 224 $
</span><br>
<span class="quotelev1">&gt; 1.5.6 from debian do the same for me. But 1.5.8 works OK. If it is a problem for you 
</span><br>
<span class="quotelev1">&gt; to reinstall libtool edit file opal/libltdl/ltdl.c and change line
</span><br>
<span class="quotelev1">&gt; #    define LT_LAZY_OR_NOW      RTLD_LAZY
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; #    define LT_LAZY_OR_NOW      (RTLD_LAZY|RTLD_GLOBAL)
</span><br>
<span class="quotelev1">&gt; And recompile. (don't run autogen.sh, this will regenerate the file).
</span><br>
<p>Did you manage to get this working on a debian system with just the
<br>
newer version of libtool? Jeff suggests I build libtool and all the
<br>
other autotools as well, but I'd like to see if I can avoid that, and
<br>
just update libtool.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Jeff Squyres: "SLURM support"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Jeff Squyres: "F90 support"</a>
<li><strong>In reply to:</strong> <a href="0231.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0250.php">Ralf Wildenhues: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0250.php">Ralf Wildenhues: "Re:  OpenIB results"</a>
<li><strong>Reply:</strong> <a href="0262.php">Gleb Natapov: "Re:  OpenIB results"</a>
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
