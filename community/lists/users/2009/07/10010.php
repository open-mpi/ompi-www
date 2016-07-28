<?
$subject_val = "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 07:19:28 2009" -->
<!-- isoreceived="20090720111928" -->
<!-- sent="Mon, 20 Jul 2009 15:03:11 +0530" -->
<!-- isosent="20090720093311" -->
<!-- name="Hardik Patel" -->
<!-- email="hardikk.patel_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm" -->
<!-- id="00bc01ca091d$193d26a0$2b0ea8c0_at_EICPU1163" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm<br>
<strong>From:</strong> Hardik Patel (<em>hardikk.patel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 05:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10011.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="10009.php">Kartik: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>We are running open MPI 1.3.2 with OFED1.5. we have 8 node cluster with 10Gb Iwarp ethernet card. 
<br>
<p>Node name are as below n130,n131,n132,n133,n134,n135,n136,n137. Respective 10GB hostname are n130x,n131x..... n137x. 
<br>
<p>we have /root/mpd.hosts entry like as below: 
<br>
<p>n130x
<br>
n131x
<br>
n134x
<br>
n135x
<br>
n136x
<br>
n132x
<br>
n133x
<br>
n137x
<br>
<p>We are not able to run open mpi with all 8 node. 
<br>
<p>mpirun -n 8 -np 8 -hostfile /root/mpd.hosts -mca btl openib,self,sm --mca orte_base_help_aggregate 0 --mca btl_base_verbose 10 --mca btl_openib_verbose 100 /usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1/IMB-MPI1 Barrier
<br>
<p>Output: 
<br>
=================================================================================
<br>
<p>At least one pair of MPI processes are unable to reach each other for
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],2]) is on host: n134
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],5]) is on host: n132
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],7]) is on host: n137
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],3]) is on host: n135
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],6]) is on host: n133
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],1]) is on host: n131
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
<p>&nbsp;&nbsp;Process 1 ([[33322,1],4]) is on host: n136
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
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
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n134:4888] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n137:4890] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[n135:4883] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[n133:4850] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[n136:4866] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[n131:4866] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[n132:4855] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 3 with PID 4883 on
<br>
node n135x exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
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
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n130:4885] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
<p>=================================================================================
<br>
<p>we are able to run same command on btl with tcp as below for all 8 node :
<br>
<p>mpirun -n 8 -np 8 -hostfile /root/mpd.hosts  -mca btl tcp,self,sm --mca orte_base_help_aggregate 0 --mca btl_base_verbose 10 --mca btl_openib_verbose 100 /usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1/IMB-MPI1 Barrier
<br>
<p><p>If we remove n132,n133,n137 node from mpd.hosts file then we are able to run open mpi for all remaining 5 node on btl openib,sm,self .
<br>
<p>So there is some problem with only n132,n133,n137 node. we are able to run opnmpi with this 3 node. but when we try to run this node with other 5 node or one of the node (n130,n131,n134,n135,n136) then we will get below error: 
<br>
<p>Output :
<br>
===============
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
<p>&nbsp;&nbsp;Process 1 ([[33304,1],1]) is on host: n132
<br>
&nbsp;&nbsp;Process 2 ([[33304,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
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
<p>&nbsp;&nbsp;Process 1 ([[33304,1],0]) is on host: n130
<br>
&nbsp;&nbsp;Process 2 ([[33304,1],1]) is on host: 100
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
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
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n130:4929] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n132:4963] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 4929 on
<br>
node n130 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
-----------------------------------------------------------
<br>
<p>we are able to run INtel,Mvapich2 MPI on All 8 node but we are facing problem for OpenMPI. Can any one help us what the real issue with that 3 node.
<br>
<p>Find attached Log for detail.
<br>
<p><p>Thanks,
<br>
Hardik 
<br>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10010/Open_mpi.txt">Open_mpi.txt</a>
</ul>
<!-- attachment="Open_mpi.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10011.php">Dave Love: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="10009.php">Kartik: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
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
