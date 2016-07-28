<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 19 15:40:00 2006" -->
<!-- isoreceived="20061119204000" -->
<!-- sent="Sun, 19 Nov 2006 21:40:26 +0100" -->
<!-- isosent="20061119204026" -->
<!-- name="trasz_at_[hidden]" -->
<!-- email="trasz_at_[hidden]" -->
<!-- subject="[OMPI users] IMB-EXT problems" -->
<!-- id="20061119204026.GA35640_at_pin.if.uz.zgora.pl" -->
<!-- charset="iso-8859-2" -->
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
<strong>From:</strong> <a href="mailto:trasz_at_[hidden]?Subject=Re:%20[OMPI%20users]%20IMB-EXT%20problems"><em>trasz_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-19 15:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2188.php">Lydia Heck: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Previous message:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run IMB-EXT (part of Intel MPI Benchmark 3.0) with OpenMPI-1.1.2,
<br>
on FreeBSD 6.2-PRERELEASE on x86.
<br>
<p>[trasz_at_traszkan:~]$ mpirun -np 2 IMB-EXT
<br>
#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V3.0, MPI-2 part
<br>
#---------------------------------------------------
<br>
# Date                  : Sun Nov 19 21:33:46 2006
<br>
# Machine               : i386
<br>
# System                : FreeBSD
<br>
# Release               : 6.2-PRERELEASE
<br>
# Version               : FreeBSD 6.2-PRERELEASE #1: Mon Oct 30 07:41:21 CET 2006     trasz_at_traszkan.ds7:/usr/obj/usr/src/sys/TRASHCAN
<br>
# MPI Version           : 2.0
<br>
# MPI Thread Environment: MPI_THREAD_SINGLE
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   4194304
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># Window
<br>
# Unidir_Get
<br>
# Unidir_Put
<br>
# Bidir_Get
<br>
# Bidir_Put
<br>
# Accumulate
<br>
[traszkan.ds7:10583] *** An error occurred in MPI_Win_free
<br>
[traszkan.ds7:10583] *** on win
<br>
[traszkan.ds7:10583] *** MPI_ERR_RMA_SYNC: error while executing rma sync
<br>
[traszkan.ds7:10583] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[traszkan.ds7:10584] *** An error occurred in MPI_Win_free
<br>
[traszkan.ds7:10584] *** on win
<br>
[traszkan.ds7:10584] *** MPI_ERR_RMA_SYNC: error while executing rma sync
<br>
[traszkan.ds7:10584] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 additional process aborted (not shown)
<br>
<p>This is single CPU machine, not part of any cluster.  Running with '-np 1'
<br>
results in the same problem, only faster.  The same test with MPICH2 works
<br>
without problems.  Any clues?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2188.php">Lydia Heck: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>Previous message:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
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
