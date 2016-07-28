<?
$subject_val = "[OMPI devel] Missing f08 binding for Win_allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 10:00:00 2014" -->
<!-- isoreceived="20141015140000" -->
<!-- sent="Wed, 15 Oct 2014 15:59:56 +0200 (CEST)" -->
<!-- isosent="20141015135956" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] Missing f08 binding for Win_allocate" -->
<!-- id="323382168.877.1413381596332.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1587783840.505.1413380306615.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] Missing f08 binding for Win_allocate<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-15 09:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16045.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing f08 binding for Win_allocate"</a>
<li><strong>Reply:</strong> <a href="16070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing f08 binding for Win_allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The f08 binding for Win_allocate is missing in master and 1.8 series.
<br>
I fixed the problem based on master. The attached patch also works for 1.8.3.
<br>
<p>I found some documentation in the wiki but I am not sure if this is intended for small fixes like this as well.
<br>
How shall I proceed to get this into master after the svn-&gt;git transition?
<br>
* Open a bug first
<br>
* fork + pull request or 
<br>
* email patch from git format-patch to devel list?
<br>
<p>Best regards
<br>
Christoph Niethammer
<br>
<p><p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16044/0001-Add-missing-Fortran-binding-for-Win_allocate.patch">0001-Add-missing-Fortran-binding-for-Win_allocate.patch</a>
</ul>
<!-- attachment="0001-Add-missing-Fortran-binding-for-Win_allocate.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16045.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16043.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-78-g6372ac9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing f08 binding for Win_allocate"</a>
<li><strong>Reply:</strong> <a href="16070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing f08 binding for Win_allocate"</a>
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
