<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 09:26:51 2011" -->
<!-- isoreceived="20110629132651" -->
<!-- sent="Wed, 29 Jun 2011 22:26:46 +0900" -->
<!-- isosent="20110629132646" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="87ipro7oq1.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5A7B23A1-3EA0-4BAF-8AB9-644C52BD4237_at_cisco.com" -->
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
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 09:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9444.php">Xin He: "[OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev2">&gt; &gt; First, we created a new BTL component, 'tofu BTL'. It's not so special
</span><br>
<span class="quotelev2">&gt; &gt; one but dedicated to our Tofu interconnect. But its latency was not
</span><br>
<span class="quotelev2">&gt; &gt; enough for us.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So we created a new framework, 'LLP', and its component, 'tofu LLP'.
</span><br>
<span class="quotelev2">&gt; &gt; It bypasses request object creation in PML and BML/BTL, and sends
</span><br>
<span class="quotelev2">&gt; &gt; a message immediately if possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gotcha.  Was the sendi pml call not sufficient?  (sendi = &quot;send immediate&quot;)  This call was designed to be part of a latency reduction mechanism.  I forget offhand what we don't do before calling sendi, but the rationale was that if the message was small enough, we could skip some steps in the sending process and &quot;just send it.&quot;
</span><br>
<p>I know sendi, but its latency was not sufficient for us.
<br>
To come at sendi call, we must do:
<br>
&nbsp;&nbsp;- allocate send request (MCA_PML_OB1_SEND_REQUEST_ALLOC)
<br>
&nbsp;&nbsp;- initialize send request (MCA_PML_OB1_SEND_REQUEST_INIT)
<br>
&nbsp;&nbsp;- select BTL module (mca_pml_ob1_send_request_start)
<br>
&nbsp;&nbsp;- select protocol (mca_pml_ob1_send_request_start_btl)
<br>
We want to eliminate these overheads. We want to send more immediately.
<br>
<p>Here is a code snippet:
<br>
<p>------------------------------------------------
<br>
<p>#if OMPI_ENABLE_LLP
<br>
static inline int mca_pml_ob1_call_llp_send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dst,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t *comm)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_comm_proc_t *proc = &amp;comm-&gt;c_pml_comm-&gt;procs[dst];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_match_hdr_t *match = mca_pml_ob1.llp_send_buf;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;match-&gt;hdr_common.hdr_type = MCA_PML_OB1_HDR_TYPE_MATCH;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;match-&gt;hdr_common.hdr_flags = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;match-&gt;hdr_ctx = comm-&gt;c_contextid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;match-&gt;hdr_src = comm-&gt;c_my_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;match-&gt;hdr_tag = tag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;match-&gt;hdr_seq = proc-&gt;send_sequence + 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rc = MCA_LLP_CALL(send(buf, size, OMPI_PML_OB1_MATCH_HDR_LEN,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(bool)OMPI_ENABLE_OB1_PAD_MATCH_HDR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_peer_lookup(comm, dst),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_HDR_TYPE_MATCH));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rc == OMPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* NOTE this is not thread safe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;proc-&gt;send_sequence, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
}
<br>
#endif
<br>
<p>int mca_pml_ob1_send(void *buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_t * datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dst,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_base_send_mode_t sendmode,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t * comm)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send_request_t *sendreq;
<br>
<p>#if OMPI_ENABLE_LLP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* try to send message via LLP if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - one of LLP modules is available, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - datatype is basic, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - data is small, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - communication mode is standard, buffered, or ready, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   - destination is not myself
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (((datatype-&gt;flags &amp; DT_FLAG_BASIC) == DT_FLAG_BASIC) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(datatype-&gt;size * count &lt; mca_pml_ob1.llp_max_payload_size) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(sendmode == MCA_PML_BASE_SEND_STANDARD ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendmode == MCA_PML_BASE_SEND_BUFFERED ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendmode == MCA_PML_BASE_SEND_READY) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(dst != comm-&gt;c_my_rank)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = mca_pml_ob1_call_llp_send(buf, datatype-&gt;size * count, dst, tag, comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rc != OMPI_ERR_NOT_AVAILABLE) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* successfully sent out via LLP or unrecoverable error occurred */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_SEND_REQUEST_ALLOC(comm, dst, sendreq, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rc != OMPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_SEND_REQUEST_INIT(sendreq,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dst, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm, sendmode, false);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PERUSE_TRACE_COMM_EVENT (PERUSE_COMM_REQ_ACTIVATE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;(sendreq)-&gt;req_send.req_base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERUSE_SEND);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_SEND_REQUEST_START(sendreq, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rc != OMPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_OB1_SEND_REQUEST_RETURN( sendreq );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_wait_completion(&amp;sendreq-&gt;req_send.req_base.req_ompi);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rc = sendreq-&gt;req_send.req_base.req_ompi.req_status.MPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_free( (ompi_request_t**)&amp;sendreq );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
}
<br>
<p>------------------------------------------------
<br>
<p>mca_pml_ob1_send is body of MPI_Send in Open MPI. Region of
<br>
OMPI_ENABLE_LLP is added by us.
<br>
<p>We don't have to use a send request if we could &quot;send immediately&quot;.
<br>
So we try to send via LLP at first. If LLP could not send immediately
<br>
because of interconnect busy or something, LLP returns
<br>
OMPI_ERR_NOT_AVAILABLE, and we continue normal PML/BML/BTL send(i).
<br>
Since we want to use simple memcpy instead of complex convertor,
<br>
we restrict datatype that can go into the LLP.
<br>
<p>Of course, we cannot use LLP on MPI_Isend.
<br>
<p><span class="quotelev1">&gt; Note, too, that the coll modules can be laid overtop of each other -- e.g., if you only implement barrier (and some others) in tofu coll, then you can supply NULL for the other function pointers and the coll base will resolve those functions to other coll modules automatically.
</span><br>
<p>Thanks for the info. I've read mca_coll_base_comm_select() and understood.
<br>
Our implementation was bad.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9444.php">Xin He: "[OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9461.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
