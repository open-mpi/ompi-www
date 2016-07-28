<?
$subject_val = "Re: [OMPI users] Intra-node communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 10:52:25 2012" -->
<!-- isoreceived="20120601145225" -->
<!-- sent="Fri, 1 Jun 2012 10:52:19 -0400" -->
<!-- isosent="20120601145219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intra-node communication" -->
<!-- id="E8873450-2B13-44EC-B6C5-2F09562E7334_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E78C4A1-06BC-4460-9715-7D7BEB89F2D4_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intra-node communication<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 10:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19420.php">Mudassar Majeed: "[OMPI users] Fw:  Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19418.php">Jingcha Joba: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19418.php">Jingcha Joba: "Re: [OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Reply:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...and exactly how you measured.  You might want to run a well-known benchmark, like NetPIPE or the OSU pt2pt benchmarks.
<br>
<p>Note that the *first* send between any given peer pair is likely to be slow because OMPI does a lazy connection scheme (i.e., the connection is made behind the scenes).  Subsequent sends are likely faster.  Well-known benchmarks do a bunch of warmup sends and then start timing after those are all done.
<br>
<p>Also ensure that you have shared memory support enabled.  It is likely to be enabled by default, but if you're seeing different performance than you expect, that's something to check.
<br>
<p><p>On Jun 1, 2012, at 10:44 AM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; This should not happen. Typically, Intra node communication latency are way way cheaper than inter node.
</span><br>
<span class="quotelev1">&gt; Can you please tell us how u ran your application ?
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2012, at 7:34 AM, Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear MPI people, 
</span><br>
<span class="quotelev2">&gt;&gt;                                Can someone tell me why MPI_Ssend takes more time when two MPI processes are on same node ...... ?? the same two processes on different nodes take much less time for the same message exchange. I am using a supercomputing center and this happens. I was writing an algorithm to reduce the across node communication. But now I found that across node communication is cheaper than communication within a node (with 8 cores on each node).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; best regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mudassar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19420.php">Mudassar Majeed: "[OMPI users] Fw:  Intra-node communication"</a>
<li><strong>Previous message:</strong> <a href="19418.php">Jingcha Joba: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19418.php">Jingcha Joba: "Re: [OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Reply:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
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
