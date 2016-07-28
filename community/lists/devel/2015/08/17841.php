<?
$subject_val = "Re: [OMPI devel] mca_mtl_psm and java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 08:01:54 2015" -->
<!-- isoreceived="20150825120154" -->
<!-- sent="Tue, 25 Aug 2015 21:01:52 +0900" -->
<!-- isosent="20150825120152" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_mtl_psm and java" -->
<!-- id="CAAkFZ5sPKRSrkApYQw+Ryfo+CoBiPyky_--zMx-_-Optm_sBPg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="94EAFA54-FAC6-42AA-A8F5-AD471B8C8F98_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 08:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17842.php">Gilles Gouaillardet: "[OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17845.php">Howard Pritchard: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i do not know if this can be runtime detected ...
<br>
note we should report this to intel folks and ask them to advise.
<br>
ideally, they would provide a way to make sure libinfinipath.so does not
<br>
conflict with the jvm signal handlers.
<br>
<p>my idea is to dlopen libinfinipath only if java bindings are not used.
<br>
<p>On Tuesday, August 25, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible to run-time detect this situation?  E.g., probe the signal
</span><br>
<span class="quotelev1">&gt; handler, or somesuch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rationale: I'd rather have something run-time disabled than not built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would dlopen'ing libinfinipath change actually change its signal handler
</span><br>
<span class="quotelev1">&gt; behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 25, 2015, at 4:27 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; some time ago, some crashes were reported when using java bindings.
</span><br>
<span class="quotelev2">&gt; &gt; one of them was caused was caused by mca_mtl_psm.so.
</span><br>
<span class="quotelev2">&gt; &gt; the root cause is libinfinipath.so initializer sets its own signal
</span><br>
<span class="quotelev1">&gt; handler, which
</span><br>
<span class="quotelev2">&gt; &gt; conflicts with the signal handler sets by the jvm.
</span><br>
<span class="quotelev2">&gt; &gt; the only workaround is to disable the psm mtl
</span><br>
<span class="quotelev2">&gt; &gt; (e.g. mpirun --mca mtl ^psm ...)
</span><br>
<span class="quotelev2">&gt; &gt; since mpirun --mca mtl_psm_priority 0 ... does not work
</span><br>
<span class="quotelev2">&gt; &gt; (libinfinipath.so is loaded, so the initializer is ran and the signal
</span><br>
<span class="quotelev1">&gt; handlers are set)
</span><br>
<span class="quotelev2">&gt; &gt; so the psm mtl cannot be disabled by the Java MPI_Init()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; one option is to document this
</span><br>
<span class="quotelev2">&gt; &gt; an other option is not to build the psm mtl if java bindings are built
</span><br>
<span class="quotelev2">&gt; &gt; and an other option is to revamp mca_mtl_psm.so so it does not link with
</span><br>
<span class="quotelev1">&gt; libinfinipath.so
</span><br>
<span class="quotelev2">&gt; &gt; (use an intermediate component, or dlopen libinfinipath)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; any thoughts ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17838.php">http://www.open-mpi.org/community/lists/devel/2015/08/17838.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17840.php">http://www.open-mpi.org/community/lists/devel/2015/08/17840.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17842.php">Gilles Gouaillardet: "[OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17844.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17845.php">Howard Pritchard: "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
