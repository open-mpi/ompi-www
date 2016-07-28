<?
$subject_val = "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 05:17:56 2015" -->
<!-- isoreceived="20150114101756" -->
<!-- sent="Wed, 14 Jan 2015 10:17:50 +0000" -->
<!-- isosent="20150114101750" -->
<!-- name="Victor Vysotskiy" -->
<!-- email="victor.vysotskiy_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c" -->
<!-- id="8D58A4B5E6148C419C6AD6334962375DDD9BD45C_at_UWMBX04.uw.lu.se" -->
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
<strong>Subject:</strong> [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c<br>
<strong>From:</strong> Victor Vysotskiy (<em>victor.vysotskiy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-14 05:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26176.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>Previous message:</strong> <a href="26174.php">Gilles Gouaillardet: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26176.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>Reply:</strong> <a href="26176.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>Maybe reply:</strong> <a href="26183.php">Victor Vysotskiy: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>Our parallel applications behaves strange when it is compiled with Openmpi v1.8.4 on both Linux and Mac OS X platforms.  The Valgrind reports memory problems in OpenMPI rather than in our code:
<br>
<p>=4440== Invalid read of size 1
<br>
==4440==    at 0xCAD6D37: ompi_osc_rdma_callback (osc_rdma_data_move.c:1650)
<br>
==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
<br>
==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
<br>
==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
<br>
==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
<br>
==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
<br>
==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
<br>
==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
<br>
==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
<br>
==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
<br>
==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
<br>
==4440==    by 0xD149BCB: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:194)
<br>
==4440==  Address 0xd6d5d80 is 0 bytes inside a block of size 8,208 alloc'd
<br>
==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
<br>
==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
<br>
==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
<br>
==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
<br>
==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
<br>
==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
<br>
<p>==4440== Invalid read of size 2
<br>
==4440==    at 0xCAD68C4: process_frag (osc_rdma_data_move.c:1554)
<br>
==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
<br>
==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
<br>
==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
<br>
==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
<br>
==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
<br>
==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
<br>
==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
<br>
==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
<br>
==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
<br>
==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
<br>
==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
<br>
==4440==  Address 0xd6d5d88 is 8 bytes inside a block of size 8,208 alloc'd
<br>
==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
<br>
==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
<br>
==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
<br>
==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)  
<br>
==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
<br>
==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
<br>
...
<br>
<p>Enclosed please find the complete report for the master processes.  Could it be that these invalid memory operations are caused by our code?  The line 94 in our code looks like:
<br>
<p>MPI_Win_create(buff,size,sizeof(long int),MPI_INFO_NULL,MPI_COMM_WORLD,&amp;twin);
<br>
<p>/* char *buff;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win twin;
<br>
*/
<br>
<p>I would greatly appreciate any help you can give me in working this problem.
<br>
<p>With best regards,
<br>
Victor.
<br>
<p>P.s. The output of &quot;ompi_info -- all&quot; is  also attached. 
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26175/valgrind.openmpi_1.8.4.txt">valgrind.openmpi_1.8.4.txt</a>
</ul>
<!-- attachment="valgrind.openmpi_1.8.4.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26175/ompi_info.1.8.4.txt">ompi_info.1.8.4.txt</a>
</ul>
<!-- attachment="ompi_info.1.8.4.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26176.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>Previous message:</strong> <a href="26174.php">Gilles Gouaillardet: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26176.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>Reply:</strong> <a href="26176.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>Maybe reply:</strong> <a href="26183.php">Victor Vysotskiy: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
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
