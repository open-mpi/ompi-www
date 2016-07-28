<?
$subject_val = "Re: [OMPI users] Intra-node communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 12:12:17 2012" -->
<!-- isoreceived="20120601161217" -->
<!-- sent="Fri, 1 Jun 2012 12:12:12 -0400" -->
<!-- isosent="20120601161212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intra-node communication" -->
<!-- id="294D5051-6143-484A-847C-CCCE7D52B24B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1338567032.40631.YahooMailNeo_at_web121705.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2012-06-01 12:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
NetPIPE is a 2 process, pt2pt benchmark.
<br>
<p>Run it with 2 processes both on one node, and then 2 processes with each on different nodes.
<br>
<p><p>On Jun 1, 2012, at 12:10 PM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff, 
</span><br>
<span class="quotelev1">&gt;                  Can you suggest me a quick guide that can help me testing specifically  the across and within node communication. I have some submission today so have no time for googling. If the benchmark tells me the right thing then I will do something accordingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Cc: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 1, 2012 4:52 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Intra-node communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...and exactly how you measured.  You might want to run a well-known benchmark, like NetPIPE or the OSU pt2pt benchmarks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the *first* send between any given peer pair is likely to be slow because OMPI does a lazy connection scheme (i.e., the connection is made behind the scenes).  Subsequent sends are likely faster.  Well-known benchmarks do a bunch of warmup sends and then start timing after those are all done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also ensure that you have shared memory support enabled.  It is likely to be enabled by default, but if you're seeing different performance than you expect, that's something to check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2012, at 10:44 AM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This should not happen. Typically, Intra node communication latency are way way cheaper than inter node.
</span><br>
<span class="quotelev2">&gt; &gt; Can you please tell us how u ran your application ?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my iPhone
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 1, 2012, at 7:34 AM, Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear MPI people, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                Can someone tell me why MPI_Ssend takes more time when two MPI processes are on same node ...... ?? the same two processes on different nodes take much less time for the same message exchange. I am using a supercomputing center and this happens. I was writing an algorithm to reduce the across node communication. But now I found that across node communication is cheaper than communication within a node (with 8 cores on each node).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mudassar
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>In reply to:</strong> <a href="19423.php">Mudassar Majeed: "Re: [OMPI users] Intra-node communication"</a>
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
