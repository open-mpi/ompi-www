<?
$subject_val = "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 15:30:41 2009" -->
<!-- isoreceived="20090506193041" -->
<!-- sent="Wed, 6 May 2009 14:30:36 -0500" -->
<!-- isosent="20090506193036" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)" -->
<!-- id="20090506193036.GE4935_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A01C6F0.80803_at_mc.com" -->
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
<strong>Date:</strong> 2009-05-06 15:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 06, 2009 at 01:20:48PM -0400, Ken Cain wrote:
<br>
<span class="quotelev1">&gt; Thanks Jon. I have some responses inline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 06, 2009 at 12:15:19PM -0400, Ken Cain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run NetPIPE-3.7.1 NPmpi using Open MPI version 1.3.2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with  the openib btl in an OFED-1.4 environment. The system 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment is two  Linux (2.6.27) ppc64 blades, each with one 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chelsio RNIC device,  interconnected by a 10GbE switch. The problem 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is that I cannot (using  Open MPI) establish connections between the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two MPI ranks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have already read the OMPI FAQ entries and searched for similar   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems reported to this email list without success. I do have a   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compressed config.log that I can provide separately (it is 80KB in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size  so I'll spare everyone here). I also have the output of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --all  that I can share.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can successfully run small diagnostic programs such as rping,   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_rdma_bw, ib_rdma_lat, etc. between the same two blades. I can also 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  run NPmpi using another MPI library (MVAPICH2) and the Chelsio/iWARP 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the one example mpirun command line I used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --hostfile  ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outfile1 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and its output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host:           aae1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host:           aae4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 1 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 2 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 1 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 2 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:6598] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19434] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 19434 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the another mpirun command I used (adding verbosity and more  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific btl parameters):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self,sm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca  btl_base_verbose 10 --mca btl_openib_verbose 10 --mca   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -l  1 -u 1024 &gt; ~/outfile2 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you are only using 1 port on the Chelsio RNIC.  Based on
</span><br>
<span class="quotelev2">&gt;&gt; the messages above, It looks like it might be the wrong port.  Is there
</span><br>
<span class="quotelev2">&gt;&gt; a reason why you are excluding it?  Also, you might try the TCP btl and
</span><br>
<span class="quotelev2">&gt;&gt; verify that it works correctly in the testcase (as a point of
</span><br>
<span class="quotelev2">&gt;&gt; reference).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes we only have one port connected. The cxgb3 device is associated with  
</span><br>
<span class="quotelev1">&gt; eth2 and eth3. Only eth2 is configured with a static IP address. To be  
</span><br>
<span class="quotelev1">&gt; sure I didn't choose the wrong OFED device I tried the same command  
</span><br>
<span class="quotelev1">&gt; line, changing btl_openib_if_include to cxgb3_0:2 (instead of my  
</span><br>
<span class="quotelev1">&gt; original choice cxgb3_0:1). I got the same result in this experiment.  
</span><br>
<span class="quotelev1">&gt; The same result occurs when I ask only for cxgb3_0 (no particular port).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To test with the TCP btl I changed both of my mpirun commands so that I  
</span><br>
<span class="quotelev1">&gt; added tcp to the --mca btl list (keeping openib and the others). In both  
</span><br>
<span class="quotelev1">&gt; cases the NPmpi application runs to completion (using a TCP/IP transport  
</span><br>
<span class="quotelev1">&gt; not iWARP). In the first (simpler) mpirun command I get the same &quot;No  
</span><br>
<span class="quotelev1">&gt; OpenFabrics connection schemes ...&quot; warning message (followed by  
</span><br>
<span class="quotelev1">&gt; successful run to completion as noted). In the second mpirun command I  
</span><br>
<span class="quotelev1">&gt; get no particular warning messages and run to completion.
</span><br>
<p>Hmm...If you are just adding tcp and keeping openib in the btl grouping,
<br>
it might be possible that it is using the openib btl with the simplier
<br>
commandline.  Can you try the simplier commandline without tcp in the
<br>
btl?  Also, please show the commands you are running (working and
<br>
non-working).
<br>
<p>Is there a reason why the mpirun command you are using is so complex?
<br>
<p>Thanks,
<br>
Jon
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and its output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: component openib has no register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: component openib has no register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] select: initializing btl component openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1425, part ID 49
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Chelsio T3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4][[3107,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] select: init of component openib returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] select: initializing btl component self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] select: init of component self returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] select: initializing btl component sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] select: init of component sm returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] select: initializing btl component openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x1425, part ID 49
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: Chelsio T3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query] Querying INI files for vendor 0x0000, part ID 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1][[3107,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query] Found corresponding INI values: default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] select: init of component openib returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] select: initializing btl component self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] select: init of component self returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] select: initializing btl component sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:06503] select: init of component sm returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 1 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 2 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 1 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 2 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae1:6503] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [aae4:19426] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 19426 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any advice/help you can offer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9238.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
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
