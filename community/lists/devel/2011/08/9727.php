<?
$subject_val = "Re: [OMPI devel] TIPC BTL code ready for review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 11:50:28 2011" -->
<!-- isoreceived="20110830155028" -->
<!-- sent="Tue, 30 Aug 2011 11:50:24 -0400" -->
<!-- isosent="20110830155024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TIPC BTL code ready for review" -->
<!-- id="D986A729-F6E5-4938-9A65-E9746CCFBB3C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E5B44FF.4080503_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TIPC BTL code ready for review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 11:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9728.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9740.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9740.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2011, at 3:51 AM, Xin He wrote:
<br>
<p><span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 hostname
</span><br>
<span class="quotelev2">&gt;&gt; svbu-mpi008
</span><br>
<span class="quotelev2">&gt;&gt; svbu-mpi009
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun --mca btl tcp,self --bynode -np 2 --mca btl_tcp_if_include eth0 IMB-MPI1 PingPong
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #    Intel (R) MPI Benchmark Suite V3.2, MPI-1 part
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, I think these models are reasonably new :)
</span><br>
<span class="quotelev1">&gt; The result I gave you, they are tested on 2 processes but on 2 different servers. I get that the result you showed is 2 processes on one machine?
</span><br>
<p>Nope -- check my output -- I'm running across 2 different servers and through a 1GB TOR ethernet switch (it's not a particularly high-performance ethernet switch, either).
<br>
<p>Can you run some native netpipe TCP numbers across the same nodes that you ran the TIPC MPI tests over?  You should be getting lower latency than what you're seeing.
<br>
<p>Do you have jumbo frames enabled, perchance?  Are you going through only 1 switch?  If you're on a NUMA server, do you have processor affinity enabled, and have the processes located &quot;near&quot; the NIC?
<br>
<p><span class="quotelev1">&gt; BTW, I forgot to tell you about SM &amp; TIPC. Unfortunately, TIPC does not beat SM...
</span><br>
<p>That's probably not surprising; SM is tuned pretty well specifically for MPI communication across shared memory.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9728.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9708.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9740.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9740.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
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
