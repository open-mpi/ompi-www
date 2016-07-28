<?
$subject_val = "Re: [OMPI users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 16:58:26 2009" -->
<!-- isoreceived="20090305215826" -->
<!-- sent="Thu, 05 Mar 2009 23:58:17 +0200" -->
<!-- isosent="20090305215817" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RETRY EXCEEDED ERROR" -->
<!-- id="49B04AF9.5020505_at_dev.mellanox.co.il" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090305212604.GQ30193_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 16:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8335.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8333.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8333.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Thanks Pasha!
</span><br>
<span class="quotelev1">&gt; ibdiagnet reports the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -I- IPoIB Subnets Check
</span><br>
<span class="quotelev1">&gt; -I---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -I- Subnet: IPv4 PKey:0x7fff QKey:0x00000b1b MTU:2048Byte rate:10Gbps SL:0x00
</span><br>
<span class="quotelev1">&gt; -W- Port localhost/P1 lid=0x00e2 guid=0x001e0bffff4ced75 dev=25218 can not join
</span><br>
<span class="quotelev1">&gt;     due to rate:2.5Gbps &lt; group:10Gbps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this may indicate a bad adapter.  Now, I just need to find what
</span><br>
<span class="quotelev1">&gt; system this maps to.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I guess it is some bad cable....
<br>
<span class="quotelev1">&gt; I also ran ibcheckerrors and it reports a lot of problems with buffer
</span><br>
<span class="quotelev1">&gt; overruns.  Here's the tail end of the output, with only some of the last
</span><br>
<span class="quotelev1">&gt; ports reported:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #warn: counter SymbolErrors = 36905     (threshold 10) lid 193 port 14
</span><br>
<span class="quotelev1">&gt; #warn: counter LinkDowned = 23  (threshold 10) lid 193 port 14
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvErrors = 15641        (threshold 10) lid 193 port 14
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvSwRelayErrors = 225   (threshold 100) lid 193 port 14
</span><br>
<span class="quotelev1">&gt; #warn: counter ExcBufOverrunErrors = 10         (threshold 10) lid 193 port 14
</span><br>
<span class="quotelev1">&gt; Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 14:  FAILED 
</span><br>
<span class="quotelev1">&gt; #warn: counter LinkRecovers = 181       (threshold 10) lid 193 port 1
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvSwRelayErrors = 2417  (threshold 100) lid 193 port 1
</span><br>
<span class="quotelev1">&gt; Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 1:  FAILED 
</span><br>
<span class="quotelev1">&gt; #warn: counter LinkRecovers = 103       (threshold 10) lid 193 port 3
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvErrors = 9035         (threshold 10) lid 193 port 3
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvSwRelayErrors = 64670         (threshold 100) lid 193 port 3
</span><br>
<span class="quotelev1">&gt; Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 3:  FAILED 
</span><br>
<span class="quotelev1">&gt; #warn: counter SymbolErrors = 13151     (threshold 10) lid 193 port 4
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvErrors = 109  (threshold 10) lid 193 port 4
</span><br>
<span class="quotelev1">&gt; #warn: counter RcvSwRelayErrors = 507   (threshold 100) lid 193 port 4
</span><br>
<span class="quotelev1">&gt; Error check on lid 193 (ISR9288/ISR9096 Voltaire sLB-24) port 4:  FAILED 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## Summary: 209 nodes checked, 0 bad nodes found
</span><br>
<span class="quotelev1">&gt; ##          716 ports checked, 103 ports have errors beyond threshold
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It reports a lot of symbol errors. I recommend you to reset all these 
<br>
counters (if i remember correct it is
<br>
-c flag in ibdiagnet) and rerun the testing again after the mpi process 
<br>
failure.
<br>
<p>Thanks,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8335.php">Pavel Shamis (Pasha): "Re: [OMPI users] mlx4 error - looking for guidance"</a>
<li><strong>Previous message:</strong> <a href="8333.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8333.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
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
