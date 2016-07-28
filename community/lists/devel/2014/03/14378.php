<?
$subject_val = "Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 05:23:29 2014" -->
<!-- isoreceived="20140320092329" -->
<!-- sent="Thu, 20 Mar 2014 02:21:55 -0700" -->
<!-- isosent="20140320092155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?" -->
<!-- id="13ED1F1E-04CD-4846-8010-712E2949449D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16dZqLYh2sxB4yfC=Sp8oOy6F9_oob5imvcYNE81d+G9w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5rc5 still building oshmem by default?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 05:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14379.php">Jeff Squyres (jsquyres): "[OMPI devel] Delayed SVN/Trac mails"</a>
<li><strong>Previous message:</strong> <a href="14377.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>In reply to:</strong> <a href="14377.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it builds by default on 1.7.5 - if we see too many issues, then we'll turn it off unless requested
<br>
<p>On Mar 19, 2014, at 10:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Maybe I misunderstood, but I though it had been decided 1.7.5 was *not* going to build oshmem by default.  If I am mistaken, then feel free to ignore the rest of this post.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though I don't configure with any options which mention oshmem, I still see (known as ticket #4262) failures linking the oshmem examples on xlc/ppc32/linux:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh
</span><br>
<span class="quotelev1">&gt; ** ring_oshmem   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file ring_oshmemfh.f90.
</span><br>
<span class="quotelev1">&gt; ring_oshmemfh.o: In function `ring_oshmem':
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-1.7.5rc5-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:35: undefined reference to `shmem_put8'
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-1.7.5rc5-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:48: undefined reference to `shmem_int8_wait_until'
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-1.7.5rc5-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:55: undefined reference to `shmem_put8'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14377.php">http://www.open-mpi.org/community/lists/devel/2014/03/14377.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14379.php">Jeff Squyres (jsquyres): "[OMPI devel] Delayed SVN/Trac mails"</a>
<li><strong>Previous message:</strong> <a href="14377.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<li><strong>In reply to:</strong> <a href="14377.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 still building oshmem by default?"</a>
<!-- nextthread="start" -->
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
