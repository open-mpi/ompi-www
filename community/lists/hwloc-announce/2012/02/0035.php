<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 14:04:36 2012" -->
<!-- isoreceived="20120221190436" -->
<!-- sent="Tue, 21 Feb 2012 20:04:30 +0100" -->
<!-- isosent="20120221190430" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released" -->
<!-- id="4F43EABE.9050102_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 14:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
<li><strong>Previous message:</strong> <a href="0034.php">Jeff Squyres: "[hwloc-announce] hwloc v1.3.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
<li><strong>Reply:</strong> <a href="0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.4.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.4.1rc1 is the first milestone of a bug fix release. It brings
<br>
many fixes. Most (but not all) of them were also recently released
<br>
in v1.3.2.
<br>
<p>The following is a summary of the changes since v1.4. The second
<br>
part of the list (items prefixed with `+' instead of `*') is also
<br>
available in v1.3.2.
<br>
<p>* Fix some overzealous assertions in the distance grouping code.
<br>
* Workaround BIOS reporting empty I/O locality in cuda and openfabrics
<br>
&nbsp;&nbsp;helpers on Linux. Thanks to Albert Solernou for reporting the problem.
<br>
* Fix helpers converting from Linux libnuma to hwloc (hwloc/linux-libnuma.h)
<br>
&nbsp;&nbsp;in case of out-of-order NUMA node ids.
<br>
<p>+ Fix missing last bit in hwloc_linux_get_thread_cpubind().
<br>
&nbsp;&nbsp;Thanks to Carolina G&#243;mez-Tost&#243;n Guti&#233;rrez for reporting the issue.
<br>
+ Fix build with -mcmodel=medium. Thanks to Devendar Bureddy for reporting
<br>
&nbsp;&nbsp;the issue.
<br>
+ Fix build with Solaris Studio 12 compiler when XML is disabled.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
+ Fix installation with old GNU sed, for instance on Red Hat 8.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
+ Fix PCI locality when Linux cgroups restrict the available CPUs.
<br>
+ Fix floating point issue when grouping by distance on mips64 architecture.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
+ Fix conversion from/to Linux libnuma when some NUMA nodes have no memory.
<br>
+ Fix support for gccfss compilers with broken ffs() support. Thanks to
<br>
&nbsp;&nbsp;Paul H. Hargrove for reporting the problem and providing a patch.
<br>
+ Fix FreeBSD build without cpuid support.
<br>
+ Fix several Windows build issues.
<br>
+ Fix inline keyword definition in public headers.
<br>
+ Fix dependencies in the embedded library.
<br>
+ Detect when a compiler such as xlc may not report compile errors
<br>
&nbsp;&nbsp;properly, causing some configure checks to be wrong. Thanks to
<br>
&nbsp;&nbsp;Paul H. Hargrove for reporting the problem and providing a patch.
<br>
+ Improve visibility support detection. Thanks to Dave Love for providing
<br>
&nbsp;&nbsp;the patch.
<br>
+ Remove references to internal symbols in the tools.
<br>
+ Fix installation on systems with limited command-line size.
<br>
&nbsp;&nbsp;Thanks to Paul H. Hargrove for reporting the problem.
<br>
+ Further improve XML-related error checking and reporting.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
<li><strong>Previous message:</strong> <a href="0034.php">Jeff Squyres: "[hwloc-announce] hwloc v1.3.2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
<li><strong>Reply:</strong> <a href="0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
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
