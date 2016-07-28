<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 19:01:58 2009" -->
<!-- isoreceived="20090330230158" -->
<!-- sent="Mon, 30 Mar 2009 15:01:33 -0800" -->
<!-- isosent="20090330230133" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D14F4D.8070602_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F6903E7B-4F61-4C9F-B7C7-F768A4E613CD_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 19:01:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5759.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 30, 2009, at 1:40 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; we will have to  find a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pretty smart way to do this or we will completely break the memory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; affinity stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't look at the code, but I sure hope that the SM init code does
</span><br>
<span class="quotelev2">&gt;&gt; touch each page to force allocation, otherwise there is no memory
</span><br>
<span class="quotelev2">&gt;&gt; affinity stuff at all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not?  The &quot;owning&quot; process can do the touch; then it'll be  
</span><br>
<span class="quotelev1">&gt; affinity'ed properly.  Right?
</span><br>
<p>So far as I can tell, the code has two mechanisms for memory placement.  
<br>
One is to create a different mpool for each affinity pool.  The second 
<br>
is to have the correct owner perform the first touch.  (It's not clear 
<br>
to me that the first mechanism is working, makes sense, is necessary, 
<br>
etc.  I just don't know.)  Anyhow, we do indeed want proper first touch 
<br>
and the code seems to respect that.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5759.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
