<?
$subject_val = "Re: [OMPI devel] allocating sm memory with page alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 30 10:45:42 2008" -->
<!-- isoreceived="20080830144542" -->
<!-- sent="Sat, 30 Aug 2008 07:42:48 -0700" -->
<!-- isosent="20080830144248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] allocating sm memory with page alignment" -->
<!-- id="AEB3E04D-B98A-4772-9A9E-914944FBD416_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48B899BA.7040704_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] allocating sm memory with page alignment<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-30 10:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4623.php">Graham, Richard L.: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2008, at 5:52 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm looking at the sm BTL.
</span><br>
<p>Excellent!  I hope you had a good dash of parmesan with that spaghetti  
<br>
code in there (the sm btl is among the hairiest sections in  
<br>
OMPI...).  :-)
<br>
<p><span class="quotelev1">&gt; In mca_btl_sm_add_procs(), there's a loop over peer processes, with  
</span><br>
<span class="quotelev1">&gt; a call to ompi_fifo_init().  That is, one call to ompi_fifo_init()  
</span><br>
<span class="quotelev1">&gt; for each connection
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; on page boundaries.
</span><br>
<p>I *believe* your analysis is correct.  It's been a while since I've  
<br>
looked in detail in that section of code, but what you say sounds  
<br>
reasonable.
<br>
<p><span class="quotelev1">&gt; As the number of local processes increases, therefore these per- 
</span><br>
<span class="quotelev1">&gt; connection allocations become very costly.  For 8K pages, for  
</span><br>
<span class="quotelev1">&gt; example, and 100 on-node processes, we're talking 3*100*100*8K = 240  
</span><br>
<span class="quotelev1">&gt; Mbytes.  For 512 on-node processes (yes, we have nodes this big),  
</span><br>
<span class="quotelev1">&gt; that's 6 Gbyte... most of which is unused.  (E.g., allocating more  
</span><br>
<span class="quotelev1">&gt; than an 8K page when we only need 64 or 12 bytes.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, long intro.  Let me start with a short question:  do we really  
</span><br>
<span class="quotelev1">&gt; need page alignment for these allocations?  Would cacheline  
</span><br>
<span class="quotelev1">&gt; alignment be okay?
</span><br>
<p>I believe the main rationale for doing page-line alignments was for  
<br>
memory affinity, since (at least on Linux, I don't know about solaris)  
<br>
you can only affinity-ize pages.
<br>
<p>On your big 512 proc machines, I'm assuming that the page memory  
<br>
affinity will matter...?
<br>
<p>That being said, we're certainly open to making things better.  E.g.,  
<br>
if a few procs share a memory locality (can you detect that in  
<br>
Solaris?), have them share a page or somesuch...?  (totally open to  
<br>
ideas here)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4623.php">Graham, Richard L.: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Previous message:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>In reply to:</strong> <a href="4621.php">Eugene Loh: "[OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<li><strong>Reply:</strong> <a href="4624.php">Eugene Loh: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
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
