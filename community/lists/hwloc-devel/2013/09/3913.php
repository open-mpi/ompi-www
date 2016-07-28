<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 29 08:00:55 2013" -->
<!-- isoreceived="20130929120055" -->
<!-- sent="Sun, 29 Sep 2013 12:00:54 +0000" -->
<!-- isosent="20130929120054" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F906362_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5246C79B.8060107_at_inria.fr" -->
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
<strong>Date:</strong> 2013-09-29 08:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2013, at 8:12 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Let's go through the use cases of what we want:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. &quot;make dist&quot; in a developer's git clone.  This should make a &quot;hwloc-&lt;git describe&gt;.tar.*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is actually the critical point, see below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. make a nightly snapshot tarball.  The more I think about this, the more I think it's the same as #1, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that's why I didn't understand why the create_tarball script also
</span><br>
<span class="quotelev1">&gt; modified VERSION to add git describe. These changes should be either
</span><br>
<span class="quotelev1">&gt; entirely outside of make dist (if we want git describe for nightly but
</span><br>
<span class="quotelev1">&gt; not for make dist) or entirely inside make dist (if we want for both).
</span><br>
<p>Agreed.  Let's have distscript.csh be the one that sets the git-describe value in VERSION (more below).
<br>
<p><span class="quotelev2">&gt;&gt; 3. make a release tarball, &quot;hwloc-major.minor.releasegreek.tar.*&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are these the three (or two, if #2 is the same as #1) use cases we want?  If so, I can see about making the code simpler -- e.g., I didn't know about overriding the VERSION Makefile macro trick...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changing VERSION on the command-line doesn't change the lstopo
</span><br>
<span class="quotelev1">&gt; --version, so it may not be what we really want. Also, if changing the
</span><br>
<span class="quotelev1">&gt; suffix is just a sed on VERSION file before autogen or configure, it's
</span><br>
<span class="quotelev1">&gt; fine too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This all depends on what we really want for (1).
</span><br>
<span class="quotelev1">&gt; * If we don't do (1), we can remove tons of lines of code from the
</span><br>
<span class="quotelev1">&gt; configury and just have the nightly and release scripts modify VERSION
</span><br>
<span class="quotelev1">&gt; before running autogen. Easy.
</span><br>
<span class="quotelev1">&gt; * If we do (1), that needs much more work.
</span><br>
<p>I'm not sure I agree.  Let me review the 3 scripts and what each does (and why):
<br>
<p>1. config/distscript.csh:
<br>
&nbsp;&nbsp;&nbsp;- Called by &quot;make dist[check]&quot;
<br>
&nbsp;&nbsp;&nbsp;- Does 3 main things:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Sets git-describe value in VERSION file (but only if snapshot=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Generates/copies doxygen output files to the dist tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; We wanted to not require users to have doxygen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; We also wanted to ship final doxygen output in tarballs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; This created quite a bit of complexity in itself
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Get new config.guess and config.sub files from git.savannah.gnu.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; This code is from when GNU Autotools releases were few and far between; it may not be necessary any more.  We might well be able to just remove this code and still be fine.
<br>
<p>2. contrib/nightly/make_snapshot_tarball:
<br>
&nbsp;&nbsp;&nbsp;- Invoked via cron on the build machine
<br>
&nbsp;&nbsp;&nbsp;- Very specifically written to interact with the web download tree
<br>
&nbsp;&nbsp;&nbsp;- Generally does the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Gets a new git clone (into a unique directory)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Compares output from &quot;git describe ...&quot; to latest_snapshot.txt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) If they're the same, exit 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; If there are no commits since last tarball, no need to do anything
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Run autogen, configure, make distcheck.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e) Move resulting tarballs to the web download directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e) Re-generate md5sums.txt/sha1sums.txt
<br>
<p>3. contrib/dist/make_dist_tarball:
<br>
&nbsp;&nbsp;&nbsp;- Invoked manually by a human when making releases
<br>
&nbsp;&nbsp;&nbsp;- Generally does the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Check versions of GNU Autotools
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; To ensure to use *the same* versions of the Autotools for an entire release series
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Update VERSION file with the release date
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) Run autogen + configure, build doxygen docs, build README, run make distcheck
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Remove &quot;greek&quot; value from VERSION and run c) again
<br>
<p><span class="quotelev1">&gt; I actually don't care much about (1), I am used to tarballs without the
</span><br>
<span class="quotelev1">&gt; SVN revision suffix (not sure why I didn't always get that suffix). I
</span><br>
<span class="quotelev1">&gt; agree that it's convenient to have the suffix for developer builds (when
</span><br>
<span class="quotelev1">&gt; you want to compare several of them, when you distribute that tarball
</span><br>
<span class="quotelev1">&gt; for some reason, etc). But maybe the nightly script is enough for these
</span><br>
<span class="quotelev1">&gt; cases? Does it work with locally modified trees? Or trees that contain
</span><br>
<span class="quotelev1">&gt; additional commits?
</span><br>
<p>No, it gets a fresh clone every night.  The intent was that this script runs in an automated fashion, and sometimes the build fails.  So it leaves the failed clone/build in a place where a human can go post-mortem the tree and figure out why the build failed.
<br>
<p>But to be fair, this hasn't been a big issue for hwloc (it has with Open MPI -- e.g., &quot;make dist&quot; works for developers, but it failed on the build machine.  So it was really helpful to be able to login as mpiteam_at_build_machine and go look into the build tree and see WTF happened).
<br>
<p>It also specifically interacts with the web download tree.  To be clear: this script is all about deciding whether to make a new snapshot, and if so, run &quot;make dist&quot; to do so, and then copies to results to the web tree.
<br>
<p>The core of this is:
<br>
<p>- *all* use cases run &quot;make dist&quot;; config/distscript.csh is used by all of them
<br>
- make_dist_tarball is some additional accounting surrounding &quot;make dist&quot;
<br>
- make_snapshot_tarball is some additional (different) accounting surrounding &quot;make dist&quot;
<br>
<p>All that being said, I think 2 immediate improvements/simplifications are:
<br>
<p>- have make_snapshot_tarball not set &quot;git describe&quot; in VERSION
<br>
- remove the config.guess/config.sub fetching from distscript.csh
<br>
<p>I'll commit those now.
<br>
<p>However, for the other cases, I think that doxygen is our main culprit for complexity.  :-\  Meaning: I'm now not sure how to make them simpler...
<br>
<p>Thoughts?
<br>
<p><span class="quotelev1">&gt; By the way, maybe move that script back from nightly to dist.
</span><br>
<p>Sure; I don't have much of an opinion here.
<br>
<p><span class="quotelev2">&gt;&gt; Do you have a favorite git commit emailing script?  We can probably use the generic github &quot;WebHook URLs&quot; hook (at the top of the list) and host the diff-emailing script at IU (or anywhere, actually).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use the attached one for Open-MX and KNEM. Not sure I tried many of
</span><br>
<span class="quotelev1">&gt; them, but this one worked fine so far. It generates messages such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.gforge.inria.fr/pipermail/knem-commits/2013-July/000465.html">http://lists.gforge.inria.fr/pipermail/knem-commits/2013-July/000465.html</a>
</span><br>
<span class="quotelev1">&gt; I don't think it truncates the diff yet. We may want some separators
</span><br>
<span class="quotelev1">&gt; between commits too. All this shouldn't be hard to configure.
</span><br>
<p>It looks like github sends an HTTP post with the following information in it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://help.github.com/articles/post-receive-hooks">https://help.github.com/articles/post-receive-hooks</a>
<br>
<p>Do you have an easy place to host your script to try it out?  Or do you want to wait for IU to host it (i.e., tomorrow)?
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
<li><strong>Next message:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
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
