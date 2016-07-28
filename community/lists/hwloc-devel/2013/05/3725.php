<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 02:53:30 2013" -->
<!-- isoreceived="20130508065330" -->
<!-- sent="Wed, 08 May 2013 08:53:22 +0200" -->
<!-- isosent="20130508065322" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="5189F662.5030201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F60E467_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 02:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3724.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>In reply to:</strong> <a href="3718.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, are we going too far here?
<br>
<p>1) The original problem was that embedding couldn't build (it couldn't
<br>
even autoreconf) because of the embedded ltdl. Not because of plugins
<br>
being enabled. That's fixed with my patch and with yours.
<br>
tests/embedded/ runs fine now.
<br>
<p>2) Now, we're disallowing plugins entirely in the embedded case too.
<br>
That's kind of orthogonal to (1). I don't think we currently have a
<br>
single line of code to support this. If people want plugins and
<br>
embedded, thay will need to setup ltdl in their own configure. I don't
<br>
see any reason to prevent this. We may have users wanting this one day,
<br>
so I think we should remove the current error message.
<br>
<p>3) And we're disallowing included ltdl too. I am actually not against
<br>
this one. We don't use advanced ltdl features, and I don't plan to
<br>
change the plugin management code. So the installed ltdl should be fine.
<br>
But now that (1) is fixed, there's no direct reason to do (3) immediately.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3724.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>In reply to:</strong> <a href="3718.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
