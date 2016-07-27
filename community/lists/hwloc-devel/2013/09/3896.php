<?
$subject_val = "[hwloc-devel] Git status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 20:03:09 2013" -->
<!-- isoreceived="20130926000309" -->
<!-- sent="Thu, 26 Sep 2013 00:03:07 +0000" -->
<!-- isosent="20130926000307" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Git status" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8CA4C7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Git status<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 20:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3895.php">Jeff Squyres (jsquyres): "[hwloc-devel] Quiet time for github/trac conversion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The conversion to the new git repo is done, as is the conversion of Trac:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://git.open-mpi.org/trac/hwloc/timeline">https://git.open-mpi.org/trac/hwloc/timeline</a>
<br>
<p>Commit messages have been edited to include new Git hashes for each old SVN &quot;r&quot; reference (e.g., <a href="https://git.open-mpi.org/trac/hwloc/changeset/be50022d23d6936ac19abd7deed0663d6d562531">https://git.open-mpi.org/trac/hwloc/changeset/be50022d23d6936ac19abd7deed0663d6d562531</a>).
<br>
<p>SVN is available in a read-only mode (we'll probably take it down a month or three from now).  The old Trac is no longer available.
<br>
<p>Pushes to github will result in more-or-less immediate updates to the Trac timeline, and your favorite commit message tags will still affect Trac tickets.
<br>
<p>However, the nightly tarball script is still broken.  I got close today, but then realized I was handling git tags incorrectly with how we make snapshot tarball filenames.
<br>
<p>So there will be no nightly tarballs tonight; I'll continue working on the nightly tarball script tomorrow.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3895.php">Jeff Squyres (jsquyres): "[hwloc-devel] Quiet time for github/trac conversion"</a>
<!-- nextthread="start" -->
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
