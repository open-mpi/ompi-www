<?
$subject_val = "[OMPI devel] MTT &quot;trivial&quot; Fortran errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 14:34:51 2015" -->
<!-- isoreceived="20150504183451" -->
<!-- sent="Mon, 4 May 2015 18:34:49 +0000" -->
<!-- isosent="20150504183449" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT &amp;quot;trivial&amp;quot; Fortran errors" -->
<!-- id="F5A529C6-79F9-4BD5-9E0E-3D4D009EE3CA_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MTT &quot;trivial&quot; Fortran errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-04 14:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17382.php">Ralph Castain: "[OMPI devel] 1.8.5 release"</a>
<li><strong>Previous message:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few of you have pinged me off-list about some Fortran compile failures in the MTT &quot;trivial&quot; test suite.
<br>
<p>I'm not 100% sure why these have cropped up recently, but I made some changes to MTT this morning that should fix the issue.  Please &quot;git pull --rebase&quot; on your local MTT repo, and the problems should go away in your next MTT cycle.
<br>
<p>Let me know if you have continued problems in this area.
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
<li><strong>Next message:</strong> <a href="17382.php">Ralph Castain: "[OMPI devel] 1.8.5 release"</a>
<li><strong>Previous message:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<!-- nextthread="start" -->
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
