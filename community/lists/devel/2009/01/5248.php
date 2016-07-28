<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 20:57:00 2009" -->
<!-- isoreceived="20090121015700" -->
<!-- sent="Tue, 20 Jan 2009 20:56:53 -0500" -->
<!-- isosent="20090121015653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="6E97C2F1-21DF-4BC9-898C-45C9AB652B7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BC114694-0633-4840-8651-9E211A75A679_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 20:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 20, 2009, at 8:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This all sounds really great to me.  I agree with most of what has  
</span><br>
<span class="quotelev1">&gt; been said -- e.g., benchmarks *are* important.  Improving them can  
</span><br>
<span class="quotelev1">&gt; even sometimes have the side effect of improving real  
</span><br>
<span class="quotelev1">&gt; applications.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My one big concern is the moving of architectural boundaries of  
</span><br>
<span class="quotelev1">&gt; making the btl understand MPI match headers.  But even there, I'm  
</span><br>
<span class="quotelev1">&gt; torn:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I understand why it is better -- performance-wise -- to do this.   
</span><br>
<span class="quotelev1">&gt; And the performance improvement results are hard to argue with.  We  
</span><br>
<span class="quotelev1">&gt; took a similar approach with ORTE; ORTE is now OMPI-specific, and  
</span><br>
<span class="quotelev1">&gt; many, many things have become better (from the OMPI perspective, at  
</span><br>
<span class="quotelev1">&gt; least).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We all have the knee-jerk reaction that we don't want to have the  
</span><br>
<span class="quotelev1">&gt; BTLs know anything about MPI semantics because they've always been  
</span><br>
<span class="quotelev1">&gt; that way and it has been a useful abstraction barrier.  Now there's  
</span><br>
<span class="quotelev1">&gt; even a project afoot to move the BTLs out into a separate later that  
</span><br>
<span class="quotelev1">&gt; cannot know about MPI (so that other things can be built upon it).   
</span><br>
<span class="quotelev1">&gt; But are we sacrificing potential MPI performance here?  I think  
</span><br>
<span class="quotelev1">&gt; that's one important question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene: you mentioned that there are other possibilities to having  
</span><br>
<span class="quotelev1">&gt; the BTL understand match headers, such as a callback into the PML.   
</span><br>
<span class="quotelev1">&gt; Have you tried this approach to see what the performance cost would  
</span><br>
<span class="quotelev1">&gt; be, perchance?
</span><br>
<p>I neglected to say: the point of asking this question is an attempt to  
<br>
quantify the performance gain of having the BTL understand the match  
<br>
header.  Specifically: is it a noticeable/important performance gain  
<br>
to have change our age-old abstraction barrier?  Or is another  
<br>
approach just as good, performance-wise?
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
<li><strong>Next message:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
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
