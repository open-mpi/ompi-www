<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 13:00:04 2010" -->
<!-- isoreceived="20101121180004" -->
<!-- sent="Sun, 21 Nov 2010 19:00:06 +0100" -->
<!-- isosent="20101121180006" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE95E26.2080701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE956C8.2000605_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 13:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1519.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1519.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/11/2010 18:28, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; #### use cpuinfo or sysfs?
</span><br>
<span class="quotelev1">&gt; #### using hwloc_accessat
</span><br>
<span class="quotelev1">&gt; #### hwloc_accessat failed No such file or directory
</span><br>
<span class="quotelev1">&gt; #### using cpuinfo
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This is caused by /sys/devices/system/cpu/cpu0/topology not existing in
<br>
the tarball. So this is actually expected. Can you check whether this
<br>
directory exists on the machine and whether it's empty or not?
<br>
<p>Your former &quot;good.txt&quot; used sysfs+devicetree. Your &quot;bad.txt&quot; and
<br>
&quot;bad2.txt&quot; used cpuinfo without devicetree. It says:
<br>
&quot;No cores and L2 cache were found in /proc/device-tree/cpus, exiting&quot;
<br>
<p>So two things:
<br>
1) it should use always cpuinfo instead of sysfs so something looks
<br>
wrong in the way we detect whether /sys/devices/system/cpu/cpu0/topology
<br>
exists. Where/how did you run your &quot;good.txt&quot; ? Is it a lstopo on the
<br>
actual machine without any options/envvariable?
<br>
2) it should find things in the devicetree, but we don't have a lot of
<br>
debug info in there unfortunately. let's look at (1) first
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1519.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1519.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
