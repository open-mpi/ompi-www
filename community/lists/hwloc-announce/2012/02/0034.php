<?
$subject_val = "[hwloc-announce] hwloc v1.3.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 14:19:06 2012" -->
<!-- isoreceived="20120214191906" -->
<!-- sent="Tue, 14 Feb 2012 14:19:01 -0500" -->
<!-- isosent="20120214191901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] hwloc v1.3.2 released" -->
<!-- id="A5C56775-5366-4972-9E45-317361A4B31A_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] hwloc v1.3.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 14:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0035.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/01/0033.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release 
<br>
of v1.3.2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>Although the v1.3 series has essentially been replaced by the new v1.4 series, we had some lingering bug fixes for the v1.3 series that we figured should be released in a final form for those who have not yet upgraded to the v1.4 series.  This will likely be the last release of the v1.3 series.
<br>
<p>If you are using the v1.3 series, you are encouraged to upgrade.  If you are already using the v1.4 series, all relevant fixes that are in 1.3.2 have been forward-ported to a future v1.4.1 release.
<br>
<p>Here are the changes since v1.3.1 (the big theme in this list is a huge &quot;THANK YOU!&quot; to Paul Hargrove of LBL for some seriously hard-core testing and helping chase down a bunch of bugs):
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
<p>Windows builds will be available shortly.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="0035.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/01/0033.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
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
