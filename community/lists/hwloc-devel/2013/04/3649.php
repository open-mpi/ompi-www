<?
$subject_val = "[hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 28 23:53:36 2013" -->
<!-- isoreceived="20130429035336" -->
<!-- sent="Sun, 28 Apr 2013 22:53:30 -0500" -->
<!-- isosent="20130429035330" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517DEEBA.9080105_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.7 issues<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-28 23:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3648.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5557)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We are seeing two errors with hwloc-1.7:
<br>
<p>1. The hwloc embedded in mpich was failing to build on FreeBSD with a
<br>
strict build.  I was able to reproduce the failure with hwloc-1.7 by
<br>
setting CFLAGS=-D_POSIX_SOURCE (the error shows up even with later
<br>
versions of POSIX enabled).
<br>
<p>topology.c: In function 'hwloc_fallback_nbprocessors':
<br>
topology.c:146: error: conflicting types for 'n'
<br>
topology.c:131: error: previous declaration of 'n' was here
<br>
<p>2. The second error shows up with hwloc in embedded mode.  In hydra, we
<br>
setup hwloc in embedded mode using HWLOC_SETUP_CORE.  autoreconf on this
<br>
fails as:
<br>
<p>tools/topo/hwloc/hwloc/src/Makefile.am:211: error: HWLOC_LTDL_INCLUDED
<br>
does not appear in AM_CONDITIONAL
<br>
autoreconf: automake failed with exit status: 1
<br>
<p>The problem seems to be that this conditional is defined in hwloc's
<br>
configure.ac directly instead of in the SETUP_CORE macro.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3648.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5557)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
