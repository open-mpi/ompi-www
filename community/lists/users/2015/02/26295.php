<?
$subject_val = "[OMPI users] Signal code: Integer divide-by-zero";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 09:48:00 2015" -->
<!-- isoreceived="20150206144800" -->
<!-- sent="Fri, 06 Feb 2015 08:47:58 -0600" -->
<!-- isosent="20150206144758" -->
<!-- name="Tabrez Ali" -->
<!-- email="stali_at_[hidden]" -->
<!-- subject="[OMPI users] Signal code: Integer divide-by-zero" -->
<!-- id="54D4D41E.3060406_at_geology.wisc.edu" -->
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
<strong>Subject:</strong> [OMPI users] Signal code: Integer divide-by-zero<br>
<strong>From:</strong> Tabrez Ali (<em>stali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 09:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26296.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Reply:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>While trying out Cloud9 (Basically running vanilla Ubuntu 14.04 with 
<br>
OpenMPI installed from the official repository) I am getting the 
<br>
following error (below) with OpenMPI. Any ideas as to what would be wrong?
<br>
<p>Thanks in advance.
<br>
<p>Tabrez
<br>
<p>stali_at_test:~/workspace $ uname -a
<br>
Linux stali-test-1266846 3.14.13-c9 #1 SMP Tue Aug 19 16:13:44 UTC 2014 
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
stali_at_test:~/workspace $ dpkg -l | grep libopenmpi-dev
<br>
ii libopenmpi-dev 1.6.5-8 amd64 high performance message passing library 
<br>
-- header files
<br>
stali_at_test:~/workspace $ cat test.f90
<br>
program main
<br>
&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
&nbsp;&nbsp;&nbsp;call MPI_Init(ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_Finalize(ierr)
<br>
end program main
<br>
stali_at_test:~/workspace $ mpif90 test.f90
<br>
stali_at_test:~/workspace $ mpiexec -n 1 ./a.out
<br>
[stali-test-1266846:02263] *** Process received signal ***
<br>
[stali-test-1266846:02263] Signal: Floating point exception (8)
<br>
[stali-test-1266846:02263] Signal code: Integer divide-by-zero (1)
<br>
[stali-test-1266846:02263] Failing at address: 0x7f6043d7483e
<br>
[stali-test-1266846:02263] [ 0] 
<br>
/lib/x86_64-linux-gnu/libpthread.so.0(+0x10340) [0x7f604455d340]
<br>
[stali-test-1266846:02263] [ 1] 
<br>
/usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x3083e) [0x7f6043d7483e]
<br>
[stali-test-1266846:02263] [ 2] 
<br>
/usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x323a1) [0x7f6043d763a1]
<br>
[stali-test-1266846:02263] [ 3] 
<br>
/usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0x3271b) [0x7f6043d7671b]
<br>
[stali-test-1266846:02263] [ 4] 
<br>
/usr/lib/x86_64-linux-gnu/libhwloc.so.5(+0xbd4b) [0x7f6043d4fd4b]
<br>
[stali-test-1266846:02263] [ 5] 
<br>
/usr/lib/x86_64-linux-gnu/libhwloc.so.5(hwloc_topology_load+0x1a3) 
<br>
[0x7f6043d50d64]
<br>
[stali-test-1266846:02263] [ 6] 
<br>
/usr/lib/libopen-rte.so.4(orte_odls_base_open+0x7a6) [0x7f60447b47f6]
<br>
[stali-test-1266846:02263] [ 7] 
<br>
/usr/lib/openmpi/lib/openmpi/mca_ess_hnp.so(+0x2f14) [0x7f604290bf14]
<br>
[stali-test-1266846:02263] [ 8] 
<br>
/usr/lib/libopen-rte.so.4(orte_init+0x193) [0x7f604478c0f3]
<br>
[stali-test-1266846:02263] [ 9] mpiexec() [0x403e68]
<br>
[stali-test-1266846:02263] [10] mpiexec() [0x40347d]
<br>
[stali-test-1266846:02263] [11] 
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5) [0x7f60441a8ec5]
<br>
[stali-test-1266846:02263] [12] mpiexec() [0x403399]
<br>
[stali-test-1266846:02263] *** End of error message ***
<br>
Floating point exception
<br>
stali_at_test:~/workspace $
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26296.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Reply:</strong> <a href="26297.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Signal code: Integer divide-by-zero"</a>
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
