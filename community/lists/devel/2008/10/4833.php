<?
$subject_val = "[OMPI devel] mallopt and registration cache";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 00:53:33 2008" -->
<!-- isoreceived="20081031045333" -->
<!-- sent="Fri, 31 Oct 2008 00:53:25 -0400" -->
<!-- isosent="20081031045325" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="[OMPI devel] mallopt and registration cache" -->
<!-- id="490A8F45.8060304_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] mallopt and registration cache<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 00:53:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4834.php">Tim Mattox: "[OMPI devel] Need 3 CMR reviewers ASAP"</a>
<li><strong>Previous message:</strong> <a href="4832.php">Ralph Castain: "[OMPI devel] 1.3 test failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gentlemen,
<br>
<p>I have been looking at a data corruption with the MX btl or mtl with the 
<br>
1.3 branch when trying to use MX registration cache. The related ticket 
<br>
is #1525, opened by Tim.
<br>
<p>In 1.3, mallopt() is used to never trim memory, in replacement of the 
<br>
malloc overload by ptmalloc2. MX provides its own malloc hooks, but they 
<br>
can't work when the lib is dlopen()ed, so MX has to rely on OMPI to make 
<br>
the registration cache safe. Apparently, mallopt() is only called in the 
<br>
initialization of the mpool component. However, MX btl or mtl do not use 
<br>
the mpool. There is a mallopt memory module in opal, but it assumes that 
<br>
the mpool is used.
<br>
<p>What is the best way to fix this issue ?
<br>
* move the mallopt calls out of the mpool init.
<br>
* use a fake mpool in the MX btl and mtl.
<br>
* duplicate the mallopt calls directly in the MX btl and mtl.
<br>
<p>I got lost looking at the mpool code, so I may be completely wrong here.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4834.php">Tim Mattox: "[OMPI devel] Need 3 CMR reviewers ASAP"</a>
<li><strong>Previous message:</strong> <a href="4832.php">Ralph Castain: "[OMPI devel] 1.3 test failures"</a>
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
