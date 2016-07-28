<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:38:04 2009" -->
<!-- isoreceived="20090330173804" -->
<!-- sent="Mon, 30 Mar 2009 13:37:59 -0400" -->
<!-- isosent="20090330173759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="E7960768-00B8-4B5F-AB94-EAC6B73DF286_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F443DB7B-75AE-47CE-8095-D04580D9FBC8_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-30 13:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2009, at 1:24 PM, Iain Bason wrote:
<br>
<p><span class="quotelev2">&gt; &gt; But don't we need the whole area to be zero filled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will be zero-filled on demand using the lseek/touch method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; However, the OS may not reserve space for the skipped pages or disk
</span><br>
<span class="quotelev1">&gt; blocks.  Thus one could still get out of memory or file system full
</span><br>
<span class="quotelev1">&gt; errors at arbitrary points.  Presumably one could also get segfaults
</span><br>
<span class="quotelev1">&gt; from an mmap'ed segment whose pages couldn't be allocated when the
</span><br>
<span class="quotelev1">&gt; demand came.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Should we touch every page at init, then?  (I think someone else --  
<br>
Eugene? -- mentioned that already during this thread)  FWIW, it would  
<br>
be better to die during init then at some random point during  
<br>
execution later...
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
<li><strong>Next message:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
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
