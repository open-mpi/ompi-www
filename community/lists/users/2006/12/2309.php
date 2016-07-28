<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 07:56:40 2006" -->
<!-- isoreceived="20061206125640" -->
<!-- sent="Wed, 6 Dec 2006 07:55:59 -0500" -->
<!-- isosent="20061206125559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple LIDs" -->
<!-- id="28D0C180-54B7-4D57-988C-2E52DA1775C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061206070552.GA11933_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 07:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2287.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2006, at 2:05 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt;   Actually I was wondering why there is a facility for having  
</span><br>
<span class="quotelev2">&gt;&gt; multiple
</span><br>
<span class="quotelev2">&gt;&gt; LIDs for the same port. This led me to the entire series of  
</span><br>
<span class="quotelev2">&gt;&gt; questions.
</span><br>
<span class="quotelev2">&gt;&gt;    It is still not very clear to, as to what is the advantage of
</span><br>
<span class="quotelev2">&gt;&gt; assigning multiple LIDs to the same port. Does it give some
</span><br>
<span class="quotelev2">&gt;&gt; performance advantages?
</span><br>
<span class="quotelev1">&gt; Each LID has its own path through the fabric (ideally), this is the  
</span><br>
<span class="quotelev1">&gt; way to
</span><br>
<span class="quotelev1">&gt; lower a congestion.
</span><br>
<p>More specifically, multi-LID support is best for networks where there  
<br>
are multiple paths between the same pair of peers (e.g., a fat tree  
<br>
network with multiple core switches).  If you don't have a multi- 
<br>
route topology on your IB network, multi-LID support from the same  
<br>
port is not likely to be useful.
<br>
<p>To answer your specific question: multi-LID support from a single  
<br>
port is not a bandwidth multiplier because you're still sending and  
<br>
receiving from a single port on the host (which has a fixed bandwidth  
<br>
capability).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2287.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
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
