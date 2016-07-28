<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 08:10:20 2007" -->
<!-- isoreceived="20070118131020" -->
<!-- sent="Thu, 18 Jan 2007 15:10:15 +0200" -->
<!-- isosent="20070118131015" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="20070118131015.GF1631_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070118121713.GA8785_at_lemming.cita.utoronto.ca" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 08:10:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2494.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2494.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2506.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2506.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 18, 2007 at 07:17:13AM -0500, Robin Humble wrote:
<br>
<span class="quotelev1">&gt; On Thu, Jan 18, 2007 at 11:08:04AM +0200, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Jan 18, 2007 at 03:52:19AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jan 17, 2007 at 08:55:31AM -0700, Brian W. Barrett wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;On Jan 17, 2007, at 2:39 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On Wed, Jan 17, 2007 at 04:12:10AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; basically I'm seeing wildly different bandwidths over InfiniBand 4x DDR
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; when I use different kernels.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Try to load ib_mthca with tune_pci=1 option on those kernels that are
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; slow.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;when an application has high buffer reuse (like NetPIPE), which can  
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;be enabled by adding &quot;-mca mpi_leave_pinned 1&quot; to the mpirun command  
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;line.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks! :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tune_pci=1 makes a huge difference at the top end, and
</span><br>
<span class="quotelev2">&gt; &gt;Well this is broken BIOS then. Look here for more explanation:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="https://staging.openfabrics.org/svn/openib/gen2/branches/1.1/ofed/docs/mthca_release_notes.txt">https://staging.openfabrics.org/svn/openib/gen2/branches/1.1/ofed/docs/mthca_release_notes.txt</a>
</span><br>
<span class="quotelev2">&gt; &gt;search for &quot;tune_pci=1&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ok. thanks :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -mca mpi_leave_pinned 1 adds lots of midrange bandwidth.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; latencies (~4us) and the low end performance are all unchanged.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see attached for details.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; most curves are for 2.6.19.2 except the last couple (tagged as old)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which are for 2.6.9-42.0.3.ELsmp and for which tune_pci changes nothing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; why isn't tune_pci=1 the default I wonder?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; files in /sys/module/ib_mthca/ tell me it's off by default in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2.6.9-42.0.3.ELsmp, but the results imply that it's on... maybe PCIe
</span><br>
<span class="quotelev3">&gt; &gt;&gt; handling is very different in that kernel.
</span><br>
<span class="quotelev2">&gt; &gt;This is explained in the link above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hmmm...
</span><br>
<span class="quotelev1">&gt; but (sorry to harp on about this) /sys/module/ib_mthca/tune_pci is 0
</span><br>
<span class="quotelev1">&gt; for 2.6.9-42.0.3.ELsmp.
</span><br>
<span class="quotelev1">&gt; and even if that's lying, then mthca_tune_pci() appears identically
</span><br>
<span class="quotelev1">&gt; invoked in mthca_main.c from both 2.6.9-42.0.3.ELsmp and 2.6.19.2.
</span><br>
<span class="quotelev1">&gt; mthca_main.c is the only place in infiniband/hw/mthca that
</span><br>
<span class="quotelev1">&gt; pci_write_config_word() is called from, so you'd think that's got to be
</span><br>
<span class="quotelev1">&gt; how PCIe for IB was setup.
</span><br>
I really don't know details and I don't have sources of older module to
<br>
check, but in latest kernel sources tune_pci parameter is checked inside
<br>
mthca_tune_pci(). If you want to know more details you can ask openib
<br>
mailing list.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically it's not clear to me how or if tune_pci is being set in
</span><br>
<span class="quotelev1">&gt; 2.6.9-42.0.3.ELsmp, nor why it's any different to 2.6.19.2 :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; maybe it's some other level in the kernel setting up PCIe differently?
</span><br>
<span class="quotelev1">&gt; but that would presumably be unrelated to OFED.
</span><br>
BIOS should configure MaxReadReq to maximum value supported by chipset.
<br>
Linux shouldn't touch this value at all.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there a way to check pci burst settings from userland? or BIOS?
</span><br>
You can see PCI settings with lspci. Newest lspci decode this value for
<br>
you, with older once you'll have to dump PCI config space to the file
<br>
and decode it by yourself.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, the card appears to be Voltaire and system is SGI xe (210 and 240)
</span><br>
<span class="quotelev1">&gt; if that helps. /sys/class/infiniband/mthca0/board_id is VLT0050010001
</span><br>
<span class="quotelev1">&gt; not that I'm blaming anyone! :-)
</span><br>
The hardware and firmware are produced by Mellanox :)
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2494.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2494.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2506.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2506.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
