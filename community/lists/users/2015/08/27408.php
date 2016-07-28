<?
$subject_val = "[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 08:36:26 2015" -->
<!-- isoreceived="20150807123626" -->
<!-- sent="Fri, 7 Aug 2015 13:36:21 +0100" -->
<!-- isosent="20150807123621" -->
<!-- name="James Spencer" -->
<!-- email="j.spencer_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Fortran with Intel 15 and OpenMP" -->
<!-- id="20150807123621.GH3622_at_pauling.cmth.ph.ic.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP<br>
<strong>From:</strong> James Spencer (<em>j.spencer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-07 08:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="27407.php">Gilles Gouaillardet: "Re: [OMPI users] bad XRC API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Reply:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Apologies if this has been resolved but I couldn't spot a definitive fix in this thread:
<br>
<p>&quot;Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently&quot;
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/11/25823.php">http://www.open-mpi.org/community/lists/users/2014/11/25823.php</a>
<br>
<p>and the related thread on Intel's forums:
<br>
<a href="https://software.intel.com/en-us/forums/topic/540673">https://software.intel.com/en-us/forums/topic/540673</a>
<br>
<p>I recently compiled OpenMPI 1.8.7 with default options and Intel 15.0.3.187:
<br>
<p>$ ./configure --prefix=/common/debian/8.1/Compiler/intel/2015.3/openmpi/openmpi-1.8.7 CC=icc CXX=icpc F77=ifort FC=ifort
<br>
$ make all
<br>
$ make install
<br>
<p>A simple test program:
<br>
<p>program test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real(8) :: a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call random_number(a)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)&quot;hello&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
end program test
<br>
<p>fails if compiled with OpenMP (even if OpenMP is not used):
<br>
<p>$ mpif90 test.f90 -openmp
<br>
$ ./a.out
<br>
Segmentation fault
<br>
<p>Running with more cores causes a silent failure:
<br>
<p>$ mpirun -np 4 ./a.out 
<br>
&lt;no output&gt;
<br>
<p>though an exit code of 139 is returned.
<br>
<p>The Intel forum thread alleges that this is (at least for MVAPICH2) because incorrect Intel runtime sources are included in an MPI
<br>
library, which is backed up by looking at the OpenMPI and Intel libraries:
<br>
<p>Intel:
<br>
<p>$ nm libifcore.so.5 | grep for_rtl_init
<br>
0000000000050550 T for_rtl_init_
<br>
$ nm libifcoremt.so.5 | grep for_rtl_init
<br>
0000000000050ed0 T for_rtl_init_
<br>
<p>OpenMPI:
<br>
<p>$ nm libmpi_usempif08.so | grep for_rtl_init
<br>
00000000000303f0 T for_rtl_init_
<br>
<p>I appear to be able to work around this by forcing the use of shared Intel libraries:
<br>
<p>$ mpif90 test.f90 -openmp -shared-intel
<br>
$ ./a.out 
<br>
&nbsp;hello
<br>
$ mpirun -np 4 ./a.out 
<br>
&nbsp;hello
<br>
&nbsp;hello
<br>
&nbsp;hello
<br>
&nbsp;hello
<br>
<p>Is there a way to resolve this in the OpenMPI build itself instead?
<br>
<p>Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;--James
<br>
<p><pre>
-- 
James Spencer
<a href="http://www.cmth.ph.ic.ac.uk/people/j.spencer/">http://www.cmth.ph.ic.ac.uk/people/j.spencer/</a>
<a href="http://www.github.com/jsspencer">http://www.github.com/jsspencer</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="27407.php">Gilles Gouaillardet: "Re: [OMPI users] bad XRC API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
<li><strong>Reply:</strong> <a href="27409.php">Thomas Jahns: "Re: [OMPI users] OpenMPI Fortran with Intel 15 and OpenMP"</a>
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
