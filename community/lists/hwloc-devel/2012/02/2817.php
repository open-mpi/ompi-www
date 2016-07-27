<?
$subject_val = "[hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 11:58:43 2012" -->
<!-- isoreceived="20120208165843" -->
<!-- sent="Wed, 8 Feb 2012 11:58:38 -0500" -->
<!-- isosent="20120208165838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="0E93E1E1-BBB3-46E8-9452-9A90D2F1D51D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 11:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2818.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2816.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4277)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2818.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Maybe reply:</strong> <a href="2818.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2820.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Maybe reply:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Maybe reply:</strong> <a href="2832.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please test!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/v1.3/">http://www.open-mpi.org/software/hwloc/v1.3/</a>
<br>
<p>Here's the changes since 1.3.1:
<br>
<p>* Fix missing last bit in hwloc_linux_get_thread_cpubind().
<br>
&nbsp;&nbsp;Thanks to Carolina G&#243;mez-Tost&#243;n Guti&#233;rrez for reporting the issue.
<br>
* Fix build with -mcmodel=medium. Thanks to Devendar Bureddy for reporting
<br>
&nbsp;&nbsp;the issue.
<br>
* Fix build with Solaris Studio 12 compiler when XML is disabled.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
* Fix installation with old GNU sed, for instance on Red Hat 8.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
* Fix PCI locality when Linux cgroups restrict the available CPUs.
<br>
* Fix floating point issue when grouping by distance on mips64 architecture.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
* Fix conversion from/to Linux libnuma when some NUMA nodes have no memory.
<br>
* Fix support for gccfss compilers with broken ffs() support. Thanks to
<br>
&nbsp;&nbsp;Paul H. Hargrove for reporting the problem and providing a patch.
<br>
* Fix FreeBSD build without cpuid support.
<br>
* Fix several Windows build issues.
<br>
* Fix inline keyword definition in public headers.
<br>
* Fix dependencies in the embedded library.
<br>
* Detect when a compiler such as xlc may not report compile errors
<br>
&nbsp;&nbsp;properly, causing some configure checks to be wrong. Thanks to
<br>
&nbsp;&nbsp;Paul H. Hargrove for reporting the problem and providing a patch.
<br>
* Improve visibility support detection. Thanks to Dave Love for providing
<br>
&nbsp;&nbsp;the patch.
<br>
* Remove references to internal symbols in the tools.
<br>
* Fix installation on systems with limited command-line size.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
* Further improve XML-related error checking and reporting.
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2818.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2816.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4277)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2818.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Maybe reply:</strong> <a href="2818.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2820.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Maybe reply:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Maybe reply:</strong> <a href="2832.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
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
