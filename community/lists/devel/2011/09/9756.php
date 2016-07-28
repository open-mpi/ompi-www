<?
$subject_val = "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:07:32 2011" -->
<!-- isoreceived="20110912130732" -->
<!-- sent="Mon, 12 Sep 2011 09:07:26 -0400" -->
<!-- isosent="20110912130726" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen" -->
<!-- id="C8FD33F7-24C4-4FB5-A2A2-39A76B4928CA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44F67488-346C-4C1E-AF0E-686DFE496CAE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 09:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 12, 2011, at 8:51 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; *** Remember that although the opal_hwloc_topology global variable will always be available, ##IT MAY BE NULL## on platforms where hwloc was compiled out / not supported.  Therefore, you MUST protect access to hwloc API calls with #if OPAL_HAVE_HWLOC!  See the original RFC text below.
</span><br>
<p>Oops!  Ralph just reminded me that this was slightly inaccurate.
<br>
<p>If hwloc is not present, then the global variable opal_hwloc_topology won't be present at all (because its corresponding hwloc type won't be available).  Hence, the example in the original RFC isn't quite right:
<br>
<p><span class="quotelev2">&gt;&gt;  if (NULL != opal_hwloc_topology) {
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt;&gt;      // ...use hwloc API, etc.
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<p>This really should be:
<br>
<p>#if OPAL_HAVE_HWLOC
<br>
&nbsp;&nbsp;if (NULL != opal_hwloc_topology) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ...use hwloc API, etc.
<br>
&nbsp;&nbsp;}
<br>
#endif
<br>
<p>Sorry for the confusion!
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
<li><strong>Next message:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="9757.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
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
