<?
$subject_val = "[hwloc-devel] automake silent-rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 07:50:49 2009" -->
<!-- isoreceived="20091023115049" -->
<!-- sent="Fri, 23 Oct 2009 13:50:44 +0200" -->
<!-- isosent="20091023115044" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] automake silent-rules" -->
<!-- id="4AE19894.80307_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] automake silent-rules<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 07:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>Previous message:</strong> <a href="0253.php">Samuel Thibault: "Re: [hwloc-devel] hwloc compile warnings patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>Reply:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>Reply:</strong> <a href="0261.php">Pavan Balaji: "Re: [hwloc-devel] automake silent-rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to require automake 1.11 for hwloc 1.0 so that we get the new
<br>
silent-rules feature. It gives you &quot;CC foo.o&quot; instead of the too-long
<br>
unreadable compile line (if you do make V=0 or configure with
<br>
--enable-silent-rules). Patch below.
<br>
<p>Does anybody have anything against this?
<br>
<p>Brice
<br>
<p>--- configure.ac    (revision 1231)
<br>
+++ configure.ac    (working copy)
<br>
@@ -19,7 +19,7 @@
<br>
&nbsp;AC_CANONICAL_SYSTEM
<br>
&nbsp;AC_CONFIG_SRCDIR([src/topology.c])
<br>
&nbsp;
<br>
-AM_INIT_AUTOMAKE([1.10 dist-bzip2 foreign tar-ustar -Wall -Werror])
<br>
+AM_INIT_AUTOMAKE([1.11 dist-bzip2 foreign tar-ustar silent-rules -Wall
<br>
-Werror])
<br>
&nbsp;
<br>
&nbsp;# Make configure depend on the VERSION file, since it's used in AC_INIT
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>Previous message:</strong> <a href="0253.php">Samuel Thibault: "Re: [hwloc-devel] hwloc compile warnings patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>Reply:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>Reply:</strong> <a href="0261.php">Pavan Balaji: "Re: [hwloc-devel] automake silent-rules"</a>
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
