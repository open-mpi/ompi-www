<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 18:36:01 2014" -->
<!-- isoreceived="20140430223601" -->
<!-- sent="Wed, 30 Apr 2014 18:35:58 -0400" -->
<!-- isosent="20140430223558" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base" -->
<!-- id="E699B4A7-B183-4FB0-B1AA-D8A414EA60A0_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140430221255.1AFD9160EDC_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 18:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Puzzling. We survived so far without such a requirement.
<br>
<p>In the BTLs where we needed a 64 bits entity corresponding to the ompi_process_name_t we took advantage of the ompi_rte_hash_name function. This function is supposed to convert from an ompi_process_name_t to a uint64_t (in fact an opal_identifier_t) which can be then used to handle hash tables.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Apr 30, 2014, at 18:12 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2014-04-30 18:12:54 EDT (Wed, 30 Apr 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31577
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31577">https://svn.open-mpi.org/trac/ompi/changeset/31577</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; rte_base_frame.c: add sanity check to ensure proper sizes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a requirement in several places (e.g., opal dstore) that
</span><br>
<span class="quotelev1">&gt; sizeof(ompi_process_name_t) -- which comes from the compile-time
</span><br>
<span class="quotelev1">&gt; selected ompi/mca/rte component -- is equal to sizeof(uint64_t).  If
</span><br>
<span class="quotelev1">&gt; it's not, Bad Things will happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So put an assert here to catch that case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/rte/base/rte_base_frame.c |    10 +++++++++-                              
</span><br>
<span class="quotelev1">&gt;   1 files changed, 9 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/rte/base/rte_base_frame.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/rte/base/rte_base_frame.c	Wed Apr 30 18:10:30 2014	(r31576)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/rte/base/rte_base_frame.c	2014-04-30 18:12:54 EDT (Wed, 30 Apr 2014)	(r31577)
</span><br>
<span class="quotelev1">&gt; @@ -1,6 +1,7 @@
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2012-2013 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +13,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -36,7 +38,13 @@
</span><br>
<span class="quotelev1">&gt; static int ompi_rte_base_open(mca_base_open_flag_t flags)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     /* Open up all available components */
</span><br>
<span class="quotelev1">&gt; -    return mca_base_framework_components_open(&amp;ompi_rte_base_framework, flags);
</span><br>
<span class="quotelev1">&gt; +    int ret = mca_base_framework_components_open(&amp;ompi_rte_base_framework, flags);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Sanity check.  Many things will break if this is not true
</span><br>
<span class="quotelev1">&gt; +       (e.g., opal dstore needs this to be true). */
</span><br>
<span class="quotelev1">&gt; +    assert(sizeof(ompi_process_name_t) == sizeof(uint64_t));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA_BASE_FRAMEWORK_DECLARE(ompi, rte, &quot;OMPI Run-Time Environment Interface&quot;, NULL,
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
<li><strong>Next message:</strong> <a href="14664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="14664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 -	trunk/ompi/mca/rte/base"</a>
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
