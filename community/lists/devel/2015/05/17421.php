<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 14:11:11 2015" -->
<!-- isoreceived="20150519181111" -->
<!-- sent="Tue, 19 May 2015 18:11:10 +0000" -->
<!-- isosent="20150519181110" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process" -->
<!-- id="AEBDB33E-C3C6-41B5-B9F4-DE01095F8DA5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9170B8B-B2AB-4507-802D-9C4A42C18050_at_gmail.com" -->
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
<strong>Date:</strong> 2015-05-19 14:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Previous message:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>In reply to:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Reply:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2015, at 12:36 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Our pr tests aren't good enough for what you propose
</span><br>
<p>I made no claim about whether PRs even needed automated testing in order to switch to this scheme.  Right now I could push any old garbage I want into the master directly without ever using a PR, without ever having had a code review, and without having had any sort of testing.  Automated PR testing is a separate issue and would be pure gravy here.
<br>
<p>The change would be whether or not it's OK to have some additional delay from the time a contributor decides a patch set is acceptable for inclusion in OMPI's master branch until the time that someone else with push access merges the PR.  It also requires that everyone is OK with having some limited set of people who can make those pull decisions.  IMO, both are fine.  Others may disagree.
<br>
<p>Alternatively, a half version of this would be to collapse to a single repository where only the release branch maintainers have direct push access, but allow PRs against master to be automatically merged by anyone by using the OMPIbot (with a &quot;bot:pullme&quot; comment or whatever).
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Previous message:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>In reply to:</strong> <a href="17420.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
<li><strong>Reply:</strong> <a href="17422.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number	and release process"</a>
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
