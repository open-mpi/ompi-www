<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 12:38:53 2009" -->
<!-- isoreceived="20090527163853" -->
<!-- sent="Wed, 27 May 2009 12:38:43 -0400" -->
<!-- isosent="20090527163843" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300" -->
<!-- id="907C3DBE-5FB7-498E-A64D-401D89BC0EBD_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DFC61C76-BDC4-45AE-B375-FFB9C347C730_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 12:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Previous message:</strong> <a href="6124.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6124.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Reply:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depend on how we evaluate the fact that we can deliver wrong (and  
<br>
truncated) data. From my perspective it is a blocker, and reflected  
<br>
this on the CMR.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 12:29 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Never mind, I see CMR #1934.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a critical update?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 12:29 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this need to go to v1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2009, at 12:12 PM, &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2009-05-27 12:12:18 EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 21300
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21300">https://svn.open-mpi.org/trac/ompi/changeset/21300</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't add the offset to all segments, only the first one should be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affected. Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to Roberto Ammendola for this bug report and patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h |     7 +++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1 files changed, 5 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h    (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.h    2009-05-27  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12:12:18 EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -179,8 +179,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static inline bool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recv_request_pml_complete_check(mca_pml_ob1_recv_request_t *recvreq)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_atomic_rmb();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if(recvreq-&gt;req_match_received &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            recvreq-&gt;req_bytes_received &gt;= recvreq- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;req_recv.req_bytes_packed &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            lock_recv_request(recvreq)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -218,8 +219,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    req-&gt;req_recv.req_base.req_ompi.req_status.MPI_SOURCE = hdr- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;hdr_src;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    req-&gt;req_recv.req_base.req_ompi.req_status.MPI_TAG = hdr- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;hdr_tag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    req-&gt;req_match_received = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_THREAD_SUPPORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    opal_atomic_wmb();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if(req-&gt;req_recv.req_bytes_packed &gt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if OPAL_ENABLE_HETEROGENEOUS_SUPPORT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if(MPI_ANY_SOURCE == req-&gt;req_recv.req_base.req_peer) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -262,6 +264,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                iov[iov_count].iov_base =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (IOVBASE_TYPE*)                         \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    ((unsigned char*)segment-&gt;seg_addr.pval +  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; offset);            \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                iov_count+ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +;                                                      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                offset =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0;                                                       \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }                                                                     \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }                                                                         \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        PERUSE_TRACE_COMM_OMPI_EVENT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (PERUSE_COMM_REQ_XFER_CONTINUE,              \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Previous message:</strong> <a href="6124.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>In reply to:</strong> <a href="6124.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
<li><strong>Reply:</strong> <a href="6126.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21300"</a>
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
