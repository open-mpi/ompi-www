<?
$subject_val = "[OMPI devel] opal/mca/common: you can remove this directory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 09:52:36 2012" -->
<!-- isoreceived="20120329135236" -->
<!-- sent="Thu, 29 Mar 2012 09:52:21 -0400" -->
<!-- isosent="20120329135221" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] opal/mca/common: you can remove this directory" -->
<!-- id="6F75AE54-942D-4DCA-9B64-60EF5B6BBE71_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] opal/mca/common: you can remove this directory<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 09:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10782.php">Raju: "[OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10780.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: The opal/mca/common directory had been functionally empty for a while, so I &quot;svn rm&quot;'ed it last week or so.
<br>
<p>However, if you svn up, it SVN will likely still leave that directory around because it probably contains a Makefile and Makefile.in.  It is safe to rm -rf this entire tree and re-augoten / configure / make.
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
<li><strong>Next message:</strong> <a href="10782.php">Raju: "[OMPI devel] Openmpi-1.5.3 issue &quot; initialization failure on /dev/ipath (err=23)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10780.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
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
