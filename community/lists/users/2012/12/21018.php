<?
$subject_val = "[OMPI users] 1.6.2 affinity failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 19:34:32 2012" -->
<!-- isoreceived="20121220003432" -->
<!-- sent="Wed, 19 Dec 2012 19:34:26 -0500" -->
<!-- isosent="20121220003426" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] 1.6.2 affinity failures" -->
<!-- id="ABBD483E-0252-4758-BD22-78BAFC860C12_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] 1.6.2 affinity failures<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 19:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Previous message:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Reply:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using openmpi 1.6.2 with intel 13.0  though the problem not specific to the compiler.
<br>
<p>Using two 12 core 2 socket nodes, 
<br>
<p>mpirun -np 4 -npersocket 2 uptime
<br>
--------------------------------------------------------------------------
<br>
Your job has requested a conflicting number of processes for the
<br>
application:
<br>
<p>App: uptime
<br>
number of procs:  4
<br>
<p>This is more processes than we can launch under the following
<br>
additional directives and conditions:
<br>
<p>number of sockets:   0
<br>
npersocket:   2
<br>
<p><p>Any idea why this wouldn't work?  
<br>
<p>Another problem the following does what I expect,  two 2 socket 8 core sockets. 16 total cores/node.
<br>
<p>mpirun -np 8 -npernode 4 -bind-to-core -cpus-per-rank 4 hwloc-bind --get
<br>
0x0000000f
<br>
0x0000000f
<br>
0x000000f0
<br>
0x000000f0
<br>
0x00000f00
<br>
0x00000f00
<br>
0x0000f000
<br>
0x0000f000
<br>
<p>But fails at large scale:
<br>
<p>mpirun -np 276 -npernode 4 -bind-to-core -cpus-per-rank 4 hwloc-bind --get
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor.
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M).  Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host.
<br>
You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Previous message:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>Reply:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
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
