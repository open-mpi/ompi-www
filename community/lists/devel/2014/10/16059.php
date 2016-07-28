<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:06:31 2014" -->
<!-- isoreceived="20141017140631" -->
<!-- sent="Fri, 17 Oct 2014 07:06:27 -0700" -->
<!-- isosent="20141017140627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="2BBB0341-2212-4B39-9E59-2E8205992DC4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 17, 2014, at 6:41 AM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The ompi repo only contains the master branch.  Releases are not made
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
<span class="quotelev1">&gt; maintenance branches to 'master&#226;&#128;&#153;.
</span><br>
<p>We go the other direction - all code must be committed to master so it can &#226;&#128;&#156;soak&#226;&#128;&#157; prior to moving to a release branch. The &#226;&#128;&#156;upward&#226;&#128;&#157; methodology works fine for stable situations where the master isn&#226;&#128;&#153;t changing much relative to the releases, but that generally isn&#226;&#128;&#153;t the case for OMPI.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But regardless, isn't it valuable to be able to query things like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  git log v1.8.0..master ompi/mpi/c/iallreduce.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  git branch -r --contains $bug_fix_commit
</span><br>
<p>Not really much different than we do today - the wiki explains how to make it work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems to me that most people cloning open-mpi/ompi will want to fetch
</span><br>
<span class="quotelev1">&gt; From open-mpi/ompi-release regularly so they can have this context.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;dev&quot; tag is there so that we can make nightly tarballs with a
</span><br>
<span class="quotelev2">&gt;&gt; logical sequence (via &quot;git describe&quot;).  The &quot;dev&quot; tag is basically
</span><br>
<span class="quotelev2">&gt;&gt; there as the point at which we converted to git.  We could have put it
</span><br>
<span class="quotelev2">&gt;&gt; back at the beginning of time (i.e., equivalent to SVN r1 (i.e., the
</span><br>
<span class="quotelev2">&gt;&gt; first CVS commit!)), but it didn't really matter, so we just opted for
</span><br>
<span class="quotelev2">&gt;&gt; a dev that resulted in a smaller &quot;git describe&quot; number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That number will get big later and it deprives you of context when you
</span><br>
<span class="quotelev1">&gt; have no idea whether &quot;dev-BIGNUMBER&quot; is earlier or later than a given
</span><br>
<span class="quotelev1">&gt; release.  (Does it have those features/bugs or not?)
</span><br>
<p>Not sure this has ever been an issue before, to be honest.
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16058.php">http://www.open-mpi.org/community/lists/devel/2014/10/16058.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16058.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
