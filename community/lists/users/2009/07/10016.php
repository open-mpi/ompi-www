<?
$subject_val = "[OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 12:27:37 2009" -->
<!-- isoreceived="20090720162737" -->
<!-- sent="Mon, 20 Jul 2009 18:27:22 +0200" -->
<!-- isosent="20090720162722" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed" -->
<!-- id="4A649AEA.1020109_at_59A2.org" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 12:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This helped me track down a leaked file descriptor, but I think the
<br>
order of events is not desirable.  If an MPIIO file descriptor is not
<br>
closed before MPI_Finalize, I get the following.
<br>
<p><p>*** An error occurred in MPI_Barrier
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[brakk:1193] Abort after MPI_FINALIZE completed successfully; not able to guarantee that all other processes were killed!
<br>
[Switching to Thread 0x7fa523b78710 (LWP 1193)]
<br>
<p>Breakpoint 2, 0x00007fa51ed39a20 in exit () from /lib/libc.so.6
<br>
(gdb) bt
<br>
#0  0x00007fa51ed39a20 in exit () from /lib/libc.so.6
<br>
#1  0x00007fa520ff6613 in ompi_mpi_abort () from /usr/lib/libmpi.so.0
<br>
#2  0x00007fa520fe59b7 in ompi_mpi_errors_are_fatal_comm_handler () from /usr/lib/libmpi.so.0
<br>
#3  0x00007fa52100acb2 in PMPI_Barrier () from /usr/lib/libmpi.so.0
<br>
#4  0x00007fa52106638a in mca_io_romio_dist_MPI_File_close () from /usr/lib/libmpi.so.0
<br>
#5  0x00007fa520feaa2e in file_destructor () from /usr/lib/libmpi.so.0
<br>
#6  0x00007fa520fea7c1 in ompi_file_finalize () from /usr/lib/libmpi.so.0
<br>
#7  0x00007fa520ff7496 in ompi_mpi_finalize () from /usr/lib/libmpi.so.0
<br>
#8  0x00007fa5233bc2d1 in PetscFinalize () at pinit.c:897
<br>
#9  0x0000000000402091 in main (argc=1, args=0x7fff70f1f498) at ex5.c:72
<br>
<p><p><p>Open MPI 1.3.3, GCC-4.4.0
<br>
Linux brakk 2.6.30-ARCH #1 SMP PREEMPT Fri Jun 19 20:44:03 UTC 2009 x86_64 Intel(R) Core(TM)2 Duo CPU T9300 @ 2.50GHz GenuineIntel GNU/Linux
<br>
<p>Jed
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10016/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
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
