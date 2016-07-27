<?
$subject_val = "[hwloc-devel] gather-topology fix and manpage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 02:50:22 2010" -->
<!-- isoreceived="20101220075022" -->
<!-- sent="Mon, 20 Dec 2010 08:50:16 +0100" -->
<!-- isosent="20101220075016" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] gather-topology fix and manpage" -->
<!-- id="4D0F0AB8.30805_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D0EF96F.7060104_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] gather-topology fix and manpage<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 02:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1738.php">Bernd Kallies: "[hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>Previous message:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>In reply to:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Reply:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Maybe reply:</strong> <a href="1747.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka,
<br>
I have committed (locally) some changes that should address everything
<br>
you reported and that are ok to backport in 1.1. I improved your manpage
<br>
proposal too. See attached. By the way, I don't know if the manpage
<br>
should be named .1 or .sh.1.
<br>
There won't be any 1.1.1 release before a couple weeks obviously. So if
<br>
you want to upload some RPM packages before 2011, you will have to patch
<br>
1.1 anyway.
<br>
Cheers,
<br>
Brice
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1737/fix-gather.patch">fix-gather.patch</a>
</ul>
<!-- attachment="fix-gather.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1737/man-gather.patch">man-gather.patch</a>
</ul>
<!-- attachment="man-gather.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1738.php">Bernd Kallies: "[hwloc-devel] Bug in v1.1 bitmap API"</a>
<li><strong>Previous message:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<li><strong>In reply to:</strong> <a href="1736.php">Brice Goglin: "Re: [hwloc-devel] Images from lstopo slightly truncated width wise when in cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Reply:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Maybe reply:</strong> <a href="1747.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
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
