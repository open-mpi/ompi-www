<?
$subject_val = "Re: [OMPI devel] mca_mtl_psm and java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 10:00:41 2015" -->
<!-- isoreceived="20150825140041" -->
<!-- sent="Tue, 25 Aug 2015 08:00:40 -0600" -->
<!-- isosent="20150825140040" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_mtl_psm and java" -->
<!-- id="CAF1Cqj7CcZQq1E3xgM5_A+b-Z3HtQ3f=kqeD_LA49ZGq47OR1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sPKRSrkApYQw+Ryfo+CoBiPyky_--zMx-_-Optm_sBPg_at_mail.gmail.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 10:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17846.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2362-ge2124c6"</a>
<li><strong>Previous message:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think rather than trying workarounds of dubious robustness inside open
<br>
mpi we
<br>
<p>- dicument the issue on either the somewhat aged open mpi website faq or
<br>
add it to a wiki page on github
<br>
- file a bug against  intel psm
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Aug 25, 2015 6:02 AM, &quot;Gilles Gouaillardet&quot; &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; i do not know if this can be runtime detected ...
</span><br>
<span class="quotelev1">&gt; note we should report this to intel folks and ask them to advise.
</span><br>
<span class="quotelev1">&gt; ideally, they would provide a way to make sure libinfinipath.so does not
</span><br>
<span class="quotelev1">&gt; conflict with the jvm signal handlers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my idea is to dlopen libinfinipath only if java bindings are not used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, August 25, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to run-time detect this situation?  E.g., probe the signal
</span><br>
<span class="quotelev2">&gt;&gt; handler, or somesuch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rationale: I'd rather have something run-time disabled than not built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would dlopen'ing libinfinipath change actually change its signal handler
</span><br>
<span class="quotelev2">&gt;&gt; behavior?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Aug 25, 2015, at 4:27 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; some time ago, some crashes were reported when using java bindings.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one of them was caused was caused by mca_mtl_psm.so.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the root cause is libinfinipath.so initializer sets its own signal
</span><br>
<span class="quotelev2">&gt;&gt; handler, which
</span><br>
<span class="quotelev3">&gt;&gt; &gt; conflicts with the signal handler sets by the jvm.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the only workaround is to disable the psm mtl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (e.g. mpirun --mca mtl ^psm ...)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; since mpirun --mca mtl_psm_priority 0 ... does not work
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (libinfinipath.so is loaded, so the initializer is ran and the signal
</span><br>
<span class="quotelev2">&gt;&gt; handlers are set)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; so the psm mtl cannot be disabled by the Java MPI_Init()
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one option is to document this
</span><br>
<span class="quotelev3">&gt;&gt; &gt; an other option is not to build the psm mtl if java bindings are built
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and an other option is to revamp mca_mtl_psm.so so it does not link
</span><br>
<span class="quotelev2">&gt;&gt; with libinfinipath.so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (use an intermediate component, or dlopen libinfinipath)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; any thoughts ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17838.php">http://www.open-mpi.org/community/lists/devel/2015/08/17838.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17840.php">http://www.open-mpi.org/community/lists/devel/2015/08/17840.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17841.php">http://www.open-mpi.org/community/lists/devel/2015/08/17841.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17846.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2362-ge2124c6"</a>
<li><strong>Previous message:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
