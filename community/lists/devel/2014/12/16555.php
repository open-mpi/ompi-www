<?
$subject_val = "Re: [OMPI devel] Trunk warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 13:01:12 2014" -->
<!-- isoreceived="20141212180112" -->
<!-- sent="Fri, 12 Dec 2014 11:01:10 -0700" -->
<!-- isosent="20141212180110" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk warnings" -->
<!-- id="20141212180110.GK31431_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D0CE77C-0406-43A8-856D-9AE2BA3823AC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk warnings<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 13:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16556.php">Howard Pritchard: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>Previous message:</strong> <a href="16554.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<li><strong>In reply to:</strong> <a href="16554.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16559.php">Edgar Gabriel: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>Reply:</strong> <a href="16559.php">Edgar Gabriel: "Re: [OMPI devel] Trunk warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The osc warnings will go away after the btl modifications are applied. I
<br>
made signifigant changes to the component.
<br>
<p>-Nathan
<br>
<p>On Fri, Dec 12, 2014 at 09:49:47AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    While building optimized on Linux:
</span><br>
<span class="quotelev1">&gt;    bcol_ptpcoll_allreduce.c: In function
</span><br>
<span class="quotelev1">&gt;    'bcol_ptpcoll_allreduce_narraying_init':
</span><br>
<span class="quotelev1">&gt;    bcol_ptpcoll_allreduce.c:236: warning: unused variable 'dtype'
</span><br>
<span class="quotelev1">&gt;    bcol_ptpcoll_allreduce.c:235: warning: unused variable `count'
</span><br>
<span class="quotelev1">&gt;    io_ompio_file_set_view.c: In function
</span><br>
<span class="quotelev1">&gt;    'mca_io_ompio_finalize_initial_grouping':
</span><br>
<span class="quotelev1">&gt;    io_ompio_file_set_view.c:363: warning: 'sendreq' may be used uninitialized
</span><br>
<span class="quotelev1">&gt;    in this function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c: In function 'ompi_osc_rdma_rget_accumulate_internal':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:1034: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:1031: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c: In function 'ompi_osc_rdma_callback':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c:1647: warning: unused variable 'incoming_length'
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c:225: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c:224: warning: 'frag' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:813: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:810: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c: In function 'ompi_osc_gacc_long_start':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c:973: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c: In function 'ompi_osc_rdma_put_w_req':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:296: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:289: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c: In function 'ompi_osc_rdma_gacc_start':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c:924: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c: In function 'ompi_osc_rdma_acc_long_start':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_data_move.c:839: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c: In function 'ompi_osc_rdma_accumulate_w_req':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:479: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:476: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:813: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    osc_rdma_comm.c:810: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt;    function
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt;    vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt;    this function
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16554.php">http://www.open-mpi.org/community/lists/devel/2014/12/16554.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16555/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16556.php">Howard Pritchard: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>Previous message:</strong> <a href="16554.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<li><strong>In reply to:</strong> <a href="16554.php">Ralph Castain: "[OMPI devel] Trunk warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16559.php">Edgar Gabriel: "Re: [OMPI devel] Trunk warnings"</a>
<li><strong>Reply:</strong> <a href="16559.php">Edgar Gabriel: "Re: [OMPI devel] Trunk warnings"</a>
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
