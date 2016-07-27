<?
$subject_val = "Re: [hwloc-devel] multinode/network topology status";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  4 10:51:39 2011" -->
<!-- isoreceived="20111004145139" -->
<!-- sent="Tue, 4 Oct 2011 16:51:34 +0200" -->
<!-- isosent="20111004145134" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multinode/network topology status" -->
<!-- id="20111004145134.GN4463_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="872546970.246054.1316588092086.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multinode/network topology status<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-04 10:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2491.php">Jiri Hladky: "[hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<li><strong>Previous message:</strong> <a href="2489.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc3r3902)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/09/2424.php">Brice Goglin: "[hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2494.php">Brice Goglin: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Reply:</strong> <a href="2494.php">Brice Goglin: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brice Goglin, le Wed 21 Sep 2011 08:54:52 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Example of C interface use (assembling 3 nodes in a global topology with
</span><br>
<span class="quotelev1">&gt; 3 levels of switches):
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/tests/hwloc_custom.c#L23">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/tests/hwloc_custom.c#L23</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C interface doc:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L1904">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L1904</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L803">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/include/hwloc.h#L803</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manpages of the command-line tools (with examples at the end):
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler.1in">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler.1in</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler-remote.1in">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/utils/hwloc-assembler-remote.1in</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; General doc about all this:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/doc/hwloc.doxy#L1224">https://svn.open-mpi.org/trac/hwloc/browser/branches/custom/doc/hwloc.doxy#L1224</a>
</span><br>
<p>This looks good. hwloc-assembler-remote should probably have a
<br>
--lstopo-path option to specify where to find lstopo, since the host
<br>
from which we run it may not have the same hwloc installation as the
<br>
target nodes. I'm actually unsure whether it really should default to
<br>
$bindir/lstopo and not simply to lstopo.
<br>
<p>There is an issue with the distance code that appears when there are
<br>
several machines with NUMA distances: the distance code assumes that the
<br>
root of the topology has cpusets to be compared with, and quickly
<br>
crashes on insert_by_cpuset or get_obj_covering_cpuset calls.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2491.php">Jiri Hladky: "[hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<li><strong>Previous message:</strong> <a href="2489.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc3r3902)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/09/2424.php">Brice Goglin: "[hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2494.php">Brice Goglin: "Re: [hwloc-devel] multinode/network topology status"</a>
<li><strong>Reply:</strong> <a href="2494.php">Brice Goglin: "Re: [hwloc-devel] multinode/network topology status"</a>
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
