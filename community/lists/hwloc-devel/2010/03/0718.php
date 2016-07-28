<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 14:00:34 2010" -->
<!-- isoreceived="20100307190034" -->
<!-- sent="Sun, 07 Mar 2010 20:00:07 +0100" -->
<!-- isosent="20100307190007" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809" -->
<!-- id="4B93F7B7.5050203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201003071838.o27IcdaJ002023_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 14:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1814)"</a>
<li><strong>Previous message:</strong> <a href="0717.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1808)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0720.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809"</a>
<li><strong>Reply:</strong> <a href="0720.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-07 13:38:39 EST (Sun, 07 Mar 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1809
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1809">https://svn.open-mpi.org/trac/hwloc/changeset/1809</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; hwloc-mask: display physical indexes for --proc/nodelist if --physical is given
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I wonder if we should rename (or symlink) hwloc-mask since it does much
<br>
more than combining cpuset strings, and &quot;mask&quot; isn't such a good name.
<br>
<p>For the record, it accepts as input:
<br>
* cpusets
<br>
* object tuples
<br>
* all the above with binary operators
<br>
and it may output:
<br>
* cpuset
<br>
* list of processor included (convenient for numactl --physcpubind or
<br>
taskset)
<br>
* list of numa node near (convenient for numactl --cpubind --membind)
<br>
(and tuples in the future when I'll have time)
<br>
<p>Maybe hwloc-convert or hwloc-combine ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0719.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1814)"</a>
<li><strong>Previous message:</strong> <a href="0717.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1808)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0720.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809"</a>
<li><strong>Reply:</strong> <a href="0720.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809"</a>
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
