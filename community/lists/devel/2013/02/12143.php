<?
$subject_val = "Re: [OMPI devel] 1.6.4rc5: final rc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 16:17:35 2013" -->
<!-- isoreceived="20130220211735" -->
<!-- sent="Wed, 20 Feb 2013 21:17:23 +0000" -->
<!-- isosent="20130220211723" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc5: final rc" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F4E058_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130220210953.GA96894_at_pantheralanlgov.local" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 16:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12144.php">Jeff Squyres (jsquyres): "[OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12141.php">Nathan Hjelm: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If someone wants to submit a patch in the immediate future (i.e., within the next hour), great.
<br>
<p>Otherwise, I'm still going to release 1.6.4 as-is.
<br>
<p>If someone wants to submit a patch after 1.6.4 is out, that's fine -- if we ever do 1.6.5, it can go in there.
<br>
<p><p>On Feb 20, 2013, at 4:09 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Feb 20, 2013 at 10:28:56AM -0800, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 02/20/13 07:54, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All MTT testing looks good for 1.6.4.  There seems to be an MPI dynamics problem when --enable-spare-groups is used, but this does not look like a regression to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I put out a final rc, because there was one more minor change to accommodate an MXM API change; it's in the usual place:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unless something disastrous happens, I plan to release this as the final 1.6.4 tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think this qualifies as &quot;disastrous&quot;, but...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to do some 1.6 testing on Solaris.  (Solaris 11,
</span><br>
<span class="quotelev2">&gt;&gt; Oracle Studio compilers, both SPARC and x86)  Results generally look
</span><br>
<span class="quotelev2">&gt;&gt; good.  The main issue appears to be:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - SPARC
</span><br>
<span class="quotelev2">&gt;&gt;  *AND*
</span><br>
<span class="quotelev2">&gt;&gt; - compile with &quot;-m32 -xmemalign=8s&quot; (the latter means assume at most 8-byte alignment, with sigbus for misalignment)
</span><br>
<span class="quotelev2">&gt;&gt;  *AND*
</span><br>
<span class="quotelev2">&gt;&gt; - openib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a sigbus during MPI_Init.  Specifically, if I go to btl_openib_frag.h out_constructor(), I see:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;sr_desc.wr_id = (uint64_t)(uintptr_t)frag;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and the left-hand side is on a 4-byte (but not 8-byte) boundary.  How hard would it be to get openib frags on 8-byte boundaries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Very easy. Just adjust the parameters given to ompi_free_list_init(). There are arguments for frag alignment and data alignment. Looking at btl_openib_component.c a number of free lists have the alignment set at 2. Change those to 8 and see if that fixes the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone know why these were set with an alignment of 2 in the first place? I would have expected 8 or opal_cache_line_size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12144.php">Jeff Squyres (jsquyres): "[OMPI devel] openib fragment alignment"</a>
<li><strong>Previous message:</strong> <a href="12142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12141.php">Nathan Hjelm: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
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
