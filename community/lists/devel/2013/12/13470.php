<?
$subject_val = "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 11:33:09 2013" -->
<!-- isoreceived="20131218163309" -->
<!-- sent="Wed, 18 Dec 2013 09:33:00 -0700" -->
<!-- isosent="20131218163300" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris" -->
<!-- id="20131218163300.GE41700_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201312181127.rBIBRTBQ015521_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 11:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13471.php">Yeni Lora: "[OMPI devel] Problem with memory in mpi program"</a>
<li><strong>Previous message:</strong> <a href="13469.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13461.php">Siegmar Gross: "[OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found the problem. Was accessing a boolean variable using intval. That
<br>
is a bug that has gone unnoticed on all platforms but thankfully Solaris
<br>
caught it.
<br>
<p>Please try the attached patch.
<br>
<p>-Nathan
<br>
<p>On Wed, Dec 18, 2013 at 12:27:29PM +0100, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I installed openmpi-1.7.4rc1 on Solaris 10 Sparc with Sun
</span><br>
<span class="quotelev1">&gt; C 5.12. Unfortunately my problems with bus errors, which I reported
</span><br>
<span class="quotelev1">&gt; December 4th for openmpi-1.7.4a1r29784 at users_at_[hidden], are
</span><br>
<span class="quotelev1">&gt; not solved yet. Has somebody time to look into that matter or is
</span><br>
<span class="quotelev1">&gt; Solaris support abandoned, so that I have to stay with openmpi-1.6.x
</span><br>
<span class="quotelev1">&gt; in the future? Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13470/var.patch">var.patch</a>
</ul>
<!-- attachment="var.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13470/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13471.php">Yeni Lora: "[OMPI devel] Problem with memory in mpi program"</a>
<li><strong>Previous message:</strong> <a href="13469.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13461.php">Siegmar Gross: "[OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
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
