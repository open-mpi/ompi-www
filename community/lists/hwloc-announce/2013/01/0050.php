<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 17:32:17 2013" -->
<!-- isoreceived="20130109223217" -->
<!-- sent="Wed, 09 Jan 2013 23:32:11 +0100" -->
<!-- isosent="20130109223211" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released" -->
<!-- id="50EDEFEB.2090805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50E43258.7000904_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 17:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0051.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.1 released"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Like Linus says, &quot;another week, another -rc&quot;.
<br>
We have two additional changes in hwloc v1.6.1rc2. One should fix
<br>
pkg-config --libs --static. The other one deprecates multiple calls to
<br>
load() on the same topology as explained earlier.
<br>
Hopefully this will become the final v1.6.1 after another week.
<br>
<p>Brice
<br>
<p><p><p><p>New changes:
<br>
<p>* Fix the pkg-config output with --libs --static.
<br>
&nbsp;&nbsp;Thanks to Erik Schnetter for reporting one of the problems.
<br>
* Calling hwloc_topology_load() multiple times on the same topology
<br>
&nbsp;&nbsp;is officially deprecated. hwloc will warn in such cases.
<br>
<p><p>Changes already in rc1:
<br>
<p>* Fix some crash or buggy detection in the x86 backend when Linux
<br>
&nbsp;&nbsp;cgroups/cpusets restrict the available CPUs.
<br>
* Add some documentation about existing plugins/components, package
<br>
&nbsp;&nbsp;dependencies, and I/O devices specification on the command-line.
<br>
<p><p><p><p>Le 02/01/2013 14:12, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Happy new year!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate of v1.6.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.6.1 is a bug fix release which addresses the only known bug in the
</span><br>
<span class="quotelev1">&gt; v1.6 serie and improves a couple minor points.
</span><br>
<span class="quotelev1">&gt; The following is a summary of the changes since v1.6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Fix some crash or buggy detection in the x86 backend when Linux
</span><br>
<span class="quotelev1">&gt;   cgroups/cpusets restrict the available CPUs.
</span><br>
<span class="quotelev1">&gt; * Add some documentation about existing plugins/components, package
</span><br>
<span class="quotelev1">&gt;   dependencies, and I/O devices specification on the command-line.
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
<li><strong>Next message:</strong> <a href="0051.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.6.1 released"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc1 released"</a>
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
