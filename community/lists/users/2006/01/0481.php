<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 02:27:45 2006" -->
<!-- isoreceived="20060105072745" -->
<!-- sent="Thu, 05 Jan 2006 15:31:00 +0800" -->
<!-- isosent="20060105073100" -->
<!-- name="Jyh-Shyong Ho" -->
<!-- email="c00jsh00_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2" -->
<!-- id="43BCCB34.1070004_at_nchc.org.tw" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A03314D1-B133-483C-944B-84059BF6A6D4_at_open-mpi.org" -->
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
<strong>From:</strong> Jyh-Shyong Ho (<em>c00jsh00_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 02:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Reply:</strong> <a href="0483.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have compiled OpenMPI with PGI and Intel comilers successfully on my 
<br>
Opteron computer running
<br>
SuSE10.0, however,  the compilation failed with gcc-4.0.2 compiler:
<br>
....
<br>
make[3]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f77'
<br>
Making all in f90
<br>
make[3]: Entering directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
<br>
make  all-recursive
<br>
make[4]: Entering directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
<br>
Making all in scripts
<br>
make[5]: Entering directory 
<br>
`/work/source/openmpi-1.0.1/ompi/mpi/f90/scripts'
<br>
make[5]: Nothing to be done for `all'.
<br>
make[5]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90/scripts'
<br>
make[5]: Entering directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
<br>
gfortran -I../../../include -I../../../include -I.  -c -o 
<br>
mpi_address_f90.o  mpi_address_f90.f90
<br>
&nbsp;In file mpi_address_f90.f90:83
<br>
<p>&nbsp;&nbsp;real(kind=MPI_REAL16_KIND), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type REAL at (1)
<br>
&nbsp;In file mpi_address_f90.f90:107
<br>
<p>&nbsp;&nbsp;complex(kind=MPI_REAL16_KIND), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type COMPLEX at (1)
<br>
&nbsp;In file mpi_address_f90.f90:195
<br>
<p>&nbsp;&nbsp;real(kind=MPI_REAL16_KIND), dimension(:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type REAL at (1)
<br>
&nbsp;In file mpi_address_f90.f90:219
<br>
<p>&nbsp;&nbsp;complex(kind=MPI_REAL16_KIND), dimension(:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type COMPLEX at (1)
<br>
&nbsp;In file mpi_address_f90.f90:307
<br>
<p>&nbsp;&nbsp;real(kind=MPI_REAL16_KIND), dimension(:,:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type REAL at (1)
<br>
&nbsp;In file mpi_address_f90.f90:331
<br>
<p>&nbsp;&nbsp;complex(kind=MPI_REAL16_KIND), dimension(:,:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type COMPLEX at (1)
<br>
&nbsp;In file mpi_address_f90.f90:419
<br>
<p>&nbsp;&nbsp;real(kind=MPI_REAL16_KIND), dimension(:,:,:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type REAL at (1)
<br>
&nbsp;In file mpi_address_f90.f90:443
<br>
<p>&nbsp;&nbsp;complex(kind=MPI_REAL16_KIND), dimension(:,:,:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type COMPLEX at (1)
<br>
&nbsp;In file mpi_address_f90.f90:531
<br>
<p>&nbsp;&nbsp;real(kind=MPI_REAL16_KIND), dimension(:,:,:,:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type REAL at (1)
<br>
&nbsp;In file mpi_address_f90.f90:555
<br>
<p>&nbsp;&nbsp;complex(kind=MPI_REAL16_KIND), dimension(:,:,:,:), intent(in) :: location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Kind -1 not supported for type COMPLEX at (1)
<br>
make[5]: *** [mpi_address_f90.o] Error 1
<br>
make[5]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/work/source/openmpi-1.0.1/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I used the following variables:
<br>
FC=gfortran
<br>
CC=gcc
<br>
CXX=g++
<br>
F77=gfortran
<br>
<p>Any hint on how to solve this problem?  Thanks.
<br>
<p>Jyh-Shyong Ho, Ph.D.
<br>
Research Scientist
<br>
National Center for High Performance Computing
<br>
Hsinchu, Taiwan, ROC
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0462.php">Brian Barrett: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<li><strong>Reply:</strong> <a href="0483.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
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
