<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 11:48:03 2007" -->
<!-- isoreceived="20070816154803" -->
<!-- sent="Thu, 16 Aug 2007 11:48:06 -0400" -->
<!-- isosent="20070816154806" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="46C471B6.2070100_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CF2B1445-2262-49E1-98A3-BFA9E512A070_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 11:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2160.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2157.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2163.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2163.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Was there a real reason for this commit ? Was the previous code  
</span><br>
<span class="quotelev1">&gt; broken ?
</span><br>
I'm not aware of it ever breaking for anyone. However, it is a potential 
<br>
problem if the right combination of networks are used, since multiple 
<br>
btls are listening on the same tag.
<br>
<p><span class="quotelev1">&gt; It's not that I have anything against the fact that they all  
</span><br>
<span class="quotelev1">&gt; have different RML tags, but I do have something against this snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_UDAPL                  25
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_OPENIB                 26
</span><br>
<span class="quotelev1">&gt; +#define ORTE_RML_TAG_MVAPI                  27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that UDAPL, OPENIB, MVAPI should not appear anywhere in the  
</span><br>
<span class="quotelev1">&gt; ORTE layer ...
</span><br>
I tend to agree with you. However, the precedent has been set long ago 
<br>
to put all these constants in this file (i.e. there is 
<br>
ORTE_RML_TAG_WIREUP and ORTE_RML_TAG_SM_BACK_FILE_CREATED which are only 
<br>
used in OMPI), and it makes sense to have all tags defined in one place.
<br>
<p>If we end up doing the runtime services layer, all the ompi tags would 
<br>
be defined in the RSL, and this will become moot.
<br>
<p>Tim
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2007, at 10:02 AM, tprins_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: tprins
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-08-16 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15881
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15881">https://svn.open-mpi.org/trac/ompi/changeset/15881</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Change it so that different components in orte use unique rml tags
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/communicator/comm_cid.c                         |      
</span><br>
<span class="quotelev2">&gt;&gt; 8 ++++----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c              |      
</span><br>
<span class="quotelev2">&gt;&gt; 4 ++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c |      
</span><br>
<span class="quotelev2">&gt;&gt; 8 +++-----
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c              |      
</span><br>
<span class="quotelev2">&gt;&gt; 4 ++--
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/rml/rml_types.h                             |      
</span><br>
<span class="quotelev2">&gt;&gt; 6 ++++++
</span><br>
<span class="quotelev2">&gt;&gt;    5 files changed, 17 insertions(+), 13 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/communicator/comm_cid.c
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/communicator/comm_cid.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/communicator/comm_cid.c	2007-08-16 10:02:35 EDT  
</span><br>
<span class="quotelev2">&gt;&gt; (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -758,12 +758,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          if ( send_first ) {
</span><br>
<span class="quotelev2">&gt;&gt; -            rc = orte_rml.send_buffer(remote_leader, sbuf, 0, 0);
</span><br>
<span class="quotelev2">&gt;&gt; -            rc = orte_rml.recv_buffer(remote_leader, rbuf, 0, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +            rc = orte_rml.send_buffer(remote_leader, sbuf,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +            rc = orte_rml.recv_buffer(remote_leader, rbuf,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          else {
</span><br>
<span class="quotelev2">&gt;&gt; -            rc = orte_rml.recv_buffer(remote_leader, rbuf, 0, 0);
</span><br>
<span class="quotelev2">&gt;&gt; -            rc = orte_rml.send_buffer(remote_leader, sbuf, 0, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +            rc = orte_rml.recv_buffer(remote_leader, rbuf,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +            rc = orte_rml.send_buffer(remote_leader, sbuf,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_COMM_CID_INTRA, 0);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (rc = orte_dss.unpack(rbuf, outbuf,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;size_count, ORTE_INT))) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/mvapi/btl_mvapi_endpoint.c	2007-08-16  
</span><br>
<span class="quotelev2">&gt;&gt; 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -322,7 +322,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* send to endpoint */
</span><br>
<span class="quotelev2">&gt;&gt; -    rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_guid, buffer, ORTE_RML_TAG_DYNAMIC-1, 0,
</span><br>
<span class="quotelev2">&gt;&gt; +    rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_guid, buffer, ORTE_RML_TAG_MVAPI, 0,
</span><br>
<span class="quotelev2">&gt;&gt;           mca_btl_mvapi_endpoint_send_cb, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -694,7 +694,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      orte_rml.recv_buffer_nb(
</span><br>
<span class="quotelev2">&gt;&gt;          ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt;&gt; -        ORTE_RML_TAG_DYNAMIC-1,
</span><br>
<span class="quotelev2">&gt;&gt; +        ORTE_RML_TAG_MVAPI,
</span><br>
<span class="quotelev2">&gt;&gt;          ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt;&gt;          mca_btl_mvapi_endpoint_recv,
</span><br>
<span class="quotelev2">&gt;&gt;          NULL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	 
</span><br>
<span class="quotelev2">&gt;&gt; (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	 
</span><br>
<span class="quotelev2">&gt;&gt; 2007-08-16 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -39,8 +39,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;      ENDPOINT_CONNECT_ACK
</span><br>
<span class="quotelev2">&gt;&gt;  } connect_message_type_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#define OOB_TAG (ORTE_RML_TAG_DYNAMIC - 1)
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;  static int oob_init(void);
</span><br>
<span class="quotelev2">&gt;&gt;  static int oob_start_connect(mca_btl_base_endpoint_t *e);
</span><br>
<span class="quotelev2">&gt;&gt;  static int oob_finalize(void);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -87,7 +85,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      int rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt;&gt; -                                 OOB_TAG,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 ORTE_RML_TAG_OPENIB,
</span><br>
<span class="quotelev2">&gt;&gt;                                   ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt;&gt;                                   rml_recv_cb,
</span><br>
<span class="quotelev2">&gt;&gt;                                   NULL);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -124,7 +122,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt;  static int oob_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, OOB_TAG);
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_OPENIB);
</span><br>
<span class="quotelev2">&gt;&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -465,7 +463,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* send to remote endpoint */
</span><br>
<span class="quotelev2">&gt;&gt;      rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc-&gt;proc_guid,
</span><br>
<span class="quotelev2">&gt;&gt; -                                 buffer, OOB_TAG, 0,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 buffer, ORTE_RML_TAG_OPENIB, 0,
</span><br>
<span class="quotelev2">&gt;&gt;                                   rml_send_cb, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;      if (ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt;&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/udapl/btl_udapl_endpoint.c	2007-08-16  
</span><br>
<span class="quotelev2">&gt;&gt; 10:02:35 EDT (Thu, 16 Aug 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -491,7 +491,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* Send the buffer */
</span><br>
<span class="quotelev2">&gt;&gt;      rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_guid, buf,
</span><br>
<span class="quotelev2">&gt;&gt; -            ORTE_RML_TAG_DYNAMIC - 1, 0,  
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_udapl_endpoint_send_cb, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +            ORTE_RML_TAG_UDAPL, 0, mca_btl_udapl_endpoint_send_cb,  
</span><br>
<span class="quotelev2">&gt;&gt; NULL);
</span><br>
<span class="quotelev2">&gt;&gt;      if(0 &gt; rc) {
</span><br>
<span class="quotelev2">&gt;&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;          return rc;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -558,7 +558,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  void mca_btl_udapl_endpoint_post_oob_recv(void)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_RML_TAG_DYNAMIC-1,
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD, ORTE_RML_TAG_UDAPL,
</span><br>
<span class="quotelev2">&gt;&gt;              ORTE_RML_PERSISTENT, mca_btl_udapl_endpoint_recv, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rml/rml_types.h
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rml/rml_types.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rml/rml_types.h	2007-08-16 10:02:35 EDT (Thu, 16  
</span><br>
<span class="quotelev2">&gt;&gt; Aug 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -80,6 +80,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #define ORTE_RML_TAG_RML_ROUTE              24
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_UDAPL                  25
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_OPENIB                 26
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_MVAPI                  27
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RML_TAG_COMM_CID_INTRA         28
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  /* For CRCP Coord Component */
</span><br>
<span class="quotelev2">&gt;&gt;  #define OMPI_CRCP_COORD_BOOKMARK_TAG      4242
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="2160.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2158.php">Mohamad Chaarawi: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>In reply to:</strong> <a href="2157.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2163.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2163.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
