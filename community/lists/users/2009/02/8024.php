<?
$subject_val = "[OMPI users] openmpi/ib noob question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 19:40:27 2009" -->
<!-- isoreceived="20090212004027" -->
<!-- sent="Wed, 11 Feb 2009 16:01:15 -0500" -->
<!-- isosent="20090211210115" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi/ib noob question" -->
<!-- id="49933C9B.5090609_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1234355903.29157.104.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] openmpi/ib noob question<br>
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 16:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Previous message:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>In reply to:</strong> <a href="8017.php">&#197;ke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Reply:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When running the followng program on 4 of my nodes I get the expected 
<br>
response:
<br>
<p>&quot;/usr/local/bin/mpirun --mca btl tcp,self,openib --hostfile ibnodes -np 
<br>
4 hello_c&quot;
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 3 of 4
<br>
<p>But when I run it with ^TCP &quot;/usr/local/bin/mpirun --mca btl 
<br>
^tcp,self,openib --hostfile ibnodes -np 4 hello_c&quot;
<br>
<p>I get the following:.  Does this mean my mpi (openmpi 1.3) is not 
<br>
configured properly w/ ib support?
<br>
<p>Thanks for any help you can give me.
<br>
Gary
<br>
<p><p>*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
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
<p>&nbsp;&nbsp;Process 1 ([[7579,1],1]) is on host: compute-0-1.local
<br>
&nbsp;&nbsp;Process 2 ([[7579,1],0]) is on host: 11
<br>
&nbsp;&nbsp;BTLs attempted: sm
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
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[compute-0-1.local:1763] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-0.local:12308] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-3.local:14123] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-2.local:19185] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 1763 on
<br>
node 11.2.0.1 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[dahl.calvin.edu:21712] 3 more processes have sent help message 
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
[dahl.calvin.edu:21712] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
<br>
0 to see all help / error messages
<br>
[dahl.calvin.edu:21712] 3 more processes have sent help message 
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Previous message:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>In reply to:</strong> <a href="8017.php">&#197;ke Sandgren: "[OMPI users] Bug in openmpi 1.3 orte/mca/plm/tm/Makefile.am"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Reply:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
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
