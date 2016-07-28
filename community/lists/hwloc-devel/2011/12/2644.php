<?
$subject_val = "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:56:39 2011" -->
<!-- isoreceived="20111214205639" -->
<!-- sent="Wed, 14 Dec 2011 12:56:20 -0800" -->
<!-- isosent="20111214205620" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1" -->
<!-- id="4EE90D74.7060506_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE90ADB.4060501_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2645.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2643.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>In reply to:</strong> <a href="2643.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2645.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2645.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 12:45 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Here is a portion of proc_bus_pci_read() from my 
</span><br>
<span class="quotelev1">&gt; /usr/src/linux-2.4.21-60.EL/drivers/pci/proc.c:
</span><br>
<span class="quotelev1">&gt;         /*
</span><br>
<span class="quotelev1">&gt;          * Normal users can read only the standardized portion of the
</span><br>
<span class="quotelev1">&gt;          * configuration space as several chips lock up when trying to 
</span><br>
<span class="quotelev1">&gt; read
</span><br>
<span class="quotelev1">&gt;          * undefined locations (think of Intel PIIX4 as a typical 
</span><br>
<span class="quotelev1">&gt; example).
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         if (capable(CAP_SYS_ADMIN))
</span><br>
<span class="quotelev1">&gt;                 size = PCI_CFG_SPACE_SIZE;
</span><br>
<span class="quotelev1">&gt;         else if (dev-&gt;hdr_type == PCI_HEADER_TYPE_CARDBUS)
</span><br>
<span class="quotelev1">&gt;                 size = 128;
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;                 size = 64;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find that this exact code is still present in linux-2.6.39.  So, the 
</span><br>
<span class="quotelev1">&gt; kernel behavior has not changed in this respect and I suspect 
</span><br>
<span class="quotelev1">&gt; therefore that more recent libpci is simply masking the short read. 
</span><br>
<p>Now that I think of it, this situation seems to imply that running the 
<br>
code in topology-libpci.c as root on a system w/ a Intel PIIX4 
<br>
controller could lock-up ones machine.  Thoughts?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2645.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2643.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>In reply to:</strong> <a href="2643.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2645.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2645.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
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
