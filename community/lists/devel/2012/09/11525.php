<?
$subject_val = "[OMPI devel] 1.7 Branch Head Link Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 19:04:37 2012" -->
<!-- isoreceived="20120925230437" -->
<!-- sent="Tue, 25 Sep 2012 23:04:32 +0000" -->
<!-- isosent="20120925230432" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7 Branch Head Link Failure" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B1118DC36_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7 Branch Head Link Failure<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 19:04:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Previous message:</strong> <a href="11524.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Reply:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having trouble building the 1.7 branch head.
<br>
<p>Configure:
<br>
--with-platform=./contrib/platform/lanl/rr-class/optimized-panasas
<br>
<p>Link fails with:
<br>
<p>Creating mpi/man/man3/OpenMPI.3 man page...
<br>
&nbsp;&nbsp;CCLD   libmpi.la
<br>
mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
<br>
mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
<br>
<p>Looks like this may be due to multiple definitions of ib_address_t within:
<br>
ompi/mca/btl/openib/btl_openib_xrc.h
<br>
ompi/mca/common/ofacm/common_ofacm_xoob.h
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Previous message:</strong> <a href="11524.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Reply:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
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
