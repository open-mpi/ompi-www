<?
$subject_val = "[OMPI devel] trunk hwloc &amp; static builds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 21:49:13 2011" -->
<!-- isoreceived="20110222024913" -->
<!-- sent="Mon, 21 Feb 2011 19:49:00 -0700" -->
<!-- isosent="20110222024900" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk hwloc &amp;amp; static builds" -->
<!-- id="442AC3A7-5D11-458C-AC43-60F2F36C085D_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] trunk hwloc &amp; static builds<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 21:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9007.php">Shiqing Fan: "[OMPI devel] RFC: WinVerbs BTL component"</a>
<li><strong>Previous message:</strong> <a href="9005.php">Jeff Squyres: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9017.php">Jeff Squyres: "Re: [OMPI devel] trunk hwloc &amp; static builds"</a>
<li><strong>Reply:</strong> <a href="9017.php">Jeff Squyres: "Re: [OMPI devel] trunk hwloc &amp; static builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>The trunk currently doesn't link with --enable-static --disable-shared on Linux.  The problem is that the component doesn't pass it's dependencies into the wrapper compiler list.  In particular, the xml support creates a dependency on libxml.  --disable-xml solves the problem, but is still pretty ugly.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9007.php">Shiqing Fan: "[OMPI devel] RFC: WinVerbs BTL component"</a>
<li><strong>Previous message:</strong> <a href="9005.php">Jeff Squyres: "Re: [OMPI devel] Minor OMPI SVN configuration change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9017.php">Jeff Squyres: "Re: [OMPI devel] trunk hwloc &amp; static builds"</a>
<li><strong>Reply:</strong> <a href="9017.php">Jeff Squyres: "Re: [OMPI devel] trunk hwloc &amp; static builds"</a>
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
