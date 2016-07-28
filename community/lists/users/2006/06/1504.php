<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 17:09:26 2006" -->
<!-- isoreceived="20060629210926" -->
<!-- sent="Thu, 29 Jun 2006 17:09:26 -0400" -->
<!-- isosent="20060629210926" -->
<!-- name="Doug Gregor" -->
<!-- email="dgregor_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1" -->
<!-- id="C7893796-E0E3-4677-A5C6-54924F1B2810_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Doug Gregor (<em>dgregor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 17:09:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1505.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running into a problem with a simple program (which performs  
<br>
several MPI_Bcast operations) hanging. Most processes hang in  
<br>
MPI_Finalize, the others hang in MPI_Bcast. Interestingly enough,  
<br>
this only happens when I oversubscribe the nodes. For instance, using  
<br>
IU's Odin cluster, I take 4 nodes (each has two Opteron processors)  
<br>
and run 9 processes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 9 ./a.out
<br>
<p>The backtrace from 7/9 of the processes shows that they're in  
<br>
MPI_Finalize:
<br>
<p>#0  0x0000003d1b92e813 in sigprocmask () from /lib64/tls/libc.so.6
<br>
#1  0x0000002a9598f55f in poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/libopal.so.0
<br>
#2  0x0000002a9598e3f3 in opal_event_loop ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/libopal.so.0
<br>
#3  0x0000002a960487c4 in mca_oob_tcp_msg_wait ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_oob_tcp.so
<br>
#4  0x0000002a9604ca13 in mca_oob_tcp_recv ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_oob_tcp.so
<br>
#5  0x0000002a9585d833 in mca_oob_recv_packed ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/liborte.so.0
<br>
#6  0x0000002a9585dd37 in mca_oob_xcast ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/liborte.so.0
<br>
#7  0x0000002a956cbfb0 in ompi_mpi_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/libmpi.so.0
<br>
#8  0x000000000040bd3e in main ()
<br>
<p>The other two processes are in MPI_Bcast:
<br>
<p>#0  0x0000002a97c2cbe3 in mca_btl_mvapi_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_btl_mvapi.so
<br>
#1  0x0000002a97b21072 in mca_bml_r2_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_bml_r2.so
<br>
#2  0x0000002a95988a4a in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/libopal.so.0
<br>
#3  0x0000002a97a13fe7 in mca_pml_ob1_recv ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_pml_ob1.so
<br>
#4  0x0000002a9846d0aa in ompi_coll_tuned_bcast_intra_chain ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_coll_tuned.so
<br>
#5  0x0000002a9846d100 in ompi_coll_tuned_bcast_intra_pipeline ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_coll_tuned.so
<br>
#6  0x0000002a9846a3d7 in ompi_coll_tuned_bcast_intra_dec_fixed ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/openmpi/mca_coll_tuned.so
<br>
#7  0x0000002a956deae3 in PMPI_Bcast ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /san/mpi/openmpi-1.1-gcc/lib/libmpi.so.0
<br>
#8  0x000000000040bcc7 in main ()
<br>
<p>Other random information:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The two processes stuck in MPI_Bcast are not on the same node.  
<br>
This has been the case both times I've gone through the backtraces,  
<br>
but I can't conclude that it's a necessary condition.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- If I force the use of the &quot;basic&quot; MCA for collectives, this  
<br>
problem does not occur.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- If I don't oversubscribe the nodes, things seem to work properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The C++ program source and result of ompi_info are attached
<br>
<p>This should be easy to reproduce for anyone with access to Odin. I'm  
<br>
using Open MPI 1.1 configured with no special options. It is  
<br>
available as the module &quot;mpi/openmpi-1.1-gcc&quot; on the cluster. I'm  
<br>
using SLURM interactively to allocate the nodes before executing mpirun:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;srun -A -N 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doug Gregor
<br>
<p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1504/broadcast_skeleton_content.cpp">broadcast_skeleton_content.cpp</a>
</ul>
<!-- attachment="broadcast_skeleton_content.cpp" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1504/ompi_info.log">ompi_info.log</a>
</ul>
<!-- attachment="ompi_info.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1505.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
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
