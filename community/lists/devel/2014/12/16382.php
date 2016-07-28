<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 17:07:47 2014" -->
<!-- isoreceived="20141201220747" -->
<!-- sent="Mon, 1 Dec 2014 14:07:43 -0800" -->
<!-- isosent="20141201220743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="2D7CDCD3-D0B4-4582-BCB4-CFDC9427603F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EFB840D6-226C-4979-917F-C0AF044B97F3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 17:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16383.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16383.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16383.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: It&#226;&#128;&#153;s Slurm&#226;&#128;&#153;s pmi-1 library that isn&#226;&#128;&#153;t linked correctly against its dependencies (the pmi-2 one is correct). Moe is aware of the problem and fixing it on their side. This won&#226;&#128;&#153;t help existing installations until they upgrade, but I tend to agree with Jeff about not fixing other people&#226;&#128;&#153;s problems.
<br>
<p><p><span class="quotelev1">&gt; On Dec 1, 2014, at 1:55 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2014, at 4:07 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There has been some discussion of end case situations with use of dlopen
</span><br>
<span class="quotelev2">&gt;&gt; in the ompi mca framework that can lead to unresolved symbols when
</span><br>
<span class="quotelev2">&gt;&gt; subsequent shared libraries are dlopen'd that might needs symbols from
</span><br>
<span class="quotelev2">&gt;&gt; a library that had been opened previously.  Yes these libraries should be
</span><br>
<span class="quotelev2">&gt;&gt; doing something like a second dlopen of the lib they are dependent on,
</span><br>
<span class="quotelev2">&gt;&gt; but that's a different story involving other software projects outside of
</span><br>
<span class="quotelev2">&gt;&gt; ompi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those other projects should be fixed.  OMPI should not be the compromise location where we compensate for other projects that do not obey proper linking semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you cite some specific examples?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The default with the mca framework dlopen'ing of component libraries
</span><br>
<span class="quotelev2">&gt;&gt; is not to use RTLD_GLOBAL, and there does not currently appear to be a way
</span><br>
<span class="quotelev2">&gt;&gt; to change this behavior at runtime.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason for avoiding use of RTLD_GLOBAL in libltdl's use of dlopen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's at least two reasons that I can think of off the top of my head:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. It's the Right Thing to do.  I.e., we shouldn't pollute the general namespace with symbols from dependent libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We've had specific user requests to not pollute the general namespace.  One specific case was because we use an embedded copy of libevent, and another MPI-based program also uses libevent.  If we didn't keep libevent in a private namespace, Bad Things (i.e., symbol clashes) would occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would it be okay to add RTLD_GLOBAL to the default module_flags used
</span><br>
<span class="quotelev2">&gt;&gt; in the vm_open - modulo detection of the definition of RTLD_GLOBAL at
</span><br>
<span class="quotelev2">&gt;&gt; compile time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps adding a way with an env. or config option to not
</span><br>
<span class="quotelev2">&gt;&gt; enable RTLD_GLOBAL by default?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This just seems like a bad path to go down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16381.php">http://www.open-mpi.org/community/lists/devel/2014/12/16381.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16383.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16381.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16383.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16383.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
