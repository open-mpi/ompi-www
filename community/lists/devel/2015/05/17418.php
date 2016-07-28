<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 06:08:36 2015" -->
<!-- isoreceived="20150519100836" -->
<!-- sent="Tue, 19 May 2015 10:08:34 +0000" -->
<!-- isosent="20150519100834" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number and	release process" -->
<!-- id="12E6998B-D3E9-4098-AFF6-7FEF89C2FF2A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6BF67955-4628-4B1A-8ED4-6591489A6387_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proposal: update Open MPI's version number and	release process<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 06:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<li><strong>Previous message:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<li><strong>Reply:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2015, at 5:03 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for bringing this to the wider community.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this will eventually address my main concern: the relatively old versions that get deployed on HPC systems around the world, which I assume is/was because of the &quot;odd ;-)&quot; numbering.
</span><br>
<p>Yeah, we're hoping that, too.  From what we've seen, the odd/even scheme does appear to be a prime reason that this happens.
<br>
<p><span class="quotelev1">&gt; What I didn't see in the doc, will you continue to work with two repo's or will that change too?
</span><br>
<span class="quotelev1">&gt; (I found that confusing as a newcomer)
</span><br>
<p>Unfortunately, yes, we will keep 2 repos.  Github doesn't let us have per-branch permissions -- having multiple repos is the only way to have strict control over who can push to release branches.  Sad panda.
<br>
<p>If Github ever does enact per-branch permissions, we will happily squash back down to a single repo.
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
<li><strong>Next message:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<li><strong>Previous message:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<li><strong>Reply:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
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
