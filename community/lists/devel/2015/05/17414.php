<?
$subject_val = "[OMPI devel] Proposal: update Open MPI's version number and release process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 15:11:50 2015" -->
<!-- isoreceived="20150518191150" -->
<!-- sent="Mon, 18 May 2015 19:11:30 +0000" -->
<!-- isosent="20150518191130" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Proposal: update Open MPI's version number and release process" -->
<!-- id="F7FB7DCF-D75C-4560-B979-81D89FDB8E39_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Proposal: update Open MPI's version number and release process<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-18 15:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Devel community --
<br>
<p>Over the past few weeks, the core Open MPI members have been internally discussing a proposal to change to the version numbering of Open MPI public releases.  We've reached internal consensus, and would like to present this to the larger community for feedback.
<br>
<p>Here's the short version:
<br>
<p>1. No longer use an &quot;odd/even&quot; release strategy: *all* releases will be good/stable releases.
<br>
<p>2. (Still) Use a MAJOR.MINOR.RELEASE version triple:
<br>
&nbsp;&nbsp;&nbsp;- When we fork a new release branch from master, we bump the MAJOR number.
<br>
&nbsp;&nbsp;&nbsp;- When we add new features, we bump the MINOR number.
<br>
&nbsp;&nbsp;&nbsp;- All other releases bump the RELEASE number.
<br>
<p>3. Backwards compatibility will (still) be preserved for the duration of an entire release branch (i.e., for all versions with a common MAJOR number).
<br>
<p>4. Release series (i.e., releases with the same MAJOR number) aim to have active development for about 1 year (i.e., new features, etc.).  They will continue to be supported (i.e., have bug-fix releases) for about a year after that.
<br>
<p>5. We aim to fork from master for a new MAJOR series about once a year.
<br>
<p>6. The v1.8 series will still abide by the &quot;old&quot; version numbering scheme (i.e., only bug fixes applied to future v1.8.x releases).
<br>
<p>Here's more detail:
<br>
<p>See the attached slides.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


</pre>
<hr>
<ul>
<li>application/vnd.openxmlformats-officedocument.presentationml.presentation attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17414/ompi-release-process-proposal-public.pptx">ompi-release-process-proposal-public.pptx</a>
</ul>
<!-- attachment="ompi-release-process-proposal-public.pptx" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17414/ompi-release-process-proposal-public.pdf">ompi-release-process-proposal-public.pdf</a>
</ul>
<!-- attachment="ompi-release-process-proposal-public.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17415.php">Mark Santcroos: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
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
