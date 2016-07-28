<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 12:11:29 2013" -->
<!-- isoreceived="20130430161129" -->
<!-- sent="Tue, 30 Apr 2013 18:11:22 +0200" -->
<!-- isosent="20130430161122" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base" -->
<!-- id="5D7EC968-2CD6-479D-8F6B-CFD8349AF66B_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130430152142.644DD15F83E_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 12:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12329.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Previous message:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit broke the trunk.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 30, 2013, at 17:21 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2013-04-30 11:21:42 EDT (Tue, 30 Apr 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28417
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28417">https://svn.open-mpi.org/trac/ompi/changeset/28417</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; vprotocol: remove the old output and use the framework output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/vprotocol/base/base.h                  |     1 -                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/vprotocol/base/vprotocol_base_select.c |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   2 files changed, 1 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/vprotocol/base/base.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/vprotocol/base/base.h	Tue Apr 30 06:10:23 2013	(r28416)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/vprotocol/base/base.h	2013-04-30 11:21:42 EDT (Tue, 30 Apr 2013)	(r28417)
</span><br>
<span class="quotelev1">&gt; @@ -21,7 +21,6 @@
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct mca_pml_v_t {
</span><br>
<span class="quotelev1">&gt; -    int                                 output;
</span><br>
<span class="quotelev1">&gt;     size_t                              host_pml_req_recv_size;
</span><br>
<span class="quotelev1">&gt;     size_t                              host_pml_req_send_size;
</span><br>
<span class="quotelev1">&gt;     mca_pml_base_component_t            host_pml_component;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/vprotocol/base/vprotocol_base_select.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/vprotocol/base/vprotocol_base_select.c	Tue Apr 30 06:10:23 2013	(r28416)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/vprotocol/base/vprotocol_base_select.c	2013-04-30 11:21:42 EDT (Tue, 30 Apr 2013)	(r28417)
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +124,7 @@
</span><br>
<span class="quotelev1">&gt;         free(om);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mca_base_components_close(mca_pml_v.output, 
</span><br>
<span class="quotelev1">&gt; +    mca_base_components_close(ompi_vprotocol_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                               &amp;ompi_vprotocol_base_framework.framework_components, 
</span><br>
<span class="quotelev1">&gt;                               (mca_base_component_t *) best_component);
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12329.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Previous message:</strong> <a href="12327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Debug output issues on the trunk"</a>
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
