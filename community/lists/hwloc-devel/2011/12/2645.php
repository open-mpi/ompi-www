<?
$subject_val = "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 16:21:53 2011" -->
<!-- isoreceived="20111214212153" -->
<!-- sent="Wed, 14 Dec 2011 22:21:48 +0100" -->
<!-- isosent="20111214212148" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1" -->
<!-- id="4EE9136C.5020805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE90D74.7060506_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 16:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>In reply to:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/12/2011 21:56, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; Now that I think of it, this situation seems to imply that running the
</span><br>
<span class="quotelev1">&gt; code in topology-libpci.c as root on a system w/ a Intel PIIX4
</span><br>
<span class="quotelev1">&gt; controller could lock-up ones machine.  Thoughts?
</span><br>
<p>I can't know for sure. I would be surprised if sudo lspci -xxx could
<br>
lockup an entire machine. If it was that dangerous, I hope that the
<br>
kernel guys would have added a quirk for this device to prevent people
<br>
from killing the machine. What do they mean with &quot;random location&quot; in
<br>
the comment ? Something between 64 and 256 ? Or something really random
<br>
after 256 ?
<br>
<p>FWIW, I increased the cached config space from 64 bytes to 256 when
<br>
adding support for getting the pcie link speed, which is indeed only
<br>
available to root (extended pcie capability).
<br>
<p>The attached patch might work. I am not sure all this is actually
<br>
necessary because things have been working fine so far, apart from your
<br>
warnings.
<br>
<p>By the way, does lstopo show PCI devices on your machine even when you
<br>
have these warnings?
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2645/pci_warning.patch">pci_warning.patch</a>
</ul>
<!-- attachment="pci_warning.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>In reply to:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2646.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
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
