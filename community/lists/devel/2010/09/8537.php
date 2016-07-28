<?
$subject_val = "Re: [OMPI devel] RFC: make hwloc first-class data";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 12:39:50 2010" -->
<!-- isoreceived="20100923163950" -->
<!-- sent="Thu, 23 Sep 2010 12:39:45 -0400" -->
<!-- isosent="20100923163945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make hwloc first-class data" -->
<!-- id="293D3BB1-AB34-427C-A980-CA6768644F90_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F5909BD-7276-479D-8225-F0AF3A6A6811_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make hwloc first-class data<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 12:39:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8538.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>In reply to:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2010, at 12:25 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I unfortunately don't have many cycles to think about this before Oct 1, but I'm still a little concerned about the portability aspects of having hwloc be a first class citizen of OMPI - if we support a platform hwloc doesn't, that seems like it will still cause problems...
</span><br>
<p>Fair enough.  I s'ppose we could put it in ompi/mca/common/hwloc and just let whoever link against it who wants to (e.g., individual components).  Heck, we could just as well put hwloc down in opal -- e.g., opal/mca/common.  Or something like that; maybe keep it up in opal/hwloc, but don't slurp it into libopen-pal -- just let things link against libhwloc_embedded if they want to.
<br>
<p>Then even ORTE things could use hwloc, if desirable.  So could paffinity/hwloc.
<br>
<p>Hmm.  There's probably both pros and cons to this approach.  Need to think about that a bit...
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
<li><strong>Next message:</strong> <a href="8538.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>In reply to:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8536.php">George Bosilca: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
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
