<?
$subject_val = "[OMPI users] openMPI + Ubuntu 7.10 puzzling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 18:12:10 2008" -->
<!-- isoreceived="20080421221210" -->
<!-- sent="Tue, 22 Apr 2008 00:12:00 +0200" -->
<!-- isosent="20080421221200" -->
<!-- name="Vincent Rotival" -->
<!-- email="vincent.rotival_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI + Ubuntu 7.10 puzzling" -->
<!-- id="480D1130.9070609_at_polytechnique.org" -->
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
<strong>Subject:</strong> [OMPI users] openMPI + Ubuntu 7.10 puzzling<br>
<strong>From:</strong> Vincent Rotival (<em>vincent.rotival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 18:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5428.php">cfdman7_at_[hidden]: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Reply:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Reply:</strong> <a href="5446.php">Dirk Eddelbuettel: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone
<br>
<p>Sorry to bother you all about that but I am quite lost with a puzzling 
<br>
problem concerning openMPI + Ubuntu 7.10. I could not find similar 
<br>
threads on the archive
<br>
<p>I have been designing complex openMPI program with Intel Fortran 
<br>
compiler for quite some time, and everything worked perfectly until this 
<br>
morning, when everything seemed to fall apart.
<br>
<p>Basically, if I try now even the (very very) simple program below in 
<br>
Fortran 90
<br>
<p>************************************************** **
<br>
program test
<br>
use mpi
<br>
<p>integer :: mpi_err
<br>
<p>call mpi_init(mpi_err)
<br>
<p>print *, &quot;HELLO&quot;, mpi_err
<br>
<p>call mpi_finalize(mpi_err)
<br>
<p>end program test
<br>
************************************************** *
<br>
<p>This code will compile (mpif90 -o test test_mpi.f90), but gives error 
<br>
messages at the level of MPI_INIT, whether I call it with
<br>
<span class="quotelev1"> &gt; ./test
</span><br>
or
<br>
<span class="quotelev1"> &gt; mpirun -np N test
</span><br>
<p>vrotival_at_vrotival-laptop:~/Work/workbench$ ./test
<br>
[vrotival-laptop:06375] *** Process received signal ***
<br>
[vrotival-laptop:06375] Signal: Segmentation fault (11)
<br>
[vrotival-laptop:06375] Signal code: Address not mapped (1)
<br>
[vrotival-laptop:06375] Failing at address: 0x8
<br>
[vrotival-laptop:06375] [ 0] [0xffffe440]
<br>
[vrotival-laptop:06375] [ 1] /usr/lib/libmpi.so.0(ompi_proc_init+0x13b) 
<br>
[0xb7f0863b]
<br>
[vrotival-laptop:06375] [ 2] /usr/lib/libmpi.so.0(ompi_mpi_init+0x10c) 
<br>
[0xb7f09fbc]
<br>
[vrotival-laptop:06375] [ 3] /usr/lib/libmpi.so.0(MPI_Init+0xab) 
<br>
[0xb7f2b22b]
<br>
[vrotival-laptop:06375] [ 4] 
<br>
/usr/local/lib/libmpi_f77.so.0(PMPI_INIT+0x32) [0xb7fd78d2]
<br>
[vrotival-laptop:06375] [ 5] ./test(MAIN__+0x24) [0x804dfe4]
<br>
[vrotival-laptop:06375] [ 6] ./test(main+0x3d) [0x804dfb1]
<br>
[vrotival-laptop:06375] [ 7] 
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe 0) [0xb7a39050]
<br>
[vrotival-laptop:06375] [ 8] ./test [0x804df11]
<br>
[vrotival-laptop:06375] *** End of error message ***
<br>
<p><p><p><p>I am using openMPI version 1.2.6 (but same bug occured with 1.2.5), 
<br>
which I compile directly from the source from www.openmpi.org 
<br>
&lt;<a href="http://www.openmpi.org">http://www.openmpi.org</a>&gt;, with F90=ifort with Intel Fortran 10.1
<br>
I have not updated ifort since about 6 months, the only change between 
<br>
last time I used MPI are small Ubuntu updates..... I can give you much 
<br>
more complex codes which worked perfectly one week ago
<br>
<p>As a small comment, the ouput from ompi_info is also weird
<br>
<p>vrotival_at_vrotival-laptop:~/Work/workbench$ ompi_info --all
<br>
ompi_info: Symbol `mca_allocator_base_components' has different size in 
<br>
shared object, consider re-linking
<br>
ompi_info: symbol lookup error: ompi_info: undefined symbol: 
<br>
ompi_mtl_base_components_opened
<br>
<p>but I hadn't looked at it before the bug
<br>
<p><p><p><p><p>Has anyone else encountered this bug ? can it be relaed to recent 
<br>
updates in Ubuntu (although I do not want to incriminate it at first)
<br>
<p>I am upgrading my Ubuntu with the following repositories
<br>
<p>deb <a href="http://archive.canonical.com/ubuntu">http://archive.canonical.com/ubuntu</a> gutsy partner
<br>
deb-src <a href="http://archive.canonical.com/ubuntu">http://archive.canonical.com/ubuntu</a> gutsy partner
<br>
deb <a href="http://archive.ubuntu.com/ubuntu/">http://archive.ubuntu.com/ubuntu/</a> gutsy main universe restricted 
<br>
multiverse
<br>
deb <a href="http://security.ubuntu.com/ubuntu/">http://security.ubuntu.com/ubuntu/</a> gutsy-security universe main 
<br>
multiverse restricted
<br>
deb <a href="http://archive.ubuntu.com/ubuntu/">http://archive.ubuntu.com/ubuntu/</a> gutsy-updates universe main 
<br>
multiverse restricted
<br>
<p><p>If anyone has any advice it would be greatly appreciated (and would save 
<br>
my PhD as a byproduct )
<br>
<p>Cheers !
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5428.php">cfdman7_at_[hidden]: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Reply:</strong> <a href="5429.php">Adrian Knoth: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<li><strong>Reply:</strong> <a href="5446.php">Dirk Eddelbuettel: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
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
