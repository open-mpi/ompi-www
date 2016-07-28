<?
$subject_val = "[hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 05:38:06 2012" -->
<!-- isoreceived="20120425093806" -->
<!-- sent="Wed, 25 Apr 2012 11:38:00 +0200" -->
<!-- isosent="20120425093800" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] lstopo-nox strikes back" -->
<!-- id="4F97C5F8.7030109_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] lstopo-nox strikes back<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 05:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3023.php">Ralph Castain: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3021.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4451)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3023.php">Ralph Castain: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3023.php">Ralph Castain: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3028.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3031.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3036.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3038.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3039.php">Guy Streeter: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3045.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We recently got some complains from redhat/centos users that wanted to 
<br>
install hwloc on their cluster but couldn't because it brought so many X 
<br>
libraries that they don't care about.
<br>
<p>Debian solves this by having two hwloc packages: the main hwloc one, and 
<br>
hwloc-nox where cairo is disabled. You just install one of them, 
<br>
packages are marked as conflicting with each others.
<br>
<p>I asked Jirka, our fellow RPM hwloc packager. He feels that RPM distros 
<br>
don't work that way. They usually have a core 'foo' package without X, 
<br>
and something such as 'foo-gui' with the X-enabled binary. So you'd have 
<br>
lstopo and lstopo-gui installed at the same time.
<br>
<p>I don't have any preference but RPM is much more widely used than deb in 
<br>
HPC, so we must consider the issue, either in hwloc or in RPM packaging. 
<br>
And we need a solution that is consistent across distros (we don't want 
<br>
users to get lost because Debian/Ubuntu lstopo is graphical while RPM 
<br>
lstopo is not and lstopo-gui is).
<br>
<p>It's not hard to build two lstopo binaries in the same hwloc (quick 
<br>
patch attached). But we'd need to decide their names (lstopo/lstopo-nox, 
<br>
lstopo/lstopo-nogui, lstopo-gui/lstopo), and find a good way to make the 
<br>
existing packages deal with them.
<br>
<p>How do people feel about this? Is it ok to choose between hwloc and 
<br>
hwloc-nox packages on Debian/Ubuntu? Does somebody want to *always* have 
<br>
a lstopo-nox installed? Should the default lstopo be graphical/cario or not?
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3022/lstopo-nox.patch">lstopo-nox.patch</a>
</ul>
<!-- attachment="lstopo-nox.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3023.php">Ralph Castain: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3021.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4451)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3023.php">Ralph Castain: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3023.php">Ralph Castain: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3028.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3031.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3032.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3034.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3036.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3038.php">Brice Goglin: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Reply:</strong> <a href="3039.php">Guy Streeter: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Maybe reply:</strong> <a href="3045.php">Samuel Thibault: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
