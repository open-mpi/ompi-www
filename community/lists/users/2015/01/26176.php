<?
$subject_val = "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 10:52:52 2015" -->
<!-- isoreceived="20150114155252" -->
<!-- sent="Wed, 14 Jan 2015 08:52:52 -0700" -->
<!-- isosent="20150114155252" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c" -->
<!-- id="20150114155252.GA44762_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375DDD9BD45C_at_UWMBX04.uw.lu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-14 10:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26177.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26175.php">Victor Vysotskiy: "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>In reply to:</strong> <a href="26175.php">Victor Vysotskiy: "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26183.php">Victor Vysotskiy: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you turned on valgrind support in Open MPI. That is required to
<br>
quite these bogus warnings.
<br>
<p>-Nathan
<br>
<p>On Wed, Jan 14, 2015 at 10:17:50AM +0000, Victor Vysotskiy wrote:
<br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our parallel applications behaves strange when it is compiled with Openmpi v1.8.4 on both Linux and Mac OS X platforms.  The Valgrind reports memory problems in OpenMPI rather than in our code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6D37: ompi_osc_rdma_callback (osc_rdma_data_move.c:1650)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD149BCB: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:194)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d80 is 0 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD68C4: process_frag (osc_rdma_data_move.c:1554)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d88 is 8 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)  
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Enclosed please find the complete report for the master processes.  Could it be that these invalid memory operations are caused by our code?  The line 94 in our code looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Win_create(buff,size,sizeof(long int),MPI_INFO_NULL,MPI_COMM_WORLD,&amp;twin);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* char *buff;
</span><br>
<span class="quotelev1">&gt;     MPI_Aint size;
</span><br>
<span class="quotelev1">&gt;     MPI_Win twin;
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would greatly appreciate any help you can give me in working this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Victor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.s. The output of &quot;ompi_info -- all&quot; is  also attached. 
</span><br>
<p><span class="quotelev1">&gt; ==4440== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt; ==4440== Copyright (C) 2002-2012, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt; ==4440== Using Valgrind-3.8.1 and LibVEX; rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Warning: set address range perms: large range [0x1617c028, 0x2617c058) (noaccess)
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6D37: ompi_osc_rdma_callback (osc_rdma_data_move.c:1650)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD149BCB: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:194)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d80 is 0 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6D74: ompi_osc_rdma_callback (osc_rdma_data_move.c:1654)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD149BCB: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:194)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d80 is 0 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD68C4: process_frag (osc_rdma_data_move.c:1554)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d88 is 8 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD68CF: process_frag (osc_rdma_data_move.c:1554)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d84 is 4 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6C02: process_frag (osc_rdma_data_move.c:1560)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d88 is 8 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6917: process_frag (osc_rdma_data_move.c:1561)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d91 is 17 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6935: process_frag (osc_rdma_data_move.c:1561)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d90 is 16 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6969: process_frag (osc_rdma_data_move.c:1566)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d91 is 17 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6988: process_frag (osc_rdma_data_move.c:1567)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d90 is 16 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6A4E: process_frag (osc_rdma_data_move.c:1583)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d84 is 4 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCADE072: ompi_osc_rdma_process_lock (osc_rdma_passive_target.c:802)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A60: process_frag (osc_rdma_data_move.c:1583)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d94 is 20 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCADE10F: ompi_osc_rdma_process_lock (osc_rdma_passive_target.c:816)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A60: process_frag (osc_rdma_data_move.c:1583)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d98 is 24 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6EFC: ompi_osc_rdma_callback (osc_rdma_data_move.c:1684)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD149BCB: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:194)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d80 is 0 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6F07: ompi_osc_rdma_callback (osc_rdma_data_move.c:1685)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD149BCB: ompi_coll_tuned_barrier_intra_dec_fixed (coll_tuned_decision_fixed.c:194)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d81 is 1 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6A08: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d84 is 4 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F6E25: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:566)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD50C8: process_acc (osc_rdma_data_move.c:1166)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5db0 is 48 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F6E34: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:574)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD50C8: process_acc (osc_rdma_data_move.c:1166)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5db4 is 52 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD50E7: process_acc (osc_rdma_data_move.c:1171)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5da0 is 32 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD3D51: ompi_osc_rdma_acc_start (osc_rdma_data_move.c:802)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD5137: process_acc (osc_rdma_data_move.c:1175)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5da8 is 40 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD3D70: ompi_osc_rdma_acc_start (osc_rdma_data_move.c:803)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD5137: process_acc (osc_rdma_data_move.c:1175)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d98 is 24 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD3DC4: ompi_osc_rdma_acc_start (osc_rdma_data_move.c:810)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD5137: process_acc (osc_rdma_data_move.c:1175)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d94 is 20 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x5196482: ompi_op_base_2buff_sum_int64_t (op_base_functions.c:235)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A25C6: ompi_op_reduce (op.h:571)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A34E6: ompi_osc_base_process_op (osc_base_obj_convert.c:179)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3411: osc_rdma_accumulate_buffer (osc_rdma_data_move.c:598)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3DED: ompi_osc_rdma_acc_start (osc_rdma_data_move.c:810)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD5137: process_acc (osc_rdma_data_move.c:1175)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5db8 is 56 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD5249: process_acc (osc_rdma_data_move.c:1186)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A1A: process_frag (osc_rdma_data_move.c:1576)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5da0 is 32 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6AAE: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d84 is 4 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD31A8: process_get (osc_rdma_data_move.c:528)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dd0 is 80 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F6E88: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:585)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5ddc is 92 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F6E92: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:586)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5de0 is 96 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F6E9C: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:587)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5de4 is 100 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F6F46: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:609)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5de8 is 104 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F73ED: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F7408: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F83F3: ompi_datatype_create_indexed (ompi_datatype_create_indexed.c:45)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F741D: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5df8 is 120 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F83FC: ompi_datatype_create_indexed (ompi_datatype_create_indexed.c:46)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F741D: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5df0 is 112 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F845D: ompi_datatype_create_indexed (ompi_datatype_create_indexed.c:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F741D: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dfc is 124 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F84D7: ompi_datatype_create_indexed (ompi_datatype_create_indexed.c:58)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F741D: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dfc is 124 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F84F0: ompi_datatype_create_indexed (ompi_datatype_create_indexed.c:59)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F741D: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5df4 is 116 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F8509: ompi_datatype_create_indexed (ompi_datatype_create_indexed.c:60)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F741D: __ompi_datatype_create_from_args (ompi_datatype_args.c:698)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5df4 is 116 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F743A: __ompi_datatype_create_from_args (ompi_datatype_args.c:700)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F7450: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F5AA0: ompi_datatype_set_args (ompi_datatype_args.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F5AAB: ompi_datatype_set_args (ompi_datatype_args.c:153)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2E9D0: memcpy@@GLIBC_2.14 (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F5AE4: ompi_datatype_set_args (ompi_datatype_args.c:153)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5df6 is 118 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2E9E4: memcpy@@GLIBC_2.14 (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F5AE4: ompi_datatype_set_args (ompi_datatype_args.c:153)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5df2 is 114 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F5AEC: ompi_datatype_set_args (ompi_datatype_args.c:154)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x50F5AF8: ompi_datatype_set_args (ompi_datatype_args.c:155)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dec is 108 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2E9D0: memcpy@@GLIBC_2.14 (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F5B31: ompi_datatype_set_args (ompi_datatype_args.c:155)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dfe is 126 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2E9E4: memcpy@@GLIBC_2.14 (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F5B31: ompi_datatype_set_args (ompi_datatype_args.c:155)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7487: __ompi_datatype_create_from_args (ompi_datatype_args.c:701)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7013: __ompi_datatype_create_from_packed_description (ompi_datatype_args.c:649)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50F7986: ompi_datatype_create_from_packed_description (ompi_datatype_args.c:788)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD20F1: ompi_osc_base_datatype_create (osc_base_obj_convert.h:52)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD2B4E: datatype_create (osc_rdma_data_move.c:333)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD3223: process_get (osc_rdma_data_move.c:536)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dfa is 122 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD3242: process_get (osc_rdma_data_move.c:542)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dc2 is 66 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD3252: process_get (osc_rdma_data_move.c:542)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dc4 is 68 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD3357: process_get (osc_rdma_data_move.c:546)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6AC0: process_frag (osc_rdma_data_move.c:1593)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5dc8 is 72 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6A8B: process_frag (osc_rdma_data_move.c:1589)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD157FC1: ompi_coll_tuned_barrier_intra_two_procs (coll_tuned_barrier.c:318)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5d84 is 4 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD60AB: process_unlock (osc_rdma_data_move.c:1400)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A9D: process_frag (osc_rdma_data_move.c:1589)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5e08 is 136 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD6108: process_unlock (osc_rdma_data_move.c:1404)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A9D: process_frag (osc_rdma_data_move.c:1589)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5e08 is 136 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCAD614B: process_unlock (osc_rdma_data_move.c:1406)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A9D: process_frag (osc_rdma_data_move.c:1589)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xD1578C3: ompi_coll_tuned_sendrecv_zero (coll_tuned_barrier.c:77)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5e08 is 136 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; ==4440== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0xCADE54C: ompi_osc_rdma_process_unlock (osc_rdma_passive_target.c:928)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6192: process_unlock (osc_rdma_data_move.c:1411)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6A9D: process_frag (osc_rdma_data_move.c:1589)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD6DBB: ompi_osc_rdma_callback (osc_rdma_data_move.c:1656)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05E87F: ompi_request_complete (request.h:402)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC05F1F6: recv_request_pml_complete (pml_ob1_recvreq.h:181)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xC060476: mca_pml_ob1_recv_frag_callback_match (pml_ob1_recvfrag.c:243)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9F9D4E: mca_btl_vader_check_fboxes (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xB9FC23C: mca_btl_vader_component_progress (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x606C1C7: opal_progress (opal_progress.c:187)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E7A22: opal_condition_wait (condition.h:78)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50E8360: ompi_request_default_wait_all (req_wait.c:281)
</span><br>
<span class="quotelev1">&gt; ==4440==  Address 0xd6d5e04 is 132 bytes inside a block of size 8,208 alloc'd
</span><br>
<span class="quotelev1">&gt; ==4440==    at 0x4C2CD7B: malloc (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x60BAD50: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0xCAD07DF: component_select (osc_rdma_component.c:462)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51A2253: ompi_osc_base_select (osc_base_init.c:73)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x50EF1E7: ompi_win_create (win.c:152)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x51625AB: PMPI_Win_create (pwin_create.c:79)
</span><br>
<span class="quotelev1">&gt; ==4440==    by 0x5B3647: gtsk_setup_ (gtsk_nxtval.c:94)
</span><br>
<span class="quotelev1">&gt; ==4440== 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt;                  Package: Open MPI victor_at_quant Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.8.4
</span><br>
<span class="quotelev1">&gt;   Open MPI repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.8.4
</span><br>
<span class="quotelev1">&gt;   Open RTE repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.8.4
</span><br>
<span class="quotelev1">&gt;       OPAL repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Dec 19, 2014
</span><br>
<span class="quotelev1">&gt;                  MPI API: 3.0
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.8.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: /opt/mpi/openmpi-1.8.4.dbg
</span><br>
<span class="quotelev1">&gt;              Exec_prefix: /opt/mpi/openmpi-1.8.4.dbg
</span><br>
<span class="quotelev1">&gt;                   Bindir: /opt/mpi/openmpi-1.8.4.dbg/bin
</span><br>
<span class="quotelev1">&gt;                  Sbindir: /opt/mpi/openmpi-1.8.4.dbg/sbin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /opt/mpi/openmpi-1.8.4.dbg/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /opt/mpi/openmpi-1.8.4.dbg/include
</span><br>
<span class="quotelev1">&gt;                   Mandir: /opt/mpi/openmpi-1.8.4.dbg/share/man
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /opt/mpi/openmpi-1.8.4.dbg/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Libexecdir: /opt/mpi/openmpi-1.8.4.dbg/libexec
</span><br>
<span class="quotelev1">&gt;              Datarootdir: /opt/mpi/openmpi-1.8.4.dbg/share
</span><br>
<span class="quotelev1">&gt;                  Datadir: /opt/mpi/openmpi-1.8.4.dbg/share
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /opt/mpi/openmpi-1.8.4.dbg/etc
</span><br>
<span class="quotelev1">&gt;           Sharedstatedir: /opt/mpi/openmpi-1.8.4.dbg/com
</span><br>
<span class="quotelev1">&gt;            Localstatedir: /opt/mpi/openmpi-1.8.4.dbg/var
</span><br>
<span class="quotelev1">&gt;                  Infodir: /opt/mpi/openmpi-1.8.4.dbg/share/info
</span><br>
<span class="quotelev1">&gt;               Pkgdatadir: /opt/mpi/openmpi-1.8.4.dbg/share/openmpi
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /opt/mpi/openmpi-1.8.4.dbg/lib/openmpi
</span><br>
<span class="quotelev1">&gt;            Pkgincludedir: /opt/mpi/openmpi-1.8.4.dbg/include/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: quant
</span><br>
<span class="quotelev1">&gt;            Configured by: victor
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Jan 12 23:20:01 UTC 2015
</span><br>
<span class="quotelev1">&gt;           Configure host: quant
</span><br>
<span class="quotelev1">&gt;                 Built by: victor
</span><br>
<span class="quotelev1">&gt;                 Built on: m??n 12 jan 2015 23:30:55 UTC
</span><br>
<span class="quotelev1">&gt;               Built host: quant
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;              Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;             Fort use mpi: yes (limited: overloading)
</span><br>
<span class="quotelev1">&gt;        Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;         Fort use mpi_f08: no
</span><br>
<span class="quotelev1">&gt;  Fort mpi_f08 compliance: The mpi_f08 module was not built
</span><br>
<span class="quotelev1">&gt;   Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;            Java bindings: no
</span><br>
<span class="quotelev1">&gt;   Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt;       C compiler version: 4.7.3
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;            Fort compiler: gfortran
</span><br>
<span class="quotelev1">&gt;        Fort compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;          Fort ignore TKR: no
</span><br>
<span class="quotelev1">&gt;    Fort 08 assumed shape: no
</span><br>
<span class="quotelev1">&gt;       Fort optional args: no
</span><br>
<span class="quotelev1">&gt;           Fort INTERFACE: yes
</span><br>
<span class="quotelev1">&gt;     Fort ISO_FORTRAN_ENV: yes
</span><br>
<span class="quotelev1">&gt;        Fort STORAGE_SIZE: no
</span><br>
<span class="quotelev1">&gt;       Fort BIND(C) (all): no
</span><br>
<span class="quotelev1">&gt;       Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt;  Fort SUBROUTINE BIND(C): no
</span><br>
<span class="quotelev1">&gt;        Fort TYPE,BIND(C): no
</span><br>
<span class="quotelev1">&gt;  Fort T,BIND(C,name=&quot;a&quot;): no
</span><br>
<span class="quotelev1">&gt;             Fort PRIVATE: no
</span><br>
<span class="quotelev1">&gt;           Fort PROTECTED: no
</span><br>
<span class="quotelev1">&gt;            Fort ABSTRACT: no
</span><br>
<span class="quotelev1">&gt;        Fort ASYNCHRONOUS: no
</span><br>
<span class="quotelev1">&gt;           Fort PROCEDURE: no
</span><br>
<span class="quotelev1">&gt;            Fort C_FUNLOC: no
</span><br>
<span class="quotelev1">&gt;  Fort f08 using wrappers: no
</span><br>
<span class="quotelev1">&gt;          Fort MPI_SIZEOF: no
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: yes
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 8
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 8
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 16
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: 16
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 8
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: 16
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;   Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;    Fort use mpi_f08 prof: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -g -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -g -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -g
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS: -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS: -lm -lnuma -ldl -lutil
</span><br>
<span class="quotelev1">&gt;   Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;   MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: always
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;    Host topology support: yes
</span><br>
<span class="quotelev1">&gt;           MPI extensions: 
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;    C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value: &quot;/home/victor/.openmpi/mca-params.conf:/opt/mpi/openmpi-1.8.4.dbg/etc/openmpi-mca-params.conf&quot;, data source: default, level: 2 user/detail, type: string, deprecated, synonym of: mca_base_param_files)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing variable values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/opt/mpi/openmpi-1.8.4.dbg/lib/openmpi:/home/victor/.openmpi/components&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: mca_base_component_path)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: mca_base_component_show_load_errors)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: mca_base_component_disable_dlopen)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &quot;stderr&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: mca_base_verbose)
</span><br>
<span class="quotelev1">&gt;                           Specifies where the default error output stream goes (this is separate from distinct help messages).  Accepts a comma-delimited list of: stderr, stdout, syslog, syslogpri:&lt;notice|info|debug&gt;, syslogid:&lt;str&gt; (where str is the prefix string for all syslog notices), file[:filename] (if filename is not specified, a default filename is used), fileappend (if not specified, the file is opened for truncation), level[:N] (if specified, integer verbose level; otherwise, 0 is implied)
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_files&quot; (current value: &quot;/home/victor/.openmpi/mca-params.conf:/opt/mpi/openmpi-1.8.4.dbg/etc/openmpi-mca-params.conf&quot;, data source: default, level: 2 user/detail, type: string, synonyms: mca_param_files)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing variable values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: informational &quot;mca_base_override_param_file&quot; (current value: &quot;/opt/mpi/openmpi-1.8.4.dbg/etc/openmpi-mca-params-override.conf&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Variables set in this file will override any value set inthe environment or another configuration file
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_suppress_override_warning&quot; (current value: &quot;false&quot;, data source: default, level: 2 user/detail, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Suppress warnings when attempting to set an overridden value (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_prefix&quot; (current value: &quot;&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter file sets
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path&quot; (current value: &quot;/opt/mpi/openmpi-1.8.4.dbg/share/openmpi/amca-param-sets:/home/victor/Develop/MOLCAS/molcas.master.openmpi184&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path_force&quot; (current value: &quot;&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_component_path&quot; (current value: &quot;/opt/mpi/openmpi-1.8.4.dbg/lib/openmpi:/home/victor/.openmpi/components&quot;, data source: default, level: 9 dev/all, type: string, synonyms: mca_component_path)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_component_show_load_errors&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: mca_component_show_load_errors)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_component_disable_dlopen&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: mca_component_disable_dlopen)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_verbose&quot; (current value: &quot;stderr&quot;, data source: default, level: 9 dev/all, type: string, synonyms: mca_verbose)
</span><br>
<span class="quotelev1">&gt;                           Specifies where the default error output stream goes (this is separate from distinct help messages).  Accepts a comma-delimited list of: stderr, stdout, syslog, syslogpri:&lt;notice|info|debug&gt;, syslogid:&lt;str&gt; (where str is the prefix string for all syslog notices), file[:filename] (if filename is not specified, a default filename is used), fileappend (if not specified, the file is opened for truncation), level[:N] (if specified, integer verbose level; otherwise, 0 is implied)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,7,8,11&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of integer signal numbers to Open MPI to attempt to intercept.  Upon receipt of the intercepted signal, Open MPI will display a stack trace and abort.  Open MPI will *not* replace signals if handlers are already installed by the time MPI_INIT is invoked.  Optionally append &quot;:complain&quot; to any signal number in the comma-delimited list to make Open MPI complain if it detects another signal handler (and therefore does not insert its own).
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current value: &quot;&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Set the specified system-imposed limits to the specified value, including &quot;unlimited&quot;.Supported params: core, filesize, maxmem, openfiles, stacksize, maxchildren
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_progress_debug&quot; (current value: &quot;false&quot;, data source: default, level: 8 dev/detail, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Set to non-zero to debug progress engine features
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_debug_threads&quot; (current value: &quot;false&quot;, data source: default, level: 8 dev/detail, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Debug thread usage within OPAL. Reports out when threads are acquired and released.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_net_private_ipv4&quot; (current value: &quot;10.0.0.0/8;172.16.0.0/12;192.168.0.0/16;169.254.0.0/16&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Semicolon-delimited list of CIDR notation entries specifying what networks are considered &quot;private&quot; (default value based on RFC1918 and RFC3330)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_event_include&quot; (current value: &quot;poll&quot;, data source: default, level: 3 user/all, type: string, synonym of: event_libevent2021_event_include)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of libevent subsystems to use (epoll, poll, select -- available on your platform)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the backtrace framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA compress: parameter &quot;compress&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the compress framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;             MCA compress: parameter &quot;compress_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the compress framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA compress: parameter &quot;compress_bzip_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the COMPRESS bzip component (default: 10)
</span><br>
<span class="quotelev1">&gt;             MCA compress: parameter &quot;compress_bzip_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbose level for the COMPRESS bzip component
</span><br>
<span class="quotelev1">&gt;             MCA compress: parameter &quot;compress_gzip_priority&quot; (current value: &quot;15&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the COMPRESS gzip component (default: 15)
</span><br>
<span class="quotelev1">&gt;             MCA compress: parameter &quot;compress_gzip_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbose level for the COMPRESS gzip component
</span><br>
<span class="quotelev1">&gt;                  MCA crs: parameter &quot;crs&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the crs framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA crs: parameter &quot;crs_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the crs framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA crs: informational &quot;crs_none_priority&quot; (current value: &quot;1&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the crs none component
</span><br>
<span class="quotelev1">&gt;                  MCA crs: parameter &quot;crs_none_select_warning&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable warning when the 'none' component is selected when checkpoint/restart functionality is requested.[Default = disabled/no-warning]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                   MCA db: parameter &quot;db&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the db framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA db: parameter &quot;db_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the db framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA db: parameter &quot;db_hash_store_priority&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority dictating order in which store commands will given to database components
</span><br>
<span class="quotelev1">&gt;                   MCA db: parameter &quot;db_hash_fetch_priority&quot; (current value: &quot;100&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority dictating order in which fetch commands will given to database components
</span><br>
<span class="quotelev1">&gt;                   MCA db: parameter &quot;db_print_file&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Print to the indicated file (- =&gt; stdout, + =&gt; stderr)
</span><br>
<span class="quotelev1">&gt;                MCA event: parameter &quot;event&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the event framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA event: parameter &quot;event_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the event framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA event: parameter &quot;event_libevent2021_event_include&quot; (current value: &quot;poll&quot;, data source: default, level: 3 user/all, type: string, synonyms: opal_event_include)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of libevent subsystems to use (epoll, poll, select -- available on your platform)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the hwloc framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the hwloc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_mem_alloc_policy&quot; (current value: &quot;none&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           General memory allocations placement policy (this is not memory binding). &quot;none&quot; means that no memory policy is applied. &quot;local_only&quot; means that a process' memory allocations will be restricted to its local NUMA node. If using direct launch, this policy will not be in effect until after MPI_INIT. Note that operating system paging policies are unaffected by this setting. For example, if &quot;local_only&quot; is used and local NUMA node memory is exhausted, a new memory allocation may cause paging.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;none&quot;, 1:&quot;local_only&quot;
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_mem_bind_failure_action&quot; (current value: &quot;warn&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           What Open MPI will do if it explicitly tries to bind memory to a specific NUMA location, and fails.  Note that this is a different case than the general allocation policy described by hwloc_base_alloc_policy.  A value of &quot;silent&quot; means that Open MPI will proceed without comment. A value of &quot;warn&quot; means that Open MPI will warn the first time this happens, but allow the job to continue (possibly with degraded performance).  A value of &quot;error&quot; means that Open MPI will abort the job if this happens.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;silent&quot;, 1:&quot;warn&quot;, 2:&quot;error&quot;
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_binding_policy&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Policy for binding processes. Allowed values: none, hwthread, core, l1cache, l2cache, l3cache, socket, numa, board (&quot;none&quot; is the default when oversubscribed, &quot;core&quot; is the default when np&lt;=2, and &quot;socket&quot; is the default when np&gt;2). Allowed qualifiers: overload-allowed, if-supported
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_bind_to_core&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Bind processes to cores
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_bind_to_socket&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Bind processes to sockets
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_report_bindings&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Report bindings to stderr
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_slot_list&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           List of processor IDs to bind processes to [default=NULL]
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_cpu_set&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of ranges specifying logical cpus allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_use_hwthreads_as_cpus&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Use hardware threads as independent cpus
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA hwloc: parameter &quot;hwloc_base_topo_file&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Read local topology from file instead of directly sensing it
</span><br>
<span class="quotelev1">&gt;                   MCA if: parameter &quot;if&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the if framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA if: parameter &quot;if_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the if framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA if: parameter &quot;if_base_do_not_resolve&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, do not attempt to resolve interfaces
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                   MCA if: parameter &quot;if_base_retain_loopback&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, retain loopback interfaces
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: parameter &quot;memchecker&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memchecker framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: parameter &quot;memchecker_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memchecker framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: parameter &quot;memchecker_valgrind_priority&quot; (current value: &quot;0&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority for the memchecker valgrind component (default: 0)
</span><br>
<span class="quotelev1">&gt;               MCA memcpy: parameter &quot;memcpy&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memcpy framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA memcpy: parameter &quot;memcpy_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memcpy framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memory framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_linux_ptmalloc2_available&quot; (current value: &quot;true&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether ptmalloc2 support is included in Open MPI or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_linux_ummunotify_available&quot; (current value: &quot;false&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether ummunotify support is included in Open MPI or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_linux_ptmalloc2_enable&quot; (current value: &quot;-1&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Whether to enable ptmalloc2 support or not (negative = try to enable, but continue even if support is not available, 0 = do not enable support, positive = try to enable and fail if support is not available)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_linux_ummunotify_enable&quot; (current value: &quot;-1&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Whether to enable ummunotify support or not (negative = try to enable, but continue even if support is not available, 0 = do not enable support, positive = try to enable and fail if support is not available)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_linux_disable&quot; (current value: &quot;false&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If this MCA parameter is set to 1 **VIA ENVIRONMENT VARIABLE ONLY*** (this MCA parameter *CANNOT* be set in a file or on the mpirun command line!), this component will be disabled and will not attempt to use either ummunotify or memory hook support
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA pstat: parameter &quot;pstat&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pstat framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA pstat: parameter &quot;pstat_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pstat framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA sec: parameter &quot;sec&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sec framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA sec: parameter &quot;sec_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sec framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the shmem framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the shmem framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_mmap_priority&quot; (current value: &quot;50&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority for shmem mmap component (default: 50)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_mmap_enable_nfs_warning&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable the warning emitted when Open MPI detects that its shared memory backing file is located on a network filesystem (1 = enabled, 0 = disabled).
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_mmap_relocate_backing_file&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Whether to change the default placement of backing files or not (Negative = try to relocate backing files to an area rooted at the path specified by shmem_mmap_backing_file_base_dir, but continue with the default path if the relocation fails, 0 = do not relocate, Positive = same as the negative option, but will fail if the relocation fails.
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_mmap_backing_file_base_dir&quot; (current value: &quot;/dev/shm&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Specifies where backing files will be created when shmem_mmap_relocate_backing_file is in use.
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_posix_priority&quot; (current value: &quot;40&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority for the shmem posix component (default: 40)
</span><br>
<span class="quotelev1">&gt;                MCA shmem: parameter &quot;shmem_sysv_priority&quot; (current value: &quot;30&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority for the shmem sysv component (default: 30)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the timer framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Base of the session directory tree to be used by all processes
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_local_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Base of the session directory tree to be used by orterun/mpirun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_remote_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Base of the session directory tree on remote nodes, if required to be different from head node
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_session_dirs&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Prohibited locations for session directories (multiple locations separated by ',', default=NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_create_session_dirs&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Create session directories
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_execute_quiet&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Do not output error and help messages
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_report_silent_errors&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Report all errors, including silent ones
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_verbose&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for ORTE debug messages (default: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons_file&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether want stdout/stderr of daemons to go to a file or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_progress_thread_debug&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Debug level for ORTE progress threads
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_leave_session_attached&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether applications and/or daemons should leave their sessions attached so that any output can be received - this allows X forwarding without all the attendant debugging output
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_output_debugger_proctable&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to output the debugger proctable after launch (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debugger_test_daemon&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Name of the executable to be used to simulate a debugger colaunch (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debugger_test_attach&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Test debugger colaunch after debugger attachment
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debugger_check_rate&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Set rate (in secs) for auto-detect of debugger attachment (0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_do_not_launch&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Perform all necessary operations to prepare to launch the application, but do not actually launch it
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_spin&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Have any orteds spin until we can connect a debugger to them
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after init for debugging purposes
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail_delay&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after specified number of seconds (default: 0 =&gt; no delay)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_startup_timeout&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Seconds to wait for startup or job launch before declaring failed_to_start (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing_details&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Request that detailed timing data by reported
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@ @single_app@ : fxp @mpirun@ -a @mpirun_args@&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &quot;/opt/mpi/openmpi-1.8.4.dbg/etc/openmpi-default-hostfile&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Name of the default hostfile (relative or absolute path, &quot;none&quot; to ignore environmental or default MCA param setting)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_node_regex&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Regular expression defining nodes in the system
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_keep_fqdn_hostnames&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to keep FQDN hostnames [default: no]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_retain_aliases&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to keep aliases for host names [default: no]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_hostname_alias_index&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           If hostname aliases are being retained, which one to use for the debugger proc table [default: 1st alias]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_output&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Display all output in XML format (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tag_output&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Tag all output with [job,rank] (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_file&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Provide all output in XML format to the specified file
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timestamp_output&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Timestamp all application process output (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_output_filename&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Redirect output from application processes into filename.rank [default: NULL]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_show_resolved_nodenames&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Display any node names that are resolved to a different name (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_hetero_nodes&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Nodes in cluster may differ in topology, so send the topology back from each node [Default = false]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_launch_agent&quot; (current value: &quot;orted&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Command used to start processes on remote nodes (default: orted)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_fork_agent&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Command used to fork processes on remote nodes (default: NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_allocation_required&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether or not an allocation by a resource manager is required [default: no]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_map_stddiag_to_stderr&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Map output from opal_output to stderr of the local process [default: no]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xterm&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Create a new xterm window and display output from the specified ranks there [default: none]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_forward_job_control&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Forward SIGTSTP (after converting to SIGSTOP) and SIGCONT signals to the application procs [default: no]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_report_launch_progress&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Output a brief periodic report on launch progress [default: no]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_report_events&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           URI to which events are to be reported (default: NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_enable_recovery&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable recovery from process failure [Default = disabled]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_max_restarts&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Max number of times to restart a failed process
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_on_non_zero_status&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Abort the job if any process returns a non-zero exit status - no restart in such cases
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_allowed_exit_without_sync&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Process exiting without calling finalize will not trigger job termination
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_staged_execution&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Staged execution is being used
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_report_child_jobs_separately&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Return the exit status of the primary job only
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_stat_history_size&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of stat samples to keep
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_forward_envars&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited environmental variables to forward, can include value to set
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_max_vm_size&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of virtual machine - used to subdivide allocation
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_set_default_slots&quot; (current value: &quot;cores&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Set the number of slots on nodes that lack such info to the number of specified objects [a number, &quot;cores&quot; (default), &quot;numas&quot;, &quot;sockets&quot;, &quot;hwthreads&quot; (default if hwthreads_as_cpus is set), or &quot;none&quot; to skip this option]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_display_alloc&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: ras_base_display_alloc)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_display_devel_alloc&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: ras_base_display_devel_alloc)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_soft_locations&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Treat -host directives as desired, but not required
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_cores&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Restrict the ORTE daemons (including mpirun) to operate on the specified cores (comma-separated list of ranges)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: plm_rsh_agent)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_assume_same_shell&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, synonym of: plm_rsh_assume_same_shell)
</span><br>
<span class="quotelev1">&gt;                           If set to true, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell [default: 1]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_rankfile&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonym of: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt;                           Name of the rankfile to be used for mapping processes (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_help_aggregate&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If orte_base_help_aggregate is true, duplicate help messages will be aggregated rather than displayed individually.  This can be helpful for parallel jobs that experience multiple identical failures; rather than print out the same help/failure message N times, display it once with a count of how many processes sent the same message.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_ess_jobid&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonym of: ess_base_jobid)
</span><br>
<span class="quotelev1">&gt;                           Process jobid
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_ess_vpid&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonym of: ess_base_vpid)
</span><br>
<span class="quotelev1">&gt;                           Process vpid
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_ess_num_procs&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int, synonym of: ess_base_num_procs)
</span><br>
<span class="quotelev1">&gt;                           Used to discover the number of procs in the job
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: parameter &quot;dfs&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the dfs framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: parameter &quot;dfs_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the dfs framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: parameter &quot;dfs_orted_num_worker_threads&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of worker threads to use for processing file requests
</span><br>
<span class="quotelev1">&gt;                  MCA dfs: parameter &quot;dfs_test_select&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Apps select the test plug-in for the DFS framework
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the errmgr framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the errmgr framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_default_app_priority&quot; (current value: &quot;1000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the default_app errmgr component
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_default_hnp_priority&quot; (current value: &quot;1000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the default_hnp errmgr component
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_default_orted_priority&quot; (current value: &quot;1000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the default_orted errmgr component
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_default_tool_priority&quot; (current value: &quot;1000&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the default_tool errmgr component
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ess framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ess framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_base_stream_buffering&quot; (current value: &quot;default&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Adjust buffering for stdout/stderr [-1 system default] [0 unbuffered] [1 line buffered] [2 fully buffered] (Default: -1)
</span><br>
<span class="quotelev1">&gt;                           Valid values: -1:&quot;default&quot;, 0:&quot;unbuffered&quot;, 1:&quot;line_buffered&quot;, 2:&quot;fully_buffered&quot;
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_singleton_server&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: server)
</span><br>
<span class="quotelev1">&gt;                           Server to be used as HNP - [file|FILE]:&lt;filename&gt; or just uri
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the filem framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the filem framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_raw_flatten_directory_trees&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Put all files in the working directory instead of creating their respective directory trees
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the grpcomm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the grpcomm framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the iof framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the iof framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_output_limit&quot; (current value: &quot;2147483647&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum backlog of output messages [default: unlimited]
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_input_files&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of input files to be read and sent to stdin of procs (default: NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the odls framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the odls framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_sigkill_timeout&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Time to wait for a process to die after issuing a kill signal to it
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the oob framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_enable_module_progress_threads&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to independently progress OOB messages for each interface
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of peer connections to simultaneously maintain (-1 = infinite)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of times to try shutting down a connection before giving up
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: oob_tcp_include)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of devices and/or CIDR notation of TCP networks to use for Open MPI bootstrap communication (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive with oob_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: oob_tcp_exclude)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of devices and/or CIDR notation of TCP networks to NOT use for Open MPI bootstrap communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default value, it is mutually exclusive with oob_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_static_ipv4_ports&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Static ports for daemons and procs (IPv4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_dynamic_ipv4_ports&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Range of ports to be dynamically used by daemons and procs (IPv4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_disable_ipv4_family&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Disable the IPv4 interfaces
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the plm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the plm framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_num_concurrent&quot; (current value: &quot;128&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           How many plm_rsh_agent instances to invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_force_rsh&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_disable_qrsh&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Disable the launcher to use qrsh when under the Grid Engine parallel environment
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_daemonize_qrsh&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Daemonize the orted under the Grid Engine parallel environment
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_disable_llspawn&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Disable the use of llspawn when under the LoadLeveler environment
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_daemonize_llspawn&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Daemonize the orted when under the LoadLeveler environment
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh plm component
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_delay&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Delay between invocations of the remote agent (sec[:usec])
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_no_tree_spawn&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If set to true, do not launch via a tree-based topology
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default, level: 9 dev/all, type: string, synonyms: pls_rsh_agent, orte_rsh_agent)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_assume_same_shell&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: orte_assume_same_shell)
</span><br>
<span class="quotelev1">&gt;                           If set to true, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell [default: 1]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_pass_environ_mca_params&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If set to false, do not include mca params from the environment on the orted cmd line
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_slurm_args&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ras framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_display_alloc&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: orte_display_alloc)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_display_devel_alloc&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: orte_display_devel_alloc)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ras framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_loadleveler_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the loadleveler ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_simulator_slots&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of number of slots on each node to simulate
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_simulator_max_slots&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of number of max slots on each node to simulate
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_simulator_num_nodes&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of number of nodes to simulate for each topology
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_simulator_topo_files&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of files containing xml topology descriptions for simulated nodes
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_simulator_have_cpubind&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Topology supports binding to cpus
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_simulator_have_membind&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Topology supports binding to memory
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_dyn_allocate_timeout&quot; (current value: &quot;30&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of seconds to wait for Slurm dynamic allocation
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_enable_dyn_alloc&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether or not dynamic allocations are enabled
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_config_file&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Path to Slurm configuration file
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_enable_rolling_alloc&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable partial dynamic allocations
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmaps framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: rmaps_ppr_pernode)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int, synonyms: rmaps_ppr_n_pernode)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_persocket&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int, synonyms: rmaps_ppr_n_persocket)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/socket
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pattern&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: rmaps_ppr_pattern)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of number of processes on a given resource type [default: none]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_mapping_policy&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: rmaps_base_schedule_policy)
</span><br>
<span class="quotelev1">&gt;                           Mapping Policy [slot | hwthread | core (default:np&lt;=2) | l1cache | l2cache | l3cache | socket (default:np&gt;2) | numa | board | node | seq | dist | ppr], with allowed modifiers :PE=y,SPAN,OVERSUBSCRIBE,NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: rmaps_base_mapping_policy)
</span><br>
<span class="quotelev1">&gt;                           Mapping Policy [slot | hwthread | core (default:np&lt;=2) | l1cache | l2cache | l3cache | socket (default:np&gt;2) | numa | board | node | seq | dist | ppr], with allowed modifiers :PE=y,SPAN,OVERSUBSCRIBE,NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_ranking_policy&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Ranking Policy [slot (default:np&lt;=2) | hwthread | core | l1cache | l2cache | l3cache | socket (default:np&gt;2) | numa | board | node], with modifier :SPAN or :FILL
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_bycore&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to map and rank processes round-robin by core
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_byslot&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to map and rank processes round-robin by slot
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_bynode&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to map and rank processes round-robin by node
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_cpus_per_proc&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int, synonyms: rmaps_base_cpus_per_rank)
</span><br>
<span class="quotelev1">&gt;                           Number of cpus to use for each rank [1-2**15 (default=1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_cpus_per_rank&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int, synonym of: rmaps_base_cpus_per_proc)
</span><br>
<span class="quotelev1">&gt;                           Number of cpus to use for each rank [1-2**15 (default=1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on the same node as mpirun (default).  If true, do not schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of nodes - mpirun will return an error if there aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_oversubscribe&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If true, then allow oversubscription of nodes and overloading of processing elements
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the process map after it is computed
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_devel_map&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail process map after it is computed
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_topo_with_map&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the topology with the map
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_diffable_map&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a diffable process map after it is computed
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_topology&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           hwloc topology file (xml format) describing the topology of the compute nodes [default: none]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_ppr_pernode&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, synonym of: rmaps_base_pernode)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_ppr_n_pernode&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int, synonym of: rmaps_base_n_pernode)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_ppr_n_persocket&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int, synonym of: rmaps_base_n_persocket)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/socket
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_ppr_pattern&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonym of: rmaps_base_pattern)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of number of processes on a given resource type [default: none]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_ppr_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the ppr rmaps component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_lama_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the LAMA rmaps component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_lama_timing&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable timing information. [Default = disabled]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_lama_map&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           LAMA Map: Process layout iteration ordering (See documentation)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_lama_bind&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           LAMA Bind: Bind to the specified number of resources (See documentation)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_lama_mppr&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           LAMA MPPR: Maximum number of the specified resources available (See documentation)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_lama_ordering&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           LAMA Ordering: Ordering (s) sequential, (n) natural - Default: n (See documentation)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_mindist_priority&quot; (current value: &quot;20&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the mindist rmaps component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rank_file rmaps component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current value: &quot;&quot;, data source: default, level: 5 tuner/detail, type: string, synonyms: orte_rankfile)
</span><br>
<span class="quotelev1">&gt;                           Name of the rankfile to be used for mapping processes (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_rank_file_physical&quot; (current value: &quot;false&quot;, data source: default, level: 5 tuner/detail, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Rankfile contains physical cpu designations
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_resilient_priority&quot; (current value: &quot;40&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the resilient rmaps component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_resilient_fault_grp_file&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Filename that contains a description of fault groups for this system
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rr rmaps component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_seq_priority&quot; (current value: &quot;60&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the seq rmaps component
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_wrapper&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonym of: rml_base_wrapper)
</span><br>
<span class="quotelev1">&gt;                           Use a Wrapper component around the selected RML component
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_wrapper&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: rml_wrapper)
</span><br>
<span class="quotelev1">&gt;                           Use a Wrapper component around the selected RML component
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the routed framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the routed framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_radix&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Radix to be used for routed radix tree
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_radix_max_connections&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Send direct between daemons if the number of nodes is less than this number
</span><br>
<span class="quotelev1">&gt;               MCA sensor: parameter &quot;sensor&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sensor framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA sensor: parameter &quot;sensor_sample_rate&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int, deprecated, synonym of: sensor_base_sample_rate)
</span><br>
<span class="quotelev1">&gt;                           Sample rate in seconds
</span><br>
<span class="quotelev1">&gt;               MCA sensor: parameter &quot;sensor_log_samples&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: sensor_base_log_samples)
</span><br>
<span class="quotelev1">&gt;                           Log samples to database
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;               MCA sensor: parameter &quot;sensor_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sensor framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA sensor: parameter &quot;sensor_base_sample_rate&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int, synonyms: sensor_sample_rate)
</span><br>
<span class="quotelev1">&gt;                           Sample rate in seconds
</span><br>
<span class="quotelev1">&gt;               MCA sensor: parameter &quot;sensor_base_log_samples&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, synonyms: sensor_log_samples)
</span><br>
<span class="quotelev1">&gt;                           Log samples to database
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA snapc: parameter &quot;snapc&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the snapc framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA snapc: parameter &quot;snapc_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the snapc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA snapc: parameter &quot;snapc_base_only_one_seq&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Only store the most recent checkpoint sequence. [Default = disabled]
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA snapc: parameter &quot;snapc_base_global_snapshot_dir&quot; (current value: &quot;/home/victor&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: sstore_base_global_snapshot_dir)
</span><br>
<span class="quotelev1">&gt;                           The base directory to use when storing global snapshots
</span><br>
<span class="quotelev1">&gt;                MCA snapc: parameter &quot;snapc_base_global_snapshot_ref&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, deprecated, synonym of: sstore_base_global_snapshot_ref)
</span><br>
<span class="quotelev1">&gt;                           The global snapshot reference to be used for this job.  [Default = ompi_global_snapshot_MPIRUNPID.ckpt]
</span><br>
<span class="quotelev1">&gt;               MCA sstore: parameter &quot;sstore&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sstore framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA sstore: parameter &quot;sstore_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sstore framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA sstore: parameter &quot;sstore_base_global_snapshot_dir&quot; (current value: &quot;/home/victor&quot;, data source: default, level: 9 dev/all, type: string, synonyms: snapc_base_global_snapshot_dir)
</span><br>
<span class="quotelev1">&gt;                           The base directory to use when storing global snapshots
</span><br>
<span class="quotelev1">&gt;               MCA sstore: parameter &quot;sstore_base_global_snapshot_ref&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: snapc_base_global_snapshot_ref)
</span><br>
<span class="quotelev1">&gt;                           The global snapshot reference to be used for this job.  [Default = ompi_global_snapshot_MPIRUNPID.ckpt]
</span><br>
<span class="quotelev1">&gt;                MCA state: parameter &quot;state&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the state framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA state: parameter &quot;state_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the state framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA state: parameter &quot;state_novm_select&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Use this component
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA ompi: parameter &quot;ompi_hostname_cutoff&quot; (current value: &quot;4294967295&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           If the number of processes in the application exceeds the provided value,hostnames for remote processes will not be retrieved by applications [default: UINT32_MAX]
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_ddt_unpack_debug&quot; (current value: &quot;false&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to output debugging information in the ddt unpack functions (nonzero = enabled)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_ddt_pack_debug&quot; (current value: &quot;false&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to output debugging information in the ddt pack functions (nonzero = enabled)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_ddt_position_debug&quot; (current value: &quot;false&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Non zero lead to output generated by the datatype position functions
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_ddt_copy_debug&quot; (current value: &quot;false&quot;, data source: default, level: 3 user/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to output debugging information in the ddt copy functions (nonzero = enabled)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at run-time or not.  Possible values are 0 (no checking) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI communication (for MPI processes, will default to 1 when oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when their handles are freed
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mpi_alloc_mem_leaks&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           If &gt;0, MPI_FINALIZE will show up to this many instances of memory allocated by MPI_ALLOC_MEM that was not freed by MPI_FREE_MEM
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter values during MPI_INIT or not (good for reproducability of MPI jobs for debug purposes). Accepted values are all, default, file, api, and enviro - or a comma delimited combination of them
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this string to a valid filename tells Open MPI to dump all the MCA parameter values into a file suitable for reading via the mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message when MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT) and delay for that many seconds before exiting (a negative delay value means to never abort).  This allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: informational &quot;mpi_abort_print_stack&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool, deprecated, synonym of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up the MPI connections between MPI processes during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this setting can help bandwidth performance when repeatedly sending and receiving large messages with the same buffers over RDMA-based networks (0 = do not use &quot;leave pinned&quot; protocol, 1 = use &quot;leave pinned&quot; protocol, -1 = allow network to choose at runtime).
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot; protocol or not.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, issue a warning if program forks under conditions that could cause system errors
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: informational &quot;mpi_have_sparse_group_storage&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether this Open MPI installation supports storing of data in MPI groups in &quot;sparse&quot; formats (good for extremely large process count MPI jobs that create many communicators/groups)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: informational &quot;mpi_use_sparse_group_storage&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether to use &quot;sparse&quot; storage formats for MPI groups (only relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: informational &quot;mpi_built_with_cuda_support&quot; (current value: &quot;false&quot;, data source: default, level: 4 tuner/basic, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether CUDA GPU buffer support is built into library or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_cuda_support&quot; (current value: &quot;false&quot;, data source: default, level: 4 tuner/basic, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Whether CUDA GPU buffer support is enabled or not
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the allocator framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bcol framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bcol framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_base_string&quot; (current value: &quot;basesmuma,basesmuma,iboffload,ptpcoll,ugni&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default set of basic collective components to use
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_basesmuma_num_ctl_banks&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_basesmuma_num_buffs_per_bank&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_n_poll_loops&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_n_groups_supported&quot; (current value: &quot;100&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_radix_fanin&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_radix_fanout&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_radix_read_tree&quot; (current value: &quot;3&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_order_reduction_tree&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_k_nomial_radix&quot; (current value: &quot;3&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_num_to_probe&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_scatter_kary_radix&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_min_frag_size&quot; (current value: &quot;4096&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_max_frag_size&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_can_use_user_buffers&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_basesmuma_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           PTPCOLL component priority(from 0(low) to 90 (high))
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose PTPCOLL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_k_nomial_radix&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           The radix of K-Nomial Tree (starts from 2)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_narray_radix&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           The radix of Narray Tree (starts from 2)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_narray_knomial_radix&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           The radix of Narray/Knomial Tree for scatther-gather type algorithms(starts from 2)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_num_to_probe&quot; (current value: &quot;8&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of probe operation in single source data check(starts from 8)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_bcast_small_msg_known_root_alg&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Algoritm selection for bcast small messages known root(1 - K-nomial, 2 - N-array)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_bcast_large_msg_known_root_alg&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Algoritm selection for bcast large messages known root(1 - Binomial scatther-gather, 2 - N-array scather, K-nomial gather)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_barrier_alg&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Algoritm selection for Barrier(1 - Recursive doubling, 2 - Recursive K-ing)
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_min_frag_size&quot; (current value: &quot;4096&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Minimum fragment size
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_max_frag_size&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size
</span><br>
<span class="quotelev1">&gt;                 MCA bcol: parameter &quot;bcol_ptpcoll_can_use_user_buffers&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           User memory can be used by the collective algorithms
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;true&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_rndv_eager_limit&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_rdma_pipeline_send_length&quot; (current value: &quot;2147483647&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_rdma_pipeline_frag_size&quot; (current value: &quot;2147483647&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_pipeline_size&quot; (current value: &quot;2147614719&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_bandwidth&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: informational &quot;btl_sm_use_knem&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Whether knem support is desired or not (negative = try to enable knem support, but continue even if it is not available, 0 = do not enable knem support, positive = try to enable knem support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_knem_dma_min&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Minimum message size (in bytes) to use the knem DMA mode; ignored if knem does not support DMA mode (0 = do not use the knem DMA mode)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_knem_max_simultaneous&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Max number of simultaneous ongoing knem operations to support (0 = do everything synchronously, which probably gives the best large message latency; &gt;0 means to do all operations asynchronously, which supports better overlap for simultaneous large message sends)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_use_cma&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable CMA
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;64&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current value: &quot;120&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_flags&quot; (current value: &quot;1&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_rndv_eager_limit&quot; (current value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current value: &quot;32768&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_links&quot; (current value: &quot;1&quot;, data source: default, level: 4 tuner/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of devices and/or CIDR notation of networks to use for MPI communication (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive with btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1 user/basic, type: string)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of devices and/or CIDR notation of networks to NOT use for MPI communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default value, it is mutually exclusive with btl_tcp_if_include.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                           The size of the internal cache for each TCP connection. This cache is used to reduce the number of syscalls, by replacing them with memcpy. Every read will read the expected data plus the amount of the endpoint_cache
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current value: &quot;0&quot;, data source: default, level: 4 tuner/basic, type: int)
</span><br>
<span class="quotelev1">&gt;                           Whether to use Nagle's algorithm or not (using Nagle's algorithm may increase short message latency)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value: &quot;1024&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           The minimum port where the TCP BTL will try to bind (default 1024)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current value: &quot;64511&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with the port min, define a range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_warn_all_unfound_interfaces&quot; (current value: &quot;false&quot;, data source: default, level: 2 user/detail, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Issue a warning for all unfound interfaces included in if_exclude
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;100&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;314&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rdma_pipeline_send_length&quot; (current value: &quot;131072&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot; (current value: &quot;2147483647&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot; (current value: &quot;196608&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value: &quot;100&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect (0 = auto-detect value at run-time [not supported in all BTL modules], &gt;= 1 = bandwidth in Mbps)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current value: &quot;0&quot;, data source: default, level: 2 user/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_seq&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           If specified, a comma-delimited list of TCP interfaces.  Interfaces will be assigned, one to each MPI process, in a round-robin fashion on each server.  For example, if the list is &quot;eth0,eth1&quot; and four MPI processes are run on a single server, then local ranks 0 and 2 will use eth0 and local ranks 1 and 3 will use eth1.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_free_list_num&quot; (current value: &quot;8&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Initial number of fragments to allocate for shared memory communication.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_free_list_max&quot; (current value: &quot;4096&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments to allocate for shared memory communication.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_free_list_inc&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments to create on each allocation.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_memcpy_limit&quot; (current value: &quot;524288&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Message size to switch from using memove to memcpy. The relative speed of these two routines can vary by size.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_segment_size&quot; (current value: &quot;4194304&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of all shared memory buffers (default: 4M)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_max_inline_send&quot; (current value: &quot;256&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Maximum size to transfer using copy-in copy-out semantics
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_fbox_threshold&quot; (current value: &quot;16&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Number of sends required before an eager send buffer is setup for a peer (default: 16)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_fbox_max&quot; (current value: &quot;32&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of eager send buffers to allocate (default: 32)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_fbox_size&quot; (current value: &quot;4096&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Size of per-peer fast transfer buffers (default: 4k)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_single_copy_mechanism&quot; (current value: &quot;none&quot;, data source: default, level: 3 user/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Single copy mechanism to use (defaults to best available)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 3:&quot;none&quot;
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_exclusivity&quot; (current value: &quot;65536&quot;, data source: default, level: 7 dev/basic, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_flags&quot; (current value: &quot;8&quot;, data source: default, level: 5 tuner/detail, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128; flags only used by the &quot;bfo&quot; PML (ignored by others): FAILOVER_SUPPORT=512)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_rndv_eager_limit&quot; (current value: &quot;32768&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes, including header) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_eager_limit&quot; (current value: &quot;4096&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes, including header) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_vader_max_send_size&quot; (current value: &quot;32768&quot;, data source: default, level: 4 tuner/basic, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the coll framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the hierarchical coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Turn verbose message of the hierarchical coll component on/off
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_use_rdma&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Switch from the send btl list used to detect hierarchies to the rdma btl list
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_ignore_sm&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Ignore sm protocol when detecting hierarchies. Required to enable the usage of protocol specific collective operations
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_detection_alg&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Used to specify the algorithm for detecting Hierarchy.Choose between all or two levels of hierarchy
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_bcast_alg&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Used to specify the algorithm used for bcast operations.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_segment_size&quot; (current value: &quot;32768&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Used to specify the segment size for segmented algorithms.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_inter_priority&quot; (current value: &quot;40&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the inter coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_inter_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Turn verbose message of the inter coll component on/off
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_libnbc_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the libnbc coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           ML component priority(from 0(low) to 90 (high))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose ML information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_max_comm&quot; (current value: &quot;24&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of communicators that can use coll/ml
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_min_comm_size&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of communicator to use coll/ml
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_n_payload_mem_banks&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of payload memory banks
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_n_payload_buffs_per_bank&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of payload buffers per bank
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_payload_buffer_size&quot; (current value: &quot;4096&quot;, data source: default, level: 9 dev/all, type: unsigned long long)
</span><br>
<span class="quotelev1">&gt;                           Size of payload buffers
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_pipeline_depth&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Size of fragmentation pipeline
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_free_list_init_size&quot; (current value: &quot;128&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Initial size of free lists in coll/ml
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_free_list_grow_size&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Initial size of free lists in coll/ml
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_free_list_max_size&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Initial size of free lists in coll/ml
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_bcast_algorithm&quot; (current value: &quot;static&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Algorithm to use for broadcast
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;static&quot;, 1:&quot;sequential&quot;, 2:&quot;unknown-root&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_disable_allgather&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Disable Allgather
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_disable_reduce&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Disable Reduce
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_enable_fragmentation&quot; (current value: &quot;auto&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Disable/Enable fragmentation for large messages
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;disable&quot;, 1:&quot;enable&quot;, 2:&quot;auto&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_config_file&quot; (current value: &quot;/opt/mpi/openmpi-1.8.4.dbg/share/openmpi/mca-coll-ml.config&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           ML collectives configuration file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_memory_manager_list_size&quot; (current value: &quot;24&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Memory manager list size
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_memory_manager_block_size&quot; (current value: &quot;3145728&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Memory manager block size
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_ml_memory_manager_alignment&quot; (current value: &quot;3145728&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;                           Memory manager alignment
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current value: &quot;4096&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should usually be either the length of a cache line on most SMPs, or the size of a page on machines that support direct memory affinity page placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing data through shared memory (will be rounded up to the nearest control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a message passing area segment as currently being used or not (must be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's shared memory message passing area (must be &gt;= 2, and must be a multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the calculation of the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_sm_shared_mem_used_data&quot; (current value: &quot;548864&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used, per communicator, in the shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre-allocating memory for the fixed internal buffer used for message requests etc that is hung off the communicator data segment. I.e. if you have a 100'000 nodes you might not want to pre-allocate 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 6 tuner/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout followed by pipeline) topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;false&quot;, data source: default, level: 6 tuner/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static (compiled/if statements) or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_dynamic_rules_filename&quot; (current value: &quot;&quot;, data source: default, level: 6 tuner/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Filename of configuration file that contains the dynamic (@runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_allreduce_algorithm_count&quot; (current value: &quot;5&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of allreduce algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allreduce_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which allreduce algorithm is used. Can be locked down to any of: 0 ignore, 1 basic linear, 2 nonoverlapping (tuned reduce + tuned bcast), 3 recursive doubling, 4 ring, 5 segmented ring
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;basic_linear&quot;, 2:&quot;nonoverlapping&quot;, 3:&quot;recursive_doubling&quot;, 4:&quot;ring&quot;, 5:&quot;segmented_ring&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allreduce_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for allreduce algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allreduce_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for allreduce algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allreduce_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for allreduce algorithms. Only has meaning if algorithm is forced and supports chain topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_alltoall_algorithm_count&quot; (current value: &quot;5&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of alltoall algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_alltoall_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which alltoall algorithm is used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 pairwise, 3: modified bruck, 4: linear with sync, 5:two proc only.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;linear&quot;, 2:&quot;pairwise&quot;, 3:&quot;modified_bruck&quot;, 4:&quot;linear_sync&quot;, 5:&quot;two_proc&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_alltoall_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for alltoall algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_alltoall_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for alltoall algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_alltoall_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for alltoall algorithms. Only has meaning if algorithm is forced and supports chain topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_alltoall_algorithm_max_requests&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of outstanding send or recv requests.  Only has meaning for synchronized algorithms.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_allgather_algorithm_count&quot; (current value: &quot;6&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of allgather algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgather_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which allallgather algorithm is used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 bruck, 3 recursive doubling, 4 ring, 5 neighbor exchange, 6: two proc only.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;linear&quot;, 2:&quot;bruck&quot;, 3:&quot;recursive_doubling&quot;, 4:&quot;ring&quot;, 5:&quot;neighbor&quot;, 6:&quot;two_proc&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgather_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for allgather algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation. Currently, available algorithms do not support segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgather_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for allgather algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation. Currently, available algorithms do not support n-tree topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgather_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for allgather algorithms. Only has meaning if algorithm is forced and supports chain topo based operation. Currently, available algorithms do not support chain topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_allgatherv_algorithm_count&quot; (current value: &quot;5&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of allgatherv algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgatherv_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which allallgatherv algorithm is used. Can be locked down to choice of: 0 ignore, 1 default (allgathervv + bcast), 2 bruck, 3 ring, 4 neighbor exchange, 5: two proc only.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;default&quot;, 2:&quot;bruck&quot;, 3:&quot;ring&quot;, 4:&quot;neighbor&quot;, 5:&quot;two_proc&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgatherv_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for allgatherv algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation. Currently, available algorithms do not support segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgatherv_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for allgatherv algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation. Currently, available algorithms do not support n-tree topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_allgatherv_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for allgatherv algorithms. Only has meaning if algorithm is forced and supports chain topo based operation. Currently, available algorithms do not support chain topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_alltoallv_algorithm_count&quot; (current value: &quot;2&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of alltoallv algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_alltoallv_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which alltoallv algorithm is used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 pairwise.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;basic_linear&quot;, 2:&quot;pairwise&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_barrier_algorithm_count&quot; (current value: &quot;6&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of barrier algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_barrier_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which barrier algorithm is used. Can be locked down to choice of: 0 ignore, 1 linear, 2 double ring, 3: recursive doubling 4: bruck, 5: two proc only, 6: tree
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;linear&quot;, 2:&quot;double_ring&quot;, 3:&quot;recursive_doubling&quot;, 4:&quot;bruck&quot;, 5:&quot;two_proc&quot;, 6:&quot;tree&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_bcast_algorithm_count&quot; (current value: &quot;6&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of bcast algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_bcast_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which bcast algorithm is used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 chain, 3: pipeline, 4: split binary tree, 5: binary tree, 6: binomial tree.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;basic_linear&quot;, 2:&quot;chain&quot;, 3:&quot;pipeline&quot;, 4:&quot;split_binary_tree&quot;, 5:&quot;binary_tree&quot;, 6:&quot;binomial&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_bcast_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for bcast algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_bcast_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for bcast algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_bcast_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for bcast algorithms. Only has meaning if algorithm is forced and supports chain topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_reduce_algorithm_count&quot; (current value: &quot;6&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of reduce algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which reduce algorithm is used. Can be locked down to choice of: 0 ignore, 1 linear, 2 chain, 3 pipeline, 4 binary, 5 binomial, 6 in-order binary
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;linear&quot;, 2:&quot;chain&quot;, 3:&quot;pipeline&quot;, 4:&quot;binary&quot;, 5:&quot;binomial&quot;, 6:&quot;in-order_binary&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for reduce algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for reduce algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for reduce algorithms. Only has meaning if algorithm is forced and supports chain topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_algorithm_max_requests&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of outstanding send requests on leaf nodes. 0 means no limit.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_reduce_scatter_algorithm_count&quot; (current value: &quot;2&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of reduce_scatter algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_scatter_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which reduce reduce_scatter algorithm is used. Can be locked down to choice of: 0 ignore, 1 non-overlapping (Reduce + Scatterv), 2 recursive halving, 3 ring
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;non-overlapping&quot;, 2:&quot;recursive_halfing&quot;, 3:&quot;ring&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_scatter_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for reduce_scatter algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_scatter_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for reduce_scatter algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_scatter_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for reduce_scatter algorithms. Only has meaning if algorithm is forced and supports chain topo based operation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_gather_algorithm_count&quot; (current value: &quot;3&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of gather algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_gather_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which gather algorithm is used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 binomial, 3 linear with synchronization.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;basic_linear&quot;, 2:&quot;binomial&quot;, 3:&quot;linear_sync&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_gather_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for gather algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation. Currently, available algorithms do not support segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_gather_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for gather algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation. Currently, available algorithms do not support n-tree topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_gather_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for gather algorithms. Only has meaning if algorithm is forced and supports chain topo based operation. Currently, available algorithms do not support chain topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: informational &quot;coll_tuned_scatter_algorithm_count&quot; (current value: &quot;2&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of scatter algorithms available
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_scatter_algorithm&quot; (current value: &quot;ignore&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Which scatter algorithm is used. Can be locked down to choice of: 0 ignore, 1 basic linear, 2 binomial.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0:&quot;ignore&quot;, 1:&quot;basic_linear&quot;, 2:&quot;binomial&quot;
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_scatter_algorithm_segmentsize&quot; (current value: &quot;0&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Segment size in bytes used by default for scatter algorithms. Only has meaning if algorithm is forced and supports segmenting. 0 bytes means no segmentation. Currently, available algorithms do not support segmentation.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_scatter_algorithm_tree_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for n-tree used for scatter algorithms. Only has meaning if algorithm is forced and supports n-tree topo based operation. Currently, available algorithms do not support n-tree topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_scatter_algorithm_chain_fanout&quot; (current value: &quot;4&quot;, data source: default, level: 5 tuner/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Fanout for chains used for scatter algorithms. Only has meaning if algorithm is forced and supports chain topo based operation. Currently, available algorithms do not support chain topologies.
</span><br>
<span class="quotelev1">&gt;                 MCA crcp: parameter &quot;crcp&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the crcp framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA crcp: parameter &quot;crcp_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the crcp framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: parameter &quot;dpm&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the dpm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: parameter &quot;dpm_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the dpm framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA fbtl: parameter &quot;fbtl&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the fbtl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA fbtl: parameter &quot;fbtl_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the fbtl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the fcoll framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the fcoll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_individual_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the individual fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_individual_constant_cbs&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           wether we are using constant or scaling cycle buffer size in the individual fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_individual_cycle_buffer_size&quot; (current value: &quot;33554432&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Cycle Buffer Size of the individual fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_two_phase_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the two_phase fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_two_phase_num_io_procs&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of writers in the two_phase fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_two_phase_constant_cbs&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           wether we are using constant or scaling cycle buffer size in the two_phase fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_two_phase_cycle_buffer_size&quot; (current value: &quot;33554432&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Cycle Buffer Size of the two_phase fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_ylib_priority&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the ylib fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_ylib_num_io_procs&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of writers in the ylib fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_ylib_stripe_size&quot; (current value: &quot;1048576&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Stripe Size of the ylib fcoll component
</span><br>
<span class="quotelev1">&gt;                MCA fcoll: parameter &quot;fcoll_ylib_blocks_per_cycle&quot; (current value: &quot;20&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Blocks to write per cycle of the ylib fcoll component
</span><br>
<span class="quotelev1">&gt;                   MCA fs: parameter &quot;fs&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the fs framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA fs: parameter &quot;fs_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the fs framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io ompio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_delete_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io ompio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_record_file_offset_info&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           The information of the file offset/length
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_coll_timing_info&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Enable collective algorithm timing information
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_cycle_buffer_size&quot; (current value: &quot;33554432&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Cycle Buffer Size of individual reads/writes
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_bytes_per_agg&quot; (current value: &quot;33554432&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Bytes per aggregator process for automatic selection
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_ompio_sharedfp_lazy_open&quot; (current value: &quot;1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           lazy allocation of internal shared file pointer structures
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: informational &quot;io_romio_version&quot; (current value: &quot;from MPICH v3.0.4&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Version of ROMIO
</span><br>
<span class="quotelev1">&gt;                   MCA io: informational &quot;io_romio_user_configure_params&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           User-specified command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;                   MCA io: informational &quot;io_romio_complete_configure_params&quot; (current value: &quot; FROM_OMPI=yes CC='gcc -std=gnu99' CFLAGS='-g -finline-functions -fno-strict-aliasing -pthread' CPPFLAGS='  -I/home/victor/Downloads/MPI/Build/openmpi-1.8.4/opal/mca/hwloc/hwloc191/hwloc/include -I/home/victor/Downloads/MPI/Build/openmpi-1.8.4/opal/mca/event/libevent2021/libevent -I/home/victor/Downloads/MPI/Build/openmpi-1.8.4/opal/mca/event/libevent2021/libevent/include' FFLAGS='' LDFLAGS=' ' --enable-shared --disable-static  --prefix=/opt/mpi/openmpi-1.8.4.dbg --disable-aio&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Complete set of command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mpool framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_grdma_rcache_name&quot; (current value: &quot;vma&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the mpool should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_grdma_print_stats&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;134217728&quot;, data source: default, level: 9 dev/all, type: unsigned long long)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mtl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA op: parameter &quot;op&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the op framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA op: parameter &quot;op_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the op framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the osc framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_no_locks&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK is not used.  Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_buffer_size&quot; (current value: &quot;8192&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                           Data transfers smaller than this limit may be coalesced before being transferred (default: 8k)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_bsend_allocator&quot; (current value: &quot;basic&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_v_output&quot; (current value: &quot;stderr&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_v_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity of the pml v component
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_v_vprotocol&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonyms: vprotocol)
</span><br>
<span class="quotelev1">&gt;                           Specify a specific vprotocol to use
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_free_list_num&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_free_list_inc&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_priority&quot; (current value: &quot;5&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_send_pipeline_depth&quot; (current value: &quot;3&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_recv_pipeline_depth&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_rdma_put_retries_limit&quot; (current value: &quot;5&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_max_rdma_per_request&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_max_send_per_range&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_unexpected_limit&quot; (current value: &quot;128&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_bfo_allocator&quot; (current value: &quot;bucket&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: size_t)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_max_rdma_per_request&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_max_send_per_range&quot; (current value: &quot;4&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_unexpected_limit&quot; (current value: &quot;128&quot;, data source: default, level: 9 dev/all, type: unsigned)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_allocator&quot; (current value: &quot;bucket&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                  MCA pml: performance &quot;pml_ob1_unexpected_msgq_length&quot; (type: unsigned, class: size)
</span><br>
<span class="quotelev1">&gt;                           Number of unexpected messages received by each peer in a communicator
</span><br>
<span class="quotelev1">&gt;                  MCA pml: performance &quot;pml_ob1_posted_recvq_length&quot; (type: unsigned, class: size)
</span><br>
<span class="quotelev1">&gt;                           Number of unmatched receives posted for each peer in a communicator
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pubsub framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pubsub framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub_orte_priority&quot; (current value: &quot;50&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the pubsub pmi component
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub_orte_server&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Contact info for ompi_server for publish/subscribe operations
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rcache framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rte: parameter &quot;rte&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rte framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA rte: parameter &quot;rte_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rte framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rte: parameter &quot;rte_orte_direct_modex&quot; (current value: &quot;false&quot;, data source: default, level: 9 dev/all, type: bool)
</span><br>
<span class="quotelev1">&gt;                           Enable direct modex (default: false)
</span><br>
<span class="quotelev1">&gt;                           Valid values: 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: parameter &quot;sbgp&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sbgp framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: parameter &quot;sbgp_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sbgp framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: parameter &quot;sbgp_base_subgroups_string&quot; (current value: &quot;basesmsocket,basesmuma,ibnet,p2p&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default set of subgroup operations to apply
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: parameter &quot;sbgp_basesmsocket_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority for the sbgp basesmsocket component
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: parameter &quot;sbgp_basesmuma_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sbgp basesmuma
</span><br>
<span class="quotelev1">&gt;                 MCA sbgp: parameter &quot;sbgp_p2p_priority&quot; (current value: &quot;90&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority for the sbgp p2p component
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sharedfp framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sharedfp framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_individual_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the individual sharedfp component
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_individual_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity of the individual sharedfp component
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_lockedfile_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the lockedfile sharedfp component
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_lockedfile_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity of the lockedfile sharedfp component
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_sm_priority&quot; (current value: &quot;10&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm sharedfp component
</span><br>
<span class="quotelev1">&gt;             MCA sharedfp: parameter &quot;sharedfp_sm_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity of the sm sharedfp component
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &quot;&quot;, data source: default, level: 2 user/detail, type: string)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the topo framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string, synonym of: pml_v_vprotocol)
</span><br>
<span class="quotelev1">&gt;                           Specify a specific vprotocol to use
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_base_verbose&quot; (current value: &quot;0&quot;, data source: default, level: 8 dev/detail, type: int)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the vprotocol framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_priority&quot; (current value: &quot;30&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_free_list_num&quot; (current value: &quot;16&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_free_list_max&quot; (current value: &quot;-1&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_free_list_inc&quot; (current value: &quot;64&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_sender_based_chunk&quot; (current value: &quot;268435456&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_event_buffer_size&quot; (current value: &quot;1024&quot;, data source: default, level: 9 dev/all, type: int)
</span><br>
<span class="quotelev1">&gt;            MCA vprotocol: parameter &quot;vprotocol_pessimist_sender_based_file&quot; (current value: &quot;vprotocol_pessimist-senderbased&quot;, data source: default, level: 9 dev/all, type: string)
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26175.php">http://www.open-mpi.org/community/lists/users/2015/01/26175.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26176/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26177.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26175.php">Victor Vysotskiy: "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<li><strong>In reply to:</strong> <a href="26175.php">Victor Vysotskiy: "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26183.php">Victor Vysotskiy: "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
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
