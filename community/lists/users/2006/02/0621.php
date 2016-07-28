<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 18:43:32 2006" -->
<!-- isoreceived="20060209234332" -->
<!-- sent="Thu, 9 Feb 2006 16:37:11 -0700" -->
<!-- isosent="20060209233711" -->
<!-- name="Brightwell, Ronald" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="20060209233711.GK25930_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Brightwell, Ronald (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 18:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">James Conway: "[O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Aniruddha Shet: "[O-MPI users] Job fails with mpiP"</a>
<li><strong>In reply to:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I assumed it based on comparisions between doing and not doing small
</span><br>
<span class="quotelev1">&gt; msg rdma at various scales, from a paper Galen pointed out to me.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.unm.edu/~treport/tr/05-10/Infiniband.pdf">http://www.cs.unm.edu/~treport/tr/05-10/Infiniband.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Actually, I wasn't so much concerned with how you jumped to your conclusion.
<br>
I just wanted to point out that you did.  Most people who focus on ping-pong
<br>
latency like you have don't realize that they're jumping to a conclusion.
<br>
You suggested that optimizing for a latency micro-benchmark would benefit
<br>
small clusters, and that's just not (uniformly) true.
<br>
<p><span class="quotelev1">&gt; Benchmarks are what they are. In the above paper, the tests place the
</span><br>
<span class="quotelev1">&gt; cross-over at around 64 nodes and that confirms a number of anecdotal
</span><br>
<span class="quotelev1">&gt; reports I got. It may well be that in some situations, small-msg rdma is
</span><br>
<span class="quotelev1">&gt; better only for 2 nodes, but that's note such a likely scenario; reality
</span><br>
<span class="quotelev1">&gt; is sometimes linear (at least at our scale :-) ) after all.
</span><br>
<p>Indeed.
<br>
<p>Well, if you didn't like me pointing out that jump, then I'll try a different
<br>
one.  It's fairly straightforward to correlate the latency performance of
<br>
the micro-benchmark directly to RDMA versus send/recv.  You can't really
<br>
do the same for the NPB results, since things like collective communication
<br>
performance can play a big part.  So, assuming that RDMA is the reason that
<br>
MVAPICH wins where it does may not hold.
<br>
<p>I apologize if it seems like I'm picking on you.  I'm hypersensitive to
<br>
people trying to make judgements based on micro-benchmark performance.
<br>
I've been trying to make an argument that two-node ping-pong latency
<br>
comparisons really only have meaning in the context of a whole system.
<br>
The answer to the question of why the latency performance of my 10,000-node
<br>
machine is worse than someone else's 128-node cluster has alot to do with
<br>
meeting the scaling requirements of a 10,000-node machine. (To some extent
<br>
it has to do with the vendor as well, but that's a different story...)
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0622.php">James Conway: "[O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0620.php">Aniruddha Shet: "[O-MPI users] Job fails with mpiP"</a>
<li><strong>In reply to:</strong> <a href="0618.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
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
