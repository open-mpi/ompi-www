<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 11:04:05 2009" -->
<!-- isoreceived="20090721150405" -->
<!-- sent="Tue, 21 Jul 2009 11:03:57 -0400" -->
<!-- isosent="20090721150357" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707" -->
<!-- id="21253CB1-6293-4A82-B3B3-79A8FE6B2B01_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907171454.n6HEsJHu004723_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 11:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<li><strong>Previous message:</strong> <a href="6469.php">Jeff Squyres: "[OMPI devel] cross-complie changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<li><strong>Reply:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do we really want asserts here, or orte_show_help()'s?
<br>
<p>asserts won't fire in production builds, will they?
<br>
<p><p>On Jul 17, 2009, at 10:54 AM, &lt;tdd_at_[hidden]&gt; &lt;tdd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: tdd
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-17 10:54:18 EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21707
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21707">https://svn.open-mpi.org/trac/ompi/changeset/21707</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add asserts to catch when btl_eager_limit is smaller than the pml  
</span><br>
<span class="quotelev1">&gt; headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/csum/pml_csum_sendreq.h |     2 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/dr/pml_dr_sendreq.h     |     2 ++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h   |     2 ++
</span><br>
<span class="quotelev1">&gt;    3 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/csum/pml_csum_sendreq.h
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
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/csum/pml_csum_sendreq.h  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/csum/pml_csum_sendreq.h  2009-07-17 10:54:18  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +12,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2009      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2009      Los Alamos National Security, LLC.  All  
</span><br>
<span class="quotelev1">&gt; rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -349,6 +350,7 @@
</span><br>
<span class="quotelev1">&gt;      size_t eager_limit = btl-&gt;btl_eager_limit -  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_csum_hdr_t);
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    assert(btl-&gt;btl_eager_limit &gt;= sizeof(mca_pml_csum_hdr_t));
</span><br>
<span class="quotelev1">&gt;      if( OPAL_LIKELY(size &lt;= eager_limit) ) {
</span><br>
<span class="quotelev1">&gt;          switch(sendreq-&gt;req_send.req_send_mode) {
</span><br>
<span class="quotelev1">&gt;          case MCA_PML_BASE_SEND_SYNCHRONOUS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/dr/pml_dr_sendreq.h
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
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/dr/pml_dr_sendreq.h      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/dr/pml_dr_sendreq.h      2009-07-17 10:54:18  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2006 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -176,6 +177,7 @@
</span><br>
<span class="quotelev1">&gt;      sendreq-&gt;req_send.req_base.req_sequence =  
</span><br>
<span class="quotelev1">&gt; OPAL_THREAD_ADD32(&amp;proc-&gt;send_sequence,1);  \
</span><br>
<span class="quotelev1">&gt;                                                                                            \
</span><br>
<span class="quotelev1">&gt;      /* select a btl  
</span><br>
<span class="quotelev1">&gt; */                                                                    \
</span><br>
<span class="quotelev1">&gt; +    assert(bml_btl-&gt;btl-&gt;btl_eager_limit &gt;=  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_dr_hdr_t));                    \
</span><br>
<span class="quotelev1">&gt;      eager_limit = bml_btl-&gt;btl-&gt;btl_eager_limit -  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_dr_hdr_t);               \
</span><br>
<span class="quotelev1">&gt;      if(size &lt;= eager_limit)  
</span><br>
<span class="quotelev1">&gt; {                                                             \
</span><br>
<span class="quotelev1">&gt;          switch(sendreq-&gt;req_send.req_send_mode)  
</span><br>
<span class="quotelev1">&gt; {                                         \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h
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
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h    2009-07-17 10:54:18  
</span><br>
<span class="quotelev1">&gt; EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -348,6 +349,7 @@
</span><br>
<span class="quotelev1">&gt;      size_t eager_limit = btl-&gt;btl_eager_limit -  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_ob1_hdr_t);
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    assert(btl-&gt;btl_eager_limit &gt;= sizeof(mca_pml_ob1_hdr_t));
</span><br>
<span class="quotelev1">&gt;      if( OPAL_LIKELY(size &lt;= eager_limit) ) {
</span><br>
<span class="quotelev1">&gt;          switch(sendreq-&gt;req_send.req_send_mode) {
</span><br>
<span class="quotelev1">&gt;          case MCA_PML_BASE_SEND_SYNCHRONOUS:
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<li><strong>Previous message:</strong> <a href="6469.php">Jeff Squyres: "[OMPI devel] cross-complie changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<li><strong>Reply:</strong> <a href="6471.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
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
