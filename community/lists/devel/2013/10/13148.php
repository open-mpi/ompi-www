<?
$subject_val = "Re: [OMPI devel] SHMEM v1.7 merge proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 06:35:53 2013" -->
<!-- isoreceived="20131029103553" -->
<!-- sent="Tue, 29 Oct 2013 10:35:50 +0000" -->
<!-- isosent="20131029103550" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM v1.7 merge proposal" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9985F1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1Kya49vXoi+kNU+N=PE4w_fne32OkqQ-ajjyDMRhL7SFtog_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SHMEM v1.7 merge proposal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 06:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>In reply to:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Brian's point is that it should be a SVN branch.
<br>
<p><p>On Oct 29, 2013, at 3:27 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; This is exactly the way we handle it now. We have internal branch on top of v1.7 with all SHMEM code in it.
</span><br>
<span class="quotelev1">&gt; It runs mtt and other tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once we done with all changes - we will provide patch (and branch direct access if needed) for GK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards
</span><br>
<span class="quotelev1">&gt; Mike.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 29, 2013 at 1:02 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I talked today about the logistics of bringing the OpenSHMEM
</span><br>
<span class="quotelev1">&gt; code to the 1.7 release branch, as it's now a fairly large set of changes
</span><br>
<span class="quotelev1">&gt; from the trunk.  What we propose is to follow the same proceedure we used
</span><br>
<span class="quotelev1">&gt; when merging in the RTE framework change, which is essentially a staging
</span><br>
<span class="quotelev1">&gt; branch.  So, Mellanox (as the one filing the CMR) would branch from 1.7,
</span><br>
<span class="quotelev1">&gt; bring the OpenSHMEM changes into that (and hopefully test), and then file
</span><br>
<span class="quotelev1">&gt; a single CMR for the changes from the branch.  If done properly, the GK
</span><br>
<span class="quotelev1">&gt; then only has to merge with --reintegrate and we're set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's talk about it on the call tomorrow, but that's the current proposal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>In reply to:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
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
