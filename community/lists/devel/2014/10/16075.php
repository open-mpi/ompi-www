<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 15:40:54 2014" -->
<!-- isoreceived="20141020194054" -->
<!-- sent="Mon, 20 Oct 2014 19:40:52 +0000" -->
<!-- isosent="20141020194052" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="49EC1211-536B-4ACB-95D2-43CD0021E0A3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87y4seiwaj.fsf_at_jedbrown.org" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-20 15:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16074.php">Paul Hargrove: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2014, at 9:51 AM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meaning: we deliberately chose not to change the development style of
</span><br>
<span class="quotelev2">&gt;&gt; the community to &quot;develop on release branch&quot; when we moved to git.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood.  It's your choice, but workflow is a big feature of Git.
</span><br>
<p>Jed, I initially advocated for a merge-based workflow when we were planning the transition to Git, but others in the community felt that it would be too painful to simultaneously learn a new VCS and invert the flow of development.  I'm still not 100% sure that sticking to the cherry-pick workflow was really the right call, but I've made peace with it for now.
<br>
<p>We can certainly live with this workflow for a while and change again later if desired.  Separating the shocks to non-git-comfortable developers is a good thing, IMO.
<br>
<p><span class="quotelev2">&gt;&gt; If github would implement per-branch push ACLs, then we'd squash down
</span><br>
<span class="quotelev2">&gt;&gt; to a single repo, and all this would be easier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But given the relative inexperience with git in our community (which
</span><br>
<span class="quotelev2">&gt;&gt; is noticeable via some mistakes on the ompi repo already!) and our
</span><br>
<span class="quotelev2">&gt;&gt; history of only allowing regulated commits to release branches, we
</span><br>
<span class="quotelev2">&gt;&gt; chose the (admittedly somewhat awkward) 2-repo model.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could push release tags to open-mpi/ompi without pushing the branches.
</span><br>
<p>I'm not sure this is less confusing.  It gives the illusion that &quot;ompi&quot; contains all of the release development as well, but in reality you need &quot;ompi-release&quot; to get anything beyond the latest tagged release.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; and it deprives you of context when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have no idea whether &quot;dev-BIGNUMBER&quot; is earlier or later than a given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release.  (Does it have those features/bugs or not?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Even if OMPI was just in one git repo, the number of commits on master
</span><br>
<span class="quotelev2">&gt;&gt; since dev is unrelated to a given release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If integration branches were merged upward, &quot;git describe&quot; would yield
</span><br>
<span class="quotelev1">&gt; names like v1.8.3-84-g51a7c90, which tells you immediately that it's 84
</span><br>
<span class="quotelev1">&gt; commits &quot;ahead&quot; of v1.8.3.
</span><br>
<p>You're not wrong about the advantages of a merge-based workflow.  I just don't think it changes what the community is choosing to do right now.
<br>
<p><span class="quotelev2">&gt;&gt; Put differently: the dev tag is solely for ordering of nightly snapshot tarballs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It affects git describe output as a side-effect and when someone writes
</span><br>
<span class="quotelev1">&gt; the mailing list with a bug in a year-old nightly snapshot, you'll need
</span><br>
<span class="quotelev1">&gt; to query the repository (or have a better memory than me) to have any
</span><br>
<span class="quotelev1">&gt; idea what they're working with.  Perhaps you are blessed with users that
</span><br>
<span class="quotelev1">&gt; don't do things like this.
</span><br>
<p>Checking the repo isn't particularly onerous, IMO.  It's a lot easier than searching old bug tickets, which you're also likely to need to do when dealing with bugs reported against old snapshots.  Also, there's almost no scenario where a user should be reporting bugs against a years-old &quot;master&quot; snapshot.  Snapshots from the release branches have more useful names (e.g., v1.8.3-39-gd07d53e).
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16074.php">Paul Hargrove: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16065.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
