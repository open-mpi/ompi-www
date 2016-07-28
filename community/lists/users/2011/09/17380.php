<?
$subject_val = "Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 15:28:38 2011" -->
<!-- isoreceived="20110921192838" -->
<!-- sent="Wed, 21 Sep 2011 15:28:20 -0400" -->
<!-- isosent="20110921192820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="15BF67F8-33BE-43C7-9FCF-960F76134720_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006FC_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 15:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17381.php">Jeff Squyres: "Re: [OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>Previous message:</strong> <a href="17379.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17379.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17382.php">Sébastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17382.php">Sébastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2011, at 3:17 PM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Meanwhile, I contacted some people at SciNet, which is also part of Compute Canada. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They told me to try Open-MPI 1.4.3 with the Intel compiler with --mca btl self,ofud to use the ofud BTL instead of openib for OpenFabrics transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This worked quite good -- I got a low latency of 35 microseconds. Yay !
</span><br>
<p>That's still pretty terrible.
<br>
<p>Per your comments below, yes, ofud was never finished.  I believe it doesn't have retransmission code in there, so if anything is dropped by the network (which, in a congested/busy network, there will be drops), the job will likely hang.
<br>
<p>The ofud and openib BTLs should have similar latencies.  Indeed, openib should actually have slightly lower HRT ping-pong latencies because of protocol and transport differences between the two.
<br>
<p>The openib BTL should give about the same latency as the ibv_rc_pingpong, which you cited at about 11 microseconds (I assume there must be multiple hops in that IB network to be that high), which jives with your &quot;only 1 process sends&quot; RAY network test (<a href="http://pastebin.com/dWMXsHpa">http://pastebin.com/dWMXsHpa</a>).
<br>
<p>It's not uncommon for latency to go up if multiple processes are all banging on the HCA, but it shouldn't go up noticeably if there's only 2 processes on each node doing simple ping-pong tests, for example.
<br>
<p>What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17381.php">Jeff Squyres: "Re: [OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>Previous message:</strong> <a href="17379.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17379.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17382.php">Sébastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17382.php">Sébastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
