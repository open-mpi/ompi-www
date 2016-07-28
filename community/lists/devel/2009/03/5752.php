<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:49:40 2009" -->
<!-- isoreceived="20090330174940" -->
<!-- sent="Mon, 30 Mar 2009 13:49:36 -0400" -->
<!-- isosent="20090330174936" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="F6903E7B-4F61-4C9F-B7C7-F768A4E613CD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D10428.8040303_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:49:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2009, at 1:40 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev2">&gt; &gt; performance hit on the startup time. And second, we will have to  
</span><br>
<span class="quotelev1">&gt; find a
</span><br>
<span class="quotelev2">&gt; &gt; pretty smart way to do this or we will completely break the memory
</span><br>
<span class="quotelev2">&gt; &gt; affinity stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't look at the code, but I sure hope that the SM init code does
</span><br>
<span class="quotelev1">&gt; touch each page to force allocation, otherwise there is no memory
</span><br>
<span class="quotelev1">&gt; affinity stuff at all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Why not?  The &quot;owning&quot; process can do the touch; then it'll be  
<br>
affinity'ed properly.  Right?
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
<li><strong>Next message:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5755.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
