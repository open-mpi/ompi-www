<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 16:10:58 2006" -->
<!-- isoreceived="20060209211058" -->
<!-- sent="Thu, 9 Feb 2006 14:05:07 -0700" -->
<!-- isosent="20060209210507" -->
<!-- name="Ron Brightwell" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="20060209210507.GH25930_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1139516646.1494.216.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Ron Brightwell (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 16:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;From an adoption perspective, though, the ability to shine in
</span><br>
<span class="quotelev1">&gt; micro-benchmarks is important, even if it means using an ad-hoc tuning.
</span><br>
<span class="quotelev1">&gt; There is some justification for it after all. There are small clusters
</span><br>
<span class="quotelev1">&gt; out there (many more than big ones, in fact) so taking maximum advantage
</span><br>
<span class="quotelev1">&gt; of a small scale is relevant.
</span><br>
<p>I'm obliged to point out that you jumped to a conclusion -- possibly true
<br>
in some cases, but not always.
<br>
<p>You assumed that a performance increase for a two-node micro-benchmark
<br>
would result in an application performance increase for a small cluster.
<br>
Using RDMA for short messages is the default on small clusters *because*
<br>
of the two-node micro-benchmark, not because the cluster is small.
<br>
<p>I've seen plenty of cases where doing the scalable thing, rather than the
<br>
optimized for micro-benchmarks thing, leads to increases in application
<br>
performance even at a small scale.
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
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
