<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 17:04:21 2006" -->
<!-- isoreceived="20060209220421" -->
<!-- sent="Thu, 09 Feb 2006 14:03:09 -0800" -->
<!-- isosent="20060209220309" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="1139522589.1494.239.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="20060209210507.GH25930_at_ratbert.sandia.gov" -->
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
<strong>Date:</strong> 2006-02-09 17:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0619.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-02-09 at 14:05 -0700, Ron Brightwell wrote:
<br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;From an adoption perspective, though, the ability to shine in
</span><br>
<span class="quotelev2">&gt; &gt; micro-benchmarks is important, even if it means using an ad-hoc tuning.
</span><br>
<span class="quotelev2">&gt; &gt; There is some justification for it after all. There are small clusters
</span><br>
<span class="quotelev2">&gt; &gt; out there (many more than big ones, in fact) so taking maximum advantage
</span><br>
<span class="quotelev2">&gt; &gt; of a small scale is relevant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm obliged to point out that you jumped to a conclusion -- possibly true
</span><br>
<span class="quotelev1">&gt; in some cases, but not always.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You assumed that a performance increase for a two-node micro-benchmark
</span><br>
<span class="quotelev1">&gt; would result in an application performance increase for a small cluster.
</span><br>
<span class="quotelev1">&gt; Using RDMA for short messages is the default on small clusters *because*
</span><br>
<span class="quotelev1">&gt; of the two-node micro-benchmark, not because the cluster is small.
</span><br>
<p>No, I assumed it based on comparisions between doing and not doing small
<br>
msg rdma at various scales, from a paper Galen pointed out to me.
<br>
<a href="http://www.cs.unm.edu/~treport/tr/05-10/Infiniband.pdf">http://www.cs.unm.edu/~treport/tr/05-10/Infiniband.pdf</a>
<br>
<p>Benchmarks are what they are. In the above paper, the tests place the
<br>
cross-over at around 64 nodes and that confirms a number of anecdotal
<br>
reports I got. It may well be that in some situations, small-msg rdma is
<br>
better only for 2 nodes, but that's note such a likely scenario; reality
<br>
is sometimes linear (at least at our scale :-) ) after all.
<br>
<p>The scale threshold could be tunable, couldnt it ?
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0619.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0616.php">Ron Brightwell: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0619.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
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
