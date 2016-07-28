<?
$subject_val = "Re: [OMPI devel] Change in btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 09:04:37 2008" -->
<!-- isoreceived="20080421130437" -->
<!-- sent="Mon, 21 Apr 2008 09:04:28 -0400" -->
<!-- isosent="20080421130428" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in btl/tcp" -->
<!-- id="DBAA25D0-3B9B-4BD1-8DF8-186BEAD7B703_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4808E7C2.6090904_at_cs.indiana.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 09:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3723.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3723.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>Has there been any progress on this bug? If you still cannot reproduce  
<br>
it, if you send either Tim Prins or I a debugging patch we can run  
<br>
with it. Or we can try to arrange access to one of our machines for you.
<br>
<p>This bug is making it difficult for us to continue working off of the  
<br>
trunk since we get these connection errors so frequently.
<br>
<p>-- Josh
<br>
<p>On Apr 18, 2008, at 2:26 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; To echo what Josh said, there are no special compile flags being used.
</span><br>
<span class="quotelev1">&gt; If you send me a patch with debug output, I'd be happy to run it for  
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both odin and sif are fairly normal linux based clusters, with  
</span><br>
<span class="quotelev1">&gt; ethernet
</span><br>
<span class="quotelev1">&gt; and openib IP networks. The ethernet network has both ipv4 &amp; ipv6, and
</span><br>
<span class="quotelev1">&gt; the openib network runs ipv4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adrian Knoth wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 18, 2008 at 01:00:40PM -0400, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The trick is to force Open MPI to use only tcp,self and nothing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you try adding this (-mca btl tcp,self) to the runtime parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure. Even with 64 processes, I cannot trigger this behaviour.  
</span><br>
<span class="quotelev2">&gt;&gt; Neither
</span><br>
<span class="quotelev2">&gt;&gt; on Linux nor Solaris.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any special compile flags?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess a little bit more debug output could probably reveal the
</span><br>
<span class="quotelev2">&gt;&gt; culprit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="3723.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="3723.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3725.php">Adrian Knoth: "Re: [OMPI devel] Change in btl/tcp"</a>
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
