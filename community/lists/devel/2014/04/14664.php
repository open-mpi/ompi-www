<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 18:42:20 2014" -->
<!-- isoreceived="20140430224220" -->
<!-- sent="Wed, 30 Apr 2014 22:42:18 +0000" -->
<!-- isosent="20140430224218" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base" -->
<!-- id="56D394F4-CBBF-4C42-BBBE-489BAAFC58F0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E699B4A7-B183-4FB0-B1AA-D8A414EA60A0_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 18:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14665.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14663.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="14663.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14665.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14665.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Maybe reply:</strong> <a href="14666.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14667.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2014, at 6:35 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Puzzling. We survived so far without such a requirement.
</span><br>
<p>Ralph tells me that this is a requirement.  So I figured we should check for it.
<br>
<p><span class="quotelev1">&gt; In the BTLs where we needed a 64 bits entity corresponding to the ompi_process_name_t we took advantage of the ompi_rte_hash_name function. This function is supposed to convert from an ompi_process_name_t to a uint64_t (in fact an opal_identifier_t) which can be then used to handle hash tables.
</span><br>
<p>...I don't really care, either way.  I'll do whatever you guys tell me to do here.  :-)
<br>
<p>I put that assert there because Ralph told me it was a requirement, and I now have code in the usnic BTL that is doing a memcpy from a union uint64_t member to an ompi_process_name_t, and it assumes that the sizes are guaranteed to be the same.
<br>
<p>If we want to do it some other way, that's fine with me, too.
<br>
<p><p><span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2014, at 18:12 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-04-30 18:12:54 EDT (Wed, 30 Apr 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 31577
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31577">https://svn.open-mpi.org/trac/ompi/changeset/31577</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; rte_base_frame.c: add sanity check to ensure proper sizes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's a requirement in several places (e.g., opal dstore) that
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(ompi_process_name_t) -- which comes from the compile-time
</span><br>
<span class="quotelev2">&gt;&gt; selected ompi/mca/rte component -- is equal to sizeof(uint64_t).  If
</span><br>
<span class="quotelev2">&gt;&gt; it's not, Bad Things will happen.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So put an assert here to catch that case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/rte/base/rte_base_frame.c |    10 +++++++++-                              
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 9 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/rte/base/rte_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/rte/base/rte_base_frame.c	Wed Apr 30 18:10:30 2014	(r31576)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/rte/base/rte_base_frame.c	2014-04-30 18:12:54 EDT (Wed, 30 Apr 2014)	(r31577)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,6 +1,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2012-2013 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -12,6 +13,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,7 +38,13 @@
</span><br>
<span class="quotelev2">&gt;&gt; static int ompi_rte_base_open(mca_base_open_flag_t flags)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    /* Open up all available components */
</span><br>
<span class="quotelev2">&gt;&gt; -    return mca_base_framework_components_open(&amp;ompi_rte_base_framework, flags);
</span><br>
<span class="quotelev2">&gt;&gt; +    int ret = mca_base_framework_components_open(&amp;ompi_rte_base_framework, flags);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Sanity check.  Many things will break if this is not true
</span><br>
<span class="quotelev2">&gt;&gt; +       (e.g., opal dstore needs this to be true). */
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(sizeof(ompi_process_name_t) == sizeof(uint64_t));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BASE_FRAMEWORK_DECLARE(ompi, rte, &quot;OMPI Run-Time Environment Interface&quot;, NULL,
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14663.php">http://www.open-mpi.org/community/lists/devel/2014/04/14663.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14665.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14663.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="14663.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14665.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14665.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Maybe reply:</strong> <a href="14666.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14667.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
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
