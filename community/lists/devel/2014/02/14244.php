<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 09:58:47 2014" -->
<!-- isoreceived="20140227145847" -->
<!-- sent="Thu, 27 Feb 2014 14:58:42 +0000" -->
<!-- isosent="20140227145842" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte" -->
<!-- id="5F690C4E-DCF4-49EA-B487-EDD191B61A64_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F377B823-F8D7-493F-98A4-A51673928DE6_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 09:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14245.php">Jeff Squyres (jsquyres): "[OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>In reply to:</strong> <a href="14241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2014, at 3:33 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m concerned about your usage of abort here. Looking at the code I noticed that you call RTE_ABORT deep inside the BTL stack. This is a significant divergence from our current behavior (except for USNIC apparently as the code is now in the 1.7). The BTLs are not deciders, but merely reporters. Any error should be reported upstream, and will be dealt with at that level.
</span><br>
<p>The majority of places we call abort in this commit is actually down in a progress thread.  We didn't think it was safe to call the PML error function in a progress thread -- is that incorrect?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14245.php">Jeff Squyres (jsquyres): "[OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>In reply to:</strong> <a href="14241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
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
