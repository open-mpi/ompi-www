<?
$subject_val = "Re: [OMPI devel] mca_mtl_psm and java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 06:40:36 2015" -->
<!-- isoreceived="20150825104036" -->
<!-- sent="Tue, 25 Aug 2015 10:40:34 +0000" -->
<!-- isosent="20150825104034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_mtl_psm and java" -->
<!-- id="94EAFA54-FAC6-42AA-A8F5-AD471B8C8F98_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55DC26FC.9060707_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_mtl_psm and java<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 06:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>In reply to:</strong> <a href="17838.php">Gilles Gouaillardet: "[OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it possible to run-time detect this situation?  E.g., probe the signal handler, or somesuch.
<br>
<p>Rationale: I'd rather have something run-time disabled than not built.
<br>
<p>Would dlopen'ing libinfinipath change actually change its signal handler behavior?
<br>
<p><p><span class="quotelev1">&gt; On Aug 25, 2015, at 4:27 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; some time ago, some crashes were reported when using java bindings.
</span><br>
<span class="quotelev1">&gt; one of them was caused was caused by mca_mtl_psm.so.
</span><br>
<span class="quotelev1">&gt; the root cause is libinfinipath.so initializer sets its own signal handler, which
</span><br>
<span class="quotelev1">&gt; conflicts with the signal handler sets by the jvm.
</span><br>
<span class="quotelev1">&gt; the only workaround is to disable the psm mtl
</span><br>
<span class="quotelev1">&gt; (e.g. mpirun --mca mtl ^psm ...)
</span><br>
<span class="quotelev1">&gt; since mpirun --mca mtl_psm_priority 0 ... does not work
</span><br>
<span class="quotelev1">&gt; (libinfinipath.so is loaded, so the initializer is ran and the signal handlers are set)
</span><br>
<span class="quotelev1">&gt; so the psm mtl cannot be disabled by the Java MPI_Init()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one option is to document this
</span><br>
<span class="quotelev1">&gt; an other option is not to build the psm mtl if java bindings are built
</span><br>
<span class="quotelev1">&gt; and an other option is to revamp mca_mtl_psm.so so it does not link with libinfinipath.so
</span><br>
<span class="quotelev1">&gt; (use an intermediate component, or dlopen libinfinipath)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17838.php">http://www.open-mpi.org/community/lists/devel/2015/08/17838.php</a>
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
<li><strong>Next message:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>In reply to:</strong> <a href="17838.php">Gilles Gouaillardet: "[OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
