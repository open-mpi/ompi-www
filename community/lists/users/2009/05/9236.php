<?
$subject_val = "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 12:15:24 2009" -->
<!-- isoreceived="20090506161524" -->
<!-- sent="Wed, 06 May 2009 12:15:19 -0400" -->
<!-- isosent="20090506161519" -->
<!-- name="Ken Cain" -->
<!-- email="kcain_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)" -->
<!-- id="4A01B797.2020900_at_mc.com" -->
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
<strong>Subject:</strong> [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)<br>
<strong>From:</strong> Ken Cain (<em>kcain_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 12:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9237.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9235.php">Vicente Puig: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9237.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Reply:</strong> <a href="9237.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Maybe reply:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Maybe reply:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Maybe reply:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to run NetPIPE-3.7.1 NPmpi using Open MPI version 1.3.2 with 
<br>
the openib btl in an OFED-1.4 environment. The system environment is two 
<br>
Linux (2.6.27) ppc64 blades, each with one Chelsio RNIC device, 
<br>
interconnected by a 10GbE switch. The problem is that I cannot (using 
<br>
Open MPI) establish connections between the two MPI ranks.
<br>
<p>I have already read the OMPI FAQ entries and searched for similar 
<br>
problems reported to this email list without success. I do have a 
<br>
compressed config.log that I can provide separately (it is 80KB in size 
<br>
so I'll spare everyone here). I also have the output of ompi_info --all 
<br>
that I can share.
<br>
<p>I can successfully run small diagnostic programs such as rping, 
<br>
ib_rdma_bw, ib_rdma_lat, etc. between the same two blades. I can also 
<br>
run NPmpi using another MPI library (MVAPICH2) and the Chelsio/iWARP 
<br>
interface.
<br>
<p>Here is the one example mpirun command line I used:
<br>
mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self --hostfile 
<br>
~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; outfile1 2&gt;&amp;1
<br>
<p>and its output:
<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:           aae1
</span><br>
<span class="quotelev1">&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev1">&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:           aae4
</span><br>
<span class="quotelev1">&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev1">&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; [aae1:6598] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [aae4:19434] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 19434 on
</span><br>
<span class="quotelev1">&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p><p>Here is the another mpirun command I used (adding verbosity and more 
<br>
specific btl parameters):
<br>
<p>mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self,sm --mca 
<br>
btl_base_verbose 10 --mca btl_openib_verbose 10 --mca 
<br>
btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm 
<br>
--mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca 
<br>
mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 
<br>
1 -u 1024 &gt; ~/outfile2 2&gt;&amp;1
<br>
<p>and its output:
<br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: component openib has no register function
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [aae4:19426] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: component openib has no register function
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [aae1:06503] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [aae4:19426] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [aae4][[3107,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1425, part ID 49
</span><br>
<span class="quotelev1">&gt; [aae4][[3107,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Chelsio T3
</span><br>
<span class="quotelev1">&gt; [aae4][[3107,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev1">&gt; [aae4][[3107,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
</span><br>
<span class="quotelev1">&gt; [aae4:19426] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev1">&gt; [aae4:19426] select: init of component openib returned success
</span><br>
<span class="quotelev1">&gt; [aae4:19426] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [aae4:19426] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [aae4:19426] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [aae4:19426] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [aae1:06503] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [aae1][[3107,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1425, part ID 49
</span><br>
<span class="quotelev1">&gt; [aae1][[3107,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Chelsio T3
</span><br>
<span class="quotelev1">&gt; [aae1][[3107,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev1">&gt; [aae1][[3107,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
</span><br>
<span class="quotelev1">&gt; [aae1:06503] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev1">&gt; [aae1:06503] select: init of component openib returned success
</span><br>
<span class="quotelev1">&gt; [aae1:06503] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [aae1:06503] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [aae1:06503] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [aae1:06503] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [aae1:6503] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [aae4:19426] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 19426 on
</span><br>
<span class="quotelev1">&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p><p>Thanks for any advice/help you can offer.
<br>
<p><p>-Ken
<br>
<p>This message is intended only for the designated recipient(s) and may
<br>
contain confidential or proprietary information of Mercury Computer
<br>
Systems, Inc. This message is solely intended to facilitate business
<br>
discussions and does not constitute an express or implied offer to sell
<br>
or purchase any products, services, or support. Any commitments must be
<br>
made in writing and signed by duly authorized representatives of each
<br>
party.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9237.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9235.php">Vicente Puig: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9237.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Reply:</strong> <a href="9237.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Maybe reply:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Maybe reply:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Maybe reply:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
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
