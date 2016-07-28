<?
$subject_val = "Re: [OMPI devel] Trunk (RDMA and VT) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 00:29:22 2014" -->
<!-- isoreceived="20140528042922" -->
<!-- sent="Wed, 28 May 2014 13:29:20 +0900" -->
<!-- isosent="20140528042920" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk (RDMA and VT) warnings" -->
<!-- id="CAAkFZ5tJoPRvGCac2wcSsRhFgk8=K7m74uk664XU1caWC+LDnA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2B4517C0-0D76-42BE-83AD-7D1E4975A04D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk (RDMA and VT) warnings<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 00:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14840.php">Ralph Castain: "[OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>can you please describe your environment (at least compiler (and version) +
<br>
configure command line)
<br>
i checked osc_rdma_data_move.c only :
<br>
<p>size_t incoming_length; is used to improve readability.
<br>
it is used only in an assert clause and in OPAL_OUTPUT_VERBOSE
<br>
<p>one way to silence the warning is not to use this variable (and compromise
<br>
readability).
<br>
<p>an other way would be to
<br>
#if OPAL_ENABLE_DEBUG
<br>
size_t incoming_length = request-&gt;req_status._ucount);
<br>
#endif
<br>
<p>imho, a more elegant way would be to use a macro like
<br>
OPAL_IF_DEBUG(size_t incoming_length = request-&gt;req_status._ucount);)
<br>
<p>/* i am not aware of such a macro, please point me if it already exists */
<br>
<p>any thoughts ?
<br>
<p><p>about the other warnings, xxx may be used uninitialized in this function, i
<br>
was unable to reproduce it and i have to double check again.
<br>
so far, it seems this is a false positive/compiler bug that could be
<br>
triggered by inlining
<br>
/* i could not find any path in which the variable is used unitialized */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Mon, May 26, 2014 at 12:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building optimized on an IB-based machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_callback':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:1633: warning: unused variable 'incoming_length'
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:221: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:220: warning: 'frag' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_gacc_long_start':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:961: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_gacc_start':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:912: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_rget_accumulate_internal':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:943: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:940: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c: In function 'ompi_osc_rdma_acc_long_start':
</span><br>
<span class="quotelev1">&gt; osc_rdma_data_move.c:827: warning: 'acc_data' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_rget':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:736: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:733: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_accumulate_w_req':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:420: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:417: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_put_w_req':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:251: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:244: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c: In function 'ompi_osc_rdma_get':
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:736: warning: 'ptr' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; osc_rdma_comm.c:733: warning: 'frag' may be used uninitialized in this
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c: In function 'vt_plugin_cntr_write_post_mortem':
</span><br>
<span class="quotelev1">&gt; vt_plugin_cntr.c:1139: warning: 'min_counter' may be used uninitialized in
</span><br>
<span class="quotelev1">&gt; this function
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14840.php">http://www.open-mpi.org/community/lists/devel/2014/05/14840.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14879.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14840.php">Ralph Castain: "[OMPI devel] Trunk (RDMA and VT) warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Reply:</strong> <a href="14889.php">Ralph Castain: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
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
