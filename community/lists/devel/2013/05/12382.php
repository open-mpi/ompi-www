<?
$subject_val = "[OMPI devel] Openib + common/verbs CPC consolidation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 15:29:20 2013" -->
<!-- isoreceived="20130514192920" -->
<!-- sent="Tue, 14 May 2013 19:29:15 +0000" -->
<!-- isosent="20130514192915" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Openib + common/verbs CPC consolidation" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F61FA07_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Openib + common/verbs CPC consolidation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 15:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<li><strong>Previous message:</strong> <a href="12381.php">Ralph Castain: "[OMPI devel] RFC: rewrite of ORTE OOB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: On the teleconf today, we talked about the next dominos to fall in the quest to move the BTLs down to OPAL:
<br>
<p>1. Nathan will make the openib &quot;udcm&quot; CPC the default in the immediate future
<br>
&nbsp;&nbsp;&nbsp;--&gt; This paves the way to ditch the problematic &quot;oob&quot; openib CPC
<br>
&nbsp;&nbsp;&nbsp;--&gt; This also will give udcm more widespread testing
<br>
2. Mellanox will add XRC support to udcm
<br>
&nbsp;&nbsp;&nbsp;--&gt; This paves the way to ditch the problematic &quot;xoob&quot; openib CPC
<br>
&nbsp;&nbsp;&nbsp;--&gt; Josh thought they could do this within a month, but that's a SWAG and subject to change
<br>
3. I will ping Chelsio about getting them to add proper iWARP support into common/ofacm
<br>
&nbsp;&nbsp;&nbsp;--&gt; This paves the way to eliminate btl/openib/cpc
<br>
&nbsp;&nbsp;&nbsp;--&gt; No idea on timeframe yet
<br>
4. Once #3 is done, make openib use common/ofacm
<br>
5. Once #2, #3, and #4 are done, delete btl/openib/cpc
<br>
<p>#1-3 have people assigned to them.  #4 does not (#5 is pretty trivial -- an svn rm plus some Makefile.am mods).
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
<li><strong>Next message:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<li><strong>Previous message:</strong> <a href="12381.php">Ralph Castain: "[OMPI devel] RFC: rewrite of ORTE OOB"</a>
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
