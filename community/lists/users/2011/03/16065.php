<?
$subject_val = "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 13:04:12 2011" -->
<!-- isoreceived="20110331170412" -->
<!-- sent="Thu, 31 Mar 2011 13:03:50 -0400" -->
<!-- isosent="20110331170350" -->
<!-- name="fah10_at_[hidden]" -->
<!-- email="fah10_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="8CDBDDCBDFF19AD-1BC8-95BE_at_web-mmc-m05.sysops.aol.com" -->
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
<strong>Subject:</strong> [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view<br>
<strong>From:</strong> <a href="mailto:fah10_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Deadlock%20with%20mpi_init_thread%20%2B%20mpi_file_set_view"><em>fah10_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-03-31 13:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>Previous message:</strong> <a href="16064.php">Hellm&#252;ller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16067.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16067.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I've compiled Open-MPI 1.4.3 with --enable-mpi-threads and I'm always
<br>
getting a deadlock when calling mpi_file_set_view. 
<br>
The Fortran program which calls the routines hasn't opened any extra
<br>
thread when the error occurs.
<br>
The program works fine when I use (mpi_init instead of mpi_init_thread
<br>
(MPI_THREAD_SERIALIZED)) or (start the program with only 1 mpi process)
<br>
On abort, I'm getting the backtrace attached below.
<br>
&nbsp;&nbsp;
<br>
Does anyone know how to fix this?
<br>
<p>Thanks!
<br>
Fabian
<br>
<p>opal_mutex_lock(): Resource deadlock avoided
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
[user-laptop:11016] *** Process received signal ***
<br>
[user-laptop:11016] Signal: Aborted (6)
<br>
[user-laptop:11016] Signal code:  (-6)
<br>
[user-laptop:11015] *** Process received signal ***
<br>
[user-laptop:11015] Signal: Aborted (6)
<br>
[user-laptop:11015] Signal code:  (-6)
<br>
[user-laptop:11016] [ 0] [0x5e940c]
<br>
[user-laptop:11016] [ 1] /lib/libc.so.6(abort+0x182) [0x9149e42]
<br>
[user-laptop:11016] [ 2] /home/user/local/openmpi-gcc/lib/openmpi/mca_io_romio.so(+0x5950) [0x606950]
<br>
[user-laptop:11016] [ 3] /home/user/local/openmpi-gcc/lib/openmpi/mca_io_romio.so(+0x61ad) [0x6071ad]
<br>
[user-laptop:11015] [ 0] [0x7a440c]
<br>
[user-laptop:11015] [ 1] /lib/libc.so.6(abort+0x182) [0x7fee42]
<br>
[user-laptop:11015] [ 2] /home/user/local/openmpi-gcc/lib/openmpi/mca_io_romio.so(+0x5950) [0xa1d950]
<br>
[user-laptop:11015] [ 3] /home/user/local/openmpi-gcc/lib/openmpi/mca_io_romio.so(+0x61ad) [0xa1e1ad]
<br>
[user-laptop:11015] [ 4] /home/user/local/openmpi-gcc/lib/libmpi.so.0(mca_io_base_component_run_progress+0x7b) [0x6882f0]
<br>
[user-laptop:11015] [ 5] /home/user/local/openmpi-gcc/lib/libopen-pal.so.0(opal_progress+0xf0) [0x4f25eb]
<br>
[user-laptop:11015] [ 6] /home/user/local/openmpi-gcc/lib/libmpi.so.0(+0x3fb04) [0x612b04]
<br>
[user-laptop:11015] [ 7] /home/user/local/openmpi-gcc/lib/libmpi.so.0(+0x4002f) [0x61302f]
<br>
[user-laptop:11015] [ 8] /home/user/local/openmpi-gcc/lib/openmpi/mca_coll_tuned.so(+0x1c61) [0x9d2c61]
<br>
[user-laptop:11015] [ 9] /home/user/local/openmpi-gcc/lib/openmpi/mca_coll_tuned.so(+0xdd83) [0x9ded83]
<br>
[user-laptop:11015] [10] /home/user/local/openmpi-gcc/lib/openmpi/mca_coll_tuned.so(+0x221b) [0x9d321b]
<br>
[user-laptop:11015] [11] /home/user/local/openmpi-gcc/lib/libmpi.so.0(MPI_Barrier+0xff) [0x638c6a]
<br>
[user-laptop:11015] [12] /home/user/local/openmpi-gcc/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_set_view+0x588) [0xa46fa4]
<br>
[user-laptop:11015] [13] /home/user/local/openmpi-gcc/lib/openmpi/mca_io_romio.so(+0x6830) [0xa1e830]
<br>
[user-laptop:11015] [14] /home/user/local/openmpi-gcc/lib/libmpi.so.0(PMPI_File_set_view+0x1d8) [0x679e2f]
<br>
[user-laptop:11015] [15] /home/user/local/openmpi-gcc/lib/libmpi_f77.so.0(mpi_file_set_view+0xfe) [0x46c855]
<br>
[user-laptop:11015] [16] ./main.ia32(__modoutput_MOD_fop_open+0x1f1) [0x816a1ab]
<br>
<p><p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16065/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16066.php">Tru Huynh: "Re: [OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>Previous message:</strong> <a href="16064.php">Hellm&#252;ller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16067.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16067.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
