<?
$subject_val = "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 13:21:02 2014" -->
<!-- isoreceived="20140429172102" -->
<!-- sent="Tue, 29 Apr 2014 17:21:01 +0000" -->
<!-- isosent="20140429172101" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread" -->
<!-- id="6ACA2060-CC53-4B79-AFDC-32888FCF32D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="796683b4-1ebc-4f81-8a5c-1954989b3e43_at_Jamils-MacBook-Pro.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with	mpi_init_thread<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 13:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24270.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know of any workaround.  I've created a ticket to track this, but it probably won't be very high priority in the short term:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4575">https://svn.open-mpi.org/trac/ompi/ticket/4575</a>
<br>
<p>-Dave
<br>
<p>On Apr 25, 2014, at 3:27 PM, Jamil Appa &lt;jamil.appa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hi 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The following program deadlocks in mpi_finalize with OMPI 1.8.1 but works correctly with OMPI 1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Is there a work around?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Jamil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program mpiio
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; integer(kind=4) :: iprov, fh, ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init_thread(MPI_THREAD_SERIALIZED, iprov, ierr)
</span><br>
<span class="quotelev1">&gt; if (iprov &lt; MPI_THREAD_SERIALIZED) stop 'mpi_init_thread'
</span><br>
<span class="quotelev1">&gt; call mpi_file_open(MPI_COMM_WORLD, 'test.dat', &amp;
</span><br>
<span class="quotelev1">&gt; MPI_MODE_WRONLY + MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_file_close(fh, ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program mpiio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000003155a0e054 in __lll_lock_wait () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x0000003155a09388 in _L_lock_854 () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000003155a09257 in pthread_mutex_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7819f3c in ompi_attr_free_keyval () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff7857be1 in PMPI_Keyval_free () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007ffff15b21f2 in ADIOI_End_call () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffff781a325 in ompi_attr_delete_impl () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffff781a4ec in ompi_attr_delete_all () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffff7832ad5 in ompi_mpi_finalize () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #9  0x00007ffff7b12e59 in pmpi_finalize__ () from /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi_mpifh.so.2
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400b64 in mpiio () at t.f90:10
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000400b9a in main ()
</span><br>
<span class="quotelev1">&gt; #12 0x000000315561ecdd in __libc_start_main () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000400a19 in _start ()
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24272.php">Vince Grimes: "Re: [OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24270.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
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
