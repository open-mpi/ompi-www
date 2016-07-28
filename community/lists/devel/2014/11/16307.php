<?
$subject_val = "[OMPI devel] Error in version 1.8.3?!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 05:48:39 2014" -->
<!-- isoreceived="20141113104839" -->
<!-- sent="Thu, 13 Nov 2014 11:48:35 +0100" -->
<!-- isosent="20141113104835" -->
<!-- name="SCC" -->
<!-- email="Hartmut.Haefner_at_[hidden]" -->
<!-- subject="[OMPI devel] Error in version 1.8.3?!" -->
<!-- id="4497565.CSbBQmRQZm_at_rzm-haefner" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Error in version 1.8.3?!<br>
<strong>From:</strong> SCC (<em>Hartmut.Haefner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 05:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16308.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>Previous message:</strong> <a href="16306.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16308.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>Reply:</strong> <a href="16308.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.3?!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers,
<br>
we have compiled OpenMPI 1.8.3 with Intel Compiler in version 13.1.5 (and 
<br>
15.0.0). The configure command is:
<br>
./configure CC=icc CXX=icpc FC=ifort F90=ifort CFLAGS=&quot;-O2 -fno-strict-
<br>
aliasing&quot; CXXFLAGS=&quot;-O2&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-O2&quot; --enable-shared --enable-static --enable-mpi-
<br>
fortran=usempif08 --with-verbs --without-psm --with-slurm --
<br>
prefix=/software/all/openmpi
<br>
/1.8.3_intel_13.1
<br>
We also tried the configure command without the option --enable-mpi-fortran
<br>
and additionally with option  -D__INTEL_COMPILER in CFLAGS, CXXFLAGS and 
<br>
FCFLAGS.
<br>
<p>If you want to use the subroutine MPI_Sizeof within a Fortran program, you 
<br>
always get a undefined reference.
<br>
<p>We also have tried a test program:
<br>
program testbcast
<br>
use mpi
<br>
implicit none
<br>
&nbsp;
<br>
logical :: a
<br>
integer :: ierror, rank, size
<br>
&nbsp;
<br>
a = .true.
<br>
call mpi_init(ierror)
<br>
call mpi_sizeof(a, size, ierror)
<br>
print *,size
<br>
call mpi_finalize(ierror)
<br>
end program testbcast
<br>
<p>Using 
<br>
mpif90 -o mpi_sizetest mpi_sizetest.f90
<br>
gives
<br>
/scratch/ifortahgFcM.o: In function `MAIN__':
<br>
mpi_sizetest.f90:(.text+0x4c): undefined reference to `mpi_sizeof0dl_'
<br>
<p>(Environment variable OMPI_FCFLAGS is unset)
<br>
<p>If we use the GNU compiler instead of the Intel compiler, it works!( but then 
<br>
we run into trouble with the module &quot;mpi&quot; using the Intel compiler for our 
<br>
application.)
<br>
<p>We did not find any hints on this erroneous behaviour!
<br>
<p><p>Sincerly yours
<br>
<p>&nbsp;&nbsp;&nbsp;Hartmut H&#228;fner
<br>
<p><p>------------------------ 
<br>
Hartmut H&#228;fner
<br>
Karlsruhe Institute of Technology (KIT)
<br>
University Karlsruhe (TH)
<br>
Steinbuch Centre for Computing (SCC)
<br>
Scientific Computing and Simulation (SCS)
<br>
Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
<br>
D-76128 Karlsruhe
<br>
<p>Fon +49(0)721 608 44869
<br>
Fax +49(0)721 32550
<br>
Hartmut.Haefner_at_[hidden]
<br>
<p><a href="http://www.scc.kit.edu/personen/hartmut.haefner">http://www.scc.kit.edu/personen/hartmut.haefner</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16308.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>Previous message:</strong> <a href="16306.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16308.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.3?!"</a>
<li><strong>Reply:</strong> <a href="16308.php">Gilles Gouaillardet: "Re: [OMPI devel] Error in version 1.8.3?!"</a>
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
