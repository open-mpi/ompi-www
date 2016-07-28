<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 10:11:23 2010" -->
<!-- isoreceived="20100811141123" -->
<!-- sent="Wed, 11 Aug 2010 10:12:36 -0400" -->
<!-- isosent="20100811141236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="92634529-FFD1-41A5-ADAE-1C57249D79BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="347514.18421.qm_at_web50807.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 10:12:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13968.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 11, 2010, at 12:10 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Sure, but broadcasts are faster - less reliable apparently, but much faster for large clusters.  
</span><br>
<p>Just to be totally clear: MPI_BCAST is defined to be &quot;reliable&quot;, in the sense that it will complete or invoke an error (vs. unreliable data streams like UDP where sending a packet may or may not arrive at the receiver).  
<br>
<p>I think you're saying that something in your setup does not appear to be functioning properly -- possibly an OMPI bug, possibly TCP timeouts, possibly incorrect use of MPI, possibly ...etc.  But I just wanted to disambiguate the meaning of the word &quot;reliable&quot; here.
<br>
<p><span class="quotelev1">&gt; Jeff says that all OpenMPI calls are implemented with point to point B-tree style communications of log N transmissions
</span><br>
<p>Just to clarify so that I'm not mis-quoted, I said: &quot;All of Open MPI's network-based collectives use point-to-point communications underneath (shared memory may not, but that's not the issue here)&quot;.  
<br>
<p>1. &quot;Collectives&quot; means a very different thing than &quot;all Open MPI calls&quot;.
<br>
2. Some of our algorithms are not based on binary (or binomial -- it's not clear what you meant) trees.
<br>
<p>Sorry to be so pedantic -- but mis-quotes like this have been the source of huge misunderstandings in the past.
<br>
<p>It is also worth noting that Open MPI's collectives are implemented with plugins -- there's nothing preventing a new plugin that does *not* use point-to-point communication calls (like the shared memory collective implementations, or multicast, or some other kind of hardware collective offload, or ...).
<br>
<p>Indeed, I should point out that my statement was not entirely correct because Voltaire just recently committed the &quot;fca&quot; plugin to the OMPI development trunk (to be introduced in OMPI v1.5) that uses IB hardware offloading for MPI collective implementations -- see their press releases and marketing material for how this stuff works.  Mellanox has slightly different MPI collective IB hardware offloading technology for Open MPI, too.
<br>
<p><span class="quotelev1">&gt; So I guess that altoall would be N log N
</span><br>
<p>I'm not sure of the complexity of OMPI's alltoall algorithms offhand.  I see at least 3 algorithms after *quick* look in the OMPI source code.  They probably all have their own complexities, but need to be viewed in the context of when those algorithms allow themselves to be used (e.g., O(N) may not matter if there's a small number of peers with small messages).
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
<li><strong>Next message:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13968.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
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
