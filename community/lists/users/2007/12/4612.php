<?
$subject_val = "Re: [OMPI users] OpenMP + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 10:08:49 2007" -->
<!-- isoreceived="20071206150849" -->
<!-- sent="Thu, 6 Dec 2007 10:08:40 -0500" -->
<!-- isosent="20071206150840" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OpenMPI" -->
<!-- id="5AF00F5E-E7D4-426B-A79F-9E370C165CA5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0712060654p5bc2ff5bt14d878c56c55d8b4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP + OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 10:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4613.php">Sajjad Tabib: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2007, at 9:54 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Automatically striping large messages across multiple NICs is  
</span><br>
<span class="quotelev1">&gt; certainly a very nice feature; I was not aware that OpenMPI does  
</span><br>
<span class="quotelev1">&gt; this transparently. (I wonder if other MPI implementations do this  
</span><br>
<span class="quotelev1">&gt; or not). However, I have the following concern: Since the  
</span><br>
<span class="quotelev1">&gt; communication over an ethernet NIC is most likely over IP, does it  
</span><br>
<span class="quotelev1">&gt; take into account the route cost when striping messages? For  
</span><br>
<span class="quotelev1">&gt; example, host A and B in the MPD ring might be connected via two  
</span><br>
<span class="quotelev1">&gt; NICs, one direct and one via an intermediate router, or one with a  
</span><br>
<span class="quotelev1">&gt; large bandwidth and another with a small bandwidth. Does OpenMPI  
</span><br>
<span class="quotelev1">&gt; send a smaller chunk of data over a route with a higher cost?
</span><br>
<p>Not unless you tell it.
<br>
<p>In IB networks, the network API exposes bandwidth differences of the  
<br>
NIC and Open MPI takes that into account by deciding how much data to  
<br>
send down each endpoint.  Open MPI does not currently know anything  
<br>
about / try to optimize based on the costs of different routes.
<br>
<p>On a TCP network, whether you go through 2 or 3 switches -- does it  
<br>
really matter?  The latency is so high that adding another switch (or  
<br>
2 or 3 or ...) may not make much of a difference anyway.  Raw  
<br>
bandwidth differences between two networks will make a difference, but  
<br>
number of hops -- as long as they're not *too* difference -- might not.
<br>
<p>Also consider: if you're combining 100Mbps and 1Gbps ethernet networks  
<br>
-- is it really worth it?  If your goal is simple bandwidth addition,  
<br>
note that you're adding a fraction of the capability to the 1Gbps  
<br>
network at the cost of additional complexity in your software and/or  
<br>
fragmentation reassembly penalties.  Will you really see more  
<br>
delivered bandwidth?  It's probably dependent upon your application  
<br>
(e.g., are you continually sending very large messages?).  You might  
<br>
get much more bang for your buck if you combine like networks (e.g.,  
<br>
2x100Mbps or 2x1Gbps) because you'll be [potentially] doubling your  
<br>
bandwidth.
<br>
<p><span class="quotelev1">&gt; Because of this concern, I think the channel bonding approach  
</span><br>
<span class="quotelev1">&gt; someone else suggested is more preferable; all these details will be  
</span><br>
<span class="quotelev1">&gt; taken care of at the hardware level instead of at the IP level.
</span><br>
<p>That's not quite true.  Both approaches are handled in software; one  
<br>
is in the kernel, the other is in the middleware.  The hardware is  
<br>
unaware that you are striping large messages.
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
<li><strong>Next message:</strong> <a href="4613.php">Sajjad Tabib: "Re: [OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4611.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4610.php">Durga Choudhury: "Re: [OMPI users] OpenMP + OpenMPI"</a>
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
