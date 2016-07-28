<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 08:10:29 2007" -->
<!-- isoreceived="20070118131029" -->
<!-- sent="Thu, 18 Jan 2007 14:11:56 +0100" -->
<!-- isosent="20070118131156" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="200701181412.05272.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="60539B7E-440E-4137-993B-53B873EF810A_at_myri.com" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 08:11:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2495.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 18 January 2007 13:08, Scott Atchley wrote:
<br>
...
<br>
<span class="quotelev1">&gt; The best uni-directional performance I have heard of for PCIe 8x IB
</span><br>
<span class="quotelev1">&gt; DDR is ~1,400 MB/s (11.2 Gb/s)
</span><br>
<p>This is on par with what I have seen.
<br>
<p><span class="quotelev1">&gt; with Lustre, which is about 55% of the 
</span><br>
<span class="quotelev1">&gt; theoretical 20 Gb/s advertised speed.
</span><br>
<p>I think this should be calculated against 16 Gbps, not 20 Gbps.
<br>
<p><span class="quotelev1">&gt; The ~900 MB/s (7.2 Gb/s) 
</span><br>
<span class="quotelev1">&gt; mentioned above is, of course, ~72% of advertised speed. If any IB
</span><br>
<span class="quotelev1">&gt; folks have any better numbers, please correct me.
</span><br>
<p>Using MPI (over a non idle multi-level switch) I get 940 * 10^6 Bytes/s which 
<br>
is 94% of peak for that IB 4x SDR.
<br>
<p><span class="quotelev1">&gt; The data throughput limit for 8x PCIe is ~12 Gb/s. The theoretical
</span><br>
<span class="quotelev1">&gt; limit is 16 Gb/s, but each PCIe packet has a whopping 20 byte
</span><br>
<span class="quotelev1">&gt; overhead. If the adapter uses 64 byte packets, then you see 1/3 of
</span><br>
<span class="quotelev1">&gt; the throughput go to overhead.
</span><br>
<p>AFAIK the datafield of a pci-express packet is 0-4096 bytes and the header a 
<br>
bit more than 20 bytes (including things such as start/stop frame bytes, 
<br>
LCRC/ECRC..). This gives a maximum speed over 4x PCIe of 993.3 10^6 Bytes/s 
<br>
(8 Gbps after coding minus header waste for a full 4096 byte payload).
<br>
<p>In short, the SDR IB equipment I have seen has easily reached 90%+ while 
<br>
PCI-express on the platforms I've tried has been limited to ~75%. Current IB 
<br>
DDR HCAs are probably limited by (at least) PCI-express 8x.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2496/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2495.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2497.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
