<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:40:32 2009" -->
<!-- isoreceived="20090330174032" -->
<!-- sent="Mon, 30 Mar 2009 13:40:27 -0400" -->
<!-- isosent="20090330174027" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="ea86ce220903301040t4ee21c8au4dfe50c8712cdacd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBA0BBD9-580A-4B02-A70F-8EE675A77FB1_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been lurking on this conversation, and I am again left with the impression
<br>
that the underlying shared memory configuration based on sharing a file
<br>
is flawed.  Why not use a System V shared memory segment without a
<br>
backing file as I described in ticket #1320?
<br>
<p>On Mon, Mar 30, 2009 at 1:34 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Then it looks like the safest solution is the use either ftruncate or the
</span><br>
<span class="quotelev1">&gt; lseek method and then touch the first byte of all memory pages.
</span><br>
<span class="quotelev1">&gt; Unfortunately, I see two problems with this. First, there is a clear
</span><br>
<span class="quotelev1">&gt; performance hit on the startup time. And second, we will have to find a
</span><br>
<span class="quotelev1">&gt; pretty smart way to do this or we will completely break the memory affinity
</span><br>
<span class="quotelev1">&gt; stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2009, at 13:24 , Iain Bason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 30, 2009, at 12:05 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But don't we need the whole area to be zero filled?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It will be zero-filled on demand using the lseek/touch method. &#160;However,
</span><br>
<span class="quotelev2">&gt;&gt; the OS may not reserve space for the skipped pages or disk blocks. &#160;Thus one
</span><br>
<span class="quotelev2">&gt;&gt; could still get out of memory or file system full errors at arbitrary
</span><br>
<span class="quotelev2">&gt;&gt; points. &#160;Presumably one could also get segfaults from an mmap'ed segment
</span><br>
<span class="quotelev2">&gt;&gt; whose pages couldn't be allocated when the demand came.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Iain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5749.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5748.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5753.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
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
