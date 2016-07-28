<?
$subject_val = "[OMPI users] undefined reference to `MPI::Comm::Comm()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 08:36:12 2013" -->
<!-- isoreceived="20130709123612" -->
<!-- sent="Tue, 9 Jul 2013 13:36:07 +0100" -->
<!-- isosent="20130709123607" -->
<!-- name="Tomek Wlodarski" -->
<!-- email="tomek.wlodarski_at_[hidden]" -->
<!-- subject="[OMPI users] undefined reference to `MPI::Comm::Comm()" -->
<!-- id="CANAOJCtkGDKN=XNXUOZKb_r+C7h5Mu1WSAMt8WTS7Lszvv_n9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] undefined reference to `MPI::Comm::Comm()<br>
<strong>From:</strong> Tomek Wlodarski (<em>tomek.wlodarski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 08:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Reply:</strong> <a href="22297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to locally compile software which uses openmpi (1.6.3),
<br>
but I got this error:
<br>
<p>restraint_camshift2.o:(.toc+0x98): undefined reference to
<br>
`ompi_mpi_cxx_op_intercept'
<br>
restraint_camshift2.o: In function `Intracomm':
<br>
/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
restraint_camshift2.o: In function `Intracomm':
<br>
/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm_inln.h:23:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
restraint_camshift2.o: In function `Intracomm':
<br>
/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
<br>
undefined reference to `MPI::Comm::Comm()'
<br>
restraint_camshift2.o:/home/users/didymos/openmpi-1.6.3/include/openmpi/ompi/mpi/cxx/intracomm.h:25:
<br>
more undefined references to `MPI::Comm::Comm()' follow
<br>
restraint_camshift2.o:(.data.rel.ro._ZTVN3MPI3WinE[_ZTVN3MPI3WinE]+0x48):
<br>
undefined reference to `MPI::Win::Free()'
<br>
restraint_camshift2.o:(.data.rel.ro._ZTVN3MPI8DatatypeE[_ZTVN3MPI8DatatypeE]+0x78):
<br>
undefined reference to `MPI::Datatype::Free()'
<br>
collect2: error: ld returned 1 exit status
<br>
make[3]: *** [mdrun] Error 1
<br>
make[3]: Leaving directory `/home/users/didymos/src/gromacs-4.5.5/src/kernel'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/users/didymos/src/gromacs-4.5.5/src'
<br>
make[1]: *** [all] Error 2
<br>
make[1]: Leaving directory `/home/users/didymos/src/gromacs-4.5.5/src'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I am using gcc 4.7.3
<br>
Any ideas or suggestions?
<br>
Thanks!
<br>
Best,
<br>
<p>tomek
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Reply:</strong> <a href="22297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
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
