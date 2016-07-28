<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 13:13:38 2006" -->
<!-- isoreceived="20060209181338" -->
<!-- sent="Thu, 9 Feb 2006 11:13:33 -0700" -->
<!-- isosent="20060209181333" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="5914b57a293a302b0bb402b215d2978c_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1139507240.1494.206.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 13:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Brian Barrett: "Re: [O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>Maybe in reply to:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<p>I would recommend reading the following tech report, it should shed  
<br>
some light to how these things work :
<br>
<a href="http://www.cs.unm.edu/research/search_technical_reports_by_keyword/">http://www.cs.unm.edu/research/search_technical_reports_by_keyword/</a>? 
<br>
string=infiniband
<br>
<p><p><span class="quotelev1">&gt; 1 - It does not seem that mvapich does RDMA for small messages. It will
</span><br>
<span class="quotelev1">&gt; do RDMA for any message that is too big to send eagerly, but the
</span><br>
<span class="quotelev1">&gt; threshold is not that low and cannot be lowered to apply to 0-byte msgs
</span><br>
<span class="quotelev1">&gt; anyway (nothing lower than 128bytes or so will work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>mvapich does do RDMA for small messages, they preallocate a buffer for  
<br>
each peer and then poll each of these buffers for completion,
<br>
Take a look at the paper:  High Performance RDMA-Based MPI  
<br>
Implementations over Infiniband by Jiuxing Liu,
<br>
Also try compiling mvapich without: -D RDMA_FAST_PATH, I am pretty sure  
<br>
this is the flag that tells mvapich to compile with small message RDMA.  
<br>
Removing this flag will force mvapich to use send/recv
<br>
<p><p><span class="quotelev1">&gt; 2 - I do not see that there is any raw performance benefit in insisting
</span><br>
<span class="quotelev1">&gt; on doing rdma for small messages anyway, so it does not seem to be a
</span><br>
<span class="quotelev1">&gt; tradeoff between scalability and optimal latency. In fact, if I force
</span><br>
<span class="quotelev1">&gt; ompi or mvapich to go rdma for smaller messages (at least as far as it
</span><br>
<span class="quotelev1">&gt; seems it will go) the latency for these sizes will actually go up,  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; does not hurt my intuition. In mvapich I saw an incompressible 13 us
</span><br>
<span class="quotelev1">&gt; penalty for doing RDMA.
</span><br>
<p>What you are seeing is a general RDMA protocol which requires that the  
<br>
initiator obtain the targets memory address and r-key prior to the rdma  
<br>
operation, additionally the initiator must inform the target of  
<br>
completion of the RDMA operation. This requires the overhead of control  
<br>
messages using either send/receive or small message RDMA.
<br>
<p><p><p><span class="quotelev1">&gt; So far, the best latency I got from ompi is 5.24 us, and the best I  
</span><br>
<span class="quotelev1">&gt; got from mvapich is 3.15.
</span><br>
<span class="quotelev1">&gt; I am perfectly ready to accept that ompi scales better and that may be
</span><br>
<span class="quotelev1">&gt; more important (except to the marketing dept :-) ), but I do not
</span><br>
<span class="quotelev1">&gt; understand your explanation based on small-message RDMA. Either I
</span><br>
<span class="quotelev1">&gt; missunderstood something badly (my best guess), or the 2 us are lost to
</span><br>
<span class="quotelev1">&gt; something else than an RDMA-size tradeoff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Again this is small message RDMA with polling versus send/receive  
<br>
semantics, we will be adding small message RDMA and should have  
<br>
performance equal to that of mvapich for small messages, but it is only  
<br>
relevant for a small working set of peers / micro benchmarks.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Brian Barrett: "Re: [O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>Maybe in reply to:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
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
