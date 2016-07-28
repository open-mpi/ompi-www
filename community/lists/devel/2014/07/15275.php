<?
$subject_val = "Re: [OMPI devel] trunk compilation errors in jenkins";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 18:37:14 2014" -->
<!-- isoreceived="20140726223714" -->
<!-- sent="Sat, 26 Jul 2014 18:37:11 -0400" -->
<!-- isosent="20140726223711" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk compilation errors in jenkins" -->
<!-- id="C8BBBF0F-C0AE-4F6D-88D4-195749C2BA91_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DEADED01-4BD7-403D-B22E-7AF042D7D8FB_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-26 18:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15276.php">Jeff Squyres (jsquyres): "[OMPI devel] trunk failures this morning"</a>
<li><strong>Previous message:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>In reply to:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15348.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15348.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I take advantage of this thread to clarify what is missing to have a perfectly MPI agnostic BTL interface. Some of these issues are pretty straightforward (getting rid of RTE and OMPI vestiges), some others will require some thinking from their developers in order to cope with a not conformant design (such as using MPI_COMM_WORLD in the BTL). So, here is an exhaustive list:
<br>
<p>- Open IB uses quite a few ORTE internals: orte_proc_is_bound
<br>
- also it makes usage of some functions/define that I can&#146;t find anywhere in the code base ompi_progress_threads
<br>
<p>- UGNI uses MPI_COMM_WORLD for internal management
<br>
- USNIC uses num_procs for internal management. It also directly calls ompi_rte_abort
<br>
- common OFACM uses the num_procs to hash table allocation
<br>
<p>Two items are of general interest as they affect our compatibility with past installations/usages:
<br>
- MPOOL alloc uses MPI level info keys &#133; 
<br>
- most of the BTL MCA parameters have not been renamed (!!!). Personally, I would be in favor of creating synonyms for now and then deprecate the OMPI version in 2.0, but I don&#146;t want to enforce this on everybody. So, the discussion is open on this topic.
<br>
<p>Ralph and Jeff (I think you added the seq interface to TCP), please take a look at the following:
<br>
- the implementation of the TCP seq interface seems to be wrong: it used the my_node_rank to compute the sequence number instead of the my_local_rank (I changed this to my_local_rank)
<br>
<p>If you have any issue with the move, I&#146;ll be happy to help and/or support you on your last move toward a completely generic BTL. To facilitate your work I exposed a minimalistic set of OMPI information at the OPAL level. Take a look at opal/util/proc.h for more info, but please try not to expose more.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>On Jul 26, 2014, at 02:22 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's because you folks didn't completely cleanup the open fabrics stuff prior to the move - something that we warned about, but folks said they would resolve later :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2014, at 11:19 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/common/ofacm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/hpc/local/benchmarks/hpc-stack-gcc/src/install/ompi-master/opal/mca/common/ofacm'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_base.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_oob.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libmca_common_ofacm_la-common_ofacm_empty.lo
</span><br>
<span class="quotelev2">&gt;&gt;   LN_S     libmca_common_ofacm.la
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_oob.c: In function 'oob_component_query':
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_oob.c:178: warning: passing argument 4 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_oob.c:178: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c: In function 'xoob_context_init':
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:354: error: request for member 'jobid' in something not a structure or union
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c: In function 'xoob_endpoint_fina
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_oob.c:728: warning: passing argument 4 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_oob.c:728: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c: In function 'xoob_send_connect_data':
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:791: warning: passing argument 1 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:791: note: expected 'struct orte_process_name_t *' but argument is of type 'opal_process_name_t *'
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:791: warning: passing argument 4 of 'orte_rml.send_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:791: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c: In function 'xoob_recv_qp_create':
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:963: warning: 'ibv_create_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:126)
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:983: warning: 'ibv_modify_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:152)
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:1011: warning: 'ibv_modify_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:152)
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c: In function 'xoob_recv_qp_connect':
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:1032: warning: 'ibv_reg_xrc_rcv_qp' is deprecated (declared at /usr/include/infiniband/ofa_verbs.h:185)
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c: In function 'xoob_component_query':
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:1407: warning: passing argument 4 of 'orte_rml.recv_buffer_nb' from incompatible pointer type
</span><br>
<span class="quotelev2">&gt;&gt; common_ofacm_xoob.c:1407: note: expected 'orte_rml_buffer_callback_fn_t' but argument is of type 'void (*)(int,  opal_process_name_t *, struct opal_buffer_t *, ompi_rml_tag_t,  void *)'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmca_common_ofacm_la-common_ofacm_xoob.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/hpc/local/benchmarks/hpc-stack-gcc/src/install/ompi-master/opal/mca/common/ofacm'
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15271.php">http://www.open-mpi.org/community/lists/devel/2014/07/15271.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15272.php">http://www.open-mpi.org/community/lists/devel/2014/07/15272.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15275/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15276.php">Jeff Squyres (jsquyres): "[OMPI devel] trunk failures this morning"</a>
<li><strong>Previous message:</strong> <a href="15274.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>In reply to:</strong> <a href="15272.php">Ralph Castain: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15348.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Reply:</strong> <a href="15348.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
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
