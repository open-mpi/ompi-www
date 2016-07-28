<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 17:15:38 2006" -->
<!-- isoreceived="20060209221538" -->
<!-- sent="Thu, 9 Feb 2006 15:15:34 -0700" -->
<!-- isosent="20060209221534" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="f8b27eceb4028f09b7ed01a1e2748326_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1139522589.1494.239.camel_at_jhugly.pantasys.com" -->
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
<strong>Date:</strong> 2006-02-09 17:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">Aniruddha Shet: "[O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2006, at 3:03 PM, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2006-02-09 at 14:05 -0700, Ron Brightwell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From an adoption perspective, though, the ability to shine in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; micro-benchmarks is important, even if it means using an ad-hoc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tuning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is some justification for it after all. There are small 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clusters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out there (many more than big ones, in fact) so taking maximum 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advantage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of a small scale is relevant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm obliged to point out that you jumped to a conclusion -- possibly 
</span><br>
<span class="quotelev2">&gt;&gt; true
</span><br>
<span class="quotelev2">&gt;&gt; in some cases, but not always.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You assumed that a performance increase for a two-node micro-benchmark
</span><br>
<span class="quotelev2">&gt;&gt; would result in an application performance increase for a small 
</span><br>
<span class="quotelev2">&gt;&gt; cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Using RDMA for short messages is the default on small clusters 
</span><br>
<span class="quotelev2">&gt;&gt; *because*
</span><br>
<span class="quotelev2">&gt;&gt; of the two-node micro-benchmark, not because the cluster is small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I assumed it based on comparisions between doing and not doing 
</span><br>
<span class="quotelev1">&gt; small
</span><br>
<span class="quotelev1">&gt; msg rdma at various scales, from a paper Galen pointed out to me.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.unm.edu/~treport/tr/05-10/Infiniband.pdf">http://www.cs.unm.edu/~treport/tr/05-10/Infiniband.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hmm, this is not what I would conclude from my results, in fact if you 
<br>
look at the NPB results in my paper you will see that Open MPI 
<br>
outperforms in the CG and FT benchmarks at both 32 and 64 nodes without 
<br>
SRQ. The crossover point you are referring to must be the pairwise 
<br>
ping-pong benchmark. So I would have to conclude that it is totally 
<br>
application dependent.
<br>
<p>- Galen
<br>
<p><p><p><span class="quotelev1">&gt; Benchmarks are what they are. In the above paper, the tests place the
</span><br>
<span class="quotelev1">&gt; cross-over at around 64 nodes and that confirms a number of anecdotal
</span><br>
<span class="quotelev1">&gt; reports I got. It may well be that in some situations, small-msg rdma 
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; better only for 2 nodes, but that's note such a likely scenario; 
</span><br>
<span class="quotelev1">&gt; reality
</span><br>
<span class="quotelev1">&gt; is sometimes linear (at least at our scale :-) ) after all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The scale threshold could be tunable, couldnt it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PANTA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">Aniruddha Shet: "[O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0621.php">Brightwell, Ronald: "Re: [O-MPI users] direct openib btl and latency"</a>
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
