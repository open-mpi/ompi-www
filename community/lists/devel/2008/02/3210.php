<?
$subject_val = "[OMPI devel] more memchecker q's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:57:24 2008" -->
<!-- isoreceived="20080212145724" -->
<!-- sent="Tue, 12 Feb 2008 09:57:05 -0500" -->
<!-- isosent="20080212145705" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] more memchecker q's" -->
<!-- id="FDB49640-9641-4EC2-9195-631C2BE96D2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] more memchecker q's<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3209.php">Jeff Squyres: "[OMPI devel] Please set svn:ignore properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3214.php">Shiqing Fan: "Re: [OMPI devel] more memchecker q's"</a>
<li><strong>Reply:</strong> <a href="3214.php">Shiqing Fan: "Re: [OMPI devel] more memchecker q's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why is memchecker.h included like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;ompi/include/ompi/memchecker.h&quot;
<br>
<p>Shouldn't it be
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;ompi/memchecker.h&quot;
<br>
<p>Using the former will work in an SVN checkout, but won't work in a -- 
<br>
with-devel-headers installation (the latter should).
<br>
<p>Can this be fixed?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3209.php">Jeff Squyres: "[OMPI devel] Please set svn:ignore properly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3214.php">Shiqing Fan: "Re: [OMPI devel] more memchecker q's"</a>
<li><strong>Reply:</strong> <a href="3214.php">Shiqing Fan: "Re: [OMPI devel] more memchecker q's"</a>
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
