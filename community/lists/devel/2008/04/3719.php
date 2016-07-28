<?
$subject_val = "Re: [OMPI devel] Change in btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 08:04:25 2008" -->
<!-- isoreceived="20080418120425" -->
<!-- sent="Fri, 18 Apr 2008 08:04:17 -0400" -->
<!-- isosent="20080418120417" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in btl/tcp" -->
<!-- id="48088E41.2070404_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080416113919.GS15077_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in btl/tcp<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-18 08:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<li><strong>In reply to:</strong> <a href="3711.php">Adrian Knoth: "[OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian,
<br>
<p>After this change, I am getting a lot of errors of the form:
<br>
[sif2][[12854,1],9][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by
<br>
peer (104)
<br>
<p>See for instance: <a href="http://www.open-mpi.org/mtt/index.php?do_redir=615">http://www.open-mpi.org/mtt/index.php?do_redir=615</a>
<br>
<p>I have found this especially easy to reproduce if I run 16 processes all 
<br>
with just the tcp and self btls on the same machine, running the 
<br>
'hello_c' program in the examples directory.
<br>
<p>Tim
<br>
<p><p>Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As of r18169, I've changed the acceptance rules for incoming BTL-TCP
</span><br>
<span class="quotelev1">&gt; connections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The old code would have denied a connection in case of non-matching
</span><br>
<span class="quotelev1">&gt; addresses (comparison between source address and expected source
</span><br>
<span class="quotelev1">&gt; address).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, you cannot always say which source address an incoming
</span><br>
<span class="quotelev1">&gt; packet will have (it's the sender's kernel who decides), so rejecting a
</span><br>
<span class="quotelev1">&gt; connection due to &quot;wrong&quot; source address caused a complete hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had several cases, mostly multi-cluster setups, where this has happend
</span><br>
<span class="quotelev1">&gt; all the time. (typical scenario: you're expecting the headnode's
</span><br>
<span class="quotelev1">&gt; internal address, but since you're talking to another cluster,
</span><br>
<span class="quotelev1">&gt; the kernel uses the headnode's external address)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though I've tested it as much as possible, I don't know if it breaks
</span><br>
<span class="quotelev1">&gt; your setup, especially the multi-rail stuff. George?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheerio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<li><strong>In reply to:</strong> <a href="3711.php">Adrian Knoth: "[OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3720.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
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
