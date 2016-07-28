<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 05:03:35 2007" -->
<!-- isoreceived="20070118100335" -->
<!-- sent="Thu, 18 Jan 2007 11:05:07 +0100" -->
<!-- isosent="20070118100507" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="200701181105.11721.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070118085219.GA32070_at_lemming.cita.utoronto.ca" -->
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
<strong>Date:</strong> 2007-01-18 05:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 18 January 2007 09:52, Robin Humble wrote:
<br>
...
<br>
<span class="quotelev1">&gt; is ~10Gbit the best I can expect from 4x DDR IB with MPI?
</span><br>
<span class="quotelev1">&gt; some docs @HP suggest up to 16Gbit (data rate) should be possible, and
</span><br>
<span class="quotelev1">&gt; I've heard that 13 or 14 has been achieved before. but those might be
</span><br>
<span class="quotelev1">&gt; verbs numbers, or maybe horsepower &gt;&gt; 4 cores of 2.66GHz core2 is
</span><br>
<span class="quotelev1">&gt; required?
</span><br>
<p>The 16 Gbit/s number is the theoretical peak, IB is coded 8/10 so out of the 
<br>
20 Gbit/s 16 is what you get. On SDR this number is (of course) 8 Gbit/s 
<br>
achievable (which is ~1000 MB/s) and I've seen well above 900 on MPI (this on 
<br>
8x PCIe, 2x margin).
<br>
<p>The same setup on 4x PCIe stops at a bit over 700 MB/s (for a certain PCIe 
<br>
chipset) so it makes some sense that an IB 4x DDR on 8x PICe would be limited 
<br>
to about 1500 MB/s (on that platform). All this ignoring possible MPI bottle 
<br>
necks above 900 MB/s and assuming the IB fabric can reach 95%+ of peak on DDR 
<br>
as it does on SDR...
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2492/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2493.php">Scott Atchley: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
