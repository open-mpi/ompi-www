<?
$subject_val = "[OMPI devel] portable_platform.h copies";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 09:40:18 2013" -->
<!-- isoreceived="20131106144018" -->
<!-- sent="Wed, 6 Nov 2013 14:40:03 +0000" -->
<!-- isosent="20131106144003" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] portable_platform.h copies" -->
<!-- id="CE9FA2CF.15546%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] portable_platform.h copies<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 09:40:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13199.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<li><strong>Reply:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>Is there a reason we have both opal/include/opal_portable_platform.h and
<br>
ompi/include/mpi_portable_platform.h?  If they're always supposed to have
<br>
the same content (which appears to be the case), then it seems like
<br>
building mpi_portable_platform.h from opal_portable_platform.h at build
<br>
time is a more appropriate path forward.  I'll do the work, but wanted
<br>
someone else to verify that I wasn't missing something.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13199.php">Sylvestre Ledru: "Re: [OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
<li><strong>Reply:</strong> <a href="13201.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] portable_platform.h copies"</a>
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
