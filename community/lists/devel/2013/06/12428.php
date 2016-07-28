<?
$subject_val = "[OMPI devel] RFC: Delete ofud BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 14:19:53 2013" -->
<!-- isoreceived="20130604181953" -->
<!-- sent="Tue, 4 Jun 2013 18:19:48 +0000" -->
<!-- isosent="20130604181948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Delete ofud BTL" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F65A670_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Delete ofud BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 14:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12429.php">Jeff Squyres (jsquyres): "[OMPI devel] Rest of OMPI meeting notes up"</a>
<li><strong>Previous message:</strong> <a href="12427.php">Jeff Squyres (jsquyres): "[OMPI devel] notes from 1st day of dev meeting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: svn rm ompi/mca/btl/ofud
<br>
<p>WHY: it has no retrans (i.e., doesn't work), no one uses it
<br>
<p>WHERE: ompi/mca/btl/ofud
<br>
<p>TIMEOUT: next Tuesday teleconf, 11 June 2013
<br>
<p>The ofud BTL was abandoned long ago.  It doesn't work (because it doesn't retrans), and no one has ever stepped up to fix it.  We should just delete it.
<br>
<p>It can always be revived out of history if someone wants it.
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
<li><strong>Next message:</strong> <a href="12429.php">Jeff Squyres (jsquyres): "[OMPI devel] Rest of OMPI meeting notes up"</a>
<li><strong>Previous message:</strong> <a href="12427.php">Jeff Squyres (jsquyres): "[OMPI devel] notes from 1st day of dev meeting"</a>
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
