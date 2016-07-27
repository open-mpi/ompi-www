<?
$subject_val = "Re: [hwloc-devel] Merging the PCI branch?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 08:49:45 2011" -->
<!-- isoreceived="20110406124945" -->
<!-- sent="Wed, 06 Apr 2011 14:49:40 +0200" -->
<!-- isosent="20110406124940" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Merging the PCI branch?" -->
<!-- id="4D9C6164.3000705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D82FB4A-FC02-4406-8199-6D325F06C83C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Merging the PCI branch?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 08:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2100.php">Terry Dontje: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2098.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2100.php">Terry Dontje: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2100.php">Terry Dontje: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/03/2011 18:06, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 28, 2011, at 5:26 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; libpci is needed to make this work. And only Linux gives you OS devices
</span><br>
<span class="quotelev2">&gt;&gt; for now (we use sysfs to translate between pci devs and os devs).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Is libpci available on all platforms?  Or is it only needed on Linux?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Our PCI stuff works on FreeBSD7, but it seems to require root access
<br>
(/dev/pci) for everything (Linux only requires root access to get the
<br>
link speeds). Also we don't have any information about OS devices there,
<br>
so we just get PCI devices and bridges.
<br>
<p>I couldn't find a way to install libpci on our Solaris platforms.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2100.php">Terry Dontje: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2098.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2100.php">Terry Dontje: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2100.php">Terry Dontje: "Re: [hwloc-devel] Merging the PCI branch?"</a>
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
