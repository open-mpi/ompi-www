<?
$subject_val = "Re: [OMPI devel] openib btl build question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:37:33 2008" -->
<!-- isoreceived="20080521203733" -->
<!-- sent="Wed, 21 May 2008 16:37:27 -0400 (EDT)" -->
<!-- isosent="20080521203727" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl build question" -->
<!-- id="Pine.LNX.4.64.0805211636230.15227_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="75C3AA50-9F53-4473-B2C7-A5F486AED537_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl build question<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 16:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3971.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 21 May 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 21, 2008, at 4:17 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just want to make sure what I think I see is true:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux build.  openib btl requires ptmalloc2 and ptmalloc2 requires
</span><br>
<span class="quotelev2">&gt;&gt; posix
</span><br>
<span class="quotelev2">&gt;&gt; threads, is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ptmalloc2 is not *required* by the openib btl.  But it is required on
</span><br>
<span class="quotelev1">&gt; Linux if you want to use the mpi_leave_pinned functionality.  I see
</span><br>
<span class="quotelev1">&gt; one function call to __pthread_initialize in the ptmalloc2 code -- it
</span><br>
<span class="quotelev1">&gt; *looks* like it's a function of glibc, but I don't know for sure.
</span><br>
<p>There's actually more than that, it's just buried a bit.  There's a whole 
<br>
bunch of thread-specific data stuff, which is wrapped so that different 
<br>
thread packages can be used (although OMPI only supports pthreads).  The 
<br>
wrappers are in ptmalloc2/sysdeps/pthreads.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3973.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3971.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
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
