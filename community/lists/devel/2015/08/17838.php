<?
$subject_val = "[OMPI devel] mca_mtl_psm and java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 04:27:46 2015" -->
<!-- isoreceived="20150825082746" -->
<!-- sent="Tue, 25 Aug 2015 17:27:40 +0900" -->
<!-- isosent="20150825082740" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_mtl_psm and java" -->
<!-- id="55DC26FC.9060707_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] mca_mtl_psm and java<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 04:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Previous message:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>some time ago, some crashes were reported when using java bindings.
<br>
one of them was caused was caused by mca_mtl_psm.so.
<br>
the root cause is libinfinipath.so initializer sets its own signal 
<br>
handler, which
<br>
conflicts with the signal handler sets by the jvm.
<br>
the only workaround is to disable the psm mtl
<br>
(e.g. mpirun --mca mtl ^psm ...)
<br>
since mpirun --mca mtl_psm_priority 0 ... does not work
<br>
(libinfinipath.so is loaded, so the initializer is ran and the signal 
<br>
handlers are set)
<br>
so the psm mtl cannot be disabled by the Java MPI_Init()
<br>
<p>one option is to document this
<br>
an other option is not to build the psm mtl if java bindings are built
<br>
and an other option is to revamp mca_mtl_psm.so so it does not link with 
<br>
libinfinipath.so
<br>
(use an intermediate component, or dlopen libinfinipath)
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17839.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] esslingen MTT?"</a>
<li><strong>Previous message:</strong> <a href="17837.php">Gilles Gouaillardet: "Re: [OMPI devel] esslingen MTT?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Reply:</strong> <a href="17840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
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
