<?
$subject_val = "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:45:34 2011" -->
<!-- isoreceived="20111214204534" -->
<!-- sent="Wed, 14 Dec 2011 12:45:15 -0800" -->
<!-- isosent="20111214204515" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1" -->
<!-- id="4EE90ADB.4060501_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE9012F.9020001_at_inria.fr" -->
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
<strong>Date:</strong> 2011-12-14 15:45:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>In reply to:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 12:03 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 14/12/2011 20:45, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I can run &quot;lspci -vv&quot; to get plenty of correct information and no such
</span><br>
<span class="quotelev2">&gt;&gt; messages.
</span><br>
<span class="quotelev1">&gt; What about lspci -vvxxx ? These options makes the pci lib read 256
</span><br>
<span class="quotelev1">&gt; instead of 64 bytes of config space ?
</span><br>
<p>Yup, that reproduces the problem:
<br>
$ lspci -vvxxx
<br>
pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
<br>
lspci: Unable to read 256 bytes of configuration space.
<br>
<p>However, my lspci manpage says only root can use -xxx:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-xxx   Show  hexadecimal  dump of whole PCI configuration space. 
<br>
Avail-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;able only for root as several PCI devices crash when you 
<br>
try  to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read  undefined  portions  of  the  config space (this 
<br>
behaviour
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;probably doesn't violate the PCI standard,  but  it's  
<br>
at  least
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;very stupid).
<br>
<p>So, I tried &quot;sudo lspci -vvxxx&quot; and get lots of output and no error.
<br>
<p>Following up on that, I find &quot;sudo hwloc-calc&quot; runs w/o the errors.
<br>
<p>Here is a portion of proc_bus_pci_read() from my 
<br>
/usr/src/linux-2.4.21-60.EL/drivers/pci/proc.c:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Normal users can read only the standardized portion of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* configuration space as several chips lock up when trying to read
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* undefined locations (think of Intel PIIX4 as a typical example).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (capable(CAP_SYS_ADMIN))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = PCI_CFG_SPACE_SIZE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (dev-&gt;hdr_type == PCI_HEADER_TYPE_CARDBUS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 128;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 64;
<br>
<p>I find that this exact code is still present in linux-2.6.39.  So, the 
<br>
kernel behavior has not changed in this respect and I suspect therefore 
<br>
that more recent libpci is simply masking the short read.
<br>
<p>I would suggest logic in topology-libpci that tries first to read 256 
<br>
bytes and they tries again to read 128 and then 64.
<br>
With a smart pciaccess-&gt;error handler one would NOT produce this error 
<br>
message until 256, 128 and 64-byte reads all fail.
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
<li><strong>Next message:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>In reply to:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2644.php">Paul H. Hargrove: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
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
