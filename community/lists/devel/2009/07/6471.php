<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 11:08:10 2009" -->
<!-- isoreceived="20090721150810" -->
<!-- sent="Tue, 21 Jul 2009 11:06:51 -0400" -->
<!-- isosent="20090721150651" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707" -->
<!-- id="4A65D98B.8020409_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="21253CB1-6293-4A82-B3B3-79A8FE6B2B01_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 11:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6472.php">Sebastian Rinke: "[OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<li><strong>In reply to:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Do we really want asserts here, or orte_show_help()'s?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asserts won't fire in production builds, will they?
</span><br>
No but isn't this a critical path in the code?
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2009, at 10:54 AM, &lt;tdd_at_[hidden]&gt; &lt;tdd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: tdd
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-07-17 10:54:18 EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21707
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21707">https://svn.open-mpi.org/trac/ompi/changeset/21707</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add asserts to catch when btl_eager_limit is smaller than the pml 
</span><br>
<span class="quotelev2">&gt;&gt; headers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/csum/pml_csum_sendreq.h |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/dr/pml_dr_sendreq.h     |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h   |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;    3 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/csum/pml_csum_sendreq.h
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/csum/pml_csum_sendreq.h  (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/csum/pml_csum_sendreq.h  2009-07-17 10:54:18 
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -12,6 +12,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2009      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2009      Los Alamos National Security, LLC.  All 
</span><br>
<span class="quotelev2">&gt;&gt; rights
</span><br>
<span class="quotelev2">&gt;&gt;   *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;   *
</span><br>
<span class="quotelev2">&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -349,6 +350,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      size_t eager_limit = btl-&gt;btl_eager_limit - 
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(mca_pml_csum_hdr_t);
</span><br>
<span class="quotelev2">&gt;&gt;      int rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(btl-&gt;btl_eager_limit &gt;= sizeof(mca_pml_csum_hdr_t));
</span><br>
<span class="quotelev2">&gt;&gt;      if( OPAL_LIKELY(size &lt;= eager_limit) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          switch(sendreq-&gt;req_send.req_send_mode) {
</span><br>
<span class="quotelev2">&gt;&gt;          case MCA_PML_BASE_SEND_SYNCHRONOUS:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/dr/pml_dr_sendreq.h
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/dr/pml_dr_sendreq.h      (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/dr/pml_dr_sendreq.h      2009-07-17 10:54:18 
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   *                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev2">&gt;&gt; reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2004-2006 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;   *
</span><br>
<span class="quotelev2">&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -176,6 +177,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      sendreq-&gt;req_send.req_base.req_sequence = 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_THREAD_ADD32(&amp;proc-&gt;send_sequence,1);  \
</span><br>
<span class="quotelev2">&gt;&gt;                                                                                            
</span><br>
<span class="quotelev2">&gt;&gt; \
</span><br>
<span class="quotelev2">&gt;&gt;      /* select a btl 
</span><br>
<span class="quotelev2">&gt;&gt; */                                                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(bml_btl-&gt;btl-&gt;btl_eager_limit &gt;= 
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(mca_pml_dr_hdr_t));                    \
</span><br>
<span class="quotelev2">&gt;&gt;      eager_limit = bml_btl-&gt;btl-&gt;btl_eager_limit - 
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(mca_pml_dr_hdr_t);               \
</span><br>
<span class="quotelev2">&gt;&gt;      if(size &lt;= eager_limit) 
</span><br>
<span class="quotelev2">&gt;&gt; {                                                             \
</span><br>
<span class="quotelev2">&gt;&gt;          switch(sendreq-&gt;req_send.req_send_mode) 
</span><br>
<span class="quotelev2">&gt;&gt; {                                         \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h    (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h    2009-07-17 10:54:18 
</span><br>
<span class="quotelev2">&gt;&gt; EDT (Fri, 17 Jul 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   *                         University of Stuttgart.  All rights 
</span><br>
<span class="quotelev2">&gt;&gt; reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;   *
</span><br>
<span class="quotelev2">&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -348,6 +349,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      size_t eager_limit = btl-&gt;btl_eager_limit - 
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(mca_pml_ob1_hdr_t);
</span><br>
<span class="quotelev2">&gt;&gt;      int rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(btl-&gt;btl_eager_limit &gt;= sizeof(mca_pml_ob1_hdr_t));
</span><br>
<span class="quotelev2">&gt;&gt;      if( OPAL_LIKELY(size &lt;= eager_limit) ) {
</span><br>
<span class="quotelev2">&gt;&gt;          switch(sendreq-&gt;req_send.req_send_mode) {
</span><br>
<span class="quotelev2">&gt;&gt;          case MCA_PML_BASE_SEND_SYNCHRONOUS:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6472.php">Sebastian Rinke: "[OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
<li><strong>In reply to:</strong> <a href="6470.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21707"</a>
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
