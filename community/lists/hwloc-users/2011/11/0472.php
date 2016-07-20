<?
$subject_val = "Re: [hwloc-users] GPU/NIC/CPU locality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 03:45:37 2011" -->
<!-- isoreceived="20111129084537" -->
<!-- sent="Tue, 29 Nov 2011 09:45:31 +0100" -->
<!-- isosent="20111129084531" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] GPU/NIC/CPU locality" -->
<!-- id="4ED49BAB.3020805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1C0A31DE-C36D-423F-814E-188F8062CAE5_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] GPU/NIC/CPU locality<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 03:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Stefan Eilemann: "[hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Stefan Eilemann: "[hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0473.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0475.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Stefan,
<br>
<p>hwloc 1.3 already has support for PCI device detection. These new
<br>
objects contain a &quot;class&quot; field that can help you know if it's a NIC/GPU/...
<br>
<p>However it's hard to know which PCI device is eth0 or eth1, so we also
<br>
try to add some OS device inside PCI device. If you're using Linux, you
<br>
will see which network device (eth0, ...), IB device (mlx4_0, ...), or
<br>
disk (sda, ...) corresponds to each PCI device (if any). Just run lstopo
<br>
on your machine to see what I am talking about. Then you should read the
<br>
I/O devices section in the doc.
<br>
<p>There's also some work to insert CUDA device information inside those
<br>
PCI devices.
<br>
<p>Additionally, we have some helpers to retrieve locality of some custom
<br>
libraries objects (OFED, CUDA, ...). See the interoperability section in
<br>
the doc.
<br>
<p>How are you using GPUs and NICs in your software? Which libraries or
<br>
ways do you use to access them?
<br>
<p>hope this helps.
<br>
Brice
<br>
<p><p><p><p>Le 29/11/2011 09:32, Stefan Eilemann a &#233;crit :
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have the need to discover which GPUs and NICs are close to which CPUs[1], independent from CUDA. From the overview page there are hints that there is some kind of support planned, but it's unclear to me of how much of this is implemented.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there support in hwloc, and in which version, for this? If yes, can you give me a hint/code snippet on how to do this? If no, what does it take to get this support in hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stefan.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://github.com/Eyescale/Equalizer/issues/57">https://github.com/Eyescale/Equalizer/issues/57</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Stefan Eilemann: "[hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Stefan Eilemann: "[hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0473.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0475.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
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
