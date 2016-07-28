<?
$subject_val = "[OMPI devel] Library dependencies";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 18:39:58 2009" -->
<!-- isoreceived="20090816223958" -->
<!-- sent="Sun, 16 Aug 2009 18:39:44 -0400" -->
<!-- isosent="20090816223944" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Library dependencies" -->
<!-- id="C6AE02F0.3AD42%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Library dependencies<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-16 18:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6646.php">Jeff Squyres: "Re: [OMPI devel] Library dependencies"</a>
<li><strong>Reply:</strong> <a href="6646.php">Jeff Squyres: "Re: [OMPI devel] Library dependencies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A question about library dependencies in the ompi build system.  I am creating a new ompi component that has uses routines out of ompi/common/a and ompi/common/b .  How do I get routines from ompi/common/a to pick up the symbols in ompi/common/b ?  The symbol I am after is clearly in libmca_common_netpatterns.0.dylib with global visibility (T), but is not being picked up at run-time.  Any hints would be appreciated.
<br>
<p>Thanks,
<br>
Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6637.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6646.php">Jeff Squyres: "Re: [OMPI devel] Library dependencies"</a>
<li><strong>Reply:</strong> <a href="6646.php">Jeff Squyres: "Re: [OMPI devel] Library dependencies"</a>
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
