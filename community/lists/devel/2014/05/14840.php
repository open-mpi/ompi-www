<?
$subject_val = "[OMPI devel] Trunk (RDMA and VT) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 23:25:31 2014" -->
<!-- isoreceived="20140526032531" -->
<!-- sent="Sun, 25 May 2014 20:25:28 -0700" -->
<!-- isosent="20140526032528" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk (RDMA and VT) warnings" -->
<!-- id="2B4517C0-0D76-42BE-83AD-7D1E4975A04D_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk (RDMA and VT) warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-25 23:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14841.php">Kevin Brown: "[OMPI devel] ompi_info not Giving Complete Output"</a>
<li><strong>Previous message:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building optimized on an IB-based machine:
<br>
<p>osc_rdma_data_move.c: In function 'ompi_osc_rdma_callback':
<br>
osc_rdma_data_move.c:1633: warning: unused variable 'incoming_length'
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send':
<br>
osc_rdma_data_move.c:221: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_data_move.c:220: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_gacc_long_start':
<br>
osc_rdma_data_move.c:961: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_gacc_start':
<br>
osc_rdma_data_move.c:912: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_rget_accumulate_internal':
<br>
osc_rdma_comm.c:943: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:940: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_acc_long_start':
<br>
osc_rdma_data_move.c:827: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
<br>
osc_rdma_comm.c:736: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:733: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_accumulate_w_req':
<br>
osc_rdma_comm.c:420: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:417: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_put_w_req':
<br>
osc_rdma_comm.c:251: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:244: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
<br>
osc_rdma_comm.c:736: warning: 'ptr' may be used uninitialized in this function
<br>
osc_rdma_comm.c:733: warning: 'frag' may be used uninitialized in this function
<br>
<p><p><p><p>vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14841.php">Kevin Brown: "[OMPI devel] ompi_info not Giving Complete Output"</a>
<li><strong>Previous message:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
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
