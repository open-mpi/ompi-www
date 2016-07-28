<?
$subject_val = "[OMPI devel] openib wasn't building";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 14:47:34 2012" -->
<!-- isoreceived="20120625184734" -->
<!-- sent="Mon, 25 Jun 2012 14:47:28 -0400" -->
<!-- isosent="20120625184728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib wasn't building" -->
<!-- id="DA467680-77B1-4974-97C6-555BB5CEA3B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] openib wasn't building<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 14:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Previous message:</strong> <a href="11168.php">Barrett, Brian W: "[OMPI devel] Fwd: Component Maintainers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Reply:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed earlier today that the trunk openib btl was not building if you did not specify --with-openib[=DIR].
<br>
<p>I have fixed the problem, but just wanted to give a heads up that this has happened; either re-configure --with-openib or svn up and re-autogen/configure/build.
<br>
<p>Sorry about that, folks.
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
<li><strong>Next message:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Previous message:</strong> <a href="11168.php">Barrett, Brian W: "[OMPI devel] Fwd: Component Maintainers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
<li><strong>Reply:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI devel] openib wasn't building"</a>
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
