<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 11:32:44 2007" -->
<!-- isoreceived="20070816153244" -->
<!-- sent="Thu, 16 Aug 2007 11:32:37 -0400" -->
<!-- isosent="20070816153237" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="CF2B1445-2262-49E1-98A3-BFA9E512A070_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708161402.l7GE2ZVP021899_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 11:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Was there a real reason for this commit ? Was the previous code  
<br>
broken ? It's not that I have anything against the fact that they all  
<br>
have different RML tags, but I do have something against this snippet:
<br>
<p>+#define ORTE_RML_TAG_UDAPL                  25
<br>
+#define ORTE_RML_TAG_OPENIB                 26
<br>
+#define ORTE_RML_TAG_MVAPI                  27
<br>
<p>I think that UDAPL, OPENIB, MVAPI should not appear anywhere in the  
<br>
ORTE layer ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2007, at 10:02 AM, tprins_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: tprins
</span><br>
<span class="quotelev1">&gt; Date: 2007-08-16 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15881
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15881">https://svn.open-mpi.org/trac/ompi/changeset/15881</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Change it so that different components in orte use unique rml tags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/communicator/comm_cid.c                         |      
</span><br>
<span class="quotelev1">&gt; 8 ++++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c              |      
</span><br>
<span class="quotelev1">&gt; 4 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c |      
</span><br>
<span class="quotelev1">&gt; 8 +++-----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c              |      
</span><br>
<span class="quotelev1">&gt; 4 ++--
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/rml/rml_types.h                             |      
</span><br>
<span class="quotelev1">&gt; 6 ++++++
</span><br>
<span class="quotelev1">&gt;    5 files changed, 17 insertions(+), 13 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/communicator/comm_cid.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/communicator/comm_cid.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/communicator/comm_cid.c	2007-08-16 10:02:35 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -758,12 +758,12 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if ( send_first ) {
</span><br>
<span class="quotelev1">&gt; -            rc = orte_rml.send_buffer(remote_leader, sbuf, 0, 0);
</span><br>
<span class="quotelev1">&gt; -            rc = orte_rml.recv_buffer(remote_leader, rbuf, 0, 0);
</span><br>
<span class="quotelev1">&gt; +            rc = orte_rml.send_buffer(remote_leader, sbuf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev1">&gt; +            rc = orte_rml.recv_buffer(remote_leader, rbuf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          else {
</span><br>
<span class="quotelev1">&gt; -            rc = orte_rml.recv_buffer(remote_leader, rbuf, 0, 0);
</span><br>
<span class="quotelev1">&gt; -            rc = orte_rml.send_buffer(remote_leader, sbuf, 0, 0);
</span><br>
<span class="quotelev1">&gt; +            rc = orte_rml.recv_buffer(remote_leader, rbuf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev1">&gt; +            rc = orte_rml.send_buffer(remote_leader, sbuf,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if (ORTE_SUCCESS != (rc = orte_dss.unpack(rbuf, outbuf,  
</span><br>
<span class="quotelev1">&gt; &amp;size_count, ORTE_INT))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	2007-08-16  
</span><br>
<span class="quotelev1">&gt; 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -322,7 +322,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* send to endpoint */
</span><br>
<span class="quotelev1">&gt; -    rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_guid, buffer, ORTE_RML_TAG_DYNAMIC-1, 0,
</span><br>
<span class="quotelev1">&gt; +    rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_guid, buffer, ORTE_RML_TAG_MVAPI, 0,
</span><br>
<span class="quotelev1">&gt;           mca_btl_mvapi_endpoint_send_cb, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -694,7 +694,7 @@
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      orte_rml.recv_buffer_nb(
</span><br>
<span class="quotelev1">&gt;          ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -        ORTE_RML_TAG_DYNAMIC-1,
</span><br>
<span class="quotelev1">&gt; +        ORTE_RML_TAG_MVAPI,
</span><br>
<span class="quotelev1">&gt;          ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt;          mca_btl_mvapi_endpoint_recv,
</span><br>
<span class="quotelev1">&gt;          NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	 
</span><br>
<span class="quotelev1">&gt; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	 
</span><br>
<span class="quotelev1">&gt; 2007-08-16 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -39,8 +39,6 @@
</span><br>
<span class="quotelev1">&gt;      ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev1">&gt;  } connect_message_type_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define OOB_TAG (ORTE_RML_TAG_DYNAMIC - 1)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  static int oob_init(void);
</span><br>
<span class="quotelev1">&gt;  static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev1">&gt;  static int oob_finalize(void);
</span><br>
<span class="quotelev1">&gt; @@ -87,7 +85,7 @@
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                 OOB_TAG,
</span><br>
<span class="quotelev1">&gt; +                                 ORTE_RML_TAG_OPENIB,
</span><br>
<span class="quotelev1">&gt;                                   ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt;                                   rml_recv_cb,
</span><br>
<span class="quotelev1">&gt;                                   NULL);
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +122,7 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  static int oob_finalize(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, OOB_TAG);
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_OPENIB);
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -465,7 +463,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* send to remote endpoint */
</span><br>
<span class="quotelev1">&gt;      rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc-&gt;proc_guid,
</span><br>
<span class="quotelev1">&gt; -                                 buffer, OOB_TAG, 0,
</span><br>
<span class="quotelev1">&gt; +                                 buffer, ORTE_RML_TAG_OPENIB, 0,
</span><br>
<span class="quotelev1">&gt;                                   rml_send_cb, NULL);
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c	2007-08-16  
</span><br>
<span class="quotelev1">&gt; 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -491,7 +491,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Send the buffer */
</span><br>
<span class="quotelev1">&gt;      rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc- 
</span><br>
<span class="quotelev2">&gt; &gt;proc_guid, buf,
</span><br>
<span class="quotelev1">&gt; -            ORTE_RML_TAG_DYNAMIC - 1, 0,  
</span><br>
<span class="quotelev1">&gt; mca_btl_udapl_endpoint_send_cb, NULL);
</span><br>
<span class="quotelev1">&gt; +            ORTE_RML_TAG_UDAPL, 0, mca_btl_udapl_endpoint_send_cb,  
</span><br>
<span class="quotelev1">&gt; NULL);
</span><br>
<span class="quotelev1">&gt;      if(0 &gt; rc) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt; @@ -558,7 +558,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  void mca_btl_udapl_endpoint_post_oob_recv(void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,  
</span><br>
<span class="quotelev1">&gt; ORTE_RML_TAG_DYNAMIC-1,
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_UDAPL,
</span><br>
<span class="quotelev1">&gt;              ORTE_RML_PERSISTENT, mca_btl_udapl_endpoint_recv, NULL);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rml/rml_types.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rml/rml_types.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rml/rml_types.h	2007-08-16 10:02:35 EDT (Thu, 16  
</span><br>
<span class="quotelev1">&gt; Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -80,6 +80,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define ORTE_RML_TAG_RML_ROUTE              24
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_UDAPL                  25
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_OPENIB                 26
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_MVAPI                  27
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_COMM_CID_INTRA         28
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /* For CRCP Coord Component */
</span><br>
<span class="quotelev1">&gt;  #define OMPI_CRCP_COORD_BOOKMARK_TAG      4242
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2159.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
