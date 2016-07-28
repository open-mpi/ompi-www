<?
$subject_val = "[OMPI devel] RFC: Remove the --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 03:49:22 2015" -->
<!-- isoreceived="20150904074922" -->
<!-- sent="Fri, 4 Sep 2015 16:49:16 +0900" -->
<!-- isosent="20150904074916" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove the --enable-mpi-profile option" -->
<!-- id="55E94CFC.7020205_at_rist.or.jp" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove the --enable-mpi-profile option<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 03:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>Jeff and i have been discussing the possibility of removing the 
<br>
--enable-mpi-profile option from ompi.
<br>
(see <a href="https://github.com/open-mpi/ompi/pull/845">https://github.com/open-mpi/ompi/pull/845</a> for the details)
<br>
<p>Removing this option would simplify the building process, and make it 
<br>
crystal clear that Fortran bindings call
<br>
the C PMPI_* bindings. From a tool point of view, that means a Fortran 
<br>
MPI call is wrapped only once in Fortran.
<br>
Currently, a Fortran MPI call is wrapped twice, once in Fortran and once 
<br>
in C.
<br>
<p>We do not see any reason why someone would not want to build without the 
<br>
PMPI_* bindings for a production build.
<br>
That being said, the --disable-mpi-profile option can be useful to 
<br>
developers in order to build openmpi faster on a laptop running OSX. For 
<br>
example, and on my MacBook (recent but low voltage cpu with two core and 
<br>
two threads per core), the full build process (from autogen.pl to make 
<br>
install) takes around 30 minutes, and not building the PMPI_* bindings 
<br>
can save around 5 minutes.
<br>
<p>/* when weak symbols are not available (e.g. ompi was configured with 
<br>
--disable-weak-symbols or weak symbols are not available by the OS, OSX 
<br>
for example), MPI bindings must be built twice:
<br>
- once to generate the MPI_* bindings
<br>
- an other time to generate the PMPI_* bindings */
<br>
<p><p>any thoughts or objections to the removal of the --enable-mpi-profile 
<br>
configure option ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<li><strong>Previous message:</strong> <a href="17959.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
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
