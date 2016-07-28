<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 11:28:25 2011" -->
<!-- isoreceived="20110808152825" -->
<!-- sent="Mon, 8 Aug 2011 11:28:08 -0400" -->
<!-- isosent="20110808152808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005" -->
<!-- id="D2299689-020B-4CCE-B7E3-9D1ECE38565A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108071206.p77C6ppw004568_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 11:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9618.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9633.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>Reply:</strong> <a href="9633.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>Does mxm_init() do Reasonable Things to check to see if the local OpenFabrics-capable devices are unsuitable for MXM?  E.g., does it check to see if the local OpenFabrics devices are MXM-capable, and if not, fail gracefully?
<br>
<p>Also, I would suggest NOT showing a show_help message if there are OF devices available such that CM/MXM can (probably) fail over to OB1/openib.  I.e., only show a show_help message if devices are available for MXM, but an actual error occurs during the MXM initialization.
<br>
<p>Otherwise, if I mpirun (with the MXM MTL installed) on a system with only RoCE or iWARP devices present, MXM will complain but then fail over to OB1/openib.  That would probably be confusing.
<br>
<p><p><p>On Aug 7, 2011, at 8:06 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25005
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25005">https://svn.open-mpi.org/trac/ompi/changeset/25005</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; better mxm selection mechanism, some refactoring
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c    |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c |    32 ++++++++++++++------------------        
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c      |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h   |     6 +++++-                                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c      |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   5 files changed, 26 insertions(+), 26 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c	2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -18,9 +18,9 @@
</span><br>
<span class="quotelev1">&gt;     mxm_error_t err;
</span><br>
<span class="quotelev1">&gt;     mca_mtl_mxm_request_t *mtl_mxm_request = (mca_mtl_mxm_request_t*) mtl_request;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    err = mxm_req_cancel(mtl_mxm_request-&gt;mxm_base_request);
</span><br>
<span class="quotelev1">&gt; +    err = mxm_req_cancel(&amp;mtl_mxm_request-&gt;mxm.base);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK == err) {
</span><br>
<span class="quotelev1">&gt; -        err = mxm_req_test(mtl_mxm_request-&gt;mxm_base_request);
</span><br>
<span class="quotelev1">&gt; +        err = mxm_req_test(&amp;mtl_mxm_request-&gt;mxm.base);
</span><br>
<span class="quotelev1">&gt;         if (MXM_OK == err) {
</span><br>
<span class="quotelev1">&gt;             mtl_request-&gt;ompi_req-&gt;req_status._cancelled = true;
</span><br>
<span class="quotelev1">&gt;             mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c	2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -72,18 +72,27 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int ompi_mtl_mxm_component_open(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    struct stat st;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    /* Component available only if IB hardware is present */
</span><br>
<span class="quotelev1">&gt; -    if (0 == stat(&quot;/dev/infiniband/uverbs0&quot;, &amp;st)) {
</span><br>
<span class="quotelev1">&gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; +    mxm_context_opts_t mxm_opts;
</span><br>
<span class="quotelev1">&gt; +    mxm_error_t err;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt; +    opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mxm_fill_context_opts(&amp;mxm_opts);
</span><br>
<span class="quotelev1">&gt; +    err = mxm_init(&amp;mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev1">&gt; +    if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt; +        orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;mxm init&quot;, true,
</span><br>
<span class="quotelev1">&gt; +                       mxm_error_string(err));
</span><br>
<span class="quotelev1">&gt;         return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static int ompi_mtl_mxm_component_close(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; +    mxm_cleanup(ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev1">&gt; +    ompi_mtl_mxm.mxm_context = NULL;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -91,21 +100,8 @@
</span><br>
<span class="quotelev1">&gt; ompi_mtl_mxm_component_init(bool enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                             bool enable_mpi_threads)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    mxm_context_opts_t mxm_opts;
</span><br>
<span class="quotelev1">&gt; -    mxm_error_t err;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev1">&gt; -    opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mxm_fill_context_opts(&amp;mxm_opts);
</span><br>
<span class="quotelev1">&gt; -    err = mxm_init(&amp;mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev1">&gt; -    if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt; -        orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;mxm init&quot;, true,
</span><br>
<span class="quotelev1">&gt; -                       mxm_error_string(err));
</span><br>
<span class="quotelev1">&gt; -        return NULL;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;     rc = ompi_mtl_mxm_module_init();
</span><br>
<span class="quotelev1">&gt;     if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;     	return NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c	2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -22,12 +22,12 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	mca_mtl_mxm_request_t *req = (mca_mtl_mxm_request_t *) context;
</span><br>
<span class="quotelev1">&gt;     struct ompi_request_t *ompi_req = req-&gt;super.ompi_req;
</span><br>
<span class="quotelev1">&gt; -    mxm_recv_req_t *mxm_recv_req = (mxm_recv_req_t *)req-&gt;mxm_base_request;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req_t *mxm_recv_req = &amp;req-&gt;mxm.recv;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Set completion status and envelope */
</span><br>
<span class="quotelev1">&gt;     ompi_req-&gt;req_status.MPI_TAG    = mxm_recv_req-&gt;completion.sender_tag;
</span><br>
<span class="quotelev1">&gt;     ompi_req-&gt;req_status.MPI_SOURCE = mxm_recv_req-&gt;completion.sender_imm;
</span><br>
<span class="quotelev1">&gt; -    ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(req-&gt;mxm_base_request-&gt;error);
</span><br>
<span class="quotelev1">&gt; +    ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(mxm_recv_req-&gt;base.error);
</span><br>
<span class="quotelev1">&gt;     ompi_req-&gt;req_status._ucount    = mxm_recv_req-&gt;completion.actual_len;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Copy data */
</span><br>
<span class="quotelev1">&gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mxm_recv_req = (mxm_recv_req_t *)mtl_mxm_request-&gt;mxm_base_request;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req = &amp;mtl_mxm_request-&gt;mxm.recv;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* prepare a receive request embedded in the MTL request */
</span><br>
<span class="quotelev1">&gt;     mxm_recv_req-&gt;base.state    = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h	2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct mca_mtl_mxm_request_t {
</span><br>
<span class="quotelev1">&gt;     struct mca_mtl_request_t super;
</span><br>
<span class="quotelev1">&gt; -    mxm_req_base_t *mxm_base_request;
</span><br>
<span class="quotelev1">&gt; +    union {
</span><br>
<span class="quotelev1">&gt; +    	mxm_req_base_t base;
</span><br>
<span class="quotelev1">&gt; +    	mxm_send_req_t send;
</span><br>
<span class="quotelev1">&gt; +    	mxm_recv_req_t recv;
</span><br>
<span class="quotelev1">&gt; +    } mxm;
</span><br>
<span class="quotelev1">&gt;     /* mxm_segment_t mxm_segment[1]; */
</span><br>
<span class="quotelev1">&gt;     void *buf;
</span><br>
<span class="quotelev1">&gt;     size_t length;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c	2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev1">&gt;         free(mtl_mxm_request-&gt;buf);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(mtl_mxm_request-&gt;mxm_base_request-&gt;error);
</span><br>
<span class="quotelev1">&gt; +    mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(mtl_mxm_request-&gt;mxm.base.error);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mxm_send_req = (mxm_send_req_t *) mtl_mxm_request-&gt;mxm_base_request;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req = &amp;mtl_mxm_request-&gt;mxm.send;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* prepare a send request embedded in the MTL request */
</span><br>
<span class="quotelev1">&gt;     mxm_send_req-&gt;base.state        		= MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9620.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>Previous message:</strong> <a href="9618.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9633.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<li><strong>Reply:</strong> <a href="9633.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
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
