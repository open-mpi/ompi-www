<?
$subject_val = "Re: [OMPI devel] [OMPI svn-private-full] svn:open-mpi r17573";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 09:16:49 2008" -->
<!-- isoreceived="20080225141649" -->
<!-- sent="Mon, 25 Feb 2008 09:16:34 -0500" -->
<!-- isosent="20080225141634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-private-full] svn:open-mpi r17573" -->
<!-- id="6667F350-B7E7-4753-B6D2-B6C039AD903A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200802251251.m1PCp6cM023929_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-private-full] svn:open-mpi r17573<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-25 09:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>Previous message:</strong> <a href="3294.php">Ralph Castain: "Re: [OMPI devel] OMPI and Mac Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Be aware that the openib CPCs have changed considerably on the /tmp- 
<br>
public/openib-cpc2 branch...
<br>
<p>I guess we'll need to merge this stuff in when we merge step2b and  
<br>
openib-cpc2 together.  There's been a little discussion of whether to  
<br>
merge the openib-cpc2 branch down to the step2b branch (and then let  
<br>
it come in to the trunk when step2b is merged to the trunk), or  
<br>
whether the cpc2 branch should be merged to the trunk first.
<br>
<p>Unfortunately, we don't have an answer yet because the cpc2 branch is  
<br>
not yet complete...
<br>
<p><p><p>On Feb 25, 2008, at 7:51 AM, tprins_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: tprins
</span><br>
<span class="quotelev1">&gt; Date: 2008-02-25 07:51:06 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17573
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17573">https://svn.open-mpi.org/trac/ompi/changeset/17573</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; First cut at updating the xoob cpc to work with the new orte  
</span><br>
<span class="quotelev1">&gt; interfaces. I have no way to test if this code compiles or works,  
</span><br>
<span class="quotelev1">&gt; but it stands a better chance now than it did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   tmp/rhc-step2b/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c |    14 ++++++--------
</span><br>
<span class="quotelev1">&gt;   tmp/rhc-step2b/ompi/mca/dpm/ 
</span><br>
<span class="quotelev1">&gt; dpm.h                                    |    13 +++++++------
</span><br>
<span class="quotelev1">&gt;   2 files changed, 13 insertions(+), 14 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp/rhc-step2b/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp/rhc-step2b/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp/rhc-step2b/ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_xoob.c	2008-02-25 07:51:06 EST (Mon, 25 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -10,11 +10,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#include &quot;orte/mca/ns/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;orte/mca/oob/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/util/name_fns.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/rml/rml.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/errmgr/errmgr.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/mca/dpm/dpm.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;btl_openib_endpoint.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -55,8 +55,6 @@
</span><br>
<span class="quotelev1">&gt;     ENDPOINT_XOOB_CONNECT_XRC_NR_RESPONSE /* The xrc recv qp already  
</span><br>
<span class="quotelev1">&gt; was destroyed */
</span><br>
<span class="quotelev1">&gt; } connect_message_type_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define XOOB_TAG (ORTE_RML_TAG_DYNAMIC - 1)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; #define XOOB_SET_REMOTE_INFO(EP,  
</span><br>
<span class="quotelev1">&gt; INFO)                                    \
</span><br>
<span class="quotelev1">&gt; do  
</span><br>
<span class="quotelev1">&gt; {                                                                      \
</span><br>
<span class="quotelev1">&gt;     /* copy the rem_info stuff  
</span><br>
<span class="quotelev1">&gt; */                                         \
</span><br>
<span class="quotelev1">&gt; @@ -343,7 +341,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* send to remote endpoint */
</span><br>
<span class="quotelev1">&gt;     rc = orte_rml.send_buffer_nb(&amp;endpoint-&gt;endpoint_proc-&gt;proc_guid,
</span><br>
<span class="quotelev1">&gt; -            buffer, XOOB_TAG, 0,
</span><br>
<span class="quotelev1">&gt; +            buffer, OMPI_RML_TAG_XOPENIB, 0,
</span><br>
<span class="quotelev1">&gt;             xoob_rml_send_cb, NULL);
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; @@ -642,7 +640,7 @@
</span><br>
<span class="quotelev1">&gt;             ib_proc != (mca_btl_openib_proc_t*)
</span><br>
<span class="quotelev1">&gt;             opal_list_get_end(&amp;mca_btl_openib_component.ib_procs);
</span><br>
<span class="quotelev1">&gt;             ib_proc  =  
</span><br>
<span class="quotelev1">&gt; (mca_btl_openib_proc_t*)opal_list_get_next(ib_proc)) {
</span><br>
<span class="quotelev1">&gt; -        if (orte_ns.compare_fields(ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev1">&gt; +        if (orte_util_compare_name_fields(ORTE_NS_CMP_ALL,
</span><br>
<span class="quotelev1">&gt;                     &amp;ib_proc-&gt;proc_guid, process_name) ==  
</span><br>
<span class="quotelev1">&gt; OPAL_EQUAL) {
</span><br>
<span class="quotelev1">&gt;             found = true;
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt; @@ -947,7 +945,7 @@
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     rc = orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; -                                 XOOB_TAG,
</span><br>
<span class="quotelev1">&gt; +                                 OMPI_RML_TAG_XOPENIB,
</span><br>
<span class="quotelev1">&gt;                                  ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt;                                  xoob_rml_recv_cb,
</span><br>
<span class="quotelev1">&gt;                                  NULL);
</span><br>
<span class="quotelev1">&gt; @@ -1018,6 +1016,6 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; static int xoob_finalize(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, XOOB_TAG);
</span><br>
<span class="quotelev1">&gt; +    orte_rml.recv_cancel(ORTE_NAME_WILDCARD, OMPI_RML_TAG_XOPENIB);
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp/rhc-step2b/ompi/mca/dpm/dpm.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp/rhc-step2b/ompi/mca/dpm/dpm.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ tmp/rhc-step2b/ompi/mca/dpm/dpm.h	2008-02-25 07:51:06 EST (Mon,  
</span><br>
<span class="quotelev1">&gt; 25 Feb 2008)
</span><br>
<span class="quotelev1">&gt; @@ -42,12 +42,13 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_RML_TAG_UDAPL                  OMPI_RML_TAG_BASE+1
</span><br>
<span class="quotelev1">&gt; #define OMPI_RML_TAG_OPENIB                 OMPI_RML_TAG_BASE+2
</span><br>
<span class="quotelev1">&gt; -#define OMPI_RML_TAG_COMM_CID_INTRA         OMPI_RML_TAG_BASE+3
</span><br>
<span class="quotelev1">&gt; -#define OMPI_RML_TAG_XOOB                   OMPI_RML_TAG_BASE+4
</span><br>
<span class="quotelev1">&gt; -#define OMPI_RML_TAG_SM_BACK_FILE_CREATED   OMPI_RML_TAG_BASE+5
</span><br>
<span class="quotelev1">&gt; -#define OMPI_RML_TAG_WIREUP                 OMPI_RML_TAG_BASE+6
</span><br>
<span class="quotelev1">&gt; -#define OMPI_CRCP_COORD_BOOKMARK_TAG        OMPI_RML_TAG_BASE+7
</span><br>
<span class="quotelev1">&gt; -#define OMPI_COMM_JOIN_TAG                  OMPI_RML_TAG_BASE+8
</span><br>
<span class="quotelev1">&gt; +#define OMPI_RML_TAG_XOPENIB                OMPI_RML_TAG_BASE+3
</span><br>
<span class="quotelev1">&gt; +#define OMPI_RML_TAG_COMM_CID_INTRA         OMPI_RML_TAG_BASE+4
</span><br>
<span class="quotelev1">&gt; +#define OMPI_RML_TAG_XOOB                   OMPI_RML_TAG_BASE+5
</span><br>
<span class="quotelev1">&gt; +#define OMPI_RML_TAG_SM_BACK_FILE_CREATED   OMPI_RML_TAG_BASE+6
</span><br>
<span class="quotelev1">&gt; +#define OMPI_RML_TAG_WIREUP                 OMPI_RML_TAG_BASE+7
</span><br>
<span class="quotelev1">&gt; +#define OMPI_CRCP_COORD_BOOKMARK_TAG        OMPI_RML_TAG_BASE+8
</span><br>
<span class="quotelev1">&gt; +#define OMPI_COMM_JOIN_TAG                  OMPI_RML_TAG_BASE+9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_RML_TAG_DYNAMIC                OMPI_RML_TAG_BASE+200
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-private-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-private-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-private-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-private-full</a>
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
<li><strong>Next message:</strong> <a href="3296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17584"</a>
<li><strong>Previous message:</strong> <a href="3294.php">Ralph Castain: "Re: [OMPI devel] OMPI and Mac Leopard"</a>
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
