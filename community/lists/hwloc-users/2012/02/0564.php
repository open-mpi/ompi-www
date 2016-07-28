<?
$subject_val = "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 09:48:44 2012" -->
<!-- isoreceived="20120221144844" -->
<!-- sent="Tue, 21 Feb 2012 15:48:38 +0100" -->
<!-- isosent="20120221144838" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset" -->
<!-- id="4F43AEC6.5000700_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F43AD71.8020707_at_oerc.ox.ac.uk" -->
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
<strong>Subject:</strong> Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 09:48:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0565.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Previous message:</strong> <a href="0563.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0563.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/02/2012 15:42, Albert Solernou a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have several questions in order to fix this issue from the machine
</span><br>
<span class="quotelev1">&gt; side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I realised that on this machine neither libcpuset nor cpuset-utils
</span><br>
<span class="quotelev1">&gt; are installed. Could this be related to the problem?
</span><br>
<p>No, Linux &quot;cpuset&quot; are very different from hwloc &quot;cpuset&quot; and &quot;bitmap&quot;
<br>
unfortunately. The former is about reducing the available resources in
<br>
the machine so that processes cannot use the entire CPUs for instance.
<br>
hwloc detects this feature but it doesn't need libcpuset to do so.
<br>
Things just work :)
<br>
<p><span class="quotelev1">&gt; 2) Could you specify any BIOS parameter we could tune up
</span><br>
<p>You can look for PCI affinity or PCI NUMA maybe. But I don't think
<br>
you'll find anything because your machine isn't NUMA anyway. I/O
<br>
affinity don't matter on this machine, there's no reason to
<br>
enable/disable it in this BIOS.
<br>
<p><span class="quotelev1">&gt; 3) Could this issue be related to the linux kernel?
</span><br>
<p>I think the kernel has been properly detecting this kind of affinity
<br>
from the BIOS for a very long time. At least 2.6.18 but likely way earlier.
<br>
<p>You should just forget about this problem and use hwloc 1.4.1rc1
<br>
(released today, already on the web, to be announced soon, once windows
<br>
zips are ready). It contains the workaround for your problem.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0565.php">vaibhav dutt: "Re: [hwloc-users] Hardware Topology"</a>
<li><strong>Previous message:</strong> <a href="0563.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0563.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
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
