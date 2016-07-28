<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 09:48:38 2012" -->
<!-- isoreceived="20120306144838" -->
<!-- sent="Tue, 6 Mar 2012 08:48:23 -0600" -->
<!-- isosent="20120306144823" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="83C09156-F99D-478A-9648-13C3ED6AFB55_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203061425.q26EPubv031349_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 09:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10684.php">nadia.derbey: "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>I would make this a bit better of an error.  I.e., use orte_show_help(), so you can explain the issue more, and also remove all duplicates (i.e., if it fails to register multiple times).
<br>
<p><p>On Mar 6, 2012, at 8:25 AM, miked_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26106
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26106">https://svn.open-mpi.org/trac/ompi/changeset/26106</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; print error which is ignored on upper layer
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/openib/btl_openib_component.c |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev1">&gt; @@ -569,6 +569,8 @@
</span><br>
<span class="quotelev1">&gt;     openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, access_flag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (NULL == openib_reg-&gt;mr) {
</span><br>
<span class="quotelev1">&gt; +        BTL_ERROR((&quot;%s: error pinning openib memory errno says %s&quot;,
</span><br>
<span class="quotelev1">&gt; +                       __func__, strerror(errno)));
</span><br>
<span class="quotelev1">&gt;         return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;     }
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
<li><strong>Next message:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10684.php">nadia.derbey: "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
