<?
$subject_val = "[OMPI users] OpenMPI deadlocks and race conditions ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 04:20:11 2009" -->
<!-- isoreceived="20090513082011" -->
<!-- sent="Wed, 13 May 2009 10:19:40 +0200" -->
<!-- isosent="20090513081940" -->
<!-- name="Fran&#231;ois PELLEGRINI" -->
<!-- email="francois.pellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI deadlocks and race conditions ?" -->
<!-- id="4A0A829C.2030809_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1242144002.15024.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI deadlocks and race conditions ?<br>
<strong>From:</strong> Fran&#231;ois PELLEGRINI (<em>francois.pellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 04:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9322.php">Jeff Squyres: "Re: [OMPI users] ****---How to configure NIS and MPI on spreadNICs?----****"</a>
<li><strong>Previous message:</strong> <a href="9320.php">shan axida: "[OMPI users] ****---How to configure NIS and MPI on spread NICs?----****"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9350.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Reply:</strong> <a href="9350.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Maybe reply:</strong> <a href="9352.php">François PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I sometimes run into deadlocks in OpenMPI (1.3.3a1r21206), when
<br>
running my MPI+threaded PT-Scotch software. Luckily, the case
<br>
is very small, with 4 procs only, so I have been able to investigate
<br>
it a bit. It seems that matches between commnications are not done
<br>
properly on cloned communicators. In the end, I run into a case where
<br>
a MPI_Waitall completes a MPI_Barrier on another proc. The bug is
<br>
erratic but quite easy to reproduce, luckily too.
<br>
<p>To be sure, I ran my code into valgrind using helgrind, its
<br>
race condition detection tool. It produced much output, most
<br>
of which seems to be innocuous, yet I have some concerns about
<br>
such messages as the following ones. The ==12**== were generated
<br>
when running on 4 procs, while the ==83**== were generated
<br>
when running on 2 procs :
<br>
<p>==8329== Possible data race during write of size 4 at 0x8882200
<br>
==8329==    at 0x508B315: sm_fifo_write (btl_sm.h:254)
<br>
==8329==    by 0x508B401: mca_btl_sm_send (btl_sm.c:811)
<br>
==8329==    by 0x5070A0C: mca_bml_base_send_status (bml.h:288)
<br>
==8329==    by 0x50708E6: mca_pml_ob1_send_request_start_copy
<br>
(pml_ob1_sendreq.c:567)
<br>
==8329==    by 0x5064C30: mca_pml_ob1_send_request_start_btl
<br>
(pml_ob1_sendreq.h:363)
<br>
==8329==    by 0x5064A19: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:429)
<br>
==8329==    by 0x5064856: mca_pml_ob1_isend (pml_ob1_isend.c:87)
<br>
==8329==    by 0x5142C46: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:51)
<br>
==8329==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs
<br>
(coll_tuned_barrier.c:258)
<br>
==8329==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:192)
<br>
==8329==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==8329==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==8329==   Old state: shared-readonly by threads #1, #7
<br>
==8329==   New state: shared-modified by threads #1, #7
<br>
==8329==   Reason:    this thread, #1, holds no consistent locks
<br>
==8329==   Location 0x8882200 has never been protected by any lock
<br>
<p>==1220== Possible data race during write of size 4 at 0x88CEF88
<br>
==1220==    at 0x508CD84: sm_fifo_read (btl_sm.h:272)
<br>
==1220==    by 0x508C864: mca_btl_sm_component_progress (btl_sm_component.c:391)
<br>
==1220==    by 0x41F72DF: opal_progress (opal_progress.c:207)
<br>
==1220==    by 0x40BD67D: opal_condition_wait (condition.h:85)
<br>
==1220==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
<br>
==1220==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
<br>
==1220==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling
<br>
(coll_tuned_barrier.c:174)
<br>
==1220==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:208)
<br>
==1220==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==1220==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==1220==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
<br>
==1220==    by 0x805EA43: kdgraphMapRbPart2 (kdgraph_map_rb_part.c:331)
<br>
==1220==   Old state: shared-readonly by threads #1, #7
<br>
==1220==   New state: shared-modified by threads #1, #7
<br>
==1220==   Reason:    this thread, #1, holds no consistent locks
<br>
==1220==   Location 0x88CEF88 has never been protected by any lock
<br>
<p>==1219== Possible data race during write of size 4 at 0x891BC8C
<br>
==1219==    at 0x508CD99: sm_fifo_read (btl_sm.h:273)
<br>
==1219==    by 0x508C864: mca_btl_sm_component_progress (btl_sm_component.c:391)
<br>
==1219==    by 0x41F72DF: opal_progress (opal_progress.c:207)
<br>
==1219==    by 0x40BD67D: opal_condition_wait (condition.h:85)
<br>
==1219==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
<br>
==1219==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
<br>
==1219==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling
<br>
(coll_tuned_barrier.c:174)
<br>
==1219==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:208)
<br>
==1219==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==1219==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==1219==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
<br>
==1219==    by 0x805EA43: kdgraphMapRbPart2 (kdgraph_map_rb_part.c:331)
<br>
==1219==   Old state: shared-readonly by threads #1, #7
<br>
==1219==   New state: shared-modified by threads #1, #7
<br>
==1219==   Reason:    this thread, #1, holds no consistent locks
<br>
==1219==   Location 0x891BC8C has never been protected by any lock
<br>
<p>==1220== Possible data race during write of size 4 at 0x4243A68
<br>
==1220==    at 0x41F72A7: opal_progress (opal_progress.c:186)
<br>
==1220==    by 0x40BD67D: opal_condition_wait (condition.h:85)
<br>
==1220==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
<br>
==1220==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
<br>
==1220==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling
<br>
(coll_tuned_barrier.c:174)
<br>
==1220==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:208)
<br>
==1220==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==1220==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==1220==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
<br>
==1220==    by 0x805EA43: kdgraphMapRbPart2 (kdgraph_map_rb_part.c:331)
<br>
==1220==    by 0x805EB86: _SCOTCHkdgraphMapRbPart (kdgraph_map_rb_part.c:421)
<br>
==1220==    by 0x8057713: _SCOTCHkdgraphMapSt (kdgraph_map_st.c:182)
<br>
==1220==   Old state: shared-readonly by threads #1, #7
<br>
==1220==   New state: shared-modified by threads #1, #7
<br>
==1220==   Reason:    this thread, #1, holds no consistent locks
<br>
==1220==   Location 0x4243A68 has never been protected by any lock
<br>
<p>==8328== Possible data race during write of size 4 at 0x4532318
<br>
==8328==    at 0x508A9B8: opal_atomic_lifo_pop (opal_atomic_lifo.h:111)
<br>
==8328==    by 0x508A69F: mca_btl_sm_alloc (btl_sm.c:612)
<br>
==8328==    by 0x5070571: mca_bml_base_alloc (bml.h:241)
<br>
==8328==    by 0x5070778: mca_pml_ob1_send_request_start_copy
<br>
(pml_ob1_sendreq.c:506)
<br>
==8328==    by 0x5064C30: mca_pml_ob1_send_request_start_btl
<br>
(pml_ob1_sendreq.h:363)
<br>
==8328==    by 0x5064A19: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:429)
<br>
==8328==    by 0x5064856: mca_pml_ob1_isend (pml_ob1_isend.c:87)
<br>
==8328==    by 0x5142C46: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:51)
<br>
==8328==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs
<br>
(coll_tuned_barrier.c:258)
<br>
==8328==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:192)
<br>
==8328==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==8328==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==8328==   Old state: shared-readonly by threads #1, #8
<br>
==8328==   New state: shared-modified by threads #1, #8
<br>
==8328==   Reason:    this thread, #1, holds no consistent locks
<br>
==8328==   Location 0x4532318 has never been protected by any lock
<br>
<p>==8329== Possible data race during write of size 4 at 0x452F238
<br>
==8329==    at 0x5067FD3: recv_req_matched (pml_ob1_recvreq.h:219)
<br>
==8329==    by 0x5067D95: mca_pml_ob1_recv_frag_callback_match
<br>
(pml_ob1_recvfrag.c:191)
<br>
==8329==    by 0x508C9BB: mca_btl_sm_component_progress (btl_sm_component.c:426)
<br>
==8329==    by 0x41F72DF: opal_progress (opal_progress.c:207)
<br>
==8329==    by 0x40BD67D: opal_condition_wait (condition.h:85)
<br>
==8329==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
<br>
==8329==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
<br>
==8329==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs
<br>
(coll_tuned_barrier.c:258)
<br>
==8329==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:192)
<br>
==8329==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==8329==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==8329==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
<br>
==8329==   Old state: owned exclusively by thread #7
<br>
==8329==   New state: shared-modified by threads #1, #7
<br>
==8329==   Reason:    this thread, #1, holds no locks at all
<br>
<p>==8329== Possible data race during write of size 4 at 0x452F2DC
<br>
==8329==    at 0x40D5946: ompi_convertor_unpack (convertor.c:280)
<br>
==8329==    by 0x5067E78: mca_pml_ob1_recv_frag_callback_match
<br>
(pml_ob1_recvfrag.c:215)
<br>
==8329==    by 0x508C9BB: mca_btl_sm_component_progress (btl_sm_component.c:426)
<br>
==8329==    by 0x41F72DF: opal_progress (opal_progress.c:207)
<br>
==8329==    by 0x40BD67D: opal_condition_wait (condition.h:85)
<br>
==8329==    by 0x40BDA96: ompi_request_default_wait_all (req_wait.c:262)
<br>
==8329==    by 0x5142C78: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:55)
<br>
==8329==    by 0x514F379: ompi_coll_tuned_barrier_intra_two_procs
<br>
(coll_tuned_barrier.c:258)
<br>
==8329==    by 0x5143252: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:192)
<br>
==8329==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==8329==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==8329==    by 0x805E2B2: kdgraphMapRbPartFold2 (kdgraph_map_rb_part.c:199)
<br>
==8329==   Old state: owned exclusively by thread #7
<br>
==8329==   New state: shared-modified by threads #1, #7
<br>
==8329==   Reason:    this thread, #1, holds no locks at all
<br>
<p>I guess the following are ok, but I provide them as a
<br>
reference :
<br>
<p>==1220== Possible data race during write of size 4 at 0x8968780
<br>
==1220==    at 0x508A619: opal_atomic_unlock (atomic_impl.h:367)
<br>
==1220==    by 0x508B468: mca_btl_sm_send (btl_sm.c:811)
<br>
==1220==    by 0x5070A0C: mca_bml_base_send_status (bml.h:288)
<br>
==1220==    by 0x50708E6: mca_pml_ob1_send_request_start_copy
<br>
(pml_ob1_sendreq.c:567)
<br>
==1220==    by 0x5064C30: mca_pml_ob1_send_request_start_btl
<br>
(pml_ob1_sendreq.h:363)
<br>
==1220==    by 0x5064A19: mca_pml_ob1_send_request_start (pml_ob1_sendreq.h:429)
<br>
==1220==    by 0x5064856: mca_pml_ob1_isend (pml_ob1_isend.c:87)
<br>
==1220==    by 0x5142C46: ompi_coll_tuned_sendrecv_actual (coll_tuned_util.c:51)
<br>
==1220==    by 0x514F07A: ompi_coll_tuned_barrier_intra_recursivedoubling
<br>
(coll_tuned_barrier.c:174)
<br>
==1220==    by 0x51432A3: ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(coll_tuned_decision_fixed.c:208)
<br>
==1220==    by 0x40E410C: PMPI_Barrier (pbarrier.c:59)
<br>
==1220==    by 0x806C5FB: _SCOTCHdgraphInducePart (dgraph_induce.c:334)
<br>
==1220==   Old state: shared-modified by threads #1, #7
<br>
==1220==   New state: shared-modified by threads #1, #7
<br>
==1220==   Reason:    this thread, #1, holds no consistent locks
<br>
==1220==   Location 0x8968780 has never been protected by any lock
<br>
<p>ompi_info says :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI pelegrin_at_brol Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.3a1r21206
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r21206
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3.3a1r21206
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r21206
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3.3a1r21206
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r21206
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3.3a1r21206
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: brol
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: pelegrin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue May 12 15:50:08 CEST 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: brol
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: pelegrin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue May 12 16:17:34 CEST 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: brol
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: yes, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: always
<br>
Memory profiling support: no
<br>
Memory debugging support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.3)
<br>
<p>Thanks in advance for any help / explanation,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.p.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9322.php">Jeff Squyres: "Re: [OMPI users] ****---How to configure NIS and MPI on spreadNICs?----****"</a>
<li><strong>Previous message:</strong> <a href="9320.php">shan axida: "[OMPI users] ****---How to configure NIS and MPI on spread NICs?----****"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9350.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Reply:</strong> <a href="9350.php">Eugene Loh: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
<li><strong>Maybe reply:</strong> <a href="9352.php">François PELLEGRINI: "Re: [OMPI users] OpenMPI deadlocks and race conditions ?"</a>
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
