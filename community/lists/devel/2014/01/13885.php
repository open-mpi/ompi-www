<?
$subject_val = "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 13:12:32 2014" -->
<!-- isoreceived="20140123181232" -->
<!-- sent="Thu, 23 Jan 2014 18:12:30 +0000" -->
<!-- isosent="20140123181230" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?" -->
<!-- id="6FFF6E84-4EDB-45E5-AAAB-1B9F884850F1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="305888627.552760.1390467429517.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 13:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13886.php">Paul Hargrove: "[OMPI devel] vader on SGI UV?"</a>
<li><strong>Previous message:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>In reply to:</strong> <a href="13872.php">Christoph Niethammer: "[OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This function is generally called during MPI_Finalize (i.e., when everything is being torn down).
<br>
<p>It may also be called during the disconnection of MPI dynamic processes (i.e., we don't need a BTL connection to a given peer anymore because the last communicator containing it has been released).
<br>
<p><p>On Jan 23, 2014, at 3:57 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I found a minor memory bug in the bml_r2 code in function mca_bml_r2_del_btl but I could not figure out when this function ever gets called.
</span><br>
<span class="quotelev1">&gt; How can I test this function in a proper way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the diff showing the issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -699,11 +699,11 @@ static int mca_bml_r2_del_btl(mca_btl_base_module_t* btl)
</span><br>
<span class="quotelev1">&gt;     if(!found) {
</span><br>
<span class="quotelev1">&gt;         /* doesn't even exist */
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* remove from bml list */
</span><br>
<span class="quotelev1">&gt; -    modules = (mca_btl_base_module_t**)malloc(sizeof(mca_btl_base_module_t*) * mca_bml_r2.num_btl_modules-1);
</span><br>
<span class="quotelev1">&gt; +    modules = (mca_btl_base_module_t**)malloc(sizeof(mca_btl_base_module_t*) * (mca_bml_r2.num_btl_modules-1));
</span><br>
<span class="quotelev1">&gt;     for(i=0,m=0; i&lt;mca_bml_r2.num_btl_modules; i++) {
</span><br>
<span class="quotelev1">&gt;         if(mca_bml_r2.btl_modules[i] != btl) {
</span><br>
<span class="quotelev1">&gt;             modules[m++] = mca_bml_r2.btl_modules[i];
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13886.php">Paul Hargrove: "[OMPI devel] vader on SGI UV?"</a>
<li><strong>Previous message:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>In reply to:</strong> <a href="13872.php">Christoph Niethammer: "[OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
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
