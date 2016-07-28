<?
$subject_val = "[OMPI devel] MPI application hangs after a checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 16:39:27 2011" -->
<!-- isoreceived="20110607203927" -->
<!-- sent="Tue, 7 Jun 2011 16:39:19 -0400" -->
<!-- isosent="20110607203919" -->
<!-- name="Kishor Kharbas" -->
<!-- email="kkharba_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI application hangs after a checkpoint" -->
<!-- id="BANLkTimkb=x-5vik3G3uSPxNKwvCAm=T=g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI application hangs after a checkpoint<br>
<strong>From:</strong> Kishor Kharbas (<em>kkharba_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 16:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9322.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9320.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to use checkpoint-restart functionality of OpenMPI. Most of the
<br>
times checkpointing of MPI application behaves correctly, but in some
<br>
situations the MPI application hangs indefinitely after the checkpoint is
<br>
taken. Ompi-checkpoint terminates without error and I do get the snapshot
<br>
reference, but the application does not resume (seems to be busy waiting
<br>
somewhere in mpi code). I am not able to reproduce this problem to find the
<br>
exact scenario which leads to this issue.
<br>
But, these things are common in all the scenarios which lead to error:
<br>
1. OpenIB BTL is used. (using TCP btl does not produce this error)
<br>
2. The communication is of the form - Isends/Irecvs followed by Waitall(...)
<br>
<p>I saw a ticket(#2397) which shows some bug fixes targeted for V1.7 ; I went
<br>
through them, but not sure whether my problem is because of those bugs. Are
<br>
there any known issues specifically when OpenIB btl is used?
<br>
<p>I am using Open-MPI version 1.5.3
<br>
Please find the output of ompi-info and config.log as attachments.
<br>
<p><p>I am providing these back-traces of a single process taken at different
<br>
times, if it helps. All the MPI application processes are in running state.
<br>
Please let me know if additional information is required.
<br>
<p>Back trace 1
<br>
#0  mca_btl_sm_component_progress () at btl_sm_component.c:560
<br>
#1  0x00002b09eb1d3105 in opal_progress () at runtime/opal_progress.c:207
<br>
#2  0x00002b09eb0f9b3f in opal_condition_wait (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at ../opal/threads/condition.h:92
<br>
#3  ompi_request_default_wait_all (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at request/req_wait.c:263
<br>
#4  0x00002b09eb126db6 in PMPI_Waitall (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at pwaitall.c:70
<br>
#5  0x00002b09eac69c65 in MPI_Wait (request=0x7fffbab81838,
<br>
status=0x7fffbab81820) at mrmpi_p2p.c:3330
<br>
#6  0x00002b09eac6a1aa in mpi_wait_ (request=0x7fffbab81948,
<br>
status=0x7fffbab81920, ierror=0x7fffbab81958) at mrmpi_p2p.c:3418
<br>
#7  0x000000000040476c in conj_grad (colidx=0x608a40, rowstr=0x41c1f7c,
<br>
x=0x1c4b6298, z=0x1c624608, a=0x14d43820, p=0x1c792978, q=0x1c900ce8,
<br>
r=0x1ca6f058,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;w=0x1cbdd3c8, rnorm=@0x7fffbab81dd0, l2npcols=@0x7fffbab81e2c,
<br>
reduce_exch_proc=0x7fffbab81d50, reduce_send_starts=0x7fffbab81cf0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reduce_send_lengths=0x7fffbab81d30, reduce_recv_starts=0x7fffbab81d10,
<br>
reduce_recv_lengths=0x7fffbab81d70) at cg.f:1295
<br>
#8  0x0000000000402271 in cg_unit () at cg.f:502
<br>
#9  0x000000000040181b in MAIN__ () at cg.f:56
<br>
#10 0x0000000000406e8e in main ()
<br>
<p>Back trace 2
<br>
#0  0x00002aaaaf710a8a in get_sw_cqe (cq=&lt;value optimized out&gt;, n=19) at
<br>
src/cq.c:119
<br>
#1  0x00002aaaaf710f01 in next_cqe_sw (ibcq=0x32a7cde0, ne=1, wc=&lt;value
<br>
optimized out&gt;) at src/cq.c:125
<br>
#2  mlx4_poll_one (ibcq=0x32a7cde0, ne=1, wc=&lt;value optimized out&gt;) at
<br>
src/cq.c:205
<br>
#3  mlx4_poll_cq (ibcq=0x32a7cde0, ne=1, wc=&lt;value optimized out&gt;) at
<br>
src/cq.c:352
<br>
#4  0x00002aaaad9d7b53 in opal_pointer_array_get_item () at
<br>
../../../../opal/threads/mutex_unix.h:102
<br>
#5  btl_openib_component_progress () at btl_openib_component.c:3540
<br>
#6  0x00002b09eb1d3105 in opal_progress () at runtime/opal_progress.c:207
<br>
#7  0x00002b09eb0f9b3f in opal_condition_wait (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at ../opal/threads/condition.h:92
<br>
#8  ompi_request_default_wait_all (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at request/req_wait.c:263
<br>
#9  0x00002b09eb126db6 in PMPI_Waitall (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at pwaitall.c:70
<br>
#10 0x00002b09eac69c65 in MPI_Wait (request=0x7fffbab81838,
<br>
status=0x7fffbab81820) at mrmpi_p2p.c:3330
<br>
#11 0x00002b09eac6a1aa in mpi_wait_ (request=0x7fffbab81948,
<br>
status=0x7fffbab81920, ierror=0x7fffbab81958) at mrmpi_p2p.c:3418
<br>
#12 0x000000000040476c in conj_grad (colidx=0x608a40, rowstr=0x41c1f7c,
<br>
x=0x1c4b6298, z=0x1c624608, a=0x14d43820, p=0x1c792978, q=0x1c900ce8,
<br>
r=0x1ca6f058,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;w=0x1cbdd3c8, rnorm=@0x7fffbab81dd0, l2npcols=@0x7fffbab81e2c,
<br>
reduce_exch_proc=0x7fffbab81d50, reduce_send_starts=0x7fffbab81cf0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reduce_send_lengths=0x7fffbab81d30, reduce_recv_starts=0x7fffbab81d10,
<br>
reduce_recv_lengths=0x7fffbab81d70) at cg.f:1295
<br>
#13 0x0000000000402271 in cg_unit () at cg.f:502
<br>
#14 0x000000000040181b in MAIN__ () at cg.f:56
<br>
#15 0x0000000000406e8e in main ()
<br>
<p>Back trace 3
<br>
#0  mlx4_poll_cq (ibcq=0x32a7cc60, ne=1, wc=&lt;value optimized out&gt;) at
<br>
src/cq.c:360
<br>
#1  0x00002aaaad9d7b53 in opal_pointer_array_get_item () at
<br>
../../../../opal/threads/mutex_unix.h:102
<br>
#2  btl_openib_component_progress () at btl_openib_component.c:3540
<br>
#3  0x00002b09eb1d3105 in opal_progress () at runtime/opal_progress.c:207
<br>
#4  0x00002b09eb0f9b3f in opal_condition_wait (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at ../opal/threads/condition.h:92
<br>
#5  ompi_request_default_wait_all (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at request/req_wait.c:263
<br>
#6  0x00002b09eb126db6 in PMPI_Waitall (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at pwaitall.c:70
<br>
#7  0x00002b09eac69c65 in MPI_Wait (request=0x7fffbab81838,
<br>
status=0x7fffbab81820) at mrmpi_p2p.c:3330
<br>
#8  0x00002b09eac6a1aa in mpi_wait_ (request=0x7fffbab81948,
<br>
status=0x7fffbab81920, ierror=0x7fffbab81958) at mrmpi_p2p.c:3418
<br>
#9  0x000000000040476c in conj_grad (colidx=0x608a40, rowstr=0x41c1f7c,
<br>
x=0x1c4b6298, z=0x1c624608, a=0x14d43820, p=0x1c792978, q=0x1c900ce8,
<br>
r=0x1ca6f058,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;w=0x1cbdd3c8, rnorm=@0x7fffbab81dd0, l2npcols=@0x7fffbab81e2c,
<br>
reduce_exch_proc=0x7fffbab81d50, reduce_send_starts=0x7fffbab81cf0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reduce_send_lengths=0x7fffbab81d30, reduce_recv_starts=0x7fffbab81d10,
<br>
reduce_recv_lengths=0x7fffbab81d70) at cg.f:1295
<br>
#10 0x0000000000402271 in cg_unit () at cg.f:502
<br>
#11 0x000000000040181b in MAIN__ () at cg.f:56
<br>
#12 0x0000000000406e8e in main ()
<br>
<p>Back trace 4
<br>
#0  0x00002b09eb1d30f8 in opal_progress () at runtime/opal_progress.c:207
<br>
#1  0x00002b09eb0f9b3f in opal_condition_wait (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at ../opal/threads/condition.h:92
<br>
#2  ompi_request_default_wait_all (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at request/req_wait.c:263
<br>
#3  0x00002b09eb126db6 in PMPI_Waitall (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at pwaitall.c:70
<br>
#4  0x00002b09eac69c65 in MPI_Wait (request=0x7fffbab81838,
<br>
status=0x7fffbab81820) at mrmpi_p2p.c:3330
<br>
#5  0x00002b09eac6a1aa in mpi_wait_ (request=0x7fffbab81948,
<br>
status=0x7fffbab81920, ierror=0x7fffbab81958) at mrmpi_p2p.c:3418
<br>
#6  0x000000000040476c in conj_grad (colidx=0x608a40, rowstr=0x41c1f7c,
<br>
x=0x1c4b6298, z=0x1c624608, a=0x14d43820, p=0x1c792978, q=0x1c900ce8,
<br>
r=0x1ca6f058,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;w=0x1cbdd3c8, rnorm=@0x7fffbab81dd0, l2npcols=@0x7fffbab81e2c,
<br>
reduce_exch_proc=0x7fffbab81d50, reduce_send_starts=0x7fffbab81cf0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reduce_send_lengths=0x7fffbab81d30, reduce_recv_starts=0x7fffbab81d10,
<br>
reduce_recv_lengths=0x7fffbab81d70) at cg.f:1295
<br>
#7  0x0000000000402271 in cg_unit () at cg.f:502
<br>
#8  0x000000000040181b in MAIN__ () at cg.f:56
<br>
#9  0x0000000000406e8e in main ()
<br>
<p>Back trace 5
<br>
#0  0x0000003a6aa08cd6 in pthread_mutex_lock () from /lib64/libpthread.so.0
<br>
#1  0x00002aaaad9d7b53 in opal_pointer_array_get_item () at
<br>
../../../../opal/threads/mutex_unix.h:102
<br>
#2  btl_openib_component_progress () at btl_openib_component.c:3540
<br>
#3  0x00002b09eb1d3105 in opal_progress () at runtime/opal_progress.c:207
<br>
#4  0x00002b09eb0f9b3f in opal_condition_wait (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at ../opal/threads/condition.h:92
<br>
#5  ompi_request_default_wait_all (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at request/req_wait.c:263
<br>
#6  0x00002b09eb126db6 in PMPI_Waitall (count=2, requests=0x326bd3b0,
<br>
statuses=0x7fffbab81780) at pwaitall.c:70
<br>
#7  0x00002b09eac69c65 in MPI_Wait (request=0x7fffbab81838,
<br>
status=0x7fffbab81820) at mrmpi_p2p.c:3330
<br>
#8  0x00002b09eac6a1aa in mpi_wait_ (request=0x7fffbab81948,
<br>
status=0x7fffbab81920, ierror=0x7fffbab81958) at mrmpi_p2p.c:3418
<br>
#9  0x000000000040476c in conj_grad (colidx=0x608a40, rowstr=0x41c1f7c,
<br>
x=0x1c4b6298, z=0x1c624608, a=0x14d43820, p=0x1c792978, q=0x1c900ce8,
<br>
r=0x1ca6f058,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;w=0x1cbdd3c8, rnorm=@0x7fffbab81dd0, l2npcols=@0x7fffbab81e2c,
<br>
reduce_exch_proc=0x7fffbab81d50, reduce_send_starts=0x7fffbab81cf0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reduce_send_lengths=0x7fffbab81d30, reduce_recv_starts=0x7fffbab81d10,
<br>
reduce_recv_lengths=0x7fffbab81d70) at cg.f:1295
<br>
#10 0x0000000000402271 in cg_unit () at cg.f:502
<br>
#11 0x000000000040181b in MAIN__ () at cg.f:56
<br>
#12 0x0000000000406e8e in main ()
<br>
<p>Regards,
<br>
Kishor
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9321/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9321/ompi-info.gz">ompi-info.gz</a>
</ul>
<!-- attachment="ompi-info.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9322.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9320.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
