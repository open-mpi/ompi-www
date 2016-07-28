<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 13:12:31 2015" -->
<!-- isoreceived="20150519171231" -->
<!-- sent="Tue, 19 May 2015 17:12:29 +0000" -->
<!-- isosent="20150519171229" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process" -->
<!-- id="14F1AAA2-A5E6-498C-B944-CC600AE49730_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12E6998B-D3E9-4098-AFF6-7FEF89C2FF2A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 13:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Previous message:</strong> <a href="17418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process"</a>
<li><strong>In reply to:</strong> <a href="17418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Reply:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Reply:</strong> <a href="17427.php">Howard Pritchard: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2015, at 5:08 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 18, 2015, at 5:03 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I didn't see in the doc, will you continue to work with two repo's or will that change too?
</span><br>
<span class="quotelev2">&gt;&gt; (I found that confusing as a newcomer)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, yes, we will keep 2 repos.  Github doesn't let us have per-branch permissions -- having multiple repos is the only way to have strict control over who can push to release branches.  Sad panda.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If Github ever does enact per-branch permissions, we will happily squash back down to a single repo.
</span><br>
<p>The other way to solve this issue would be to stop treating the master as a general dumping ground for potentially unstable code where anyone can just push any time they want.  If we switched to using PRs for (essentially) all code that goes into master as well, then we wouldn't need two different sets of permissions.
<br>
<p>Back in the SVN days it was nice to have a trunk where people could freely check in work because there was no other good system for keeping track of your own work or sharing it with others.  But with Git we no longer have those problems.  I can easily organize multiple concurrent streams of private development, avoid losing work, and share work with others, all without committing to some centralized master branch.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Previous message:</strong> <a href="17418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process"</a>
<li><strong>In reply to:</strong> <a href="17418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Reply:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Reply:</strong> <a href="17427.php">Howard Pritchard: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
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
