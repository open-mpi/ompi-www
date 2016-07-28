<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.11.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 08:21:40 2015" -->
<!-- isoreceived="20151210132140" -->
<!-- sent="Thu, 10 Dec 2015 14:21:30 +0100" -->
<!-- isosent="20151210132130" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.11.2rc1 released" -->
<!-- id="56697C5A.8030208_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.11.2rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-10 08:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0082.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/10/0080.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of v1.11.2.
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.11.2 will address all known bugs in the v1.11 series and bring
<br>
some minor new features (mostly improvements for x86, especially KNL).
<br>
<p>The following is a summary of the changes since v1.11.1:
<br>
<p>* Improve support for Intel Knights Landing Xeon Phi on Linux:
<br>
&nbsp;&nbsp;+ Group local NUMA nodes of normal memory (DDR) and high-bandwidth memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(MCDRAM) together through &quot;Cluster&quot; groups so that the local MCDRAM is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;easy to find.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- See &quot;How do I find the local MCDRAM NUMA node on Intel Knights
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Landing Xeon Phi?&quot; in the documentation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- For uniformity across all KNL configurations, always have a NUMA node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;object even if the host is UMA.
<br>
&nbsp;&nbsp;+ Fix the detection of the memory-side cache:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add the hwloc-dump-hwdata superuser utility to dump SMBIOS information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;into /var/run/hwloc/ as root during boot, and load this dumped
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;information from the hwloc library at runtime.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- See &quot;Why do I need hwloc-dump-hwdata for caches on Intel Knights
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Landing Xeon Phi?&quot; in the documentation.
<br>
&nbsp;&nbsp;Thanks to Grzegorz Andrejczuk for the patches and for the help.
<br>
* The x86 and linux backends may now be combined for discovering CPUs
<br>
&nbsp;&nbsp;through x86 CPUID and memory from the Linux kernel.
<br>
&nbsp;&nbsp;This is useful for working around buggy CPU information reported by Linux
<br>
&nbsp;&nbsp;(for instance the AMD Bulldozer/Piledriver bug below).
<br>
&nbsp;&nbsp;Combination is enabled by passing HWLOC_COMPONENTS=x86 in the environment.
<br>
* Fix L3 cache sharing on AMD Opteron 63xx (Piledriver) and 62xx (Bulldozer)
<br>
&nbsp;&nbsp;in the x86 backend. Thanks to many users who helped.
<br>
* Fix the overzealous L3 cache sharing fix added to the x86 backend in 1.11.1
<br>
&nbsp;&nbsp;for AMD Opteron 61xx (Magny-Cours) processors.
<br>
* The x86 backend may now add the info attribute Inclusive=0 or 1 to caches
<br>
&nbsp;&nbsp;it discovers, or to caches discovered by other backends earlier.
<br>
&nbsp;&nbsp;Thanks to Guillaume Beauchamp for the patch.
<br>
* Fix the management on alloc_membind() allocation failures on AIX, HP-UX
<br>
&nbsp;&nbsp;and OSF/Tru64.
<br>
* Fix spurious failures to load with ENOMEM on AIX in case of Misc objects
<br>
&nbsp;&nbsp;below PUs.
<br>
* Debug messages may be disabled at runtime by passing HWLOC_DEBUG_VERBOSE=0
<br>
&nbsp;&nbsp;in the environment when --enable-debug was passed to configure.
<br>
* Add a FAQ entry &quot;What are these Group objects in my topology?&quot;.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0082.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/10/0080.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.1 released"</a>
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
