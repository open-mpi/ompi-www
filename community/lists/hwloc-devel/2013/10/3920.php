<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 12:05:24 2013" -->
<!-- isoreceived="20131002160524" -->
<!-- sent="Wed, 2 Oct 2013 16:05:22 +0000" -->
<!-- isosent="20131002160522" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F916AD8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52483A0D.6090804_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] git / nightly builds<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 12:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3921.php">Brice Goglin: "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>Previous message:</strong> <a href="3919.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/09/3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/09/3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p><p>On Sep 29, 2013, at 10:32 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Now why do we still need a call to git-describe in get_version.sh? Isn't
</span><br>
<span class="quotelev1">&gt; this script supposed to just read what distscript.csh did? (which would
</span><br>
<span class="quotelev1">&gt; mean that &quot;if test -z &quot;$HWLOC_SNAPSHOT_VERSION&quot; is useless). Or do you
</span><br>
<span class="quotelev1">&gt; need that as a fallback for when we compile instead of doing make dist?
</span><br>
<span class="quotelev1">&gt; In one case, we force the snapshot by modifying VERSION (make dist), in
</span><br>
<span class="quotelev1">&gt; the other case we git describe at runtime (make). It would be good to
</span><br>
<span class="quotelev1">&gt; merge these two cases somehow.
</span><br>
<p>Basically, there's a (possibly artificial?) disparity between:
<br>
<p>1. running &quot;make dist&quot; from a developer clone
<br>
2. pre-processing VERSION to put in the describe version and then running &quot;make dist&quot; (i.e., the make_*_tarball scripts)
<br>
<p>Specifically, VERSION in the repo has:
<br>
<p>snapshot=1
<br>
snapshot_version=
<br>
<p>Ie., snapshot_version is blank.  Which is why get_version.sh will fill in the current &quot;git describe&quot; value if snapshot_version is blank.
<br>
<p>But you're right -- this is putting &quot;git describe&quot; in two places.  What if VERSION in the repo has:
<br>
<p>snapshot=1
<br>
snapshot_version=gitclone
<br>
<p>And therefore get_version.sh always just uses the snapshot_version value (because it will never be blank).  
<br>
<p>The downside of this is that &quot;make dist&quot; from a dev clone won't accurately represent the tree, but that's probably ok.  
<br>
<p>*** If you're kosher with this, I'll remove that extra logic from get_version.sh.  Maybe I'll make it error if &quot;snapshot_version&quot; is empty, or something.
<br>
<p><span class="quotelev2">&gt;&gt; 2. contrib/nightly/make_snapshot_tarball:
</span><br>
<span class="quotelev2">&gt;&gt;   - Invoked via cron on the build machine
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok I didn't know that there was so website-specific things in that
</span><br>
<span class="quotelev1">&gt; script. I assumed it was mainly a make distcheck (if so, I would have
</span><br>
<span class="quotelev1">&gt; tried to reuse it in the regression testing tool).
</span><br>
<p>K.  I think &quot;make dist[check]&quot; is the heart of everything (and the thing that is &quot;re-used&quot;, so to speak everywhere); the rest is processing that we do for whatever reason that the tarball is being built.
<br>
<p>Any other thoughts on how we can simplify things?
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
<li><strong>Next message:</strong> <a href="3921.php">Brice Goglin: "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>Previous message:</strong> <a href="3919.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/09/3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/09/3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
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
