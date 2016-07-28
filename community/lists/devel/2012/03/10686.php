<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 10:05:55 2012" -->
<!-- isoreceived="20120306150555" -->
<!-- sent="Tue, 6 Mar 2012 10:05:51 -0500" -->
<!-- isosent="20120306150551" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="413A26C7-9F3B-4EE1-9D4A-6928FB9169ED_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="83C09156-F99D-478A-9648-13C3ED6AFB55_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 10:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<li><strong>Previous message:</strong> <a href="10685.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10685.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I din't check thoroughly the code, but OMPI_ERR_OUT_OF_RESOURCES is not an error. If the registration returns out of resources, the BTL will returns OUT_OF_RESOURCE (as an example via the mca_btl_openib_prepare_src). At the upper level, the PML (in the mca_pml_ob1_send_request_start function) intercept it and insert the request into a pending list. Later on this pending list will be examined and the request for resource re-issued.
<br>
<p>Why do we need to trigger a BTL_ERROR for OUT_OF_RESOURCES?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 6, 2012, at 09:48 , Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would make this a bit better of an error.  I.e., use orte_show_help(), so you can explain the issue more, and also remove all duplicates (i.e., if it fails to register multiple times).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2012, at 8:25 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: miked
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26106
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26106">https://svn.open-mpi.org/trac/ompi/changeset/26106</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; print error which is ignored on upper layer
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_component.c |     2 ++                                      
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c	2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -569,6 +569,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, access_flag);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (NULL == openib_reg-&gt;mr) {
</span><br>
<span class="quotelev2">&gt;&gt; +        BTL_ERROR((&quot;%s: error pinning openib memory errno says %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                       __func__, strerror(errno)));
</span><br>
<span class="quotelev2">&gt;&gt;        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<li><strong>Previous message:</strong> <a href="10685.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10685.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
