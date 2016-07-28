<?
$subject_val = "Re: [hwloc-users] lstopo on Kaveri";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 06:07:52 2015" -->
<!-- isoreceived="20150327100752" -->
<!-- sent="Fri, 27 Mar 2015 11:07:47 +0100" -->
<!-- isosent="20150327100747" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo on Kaveri" -->
<!-- id="55152BF3.3010201_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55151F4C.8000701_at_greenflops.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo on Kaveri<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 06:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/04/1160.php">Peyton, Jonathan L: "[hwloc-users] Preferred Windows build environment"</a>
<li><strong>Previous message:</strong> <a href="1158.php">Samy CHBINOU: "[hwloc-users] lstopo on Kaveri"</a>
<li><strong>In reply to:</strong> <a href="1158.php">Samy CHBINOU: "[hwloc-users] lstopo on Kaveri"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>That's an interesting question:
<br>
Even if the GPU is physically-located inside the die, it is exposed as a
<br>
&quot;virtual&quot; PCI device (vendor number 1002 and model number 130f), and
<br>
that's how we detect it, and that's how the driver configures it. Many
<br>
components of the CPU die are configured through PCI just because it's
<br>
an easy way.
<br>
<p>Ideally, the AMD driver would put some flag somewhere in the sysfs
<br>
attributes to tell us that the GPU is actually inside the package but I
<br>
am not aware of any such way to get that information. So that's
<br>
something we may want to improve.
<br>
<p>That said, it's not such a big problem since the locality is still
<br>
correct: the PCI device appears connected to the main machine memory.
<br>
What could wrong is the L3 cache, but I don't know if that one is shared
<br>
between the CPU and GPU in AMD packages.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 27/03/2015 10:13, Samy CHBINOU a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I run lstopo on my APU A10-7850K (4CPUs + 8 GPUs), they are detected
</span><br>
<span class="quotelev1">&gt; (see included picture) but the 8 GPUs are detected on the PCI bus,
</span><br>
<span class="quotelev1">&gt; while they are on the same die as the CPUs and directly share parts of
</span><br>
<span class="quotelev1">&gt; the RAM.
</span><br>
<span class="quotelev1">&gt; ... I don't understand the signification of the numbers PCI 1002:130f
</span><br>
<span class="quotelev1">&gt; ... to what does it correspond?
</span><br>
<span class="quotelev1">&gt; a dmesg gives me : pci 0000:00:01.0: [1002:130f] type 00 class 0x030000
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/04/1160.php">Peyton, Jonathan L: "[hwloc-users] Preferred Windows build environment"</a>
<li><strong>Previous message:</strong> <a href="1158.php">Samy CHBINOU: "[hwloc-users] lstopo on Kaveri"</a>
<li><strong>In reply to:</strong> <a href="1158.php">Samy CHBINOU: "[hwloc-users] lstopo on Kaveri"</a>
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
