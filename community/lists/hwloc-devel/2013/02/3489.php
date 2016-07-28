<?
$subject_val = "[hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 16:50:55 2013" -->
<!-- isoreceived="20130205215055" -->
<!-- sent="Tue, 5 Feb 2013 21:50:50 +0000" -->
<!-- isosent="20130205215050" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] libpci: GPL" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC81FA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 16:50:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3488.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5277)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3491.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3498.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3552.php">Christopher Samuel: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was just pointed out to me that libpci is licensed under the GPL (not the LGPL).
<br>
<p>Hence, even though hwloc is BSD, if it links to libpci.*, it's tainted.
<br>
<p>IANAL, this is not legal advice, yadda yadda yadda.  But does this jive with other peoples' understanding?
<br>
<p>This has caused a problem for an unnamed vendor who wanted to ship a binary tool that linked against libhwloc (that linked against libpci).  Yoinks.
<br>
<p>The complaint to me was that hwloc needs to be clearer about this in its documentation.
<br>
<p>Does this sound right?
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
<li><strong>Next message:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3488.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5277)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3491.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3498.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3552.php">Christopher Samuel: "Re: [hwloc-devel] libpci: GPL"</a>
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
