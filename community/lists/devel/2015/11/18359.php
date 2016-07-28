<?
$subject_val = "Re: [OMPI devel] Lots and lots of warnings on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 10:09:09 2015" -->
<!-- isoreceived="20151111150909" -->
<!-- sent="Wed, 11 Nov 2015 07:09:03 -0800" -->
<!-- isosent="20151111150903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Lots and lots of warnings on master" -->
<!-- id="9E781AB7-5DF4-4D54-AD59-CF6D3DC274CE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="57C315FE-1008-4BBA-B966-D306A4FF3AD8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Lots and lots of warnings on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-11 10:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Previous message:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>In reply to:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Reply:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I don&#226;&#128;&#153;t think that&#226;&#128;&#153;s the issue here. I don&#226;&#128;&#153;t see these warnings on my CentOS7 box, for example. I think this is driven by the fact that odin has some very old compilers and a very different environment, and so it has historically generated more warnings.
<br>
<p>The warnings often are valid - they just don&#226;&#128;&#153;t get issued by other compilers, or configure activates other code paths.
<br>
<p><p><span class="quotelev1">&gt; On Nov 11, 2015, at 6:17 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once you squash all these warnings, you could set up a little bit of Jenkins or Travis CI logic to check for PRs that add new warnings and marks them appropriately.  Of course, with people making commits directly to master, warnings introduced by those direct commits will be ascribed to those who make PRs against master.  But at least you'd catch them quickly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPICH project has a script that could easily be adapted to extract only the warnings: <a href="http://git.mpich.org/mpich.git/blob/HEAD:/maint/clmake.in">http://git.mpich.org/mpich.git/blob/HEAD:/maint/clmake.in</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively/additionally you could have a build bot that watches for new commits to master, runs a quick build on each new commit, and sends mail to devel_at_[hidden] and the offender with the new warnings that have been introduced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2015, at 10:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is from an older compiler, so take it for what it&#226;&#128;&#153;s worth - I&#226;&#128;&#153;ll take care of the orte ones, but the bcol, nbc, and osc ones will need addressing:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pmix1_server_south.c: In function 'myerr':
</span><br>
<span class="quotelev2">&gt;&gt; pmix1_server_south.c:58: warning: 'nm' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pmix1_client.c: In function 'myerr':
</span><br>
<span class="quotelev2">&gt;&gt; pmix1_client.c:44: warning: 'nm' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; base/rml_base_channel_handlers.c: In function 'orte_rml_base_close_channel_send_callback':
</span><br>
<span class="quotelev2">&gt;&gt; base/rml_base_channel_handlers.c:95: warning: unused variable &#226;&#128;&#152;peer'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_data_server.c: In function 'orte_data_server':
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_data_server.c:174: warning: 'uid' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; util/dash_host/dash_host.c: In function 'orte_util_add_dash_host_nodes':
</span><br>
<span class="quotelev2">&gt;&gt; util/dash_host/dash_host.c:57: warning: 'slots' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; util/dash_host/dash_host.c:58: warning: 'slots_given' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; qos_ack_component.c: In function 'orte_qos_ack_recv_msg_timeout_callback':
</span><br>
<span class="quotelev2">&gt;&gt; qos_ack_component.c:534: warning: unused variable 'msg'
</span><br>
<span class="quotelev2">&gt;&gt; qos_ack_component.c: In function 'orte_qos_ack_msg_send_callback':
</span><br>
<span class="quotelev2">&gt;&gt; qos_ack_component.c:667: warning: unused variable 'channel'
</span><br>
<span class="quotelev2">&gt;&gt; qos_ack_component.c: In function 'ack_recv':
</span><br>
<span class="quotelev2">&gt;&gt; qos_ack_component.c:316: warning: 'room_num' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ras_slurm_module.c: In function 'recv_data':
</span><br>
<span class="quotelev2">&gt;&gt; ras_slurm_module.c:778: warning: 'app' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bcol_ptpcoll_allreduce.c: In function 'bcol_ptpcoll_allreduce_narraying_init':
</span><br>
<span class="quotelev2">&gt;&gt; bcol_ptpcoll_allreduce.c:236: warning: unused variable 'dtype'
</span><br>
<span class="quotelev2">&gt;&gt; bcol_ptpcoll_allreduce.c:235: warning: unused variable &#226;&#128;&#152;count'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; nbc.c: In function 'NBC_Progress':
</span><br>
<span class="quotelev2">&gt;&gt; nbc.c:297: warning: 'size' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_accumulate_w_req':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:424: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:420: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_put_w_req':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:250: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:242: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_callback':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c:1615: warning: unused variable 'incoming_length'
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_rget_accumulate_internal':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:951: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:947: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_control_send':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c:213: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c:212: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_gacc_long_start':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c:961: warning: 'acc_data' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_gacc_start':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c:914: warning: 'acc_data' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_rget_internal':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:744: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:740: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_acc_long_start':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_data_move.c:831: warning: 'acc_data' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c: In function 'ompi_osc_pt2pt_compare_and_swap':
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:601: warning: 'ptr' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_pt2pt_comm.c:594: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_active_target.c: In function 'ompi_osc_rdma_post_atomic':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_active_target.c:183: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c: In function 'ompi_osc_rdma_compare_and_swap':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:693: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:691: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_passive_target.c: In function 'ompi_osc_rdma_unlock_atomic':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_passive_target.c:239: warning: 'peer' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_passive_target.c: In function 'ompi_osc_rdma_lock_atomic':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_passive_target.c: In function 'ompi_osc_rdma_lock_all_atomic':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_put':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:705: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:704: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:740: warning: 'source_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:739: warning: 'source_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c: In function 'ompi_osc_rdma_get_accumulate':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c: In function 'ompi_osc_rdma_accumulate':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c: In function 'ompi_osc_rdma_raccumulate':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_rput':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:705: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:704: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:740: warning: 'source_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_comm.c:739: warning: 'source_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c: In function 'ompi_osc_rdma_fetch_and_op':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c: In function 'ompi_osc_rdma_rget_accumulate':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:743: warning: 'target_address' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_accumulate.c:742: warning: 'target_handle' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_dynamic.c: In function 'ompi_osc_rdma_find_dynamic_region':
</span><br>
<span class="quotelev2">&gt;&gt; osc_rdma_lock.h:116: warning: 'frag' may be used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; monitoring_test.c:81: warning: &#226;&#128;&#152;flush_cvar_idx&#226;&#128;&#153; defined but not used
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18357.php">http://www.open-mpi.org/community/lists/devel/2015/11/18357.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18358.php">http://www.open-mpi.org/community/lists/devel/2015/11/18358.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Previous message:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>In reply to:</strong> <a href="18358.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>Reply:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
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
