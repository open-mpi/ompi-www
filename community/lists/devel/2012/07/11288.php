<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26790 - trunk/ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 13 11:14:16 2012" -->
<!-- isoreceived="20120713151416" -->
<!-- sent="Fri, 13 Jul 2012 11:14:18 -0400" -->
<!-- isosent="20120713151418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26790 - trunk/ompi/mca/btl/openib/connect" -->
<!-- id="FEFC3BFD-7646-471F-A4E0-53377CD91ACD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120713151448.A4CBC16004F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26790 - trunk/ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-13 11:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11289.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't forget to CMR to v1.7.
<br>
<p><p>On Jul 13, 2012, at 11:14 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2012-07-13 11:14:48 EDT (Fri, 13 Jul 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26790
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26790">https://svn.open-mpi.org/trac/ompi/changeset/26790</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; remove assertion in udcm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c |     4 +++-                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 3 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c	Fri Jul 13 08:11:41 2012	(r26789)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c	2012-07-13 11:14:48 EDT (Fri, 13 Jul 2012)	(r26790)
</span><br>
<span class="quotelev1">&gt; @@ -1847,7 +1847,9 @@
</span><br>
<span class="quotelev1">&gt;     void *event_context;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    assert (NULL != m &amp;&amp; NULL != m-&gt;cm_channel);
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_UNLIKELY(NULL == m || NULL == m-&gt;cm_channel)) {
</span><br>
<span class="quotelev1">&gt; +	return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     rc = ibv_get_cq_event (m-&gt;cm_channel, &amp;event_cq, &amp;event_context);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="11289.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11287.php">Hjelm, Nathan T: "Re: [OMPI devel] ucdm assertion failures"</a>
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
