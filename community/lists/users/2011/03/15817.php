<?
$subject_val = "[OMPI users] Problem running openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 19:47:49 2011" -->
<!-- isoreceived="20110309004749" -->
<!-- sent="Tue, 8 Mar 2011 16:47:40 -0800" -->
<!-- isosent="20110309004740" -->
<!-- name="Amos Leffler" -->
<!-- email="amosleffler_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running openmpi-1.4.3" -->
<!-- id="AANLkTim_xqFRCcg+djLT0Sx_dQQ7XpBXTjJts-MM9b1i_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem running openmpi-1.4.3<br>
<strong>From:</strong> Amos Leffler (<em>amosleffler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 19:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15818.php">David Zhang: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15818.php">David Zhang: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15818.php">David Zhang: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am trying to get openmpi-1.4.3 to run but am having trouble.
<br>
&nbsp;It is run using SUSE-11.3 with Intel XE-2011 Composer C and Fortran
<br>
compilers.  The compilers installed without problems.  The openmpi
<br>
file was downloaded and unzipped and untarred.  The ./configure
<br>
command was run and it was found to be necessary to set CC=gcc and
<br>
CXX=g++.  The fortran F77 and F90 were set to ifort. The --prefix was
<br>
set to /usr.  The program appeared to compile properly but none of the
<br>
examples given would not compile.  The error messages are shown below:
<br>
<p>linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpicc
<br>
hello_c.c =o hello_c
<br>
mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpiCC
<br>
hello_cxx.cc -o hello_cxx
<br>
mpiCC: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpif77
<br>
hello_f77.f -o hello_f77
<br>
mpif77: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples # mpif90
<br>
hello_f90.f90 -o hello_f90
<br>
mpif90: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
linux-q2bz:/home/amosleffler/Downloads/openmpi-1.4.3/examples
<br>
<p>It is evident that the same error is present in all attempts to
<br>
compile but I don't know why it is absent.  Any help would be much
<br>
appreciated.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amos Leffler
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15818.php">David Zhang: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15816.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15818.php">David Zhang: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15818.php">David Zhang: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15819.php">Ralph Castain: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
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
