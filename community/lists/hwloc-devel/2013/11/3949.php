<?
$subject_val = "[hwloc-devel] Relationship between Cario and X11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 09:58:59 2013" -->
<!-- isoreceived="20131101135859" -->
<!-- sent="Fri, 1 Nov 2013 13:58:57 +0000" -->
<!-- isosent="20131101135857" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Relationship between Cario and X11" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A2F59_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Relationship between Cario and X11<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 09:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/10/3948.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-11-g6b5ef42)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that we have an explicit dependency between Cairo and X11 in configure:
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;x$enable_X11&quot; != &quot;xyes&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([X11 headers not found, Cairo/X11 back-end disabled])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cairo_happy=no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
-----
<br>
<p>Is there any reason for this?
<br>
<p>I ask because my Mac (Lion) has Cairo installed via MacPorts, but it doesn't find XOpenDisplay in -lX11, and so it disables X11 support (which is fine), but that also disables Cairo support (which is a bummer).
<br>
<p>Indeed, I manually disabled this extra check in configure, and I can still seem to use Cairo in lstopo (e.g., generate PDFs and PNGs).
<br>
<p>Are there some platforms where linking Cairo depends on X11?  If so, is there a way we can discover that in configure?  (because Cairo doesn't seem to need X11 on OS X for just outputting PDFs and PNGs)
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
<li><strong>Next message:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/10/3948.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-11-g6b5ef42)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3950.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
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
