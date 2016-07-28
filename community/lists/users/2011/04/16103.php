<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 08:01:25 2011" -->
<!-- isoreceived="20110404120125" -->
<!-- sent="Mon, 04 Apr 2011 08:00:44 -0400" -->
<!-- isosent="20110404120044" -->
<!-- name="fah10_at_[hidden]" -->
<!-- email="fah10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="8CDC0D70F539626-1F20-139B_at_web-mmc-d01.sysops.aol.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D9967DE.7080901_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view<br>
<strong>From:</strong> <a href="mailto:fah10_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Deadlock%20with%20mpi_init_thread%20%2B%20mpi_file_set_view"><em>fah10_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-04-04 08:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16102.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pascal Deveze wrote:
<br>
<span class="quotelev1">&gt; Could you check that your programm closes all MPI-IO files beforecalling MPI_Finalize ?
</span><br>
<p><p>&nbsp;Yes, I checked that. All files should be closed. I've also written a small test program,
<br>
which is attached below. The output refers to openmpi-1.5.3 with threading support,
<br>
compiled with gcc.
<br>
<p>I also tried to use Intel Fortran instead of gfortran  and a similar test program written in C,
<br>
compiled with gcc or Intel C. However, the result is always the same.
<br>
<p><p>Fabian
<br>
<p><p>program mpiio
<br>
&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;integer(kind=4) :: iprov, fh, ierr
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_init_thread(MPI_THREAD_SERIALIZED, iprov, ierr)
<br>
&nbsp;&nbsp;&nbsp;if (iprov &lt; MPI_THREAD_SERIALIZED) stop 'mpi_init_thread'
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_file_open(MPI_COMM_WORLD, 'test.dat', &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_WRONLY + MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_file_close(fh, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
end program mpiio
<br>
<p><span class="quotelev1">&gt; mpif90 -g mpiio.F90
</span><br>
<span class="quotelev1">&gt; gdb ./a.out
</span><br>
(gdb) r
<br>
Starting program: a.out 
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 0xb7fddb70 (LWP 25930)]
<br>
[New Thread 0xb77dcb70 (LWP 25933)]
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
<p>Program received signal SIGABRT, Aborted.
<br>
0x0012e416 in __kernel_vsyscall ()
<br>
<p><p>&nbsp;(gdb) bt
<br>
#0  0x0012e416 in __kernel_vsyscall ()
<br>
#1  0x0047f941 in raise (sig=6) at ../nptl/sysdeps/unix/sysv/linux/raise.c:64
<br>
#2  0x00482e42 in abort () at abort.c:92
<br>
#3  0x00189239 in opal_mutex_lock (type=COMM_ATTR, key=0xbffff0f4, predefined=false) at ../opal/threads/mutex_unix.h:106
<br>
#4  ompi_attr_free_keyval (type=COMM_ATTR, key=0xbffff0f4, predefined=false) at attribute/attribute.c:649
<br>
#5  0x001c8c3c in PMPI_Keyval_free (keyval=0x0) at pkeyval_free.c:52
<br>
#6  0x006e3e8d in ADIOI_End_call (comm=0x3100e0, keyval=10, attribute_val=0x0, extra_state=0x0) at ad_end.c:82
<br>
#7  0x001895c1 in ompi_attr_delete (type=COMM_ATTR, object=0x3100e0, attr_hash=0x80cd258, key=10, predefined=true, need_lock=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at attribute/attribute.c:734
<br>
#8  0x0018995b in ompi_attr_delete_all (type=COMM_ATTR, object=0x3100e0, attr_hash=0x80cd258) at attribute/attribute.c:1043
<br>
#9  0x001aa6af in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:133
<br>
#10 0x001c06c8 in PMPI_Finalize () at pfinalize.c:46
<br>
#11 0x00151c37 in mpi_finalize_f (ierr=0xbffff2c8) at pfinalize_f.c:62
<br>
#12 0x080489fb in mpiio () at mpiio.F90:15
<br>
#13 0x08048a2b in main ()
<br>
#14 0x0046bce7 in __libc_start_main (main=0x8048a00 &lt;main&gt;, argc=1, ubp_av=0xbffff3b4, init=0x8048a50 &lt;__libc_csu_init&gt;, fini=0x8048a40 &lt;__libc_csu_fini&gt;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rtld_fini=0x11eb60 &lt;_dl_fini&gt;, stack_end=0xbffff3ac) at libc-start.c:226
<br>
#15 0x080488c1 in _start ()
<br>
<p><p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16103/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16102.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
