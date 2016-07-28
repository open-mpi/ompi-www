<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 03:12:08 2011" -->
<!-- isoreceived="20110809071208" -->
<!-- sent="Tue, 9 Aug 2011 10:11:44 +0300" -->
<!-- isosent="20110809071144" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005" -->
<!-- id="CAL3GGtqiAPSdbG1DCM=Bor5-7hyjxZu3RD5Fjx4Xr6ZbbPHTTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2299689-020B-4CCE-B7E3-9D1ECE38565A_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 03:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for comment.
<br>
fixed it.
<br>
<p>On Mon, Aug 8, 2011 at 6:28 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does mxm_init() do Reasonable Things to check to see if the local
</span><br>
<span class="quotelev1">&gt; OpenFabrics-capable devices are unsuitable for MXM?  E.g., does it check to
</span><br>
<span class="quotelev1">&gt; see if the local OpenFabrics devices are MXM-capable, and if not, fail
</span><br>
<span class="quotelev1">&gt; gracefully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I would suggest NOT showing a show_help message if there are OF
</span><br>
<span class="quotelev1">&gt; devices available such that CM/MXM can (probably) fail over to OB1/openib.
</span><br>
<span class="quotelev1">&gt;  I.e., only show a show_help message if devices are available for MXM, but
</span><br>
<span class="quotelev1">&gt; an actual error occurs during the MXM initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, if I mpirun (with the MXM MTL installed) on a system with only
</span><br>
<span class="quotelev1">&gt; RoCE or iWARP devices present, MXM will complain but then fail over to
</span><br>
<span class="quotelev1">&gt; OB1/openib.  That would probably be confusing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 7, 2011, at 8:06 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2011-08-07 08:06:49 EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 25005
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25005">https://svn.open-mpi.org/trac/ompi/changeset/25005</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; better mxm selection mechanism, some refactoring
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c    |     4 ++--
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c |    32
</span><br>
<span class="quotelev1">&gt; ++++++++++++++------------------
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c      |     6 +++---
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h   |     6 +++++-
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c      |     4 ++--
</span><br>
<span class="quotelev2">&gt; &gt;   5 files changed, 26 insertions(+), 26 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c   (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c   2011-08-07 08:06:49 EDT
</span><br>
<span class="quotelev1">&gt; (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -18,9 +18,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;     mxm_error_t err;
</span><br>
<span class="quotelev2">&gt; &gt;     mca_mtl_mxm_request_t *mtl_mxm_request = (mca_mtl_mxm_request_t*)
</span><br>
<span class="quotelev1">&gt; mtl_request;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    err = mxm_req_cancel(mtl_mxm_request-&gt;mxm_base_request);
</span><br>
<span class="quotelev2">&gt; &gt; +    err = mxm_req_cancel(&amp;mtl_mxm_request-&gt;mxm.base);
</span><br>
<span class="quotelev2">&gt; &gt;     if (MXM_OK == err) {
</span><br>
<span class="quotelev2">&gt; &gt; -        err = mxm_req_test(mtl_mxm_request-&gt;mxm_base_request);
</span><br>
<span class="quotelev2">&gt; &gt; +        err = mxm_req_test(&amp;mtl_mxm_request-&gt;mxm.base);
</span><br>
<span class="quotelev2">&gt; &gt;         if (MXM_OK == err) {
</span><br>
<span class="quotelev2">&gt; &gt;             mtl_request-&gt;ompi_req-&gt;req_status._cancelled = true;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_component.c        2011-08-07 08:06:49
</span><br>
<span class="quotelev1">&gt; EDT (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -72,18 +72,27 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int ompi_mtl_mxm_component_open(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    struct stat st;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    /* Component available only if IB hardware is present */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (0 == stat(&quot;/dev/infiniband/uverbs0&quot;, &amp;st)) {
</span><br>
<span class="quotelev2">&gt; &gt; -        return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -    } else {
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_context_opts_t mxm_opts;
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_error_t err;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev2">&gt; &gt; +    opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_fill_context_opts(&amp;mxm_opts);
</span><br>
<span class="quotelev2">&gt; &gt; +    err = mxm_init(&amp;mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev2">&gt; &gt; +    if (MXM_OK != err) {
</span><br>
<span class="quotelev2">&gt; &gt; +        orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;mxm init&quot;, true,
</span><br>
<span class="quotelev2">&gt; &gt; +                       mxm_error_string(err));
</span><br>
<span class="quotelev2">&gt; &gt;         return OPAL_ERR_NOT_AVAILABLE;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static int ompi_mtl_mxm_component_close(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_cleanup(ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_mtl_mxm.mxm_context = NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -91,21 +100,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; ompi_mtl_mxm_component_init(bool enable_progress_threads,
</span><br>
<span class="quotelev2">&gt; &gt;                             bool enable_mpi_threads)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_context_opts_t mxm_opts;
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_error_t err;
</span><br>
<span class="quotelev2">&gt; &gt;     int rc;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    mca_mtl_mxm_output = opal_output_open(NULL);
</span><br>
<span class="quotelev2">&gt; &gt; -    opal_output_set_verbosity(mca_mtl_mxm_output, ompi_mtl_mxm.verbose);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_fill_context_opts(&amp;mxm_opts);
</span><br>
<span class="quotelev2">&gt; &gt; -    err = mxm_init(&amp;mxm_opts, &amp;ompi_mtl_mxm.mxm_context);
</span><br>
<span class="quotelev2">&gt; &gt; -    if (MXM_OK != err) {
</span><br>
<span class="quotelev2">&gt; &gt; -        orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;mxm init&quot;, true,
</span><br>
<span class="quotelev2">&gt; &gt; -                       mxm_error_string(err));
</span><br>
<span class="quotelev2">&gt; &gt; -        return NULL;
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;     rc = ompi_mtl_mxm_module_init();
</span><br>
<span class="quotelev2">&gt; &gt;     if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt; &gt;       return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c     (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c     2011-08-07 08:06:49 EDT
</span><br>
<span class="quotelev1">&gt; (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -22,12 +22,12 @@
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;       mca_mtl_mxm_request_t *req = (mca_mtl_mxm_request_t *) context;
</span><br>
<span class="quotelev2">&gt; &gt;     struct ompi_request_t *ompi_req = req-&gt;super.ompi_req;
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_recv_req_t *mxm_recv_req = (mxm_recv_req_t
</span><br>
<span class="quotelev1">&gt; *)req-&gt;mxm_base_request;
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_recv_req_t *mxm_recv_req = &amp;req-&gt;mxm.recv;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Set completion status and envelope */
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_req-&gt;req_status.MPI_TAG    =
</span><br>
<span class="quotelev1">&gt; mxm_recv_req-&gt;completion.sender_tag;
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_req-&gt;req_status.MPI_SOURCE =
</span><br>
<span class="quotelev1">&gt; mxm_recv_req-&gt;completion.sender_imm;
</span><br>
<span class="quotelev2">&gt; &gt; -    ompi_req-&gt;req_status.MPI_ERROR  =
</span><br>
<span class="quotelev1">&gt; ompi_mtl_mxm_to_mpi_status(req-&gt;mxm_base_request-&gt;error);
</span><br>
<span class="quotelev2">&gt; &gt; +    ompi_req-&gt;req_status.MPI_ERROR  =
</span><br>
<span class="quotelev1">&gt; ompi_mtl_mxm_to_mpi_status(mxm_recv_req-&gt;base.error);
</span><br>
<span class="quotelev2">&gt; &gt;     ompi_req-&gt;req_status._ucount    =
</span><br>
<span class="quotelev1">&gt; mxm_recv_req-&gt;completion.actual_len;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* Copy data */
</span><br>
<span class="quotelev2">&gt; &gt; @@ -63,7 +63,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         return ret;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_recv_req = (mxm_recv_req_t *)mtl_mxm_request-&gt;mxm_base_request;
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_recv_req = &amp;mtl_mxm_request-&gt;mxm.recv;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* prepare a receive request embedded in the MTL request */
</span><br>
<span class="quotelev2">&gt; &gt;     mxm_recv_req-&gt;base.state    = MXM_REQ_NEW;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h  (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h  2011-08-07 08:06:49 EDT
</span><br>
<span class="quotelev1">&gt; (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -16,7 +16,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; struct mca_mtl_mxm_request_t {
</span><br>
<span class="quotelev2">&gt; &gt;     struct mca_mtl_request_t super;
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_req_base_t *mxm_base_request;
</span><br>
<span class="quotelev2">&gt; &gt; +    union {
</span><br>
<span class="quotelev2">&gt; &gt; +     mxm_req_base_t base;
</span><br>
<span class="quotelev2">&gt; &gt; +     mxm_send_req_t send;
</span><br>
<span class="quotelev2">&gt; &gt; +     mxm_recv_req_t recv;
</span><br>
<span class="quotelev2">&gt; &gt; +    } mxm;
</span><br>
<span class="quotelev2">&gt; &gt;     /* mxm_segment_t mxm_segment[1]; */
</span><br>
<span class="quotelev2">&gt; &gt;     void *buf;
</span><br>
<span class="quotelev2">&gt; &gt;     size_t length;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c     (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c     2011-08-07 08:06:49 EDT
</span><br>
<span class="quotelev1">&gt; (Sun, 07 Aug 2011)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -25,7 +25,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         free(mtl_mxm_request-&gt;buf);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR  =
</span><br>
<span class="quotelev1">&gt; ompi_mtl_mxm_to_mpi_status(mtl_mxm_request-&gt;mxm_base_request-&gt;error);
</span><br>
<span class="quotelev2">&gt; &gt; +    mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR  =
</span><br>
<span class="quotelev1">&gt; ompi_mtl_mxm_to_mpi_status(mtl_mxm_request-&gt;mxm.base.error);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;         return ret;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -    mxm_send_req = (mxm_send_req_t *) mtl_mxm_request-&gt;mxm_base_request;
</span><br>
<span class="quotelev2">&gt; &gt; +    mxm_send_req = &amp;mtl_mxm_request-&gt;mxm.send;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* prepare a send request embedded in the MTL request */
</span><br>
<span class="quotelev2">&gt; &gt;     mxm_send_req-&gt;base.state                  = MXM_REQ_NEW;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9634.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<li><strong>Previous message:</strong> <a href="9632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25015"</a>
<li><strong>In reply to:</strong> <a href="9619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25005"</a>
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
