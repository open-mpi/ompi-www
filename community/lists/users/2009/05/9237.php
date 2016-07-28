<?
$subject_val = "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 12:22:31 2009" -->
<!-- isoreceived="20090506162231" -->
<!-- sent="Wed, 6 May 2009 11:22:25 -0500" -->
<!-- isosent="20090506162225" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)" -->
<!-- id="20090506162225.GC4935_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A01B797.2020900_at_mc.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 12:22:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>In reply to:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 06, 2009 at 12:15:19PM -0400, Ken Cain wrote:
<br>
<span class="quotelev1">&gt; I am trying to run NetPIPE-3.7.1 NPmpi using Open MPI version 1.3.2 with  
</span><br>
<span class="quotelev1">&gt; the openib btl in an OFED-1.4 environment. The system environment is two  
</span><br>
<span class="quotelev1">&gt; Linux (2.6.27) ppc64 blades, each with one Chelsio RNIC device,  
</span><br>
<span class="quotelev1">&gt; interconnected by a 10GbE switch. The problem is that I cannot (using  
</span><br>
<span class="quotelev1">&gt; Open MPI) establish connections between the two MPI ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have already read the OMPI FAQ entries and searched for similar  
</span><br>
<span class="quotelev1">&gt; problems reported to this email list without success. I do have a  
</span><br>
<span class="quotelev1">&gt; compressed config.log that I can provide separately (it is 80KB in size  
</span><br>
<span class="quotelev1">&gt; so I'll spare everyone here). I also have the output of ompi_info --all  
</span><br>
<span class="quotelev1">&gt; that I can share.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can successfully run small diagnostic programs such as rping,  
</span><br>
<span class="quotelev1">&gt; ib_rdma_bw, ib_rdma_lat, etc. between the same two blades. I can also  
</span><br>
<span class="quotelev1">&gt; run NPmpi using another MPI library (MVAPICH2) and the Chelsio/iWARP  
</span><br>
<span class="quotelev1">&gt; interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the one example mpirun command line I used:
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self --hostfile  
</span><br>
<span class="quotelev1">&gt; ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; outfile1 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and its output:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev2">&gt;&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev2">&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:           aae1
</span><br>
<span class="quotelev2">&gt;&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev2">&gt;&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev2">&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:           aae4
</span><br>
<span class="quotelev2">&gt;&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:6598] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19434] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 19434 on
</span><br>
<span class="quotelev2">&gt;&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the another mpirun command I used (adding verbosity and more  
</span><br>
<span class="quotelev1">&gt; specific btl parameters):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self,sm --mca  
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 10 --mca btl_openib_verbose 10 --mca  
</span><br>
<span class="quotelev1">&gt; btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm  
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca  
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l  
</span><br>
<span class="quotelev1">&gt; 1 -u 1024 &gt; ~/outfile2 2&gt;&amp;1
</span><br>
<p>It looks like you are only using 1 port on the Chelsio RNIC.  Based on
<br>
the messages above, It looks like it might be the wrong port.  Is there
<br>
a reason why you are excluding it?  Also, you might try the TCP btl and
<br>
verify that it works correctly in the testcase (as a point of
<br>
reference).
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and its output:
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: component openib has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: component openib has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1425, part ID 49
</span><br>
<span class="quotelev2">&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Chelsio T3
</span><br>
<span class="quotelev2">&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] select: init of component openib returned success
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] select: initializing btl component sm
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] select: init of component sm returned success
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1425, part ID 49
</span><br>
<span class="quotelev2">&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Chelsio T3
</span><br>
<span class="quotelev2">&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev2">&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] select: init of component openib returned success
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] select: initializing btl component sm
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:06503] select: init of component sm returned success
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [aae1:6503] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:19426] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 19426 on
</span><br>
<span class="quotelev2">&gt;&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any advice/help you can offer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is intended only for the designated recipient(s) and may
</span><br>
<span class="quotelev1">&gt; contain confidential or proprietary information of Mercury Computer
</span><br>
<span class="quotelev1">&gt; Systems, Inc. This message is solely intended to facilitate business
</span><br>
<span class="quotelev1">&gt; discussions and does not constitute an express or implied offer to sell
</span><br>
<span class="quotelev1">&gt; or purchase any products, services, or support. Any commitments must be
</span><br>
<span class="quotelev1">&gt; made in writing and signed by duly authorized representatives of each
</span><br>
<span class="quotelev1">&gt; party.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>In reply to:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
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
