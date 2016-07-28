<?
$subject_val = "[OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 02:19:47 2014" -->
<!-- isoreceived="20140726061947" -->
<!-- sent="Sat, 26 Jul 2014 09:19:45 +0300" -->
<!-- isosent="20140726061945" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="CAAO1KyY1S_MEFrHCc32EByN4stGRZq06uFXrwappPVeMGic3AA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] trunk compilation errors in jenkins<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-26 02:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15270.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Making all in mca/common/ofacm
<br>
make[2]: Entering directory
<br>
`/hpc/local/benchmarks/hpc-stack-gcc/src/install/ompi-master/opal/mca/common/ofacm'
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_base.lo
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_oob.lo
<br>
&nbsp;&nbsp;CC       libmca_common_ofacm_la-common_ofacm_empty.lo
<br>
&nbsp;&nbsp;LN_S     libmca_common_ofacm.la
<br>
common_ofacm_oob.c: In function 'oob_component_query':
<br>
common_ofacm_oob.c:178: warning: passing argument 4 of
<br>
'orte_rml.recv_buffer_nb' from incompatible pointer type
<br>
common_ofacm_oob.c:178: note: expected 'orte_rml_buffer_callback_fn_t' but
<br>
argument is of type 'void (*)(int,  opal_process_name_t *, struct
<br>
opal_buffer_t *, ompi_rml_tag_t,  void *)'
<br>
common_ofacm_xoob.c: In function 'xoob_context_init':
<br>
common_ofacm_xoob.c:354: error: request for member 'jobid' in something not
<br>
a structure or union
<br>
common_ofacm_xoob.c: In function 'xoob_endpoint_fina
<br>
common_ofacm_oob.c:728: warning: passing argument 4 of
<br>
'orte_rml.send_buffer_nb' from incompatible pointer type
<br>
common_ofacm_oob.c:728: note: expected 'orte_rml_buffer_callback_fn_t' but
<br>
argument is of type 'void (*)(int,  opal_process_name_t *, struct
<br>
opal_buffer_t *, ompi_rml_tag_t,  void *)'
<br>
common_ofacm_xoob.c: In function 'xoob_send_connect_data':
<br>
common_ofacm_xoob.c:791: warning: passing argument 1 of
<br>
'orte_rml.send_buffer_nb' from incompatible pointer type
<br>
common_ofacm_xoob.c:791: note: expected 'struct orte_process_name_t *' but
<br>
argument is of type 'opal_process_name_t *'
<br>
common_ofacm_xoob.c:791: warning: passing argument 4 of
<br>
'orte_rml.send_buffer_nb' from incompatible pointer type
<br>
common_ofacm_xoob.c:791: note: expected 'orte_rml_buffer_callback_fn_t' but
<br>
argument is of type 'void (*)(int,  opal_process_name_t *, struct
<br>
opal_buffer_t *, ompi_rml_tag_t,  void *)'
<br>
common_ofacm_xoob.c: In function 'xoob_recv_qp_create':
<br>
common_ofacm_xoob.c:963: warning: 'ibv_create_xrc_rcv_qp' is deprecated
<br>
(declared at /usr/include/infiniband/ofa_verbs.h:126)
<br>
common_ofacm_xoob.c:983: warning: 'ibv_modify_xrc_rcv_qp' is deprecated
<br>
(declared at /usr/include/infiniband/ofa_verbs.h:152)
<br>
common_ofacm_xoob.c:1011: warning: 'ibv_modify_xrc_rcv_qp' is deprecated
<br>
(declared at /usr/include/infiniband/ofa_verbs.h:152)
<br>
common_ofacm_xoob.c: In function 'xoob_recv_qp_connect':
<br>
common_ofacm_xoob.c:1032: warning: 'ibv_reg_xrc_rcv_qp' is deprecated
<br>
(declared at /usr/include/infiniband/ofa_verbs.h:185)
<br>
common_ofacm_xoob.c: In function 'xoob_component_query':
<br>
common_ofacm_xoob.c:1407: warning: passing argument 4 of
<br>
'orte_rml.recv_buffer_nb' from incompatible pointer type
<br>
common_ofacm_xoob.c:1407: note: expected 'orte_rml_buffer_callback_fn_t'
<br>
but argument is of type 'void (*)(int,  opal_process_name_t *, struct
<br>
opal_buffer_t *, ompi_rml_tag_t,  void *)'
<br>
make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-gcc/src/install/ompi-master/opal/mca/common/ofacm'
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15270.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for --with-devel-headers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
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
