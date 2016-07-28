<?
$subject_val = "[OMPI devel] Git / Github branching and repo plans";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 17:19:22 2016" -->
<!-- isoreceived="20160714211922" -->
<!-- sent="Thu, 14 Jul 2016 21:19:19 +0000" -->
<!-- isosent="20160714211919" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Git / Github branching and repo plans" -->
<!-- id="363A9679-492F-4281-8F54-03ADCB0E4DE2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Git / Github branching and repo plans<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 17:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19214.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19212.php">Cabral, Matias A: "[OMPI devel] MPI_Init() affecting rand()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have talked about this on the weekly calls, but for those of you who have not been able to attend, here's a summary of our expected plans with git branches, github repos, etc.:
<br>
<p>1. v2.0.0 has been released.  Yay!
<br>
<p>2. A picture is worth 1,000 words: below is the git branching plan for the v2.x series going forward (more discussion below):
<br>
<p>[cid:A46BCBDC-157A-49DB-B3F0-D772072AED93_at_[hidden]]
<br>
<p>3. Today will be the end of the mandatory 2-day hold on merging anything into the v2.x branch.  We have this 2-day hold for the &quot;oh crud!&quot; factor after a large release -- i.e., in case anything major is discovered right after the release, we can do a small commit to fix the problem, and then re-release (without anything else new).  This means that tomorrow, Howard and I will start merging some of the existing v2.0.1 PRs.  We'll likely merge in several a day and let MTT and friends chug through them.  It'll probably only take a few days to chug through the v2.0.1 PRs -- most of them are small / low risk.
<br>
<p>4. As a reminder, v2.0.1 is ONLY for bug fixes.  No new features will be accepted.  Backwards compatibility with v2.0.0 MUST be preserved.
<br>
<p>5. Once we have finished merging most (all?) v2.0.1 PRs, we'll create a v2.0.x branch from the v2.x branch.  The v2.0.1 release (and subsequent v2.0.x releases) will come from that branch.
<br>
<p>6. The v2.x branch will continue on and eventually become v2.1.0.  v2.1.0 will be backwards compatible with v2.0.0.
<br>
<p>7. We may need to have pull requests to multiple release branches (e.g., to fix a bug in both v2.0.1 and v2.1.0).
<br>
<p>8. As a reminder, we have two Github repos: ompi and ompi-release.  ompi contains the development master, and ompi-release contains all the release branches.  We did this split because Github didn't used to support per-branch ACLs.  Now they do, and now that we have released v2.0.0 we can officially start thinking about folding the ompi-release repo back into the ompi repo.  ...however, as you all know, we're in the middle of migrating all of Open MPI's hosting infrastructure away from Indiana U., and that's taking quite a bit of time and effort.  As such, the &quot;fold ompi-release back into ompi&quot; plan may get delayed a bit.  Sorry folks -- there's only so many sysadmin-related cycles to go around, and the migration efforts have concrete deadlines.  :-\  Bear with us until we can get this done.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19213/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-19213/ompi-git-branches.png" alt="ompi-git-branches.png
">
<!-- attachment="ompi-git-branches.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19214.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn broken on master on RHEL7"</a>
<li><strong>Previous message:</strong> <a href="19212.php">Cabral, Matias A: "[OMPI devel] MPI_Init() affecting rand()"</a>
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
