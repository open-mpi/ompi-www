<?
$subject_val = "Re: [OMPI devel] 1.6.4rc5: final rc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:09:58 2013" -->
<!-- isoreceived="20130220210958" -->
<!-- sent="Wed, 20 Feb 2013 14:09:53 -0700" -->
<!-- isosent="20130220210953" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc5: final rc" -->
<!-- id="20130220210953.GA96894_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="512515E8.8060906_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.4rc5: final rc<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 16:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12133.php">Eugene Loh: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12143.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Reply:</strong> <a href="12143.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 20, 2013 at 10:28:56AM -0800, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; On 02/20/13 07:54, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;All MTT testing looks good for 1.6.4.  There seems to be an MPI dynamics problem when --enable-spare-groups is used, but this does not look like a regression to me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I put out a final rc, because there was one more minor change to accommodate an MXM API change; it's in the usual place:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Unless something disastrous happens, I plan to release this as the final 1.6.4 tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this qualifies as &quot;disastrous&quot;, but...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been trying to do some 1.6 testing on Solaris.  (Solaris 11,
</span><br>
<span class="quotelev1">&gt; Oracle Studio compilers, both SPARC and x86)  Results generally look
</span><br>
<span class="quotelev1">&gt; good.  The main issue appears to be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - SPARC
</span><br>
<span class="quotelev1">&gt;   *AND*
</span><br>
<span class="quotelev1">&gt; - compile with &quot;-m32 -xmemalign=8s&quot; (the latter means assume at most 8-byte alignment, with sigbus for misalignment)
</span><br>
<span class="quotelev1">&gt;   *AND*
</span><br>
<span class="quotelev1">&gt; - openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a sigbus during MPI_Init.  Specifically, if I go to btl_openib_frag.h out_constructor(), I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     frag-&gt;sr_desc.wr_id = (uint64_t)(uintptr_t)frag;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the left-hand side is on a 4-byte (but not 8-byte) boundary.  How hard would it be to get openib frags on 8-byte boundaries?
</span><br>
<p>Very easy. Just adjust the parameters given to ompi_free_list_init(). There are arguments for frag alignment and data alignment. Looking at btl_openib_component.c a number of free lists have the alignment set at 2. Change those to 8 and see if that fixes the problem.
<br>
<p>Anyone know why these were set with an alignment of 2 in the first place? I would have expected 8 or opal_cache_line_size.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12133.php">Eugene Loh: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12143.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Reply:</strong> <a href="12143.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
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
