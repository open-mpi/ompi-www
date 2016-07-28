<?
$subject_val = "[OMPI devel] Removing paffinity trunk components";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 08:35:04 2011" -->
<!-- isoreceived="20110111133504" -->
<!-- sent="Tue, 11 Jan 2011 08:35:00 -0500" -->
<!-- isosent="20110111133500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Removing paffinity trunk components" -->
<!-- id="87179ECF-027C-4F3C-AE22-85197E5D0EA6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Removing paffinity trunk components<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 08:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
<li><strong>Previous message:</strong> <a href="8852.php">Doron Shoham: "[OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
<li><strong>Reply:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated the hwloc paffinity component to hwloc v1.1 last night.
<br>
<p>Given that hwloc seems to be working well, I'd like to remove the following paffinity components from the trunk (and eventually, v1.5) tomorrow COB (5pm US Eastern, Wed, Jan 12 2011).
<br>
<p>- solaris
<br>
- darwin
<br>
- posix
<br>
- windows
<br>
<p>So all we'll be left with is hwloc and test.
<br>
<p>Any problems with that?
<br>
<p>I didn't make this an official RFC with a timeout because we all agreed to this general plan of removing non-hwloc/test paffinity components a long time ago.
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
<li><strong>Next message:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
<li><strong>Previous message:</strong> <a href="8852.php">Doron Shoham: "[OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
<li><strong>Reply:</strong> <a href="8854.php">Jeff Squyres: "Re: [OMPI devel] Removing paffinity trunk components"</a>
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
