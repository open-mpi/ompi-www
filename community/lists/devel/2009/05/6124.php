<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 12:29:52 2009" -->
<!-- isoreceived="20090527162952" -->
<!-- sent="Wed, 27 May 2009 12:29:46 -0400" -->
<!-- isosent="20090527162946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300" -->
<!-- id="DFC61C76-BDC4-45AE-B375-FFB9C347C730_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6E73A20D-2FCD-49EE-8D90-62AC3053C2D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 12:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6125.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Previous message:</strong> <a href="6123.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6123.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6125.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Reply:</strong> <a href="6125.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind, I see CMR #1934.
<br>
<p>Is this a critical update?
<br>
<p><p>On May 27, 2009, at 12:29 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Does this need to go to v1.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 12:12 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-05-27 12:12:18 EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21300
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21300">https://svn.open-mpi.org/trac/ompi/changeset/21300</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Don't add the offset to all segments, only the first one should be  
</span><br>
<span class="quotelev2">&gt;&gt; affected. Thanks
</span><br>
<span class="quotelev2">&gt;&gt; to Roberto Ammendola for this bug report and patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h |     7 +++++--
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 5 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h    2009-05-27 12:12:18  
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -179,8 +179,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; static inline bool
</span><br>
<span class="quotelev2">&gt;&gt; recv_request_pml_complete_check(mca_pml_ob1_recv_request_t *recvreq)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; +#if OPAL_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;     opal_atomic_rmb();
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;     if(recvreq-&gt;req_match_received &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;             recvreq-&gt;req_bytes_received &gt;= recvreq- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;req_recv.req_bytes_packed &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;             lock_recv_request(recvreq)) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -218,8 +219,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;     req-&gt;req_recv.req_base.req_ompi.req_status.MPI_SOURCE = hdr- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;hdr_src;
</span><br>
<span class="quotelev2">&gt;&gt;     req-&gt;req_recv.req_base.req_ompi.req_status.MPI_TAG = hdr- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;hdr_tag;
</span><br>
<span class="quotelev2">&gt;&gt;     req-&gt;req_match_received = true;
</span><br>
<span class="quotelev2">&gt;&gt; +#if OPAL_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;     opal_atomic_wmb();
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;     if(req-&gt;req_recv.req_bytes_packed &gt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev2">&gt;&gt;         if(MPI_ANY_SOURCE == req-&gt;req_recv.req_base.req_peer) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -262,6 +264,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 iov[iov_count].iov_base =  
</span><br>
<span class="quotelev2">&gt;&gt; (IOVBASE_TYPE*)                         \
</span><br>
<span class="quotelev2">&gt;&gt;                     ((unsigned char*)segment-&gt;seg_addr.pval +  
</span><br>
<span class="quotelev2">&gt;&gt; offset);            \
</span><br>
<span class="quotelev2">&gt;&gt;                 iov_count+ 
</span><br>
<span class="quotelev2">&gt;&gt; +;                                                      \
</span><br>
<span class="quotelev2">&gt;&gt; +                offset =  
</span><br>
<span class="quotelev2">&gt;&gt; 0;                                                       \
</span><br>
<span class="quotelev2">&gt;&gt;             }                                                                     \
</span><br>
<span class="quotelev2">&gt;&gt;         }                                                                         \
</span><br>
<span class="quotelev2">&gt;&gt;         PERUSE_TRACE_COMM_OMPI_EVENT  
</span><br>
<span class="quotelev2">&gt;&gt; (PERUSE_COMM_REQ_XFER_CONTINUE,              \
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6125.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Previous message:</strong> <a href="6123.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6123.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6125.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Reply:</strong> <a href="6125.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
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
