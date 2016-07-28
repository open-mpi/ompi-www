<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:34:38 2009" -->
<!-- isoreceived="20090330173438" -->
<!-- sent="Mon, 30 Mar 2009 13:34:29 -0400" -->
<!-- isosent="20090330173429" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="FBA0BBD9-580A-4B02-A70F-8EE675A77FB1_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then it looks like the safest solution is the use either ftruncate or  
<br>
the lseek method and then touch the first byte of all memory pages.  
<br>
Unfortunately, I see two problems with this. First, there is a clear  
<br>
performance hit on the startup time. And second, we will have to find  
<br>
a pretty smart way to do this or we will completely break the memory  
<br>
affinity stuff.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 30, 2009, at 13:24 , Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2009, at 12:05 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But don't we need the whole area to be zero filled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will be zero-filled on demand using the lseek/touch method.   
</span><br>
<span class="quotelev1">&gt; However, the OS may not reserve space for the skipped pages or disk  
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
<span class="quotelev1">&gt; Iain
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
<li><strong>Next message:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
