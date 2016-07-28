<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 08:41:06 2007" -->
<!-- isoreceived="20070118134106" -->
<!-- sent="Thu, 18 Jan 2007 08:41:00 -0500" -->
<!-- isosent="20070118134100" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="63DF6FC2-F789-4517-AE0F-02E73ECCBDEE_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200701181412.05272.cap_at_nsc.liu.se" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 08:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Previous message:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2007, at 8:11 AM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev2">&gt;&gt; with Lustre, which is about 55% of the
</span><br>
<span class="quotelev2">&gt;&gt; theoretical 20 Gb/s advertised speed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this should be calculated against 16 Gbps, not 20 Gbps.
</span><br>
<p>What is the advertised speed of a IB DDR card?
<br>
<p><a href="http://mellanox.com/products/hca_cards.php">http://mellanox.com/products/hca_cards.php</a>
<br>
<a href="http://www.voltaire.com/Products/Server_Products/Voltaire_HCA_4X0">http://www.voltaire.com/Products/Server_Products/Voltaire_HCA_4X0</a>
<br>
<p><span class="quotelev2">&gt;&gt; The ~900 MB/s (7.2 Gb/s)
</span><br>
<span class="quotelev2">&gt;&gt; mentioned above is, of course, ~72% of advertised speed. If any IB
</span><br>
<span class="quotelev2">&gt;&gt; folks have any better numbers, please correct me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using MPI (over a non idle multi-level switch) I get 940 * 10^6  
</span><br>
<span class="quotelev1">&gt; Bytes/s which
</span><br>
<span class="quotelev1">&gt; is 94% of peak for that IB 4x SDR.
</span><br>
<p>7.5 Gb/s. That card is sold as a 10 Gb/s card. See links above.
<br>
<p><span class="quotelev2">&gt;&gt; The data throughput limit for 8x PCIe is ~12 Gb/s. The theoretical
</span><br>
<span class="quotelev2">&gt;&gt; limit is 16 Gb/s, but each PCIe packet has a whopping 20 byte
</span><br>
<span class="quotelev2">&gt;&gt; overhead. If the adapter uses 64 byte packets, then you see 1/3 of
</span><br>
<span class="quotelev2">&gt;&gt; the throughput go to overhead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK the datafield of a pci-express packet is 0-4096 bytes and the  
</span><br>
<span class="quotelev1">&gt; header a
</span><br>
<span class="quotelev1">&gt; bit more than 20 bytes (including things such as start/stop frame  
</span><br>
<span class="quotelev1">&gt; bytes,
</span><br>
<span class="quotelev1">&gt; LCRC/ECRC..). This gives a maximum speed over 4x PCIe of 993.3 10^6  
</span><br>
<span class="quotelev1">&gt; Bytes/s
</span><br>
<span class="quotelev1">&gt; (8 Gbps after coding minus header waste for a full 4096 byte payload).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, the SDR IB equipment I have seen has easily reached 90%+  
</span><br>
<span class="quotelev1">&gt; while
</span><br>
<span class="quotelev1">&gt; PCI-express on the platforms I've tried has been limited to ~75%.  
</span><br>
<span class="quotelev1">&gt; Current IB
</span><br>
<span class="quotelev1">&gt; DDR HCAs are probably limited by (at least) PCI-express 8x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<p>Not all motherboard/chipsets can do more than 64 bytes. Some can,  
<br>
some cannot. Realistically, most PCIe 4x card are limited to less  
<br>
than 950 MB/s (7.6 Gb/s).
<br>
<p>You keep lowering the bar for the users. :-) The consumer buys X and  
<br>
expects to get close to X. They are surprised when you tell them that  
<br>
the &quot;real&quot; rate is Y where Y is 20-40% less than X.
<br>
<p>The problem is that cards have two &quot;ends&quot;, the host side and the  
<br>
network side. Focusing on one side while ignoring the other is asking  
<br>
for confused/upset customers. Mismatching the fabric and the host  
<br>
connection such as using DDR fabric to 8x PCIe slot limits the  
<br>
traffic to the slower of the two.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2498.php">Pak Lui: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY"</a>
<li><strong>Previous message:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
