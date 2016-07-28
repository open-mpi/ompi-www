<?
$subject_val = "[OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 13:17:49 2012" -->
<!-- isoreceived="20120806171749" -->
<!-- sent="Mon, 6 Aug 2012 17:17:44 +0000" -->
<!-- isosent="20120806171744" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B110DB3EA_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 13:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11378.php">Jeff Squyres: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11378.php">Jeff Squyres: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="11378.php">Jeff Squyres: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Anyone else seeing this?
<br>
<p>Creating mpi/man/man3/OpenMPI.3 man page...
<br>
&nbsp;&nbsp;CCLD   libmpi.la
<br>
mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
<br>
mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
<br>
collect2: ld returned 1 exit status
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11378.php">Jeff Squyres: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Previous message:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11378.php">Jeff Squyres: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
<li><strong>Reply:</strong> <a href="11378.php">Jeff Squyres: "Re: [OMPI devel] Trunk: Link Failure -- multiple definition of ib_address_t_class"</a>
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
