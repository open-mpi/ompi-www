<?
$subject_val = "Re: [OMPI devel] 1.5rc5 over MX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 14:41:19 2010" -->
<!-- isoreceived="20100827184119" -->
<!-- sent="Fri, 27 Aug 2010 14:41:14 -0400" -->
<!-- isosent="20100827184114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 over MX" -->
<!-- id="EEFC4AF7-6F3A-414A-B6EE-B0AB27167B7D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="19E7DF98-94BD-4F34-8627-B6841B9AC472_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 over MX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 14:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8408.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1 tested on elan?"</a>
<li><strong>Previous message:</strong> <a href="8406.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>In reply to:</strong> <a href="8383.php">Scott Atchley: "[OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8409.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="8409.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott --
<br>
<p>Can you file tickets for this against 1.4 and 1.5?  These should probably be blockers.
<br>
<p>Have you been able to track these down any further, perchance?
<br>
<p><p>On Aug 26, 2010, at 10:38 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing 1.5rc5 over MX with the same setup as 1.4.3rc1 (RHEL 5.4 and MX 1.2.12).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This version also dies during init due to the memory manager if I do not specify which pml to use. If I specify pml ob1 or pml cm, the tests start but die with segfaults:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       131072          320       166.86       749.15
</span><br>
<span class="quotelev1">&gt; [rain15:14939] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rain15:14939] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [rain15:14939] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [rain15:14939] Failing at address: 0x3b20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, configuring without the memory manager or setting OMPI_MCA_memory_ptmalloc2_disable=1 before calling mpirun work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Similar latency issues with the BTl and not with the MTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8408.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1 tested on elan?"</a>
<li><strong>Previous message:</strong> <a href="8406.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>In reply to:</strong> <a href="8383.php">Scott Atchley: "[OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8409.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="8409.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
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
