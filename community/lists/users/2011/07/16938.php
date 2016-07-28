<?
$subject_val = "Re: [OMPI users] Mixed Mellanox and Qlogic problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 12:03:37 2011" -->
<!-- isoreceived="20110715160337" -->
<!-- sent="Fri, 15 Jul 2011 12:03:29 -0400" -->
<!-- isosent="20110715160329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Mellanox and Qlogic problems" -->
<!-- id="68F4EB47-D349-4026-ACE6-71EDD4B127CA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1F8822.70309_at_atmos.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixed Mellanox and Qlogic problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 12:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16939.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16937.php">Jeffrey A Cummings: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16924.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16951.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16951.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think too many people have done combined QLogic + Mellanox runs, so this probably isn't a well-explored space.
<br>
<p>Can you run some microbenchmarks to see what kind of latency / bandwidth you're getting between nodes of the same type and nodes of different types?
<br>
<p>On Jul 14, 2011, at 8:21 PM, David Warren wrote:
<br>
<p><span class="quotelev1">&gt; On my test runs (wrf run just long enough to go beyond the spinup influence)
</span><br>
<span class="quotelev1">&gt; On just 6 of the the old mlx4 machines I get about 00:05:30 runtime
</span><br>
<span class="quotelev1">&gt; On 3 mlx4 and 3 qib nodes I get avg of 00:06:20
</span><br>
<span class="quotelev1">&gt; So the slow down is about 11+%
</span><br>
<span class="quotelev1">&gt; When this is a full run 11% becomes a evry long time.  This has held for some longer tests as well before I went to ofed 1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/14/11 05:55, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2011, at 7:46 PM, David Warren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I finally got access to the systems again (the original ones are part of our real time system). I thought I would try one other test I had set up first.  I went to OFED 1.6 and it started running with no errors. It must have been an OFED bug. Now I just have the speed problem. Anyone have a way to make the mixture of mlx4 and qlogic work together without slowing down?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean by &quot;slowing down&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; &lt;warren.vcf&gt;
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="16939.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16937.php">Jeffrey A Cummings: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16924.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16951.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="16951.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
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
