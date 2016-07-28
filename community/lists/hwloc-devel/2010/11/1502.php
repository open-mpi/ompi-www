<?
$subject_val = "Re: [hwloc-devel] PCI device location in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 17:59:05 2010" -->
<!-- isoreceived="20101118225905" -->
<!-- sent="Thu, 18 Nov 2010 23:58:42 +0100" -->
<!-- isosent="20101118225842" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device location in hwloc" -->
<!-- id="20101118225842.GR6024_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1358785693.510659.1290120440790.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device location in hwloc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 17:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1503.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1503.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1503.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Christopher Samuel, le Thu 18 Nov 2010 23:47:20 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Does the information occur to the right of the socket with
</span><br>
<span class="quotelev1">&gt; the closest distance to the devices ?
</span><br>
<p>If your case, hwloc was apparently unable to decide whether the devices
<br>
where &quot;inside&quot; one or the other NUMA node. Could you also post the
<br>
output of gather-topology?
<br>
<p><span class="quotelev1">&gt; Well at the moment that looks rather nice to me, though it
</span><br>
<span class="quotelev1">&gt; would indeed be good to see GPUs labelled to - though I've
</span><br>
<span class="quotelev1">&gt; seen your comment in the source saying:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* FIXME: what about gpus? could try class &quot;drm&quot;, but
</span><br>
<span class="quotelev1">&gt;    proprietary drivers won't appear there */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have any boxes at all with GPUs in them, so I'm not
</span><br>
<span class="quotelev1">&gt; sure what to suggest there. :-(
</span><br>
<p>Actually we might as well just first implement the modularized version
<br>
of hwloc, so that we can dynamically load a cuda-based module which will
<br>
just show a proper CUDA device.
<br>
<p>In the meanwhile, we could special-case a few things. We probably don't
<br>
want to emit the whole pciids identifier (e.g.
<br>
85:00.0 VGA compatible controller: nVidia Corporation GT200GL [Quadro FX 5800] (rev a1)
<br>
), but in this case we could handle the nvidia vendorId specially: parse
<br>
the pciid to extract Quadro FX 5800 and display that.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1503.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1503.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1503.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
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
