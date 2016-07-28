<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 18 16:55:58 2006" -->
<!-- isoreceived="20060818205558" -->
<!-- sent="Fri, 18 Aug 2006 13:55:54 -0700 (GMT-07:00)" -->
<!-- isosent="20060818205554" -->
<!-- name="Steven A. DuChene" -->
<!-- email="linux-clusters_at_[hidden]" -->
<!-- subject="[OMPI users] building openmpi with gfortran and g95" -->
<!-- id="18783563.1155934554692.JavaMail.root_at_mswamui-andean.atl.sa.earthlink.net" -->
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
<strong>From:</strong> Steven A. DuChene (<em>linux-clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-18 16:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Reply:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Maybe reply:</strong> <a href="1759.php">Steven A. DuChene: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am attempting to build OpenMPI-1.1 on a RHEL4u2 system that has
<br>
the standard gfortran install as part of the distro and with a self installed
<br>
recent version of g95 from g95.org but when I use the FC flag to
<br>
configure to tell it where to find the g95 executable I get a message
<br>
during the configure run of 
<br>
<p>*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether /app/g95-newer/g95-install/bin/x86_64-unknown-linux-gnu-g95 accepts -g... yes
<br>
checking if Fortran compiler works... yes
<br>
checking whether gfortran and /app/g95-newer/g95-install/bin/x86_64-unknown-linux-gnu-g95 compilers are compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link compatible
<br>
configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
<br>
checking if Fortran 90 compiler supports LOGICAL... skipped
<br>
checking if Fortran 90 compiler supports INTEGER... skipped
<br>
checking if Fortran 90 compiler supports INTEGER*1... skipped
<br>
checking if Fortran 90 compiler supports INTEGER*2... skipped
<br>
checking if Fortran 90 compiler supports INTEGER*4... skipped
<br>
checking if Fortran 90 compiler supports INTEGER*8... skipped
<br>
checking if Fortran 90 compiler supports INTEGER*16... skipped
<br>
checking if Fortran 90 compiler supports REAL... skipped
<br>
checking if Fortran 90 compiler supports REAL*4... skipped
<br>
checking if Fortran 90 compiler supports REAL*8... skipped
<br>
checking if Fortran 90 compiler supports REAL*16... skipped
<br>
checking if Fortran 90 compiler supports DOUBLE PRECISION... skipped
<br>
checking if Fortran 90 compiler supports COMPLEX... skipped
<br>
checking if Fortran 90 compiler supports COMPLEX*8... skipped
<br>
checking if Fortran 90 compiler supports COMPLEX*16... skipped
<br>
checking if Fortran 90 compiler supports COMPLEX*32... skipped
<br>
checking if Fortran 90 compiler supports DOUBLE COMPLEX... skipped
<br>
<p>I am not specifying any particular FCFLAGS but from searching through the mailing
<br>
lists I am pretty sure I should be but I just don't know what exactly.
<br>
<p>Any info on this anywhere?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Reply:</strong> <a href="1757.php">Hugh Merz: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Maybe reply:</strong> <a href="1759.php">Steven A. DuChene: "Re: [OMPI users] building openmpi with gfortran and g95"</a>
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
