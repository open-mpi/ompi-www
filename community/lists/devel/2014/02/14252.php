<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 16:48:41 2014" -->
<!-- isoreceived="20140227214841" -->
<!-- sent="Thu, 27 Feb 2014 13:48:39 -0800" -->
<!-- isosent="20140227214839" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36019F2E5ED_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1A3B56C-7AF5-48BC-B058-845D5C39C9B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 16:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could.  I added that argument 4 years ago to support by my failover work with the BFO.  It was a way for a BTL to pass some type of string back to the PML telling the PML who it was for verbose output to understand what was happening. 
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;(jsquyres)
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, February 27, 2014 4:22 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in
</span><br>
<span class="quotelev1">&gt;trunk/ompi/mca: btl/usnic rte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Speaking of which, shouldn't the OB1 error handler send the error message
</span><br>
<span class="quotelev1">&gt;string that it received as the 4th param to ompi_rte_abort() so that it can be
</span><br>
<span class="quotelev1">&gt;printed out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Index: ompi/mca/pml/ob1/pml_ob1.c
</span><br>
<span class="quotelev1">&gt;===========================================================
</span><br>
<span class="quotelev1">&gt;========
</span><br>
<span class="quotelev1">&gt;--- ompi/mca/pml/ob1/pml_ob1.c	(revision 30877)
</span><br>
<span class="quotelev1">&gt;+++ ompi/mca/pml/ob1/pml_ob1.c	(working copy)
</span><br>
<span class="quotelev1">&gt;@@ -780,7 +780,7 @@
</span><br>
<span class="quotelev1">&gt;         return;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #endif /* OPAL_CUDA_SUPPORT */
</span><br>
<span class="quotelev1">&gt;-    ompi_rte_abort(-1, NULL);
</span><br>
<span class="quotelev1">&gt;+    ompi_rte_abort(-1, btlinfo);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_CR    == 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 27, 2014, at 1:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, the following BTLs all have calls to abort() or ompi_rte_abort() within
</span><br>
<span class="quotelev1">&gt;them:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - usnic
</span><br>
<span class="quotelev2">&gt;&gt; - openib
</span><br>
<span class="quotelev2">&gt;&gt; - portals4
</span><br>
<span class="quotelev2">&gt;&gt; - the btl base itself
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 27, 2014, at 7:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The majority of places we call abort in this commit is actually down in a
</span><br>
<span class="quotelev1">&gt;progress thread.  We didn't think it was safe to call the PML error function in a
</span><br>
<span class="quotelev1">&gt;progress thread -- is that incorrect?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, then we probably should create some mechanism for doing so. I
</span><br>
<span class="quotelev1">&gt;agree with George that we shouldn't call abort inside a library
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
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
