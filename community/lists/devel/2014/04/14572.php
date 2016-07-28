<?
$subject_val = "Re: [OMPI devel] v1.8.1 release";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 09:47:52 2014" -->
<!-- isoreceived="20140422134752" -->
<!-- sent="Tue, 22 Apr 2014 13:47:50 +0000" -->
<!-- isosent="20140422134750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.1 release" -->
<!-- id="134553C7-2DF7-46B0-87EA-461737D237FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0E4C04E-D32A-4666-B4BE-7D341DE1EFDC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8.1 release<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-22 09:47:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14560.php">Ralph Castain: "[OMPI devel] v1.8.1 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I spoke with Ralph last night (he's still on vacation); there has been a change of plan.
<br>
<p>Unfortunately, the HEAD of the v1.8 branch is currently too unstable for immediate release (and we really need to do an immediate v1.8.1 release).  MTT is showing a bunch of MPI-layer failures.  It does not seem like a good idea to try to hurry the v1.8 branch to be releasable in the immediate timeframe (i.e., 24-48 hours).
<br>
<p>As such, the new plan is this:
<br>
<p>1. Release v1.8.1 which is exactly the v1.8[.0] tarball plus the session directory fixes.  It will be advertised as *only* the one critical bug fix beyond the v1.8 release.
<br>
<p>2. What we have been thinking of as &quot;v1.8.1&quot; will become &quot;v1.8.2&quot; and will be released at the same time that we had already planned (i.e., within a few weeks).  This release will be mentioned in the v1.8.1 release announcement (i.e., that the &quot;normal round of bug fixes will be coming within a few weeks&quot;, or something like that).
<br>
<p>This will give us time to stabilize all the fixes that have been put in the v1.8 branch and have a good v1.8.2 release.
<br>
<p>In terms of SVN, see the attached diagram for what it will look like.
<br>
<p><p>On Apr 18, 2014, at 12:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As several of you know, we have had a report of a rather nasty bug in the 1.8.0 release - only manifests itself if you run as root, but some people unfortunately do so. This necessitates that we release 1.8.1 with that bug fix in the next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to get as many of the pending bug fixes as possible AND appropriate into that release. I'm specifically looking at bug fixes that (a) involve minimal change, and (b) affect primary use cases. Things that are at all questionable as to whether they are appropriate for the 1.8 series, involve significant code change, are in ancillary code areas, or simply aren't able to be reviewed in time will be deferred to 1.8.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this way, I am hoping to avoid releasing 1.8.1 only to be followed a few weeks later with another bug fix release. Thus, my intention is to get 1.8.1 out next week, and delay release of 1.8.2 by at least two months.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What this means:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * PLEASE get your CMRs reviewed ASAP. This falls primarily on Nathan and Manju, and a bit on Pasha. See my comments below as to your deadlines!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * I have asked Jeff to defer the OSHMEM CMRs to 1.8.2 as (a) we have to define a policy for how we deal with that code area (not every commit should be CMRd to 1.8!), and it isn't in the primary use area at this time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * I have similarly asked Jeff to defer the Java CMR (and any new ones in that area) for the same reasons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I am on vacation all of next week, and I will *not* be responding to email during that time. I have asked Jeff to fill-in for me, and he has agreed to do so. He has my phone number in case he absolutely needs to call me about something, though I trust him enough to know that he won't do so unless absolutely necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff and I have talked and agreed on a target release date for 1.8.1 of Thurs, April 24th. This means we need to roll a release candidate Tues, April 22nd. So any CMR that has *not* been cleared by COB Mon April 23rd will automatically be deferred to 1.8.2 - exceptions will *only* be accepted in cases of demonstrated catastrophic behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate everyone's cooperation, and deeply appreciate Jeff taking on the additional burden during my absence.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14560.php">http://www.open-mpi.org/community/lists/devel/2014/04/14560.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14572/ompi-v1.8.1-release-plan.pdf">ompi-v1.8.1-release-plan.pdf</a>
</ul>
<!-- attachment="ompi-v1.8.1-release-plan.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14560.php">Ralph Castain: "[OMPI devel] v1.8.1 release"</a>
<!-- nextthread="start" -->
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
