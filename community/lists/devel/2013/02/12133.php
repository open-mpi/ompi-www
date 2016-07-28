<?
$subject_val = "Re: [OMPI devel] 1.6.4rc5: final rc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 13:29:03 2013" -->
<!-- isoreceived="20130220182903" -->
<!-- sent="Wed, 20 Feb 2013 10:28:56 -0800" -->
<!-- isosent="20130220182856" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc5: final rc" -->
<!-- id="512515E8.8060906_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F4CC42_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 13:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12131.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12141.php">Nathan Hjelm: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Reply:</strong> <a href="12141.php">Nathan Hjelm: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/20/13 07:54, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; All MTT testing looks good for 1.6.4.  There seems to be an MPI dynamics problem when --enable-spare-groups is used, but this does not look like a regression to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I put out a final rc, because there was one more minor change to accommodate an MXM API change; it's in the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless something disastrous happens, I plan to release this as the final 1.6.4 tomorrow.
</span><br>
<p>I don't think this qualifies as &quot;disastrous&quot;, but...
<br>
<p>I've been trying to do some 1.6 testing on Solaris.  (Solaris 11, Oracle Studio compilers, both SPARC and x86)  Results generally 
<br>
look good.  The main issue appears to be:
<br>
<p>- SPARC
<br>
&nbsp;&nbsp;&nbsp;*AND*
<br>
- compile with &quot;-m32 -xmemalign=8s&quot; (the latter means assume at most 8-byte alignment, with sigbus for misalignment)
<br>
&nbsp;&nbsp;&nbsp;*AND*
<br>
- openib
<br>
<p>There is a sigbus during MPI_Init.  Specifically, if I go to btl_openib_frag.h out_constructor(), I see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sr_desc.wr_id = (uint64_t)(uintptr_t)frag;
<br>
<p>and the left-hand side is on a 4-byte (but not 8-byte) boundary.  How hard would it be to get openib frags on 8-byte boundaries?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12131.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc5: final rc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12141.php">Nathan Hjelm: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
<li><strong>Reply:</strong> <a href="12141.php">Nathan Hjelm: "Re: [OMPI devel] 1.6.4rc5: final rc"</a>
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
