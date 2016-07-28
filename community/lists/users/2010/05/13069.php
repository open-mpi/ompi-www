<?
$subject_val = "[OMPI users] init of component openib returned failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 06:18:31 2010" -->
<!-- isoreceived="20100518101831" -->
<!-- sent="Tue, 18 May 2010 12:18:25 +0200" -->
<!-- isosent="20100518101825" -->
<!-- name="Peter Kruse" -->
<!-- email="pk_at_[hidden]" -->
<!-- subject="[OMPI users] init of component openib returned failure" -->
<!-- id="4BF26971.50602_at_q-leap.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] init of component openib returned failure<br>
<strong>From:</strong> Peter Kruse (<em>pk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 06:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13070.php">Stefan Kuhne: "[OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>Previous message:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Reply:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>trying to run Intel MPI Benchmarks with OpenMPI 1.4.1 fails in initializing
<br>
the component openib.  System is Debian GNU/Linux 5.0.4.
<br>
The command to start the job (under Torque 2.4.7) was:
<br>
<p>mpirun.openmpi-1.4.1 --mca btl_base_verbose 50  --mca btl self,openib -n 2 
<br>
./IMB-MPI1 -npmin 2 PingPong
<br>
<p>and results in these messages:
<br>
<p>----------------------------8&lt;----------------------------------------------
<br>
<p>[beo-15:20933] mca: base: components_open: Looking for btl components
<br>
[beo-16:20605] mca: base: components_open: Looking for btl components
<br>
[beo-15:20933] mca: base: components_open: opening btl components
<br>
[beo-15:20933] mca: base: components_open: found loaded component openib
<br>
[beo-15:20933] mca: base: components_open: component openib has no register 
<br>
function
<br>
[beo-15:20933] mca: base: components_open: component openib open function 
<br>
successful
<br>
[beo-15:20933] mca: base: components_open: found loaded component self
<br>
[beo-15:20933] mca: base: components_open: component self has no register function
<br>
[beo-15:20933] mca: base: components_open: component self open function successful
<br>
[beo-16:20605] mca: base: components_open: opening btl components
<br>
[beo-16:20605] mca: base: components_open: found loaded component openib
<br>
[beo-16:20605] mca: base: components_open: component openib has no register 
<br>
function
<br>
[beo-16:20605] mca: base: components_open: component openib open function 
<br>
successful
<br>
[beo-16:20605] mca: base: components_open: found loaded component self
<br>
[beo-16:20605] mca: base: components_open: component self has no register function
<br>
[beo-16:20605] mca: base: components_open: component self open function successful
<br>
[beo-15:20933] select: initializing btl component openib
<br>
[beo-15:20933] select: init of component openib returned failure
<br>
[beo-15:20933] select: module openib unloaded
<br>
[beo-15:20933] select: initializing btl component self
<br>
[beo-15:20933] select: init of component self returned success
<br>
[beo-16:20605] select: initializing btl component openib
<br>
[beo-16:20605] select: init of component openib returned failure
<br>
[beo-16:20605] select: module openib unloaded
<br>
[beo-16:20605] select: initializing btl component self
<br>
[beo-16:20605] select: init of component self returned success
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[4887,1],0]) is on host: beo-15
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[4887,1],1]) is on host: beo-16
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[beo-15:20933] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
orterun has exited due to process rank 0 with PID 20933 on
<br>
node beo-15 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by orterun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[beo-16:20605] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
[beo-15:20930] 1 more process has sent help message help-mca-bml-r2.txt / 
<br>
unreachable proc
<br>
[beo-15:20930] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all 
<br>
help / error messages
<br>
[beo-15:20930] 1 more process has sent help message help-mpi-runtime / 
<br>
mpi_init:startup:internal-failure
<br>
<p>----------------------------8&lt;----------------------------------------------
<br>
<p>running another Benchmark (OSU) succeeds in loading the openib component.
<br>
<p>&quot;ibstat |grep -i state&quot; on both nodes gives:
<br>
<p>----------------------------8&lt;----------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: Active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical state: LinkUp
<br>
----------------------------8&lt;----------------------------------------------
<br>
<p>Running with &quot;mpi_abort_delay -1&quot; and attaching an strace on the process
<br>
is not very helpful it loops with:
<br>
<p>----------------------------8&lt;----------------------------------------------
<br>
rt_sigprocmask(SIG_BLOCK, [CHLD], [], 8) = 0
<br>
rt_sigaction(SIGCHLD, NULL, {0x2aee58ff3250, [CHLD], SA_RESTORER|SA_RESTART, 
<br>
0x2aee59d44f60}, 8) = 0
<br>
rt_sigprocmask(SIG_SETMASK, [], NULL, 8) = 0
<br>
nanosleep({5, 0}, {5, 0})               = 0
<br>
----------------------------8&lt;----------------------------------------------
<br>
<p>Does anybody have an idea what is wrong or how can we get more debugging
<br>
information about the initialization of the openib module?
<br>
<p>Thanks for any help,
<br>
<p>&nbsp;&nbsp;&nbsp;Peter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13070.php">Stefan Kuhne: "[OMPI users] default hostfile (Ubuntu-9.10)"</a>
<li><strong>Previous message:</strong> <a href="13068.php">Ralph Castain: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Reply:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
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
