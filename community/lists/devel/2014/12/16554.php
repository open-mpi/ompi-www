<?
$subject_val = "[OMPI devel] Trunk warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 12:49:50 2014" -->
<!-- isoreceived="20141212174950" -->
<!-- sent="Fri, 12 Dec 2014 09:49:47 -0800" -->
<!-- isosent="20141212174947" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk warnings" -->
<!-- id="2D0CE77C-0406-43A8-856D-9AE2BA3823AC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 12:49:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>Previous message:</strong> <a href="16553.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>Reply:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While building optimized on Linux:
<br>
<p>bcol_ptpcoll_allreduce.c: In function 'bcol_ptpcoll_allreduce_narraying_init':
<br>
bcol_ptpcoll_allreduce.c:236: warning: unused variable 'dtype'
<br>
bcol_ptpcoll_allreduce.c:235: warning: unused variable &#226;&#128;&#152;count'
<br>
<p>io_ompio_file_set_view.c: In function 'mca_io_ompio_finalize_initial_grouping':
<br>
io_ompio_file_set_view.c:363: warning: 'sendreq' may be used uninitialized in this function
<br>
<p>osc_rdma_comm.c: In function 'ompi_osc_rdma_rget_accumulate_internal':
<br>
osc_rdma_comm.c:1034: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:1031: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_callback':
<br>
osc_rdma_data_move.c:1647: warning: unused variable 'incoming_length'
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send':
<br>
osc_rdma_data_move.c:225: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_data_move.c:224: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
<br>
osc_rdma_comm.c:813: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:810: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_gacc_long_start':
<br>
osc_rdma_data_move.c:973: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_put_w_req':
<br>
osc_rdma_comm.c:296: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:289: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_gacc_start':
<br>
osc_rdma_data_move.c:924: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_acc_long_start':
<br>
osc_rdma_data_move.c:839: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_accumulate_w_req':
<br>
osc_rdma_comm.c:479: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:476: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
<br>
osc_rdma_comm.c:813: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:810: warning: 'frag' may be used uninitialized in this function
<br>
<p><p>vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
<br>
vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
<br>
vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
<br>
vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
<br>
vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
<br>
vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
<br>
vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
<br>
vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in this function
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>Previous message:</strong> <a href="16553.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>Reply:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
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
