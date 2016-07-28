<?
$subject_val = "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 16:45:05 2009" -->
<!-- isoreceived="20090506204505" -->
<!-- sent="Wed, 06 May 2009 16:45:02 -0400" -->
<!-- isosent="20090506204502" -->
<!-- name="Ken Cain" -->
<!-- email="kcain_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)" -->
<!-- id="4A01F6CE.4050005_at_mc.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="19251_1241638446_4A01E62D_19251_11048_1_20090506193036.GE4935_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)<br>
<strong>From:</strong> Ken Cain (<em>kcain_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 16:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>Previous message:</strong> <a href="9242.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Maybe in reply to:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9252.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Reply:</strong> <a href="9252.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jon Mason wrote:
<br>
<span class="quotelev1">&gt; On Wed, May 06, 2009 at 01:20:48PM -0400, Ken Cain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jon. I have some responses inline.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 06, 2009 at 12:15:19PM -0400, Ken Cain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run NetPIPE-3.7.1 NPmpi using Open MPI version 1.3.2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with  the openib btl in an OFED-1.4 environment. The system 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment is two  Linux (2.6.27) ppc64 blades, each with one 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chelsio RNIC device,  interconnected by a 10GbE switch. The problem 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is that I cannot (using  Open MPI) establish connections between the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two MPI ranks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have already read the OMPI FAQ entries and searched for similar   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems reported to this email list without success. I do have a   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compressed config.log that I can provide separately (it is 80KB in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; size  so I'll spare everyone here). I also have the output of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info --all  that I can share.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can successfully run small diagnostic programs such as rping,   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ib_rdma_bw, ib_rdma_lat, etc. between the same two blades. I can also 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  run NPmpi using another MPI library (MVAPICH2) and the Chelsio/iWARP 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the one example mpirun command line I used:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --hostfile  ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; outfile1 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and its output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Local host:           aae1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Process 1 ([[3115,1],0]) is on host: aae4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Process 2 ([[3115,1],1]) is on host: aae1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [aae1:6598] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [aae4:19434] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 19434 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node aae4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the another mpirun command I used (adding verbosity and more  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific btl parameters):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self,sm 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca  btl_base_verbose 10 --mca btl_openib_verbose 10 --mca   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -l  1 -u 1024 &gt; ~/outfile2 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like you are only using 1 port on the Chelsio RNIC.  Based on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the messages above, It looks like it might be the wrong port.  Is there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a reason why you are excluding it?  Also, you might try the TCP btl and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; verify that it works correctly in the testcase (as a point of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reference).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes we only have one port connected. The cxgb3 device is associated with  
</span><br>
<span class="quotelev2">&gt;&gt; eth2 and eth3. Only eth2 is configured with a static IP address. To be  
</span><br>
<span class="quotelev2">&gt;&gt; sure I didn't choose the wrong OFED device I tried the same command  
</span><br>
<span class="quotelev2">&gt;&gt; line, changing btl_openib_if_include to cxgb3_0:2 (instead of my  
</span><br>
<span class="quotelev2">&gt;&gt; original choice cxgb3_0:1). I got the same result in this experiment.  
</span><br>
<span class="quotelev2">&gt;&gt; The same result occurs when I ask only for cxgb3_0 (no particular port).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To test with the TCP btl I changed both of my mpirun commands so that I  
</span><br>
<span class="quotelev2">&gt;&gt; added tcp to the --mca btl list (keeping openib and the others). In both  
</span><br>
<span class="quotelev2">&gt;&gt; cases the NPmpi application runs to completion (using a TCP/IP transport  
</span><br>
<span class="quotelev2">&gt;&gt; not iWARP). In the first (simpler) mpirun command I get the same &quot;No  
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics connection schemes ...&quot; warning message (followed by  
</span><br>
<span class="quotelev2">&gt;&gt; successful run to completion as noted). In the second mpirun command I  
</span><br>
<span class="quotelev2">&gt;&gt; get no particular warning messages and run to completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm...If you are just adding tcp and keeping openib in the btl grouping,
</span><br>
<span class="quotelev1">&gt; it might be possible that it is using the openib btl with the simplier
</span><br>
<span class="quotelev1">&gt; commandline.  Can you try the simplier commandline without tcp in the
</span><br>
<span class="quotelev1">&gt; btl?  Also, please show the commands you are running (working and
</span><br>
<span class="quotelev1">&gt; non-working).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Is it possible for OMPI to generate output at runtime indicating exactly 
<br>
what btl(s) will be used?
<br>
<p>Removing tcp below brings me back to the original simple command line 
<br>
that fails with the output shown above (indicating that openib btl will 
<br>
be disabled):
<br>
<p>mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self --hostfile 
<br>
~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024
<br>
<p><p>Adding tcp below allows the application to run (but still indicating in 
<br>
the output warning messages that the openib btl will be disabled):
<br>
<p>mpirun --mca orte_base_help_aggregate 0 --mca btl tcp,openib,self 
<br>
--hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024
<br>
<p><p><span class="quotelev1">&gt; Is there a reason why the mpirun command you are using is so complex?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<p>I guess I just went a little wild while reading the FAQ and the output 
<br>
of &quot;ompi_info --param btl openib&quot;.
<br>
<p><p><span class="quotelev4">&gt;&gt;&gt;&gt; and its output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any advice/help you can offer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ken
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ken
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>-Ken
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
<li><strong>Next message:</strong> <a href="9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>Previous message:</strong> <a href="9242.php">Jon Mason: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add	procs failed (Unreachable)"</a>
<li><strong>Maybe in reply to:</strong> <a href="9236.php">Ken Cain: "[OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9252.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Reply:</strong> <a href="9252.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
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
