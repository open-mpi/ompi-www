<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number and release process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 20:05:28 2015" -->
<!-- isoreceived="20150519000528" -->
<!-- sent="Tue, 19 May 2015 09:05:28 +0900" -->
<!-- isosent="20150519000528" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number and release process" -->
<!-- id="555A7E48.9000105_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proposal: update Open MPI's version number and release process<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-18 20:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mark,
<br>
<p>ideally, we would like to use a single repository with the following 
<br>
constraints :
<br>
- all Open MPI developers can commit to the master
<br>
- only Release Manager and Gatekeepers can commit to the release branch 
<br>
(v1.8, ...)
<br>
<p>unfortunatly, github does not (yet ?) implement per branch access 
<br>
control list (ACL)
<br>
and this is the only reason why we have to use (at least) two repositories :
<br>
ompi for the master branch and ompi-release for the releases (v1.8, ...) 
<br>
branch
<br>
<p>This is unfortunate and independent of the new release process described 
<br>
by Jeff,
<br>
and my guess is we will move to a single repository as soon as github 
<br>
implements
<br>
per branch ACL
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 5/19/2015 6:03 AM, Mark Santcroos wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff, all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for bringing this to the wider community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this will eventually address my main concern: the relatively old versions that get deployed on HPC systems around the world, which I assume is/was because of the &quot;odd ;-)&quot; numbering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I didn't see in the doc, will you continue to work with two repo's or will that change too?
</span><br>
<span class="quotelev1">&gt; (I found that confusing as a newcomer)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 18 May 2015, at 21:11 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Devel community --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Over the past few weeks, the core Open MPI members have been internally discussing a proposal to change to the version numbering of Open MPI public releases.  We've reached internal consensus, and would like to present this to the larger community for feedback.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the short version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. No longer use an &quot;odd/even&quot; release strategy: *all* releases will be good/stable releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. (Still) Use a MAJOR.MINOR.RELEASE version triple:
</span><br>
<span class="quotelev2">&gt;&gt;    - When we fork a new release branch from master, we bump the MAJOR number.
</span><br>
<span class="quotelev2">&gt;&gt;    - When we add new features, we bump the MINOR number.
</span><br>
<span class="quotelev2">&gt;&gt;    - All other releases bump the RELEASE number.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Backwards compatibility will (still) be preserved for the duration of an entire release branch (i.e., for all versions with a common MAJOR number).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Release series (i.e., releases with the same MAJOR number) aim to have active development for about 1 year (i.e., new features, etc.).  They will continue to be supported (i.e., have bug-fix releases) for about a year after that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. We aim to fork from master for a new MAJOR series about once a year.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. The v1.8 series will still abide by the &quot;old&quot; version numbering scheme (i.e., only bug fixes applied to future v1.8.x releases).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's more detail:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See the attached slides.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-release-process-proposal-public.pptx&gt;&lt;ompi-release-process-proposal-public.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17414.php">http://www.open-mpi.org/community/lists/devel/2015/05/17414.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17415.php">http://www.open-mpi.org/community/lists/devel/2015/05/17415.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number and	release process"</a>
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
