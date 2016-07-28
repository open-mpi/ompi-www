<?
$subject_val = "[hwloc-devel] upcoming cleaning of headers and doc sections";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 08:09:46 2013" -->
<!-- isoreceived="20130718120946" -->
<!-- sent="Thu, 18 Jul 2013 14:09:40 +0200" -->
<!-- isosent="20130718120940" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] upcoming cleaning of headers and doc sections" -->
<!-- id="51E7DB04.1000500_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] upcoming cleaning of headers and doc sections<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 08:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Previous message:</strong> <a href="3835.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] [open-mpi/hwloc] 3ae99c: Fix a memory leak of the info array when mergin..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Reply:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Reply:</strong> <a href="3838.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, I recently got a lot of feedback about our function lists and
<br>
documentation sections.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.7.1/modules.php">http://www.open-mpi.org/projects/hwloc/doc/v1.7.1/modules.php</a>
<br>
Several of these sections have confusing names, so I am going to
<br>
reorganize all this.
<br>
<p>Non-inline functions were initially considered the main hwloc functions,
<br>
they went in hwloc.h. Others were inlines and considered less important,
<br>
they went in hwloc/helper.h. That doesn't work anymore because many
<br>
inlines should rather be documented just near their non-inline friends.
<br>
So I'll move things where they belong to create unique and consistent
<br>
sections for each topic.
<br>
<p>The problem with moving many inlines into hwloc.h is that it'll make
<br>
that main header very long and less readable. Ways to improve that:
<br>
* only put the prototypes in hwloc.h and keep the inline code somewhere else
<br>
* if some sections are obviously less important, keep these out of
<br>
hwloc.h (just like the ones in hwloc/helper.h currently)
<br>
* only keep the strict minimum (types?) in hwloc.h ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Previous message:</strong> <a href="3835.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] [open-mpi/hwloc] 3ae99c: Fix a memory leak of the info array when mergin..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Reply:</strong> <a href="3837.php">Samuel Thibault: "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Reply:</strong> <a href="3838.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming cleaning of headers and doc sections"</a>
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
