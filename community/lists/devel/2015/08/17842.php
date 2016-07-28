<?
$subject_val = "[OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 08:44:53 2015" -->
<!-- isoreceived="20150825124453" -->
<!-- sent="Tue, 25 Aug 2015 21:44:52 +0900" -->
<!-- isosent="20150825124452" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="CAAkFZ5sfGab1x1XScWSMMw92JFKSYmPXh9hVj6wTYQk4MdaRpg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] fortran calling MPI_* instead of PMPI_*<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 08:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I ran some basic tests with IPM profiler-like
<br>
<a href="https://github.com/nerscadmin/IPM">https://github.com/nerscadmin/IPM</a> and found that when fortran calls an
<br>
mpi subroutine, this is accounted twice.
<br>
IPM defines both MPI_* subroutines and their fortran mpi_*_ counterpart.
<br>
since the ompi fortran calls the MPI_* symbol (and not the PMPI_* one), and
<br>
IPM does nothing to prevent double accounting, all subroutines are
<br>
accounted twice
<br>
<p>what is the rationale for calling MPI_* from fortran instead of PMPI_* ?
<br>
<p>basically, I can see three options
<br>
1. we do nothing, this is an IPM problem, not an Open MPI one
<br>
2. we change ompi to call the PMPI_* symbols
<br>
3. we add a configure option to call PMPI_* symbols instead of the MPI_*
<br>
ones
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17841.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17843.php">Bert Wesarg: "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
