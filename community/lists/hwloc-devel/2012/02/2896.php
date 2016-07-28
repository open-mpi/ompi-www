<?
$subject_val = "[hwloc-devel] ship valgrind suppressions?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 13:28:16 2012" -->
<!-- isoreceived="20120223182816" -->
<!-- sent="Thu, 23 Feb 2012 19:28:10 +0100" -->
<!-- isosent="20120223182810" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] ship valgrind suppressions?" -->
<!-- id="4F46853A.6090402_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] ship valgrind suppressions?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 13:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2897.php">Jeffrey Squyres: "Re: [hwloc-devel] ship valgrind suppressions?"</a>
<li><strong>Previous message:</strong> <a href="2895.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.1rc2r4335)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2897.php">Jeffrey Squyres: "Re: [hwloc-devel] ship valgrind suppressions?"</a>
<li><strong>Reply:</strong> <a href="2897.php">Jeffrey Squyres: "Re: [hwloc-devel] ship valgrind suppressions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&quot;make check&quot; doesn't report any single memory leak under valgrind
<br>
anymore in trunk... except those from external libs such as libpci and
<br>
libxml. I created the attached suppressions file to hide them when
<br>
valgrind'ing hwloc programs. Just pass --suppressions=hwloc.supp to
<br>
valgrind.
<br>
<p>For the record, the reason we need this is:
<br>
* libpci and libxml use libz, which initializes global state without
<br>
ever freeing it.
<br>
* libxml only frees it global state in xmlCleanupParser(), but we
<br>
stopped calling it in hwloc because the program may still be using
<br>
libxml when hwloc stops using it.
<br>
<p>Should we ship this suppressions file in the tarball? At least having it
<br>
somewhere online may be a good idea?
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2896/hwloc.supp">hwloc.supp</a>
</ul>
<!-- attachment="hwloc.supp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2897.php">Jeffrey Squyres: "Re: [hwloc-devel] ship valgrind suppressions?"</a>
<li><strong>Previous message:</strong> <a href="2895.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.1rc2r4335)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2897.php">Jeffrey Squyres: "Re: [hwloc-devel] ship valgrind suppressions?"</a>
<li><strong>Reply:</strong> <a href="2897.php">Jeffrey Squyres: "Re: [hwloc-devel] ship valgrind suppressions?"</a>
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
