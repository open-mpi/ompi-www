<?
$subject_val = "Re: [OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 02:24:22 2014" -->
<!-- isoreceived="20140726062422" -->
<!-- sent="Fri, 25 Jul 2014 23:22:57 -0700" -->
<!-- isosent="20140726062257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="DEADED01-4BD7-403D-B22E-7AF042D7D8FB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyY1S_MEFrHCc32EByN4stGRZq06uFXrwappPVeMGic3AA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk compilation errors in jenkins<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-26 02:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Previous message:</strong> <a href="15271.php">Mike Dubman: "[OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15271.php">Mike Dubman: "[OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's because you folks didn't completely cleanup the open fabrics stuff prior to the move - something that we warned about, but folks said they would resolve later :-)
<br>
<p>On Jul 25, 2014, at 11:19 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Making all in mca/common/ofacm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/hpc/local/benchmarks/hpc-stack-gcc/src/install/ompi-master/opal/mca/common/ofacm'
</span><br>
<span class="quotelev1">&gt;   CC       libmca_common_ofacm_la-common_ofacm_base.lo
</span><br>
<span class="quotelev1">&gt;   CC       libmca_common_ofacm_la-common_ofacm_oob.lo
</span><br>
<span class="quotelev1">&gt;   CC       libmca_common_ofacm_la-common_ofacm_empty.lo
</span><br>
<span class="quotelev1">&gt;   LN_S     libmca_common_ofacm.la
</span><br>
<span class="quotelev1">&gt; common_ofacm_oob.c: In function 'oob_component_query':
</span><br>
<span class="quotelev1">&gt; common_ofacm_oob.c:178: warning: passing argument 4 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; common_ofacm_oob.c:178: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c: In function 'xoob_context_init':
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:354: error: request for member 'jobid' in something not a structure or union
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c: In function 'xoob_endpoint_fina
</span><br>
<span class="quotelev1">&gt; common_ofacm_oob.c:728: warning: passing argument 4 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; common_ofacm_oob.c:728: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c: In function 'xoob_send_connect_data':
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:791: warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:791: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:791: warning: passing argument 4 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:791: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c: In function 'xoob_recv_qp_create':
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:963: warning: 'ibv_create_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:126)
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:983: warning: 'ibv_modify_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:152)
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:1011: warning: 'ibv_modify_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:152)
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c: In function 'xoob_recv_qp_connect':
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:1032: warning: 'ibv_reg_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:185)
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c: In function 'xoob_component_query':
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:1407: warning: passing argument 4 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev1">&gt; common_ofacm_xoob.c:1407: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/hpc/local/benchmarks/hpc-stack-gcc/src/install/ompi-master/opal/mca/common/ofacm'
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15271.php">http://www.open-mpi.org/community/lists/devel/2014/07/15271.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>Previous message:</strong> <a href="15271.php">Mike Dubman: "[OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>In reply to:</strong> <a href="15271.php">Mike Dubman: "[OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
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
