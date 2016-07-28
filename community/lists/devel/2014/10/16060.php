<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:12:22 2014" -->
<!-- isoreceived="20141017141222" -->
<!-- sent="Fri, 17 Oct 2014 14:12:20 +0000" -->
<!-- isosent="20141017141220" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="453303E1-75E5-4E30-A77D-12140BF49365_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="874mv2ke4j.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16061.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2014, at 6:41 AM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The ompi repo only contains the master branch.  Releases are not made
</span><br>
<span class="quotelev2">&gt;&gt; from master, and therefore it doesn't make sense to tag it with
</span><br>
<span class="quotelev2">&gt;&gt; release tags.  master is therefore not (directly) related to any given
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can have tags in the repository without the branches, though I think
</span><br>
<span class="quotelev1">&gt; it's useful for a contributor to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  git checkout -b my/bug-fix maint-1.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; instead of making a patch off 'master' that needs to be back-ported to
</span><br>
<span class="quotelev1">&gt; the release.  The usual model is that one merges &quot;upward&quot; from the
</span><br>
<span class="quotelev1">&gt; maintenance branches to 'master'.
</span><br>
<p>We talked about this when we converted to git.  For better or for worse, this model is just not how the OMPI community has worked.  We typically develop on the trunk/master and then port to the release branches.  Developing directly on a release branch usually only occurs when there's a bug that only exists on the release branch (and not on trunk/master).
<br>
<p>Meaning: we deliberately chose not to change the development style of the community to &quot;develop on release branch&quot; when we moved to git.
<br>
<p><span class="quotelev1">&gt; But regardless, isn't it valuable to be able to query things like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  git log v1.8.0..master ompi/mpi/c/iallreduce.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  git branch -r --contains $bug_fix_commit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems to me that most people cloning open-mpi/ompi will want to fetch
</span><br>
<span class="quotelev1">&gt; From open-mpi/ompi-release regularly so they can have this context.
</span><br>
<p>Agreed.
<br>
<p>If github would implement per-branch push ACLs, then we'd squash down to a single repo, and all this would be easier.
<br>
<p>But given the relative inexperience with git in our community (which is noticeable via some mistakes on the ompi repo already!) and our history of only allowing regulated commits to release branches, we chose the (admittedly  somewhat awkward) 2-repo model.
<br>
<p><span class="quotelev1">&gt; That number will get big later
</span><br>
<p>Of course.
<br>
<p><span class="quotelev1">&gt; and it deprives you of context when you
</span><br>
<span class="quotelev1">&gt; have no idea whether &quot;dev-BIGNUMBER&quot; is earlier or later than a given
</span><br>
<span class="quotelev1">&gt; release.  (Does it have those features/bugs or not?)
</span><br>
<p>Even if OMPI was just in one git repo, the number of commits on master since dev is unrelated to a given release.
<br>
<p>Put differently: the dev tag is solely for ordering of nightly snapshot tarballs.
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
<li><strong>Next message:</strong> <a href="16061.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
