<?
$subject_val = "[OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 07:13:39 2014" -->
<!-- isoreceived="20140903111339" -->
<!-- sent="Wed, 3 Sep 2014 13:13:04 +0200 (CEST)" -->
<!-- isosent="20140903111304" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C" -->
<!-- id="201409031113.s83BD4mt004395_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 07:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.9a1r32664 on my machines (Solaris
<br>
10 Sparc (tyr), Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1
<br>
x86_64 (linpc1)) with Sun C 5.12 and gcc-4.9.0.
<br>
<p>I get the following internal failure for my Sun C version on
<br>
Linux.
<br>
<p><p>linpc1 small_prog 112 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32664
<br>
linpc1 small_prog 113 mpicc init_finalize.c 
<br>
linpc1 small_prog 114 mpiexec -np 1 a.out 
<br>
Hello!
<br>
linpc1 small_prog 115 mpiexec -np 2 a.out
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_proc_complete_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;(null)&quot; (-27) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc1:27027] 1 more process has sent help message help-mpi-runtime.txt / 
<br>
mpi_init:startup:internal-failure
<br>
[linpc1:27027] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help 
<br>
/ error messages
<br>
linpc1 small_prog 116 
<br>
<p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
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
