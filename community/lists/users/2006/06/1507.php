<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 17:23:50 2006" -->
<!-- isoreceived="20060629212350" -->
<!-- sent="Thu, 29 Jun 2006 17:23:32 -0400 (EDT)" -->
<!-- isosent="20060629212332" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1" -->
<!-- id="Pine.GSO.4.62.0606291714010.25306_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C7893796-E0E3-4677-A5C6-54924F1B2810_at_cs.indiana.edu" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 17:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1506.php">Justin Bronder: "[OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Doug Gregor: "[OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Doug
<br>
&nbsp;&nbsp;wow, looks like some messages are getting lost (or even delivered to the 
<br>
wrong peer on the same node.. ) Could you also try with:
<br>
<p>-mca coll_base_verbose 1 -mca coll_tuned_use_dynamic_rules 1 -mca 
<br>
coll_tuned_bcast_algorithm &lt;1,2,3,4,5,6&gt;
<br>
<p>The values 1-6 control which topology/aglorithm are used internally..
<br>
<p>Once we figure out which topo/sequence causes this we can look to see if 
<br>
its a collective issue or a btl, bml, pml issue.
<br>
<p>thanks
<br>
G
<br>
On Thu, 29 Jun 2006, Doug Gregor wrote:
<br>
<p><span class="quotelev1">&gt; I am running into a problem with a simple program (which performs several 
</span><br>
<span class="quotelev1">&gt; MPI_Bcast operations) hanging. Most processes hang in MPI_Finalize, the 
</span><br>
<span class="quotelev1">&gt; others hang in MPI_Bcast. Interestingly enough, this only happens when I 
</span><br>
<span class="quotelev1">&gt; oversubscribe the nodes. For instance, using IU's Odin cluster, I take 4 
</span><br>
<span class="quotelev1">&gt; nodes (each has two Opteron processors) and run 9 processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun -np 9 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The backtrace from 7/9 of the processes shows that they're in MPI_Finalize:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x0000003d1b92e813 in sigprocmask () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a9598f55f in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a9598e3f3 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a960487c4 in mca_oob_tcp_msg_wait ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a9604ca13 in mca_oob_tcp_recv ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a9585d833 in mca_oob_recv_packed ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x0000002a9585dd37 in mca_oob_xcast ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x0000002a956cbfb0 in ompi_mpi_finalize ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040bd3e in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other two processes are in MPI_Bcast:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a97c2cbe3 in mca_btl_mvapi_component_progress ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_btl_mvapi.so
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a97b21072 in mca_bml_r2_progress ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a95988a4a in opal_progress ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a97a13fe7 in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a9846d0aa in ompi_coll_tuned_bcast_intra_chain ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a9846d100 in ompi_coll_tuned_bcast_intra_pipeline ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x0000002a9846a3d7 in ompi_coll_tuned_bcast_intra_dec_fixed ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #7  0x0000002a956deae3 in PMPI_Bcast ()
</span><br>
<span class="quotelev1">&gt;   from /san/mpi/openmpi-1.1-gcc/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040bcc7 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other random information:
</span><br>
<span class="quotelev1">&gt; 	- The two processes stuck in MPI_Bcast are not on the same node. This 
</span><br>
<span class="quotelev1">&gt; has been the case both times I've gone through the backtraces, but I can't 
</span><br>
<span class="quotelev1">&gt; conclude that it's a necessary condition.
</span><br>
<span class="quotelev1">&gt; 	- If I force the use of the &quot;basic&quot; MCA for collectives, this problem 
</span><br>
<span class="quotelev1">&gt; does not occur.
</span><br>
<span class="quotelev1">&gt; 	- If I don't oversubscribe the nodes, things seem to work properly.
</span><br>
<span class="quotelev1">&gt; 	- The C++ program source and result of ompi_info are attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should be easy to reproduce for anyone with access to Odin. I'm using 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.1 configured with no special options. It is available as the 
</span><br>
<span class="quotelev1">&gt; module &quot;mpi/openmpi-1.1-gcc&quot; on the cluster. I'm using SLURM interactively to 
</span><br>
<span class="quotelev1">&gt; allocate the nodes before executing mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	srun -A -N 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Cheers,
</span><br>
<span class="quotelev1">&gt; 	Doug Gregor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1506.php">Justin Bronder: "[OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Doug Gregor: "[OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
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
