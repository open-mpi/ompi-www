<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 07:57:33 2008" -->
<!-- isoreceived="20080729115733" -->
<!-- sent="Tue, 29 Jul 2008 07:57:22 -0400" -->
<!-- isosent="20080729115722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="37EFC421-3012-4B5F-A266-1A663E493CDF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080729105201.vvafm5slc00ssgg8_at_mail.zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Latency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 07:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6180.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 29, 2008, at 4:52 AM, Andy Georgi wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The upcoming Open MPI v1.3 series will support iWARP, which gives  
</span><br>
<span class="quotelev2">&gt;&gt; much
</span><br>
<span class="quotelev2">&gt;&gt; better latency than that.  I don't know all the Chelsio models  
</span><br>
<span class="quotelev2">&gt;&gt; offhand;
</span><br>
<span class="quotelev2">&gt;&gt; are those iWARP-capable cards?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the fast answer. So is this latency normal for TCP
</span><br>
<span class="quotelev1">&gt; communications over MPI!?
</span><br>
<p>There are multiple factors here:
<br>
<p>- TCP stacks are not normally optimized for low latency
<br>
- We've spent much more time optimizing OMPI's communications over  
<br>
other networks because we assume that TCP latencies will be high
<br>
<p>So yes, when using &quot;normal&quot; Linux TCP, latencies in the tens of us are  
<br>
not uncommon.
<br>
<p><span class="quotelev1">&gt; Could RDMA maybe reduce the latency?
</span><br>
<p>It's not so much RDMA that reduces the latency as it is OS-bypass, NIC  
<br>
offload, etc.  RDMA can help as well, but I wouldn't call that the  
<br>
driving factor.
<br>
<p><span class="quotelev1">&gt; It
</span><br>
<span class="quotelev1">&gt; should work with those cards but there are still problems with OFED.
</span><br>
<span class="quotelev1">&gt; iWARP is also one of the features they offer but if it works...
</span><br>
<p><p>If you're having problems getting iWARP to work with your Chelsio  
<br>
cards, you should take it up with their support channels.  It seems to  
<br>
work fine for me.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6180.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
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
