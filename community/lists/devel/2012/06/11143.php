<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 09:30:36 2012" -->
<!-- isoreceived="20120621133036" -->
<!-- sent="Thu, 21 Jun 2012 09:30:31 -0400" -->
<!-- isosent="20120621133031" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="CCFBA44A-8F62-4968-8D7E-3AA97D42DC5D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D1458D8A-04FC-4BD2-BBF3-6E7C365E5883_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 09:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2012, at 9:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 2. Have consistent behavior between the configury of all OFED-lovin' components (currently the 4 I listed), per your description:
</span><br>
<span class="quotelev1">&gt;   * --with-openfabrics[=DIR] means that all OFED-lovin' components must configure successfully, or fail
</span><br>
<span class="quotelev1">&gt;   * --without-openfabrics means that all OFED-lovin' component must not build
</span><br>
<p><p>I'm sorry -- that's not quite correct.
<br>
<p>hwloc will build regardless of whether you specify --with-openfabrics or not (because it doesn't *need* OpenFabrics support).  
<br>
<p>But the other 3 OpenFabrics-based components (ofud, ud, openib) must all succeed if --with-openfabrics is specified, and will not be built if --without-openfabrics is specified.  Because all of these components *need* OpenFabrics support -- they cannot build without OF support.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11142.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
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
