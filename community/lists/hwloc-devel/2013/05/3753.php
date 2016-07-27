<?
$subject_val = "[hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 19 01:47:58 2013" -->
<!-- isoreceived="20130519054758" -->
<!-- sent="Sun, 19 May 2013 00:47:51 -0500" -->
<!-- isosent="20130519054751" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD" -->
<!-- id="51986787.4020100_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-19 01:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="3752.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5632)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="3754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is a failure we noticed on FreeBSD.  I thought I reported it
<br>
earlier, but maybe not.
<br>
<p>In src/topology-freebsd.c, the definition and usage of
<br>
hwloc_freebsd_node_meminfo_info() need to be protected by both
<br>
HAVE_SYSCTL and HAVE_SYS_SYSCTL_H (currently it's only protected by
<br>
HAVE_SYSCTL).  The former provides the declaration for the function and
<br>
the latter provides the macros used within the definition of the
<br>
function (e.g., CTL_HW).
<br>
<p>I hope this is a small enough patch to make it into 1.7.1 GA.
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
<li><strong>Next message:</strong> <a href="3754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="3752.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5632)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="3754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7.1rc1 strict build failure on FreeBSD"</a>
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
