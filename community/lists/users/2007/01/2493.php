<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 07:09:05 2007" -->
<!-- isoreceived="20070118120905" -->
<!-- sent="Thu, 18 Jan 2007 07:08:57 -0500" -->
<!-- isosent="20070118120857" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="60539B7E-440E-4137-993B-53B873EF810A_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200701181105.11721.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2007-01-18 07:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2494.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2007, at 5:05 AM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; On Thursday 18 January 2007 09:52, Robin Humble wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; is ~10Gbit the best I can expect from 4x DDR IB with MPI?
</span><br>
<span class="quotelev2">&gt;&gt; some docs @HP suggest up to 16Gbit (data rate) should be possible,  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; I've heard that 13 or 14 has been achieved before. but those might be
</span><br>
<span class="quotelev2">&gt;&gt; verbs numbers, or maybe horsepower &gt;&gt; 4 cores of 2.66GHz core2 is
</span><br>
<span class="quotelev2">&gt;&gt; required?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 16 Gbit/s number is the theoretical peak, IB is coded 8/10 so  
</span><br>
<span class="quotelev1">&gt; out of the
</span><br>
<span class="quotelev1">&gt; 20 Gbit/s 16 is what you get. On SDR this number is (of course) 8  
</span><br>
<span class="quotelev1">&gt; Gbit/s
</span><br>
<span class="quotelev1">&gt; achievable (which is ~1000 MB/s) and I've seen well above 900 on  
</span><br>
<span class="quotelev1">&gt; MPI (this on
</span><br>
<span class="quotelev1">&gt; 8x PCIe, 2x margin).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same setup on 4x PCIe stops at a bit over 700 MB/s (for a  
</span><br>
<span class="quotelev1">&gt; certain PCIe
</span><br>
<span class="quotelev1">&gt; chipset) so it makes some sense that an IB 4x DDR on 8x PICe would  
</span><br>
<span class="quotelev1">&gt; be limited
</span><br>
<span class="quotelev1">&gt; to about 1500 MB/s (on that platform). All this ignoring possible  
</span><br>
<span class="quotelev1">&gt; MPI bottle
</span><br>
<span class="quotelev1">&gt; necks above 900 MB/s and assuming the IB fabric can reach 95%+ of  
</span><br>
<span class="quotelev1">&gt; peak on DDR
</span><br>
<span class="quotelev1">&gt; as it does on SDR...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<p>The best uni-directional performance I have heard of for PCIe 8x IB  
<br>
DDR is ~1,400 MB/s (11.2 Gb/s) with Lustre, which is about 55% of the  
<br>
theoretical 20 Gb/s advertised speed. The ~900 MB/s (7.2 Gb/s)  
<br>
mentioned above is, of course, ~72% of advertised speed. If any IB  
<br>
folks have any better numbers, please correct me.
<br>
<p>The data throughput limit for 8x PCIe is ~12 Gb/s. The theoretical  
<br>
limit is 16 Gb/s, but each PCIe packet has a whopping 20 byte  
<br>
overhead. If the adapter uses 64 byte packets, then you see 1/3 of  
<br>
the throughput go to overhead.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2494.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2496.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
