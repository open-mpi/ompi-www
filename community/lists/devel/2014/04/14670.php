<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 22:06:07 2014" -->
<!-- isoreceived="20140501020607" -->
<!-- sent="Wed, 30 Apr 2014 22:06:04 -0400" -->
<!-- isosent="20140501020604" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base" -->
<!-- id="A640387C-6983-43FF-8641-A73030F9AD53_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="471A2D6D-645F-4866-A8C9-38AA9E4E4172_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 22:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14669.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="14669.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another solution will be to get rid of ompi_process_name_t and use everywhere the opal_identifier_t. We can shift the responsibility to convert between this unique identifier (and we have 64 bits to ensure uniqueness) and the orte_process_name_t to the RTE. Similar to the opal_help we can implement:
<br>
- a naming function converting an opal_identifier_t into a const string
<br>
- a comparaison function comparing two opal_identifier_t for identical jobid, and so on
<br>
- maybe an accessor for the jobid/vpid.
<br>
<p>These function will default to some trivial local information, but will be changed by the RTE ASAP, allowing simple and flexible access to the RTE naming scheme. Moreover, this information will only be used sporadically (during connection setup and error reporting), so using functions will not have a significant overhead. Btw, this is the approach I implemented into the OPAL BTL branch, and seems to work pretty well so far.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Apr 30, 2014, at 22:01 , George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 30, 2014, at 20:04 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All we need in usnic is the ompi_process_name_t of the local process leader.  However that happens is fine with me.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why do you need the ompi_process_name_t? Isn&#146;t the opal_identifier_t enough to dig for the info of the peer into the opal_db?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2014, at 6:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George makes a fair point - I was unaware they were hashing down to the opal_identifier_t. Only real requirement is that there be some way to reduce to 64-bits when accessing the common data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the usnic BTL may have an issue with that approach, so maybe some way of &quot;unhashing&quot; will be required?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 30, 2014, at 3:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 30, 2014, at 6:35 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Puzzling. We survived so far without such a requirement.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph tells me that this is a requirement.  So I figured we should check for it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In the BTLs where we needed a 64 bits entity corresponding to the ompi_process_name_t we took advantage of the ompi_rte_hash_name function. This function is supposed to convert from an ompi_process_name_t to a uint64_t (in fact an opal_identifier_t) which can be then used to handle hash tables.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...I don't really care, either way.  I'll do whatever you guys tell me to do here.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I put that assert there because Ralph told me it was a requirement, and I now have code in the usnic BTL that is doing a memcpy from a union uint64_t member to an ompi_process_name_t, and it assumes that the sizes are guaranteed to be the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If we want to do it some other way, that's fine with me, too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 30, 2014, at 18:12 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: 2014-04-30 18:12:54 EDT (Wed, 30 Apr 2014)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 31577
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31577">https://svn.open-mpi.org/trac/ompi/changeset/31577</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rte_base_frame.c: add sanity check to ensure proper sizes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There's a requirement in several places (e.g., opal dstore) that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sizeof(ompi_process_name_t) -- which comes from the compile-time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; selected ompi/mca/rte component -- is equal to sizeof(uint64_t).  If
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it's not, Bad Things will happen.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So put an assert here to catch that case.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/rte/base/rte_base_frame.c |    10 +++++++++-                              
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 9 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/rte/base/rte_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --- trunk/ompi/mca/rte/base/rte_base_frame.c	Wed Apr 30 18:10:30 2014	(r31576)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/rte/base/rte_base_frame.c	2014-04-30 18:12:54 EDT (Wed, 30 Apr 2014)	(r31577)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1,6 +1,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Copyright (c) 2012-2013 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; + * Copyright (c) 2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -12,6 +13,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +#include &quot;opal_stdint.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/mca/mca.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -36,7 +38,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; static int ompi_rte_base_open(mca_base_open_flag_t flags)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /* Open up all available components */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    return mca_base_framework_components_open(&amp;ompi_rte_base_framework, flags);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    int ret = mca_base_framework_components_open(&amp;ompi_rte_base_framework, flags);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    /* Sanity check.  Many things will break if this is not true
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +       (e.g., opal dstore needs this to be true). */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    assert(sizeof(ompi_process_name_t) == sizeof(uint64_t));
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    return ret;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MCA_BASE_FRAMEWORK_DECLARE(ompi, rte, &quot;OMPI Run-Time Environment Interface&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14663.php">http://www.open-mpi.org/community/lists/devel/2014/04/14663.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14664.php">http://www.open-mpi.org/community/lists/devel/2014/04/14664.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14667.php">http://www.open-mpi.org/community/lists/devel/2014/04/14667.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14668.php">http://www.open-mpi.org/community/lists/devel/2014/04/14668.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14669.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="14669.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577	- trunk/ompi/mca/rte/base"</a>
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
