<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:50:28 2009" -->
<!-- isoreceived="20090330175028" -->
<!-- sent="Mon, 30 Mar 2009 13:50:24 -0400" -->
<!-- isosent="20090330175024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="4C53FBA0-543E-4567-8130-67EFCDE63B56_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220903301040t4ee21c8au4dfe50c8712cdacd_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-03-30 13:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's half done, actually.  But it was still going to be an option, not  
<br>
necessarily the only way to do it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/shm-sysv/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/shm-sysv/</a>
<br>
<p><p>On Mar 30, 2009, at 1:40 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; I've been lurking on this conversation, and I am again left with the  
</span><br>
<span class="quotelev1">&gt; impression
</span><br>
<span class="quotelev1">&gt; that the underlying shared memory configuration based on sharing a  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt; is flawed.  Why not use a System V shared memory segment without a
</span><br>
<span class="quotelev1">&gt; backing file as I described in ticket #1320?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 30, 2009 at 1:34 PM, George Bosilca  
</span><br>
<span class="quotelev1">&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Then it looks like the safest solution is the use either ftruncate  
</span><br>
<span class="quotelev1">&gt; or the
</span><br>
<span class="quotelev2">&gt; &gt; lseek method and then touch the first byte of all memory pages.
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, I see two problems with this. First, there is a clear
</span><br>
<span class="quotelev2">&gt; &gt; performance hit on the startup time. And second, we will have to  
</span><br>
<span class="quotelev1">&gt; find a
</span><br>
<span class="quotelev2">&gt; &gt; pretty smart way to do this or we will completely break the memory  
</span><br>
<span class="quotelev1">&gt; affinity
</span><br>
<span class="quotelev2">&gt; &gt; stuff.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 30, 2009, at 13:24 , Iain Bason wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 30, 2009, at 12:05 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But don't we need the whole area to be zero filled?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It will be zero-filled on demand using the lseek/touch method.   
</span><br>
<span class="quotelev1">&gt; However,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the OS may not reserve space for the skipped pages or disk  
</span><br>
<span class="quotelev1">&gt; blocks.  Thus one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; could still get out of memory or file system full errors at  
</span><br>
<span class="quotelev1">&gt; arbitrary
</span><br>
<span class="quotelev3">&gt; &gt;&gt; points.  Presumably one could also get segfaults from an mmap'ed  
</span><br>
<span class="quotelev1">&gt; segment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; whose pages couldn't be allocated when the demand came.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Iain
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5754.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5750.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5756.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
