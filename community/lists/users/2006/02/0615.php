<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 15:25:14 2006" -->
<!-- isoreceived="20060209202514" -->
<!-- sent="Thu, 09 Feb 2006 12:24:05 -0800" -->
<!-- isosent="20060209202405" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="1139516646.1494.216.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="5914b57a293a302b0bb402b215d2978c_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 15:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So far, the best latency I got from ompi is 5.24 us, and the best I  
</span><br>
<span class="quotelev2">&gt; &gt; got from mvapich is 3.15.
</span><br>
<span class="quotelev2">&gt; &gt; I am perfectly ready to accept that ompi scales better and that may be
</span><br>
<span class="quotelev2">&gt; &gt; more important (except to the marketing dept :-) ), but I do not
</span><br>
<span class="quotelev2">&gt; &gt; understand your explanation based on small-message RDMA. Either I
</span><br>
<span class="quotelev2">&gt; &gt; missunderstood something badly (my best guess), or the 2 us are lost to
</span><br>
<span class="quotelev2">&gt; &gt; something else than an RDMA-size tradeoff.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Again this is small message RDMA with polling versus send/receive  
</span><br>
<span class="quotelev1">&gt; semantics, we will be adding small message RDMA and should have  
</span><br>
<span class="quotelev1">&gt; performance equal to that of mvapich for small messages, but it is only  
</span><br>
<span class="quotelev1">&gt; relevant for a small working set of peers / micro benchmarks.
</span><br>
<p>Thanks a lot. I was being fooled by various levels of size thresholds in
<br>
the mvapich code. It was indeed doing rdma for small messages. After
<br>
turning that off, I get numbers comparable to yours. Well, mvapich still
<br>
beats ompi by a hair on my configuration.  5.11 vs. 5.25 but that's in
<br>
the near-irrelevant range compared to other benefits.
<br>
<p><span class="quotelev1">&gt;From an adoption perspective, though, the ability to shine in
</span><br>
micro-benchmarks is important, even if it means using an ad-hoc tuning.
<br>
There is some justification for it after all. There are small clusters
<br>
out there (many more than big ones, in fact) so taking maximum advantage
<br>
of a small scale is relevant.
<br>
<p>When do you plan on having the small-msg rdma option available ?
<br>
<p>J-C
<br>
<p><p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
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
