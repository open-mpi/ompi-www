<?
$subject_val = "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 20:10:27 2011" -->
<!-- isoreceived="20110708001027" -->
<!-- sent="Thu, 7 Jul 2011 20:10:22 -0400" -->
<!-- isosent="20110708001022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails" -->
<!-- id="297F2222-71EC-4411-A975-0048D82AEC56_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1309244527.390.5.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 20:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9479.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9437.php">nadia.derbey: "[OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<li><strong>Reply:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd go even slightly simpler than that:
<br>
<p>Index: opal/mca/carto/base/carto_base_select.c
<br>
===================================================================
<br>
--- opal/mca/carto/base/carto_base_select.c	(revision 24842)
<br>
+++ opal/mca/carto/base/carto_base_select.c	(working copy)
<br>
@@ -64,10 +64,7 @@
<br>
&nbsp;cleanup:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Initialize the winner */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != opal_carto_base_module) {
<br>
-        if (OPAL_SUCCESS != (ret = opal_carto_base_module-&gt;carto_module_init()) ) {
<br>
-            exit_status = ret;
<br>
-            goto cleanup;
<br>
-        }
<br>
+        exit_status = opal_carto_base_module-&gt;carto_module_init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return exit_status;
<br>
<p><p><p>On Jun 28, 2011, at 3:02 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using the carto/file module with a syntactically incorrect carto
</span><br>
<span class="quotelev1">&gt; file, we get stuck into opal_carto_base_select().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached trivial patch fixes the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;carto_base_select.patch&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9479.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9437.php">nadia.derbey: "[OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
<li><strong>Reply:</strong> <a href="9481.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails"</a>
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
