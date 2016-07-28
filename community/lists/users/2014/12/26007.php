<?
$subject_val = "[OMPI users] disable library interposition?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 05:17:08 2014" -->
<!-- isoreceived="20141216101708" -->
<!-- sent="Tue, 16 Dec 2014 11:15:49 +0100" -->
<!-- isosent="20141216101549" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="[OMPI users] disable library interposition?" -->
<!-- id="20141216101549.A0A5B2D200A4_at_takeo" -->
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
<strong>Subject:</strong> [OMPI users] disable library interposition?<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-16 05:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<li><strong>Previous message:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<li><strong>Reply:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I somewhat arbitrarily came across this bug:
<br>
<p>&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/299">https://github.com/open-mpi/ompi/issues/299</a>
<br>
<p>I have an application which does `fun' things to a subprocess' memory
<br>
layout, and I worry that mucking with symbols (particularly malloc and
<br>
mmap) will break some assumptions I make.  Is there a way to disable
<br>
this interception?
<br>
<p>I would be fine if disabling it broke/disabled some functionality: I'm
<br>
just running locally on a few cores and could use a TCP transport, for
<br>
now.
<br>
<p>Thanks much,
<br>
<p>-tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<li><strong>Previous message:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<li><strong>Reply:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
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
