<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 08:12:18 2013" -->
<!-- isoreceived="20130928121218" -->
<!-- sent="Sat, 28 Sep 2013 14:12:11 +0200" -->
<!-- isosent="20130928121211" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="5246C79B.8060107_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8F6D82_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 08:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3906.php">Brice Goglin: "[hwloc-devel] commit messages"</a>
<li><strong>Previous message:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/09/2013 13:30, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Good catch; sorry about that. HWLOC_SVN_R no longer exists (as you
</span><br>
<span class="quotelev1">&gt; noted). I just removed that 4th argument to distscript.csh. Now,
</span><br>
<span class="quotelev1">&gt; distscript (on master and v1.7) only edits VERSION if snapshot=1 and
</span><br>
<span class="quotelev1">&gt; snapshot_version is empty (i.e., if you do &quot;make dist&quot; in a git clone
</span><br>
<span class="quotelev1">&gt; instead of running contrib/nightly/make_nightly_snapshot, which will
</span><br>
<span class="quotelev1">&gt; edit VERSION before running &quot;make distcheck&quot;).
</span><br>
<p>Thanks, things look better now.
<br>
<p><span class="quotelev1">&gt; Yes, these are good points.  I agree: the system is too complicated right now.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's go through the use cases of what we want:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. &quot;make dist&quot; in a developer's git clone.  This should make a &quot;hwloc-&lt;git describe&gt;.tar.*.
</span><br>
<p>This is actually the critical point, see below.
<br>
<p><span class="quotelev1">&gt; 2. make a nightly snapshot tarball.  The more I think about this, the more I think it's the same as #1, right?
</span><br>
<p>Yes, that's why I didn't understand why the create_tarball script also
<br>
modified VERSION to add git describe. These changes should be either
<br>
entirely outside of make dist (if we want git describe for nightly but
<br>
not for make dist) or entirely inside make dist (if we want for both).
<br>
<p><span class="quotelev1">&gt; 3. make a release tarball, &quot;hwloc-major.minor.releasegreek.tar.*&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these the three (or two, if #2 is the same as #1) use cases we want?  If so, I can see about making the code simpler -- e.g., I didn't know about overriding the VERSION Makefile macro trick...
</span><br>
<p>Changing VERSION on the command-line doesn't change the lstopo
<br>
--version, so it may not be what we really want. Also, if changing the
<br>
suffix is just a sed on VERSION file before autogen or configure, it's
<br>
fine too.
<br>
<p>This all depends on what we really want for (1).
<br>
* If we don't do (1), we can remove tons of lines of code from the
<br>
configury and just have the nightly and release scripts modify VERSION
<br>
before running autogen. Easy.
<br>
* If we do (1), that needs much more work.
<br>
<p>I actually don't care much about (1), I am used to tarballs without the
<br>
SVN revision suffix (not sure why I didn't always get that suffix). I
<br>
agree that it's convenient to have the suffix for developer builds (when
<br>
you want to compare several of them, when you distribute that tarball
<br>
for some reason, etc). But maybe the nightly script is enough for these
<br>
cases? Does it work with locally modified trees? Or trees that contain
<br>
additional commits? By the way, maybe move that script back from nightly
<br>
to dist.
<br>
<p><span class="quotelev1">&gt; Yeah, I'm a bit disappointed by the github email service hook (the config is here: <a href="https://github.com/open-mpi/hwloc/settings/hooks">https://github.com/open-mpi/hwloc/settings/hooks</a>; scroll down to &quot;Email&quot;).  There's *very* little configuration available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the address to send to
</span><br>
<span class="quotelev1">&gt; - an email address secret
</span><br>
<span class="quotelev1">&gt; - what address to send from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no option for diffs (!), and no option to customize the mail/subject.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a favorite git commit emailing script?  We can probably use the generic github &quot;WebHook URLs&quot; hook (at the top of the list) and host the diff-emailing script at IU (or anywhere, actually).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I use the attached one for Open-MX and KNEM. Not sure I tried many of
<br>
them, but this one worked fine so far. It generates messages such as:
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="http://lists.gforge.inria.fr/pipermail/knem-commits/2013-July/000465.html">http://lists.gforge.inria.fr/pipermail/knem-commits/2013-July/000465.html</a>
<br>
I don't think it truncates the diff yet. We may want some separators
<br>
between commits too. All this shouldn't be hard to configure.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3905/my-post-receive-email">my-post-receive-email</a>
</ul>
<!-- attachment="my-post-receive-email" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3906.php">Brice Goglin: "[hwloc-devel] commit messages"</a>
<li><strong>Previous message:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
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
