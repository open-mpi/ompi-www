<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 10:49:35 2011" -->
<!-- isoreceived="20110802144935" -->
<!-- sent="Tue, 2 Aug 2011 10:49:24 -0400" -->
<!-- isosent="20110802144924" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977" -->
<!-- id="C6C03830-5286-4FD2-A122-56F192EB948D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108021430.p72EUDhK023494_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 10:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Te question that needs to be answered in the readme is: when should one se openib/ob1 vs. Mxm?  Users will need to know thus. 
<br>
<p>Also see the part in the readme about te different PMLs - u might want to write more there. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Aug 2, 2011, at 10:30 AM, &quot;miked_at_[hidden]&quot; &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24977
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24977">https://svn.open-mpi.org/trac/ompi/changeset/24977</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; code and readme  updates, some refactoring
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/NEWS                               |     1                                         
</span><br>
<span class="quotelev1">&gt;   trunk/README                             |     5 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c  |     4 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_probe.c   |    16 ++++----                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c    |    54 ++++++++++++++--------------            
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c    |    77 ++++++++++++++++----------------------- 
</span><br>
<span class="quotelev1">&gt;   7 files changed, 74 insertions(+), 85 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/NEWS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/NEWS    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/NEWS    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -62,6 +62,7 @@
</span><br>
<span class="quotelev1">&gt;   OPAL levels - intended for use when configuring without MPI support
</span><br>
<span class="quotelev1">&gt; - Modified paffinity system to provide warning when bindings result in
</span><br>
<span class="quotelev1">&gt;   being &quot;bound to all&quot;, which is equivalent to &quot;not bound&quot;
</span><br>
<span class="quotelev1">&gt; +- Added Mellanox MTL layer implementation (mxm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/README
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/README    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/README    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -509,6 +509,9 @@
</span><br>
<span class="quotelev1">&gt;     or
</span><br>
<span class="quotelev1">&gt;     shell$ mpirun --mca pml cm ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +- MXM MTL is an transport layer utilizing various Mellanox proprietary
</span><br>
<span class="quotelev1">&gt; +  technologies and providing better scalability and performance for large scale jobs
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; - Myrinet MX (and Open-MX) support is shared between the 2 internal
</span><br>
<span class="quotelev1">&gt;   devices, the MTL and the BTL.  The design of the BTL interface in
</span><br>
<span class="quotelev1">&gt;   Open MPI assumes that only naive one-sided communication
</span><br>
<span class="quotelev1">&gt; @@ -707,7 +710,7 @@
</span><br>
<span class="quotelev1">&gt; --with-mxm=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt;   Specify the directory where the Mellanox MXM library and
</span><br>
<span class="quotelev1">&gt;   header files are located.  This option is generally only necessary
</span><br>
<span class="quotelev1">&gt; -  if the InfiniPath headers and libraries are not in default
</span><br>
<span class="quotelev1">&gt; +  if the MXM headers and libraries are not in default
</span><br>
<span class="quotelev1">&gt;   compiler/linker search paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MXM is the support library for Mellanox network adapters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_cancel.c    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -18,9 +18,9 @@
</span><br>
<span class="quotelev1">&gt;     mxm_error_t err;
</span><br>
<span class="quotelev1">&gt;     mca_mtl_mxm_request_t *mtl_mxm_request = (mca_mtl_mxm_request_t*) mtl_request;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    err = mxm_req_cancel(&amp;mtl_mxm_request-&gt;mxm_request);
</span><br>
<span class="quotelev1">&gt; +    err = mxm_req_cancel(mtl_mxm_request-&gt;mxm_base_request);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK == err) {
</span><br>
<span class="quotelev1">&gt; -        err = mxm_req_test(&amp;mtl_mxm_request-&gt;mxm_request);
</span><br>
<span class="quotelev1">&gt; +        err = mxm_req_test(mtl_mxm_request-&gt;mxm_base_request);
</span><br>
<span class="quotelev1">&gt;         if (MXM_OK == err) {
</span><br>
<span class="quotelev1">&gt;             mtl_request-&gt;ompi_req-&gt;req_status._cancelled = true;
</span><br>
<span class="quotelev1">&gt;             mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_probe.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_probe.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_probe.c    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -18,21 +18,21 @@
</span><br>
<span class="quotelev1">&gt;                         int *flag, struct ompi_status_public_t *status)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mxm_error_t err;
</span><br>
<span class="quotelev1">&gt; -    mxm_req_t req;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req_t req;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    req.state      = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; -    req.mq         = (mxm_mq_h)comm-&gt;c_pml_comm;
</span><br>
<span class="quotelev1">&gt; -    req.tag        = tag;
</span><br>
<span class="quotelev1">&gt; -    req.tag_mask   = (tag == MPI_ANY_TAG) ? 0 : 0xffffffffU;
</span><br>
<span class="quotelev1">&gt; -    req.conn       = (src == MPI_ANY_SOURCE) ? NULL : ompi_mtl_mxm_conn_lookup(comm, src);
</span><br>
<span class="quotelev1">&gt; +    req.base.state      = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; +    req.base.mq         = (mxm_mq_h)comm-&gt;c_pml_comm;
</span><br>
<span class="quotelev1">&gt; +    req.tag                = tag;
</span><br>
<span class="quotelev1">&gt; +    req.tag_mask           = (tag == MPI_ANY_TAG) ? 0 : 0xffffffffU;
</span><br>
<span class="quotelev1">&gt; +    req.base.conn       = (src == MPI_ANY_SOURCE) ? NULL : ompi_mtl_mxm_conn_lookup(comm, src);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     err = mxm_req_probe(&amp;req);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK == err) {
</span><br>
<span class="quotelev1">&gt;         *flag = 1;
</span><br>
<span class="quotelev1">&gt;         if (MPI_STATUS_IGNORE != status) {
</span><br>
<span class="quotelev1">&gt; -            status-&gt;MPI_SOURCE = *(int *)mxm_conn_get_context(req.conn);
</span><br>
<span class="quotelev1">&gt; +            status-&gt;MPI_SOURCE = *(int *)mxm_conn_get_context(req.base.conn);
</span><br>
<span class="quotelev1">&gt;             status-&gt;MPI_TAG    = req.completion.sender_tag;
</span><br>
<span class="quotelev1">&gt; -            status-&gt;MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(req.completion.status);
</span><br>
<span class="quotelev1">&gt; +            status-&gt;MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(err);
</span><br>
<span class="quotelev1">&gt;             status-&gt;_ucount    = req.completion.actual_len;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_recv.c    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -18,26 +18,27 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;mtl_mxm_request.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -static void ompi_mtl_mxm_recv_completion_cb(mxm_req_t *req)
</span><br>
<span class="quotelev1">&gt; +static void ompi_mtl_mxm_recv_completion_cb(void *context)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    mca_mtl_mxm_request_t *mtl_mxm_request = (mca_mtl_mxm_request_t *) req-&gt;context;
</span><br>
<span class="quotelev1">&gt; -    struct ompi_request_t *ompi_req = mtl_mxm_request-&gt;super.ompi_req;
</span><br>
<span class="quotelev1">&gt; +    mca_mtl_mxm_request_t *req = (mca_mtl_mxm_request_t *) context;
</span><br>
<span class="quotelev1">&gt; +    struct ompi_request_t *ompi_req = req-&gt;super.ompi_req;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req_t *mxm_recv_req = (mxm_recv_req_t *)req-&gt;mxm_base_request;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Set completion status and envelope */
</span><br>
<span class="quotelev1">&gt; -    ompi_req-&gt;req_status.MPI_TAG    = req-&gt;completion.sender_tag;
</span><br>
<span class="quotelev1">&gt; -    ompi_req-&gt;req_status.MPI_SOURCE = req-&gt;completion.sender_imm;
</span><br>
<span class="quotelev1">&gt; -    ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(req-&gt;completion.status);
</span><br>
<span class="quotelev1">&gt; -    ompi_req-&gt;req_status._ucount    = req-&gt;completion.actual_len;
</span><br>
<span class="quotelev1">&gt; +    ompi_req-&gt;req_status.MPI_TAG    = mxm_recv_req-&gt;completion.sender_tag;
</span><br>
<span class="quotelev1">&gt; +    ompi_req-&gt;req_status.MPI_SOURCE = mxm_recv_req-&gt;completion.sender_imm;
</span><br>
<span class="quotelev1">&gt; +    ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(req-&gt;mxm_base_request-&gt;error);
</span><br>
<span class="quotelev1">&gt; +    ompi_req-&gt;req_status._ucount    = mxm_recv_req-&gt;completion.actual_len;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Copy data */
</span><br>
<span class="quotelev1">&gt; -    ompi_mtl_datatype_unpack(mtl_mxm_request-&gt;convertor, mtl_mxm_request-&gt;buf,
</span><br>
<span class="quotelev1">&gt; -                             req-&gt;completion.actual_len);
</span><br>
<span class="quotelev1">&gt; +    ompi_mtl_datatype_unpack(req-&gt;convertor, req-&gt;buf,
</span><br>
<span class="quotelev1">&gt; +                             mxm_recv_req-&gt;completion.actual_len);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (mtl_mxm_request-&gt;free_after) {
</span><br>
<span class="quotelev1">&gt; -        free(mtl_mxm_request-&gt;buf);
</span><br>
<span class="quotelev1">&gt; +    if (req-&gt;free_after) {
</span><br>
<span class="quotelev1">&gt; +        free(req-&gt;buf);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev1">&gt; +    req-&gt;super.completion_callback(&amp;req-&gt;super);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -47,9 +48,8 @@
</span><br>
<span class="quotelev1">&gt;                        struct mca_mtl_request_t *mtl_request)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_mtl_mxm_request_t * mtl_mxm_request;
</span><br>
<span class="quotelev1">&gt; -    mca_mtl_mxm_endpoint_t* mxm_endpoint;
</span><br>
<span class="quotelev1">&gt; -    ompi_proc_t* ompi_proc;
</span><br>
<span class="quotelev1">&gt;     mxm_error_t err;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req_t *mxm_recv_req;
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_request = (mca_mtl_mxm_request_t*) mtl_request;
</span><br>
<span class="quotelev1">&gt; @@ -63,22 +63,22 @@
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req = (mxm_recv_req_t *)mtl_mxm_request-&gt;mxm_base_request;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* prepare a receive request embedded in the MTL request */
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.state     = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.mq        = (mxm_mq_h)comm-&gt;c_pml_comm;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.tag       = tag;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.tag_mask  = (tag == MPI_ANY_TAG) ? 0 : 0xffffffffU;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.conn      = (src == MPI_ANY_SOURCE) ? NULL :
</span><br>
<span class="quotelev1">&gt; -                                               ompi_mtl_mxm_conn_lookup(comm, src);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.data.buf.ptr = mtl_mxm_request-&gt;buf;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.data.buf.len = mtl_mxm_request-&gt;length;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.completed_cb = ompi_mtl_mxm_recv_completion_cb;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.context      = mtl_mxm_request;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.flags        = MXM_REQ_FLAG_NONBLOCK;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.state    = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.mq       = (mxm_mq_h)comm-&gt;c_pml_comm;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;tag              = tag;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;tag_mask      = (tag == MPI_ANY_TAG) ? 0 : 0xffffffffU;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.conn     = (src == MPI_ANY_SOURCE) ? NULL : ompi_mtl_mxm_conn_lookup(comm, src);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.data.buffer.ptr        = mtl_mxm_request-&gt;buf;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.data.buffer.length    = mtl_mxm_request-&gt;length;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.completed_cb        = ompi_mtl_mxm_recv_completion_cb;
</span><br>
<span class="quotelev1">&gt; +    mxm_recv_req-&gt;base.context                = mtl_mxm_request;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* post-recv */
</span><br>
<span class="quotelev1">&gt; -    err = mxm_req_recv(&amp;mtl_mxm_request-&gt;mxm_request);
</span><br>
<span class="quotelev1">&gt; +    err = mxm_req_recv(mxm_recv_req);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt;         orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;error posting receive&quot;, true,
</span><br>
<span class="quotelev1">&gt;                        mxm_error_string(err), mtl_mxm_request-&gt;buf, mtl_mxm_request-&gt;length);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_request.h    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct mca_mtl_mxm_request_t {
</span><br>
<span class="quotelev1">&gt;     struct mca_mtl_request_t super;
</span><br>
<span class="quotelev1">&gt; -    mxm_req_t mxm_request;
</span><br>
<span class="quotelev1">&gt; +    mxm_req_base_t *mxm_base_request;
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
<span class="quotelev1">&gt; --- trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/mtl/mxm/mtl_mxm_send.c    2011-08-02 10:30:11 EDT (Tue, 02 Aug 2011)
</span><br>
<span class="quotelev1">&gt; @@ -17,30 +17,15 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/mtl/base/mtl_base_datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -static void ompi_mtl_mxm_send_completion_cb(mxm_req_t *req)
</span><br>
<span class="quotelev1">&gt; +static void ompi_mtl_mxm_send_completion_cb(void *context)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    mca_mtl_mxm_request_t *mtl_mxm_request;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request = (mca_mtl_mxm_request_t *) req-&gt;context;
</span><br>
<span class="quotelev1">&gt; +    mca_mtl_mxm_request_t *mtl_mxm_request = context;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (mtl_mxm_request-&gt;free_after) {
</span><br>
<span class="quotelev1">&gt;         free(mtl_mxm_request-&gt;buf);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    switch (req-&gt;completion.status) {
</span><br>
<span class="quotelev1">&gt; -    case MXM_OK:
</span><br>
<span class="quotelev1">&gt; -        mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR
</span><br>
<span class="quotelev1">&gt; -                = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -        break;
</span><br>
<span class="quotelev1">&gt; -    case MXM_ERR_MESSAGE_TRUNCATED:
</span><br>
<span class="quotelev1">&gt; -        mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR
</span><br>
<span class="quotelev1">&gt; -                = MPI_ERR_TRUNCATE;
</span><br>
<span class="quotelev1">&gt; -        break;
</span><br>
<span class="quotelev1">&gt; -    default:
</span><br>
<span class="quotelev1">&gt; -        mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR
</span><br>
<span class="quotelev1">&gt; -                = MPI_ERR_INTERN;
</span><br>
<span class="quotelev1">&gt; -        break;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    mtl_mxm_request-&gt;super.ompi_req-&gt;req_status.MPI_ERROR  = ompi_mtl_mxm_to_mpi_status(mtl_mxm_request-&gt;mxm_base_request-&gt;error);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_request-&gt;super.completion_callback(&amp;mtl_mxm_request-&gt;super);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -50,41 +35,38 @@
</span><br>
<span class="quotelev1">&gt;                       struct opal_convertor_t *convertor,
</span><br>
<span class="quotelev1">&gt;                       mca_pml_base_send_mode_t mode)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    mxm_req_t mxm_req;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req_t mxm_send_req;
</span><br>
<span class="quotelev1">&gt;     bool free_after;
</span><br>
<span class="quotelev1">&gt;     mxm_error_t err;
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* prepare local send request */
</span><br>
<span class="quotelev1">&gt; -    mxm_req.state          = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; -    mxm_req.mq             = ompi_mtl_mxm_mq_lookup(comm);
</span><br>
<span class="quotelev1">&gt; -    mxm_req.conn           = ompi_mtl_mxm_conn_lookup(comm, dest);
</span><br>
<span class="quotelev1">&gt; -    mxm_req.tag            = tag;
</span><br>
<span class="quotelev1">&gt; -    mxm_req.imm_data       = ompi_comm_rank(comm);
</span><br>
<span class="quotelev1">&gt; -    mxm_req.completed_cb   = NULL;
</span><br>
<span class="quotelev1">&gt; -    mxm_req.flags          = 0;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.base.state            = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.base.mq               = ompi_mtl_mxm_mq_lookup(comm);
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.base.conn             = ompi_mtl_mxm_conn_lookup(comm, dest);
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.op.send.tag        = tag;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.op.send.imm_data   = ompi_comm_rank(comm);
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.base.completed_cb  = NULL;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req.base.flags         = MXM_REQ_FLAG_WAIT;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if (mode == MCA_PML_BASE_SEND_SYNCHRONOUS) {
</span><br>
<span class="quotelev1">&gt; -        mxm_req.flags |= MXM_REQ_FLAG_SEND_SYNC;
</span><br>
<span class="quotelev1">&gt; +        mxm_send_req.base.flags |= MXM_REQ_FLAG_SEND_SYNC;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    ret = ompi_mtl_datatype_pack(convertor, &amp;mxm_req.data.buf.ptr, &amp;mxm_req.data.buf.len,
</span><br>
<span class="quotelev1">&gt; +    ret = ompi_mtl_datatype_pack(convertor, &amp;mxm_send_req.base.data.buffer.ptr, &amp;mxm_send_req.base.data.buffer.length,
</span><br>
<span class="quotelev1">&gt;                                  &amp;free_after);
</span><br>
<span class="quotelev1">&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* post-send */
</span><br>
<span class="quotelev1">&gt; -    err = mxm_req_send(&amp;mxm_req);
</span><br>
<span class="quotelev1">&gt; +    err = mxm_req_send(&amp;mxm_send_req);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt;         orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;error posting send&quot;, true, 0, mxm_error_string(err));
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* wait for request completion */
</span><br>
<span class="quotelev1">&gt; -    err = mxm_req_wait(&amp;mxm_req);
</span><br>
<span class="quotelev1">&gt; -    if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt; -        orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;error while waiting in send&quot;, true, mxm_error_string(err));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    mxm_req_wait(&amp;mxm_send_req.base);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; @@ -96,6 +78,7 @@
</span><br>
<span class="quotelev1">&gt;                        mca_mtl_request_t * mtl_request)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mca_mtl_mxm_request_t *mtl_mxm_request = (mca_mtl_mxm_request_t *)mtl_request;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req_t *mxm_send_req;
</span><br>
<span class="quotelev1">&gt;     mxm_error_t err;
</span><br>
<span class="quotelev1">&gt;     int ret;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -110,23 +93,25 @@
</span><br>
<span class="quotelev1">&gt;         return ret;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req = (mxm_send_req_t *) mtl_mxm_request-&gt;mxm_base_request;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* prepare a send request embedded in the MTL request */
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.state        = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.mq           = ompi_mtl_mxm_mq_lookup(comm);
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.conn         = ompi_mtl_mxm_conn_lookup(comm, dest);
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.tag          = tag;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.imm_data     = ompi_comm_rank(comm);
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.data.buf.ptr = mtl_mxm_request-&gt;buf;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.data.buf.len = mtl_mxm_request-&gt;length;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.completed_cb = ompi_mtl_mxm_send_completion_cb;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.context      = mtl_mxm_request;
</span><br>
<span class="quotelev1">&gt; -    mtl_mxm_request-&gt;mxm_request.flags        = MXM_REQ_FLAG_NONBLOCK;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.state                = MXM_REQ_NEW;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.mq                   = ompi_mtl_mxm_mq_lookup(comm);
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.conn                 = ompi_mtl_mxm_conn_lookup(comm, dest);
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;op.send.tag                  = tag;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;op.send.imm_data             = ompi_comm_rank(comm);
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.data.buffer.ptr        = mtl_mxm_request-&gt;buf;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.data.buffer.length    = mtl_mxm_request-&gt;length;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.completed_cb        = ompi_mtl_mxm_send_completion_cb;
</span><br>
<span class="quotelev1">&gt; +    mxm_send_req-&gt;base.context              = mtl_mxm_request;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if (mode == MCA_PML_BASE_SEND_SYNCHRONOUS) {
</span><br>
<span class="quotelev1">&gt; -        mtl_mxm_request-&gt;mxm_request.flags |= MXM_REQ_FLAG_SEND_SYNC;
</span><br>
<span class="quotelev1">&gt; +        mxm_send_req-&gt;base.flags |= MXM_REQ_FLAG_SEND_SYNC;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* post-send */
</span><br>
<span class="quotelev1">&gt; -    err = mxm_req_send(&amp;mtl_mxm_request-&gt;mxm_request);
</span><br>
<span class="quotelev1">&gt; +    err = mxm_req_send(mxm_send_req);
</span><br>
<span class="quotelev1">&gt;     if (MXM_OK != err) {
</span><br>
<span class="quotelev1">&gt;         orte_show_help(&quot;help-mtl-mxm.txt&quot;, &quot;error posting send&quot;, true, 1, mxm_error_string(err));
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
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
