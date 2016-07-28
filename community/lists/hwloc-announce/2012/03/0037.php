<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.4.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 12:29:12 2012" -->
<!-- isoreceived="20120305172912" -->
<!-- sent="Mon, 05 Mar 2012 11:29:05 -0600" -->
<!-- isosent="20120305172905" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.4.1 released" -->
<!-- id="4F54F7E1.1080507_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.4.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 12:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/05/0038.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/02/0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.4.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.4.1 is a bug fix release which addresses all known bugs in the
<br>
v1.4 serie. Some (but not all) of them were also recently released
<br>
in v1.3.2.
<br>
<p>Please note that the 64bit windows build is not available yet, but
<br>
it will be uploaded as soon as possible.
<br>
<p>The following is a summary of the changes since v1.4. The second
<br>
part of the list (items prefixed with `+' instead of `*') is also
<br>
available in v1.3.2.
<br>
<p>* This release contains all changes from v1.3.2.
<br>
* Fix hwloc_alloc_membind, thanks Karl Napf for reporting the issue.
<br>
* Fix memory leaks in some get_membind() functions.
<br>
* Fix helpers converting from Linux libnuma to hwloc (hwloc/linux-libnuma.h)
<br>
&nbsp;&nbsp;in case of out-of-order NUMA node ids.
<br>
* Fix some overzealous assertions in the distance grouping code.
<br>
* Workaround BIOS reporting empty I/O locality in cuda and openfabrics
<br>
&nbsp;&nbsp;helpers on Linux. Thanks to Albert Solernou for reporting the problem.
<br>
* Install a valgrind suppressions file hwloc-valgrind.supp (see the FAQ).
<br>
* Fix memory binding documentation. Thanks to Karl Napf for reporting the
<br>
&nbsp;&nbsp;issues.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/05/0038.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/02/0036.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released"</a>
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
