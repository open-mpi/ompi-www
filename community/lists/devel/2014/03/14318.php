<?
$subject_val = "[OMPI devel] onesided/test_acc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 23:54:10 2014" -->
<!-- isoreceived="20140311035410" -->
<!-- sent="Tue, 11 Mar 2014 03:54:08 +0000" -->
<!-- isosent="20140311035408" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] onesided/test_acc2 failures" -->
<!-- id="683A9CE1-F3B5-4CC2-8AF4-FFB0D3E4D6F1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] onesided/test_acc2 failures<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-10 23:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14319.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)"</a>
<li><strong>Previous message:</strong> <a href="14317.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>The onesided/test_acc2 test is failing in our Cisco MTT runs on the trunk and v1.7.5 branches:
<br>
<p>----8&lt;----
<br>
================ test_acc2 ========== Mon Mar 10 15:31:47 2014
<br>
<p>Time per int accumulate 0.769040 microsecs
<br>
P0, Test No. 0, PASSED: accumulate performance Mon Mar 10 15:31:47 2014
<br>
<p>================ test_acc2 ========== Mon Mar 10 15:31:47 2014
<br>
<p>P7, Test No. 0, PASSED: multi-offset accumulate Mon Mar 10 15:31:47 2014
<br>
<p>P0, Test No. 1 CHECK: accumulate self without permission, nfail=1, Mon Mar 10 15:31:47 2014
<br>
<p>P0, Test No. 2 CHECK: accumulate self, nfail=10000, Mon Mar 10 15:31:49 2014
<br>
<p>P1, Test No. 0 CHECK: accumulate non-self, nfail=10000, Mon Mar 10 15:31:51 2014
<br>
<p>-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[30384,1],1]
<br>
&nbsp;&nbsp;Exit code:    16
<br>
--------------------------------------------------------------------------
<br>
----8&lt;----
<br>
<p>I've bisected from the v1.7.4 to r30977 and the test begins failing around the time of r30894 (the big one-sided CMR from trunk): <a href="https://svn.open-mpi.org/trac/ompi/changeset/30894">https://svn.open-mpi.org/trac/ompi/changeset/30894</a>
<br>
<p>The build on the v1.7 branch was in the (inclusive) range r30893:r30896, so there's a slim chance that this is one of r30893, r30895, or r30896 instead, but given the test failure that seems unlikely.
<br>
<p>Valgrind runs are not clean on this test, but they were insufficient to point me to a suspicious part of the code (there are some finalization bugs that should probably be fixed, but I don't think they are causing this issue).  Sample VG messages and my (possibly flawed) interpretations are at the end of this mail.
<br>
<p>Can you take a look?  This is a regression from v1.7.4 as we're headed into v1.7.5.
<br>
<p>Thanks,
<br>
-Dave
<br>
<p><p>No idea here, but probably unrelated to the one-sided test failures:
<br>
==22608== Conditional jump or move depends on uninitialised value(s)
<br>
==22608==    at 0xA72E6B9: ml_init_k_nomial_trees (coll_ml_module.c:651)
<br>
==22608==    by 0xA7336C8: mca_coll_ml_tree_hierarchy_discovery (coll_ml_module.c:2162)
<br>
==22608==    by 0xA733D46: mca_coll_ml_fulltree_ptp_only_hierarchy_discovery (coll_ml_module.c:2333)
<br>
==22608==    by 0xA7314C9: ml_discover_hierarchy (coll_ml_module.c:1565)
<br>
==22608==    by 0xA735DCD: mca_coll_ml_comm_query (coll_ml_module.c:2992)
<br>
==22608==    by 0x4CD23AE: query_2_0_0 (coll_base_comm_select.c:395)
<br>
==22608==    by 0x4CD2372: query (coll_base_comm_select.c:378)
<br>
==22608==    by 0x4CD2285: check_one_component (coll_base_comm_select.c:340)
<br>
==22608==    by 0x4CD20D7: check_components (coll_base_comm_select.c:304)
<br>
==22608==    by 0x4CCAE11: mca_coll_base_comm_select (coll_base_comm_select.c:131)
<br>
==22608==    by 0x4C60B49: ompi_mpi_init (ompi_mpi_init.c:888)
<br>
==22608==    by 0x4C93AE2: PMPI_Init (pinit.c:84)
<br>
==22608==  Uninitialised value was created by a heap allocation
<br>
==22608==    at 0x4A07844: malloc (vg_replace_malloc.c:291)
<br>
==22608==    by 0x4A079B8: realloc (vg_replace_malloc.c:687)
<br>
==22608==    by 0xA72F91B: get_new_subgroup_data (coll_ml_module.c:1044)
<br>
==22608==    by 0xA73292E: mca_coll_ml_tree_hierarchy_discovery (coll_ml_module.c:1939)
<br>
==22608==    by 0xA733D46: mca_coll_ml_fulltree_ptp_only_hierarchy_discovery (coll_ml_module.c:2333)
<br>
==22608==    by 0xA7314C9: ml_discover_hierarchy (coll_ml_module.c:1565)
<br>
==22608==    by 0xA735DCD: mca_coll_ml_comm_query (coll_ml_module.c:2992)
<br>
==22608==    by 0x4CD23AE: query_2_0_0 (coll_base_comm_select.c:395)
<br>
==22608==    by 0x4CD2372: query (coll_base_comm_select.c:378)
<br>
==22608==    by 0x4CD2285: check_one_component (coll_base_comm_select.c:340)
<br>
==22608==    by 0x4CD20D7: check_components (coll_base_comm_select.c:304)
<br>
==22608==    by 0x4CCAE11: mca_coll_base_comm_select (coll_base_comm_select.c:131)
<br>
<p>Possibly related:
<br>
==22608== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==22608==    at 0x354BAE0C57: writev (in /lib64/libc-2.12.so)
<br>
==22608==    by 0x95F7CD2: mca_btl_tcp_frag_send (btl_tcp_frag.c:107)
<br>
==22608==    by 0x95F61CE: mca_btl_tcp_endpoint_send (btl_tcp_endpoint.c:261)
<br>
==22608==    by 0x95F1C08: mca_btl_tcp_send (btl_tcp.c:387)
<br>
==22608==    by 0x9CD4098: mca_bml_base_send (bml.h:276)
<br>
==22608==    by 0x9CD636F: mca_pml_ob1_send_request_start_prepare (pml_ob1_sendreq.c:650)
<br>
==22608==    by 0x9CC9B39: mca_pml_ob1_send_request_start_btl (pml_ob1_sendreq.h:388)
<br>
==22608==    by 0x9CC9DF1: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:461)
<br>
==22608==    by 0x9CCA4FA: mca_pml_ob1_isend (pml_ob1_isend.c:85)
<br>
==22608==    by 0x4C699BD: comm_allreduce_pml (allreduce.c:178)
<br>
==22608==    by 0xA73172C: ml_discover_hierarchy (coll_ml_module.c:1616)
<br>
==22608==    by 0xA735DCD: mca_coll_ml_comm_query (coll_ml_module.c:2992)
<br>
==22608==  Address 0xffeffac10 is on thread 1's stack
<br>
==22608==  Uninitialised value was created by a stack allocation
<br>
==22608==    at 0xA73134D: ml_discover_hierarchy (coll_ml_module.c:1529)
<br>
<p>** Very likely related (10 bytes is the exact size of the ompi_osc_rdma_frag_header_t, so the uninitialized bytes are payload):
<br>
==22608== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==22608==    at 0x354BAE0C57: writev (in /lib64/libc-2.12.so)
<br>
==22608==    by 0x95F7CD2: mca_btl_tcp_frag_send (btl_tcp_frag.c:107)
<br>
==22608==    by 0x95F798C: mca_btl_tcp_endpoint_send_handler (btl_tcp_endpoint.c:792)
<br>
==22608==    by 0x52CB5FB: event_persist_closure (event.c:1318)
<br>
==22608==    by 0x52CB70A: event_process_active_single_queue (event.c:1362)
<br>
==22608==    by 0x52CB9D9: event_process_active (event.c:1437)
<br>
==22608==    by 0x52CC054: opal_libevent2021_event_base_loop (event.c:1645)
<br>
==22608==    by 0x526FF4B: opal_progress (opal_progress.c:168)
<br>
==22608==    by 0x9CC93AE: opal_condition_wait (condition.h:78)
<br>
==22608==    by 0x9CC9618: ompi_request_wait_completion (request.h:381)
<br>
==22608==    by 0x9CCABB5: mca_pml_ob1_send (pml_ob1_isend.c:123)
<br>
==22608==    by 0xADB8E6D: ompi_coll_tuned_scatter_intra_basic_linear (coll_tuned_scatter.c:256)
<br>
==22608==  Address 0x82e6fca is 10 bytes inside a block of size 8,208 alloc'd
<br>
==22608==    at 0x4A07844: malloc (vg_replace_malloc.c:291)
<br>
==22608==    by 0xBA1E40C: ompi_osc_rdma_frag_constructor (osc_rdma_frag.c:24)
<br>
==22608==    by 0x5265FC9: opal_obj_run_constructors (opal_object.h:424)
<br>
==22608==    by 0x5266988: opal_free_list_grow (opal_free_list.c:113)
<br>
==22608==    by 0x526679B: opal_free_list_init (opal_free_list.c:78)
<br>
==22608==    by 0xBA183DE: component_init (osc_rdma_component.c:255)
<br>
==22608==    by 0x4CEC336: ompi_osc_base_find_available (osc_base_frame.c:48)
<br>
==22608==    by 0x4C604B1: ompi_mpi_init (ompi_mpi_init.c:659)
<br>
==22608==    by 0x4C93AE2: PMPI_Init (pinit.c:84)
<br>
==22608==    by 0x401A7A: main (test_acc2.c:226)
<br>
==22608==  Uninitialised value was created by a heap allocation
<br>
==22608==    at 0x4A07844: malloc (vg_replace_malloc.c:291)
<br>
==22608==    by 0xBA1E40C: ompi_osc_rdma_frag_constructor (osc_rdma_frag.c:24)
<br>
==22608==    by 0x5265FC9: opal_obj_run_constructors (opal_object.h:424)
<br>
==22608==    by 0x5266988: opal_free_list_grow (opal_free_list.c:113)
<br>
==22608==    by 0x526679B: opal_free_list_init (opal_free_list.c:78)
<br>
==22608==    by 0xBA183DE: component_init (osc_rdma_component.c:255)
<br>
==22608==    by 0x4CEC336: ompi_osc_base_find_available (osc_base_frame.c:48)
<br>
==22608==    by 0x4C604B1: ompi_mpi_init (ompi_mpi_init.c:659)
<br>
==22608==    by 0x4C93AE2: PMPI_Init (pinit.c:84)
<br>
==22608==    by 0x401A7A: main (test_acc2.c:226)
<br>
<p><p>These both appear to be unrelated finalization bugs (the tcp BTL is accessing some OMPI procs after they've been released by ompi_proc_finalize()):
<br>
==22608== Invalid read of size 4
<br>
==22608==    at 0x4FA845F: orte_util_hash_name (name_fns.c:558)
<br>
==22608==    by 0x95F8A02: mca_btl_tcp_proc_destruct (btl_tcp_proc.c:79)
<br>
==22608==    by 0x95F885B: opal_obj_run_destructors (opal_object.h:446)
<br>
==22608==    by 0x95FA8B7: mca_btl_tcp_proc_remove (btl_tcp_proc.c:695)
<br>
==22608==    by 0x95F5EA1: mca_btl_tcp_endpoint_destruct (btl_tcp_endpoint.c:99)
<br>
==22608==    by 0x95F0818: opal_obj_run_destructors (opal_object.h:446)
<br>
==22608==    by 0x95F20C2: mca_btl_tcp_finalize (btl_tcp.c:481)
<br>
==22608==    by 0x4CC99D6: mca_btl_base_close (btl_base_frame.c:155)
<br>
==22608==    by 0x52B0C34: mca_base_framework_close (mca_base_framework.c:187)
<br>
==22608==    by 0x4CC93BF: mca_bml_base_close (bml_base_frame.c:117)
<br>
==22608==    by 0x52B0C34: mca_base_framework_close (mca_base_framework.c:187)
<br>
==22608==    by 0x4C61D8D: ompi_mpi_finalize (ompi_mpi_finalize.c:405)
<br>
==22608==  Address 0x7ff3cf8 is 72 bytes inside a block of size 112 free'd
<br>
==22608==    at 0x4A0674A: free (vg_replace_malloc.c:468)
<br>
==22608==    by 0x4C5B1D8: ompi_proc_finalize (proc.c:310)
<br>
==22608==    by 0x4C61C23: ompi_mpi_finalize (ompi_mpi_finalize.c:340)
<br>
==22608==    by 0x4C89244: PMPI_Finalize (pfinalize.c:46)
<br>
==22608==    by 0x401AB0: main (test_acc2.c:232)
<br>
==22608==
<br>
==22608== Invalid read of size 4
<br>
==22608==    at 0x4FA8470: orte_util_hash_name (name_fns.c:560)
<br>
==22608==    by 0x95F8A02: mca_btl_tcp_proc_destruct (btl_tcp_proc.c:79)
<br>
==22608==    by 0x95F885B: opal_obj_run_destructors (opal_object.h:446)
<br>
==22608==    by 0x95FA8B7: mca_btl_tcp_proc_remove (btl_tcp_proc.c:695)
<br>
==22608==    by 0x95F5EA1: mca_btl_tcp_endpoint_destruct (btl_tcp_endpoint.c:99)
<br>
==22608==    by 0x95F0818: opal_obj_run_destructors (opal_object.h:446)
<br>
==22608==    by 0x95F20C2: mca_btl_tcp_finalize (btl_tcp.c:481)
<br>
==22608==    by 0x4CC99D6: mca_btl_base_close (btl_base_frame.c:155)
<br>
==22608==    by 0x52B0C34: mca_base_framework_close (mca_base_framework.c:187)
<br>
==22608==    by 0x4CC93BF: mca_bml_base_close (bml_base_frame.c:117)
<br>
==22608==    by 0x52B0C34: mca_base_framework_close (mca_base_framework.c:187)
<br>
==22608==    by 0x4C61D8D: ompi_mpi_finalize (ompi_mpi_finalize.c:405)
<br>
==22608==  Address 0x7ff3cfc is 76 bytes inside a block of size 112 free'd
<br>
==22608==    at 0x4A0674A: free (vg_replace_malloc.c:468)
<br>
==22608==    by 0x4C5B1D8: ompi_proc_finalize (proc.c:310)
<br>
==22608==    by 0x4C61C23: ompi_mpi_finalize (ompi_mpi_finalize.c:340)
<br>
==22608==    by 0x4C89244: PMPI_Finalize (pfinalize.c:46)
<br>
==22608==    by 0x401AB0: main (test_acc2.c:232)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14319.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4354: Move r30966 to v1.7 branch (In mtl_mxm, don't disconnect from)"</a>
<li><strong>Previous message:</strong> <a href="14317.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
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
