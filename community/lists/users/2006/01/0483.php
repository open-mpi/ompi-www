<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 09:22:45 2006" -->
<!-- isoreceived="20060105142245" -->
<!-- sent="Thu, 5 Jan 2006 09:22:37 -0500" -->
<!-- isosent="20060105142237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2" -->
<!-- id="5BB9CCB8-46DA-46F8-A8C5-22C25A5A2226_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43BCCB34.1070004_at_nchc.org.tw" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 09:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0484.php">Joachim Worringen: "[O-MPI users] 1st Call for Papers: EuroPVM/MPI 2006"</a>
<li><strong>Previous message:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>In reply to:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the configuration for the F90 compiler in Open MPI's  
<br>
configure script may not have worked properly for some reason, but I  
<br>
can't tell what went wrong without more information.
<br>
<p>Can you send all the information listed on <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
community/help/ for compile problems?  (please compress the attachments)
<br>
<p>Thanks.
<br>
<p><p>On Jan 5, 2006, at 2:31 AM, Jyh-Shyong Ho wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled OpenMPI with PGI and Intel comilers successfully on my
</span><br>
<span class="quotelev1">&gt; Opteron computer running
</span><br>
<span class="quotelev1">&gt; SuSE10.0, however,  the compilation failed with gcc-4.0.2 compiler:
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f77'
</span><br>
<span class="quotelev1">&gt; Making all in f90
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make  all-recursive
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; Making all in scripts
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/work/source/openmpi-1.0.1/ompi/mpi/f90/scripts'
</span><br>
<span class="quotelev1">&gt; make[5]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90/ 
</span><br>
<span class="quotelev1">&gt; scripts'
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; gfortran -I../../../include -I../../../include -I.  -c -o
</span><br>
<span class="quotelev1">&gt; mpi_address_f90.o  mpi_address_f90.f90
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:83
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   real(kind=MPI_REAL16_KIND), intent(in) :: location
</span><br>
<span class="quotelev1">&gt;                           1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:107
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   complex(kind=MPI_REAL16_KIND), intent(in) :: location
</span><br>
<span class="quotelev1">&gt;                              1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type COMPLEX at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:195
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   real(kind=MPI_REAL16_KIND), dimension(:), intent(in) :: location
</span><br>
<span class="quotelev1">&gt;                           1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:219
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   complex(kind=MPI_REAL16_KIND), dimension(:), intent(in) :: location
</span><br>
<span class="quotelev1">&gt;                              1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type COMPLEX at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:307
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   real(kind=MPI_REAL16_KIND), dimension(:,:), intent(in) :: location
</span><br>
<span class="quotelev1">&gt;                           1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:331
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   complex(kind=MPI_REAL16_KIND), dimension(:,:), intent(in) ::  
</span><br>
<span class="quotelev1">&gt; location
</span><br>
<span class="quotelev1">&gt;                              1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type COMPLEX at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:419
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   real(kind=MPI_REAL16_KIND), dimension(:,:,:), intent(in) :: location
</span><br>
<span class="quotelev1">&gt;                           1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:443
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   complex(kind=MPI_REAL16_KIND), dimension(:,:,:), intent(in) ::  
</span><br>
<span class="quotelev1">&gt; location
</span><br>
<span class="quotelev1">&gt;                              1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type COMPLEX at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:531
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   real(kind=MPI_REAL16_KIND), dimension(:,:,:,:), intent(in) ::  
</span><br>
<span class="quotelev1">&gt; location
</span><br>
<span class="quotelev1">&gt;                           1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:555
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   complex(kind=MPI_REAL16_KIND), dimension(:,:,:,:), intent(in) ::  
</span><br>
<span class="quotelev1">&gt; location
</span><br>
<span class="quotelev1">&gt;                              1
</span><br>
<span class="quotelev1">&gt; Error: Kind -1 not supported for type COMPLEX at (1)
</span><br>
<span class="quotelev1">&gt; make[5]: *** [mpi_address_f90.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/work/source/openmpi-1.0.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following variables:
</span><br>
<span class="quotelev1">&gt; FC=gfortran
</span><br>
<span class="quotelev1">&gt; CC=gcc
</span><br>
<span class="quotelev1">&gt; CXX=g++
</span><br>
<span class="quotelev1">&gt; F77=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hint on how to solve this problem?  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jyh-Shyong Ho, Ph.D.
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; National Center for High Performance Computing
</span><br>
<span class="quotelev1">&gt; Hsinchu, Taiwan, ROC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0484.php">Joachim Worringen: "[O-MPI users] 1st Call for Papers: EuroPVM/MPI 2006"</a>
<li><strong>Previous message:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>In reply to:</strong> <a href="0481.php">Jyh-Shyong Ho: "Re: [O-MPI users] OpenMPI 1.0.1 with gcc-4.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
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
