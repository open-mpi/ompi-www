<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 14:39:43 2015" -->
<!-- isoreceived="20150519183943" -->
<!-- sent="Tue, 19 May 2015 18:39:41 +0000" -->
<!-- isosent="20150519183941" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process" -->
<!-- id="5C52A175-B60E-46E6-93CC-7086917D3FC7_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="96B9F10B-8B36-4281-8C50-CBC533F25475_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 14:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17423.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<li><strong>In reply to:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17427.php">Howard Pritchard: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that now that we have several months of git/github under our belts, it seems like a natural topic to have in the upcoming face-to-face meeting of: how's it going? What's going well / not well?  What can we improve on?
<br>

<br>
Let's have this conversation then.
<br>

<br>

<br>
<span class="quotelev1">&gt; On May 19, 2015, at 2:22 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No thx &#240;&#159;&#152;&#137;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would rather not create code czars 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 19, 2015, at 12:11 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 19, 2015, at 12:36 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our pr tests aren't good enough for what you propose
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I made no claim about whether PRs even needed automated testing in order to switch to this scheme.  Right now I could push any old garbage I want into the master directly without ever using a PR, without ever having had a code review, and without having had any sort of testing.  Automated PR testing is a separate issue and would be pure gravy here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The change would be whether or not it's OK to have some additional delay from the time a contributor decides a patch set is acceptable for inclusion in OMPI's master branch until the time that someone else with push access merges the PR.  It also requires that everyone is OK with having some limited set of people who can make those pull decisions.  IMO, both are fine.  Others may disagree.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, a half version of this would be to collapse to a single repository where only the release branch maintainers have direct push access, but allow PRs against master to be automatically merged by anyone by using the OMPIbot (with a &quot;bot:pullme&quot; comment or whatever).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17421.php">http://www.open-mpi.org/community/lists/devel/2015/05/17421.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17422.php">http://www.open-mpi.org/community/lists/devel/2015/05/17422.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17423.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<li><strong>In reply to:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17427.php">Howard Pritchard: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
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
