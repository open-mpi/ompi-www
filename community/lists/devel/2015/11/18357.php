<?
$subject_val = "[OMPI devel] Lots and lots of warnings on master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 22:51:45 2015" -->
<!-- isoreceived="20151111035145" -->
<!-- sent="Tue, 10 Nov 2015 19:51:39 -0800" -->
<!-- isosent="20151111035139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Lots and lots of warnings on master" -->
<!-- id="9F5A19A6-3E17-40DA-A527-F3423BD0D09A_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Lots and lots of warnings on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-10 22:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Previous message:</strong> <a href="18356.php">Gilles Gouaillardet: "[OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Reply:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is from an older compiler, so take it for what it&#226;&#128;&#153;s worth - I&#226;&#128;&#153;ll take care of the orte ones, but the bcol, nbc, and osc ones will need addressing:
<br>
<p>pmix1_server_south.c: In function 'myerr':
<br>
pmix1_server_south.c:58: warning: 'nm' may be used uninitialized in this function
<br>
<p>pmix1_client.c: In function 'myerr':
<br>
pmix1_client.c:44: warning: 'nm' may be used uninitialized in this function
<br>
<p>base/rml_base_channel_handlers.c: In function 'orte_rml_base_close_channel_send_callback':
<br>
base/rml_base_channel_handlers.c:95: warning: unused variable &#226;&#128;&#152;peer'
<br>
<p>runtime/orte_data_server.c: In function 'orte_data_server':
<br>
runtime/orte_data_server.c:174: warning: 'uid' may be used uninitialized in this function
<br>
<p>util/dash_host/dash_host.c: In function 'orte_util_add_dash_host_nodes':
<br>
util/dash_host/dash_host.c:57: warning: 'slots' may be used uninitialized in this function
<br>
util/dash_host/dash_host.c:58: warning: 'slots_given' may be used uninitialized in this function
<br>
<p>qos_ack_component.c: In function 'orte_qos_ack_recv_msg_timeout_callback':
<br>
qos_ack_component.c:534: warning: unused variable 'msg'
<br>
qos_ack_component.c: In function 'orte_qos_ack_msg_send_callback':
<br>
qos_ack_component.c:667: warning: unused variable 'channel'
<br>
qos_ack_component.c: In function 'ack_recv':
<br>
qos_ack_component.c:316: warning: 'room_num' may be used uninitialized in this function
<br>
<p>ras_slurm_module.c: In function 'recv_data':
<br>
ras_slurm_module.c:778: warning: 'app' may be used uninitialized in this function
<br>
<p>bcol_ptpcoll_allreduce.c: In function 'bcol_ptpcoll_allreduce_narraying_init':
<br>
bcol_ptpcoll_allreduce.c:236: warning: unused variable 'dtype'
<br>
bcol_ptpcoll_allreduce.c:235: warning: unused variable &#226;&#128;&#152;count'
<br>
<p>nbc.c: In function 'NBC_Progress':
<br>
nbc.c:297: warning: 'size' may be used uninitialized in this function
<br>
<p>osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_accumulate_w_req':
<br>
osc_pt2pt_comm.c:424: warning: 'ptr' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c:420: warning: 'frag' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_put_w_req':
<br>
osc_pt2pt_comm.c:250: warning: 'ptr' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c:242: warning: 'frag' may be used uninitialized in this function
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_callback':
<br>
osc_pt2pt_data_move.c:1615: warning: unused variable 'incoming_length'
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_rget_accumulate_internal':
<br>
osc_pt2pt_comm.c:951: warning: 'ptr' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c:947: warning: 'frag' may be used uninitialized in this function
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_control_send':
<br>
osc_pt2pt_data_move.c:213: warning: 'ptr' may be used uninitialized in this function
<br>
osc_pt2pt_data_move.c:212: warning: 'frag' may be used uninitialized in this function
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_gacc_long_start':
<br>
osc_pt2pt_data_move.c:961: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_gacc_start':
<br>
osc_pt2pt_data_move.c:914: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_rget_internal':
<br>
osc_pt2pt_comm.c:744: warning: 'ptr' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c:740: warning: 'frag' may be used uninitialized in this function
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_acc_long_start':
<br>
osc_pt2pt_data_move.c:831: warning: 'acc_data' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_compare_and_swap':
<br>
osc_pt2pt_comm.c:601: warning: 'ptr' may be used uninitialized in this function
<br>
osc_pt2pt_comm.c:594: warning: 'frag' may be used uninitialized in this function
<br>
<p>osc_rdma_active_target.c: In function 'ompi_osc_rdma_post_atomic':
<br>
osc_rdma_active_target.c:183: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c: In function 'ompi_osc_rdma_compare_and_swap':
<br>
osc_rdma_accumulate.c:693: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c:691: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_passive_target.c: In function 'ompi_osc_rdma_unlock_atomic':
<br>
osc_rdma_passive_target.c:239: warning: 'peer' may be used uninitialized in this function
<br>
osc_rdma_passive_target.c: In function 'ompi_osc_rdma_lock_atomic':
<br>
osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_passive_target.c: In function 'ompi_osc_rdma_lock_all_atomic':
<br>
osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_put':
<br>
osc_rdma_comm.c:705: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_comm.c:704: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
<br>
osc_rdma_comm.c:740: warning: 'source_address' may be used uninitialized in this function
<br>
osc_rdma_comm.c:739: warning: 'source_handle' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c: In function 'ompi_osc_rdma_get_accumulate':
<br>
osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c: In function 'ompi_osc_rdma_accumulate':
<br>
osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c: In function 'ompi_osc_rdma_raccumulate':
<br>
osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_rput':
<br>
osc_rdma_comm.c:705: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_comm.c:704: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
<br>
osc_rdma_comm.c:740: warning: 'source_address' may be used uninitialized in this function
<br>
osc_rdma_comm.c:739: warning: 'source_handle' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c: In function 'ompi_osc_rdma_fetch_and_op':
<br>
osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c: In function 'ompi_osc_rdma_rget_accumulate':
<br>
osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
<br>
osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
<br>
osc_rdma_dynamic.c: In function 'ompi_osc_rdma_find_dynamic_region':
<br>
osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
<br>
<p>monitoring_test.c:81: warning: &#226;&#128;&#152;flush_cvar_idx&#226;&#128;&#153; defined but not used
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Previous message:</strong> <a href="18356.php">Gilles Gouaillardet: "[OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Reply:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
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
