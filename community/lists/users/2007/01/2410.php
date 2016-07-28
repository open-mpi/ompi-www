<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 09:56:48 2007" -->
<!-- isoreceived="20070102145648" -->
<!-- sent="Tue, 2 Jan 2007 09:56:34 -0500" -->
<!-- isosent="20070102145634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segv at runtime with ifort" -->
<!-- id="7622E55A-B861-4D27-852E-10679959D692_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0BEA226-C898-45C5-B4BC-806F18FD6C49_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 09:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2380.php">Brock Palen: "[OMPI users] segv at runtime with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Reply:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock --
<br>
<p>I think your test program is faulty.  For MPI_CART_CREATE, you need  
<br>
to pass in an array indicating whether the dimensions are periodic or  
<br>
not -- it is not sufficient to pass in a scalar logical value.
<br>
<p>For example, the following program seems to work fine for me:
<br>
<p>program cart
<br>
include 'mpif.h'
<br>
<p>logical periods(1)
<br>
<p>call MPI_INIT(ierr);
<br>
call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
<br>
call MPI_COMM_RANK(MPI_COMM_WORLD, my_world_id, ierr)
<br>
periods(1) = .false.
<br>
call MPI_CART_CREATE(MPI_COMM_WORLD, 1, numprocs, periods, .true.,  
<br>
ITER_COMM, ierr)
<br>
call MPI_COMM_RANK(ITER_COMM,myid, ierr)
<br>
<p>call MPI_FINALIZE(ierr)
<br>
end
<br>
<p><p><p><p>On Dec 19, 2006, at 3:22 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are getting seg faults at run time on MPI_CART_CREATE()   when
</span><br>
<span class="quotelev1">&gt; using openmpi-1.1.2 built with the intel compilers. I have included
</span><br>
<span class="quotelev1">&gt; all versions, code and messages bellow.  I know there were problems
</span><br>
<span class="quotelev1">&gt; in the past, and dug around the archives but didn't find this any
</span><br>
<span class="quotelev1">&gt; place.  Has anyone else seen this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message is like so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brockp_at_nyxtest1 bagci]$ mpirun -np 1 ./a.out
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x448c78
</span><br>
<span class="quotelev1">&gt; [0] func:/home/software/rhel4/openmpi-1.1.2/intel/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; [0x2a958dea55]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/tls/libpthread.so.0 [0x325560c430]
</span><br>
<span class="quotelev1">&gt; [2] func:/home/software/rhel4/openmpi-1.1.2/intel/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (mpi_cart_create__+0x60) [0x2a955ef93c]
</span><br>
<span class="quotelev1">&gt; [3] func:./a.out(MAIN__+0x8c) [0x406b8c]
</span><br>
<span class="quotelev1">&gt; [4] func:./a.out(main+0x32) [0x406aea]
</span><br>
<span class="quotelev1">&gt; [5] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x325471c3fb]
</span><br>
<span class="quotelev1">&gt; [6] func:./a.out [0x406a2a]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort is version 9.1.037
</span><br>
<span class="quotelev1">&gt; icc icpc are version 9.1.043
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem does not happen with pgi compilers.   (version 6.1)
</span><br>
<span class="quotelev1">&gt; Both were done em64t systems  (xeon 5160's)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the code sample that fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program cart
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierr);
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, my_world_id, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_CART_CREATE(MPI_COMM_WORLD, 1, numprocs, .false., .true.,
</span><br>
<span class="quotelev1">&gt; ITER_COMM, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK(ITER_COMM,myid, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2411.php">Jeff Squyres: "Re: [OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<li><strong>Previous message:</strong> <a href="2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/12/2380.php">Brock Palen: "[OMPI users] segv at runtime with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Reply:</strong> <a href="2413.php">Brock Palen: "Re: [OMPI users] segv at runtime with ifort"</a>
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
