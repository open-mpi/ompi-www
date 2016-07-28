<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 10:18:20 2014" -->
<!-- isoreceived="20140227151820" -->
<!-- sent="Thu, 27 Feb 2014 07:16:30 -0800" -->
<!-- isosent="20140227151630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte" -->
<!-- id="82822753-D6B2-4151-BACB-74463ECAE1AE_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F690C4E-DCF4-49EA-B487-EDD191B61A64_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 10:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14248.php">Paul Kapinos: "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>Previous message:</strong> <a href="14246.php">Jeff Squyres (jsquyres): "[OMPI devel] warning in openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2014, at 6:58 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 27, 2014, at 3:33 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m concerned about your usage of abort here. Looking at the code I noticed that you call RTE_ABORT deep inside the BTL stack. This is a significant divergence from our current behavior (except for USNIC apparently as the code is now in the 1.7). The BTLs are not deciders, but merely reporters. Any error should be reported upstream, and will be dealt with at that level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The majority of places we call abort in this commit is actually down in a progress thread.  We didn't think it was safe to call the PML error function in a progress thread -- is that incorrect?
</span><br>
<p>If not, then we probably should create some mechanism for doing so. I agree with George that we shouldn't call abort inside a library
<br>
<p><span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14248.php">Paul Kapinos: "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>Previous message:</strong> <a href="14246.php">Jeff Squyres (jsquyres): "[OMPI devel] warning in openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
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
