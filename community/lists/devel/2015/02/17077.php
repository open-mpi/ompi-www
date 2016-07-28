<?
$subject_val = "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 13:40:06 2015" -->
<!-- isoreceived="20150227184006" -->
<!-- sent="Fri, 27 Feb 2015 10:39:48 -0800" -->
<!-- isosent="20150227183948" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32" -->
<!-- id="26B29EF3-C8B7-4272-A845-5A7A17D2684F_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C49AC70-6335-4EA2-9358-71ECF38E87EB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 13:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Previous message:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>In reply to:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Reply:</strong> <a href="17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 27 Feb 2015, at 10:14 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Yes, you do need to specify -m32 in CFLAGS and --with-wrapper*, because you may well want to build OMPI with one set of flags and build MPI applications with a different set of flags.  Hence, the wrappers don't contain all the CFLAGS used to build OMPI, for example.
</span><br>
<p><p>I think of -m32 and -m64 as really selecting different compilers.  (Which might actually be true under the covers.)  When I use the -m flag, I generally add it to the compiler definition (FF, FC, LD), not the XXFLAGS.  If one follows that convention, will OpenMPI always pass the -m flag on to the wrapper scripts so the addition of --with-wrapper* is not necessary?  It would have to handle the embedded blank properly, which may be tricky.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Previous message:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>In reply to:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Reply:</strong> <a href="17078.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
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
