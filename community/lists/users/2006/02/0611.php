<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 20:20:40 2006" -->
<!-- isoreceived="20060209012040" -->
<!-- sent="Wed, 8 Feb 2006 18:20:37 -0700 (MST)" -->
<!-- isosent="20060209012037" -->
<!-- name="Timothy S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="24843.128.165.0.81.1139448037.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1139443588.1494.178.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Timothy S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 20:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; For Heroic latencies on IB we would need to use small message RDMA and
</span><br>
<span class="quotelev2">&gt;&gt; poll each peers dedicated memory region for completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I tried to play around with the eager_limit, min_rdma, etc. I did
</span><br>
<span class="quotelev1">&gt; not see the latency of messages of a given size be lowered by changing
</span><br>
<span class="quotelev1">&gt; the tresholds to make them rdma'd. Rather the opposite (which was my
</span><br>
<span class="quotelev1">&gt; initial expectation, actually). May be I just misunderstood the whole
</span><br>
<span class="quotelev1">&gt; set of tunables. My understanding was that messages under the eager
</span><br>
<span class="quotelev1">&gt; limit would never be rdma'd by definition, and that the others would or
</span><br>
<span class="quotelev1">&gt; would not be, depending on the min_rdma_size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The current code always uses send/recv semantics for short/eager messages.
<br>
As Galen indicated, we will be adding support for short message rdma write,
<br>
but this is generally not scalable, and would only be viable for a small
<br>
working set of peers.
<br>
<p>Regards,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0610.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
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
