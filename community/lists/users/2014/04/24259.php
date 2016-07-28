<?
$subject_val = "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 16:27:28 2014" -->
<!-- isoreceived="20140425202728" -->
<!-- sent="Fri, 25 Apr 2014 21:27:25 +0100" -->
<!-- isosent="20140425202725" -->
<!-- name="Jamil Appa" -->
<!-- email="jamil.appa_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread" -->
<!-- id="796683b4-1ebc-4f81-8a5c-1954989b3e43_at_Jamils-MacBook-Pro.local" -->
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
<strong>Subject:</strong> [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread<br>
<strong>From:</strong> Jamil Appa (<em>jamil.appa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 16:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24260.php">Markus Wittmann: "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24271.php">Dave Goodell (dgoodell): "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread"</a>
<li><strong>Reply:</strong> <a href="24271.php">Dave Goodell (dgoodell): "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The following program deadlocks in mpi_finalize with OMPI 1.8.1 but works correctly with OMPI 1.6.5 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Is there a work around? 
<br>
<p>&nbsp;&nbsp;Thanks 
<br>
<p>&nbsp;Jamil 
<br>
<p>program mpiio 
<br>
use mpi
<br>
implicit none
<br>
integer(kind=4) :: iprov, fh, ierr
<br>
call mpi_init_thread(MPI_THREAD_SERIALIZED, iprov, ierr)
<br>
if (iprov &lt; MPI_THREAD_SERIALIZED) stop 'mpi_init_thread'
<br>
call mpi_file_open(MPI_COMM_WORLD, 'test.dat', &amp;
<br>
MPI_MODE_WRONLY + MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
<br>
call mpi_file_close(fh, ierr)
<br>
call mpi_finalize(ierr)
<br>
end program mpiio
<br>
<p><p>(gdb) bt 
<br>
#0  0x0000003155a0e054 in __lll_lock_wait () from /lib64/libpthread.so.0
<br>
#1  0x0000003155a09388 in _L_lock_854 () from /lib64/libpthread.so.0
<br>
#2  0x0000003155a09257 in pthread_mutex_lock () from /lib64/libpthread.so.0
<br>
#3  0x00007ffff7819f3c in ompi_attr_free_keyval () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
<br>
#4  0x00007ffff7857be1 in PMPI_Keyval_free () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
<br>
#5  0x00007ffff15b21f2 in ADIOI_End_call () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/openmpi/mca_io_romio.so
<br>
#6  0x00007ffff781a325 in ompi_attr_delete_impl () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
<br>
#7  0x00007ffff781a4ec in ompi_attr_delete_all () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
<br>
#8  0x00007ffff7832ad5 in ompi_mpi_finalize () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
<br>
#9  0x00007ffff7b12e59 in pmpi_finalize__ () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi_mpifh.so.2
<br>
#10 0x0000000000400b64 in mpiio () at t.f90:10
<br>
#11 0x0000000000400b9a in main ()
<br>
#12 0x000000315561ecdd in __libc_start_main () from /lib64/libc.so.6
<br>
#13 0x0000000000400a19 in _start ()
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24260.php">Markus Wittmann: "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24271.php">Dave Goodell (dgoodell): "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread"</a>
<li><strong>Reply:</strong> <a href="24271.php">Dave Goodell (dgoodell): "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
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
