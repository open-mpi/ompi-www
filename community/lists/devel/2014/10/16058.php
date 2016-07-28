<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 09:41:18 2014" -->
<!-- isoreceived="20141017134118" -->
<!-- sent="Fri, 17 Oct 2014 08:41:16 -0500" -->
<!-- isosent="20141017134116" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="874mv2ke4j.fsf_at_jedbrown.org" -->
<!-- inreplyto="1CC0D610-6E7C-41B6-9AEA-48C25D1B100D_at_cisco.com" -->
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
<strong>Date:</strong> 2014-10-17 09:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; The ompi repo only contains the master branch.  Releases are not made
</span><br>
<span class="quotelev1">&gt; from master, and therefore it doesn't make sense to tag it with
</span><br>
<span class="quotelev1">&gt; release tags.  master is therefore not (directly) related to any given
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<p>You can have tags in the repository without the branches, though I think
<br>
it's useful for a contributor to
<br>
<p>&nbsp;&nbsp;git checkout -b my/bug-fix maint-1.8
<br>
<p>instead of making a patch off 'master' that needs to be back-ported to
<br>
the release.  The usual model is that one merges &quot;upward&quot; from the
<br>
maintenance branches to 'master'.
<br>
<p>But regardless, isn't it valuable to be able to query things like this?
<br>
<p>&nbsp;&nbsp;git log v1.8.0..master ompi/mpi/c/iallreduce.c
<br>
<p>&nbsp;&nbsp;git branch -r --contains $bug_fix_commit
<br>
<p>Seems to me that most people cloning open-mpi/ompi will want to fetch
<br>
From open-mpi/ompi-release regularly so they can have this context.
<br>
<p><span class="quotelev1">&gt; The &quot;dev&quot; tag is there so that we can make nightly tarballs with a
</span><br>
<span class="quotelev1">&gt; logical sequence (via &quot;git describe&quot;).  The &quot;dev&quot; tag is basically
</span><br>
<span class="quotelev1">&gt; there as the point at which we converted to git.  We could have put it
</span><br>
<span class="quotelev1">&gt; back at the beginning of time (i.e., equivalent to SVN r1 (i.e., the
</span><br>
<span class="quotelev1">&gt; first CVS commit!)), but it didn't really matter, so we just opted for
</span><br>
<span class="quotelev1">&gt; a dev that resulted in a smaller &quot;git describe&quot; number.
</span><br>
<p>That number will get big later and it deprives you of context when you
<br>
have no idea whether &quot;dev-BIGNUMBER&quot; is earlier or later than a given
<br>
release.  (Does it have those features/bugs or not?)
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16058/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
