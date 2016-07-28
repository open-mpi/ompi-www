<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 16:12:10 2014" -->
<!-- isoreceived="20140227211210" -->
<!-- sent="Thu, 27 Feb 2014 21:12:09 +0000" -->
<!-- isosent="20140227211209" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte" -->
<!-- id="306B844E-3090-4EDB-98AC-D1CEC4EC3AA1_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="82822753-D6B2-4151-BACB-74463ECAE1AE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 16:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>In reply to:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, the following BTLs all have calls to abort() or ompi_rte_abort() within them:
<br>
<p>- usnic
<br>
- openib
<br>
- portals4
<br>
- the btl base itself
<br>
<p><p>On Feb 27, 2014, at 7:16 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The majority of places we call abort in this commit is actually down in a progress thread.  We didn't think it was safe to call the PML error function in a progress thread -- is that incorrect?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If not, then we probably should create some mechanism for doing so. I agree with George that we shouldn't call abort inside a library
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
<li><strong>Next message:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>In reply to:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Reply:</strong> <a href="14251.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
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
