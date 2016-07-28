<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 19 15:24:18 2006" -->
<!-- isoreceived="20061219202418" -->
<!-- sent="Tue, 19 Dec 2006 15:22:54 -0500" -->
<!-- isosent="20061219202254" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] segv at runtime with ifort" -->
<!-- id="C0BEA226-C898-45C5-B4BC-806F18FD6C49_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-12-19 15:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2381.php">Michael John Hanby: "[OMPI users] configure openmpi with support for Sun gridengine (SGE)?"</a>
<li><strong>Previous message:</strong> <a href="2379.php">Ralph H Castain: "Re: [OMPI users] crashed openmpi job fails to clean up ...."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We are getting seg faults at run time on MPI_CART_CREATE()   when  
<br>
using openmpi-1.1.2 built with the intel compilers. I have included  
<br>
all versions, code and messages bellow.  I know there were problems  
<br>
in the past, and dug around the archives but didn't find this any  
<br>
place.  Has anyone else seen this problem?
<br>
<p>The message is like so:
<br>
<p>[brockp_at_nyxtest1 bagci]$ mpirun -np 1 ./a.out
<br>
Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
<br>
Failing at addr:0x448c78
<br>
[0] func:/home/software/rhel4/openmpi-1.1.2/intel/lib/libopal.so.0  
<br>
[0x2a958dea55]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x325560c430]
<br>
[2] func:/home/software/rhel4/openmpi-1.1.2/intel/lib/libmpi.so.0 
<br>
(mpi_cart_create__+0x60) [0x2a955ef93c]
<br>
[3] func:./a.out(MAIN__+0x8c) [0x406b8c]
<br>
[4] func:./a.out(main+0x32) [0x406aea]
<br>
[5] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x325471c3fb]
<br>
[6] func:./a.out [0x406a2a]
<br>
*** End of error message ***
<br>
<p>ifort is version 9.1.037
<br>
icc icpc are version 9.1.043
<br>
<p>This problem does not happen with pgi compilers.   (version 6.1)
<br>
Both were done em64t systems  (xeon 5160's)
<br>
<p>Here is the code sample that fails.
<br>
<p>program cart
<br>
include 'mpif.h'
<br>
<p>call MPI_INIT(ierr);
<br>
call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
<br>
call MPI_COMM_RANK(MPI_COMM_WORLD, my_world_id, ierr)
<br>
call MPI_CART_CREATE(MPI_COMM_WORLD, 1, numprocs, .false., .true.,  
<br>
ITER_COMM, ierr)
<br>
call MPI_COMM_RANK(ITER_COMM,myid, ierr)
<br>
<p>call MPI_FINALIZE(ierr)
<br>
end
<br>
<p><p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2381.php">Michael John Hanby: "[OMPI users] configure openmpi with support for Sun gridengine (SGE)?"</a>
<li><strong>Previous message:</strong> <a href="2379.php">Ralph H Castain: "Re: [OMPI users] crashed openmpi job fails to clean up ...."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2410.php">Jeff Squyres: "Re: [OMPI users] segv at runtime with ifort"</a>
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
