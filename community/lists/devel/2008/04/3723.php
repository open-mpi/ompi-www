<?
$subject_val = "Re: [OMPI devel] Change in btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 14:26:10 2008" -->
<!-- isoreceived="20080418182610" -->
<!-- sent="Fri, 18 Apr 2008 14:26:10 -0400" -->
<!-- isosent="20080418182610" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in btl/tcp" -->
<!-- id="4808E7C2.6090904_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080418172501.GM15077_at_ltw.loris.tv" -->
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
<strong>Date:</strong> 2008-04-18 14:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3724.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3724.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3724.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To echo what Josh said, there are no special compile flags being used. 
<br>
If you send me a patch with debug output, I'd be happy to run it for you.
<br>
<p>Both odin and sif are fairly normal linux based clusters, with ethernet 
<br>
and openib IP networks. The ethernet network has both ipv4 &amp; ipv6, and 
<br>
the openib network runs ipv4.
<br>
<p>Tim
<br>
<p>Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Fri, Apr 18, 2008 at 01:00:40PM -0400, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The trick is to force Open MPI to use only tcp,self and nothing else.  
</span><br>
<span class="quotelev2">&gt;&gt; Did you try adding this (-mca btl tcp,self) to the runtime parameter  
</span><br>
<span class="quotelev2">&gt;&gt; set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure. Even with 64 processes, I cannot trigger this behaviour. Neither
</span><br>
<span class="quotelev1">&gt; on Linux nor Solaris.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any special compile flags?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess a little bit more debug output could probably reveal the
</span><br>
<span class="quotelev1">&gt; culprit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3724.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3722.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3724.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3724.php">Josh Hursey: "Re: [OMPI devel] Change in btl/tcp"</a>
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
