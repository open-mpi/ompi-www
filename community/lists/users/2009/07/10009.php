<?
$subject_val = "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 06:45:22 2009" -->
<!-- isoreceived="20090720104522" -->
<!-- sent="Mon, 20 Jul 2009 15:12:31 +0530" -->
<!-- isosent="20090720094231" -->
<!-- name="Kartik" -->
<!-- email="kartik.thathagar_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm" -->
<!-- id="4A643C07.4000100_at_einfochips.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm<br>
<strong>From:</strong> Kartik (<em>kartik.thathagar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 05:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10010.php">Hardik Patel: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<li><strong>Previous message:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are running open MPI 1.3.2 with OFED1.5. we have 8 node cluster with 
<br>
10Gb Iwarp ethernet card.
<br>
&nbsp;
<br>
Node name are as below n130,n131,n132,n133,n134,n135,n136,n137. 
<br>
Respective 10GB hostname are n130x,n131x..... n137x.
<br>
&nbsp;
<br>
we have /root/mpd.hosts entry like as below:
<br>
&nbsp;
<br>
n130x
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
&nbsp;
<br>
We are not able to run open mpi with all 8 node.
<br>
&nbsp;
<br>
mpirun -n 8 -np 8 -hostfile /root/mpd.hosts -mca btl openib,self,sm 
<br>
--mca orte_base_help_aggregate 0 --mca btl_base_verbose 10 --mca 
<br>
btl_openib_verbose 100 /usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1/IMB-MPI1 
<br>
Barrier
<br>
&nbsp;
<br>
Output:
<br>
=================================================================================
<br>
&nbsp;
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],2]) is on host: n134
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],5]) is on host: n132
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],7]) is on host: n137
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],3]) is on host: n135
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],6]) is on host: n133
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],1]) is on host: n131
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33322,1],4]) is on host: n136
<br>
&nbsp;&nbsp;Process 2 ([[33322,1],5]) is on host: n132x
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
[n134:4888] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
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
[n137:4890] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
[n135:4883] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
[n133:4850] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
[n136:4866] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
[n131:4866] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
[n132:4855] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
[n130:4885] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
=================================================================================
<br>
&nbsp;
<br>
we are able to run same command on btl with tcp as below for all 8 node :
<br>
&nbsp;
<br>
mpirun -n 8 -np 8 -hostfile /root/mpd.hosts  -mca btl tcp,self,sm --mca 
<br>
orte_base_help_aggregate 0 --mca btl_base_verbose 10 --mca 
<br>
btl_openib_verbose 100 /usr/mpi/gcc/openmpi-1.3.2/tests/IMB-3.1/IMB-MPI1 
<br>
Barrier
<br>
&nbsp;
<br>
&nbsp;
<br>
If we remove n132,n133,n137 node from mpd.hosts file then we are able to 
<br>
run open mpi for all remaining 5 node on btl openib,sm,self .
<br>
&nbsp;
<br>
So there is some problem with only n132,n133,n137 node. we are able to 
<br>
run opnmpi with this 3 node. but when we try to run this node with other 
<br>
5 node or one of the node (n130,n131,n134,n135,n136) then we will 
<br>
get below error:
<br>
&nbsp;
<br>
Output :
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33304,1],1]) is on host: n132
<br>
&nbsp;&nbsp;Process 2 ([[33304,1],0]) is on host: n130
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
&nbsp;
<br>
&nbsp;&nbsp;Process 1 ([[33304,1],0]) is on host: n130
<br>
&nbsp;&nbsp;Process 2 ([[33304,1],1]) is on host: 100
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
&nbsp;
<br>
Your MPI job is now going to abort; sorry.
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
&nbsp;
<br>
&nbsp;&nbsp;PML add procs failed
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
[n130:4929] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[n132:4963] Abort before MPI_INIT completed successfully; not able to 
<br>
guarantee that all other processes were killed!
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
&nbsp;
<br>
we are able to run INtel,Mvapich2 MPI on All 8 node but we are facing 
<br>
problem for OpenMPI. Can any one help us what the real issue with that 3 
<br>
node.
<br>
&nbsp;
<br>
Find attached Log for detail.
<br>
&nbsp;
<br>
&nbsp;
<br>
Thanks,
<br>
Hardik 
<br>
<p>------------------------------------------------------------------------
<br>
<p>[root_at_n130 scripts]# mpirun -n 8 -np 8 -hostfile /root/mpd.hosts  -mca btl openib,self,sm --mca orte_base_help_aggregate 0 --mca btl_base_verbose 10 --mca btl_openib_verbose 100 /opt/openmpi-1.3.2/NetEffect/test_bin/IMB_3.2/IMB-MPI1 Barrier
<br>
[n130:04885] mca: base: components_open: Looking for btl components
<br>
[n130:04885] mca: base: components_open: opening btl components
<br>
[n130:04885] mca: base: components_open: found loaded component openib
<br>
[n130:04885] mca: base: components_open: component openib has no register function
<br>
[n130:04885] mca: base: components_open: component openib open function successful
<br>
[n130:04885] mca: base: components_open: found loaded component self
<br>
[n130:04885] mca: base: components_open: component self has no register function
<br>
[n130:04885] mca: base: components_open: component self open function successful
<br>
[n130:04885] mca: base: components_open: found loaded component sm
<br>
[n130:04885] mca: base: components_open: component sm has no register function
<br>
[n130:04885] mca: base: components_open: component sm open function successful
<br>
[n134:04888] mca: base: components_open: Looking for btl components
<br>
[n136:04866] mca: base: components_open: Looking for btl components
<br>
[n130:04885] select: initializing btl component openib
<br>
[n131:04866] mca: base: components_open: Looking for btl components
<br>
[n134:04888] mca: base: components_open: opening btl components
<br>
[n134:04888] mca: base: components_open: found loaded component openib
<br>
[n134:04888] mca: base: components_open: component openib has no register function
<br>
[n136:04866] mca: base: components_open: opening btl components
<br>
[n136:04866] mca: base: components_open: found loaded component openib
<br>
[n136:04866] mca: base: components_open: component openib has no register function
<br>
[n134:04888] mca: base: components_open: component openib open function successful
<br>
[n134:04888] mca: base: components_open: found loaded component self
<br>
[n134:04888] mca: base: components_open: component self has no register function
<br>
[n134:04888] mca: base: components_open: component self open function successful
<br>
[n134:04888] mca: base: components_open: found loaded component sm
<br>
[n134:04888] mca: base: components_open: component sm has no register function
<br>
[n134:04888] mca: base: components_open: component sm open function successful
<br>
[n136:04866] mca: base: components_open: component openib open function successful
<br>
[n136:04866] mca: base: components_open: found loaded component self
<br>
[n136:04866] mca: base: components_open: component self has no register function
<br>
[n136:04866] mca: base: components_open: component self open function successful
<br>
[n136:04866] mca: base: components_open: found loaded component sm
<br>
[n136:04866] mca: base: components_open: component sm has no register function
<br>
[n136:04866] mca: base: components_open: component sm open function successful
<br>
[n132:04855] mca: base: components_open: Looking for btl components
<br>
[n133:04850] mca: base: components_open: Looking for btl components
<br>
[n130][[33322,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n130][[33322,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n130][[33322,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n130][[33322,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n130:04885] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n130:04885] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n130:04885] openib BTL: rdmacm CPC available for use on nes0
<br>
[n130:04885] select: init of component openib returned success
<br>
[n130:04885] select: initializing btl component self
<br>
[n130:04885] select: init of component self returned success
<br>
[n130:04885] select: initializing btl component sm
<br>
[n130:04885] select: init of component sm returned success
<br>
[n135:04883] mca: base: components_open: Looking for btl components
<br>
[n131:04866] mca: base: components_open: opening btl components
<br>
[n131:04866] mca: base: components_open: found loaded component openib
<br>
[n131:04866] mca: base: components_open: component openib has no register function
<br>
[n131:04866] mca: base: components_open: component openib open function successful
<br>
[n131:04866] mca: base: components_open: found loaded component self
<br>
[n131:04866] mca: base: components_open: component self has no register function
<br>
[n131:04866] mca: base: components_open: component self open function successful
<br>
[n131:04866] mca: base: components_open: found loaded component sm
<br>
[n131:04866] mca: base: components_open: component sm has no register function
<br>
[n131:04866] mca: base: components_open: component sm open function successful
<br>
[n134:04888] select: initializing btl component openib
<br>
[n136:04866] select: initializing btl component openib
<br>
[n131:04866] select: initializing btl component openib
<br>
[n132:04855] mca: base: components_open: opening btl components
<br>
[n132:04855] mca: base: components_open: found loaded component openib
<br>
[n132:04855] mca: base: components_open: component openib has no register function
<br>
[n132:04855] mca: base: components_open: component openib open function successful
<br>
[n132:04855] mca: base: components_open: found loaded component self
<br>
[n132:04855] mca: base: components_open: component self has no register function
<br>
[n132:04855] mca: base: components_open: component self open function successful
<br>
[n132:04855] mca: base: components_open: found loaded component sm
<br>
[n132:04855] mca: base: components_open: component sm has no register function
<br>
[n132:04855] mca: base: components_open: component sm open function successful
<br>
[n133:04850] mca: base: components_open: opening btl components
<br>
[n133:04850] mca: base: components_open: found loaded component openib
<br>
[n133:04850] mca: base: components_open: component openib has no register function
<br>
[n133:04850] mca: base: components_open: component openib open function successful
<br>
[n133:04850] mca: base: components_open: found loaded component self
<br>
[n133:04850] mca: base: components_open: component self has no register function
<br>
[n133:04850] mca: base: components_open: component self open function successful
<br>
[n133:04850] mca: base: components_open: found loaded component sm
<br>
[n133:04850] mca: base: components_open: component sm has no register function
<br>
[n133:04850] mca: base: components_open: component sm open function successful
<br>
[n136][[33322,1],4][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n136][[33322,1],4][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n136][[33322,1],4][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n136][[33322,1],4][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n136:04866] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n136:04866] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n136:04866] openib BTL: rdmacm CPC available for use on nes0
<br>
[n136:04866] select: init of component openib returned success
<br>
[n136:04866] select: initializing btl component self
<br>
[n136:04866] select: init of component self returned success
<br>
[n136:04866] select: initializing btl component sm
<br>
[n136:04866] select: init of component sm returned success
<br>
[n135:04883] mca: base: components_open: opening btl components
<br>
[n135:04883] mca: base: components_open: found loaded component openib
<br>
[n135:04883] mca: base: components_open: component openib has no register function
<br>
[n135:04883] mca: base: components_open: component openib open function successful
<br>
[n135:04883] mca: base: components_open: found loaded component self
<br>
[n135:04883] mca: base: components_open: component self has no register function
<br>
[n135:04883] mca: base: components_open: component self open function successful
<br>
[n135:04883] mca: base: components_open: found loaded component sm
<br>
[n135:04883] mca: base: components_open: component sm has no register function
<br>
[n135:04883] mca: base: components_open: component sm open function successful
<br>
[n137:04890] mca: base: components_open: Looking for btl components
<br>
[n134][[33322,1],2][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n134][[33322,1],2][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n134][[33322,1],2][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n134][[33322,1],2][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n134:04888] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n134:04888] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n134:04888] openib BTL: rdmacm CPC available for use on nes0
<br>
[n134:04888] select: init of component openib returned success
<br>
[n134:04888] select: initializing btl component self
<br>
[n134:04888] select: init of component self returned success
<br>
[n134:04888] select: initializing btl component sm
<br>
[n134:04888] select: init of component sm returned success
<br>
[n132:04855] select: initializing btl component openib
<br>
[n131][[33322,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n131][[33322,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n131][[33322,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n131][[33322,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n131:04866] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n131:04866] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n131:04866] openib BTL: rdmacm CPC available for use on nes0
<br>
[n131:04866] select: init of component openib returned success
<br>
[n131:04866] select: initializing btl component self
<br>
[n131:04866] select: init of component self returned success
<br>
[n131:04866] select: initializing btl component sm
<br>
[n131:04866] select: init of component sm returned success
<br>
[n135:04883] select: initializing btl component openib
<br>
[n133:04850] select: initializing btl component openib
<br>
[n132][[33322,1],5][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n132][[33322,1],5][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n132][[33322,1],5][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n132][[33322,1],5][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n132:04855] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n132:04855] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n132:04855] openib BTL: rdmacm CPC available for use on nes0
<br>
[n132:04855] select: init of component openib returned success
<br>
[n132:04855] select: initializing btl component self
<br>
[n132:04855] select: init of component self returned success
<br>
[n132:04855] select: initializing btl component sm
<br>
[n132:04855] select: init of component sm returned success
<br>
[n137:04890] mca: base: components_open: opening btl components
<br>
[n137:04890] mca: base: components_open: found loaded component openib
<br>
[n137:04890] mca: base: components_open: component openib has no register function
<br>
[n137:04890] mca: base: components_open: component openib open function successful
<br>
[n137:04890] mca: base: components_open: found loaded component self
<br>
[n137:04890] mca: base: components_open: component self has no register function
<br>
[n137:04890] mca: base: components_open: component self open function successful
<br>
[n137:04890] mca: base: components_open: found loaded component sm
<br>
[n137:04890] mca: base: components_open: component sm has no register function
<br>
[n137:04890] mca: base: components_open: component sm open function successful
<br>
[n135][[33322,1],3][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n135][[33322,1],3][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n135][[33322,1],3][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n135][[33322,1],3][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n133][[33322,1],6][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n133][[33322,1],6][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n133][[33322,1],6][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n133][[33322,1],6][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n135:04883] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n135:04883] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n135:04883] openib BTL: rdmacm CPC available for use on nes0
<br>
[n135:04883] select: init of component openib returned success
<br>
[n135:04883] select: initializing btl component self
<br>
[n135:04883] select: init of component self returned success
<br>
[n135:04883] select: initializing btl component sm
<br>
[n135:04883] select: init of component sm returned success
<br>
[n133:04850] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n133:04850] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n133:04850] openib BTL: rdmacm CPC available for use on nes0
<br>
[n133:04850] select: init of component openib returned success
<br>
[n133:04850] select: initializing btl component self
<br>
[n133:04850] select: init of component self returned success
<br>
[n133:04850] select: initializing btl component sm
<br>
[n133:04850] select: init of component sm returned success
<br>
[n137:04890] select: initializing btl component openib
<br>
[n137][[33322,1],7][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n137][[33322,1],7][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n137][[33322,1],7][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n137][[33322,1],7][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n137:04890] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n137:04890] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n137:04890] openib BTL: rdmacm CPC available for use on nes0
<br>
[n137:04890] select: init of component openib returned success
<br>
[n137:04890] select: initializing btl component self
<br>
[n137:04890] select: init of component self returned success
<br>
[n137:04890] select: initializing btl component sm
<br>
[n137:04890] select: init of component sm returned success
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
[root_at_n130 scripts]#
<br>
<p><p>Thanks,
<br>
Kartik
<br>
<p><p><p><p><p>
<p>
<br><p>
[root_at_n130 scripts]# mpirun -n 8 -np 8 -hostfile /root/mpd.hosts  -mca btl openib,self,sm --mca orte_base_help_aggregate 0 --mca btl_base_verbose 10 --mca btl_openib_verbose 100 /opt/openmpi-1.3.2/NetEffect/test_bin/IMB_3.2/IMB-MPI1 Barrier
<br>
[n130:04885] mca: base: components_open: Looking for btl components
<br>
[n130:04885] mca: base: components_open: opening btl components
<br>
[n130:04885] mca: base: components_open: found loaded component openib
<br>
[n130:04885] mca: base: components_open: component openib has no register function
<br>
[n130:04885] mca: base: components_open: component openib open function successful
<br>
[n130:04885] mca: base: components_open: found loaded component self
<br>
[n130:04885] mca: base: components_open: component self has no register function
<br>
[n130:04885] mca: base: components_open: component self open function successful
<br>
[n130:04885] mca: base: components_open: found loaded component sm
<br>
[n130:04885] mca: base: components_open: component sm has no register function
<br>
[n130:04885] mca: base: components_open: component sm open function successful
<br>
[n134:04888] mca: base: components_open: Looking for btl components
<br>
[n136:04866] mca: base: components_open: Looking for btl components
<br>
[n130:04885] select: initializing btl component openib
<br>
[n131:04866] mca: base: components_open: Looking for btl components
<br>
[n134:04888] mca: base: components_open: opening btl components
<br>
[n134:04888] mca: base: components_open: found loaded component openib
<br>
[n134:04888] mca: base: components_open: component openib has no register function
<br>
[n136:04866] mca: base: components_open: opening btl components
<br>
[n136:04866] mca: base: components_open: found loaded component openib
<br>
[n136:04866] mca: base: components_open: component openib has no register function
<br>
[n134:04888] mca: base: components_open: component openib open function successful
<br>
[n134:04888] mca: base: components_open: found loaded component self
<br>
[n134:04888] mca: base: components_open: component self has no register function
<br>
[n134:04888] mca: base: components_open: component self open function successful
<br>
[n134:04888] mca: base: components_open: found loaded component sm
<br>
[n134:04888] mca: base: components_open: component sm has no register function
<br>
[n134:04888] mca: base: components_open: component sm open function successful
<br>
[n136:04866] mca: base: components_open: component openib open function successful
<br>
[n136:04866] mca: base: components_open: found loaded component self
<br>
[n136:04866] mca: base: components_open: component self has no register function
<br>
[n136:04866] mca: base: components_open: component self open function successful
<br>
[n136:04866] mca: base: components_open: found loaded component sm
<br>
[n136:04866] mca: base: components_open: component sm has no register function
<br>
[n136:04866] mca: base: components_open: component sm open function successful
<br>
[n132:04855] mca: base: components_open: Looking for btl components
<br>
[n133:04850] mca: base: components_open: Looking for btl components
<br>
[n130][[33322,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n130][[33322,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n130][[33322,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n130][[33322,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n130:04885] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n130:04885] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n130:04885] openib BTL: rdmacm CPC available for use on nes0
<br>
[n130:04885] select: init of component openib returned success
<br>
[n130:04885] select: initializing btl component self
<br>
[n130:04885] select: init of component self returned success
<br>
[n130:04885] select: initializing btl component sm
<br>
[n130:04885] select: init of component sm returned success
<br>
[n135:04883] mca: base: components_open: Looking for btl components
<br>
[n131:04866] mca: base: components_open: opening btl components
<br>
[n131:04866] mca: base: components_open: found loaded component openib
<br>
[n131:04866] mca: base: components_open: component openib has no register function
<br>
[n131:04866] mca: base: components_open: component openib open function successful
<br>
[n131:04866] mca: base: components_open: found loaded component self
<br>
[n131:04866] mca: base: components_open: component self has no register function
<br>
[n131:04866] mca: base: components_open: component self open function successful
<br>
[n131:04866] mca: base: components_open: found loaded component sm
<br>
[n131:04866] mca: base: components_open: component sm has no register function
<br>
[n131:04866] mca: base: components_open: component sm open function successful
<br>
[n134:04888] select: initializing btl component openib
<br>
[n136:04866] select: initializing btl component openib
<br>
[n131:04866] select: initializing btl component openib
<br>
[n132:04855] mca: base: components_open: opening btl components
<br>
[n132:04855] mca: base: components_open: found loaded component openib
<br>
[n132:04855] mca: base: components_open: component openib has no register function
<br>
[n132:04855] mca: base: components_open: component openib open function successful
<br>
[n132:04855] mca: base: components_open: found loaded component self
<br>
[n132:04855] mca: base: components_open: component self has no register function
<br>
[n132:04855] mca: base: components_open: component self open function successful
<br>
[n132:04855] mca: base: components_open: found loaded component sm
<br>
[n132:04855] mca: base: components_open: component sm has no register function
<br>
[n132:04855] mca: base: components_open: component sm open function successful
<br>
[n133:04850] mca: base: components_open: opening btl components
<br>
[n133:04850] mca: base: components_open: found loaded component openib
<br>
[n133:04850] mca: base: components_open: component openib has no register function
<br>
[n133:04850] mca: base: components_open: component openib open function successful
<br>
[n133:04850] mca: base: components_open: found loaded component self
<br>
[n133:04850] mca: base: components_open: component self has no register function
<br>
[n133:04850] mca: base: components_open: component self open function successful
<br>
[n133:04850] mca: base: components_open: found loaded component sm
<br>
[n133:04850] mca: base: components_open: component sm has no register function
<br>
[n133:04850] mca: base: components_open: component sm open function successful
<br>
[n136][[33322,1],4][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n136][[33322,1],4][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n136][[33322,1],4][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n136][[33322,1],4][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n136:04866] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n136:04866] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n136:04866] openib BTL: rdmacm CPC available for use on nes0
<br>
[n136:04866] select: init of component openib returned success
<br>
[n136:04866] select: initializing btl component self
<br>
[n136:04866] select: init of component self returned success
<br>
[n136:04866] select: initializing btl component sm
<br>
[n136:04866] select: init of component sm returned success
<br>
[n135:04883] mca: base: components_open: opening btl components
<br>
[n135:04883] mca: base: components_open: found loaded component openib
<br>
[n135:04883] mca: base: components_open: component openib has no register function
<br>
[n135:04883] mca: base: components_open: component openib open function successful
<br>
[n135:04883] mca: base: components_open: found loaded component self
<br>
[n135:04883] mca: base: components_open: component self has no register function
<br>
[n135:04883] mca: base: components_open: component self open function successful
<br>
[n135:04883] mca: base: components_open: found loaded component sm
<br>
[n135:04883] mca: base: components_open: component sm has no register function
<br>
[n135:04883] mca: base: components_open: component sm open function successful
<br>
[n137:04890] mca: base: components_open: Looking for btl components
<br>
[n134][[33322,1],2][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n134][[33322,1],2][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n134][[33322,1],2][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n134][[33322,1],2][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n134:04888] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n134:04888] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n134:04888] openib BTL: rdmacm CPC available for use on nes0
<br>
[n134:04888] select: init of component openib returned success
<br>
[n134:04888] select: initializing btl component self
<br>
[n134:04888] select: init of component self returned success
<br>
[n134:04888] select: initializing btl component sm
<br>
[n134:04888] select: init of component sm returned success
<br>
[n132:04855] select: initializing btl component openib
<br>
[n131][[33322,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n131][[33322,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n131][[33322,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n131][[33322,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n131:04866] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n131:04866] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n131:04866] openib BTL: rdmacm CPC available for use on nes0
<br>
[n131:04866] select: init of component openib returned success
<br>
[n131:04866] select: initializing btl component self
<br>
[n131:04866] select: init of component self returned success
<br>
[n131:04866] select: initializing btl component sm
<br>
[n131:04866] select: init of component sm returned success
<br>
[n135:04883] select: initializing btl component openib
<br>
[n133:04850] select: initializing btl component openib
<br>
[n132][[33322,1],5][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n132][[33322,1],5][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n132][[33322,1],5][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n132][[33322,1],5][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n132:04855] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n132:04855] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n132:04855] openib BTL: rdmacm CPC available for use on nes0
<br>
[n132:04855] select: init of component openib returned success
<br>
[n132:04855] select: initializing btl component self
<br>
[n132:04855] select: init of component self returned success
<br>
[n132:04855] select: initializing btl component sm
<br>
[n132:04855] select: init of component sm returned success
<br>
[n137:04890] mca: base: components_open: opening btl components
<br>
[n137:04890] mca: base: components_open: found loaded component openib
<br>
[n137:04890] mca: base: components_open: component openib has no register function
<br>
[n137:04890] mca: base: components_open: component openib open function successful
<br>
[n137:04890] mca: base: components_open: found loaded component self
<br>
[n137:04890] mca: base: components_open: component self has no register function
<br>
[n137:04890] mca: base: components_open: component self open function successful
<br>
[n137:04890] mca: base: components_open: found loaded component sm
<br>
[n137:04890] mca: base: components_open: component sm has no register function
<br>
[n137:04890] mca: base: components_open: component sm open function successful
<br>
[n135][[33322,1],3][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n135][[33322,1],3][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n135][[33322,1],3][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n135][[33322,1],3][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n133][[33322,1],6][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n133][[33322,1],6][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n133][[33322,1],6][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n133][[33322,1],6][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n135:04883] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n135:04883] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n135:04883] openib BTL: rdmacm CPC available for use on nes0
<br>
[n135:04883] select: init of component openib returned success
<br>
[n135:04883] select: initializing btl component self
<br>
[n135:04883] select: init of component self returned success
<br>
[n135:04883] select: initializing btl component sm
<br>
[n135:04883] select: init of component sm returned success
<br>
[n133:04850] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n133:04850] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n133:04850] openib BTL: rdmacm CPC available for use on nes0
<br>
[n133:04850] select: init of component openib returned success
<br>
[n133:04850] select: initializing btl component self
<br>
[n133:04850] select: init of component self returned success
<br>
[n133:04850] select: initializing btl component sm
<br>
[n133:04850] select: init of component sm returned success
<br>
[n137:04890] select: initializing btl component openib
<br>
[n137][[33322,1],7][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1255, part ID 256
<br>
[n137][[33322,1],7][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: NetEffect NE020
<br>
[n137][[33322,1],7][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
<br>
[n137][[33322,1],7][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
<br>
[n137:04890] openib BTL: oob CPC only supported on InfiniBand; skipped on device nes0
<br>
[n137:04890] openib BTL: xoob CPC only supported with XRC receive queues; skipped on device nes0
<br>
[n137:04890] openib BTL: rdmacm CPC available for use on nes0
<br>
[n137:04890] select: init of component openib returned success
<br>
[n137:04890] select: initializing btl component self
<br>
[n137:04890] select: init of component self returned success
<br>
[n137:04890] select: initializing btl component sm
<br>
[n137:04890] select: init of component sm returned success
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
[root_at_n130 scripts]#
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10010.php">Hardik Patel: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<li><strong>Previous message:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
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
