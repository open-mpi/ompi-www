<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 09:54:53 2010" -->
<!-- isoreceived="20100806135453" -->
<!-- sent="Fri, 06 Aug 2010 15:51:16 +0200" -->
<!-- isosent="20100806135116" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="4C5C1354.3080608_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1281102653.12957.519.camel_at_kallies.zib.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 09:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Bernd Kallies: "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1249.php">Bernd Kallies: "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1251.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1252.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/08/2010 15:50, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I create a cpuset manually according to cpuset(7), configuring a
</span><br>
<span class="quotelev1">&gt; subset of cpus and mems of the machine for it, bind the current shell to
</span><br>
<span class="quotelev1">&gt; this cpuset, and execute lstopo, then I expect that the listed topology
</span><br>
<span class="quotelev1">&gt; shows only the resources of the cpuset. This corresponds to the default
</span><br>
<span class="quotelev1">&gt; setting of flags of the topology context (without
</span><br>
<span class="quotelev1">&gt; HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works as expected on a machine running SLES10SP3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Repeating the same procedure on a similar machine running SLES11SP1
</span><br>
<span class="quotelev1">&gt; fails. lstopo always lists the resources of the whole machine, and
</span><br>
<span class="quotelev1">&gt; ignores the cpuset constraint. Other things like e.g. numatools report
</span><br>
<span class="quotelev1">&gt; the expected constraint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know how I can assist you in alayzing the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely BK
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Can you send /proc/mounts of both systems?
<br>
I fixed a problem after 1.0.2 was released [1], it could be related.
<br>
<p>Brice
<br>
<p>[1] <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2357">https://svn.open-mpi.org/trac/hwloc/changeset/2357</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Bernd Kallies: "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1249.php">Bernd Kallies: "[hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1251.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1252.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
