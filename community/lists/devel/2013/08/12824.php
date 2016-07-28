<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 21:13:11 2013" -->
<!-- isoreceived="20130830011311" -->
<!-- sent="Fri, 30 Aug 2013 01:13:09 +0000" -->
<!-- isosent="20130830011309" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8459B6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="521FDA53.9020008_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 21:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12823.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12823.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2013, at 7:33 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK, so I'll try testing again with a larger limit to see if that will
</span><br>
<span class="quotelev1">&gt; ameliorate this issue.  I'm also wondering where this is happening in
</span><br>
<span class="quotelev1">&gt; OMPI, I've a sneaking suspicion this is at MPI_INIT().
</span><br>
<p><p>FWIW, the stack traces you sent are not during MPI_INIT.
<br>
<p>What happens with OMPI's memory manager is that it inserts itself to be *the* memory allocator for the entire process before main() even starts.  We have to do this as part of the horribleness of that is OpenFabrics/verbs and how it just doesn't match the MPI programming model at all.  :-(  (I think I wrote some blog entries about this a while ago...  Ah, here's a few:
<br>
<p><a href="http://blogs.cisco.com/performance/rdma-what-does-it-mean-to-mpi-applications/">http://blogs.cisco.com/performance/rdma-what-does-it-mean-to-mpi-applications/</a>
<br>
<a href="http://blogs.cisco.com/performance/registered-memory-rma-rdma-and-mpi-implementations/">http://blogs.cisco.com/performance/registered-memory-rma-rdma-and-mpi-implementations/</a>
<br>
<p>Or, more generally: <a href="http://blogs.cisco.com/tag/rdma/">http://blogs.cisco.com/tag/rdma/</a>
<br>
<p>Therefore, (in C) if you call malloc() before MPI_Init(), it'll be calling OMPI's ptmalloc.  The stack traces you sent imply that it's just when your app is calling the fortran allocate -- which is after MPI_Init().
<br>
<p>FWIW, you can build OMPI with --without-memory-manager, or you can setenv OMPI_MCA_memory_linux_disable to 1 (note: this is NOT a regular MCA parameter -- it *must* be set in the environment before the MPI app starts).  If this env variable is set, OMPI will *not* interpose its own memory manager in the pre-main hook.  That should be a quick/easy way to try with and without the memory manager and see what happens.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12823.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12823.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
