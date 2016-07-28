<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 09:46:10 2011" -->
<!-- isoreceived="20110404134610" -->
<!-- sent="Mon, 04 Apr 2011 15:46:00 +0200" -->
<!-- isosent="20110404134600" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="4D99CB98.9090007_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8CDC0D70F539626-1F20-139B_at_web-mmc-d01.sysops.aol.com" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 09:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16105.php">Rob Latham: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<li><strong>Previous message:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why don't you use the command &quot;mpirun&quot; to run your mpi programm ?
<br>
<p>Pascal
<br>
<p>fah10_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Pascal Deveze wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Could you check that your programm closes all MPI-IO files before 
</span><br>
<span class="quotelev1">&gt; calling MPI_Finalize ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I checked that. All files should be closed. I've also written a 
</span><br>
<span class="quotelev1">&gt; small test program,
</span><br>
<span class="quotelev1">&gt; which is attached below. The output refers to openmpi-1.5.3 with 
</span><br>
<span class="quotelev1">&gt; threading support,
</span><br>
<span class="quotelev1">&gt; compiled with gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried to use Intel Fortran instead of gfortran and a similar 
</span><br>
<span class="quotelev1">&gt; test program written in C,
</span><br>
<span class="quotelev1">&gt; compiled with gcc or Intel C. However, the result is always the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program mpiio
</span><br>
<span class="quotelev1">&gt;    use mpi
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    integer(kind=4) :: iprov, fh, ierr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_init_thread(MPI_THREAD_SERIALIZED, iprov, ierr)
</span><br>
<span class="quotelev1">&gt;    if (iprov &lt; MPI_THREAD_SERIALIZED) stop 'mpi_init_thread'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_file_open(MPI_COMM_WORLD, 'test.dat', &amp;
</span><br>
<span class="quotelev1">&gt;         MPI_MODE_WRONLY + MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_file_close(fh, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program mpiio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 -g mpiio.F90
</span><br>
<span class="quotelev2">&gt; &gt; gdb ./a.out
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; Starting program: a.out
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 0xb7fddb70 (LWP 25930)]
</span><br>
<span class="quotelev1">&gt; [New Thread 0xb77dcb70 (LWP 25933)]
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGABRT, Aborted.
</span><br>
<span class="quotelev1">&gt; 0x0012e416 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0012e416 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt; #1  0x0047f941 in raise (sig=6) at 
</span><br>
<span class="quotelev1">&gt; ../nptl/sysdeps/unix/sysv/linux/raise.c:64
</span><br>
<span class="quotelev1">&gt; #2  0x00482e42 in abort () at abort.c:92
</span><br>
<span class="quotelev1">&gt; #3  0x00189239 in opal_mutex_lock (type=COMM_ATTR, key=0xbffff0f4, 
</span><br>
<span class="quotelev1">&gt; predefined=false) at ../opal/threads/mutex_unix.h:106
</span><br>
<span class="quotelev1">&gt; #4  ompi_attr_free_keyval (type=COMM_ATTR, key=0xbffff0f4, 
</span><br>
<span class="quotelev1">&gt; predefined=false) at attribute/attribute.c:649
</span><br>
<span class="quotelev1">&gt; #5  0x001c8c3c in PMPI_Keyval_free (keyval=0x0) at pkeyval_free.c:52
</span><br>
<span class="quotelev1">&gt; #6  0x006e3e8d in ADIOI_End_call (comm=0x3100e0, keyval=10, 
</span><br>
<span class="quotelev1">&gt; attribute_val=0x0, extra_state=0x0) at ad_end.c:82
</span><br>
<span class="quotelev1">&gt; #7  0x001895c1 in ompi_attr_delete (type=COMM_ATTR, object=0x3100e0, 
</span><br>
<span class="quotelev1">&gt; attr_hash=0x80cd258, key=10, predefined=true, need_lock=false)
</span><br>
<span class="quotelev1">&gt;     at attribute/attribute.c:734
</span><br>
<span class="quotelev1">&gt; #8  0x0018995b in ompi_attr_delete_all (type=COMM_ATTR, 
</span><br>
<span class="quotelev1">&gt; object=0x3100e0, attr_hash=0x80cd258) at attribute/attribute.c:1043
</span><br>
<span class="quotelev1">&gt; #9  0x001aa6af in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:133
</span><br>
<span class="quotelev1">&gt; #10 0x001c06c8 in PMPI_Finalize () at pfinalize.c:46
</span><br>
<span class="quotelev1">&gt; #11 0x00151c37 in mpi_finalize_f (ierr=0xbffff2c8) at pfinalize_f.c:62
</span><br>
<span class="quotelev1">&gt; #12 0x080489fb in mpiio () at mpiio.F90:15
</span><br>
<span class="quotelev1">&gt; #13 0x08048a2b in main ()
</span><br>
<span class="quotelev1">&gt; #14 0x0046bce7 in __libc_start_main (main=0x8048a00 &lt;main&gt;, argc=1, 
</span><br>
<span class="quotelev1">&gt; ubp_av=0xbffff3b4, init=0x8048a50 &lt;__libc_csu_init&gt;, fini=0x8048a40 
</span><br>
<span class="quotelev1">&gt; &lt;__libc_csu_fini&gt;,
</span><br>
<span class="quotelev1">&gt;     rtld_fini=0x11eb60 &lt;_dl_fini&gt;, stack_end=0xbffff3ac) at 
</span><br>
<span class="quotelev1">&gt; libc-start.c:226
</span><br>
<span class="quotelev1">&gt; #15 0x080488c1 in _start ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16105.php">Rob Latham: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<li><strong>Previous message:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
