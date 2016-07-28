<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:51:49 2014" -->
<!-- isoreceived="20141017145149" -->
<!-- sent="Fri, 17 Oct 2014 09:51:48 -0500" -->
<!-- isosent="20141017145148" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="87y4seiwaj.fsf_at_jedbrown.org" -->
<!-- inreplyto="453303E1-75E5-4E30-A77D-12140BF49365_at_cisco.com" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:51:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16066.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-118-ge3be1fb"</a>
<li><strong>Previous message:</strong> <a href="16064.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16075.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16075.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Meaning: we deliberately chose not to change the development style of
</span><br>
<span class="quotelev1">&gt; the community to &quot;develop on release branch&quot; when we moved to git.
</span><br>
<p>Understood.  It's your choice, but workflow is a big feature of Git.
<br>
<p><span class="quotelev2">&gt;&gt; Seems to me that most people cloning open-mpi/ompi will want to fetch
</span><br>
<span class="quotelev2">&gt;&gt; From open-mpi/ompi-release regularly so they can have this context.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If github would implement per-branch push ACLs, then we'd squash down
</span><br>
<span class="quotelev1">&gt; to a single repo, and all this would be easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But given the relative inexperience with git in our community (which
</span><br>
<span class="quotelev1">&gt; is noticeable via some mistakes on the ompi repo already!) and our
</span><br>
<span class="quotelev1">&gt; history of only allowing regulated commits to release branches, we
</span><br>
<span class="quotelev1">&gt; chose the (admittedly somewhat awkward) 2-repo model.
</span><br>
<p>You could push release tags to open-mpi/ompi without pushing the branches.
<br>
<p><span class="quotelev2">&gt;&gt; and it deprives you of context when you
</span><br>
<span class="quotelev2">&gt;&gt; have no idea whether &quot;dev-BIGNUMBER&quot; is earlier or later than a given
</span><br>
<span class="quotelev2">&gt;&gt; release.  (Does it have those features/bugs or not?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even if OMPI was just in one git repo, the number of commits on master
</span><br>
<span class="quotelev1">&gt; since dev is unrelated to a given release.
</span><br>
<p>If integration branches were merged upward, &quot;git describe&quot; would yield
<br>
names like v1.8.3-84-g51a7c90, which tells you immediately that it's 84
<br>
commits &quot;ahead&quot; of v1.8.3.
<br>
<p><span class="quotelev1">&gt; Put differently: the dev tag is solely for ordering of nightly snapshot tarballs.
</span><br>
<p>It affects git describe output as a side-effect and when someone writes
<br>
the mailing list with a bug in a year-old nightly snapshot, you'll need
<br>
to query the repository (or have a better memory than me) to have any
<br>
idea what they're working with.  Perhaps you are blessed with users that
<br>
don't do things like this.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16065/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16066.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-118-ge3be1fb"</a>
<li><strong>Previous message:</strong> <a href="16064.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16075.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16075.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
