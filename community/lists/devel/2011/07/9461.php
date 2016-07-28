<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 16:51:39 2011" -->
<!-- isoreceived="20110702205139" -->
<!-- sent="Sat, 2 Jul 2011 15:51:31 -0500" -->
<!-- isosent="20110702205131" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="6C4452D1-0504-4FE0-8687-23402A48DE79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ipro7oq1.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 16:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9465.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9465.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does your llp sed path order MPI matching ordering?  Eg if some prior isend is already queued, could the llp send overtake it?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 29, 2011, at 8:27 AM, &quot;Kawashima&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, we created a new BTL component, 'tofu BTL'. It's not so special
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one but dedicated to our Tofu interconnect. But its latency was not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enough for us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we created a new framework, 'LLP', and its component, 'tofu LLP'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It bypasses request object creation in PML and BML/BTL, and sends
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a message immediately if possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gotcha.  Was the sendi pml call not sufficient?  (sendi = &quot;send immediate&quot;)  This call was designed to be part of a latency reduction mechanism.  I forget offhand what we don't do before calling sendi, but the rationale was that if the message was small enough, we could skip some steps in the sending process and &quot;just send it.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know sendi, but its latency was not sufficient for us.
</span><br>
<span class="quotelev1">&gt; To come at sendi call, we must do:
</span><br>
<span class="quotelev1">&gt;  - allocate send request (MCA_PML_OB1_SEND_REQUEST_ALLOC)
</span><br>
<span class="quotelev1">&gt;  - initialize send request (MCA_PML_OB1_SEND_REQUEST_INIT)
</span><br>
<span class="quotelev1">&gt;  - select BTL module (mca_pml_ob1_send_request_start)
</span><br>
<span class="quotelev1">&gt;  - select protocol (mca_pml_ob1_send_request_start_btl)
</span><br>
<span class="quotelev1">&gt; We want to eliminate these overheads. We want to send more immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a code snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_LLP
</span><br>
<span class="quotelev1">&gt; static inline int mca_pml_ob1_call_llp_send(void *buf,
</span><br>
<span class="quotelev1">&gt;                                            size_t size,
</span><br>
<span class="quotelev1">&gt;                                            int dst,
</span><br>
<span class="quotelev1">&gt;                                            int tag,
</span><br>
<span class="quotelev1">&gt;                                            ompi_communicator_t *comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rc;
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_comm_proc_t *proc = &amp;comm-&gt;c_pml_comm-&gt;procs[dst];
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_match_hdr_t *match = mca_pml_ob1.llp_send_buf;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    match-&gt;hdr_common.hdr_type = MCA_PML_OB1_HDR_TYPE_MATCH;
</span><br>
<span class="quotelev1">&gt;    match-&gt;hdr_common.hdr_flags = 0;
</span><br>
<span class="quotelev1">&gt;    match-&gt;hdr_ctx = comm-&gt;c_contextid;
</span><br>
<span class="quotelev1">&gt;    match-&gt;hdr_src = comm-&gt;c_my_rank;
</span><br>
<span class="quotelev1">&gt;    match-&gt;hdr_tag = tag;
</span><br>
<span class="quotelev1">&gt;    match-&gt;hdr_seq = proc-&gt;send_sequence + 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    rc = MCA_LLP_CALL(send(buf, size, OMPI_PML_OB1_MATCH_HDR_LEN,
</span><br>
<span class="quotelev1">&gt;                           (bool)OMPI_ENABLE_OB1_PAD_MATCH_HDR,
</span><br>
<span class="quotelev1">&gt;                           ompi_comm_peer_lookup(comm, dst),
</span><br>
<span class="quotelev1">&gt;                           MCA_PML_OB1_HDR_TYPE_MATCH));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (rc == OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;        /* NOTE this is not thread safe */
</span><br>
<span class="quotelev1">&gt;        OPAL_THREAD_ADD32(&amp;proc-&gt;send_sequence, 1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_send(void *buf,
</span><br>
<span class="quotelev1">&gt;                     size_t count,
</span><br>
<span class="quotelev1">&gt;                     ompi_datatype_t * datatype,
</span><br>
<span class="quotelev1">&gt;                     int dst,
</span><br>
<span class="quotelev1">&gt;                     int tag,
</span><br>
<span class="quotelev1">&gt;                     mca_pml_base_send_mode_t sendmode,
</span><br>
<span class="quotelev1">&gt;                     ompi_communicator_t * comm)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rc;
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1_send_request_t *sendreq;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OMPI_ENABLE_LLP
</span><br>
<span class="quotelev1">&gt;    /* try to send message via LLP if
</span><br>
<span class="quotelev1">&gt;     *   - one of LLP modules is available, and
</span><br>
<span class="quotelev1">&gt;     *   - datatype is basic, and
</span><br>
<span class="quotelev1">&gt;     *   - data is small, and
</span><br>
<span class="quotelev1">&gt;     *   - communication mode is standard, buffered, or ready, and
</span><br>
<span class="quotelev1">&gt;     *   - destination is not myself
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    if (((datatype-&gt;flags &amp; DT_FLAG_BASIC) == DT_FLAG_BASIC) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;        (datatype-&gt;size * count &lt; mca_pml_ob1.llp_max_payload_size) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;        (sendmode == MCA_PML_BASE_SEND_STANDARD ||
</span><br>
<span class="quotelev1">&gt;         sendmode == MCA_PML_BASE_SEND_BUFFERED ||
</span><br>
<span class="quotelev1">&gt;         sendmode == MCA_PML_BASE_SEND_READY) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;        (dst != comm-&gt;c_my_rank)) {
</span><br>
<span class="quotelev1">&gt;        rc = mca_pml_ob1_call_llp_send(buf, datatype-&gt;size * count, dst, tag, comm);
</span><br>
<span class="quotelev1">&gt;        if (rc != OMPI_ERR_NOT_AVAILABLE) {
</span><br>
<span class="quotelev1">&gt;            /* successfully sent out via LLP or unrecoverable error occurred */
</span><br>
<span class="quotelev1">&gt;            return rc;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MCA_PML_OB1_SEND_REQUEST_ALLOC(comm, dst, sendreq, rc);
</span><br>
<span class="quotelev1">&gt;    if (rc != OMPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;        return rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MCA_PML_OB1_SEND_REQUEST_INIT(sendreq,
</span><br>
<span class="quotelev1">&gt;                                  buf,
</span><br>
<span class="quotelev1">&gt;                                  count,
</span><br>
<span class="quotelev1">&gt;                                  datatype,
</span><br>
<span class="quotelev1">&gt;                                  dst, tag,
</span><br>
<span class="quotelev1">&gt;                                  comm, sendmode, false);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    PERUSE_TRACE_COMM_EVENT (PERUSE_COMM_REQ_ACTIVATE,
</span><br>
<span class="quotelev1">&gt;                             &amp;(sendreq)-&gt;req_send.req_base,
</span><br>
<span class="quotelev1">&gt;                             PERUSE_SEND);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MCA_PML_OB1_SEND_REQUEST_START(sendreq, rc);
</span><br>
<span class="quotelev1">&gt;    if (rc != OMPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;        MCA_PML_OB1_SEND_REQUEST_RETURN( sendreq );
</span><br>
<span class="quotelev1">&gt;        return rc;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    rc = sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR;
</span><br>
<span class="quotelev1">&gt;    ompi_request_free( (ompi_request_t**)&amp;sendreq );
</span><br>
<span class="quotelev1">&gt;    return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send is body of MPI_Send in Open MPI. Region of
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_LLP is added by us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't have to use a send request if we could &quot;send immediately&quot;.
</span><br>
<span class="quotelev1">&gt; So we try to send via LLP at first. If LLP could not send immediately
</span><br>
<span class="quotelev1">&gt; because of interconnect busy or something, LLP returns
</span><br>
<span class="quotelev1">&gt; OMPI_ERR_NOT_AVAILABLE, and we continue normal PML/BML/BTL send(i).
</span><br>
<span class="quotelev1">&gt; Since we want to use simple memcpy instead of complex convertor,
</span><br>
<span class="quotelev1">&gt; we restrict datatype that can go into the LLP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, we cannot use LLP on MPI_Isend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note, too, that the coll modules can be laid overtop of each other -- e.g., if you only implement barrier (and some others) in tofu coll, then you can supply NULL for the other function pointers and the coll base will resolve those functions to other coll modules automatically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the info. I've read mca_coll_base_comm_select() and understood.
</span><br>
<span class="quotelev1">&gt; Our implementation was bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9465.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9465.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
