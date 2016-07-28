<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 11:22:25 2007" -->
<!-- isoreceived="20070102162225" -->
<!-- sent="Tue, 2 Jan 2007 11:21:10 -0500" -->
<!-- isosent="20070102162110" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segv at runtime with ifort" -->
<!-- id="43E31409-F610-4EEE-B9A6-4FABE83B1482_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7622E55A-B861-4D27-852E-10679959D692_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 11:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2412.php">jcolmenares_at_[hidden]: "[OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the reply, that has fixed the problem.  The code in  
<br>
questions appears to have only been ran with mpich and mpich  
<br>
derivatives in the past.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jan 2, 2007, at 9:56 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Brock --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think your test program is faulty.  For MPI_CART_CREATE, you need
</span><br>
<span class="quotelev1">&gt; to pass in an array indicating whether the dimensions are periodic or
</span><br>
<span class="quotelev1">&gt; not -- it is not sufficient to pass in a scalar logical value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, the following program seems to work fine for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program cart
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; logical periods(1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierr);
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, my_world_id, ierr)
</span><br>
<span class="quotelev1">&gt; periods(1) = .false.
</span><br>
<span class="quotelev1">&gt; call MPI_CART_CREATE(MPI_COMM_WORLD, 1, numprocs, periods, .true.,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2006, at 3:22 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are getting seg faults at run time on MPI_CART_CREATE()   when
</span><br>
<span class="quotelev2">&gt;&gt; using openmpi-1.1.2 built with the intel compilers. I have included
</span><br>
<span class="quotelev2">&gt;&gt; all versions, code and messages bellow.  I know there were problems
</span><br>
<span class="quotelev2">&gt;&gt; in the past, and dug around the archives but didn't find this any
</span><br>
<span class="quotelev2">&gt;&gt; place.  Has anyone else seen this problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The message is like so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [brockp_at_nyxtest1 bagci]$ mpirun -np 1 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x448c78
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/home/software/rhel4/openmpi-1.1.2/intel/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a958dea55]
</span><br>
<span class="quotelev2">&gt;&gt; [1] func:/lib64/tls/libpthread.so.0 [0x325560c430]
</span><br>
<span class="quotelev2">&gt;&gt; [2] func:/home/software/rhel4/openmpi-1.1.2/intel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (mpi_cart_create__+0x60) [0x2a955ef93c]
</span><br>
<span class="quotelev2">&gt;&gt; [3] func:./a.out(MAIN__+0x8c) [0x406b8c]
</span><br>
<span class="quotelev2">&gt;&gt; [4] func:./a.out(main+0x32) [0x406aea]
</span><br>
<span class="quotelev2">&gt;&gt; [5] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x325471c3fb]
</span><br>
<span class="quotelev2">&gt;&gt; [6] func:./a.out [0x406a2a]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ifort is version 9.1.037
</span><br>
<span class="quotelev2">&gt;&gt; icc icpc are version 9.1.043
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem does not happen with pgi compilers.   (version 6.1)
</span><br>
<span class="quotelev2">&gt;&gt; Both were done em64t systems  (xeon 5160's)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the code sample that fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program cart
</span><br>
<span class="quotelev2">&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_INIT(ierr);
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, my_world_id, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_CART_CREATE(MPI_COMM_WORLD, 1, numprocs, .false., .true.,
</span><br>
<span class="quotelev2">&gt;&gt; ITER_COMM, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_RANK(ITER_COMM,myid, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2412.php">jcolmenares_at_[hidden]: "[OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<!-- nextthread="start" -->
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
