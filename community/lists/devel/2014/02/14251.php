<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 16:21:33 2014" -->
<!-- isoreceived="20140227212133" -->
<!-- sent="Thu, 27 Feb 2014 21:21:31 +0000" -->
<!-- isosent="20140227212131" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte" -->
<!-- id="E1A3B56C-7AF5-48BC-B058-845D5C39C9B8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="306B844E-3090-4EDB-98AC-D1CEC4EC3AA1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 16:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Speaking of which, shouldn't the OB1 error handler send the error message string that it received as the 4th param to ompi_rte_abort() so that it can be printed out?
<br>
<p><p>Index: ompi/mca/pml/ob1/pml_ob1.c
<br>
===================================================================
<br>
--- ompi/mca/pml/ob1/pml_ob1.c	(revision 30877)
<br>
+++ ompi/mca/pml/ob1/pml_ob1.c	(working copy)
<br>
@@ -780,7 +780,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif /* OPAL_CUDA_SUPPORT */
<br>
-    ompi_rte_abort(-1, NULL);
<br>
+    ompi_rte_abort(-1, btlinfo);
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;#if OPAL_ENABLE_FT_CR    == 0
<br>
<p><p><p>On Feb 27, 2014, at 1:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, the following BTLs all have calls to abort() or ompi_rte_abort() within them:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - usnic
</span><br>
<span class="quotelev1">&gt; - openib
</span><br>
<span class="quotelev1">&gt; - portals4
</span><br>
<span class="quotelev1">&gt; - the btl base itself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2014, at 7:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The majority of places we call abort in this commit is actually down in a progress thread.  We didn't think it was safe to call the PML error function in a progress thread -- is that incorrect?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If not, then we probably should create some mechanism for doing so. I agree with George that we shouldn't call abort inside a library
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
<li><strong>Next message:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14252.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
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
