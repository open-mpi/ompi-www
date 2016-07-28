<?
$subject_val = "Re: [OMPI devel] Trunk warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 14:31:49 2014" -->
<!-- isoreceived="20141212193149" -->
<!-- sent="Fri, 12 Dec 2014 13:31:42 -0600" -->
<!-- isosent="20141212193142" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk warnings" -->
<!-- id="548B429E.8070202_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20141212180110.GK31431_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 14:31:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16560.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16558.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>In reply to:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll take care of the one ompio warning.
<br>
Edgar
<br>
<p>On 12/12/2014 12:01 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The osc warnings will go away after the btl modifications are applied. I
</span><br>
<span class="quotelev1">&gt; made signifigant changes to the component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 12, 2014 at 09:49:47AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     While building optimized on Linux:
</span><br>
<span class="quotelev2">&gt;&gt;     bcol_ptpcoll_allreduce.c: In function
</span><br>
<span class="quotelev2">&gt;&gt;     'bcol_ptpcoll_allreduce_narraying_init':
</span><br>
<span class="quotelev2">&gt;&gt;     bcol_ptpcoll_allreduce.c:236: warning: unused variable 'dtype'
</span><br>
<span class="quotelev2">&gt;&gt;     bcol_ptpcoll_allreduce.c:235: warning: unused variable `count'
</span><br>
<span class="quotelev2">&gt;&gt;     io_ompio_file_set_view.c: In function
</span><br>
<span class="quotelev2">&gt;&gt;     'mca_io_ompio_finalize_initial_grouping':
</span><br>
<span class="quotelev2">&gt;&gt;     io_ompio_file_set_view.c:363: warning: 'sendreq' may be used uninitialized
</span><br>
<span class="quotelev2">&gt;&gt;     in this function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c: In function 'ompi_osc_rdma_rget_accumulate_internal':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:1034: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:1031: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c: In function 'ompi_osc_rdma_callback':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c:1647: warning: unused variable 'incoming_length'
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c:225: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c:224: warning: 'frag' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:813: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:810: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c: In function 'ompi_osc_gacc_long_start':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c:973: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c: In function 'ompi_osc_rdma_put_w_req':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:296: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:289: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c: In function 'ompi_osc_rdma_gacc_start':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c:924: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c: In function 'ompi_osc_rdma_acc_long_start':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_data_move.c:839: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c: In function 'ompi_osc_rdma_accumulate_w_req':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:479: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:476: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:813: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     osc_rdma_comm.c:810: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev2">&gt;&gt;     function
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev2">&gt;&gt;     vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev2">&gt;&gt;     this function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16554.php">http://www.open-mpi.org/community/lists/devel/2014/12/16554.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16555.php">http://www.open-mpi.org/community/lists/devel/2014/12/16555.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16560.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16558.php">Nathan Hjelm: "Re: [OMPI devel] OpenIB has some borked code"</a>
<li><strong>In reply to:</strong> <a href="16555.php">Nathan Hjelm: "Re: [OMPI devel] Trunk warnings"</a>
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
