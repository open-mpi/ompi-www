<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 00:37:50 2012" -->
<!-- isoreceived="20120228053750" -->
<!-- sent="Tue, 28 Feb 2012 06:37:44 +0100" -->
<!-- isosent="20120228053744" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released" -->
<!-- id="4F4C6828.7000605_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F43EABE.9050102_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.4.1rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 00:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/03/0037.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.4.1 released"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0035.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>hwloc v1.4.1rc2 is out with the following additional fixes:
<br>
* Fix hwloc_alloc_membind, thanks Karl Napf for reporting the issue.
<br>
* Fix memory leaks in some get_membind() functions.
<br>
* Install a valgrind suppressions file hwloc-valgrind.supp (see the FAQ).
<br>
* Fix memory binding documentation. Thanks to Karl Napf for reporting the
<br>
&nbsp;&nbsp;issues.
<br>
<p>Unless something bad happens, this will become the final v1.4.1 release
<br>
by the end of the week.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 21/02/2012 20:04, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.4.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.4.1rc1 is the first milestone of a bug fix release. It brings
</span><br>
<span class="quotelev1">&gt; many fixes. Most (but not all) of them were also recently released
</span><br>
<span class="quotelev1">&gt; in v1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following is a summary of the changes since v1.4. The second
</span><br>
<span class="quotelev1">&gt; part of the list (items prefixed with `+' instead of `*') is also
</span><br>
<span class="quotelev1">&gt; available in v1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Fix some overzealous assertions in the distance grouping code.
</span><br>
<span class="quotelev1">&gt; * Workaround BIOS reporting empty I/O locality in cuda and openfabrics
</span><br>
<span class="quotelev1">&gt;   helpers on Linux. Thanks to Albert Solernou for reporting the problem.
</span><br>
<span class="quotelev1">&gt; * Fix helpers converting from Linux libnuma to hwloc (hwloc/linux-libnuma.h)
</span><br>
<span class="quotelev1">&gt;   in case of out-of-order NUMA node ids.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + Fix missing last bit in hwloc_linux_get_thread_cpubind().
</span><br>
<span class="quotelev1">&gt;   Thanks to Carolina G&#243;mez-Tost&#243;n Guti&#233;rrez for reporting the issue.
</span><br>
<span class="quotelev1">&gt; + Fix build with -mcmodel=medium. Thanks to Devendar Bureddy for reporting
</span><br>
<span class="quotelev1">&gt;   the issue.
</span><br>
<span class="quotelev1">&gt; + Fix build with Solaris Studio 12 compiler when XML is disabled.
</span><br>
<span class="quotelev1">&gt;   Thanks to Paul H. Hargrove for reporting the problem.
</span><br>
<span class="quotelev1">&gt; + Fix installation with old GNU sed, for instance on Red Hat 8.
</span><br>
<span class="quotelev1">&gt;   Thanks to Paul H. Hargrove for reporting the problem.
</span><br>
<span class="quotelev1">&gt; + Fix PCI locality when Linux cgroups restrict the available CPUs.
</span><br>
<span class="quotelev1">&gt; + Fix floating point issue when grouping by distance on mips64 architecture.
</span><br>
<span class="quotelev1">&gt;   Thanks to Paul H. Hargrove for reporting the problem.
</span><br>
<span class="quotelev1">&gt; + Fix conversion from/to Linux libnuma when some NUMA nodes have no memory.
</span><br>
<span class="quotelev1">&gt; + Fix support for gccfss compilers with broken ffs() support. Thanks to
</span><br>
<span class="quotelev1">&gt;   Paul H. Hargrove for reporting the problem and providing a patch.
</span><br>
<span class="quotelev1">&gt; + Fix FreeBSD build without cpuid support.
</span><br>
<span class="quotelev1">&gt; + Fix several Windows build issues.
</span><br>
<span class="quotelev1">&gt; + Fix inline keyword definition in public headers.
</span><br>
<span class="quotelev1">&gt; + Fix dependencies in the embedded library.
</span><br>
<span class="quotelev1">&gt; + Detect when a compiler such as xlc may not report compile errors
</span><br>
<span class="quotelev1">&gt;   properly, causing some configure checks to be wrong. Thanks to
</span><br>
<span class="quotelev1">&gt;   Paul H. Hargrove for reporting the problem and providing a patch.
</span><br>
<span class="quotelev1">&gt; + Improve visibility support detection. Thanks to Dave Love for providing
</span><br>
<span class="quotelev1">&gt;   the patch.
</span><br>
<span class="quotelev1">&gt; + Remove references to internal symbols in the tools.
</span><br>
<span class="quotelev1">&gt; + Fix installation on systems with limited command-line size.
</span><br>
<span class="quotelev1">&gt;   Thanks to Paul H. Hargrove for reporting the problem.
</span><br>
<span class="quotelev1">&gt; + Further improve XML-related error checking and reporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/03/0037.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.4.1 released"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0035.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4.1rc1 released"</a>
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
