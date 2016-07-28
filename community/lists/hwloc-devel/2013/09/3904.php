<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 07:30:33 2013" -->
<!-- isoreceived="20130928113033" -->
<!-- sent="Sat, 28 Sep 2013 11:30:31 +0000" -->
<!-- isosent="20130928113031" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8F6D82_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52469656.70707_at_inria.fr" -->
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
<strong>Date:</strong> 2013-09-28 07:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3903.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3903.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2013, at 4:41 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am having lots of problems when switching the regression testing stuff
</span><br>
<span class="quotelev1">&gt; (jenkins) to git, mostly because of make dist. Actually it worked 2 days
</span><br>
<span class="quotelev1">&gt; ago, no it breaks because hwloc-unknown.tar.* remain after make distcheck.
</span><br>
<p>This means the versions junk still isn't right yet.  :-\
<br>
<p><span class="quotelev1">&gt; 1) There's something I don't understand in the dist scripts.
</span><br>
<span class="quotelev1">&gt; config/distscript.csh is only called the top-level Makefile.am, with 4th
</span><br>
<span class="quotelev1">&gt; argument = HWLOC_SVN_R, which is never set. So we always fallback to
</span><br>
<span class="quotelev1">&gt; git-describe. When building from a tarball, you get &quot;unknown&quot;. That
</span><br>
<span class="quotelev1">&gt; seems to break make distcheck. We need to pass something in that
</span><br>
<span class="quotelev1">&gt; argument, but I don't see what.
</span><br>
<p>Good catch; sorry about that.  HWLOC_SVN_R no longer exists (as you noted).  I just removed that 4th argument to distscript.csh.  Now, distscript (on master and v1.7) only edits VERSION if snapshot=1 and snapshot_version is empty (i.e., if you do &quot;make dist&quot; in a git clone instead of running contrib/nightly/make_nightly_snapshot, which will edit VERSION before running &quot;make distcheck&quot;).
<br>
<p><span class="quotelev1">&gt; 2) VPATH dist support is more fragile than before (I always build under
</span><br>
<span class="quotelev1">&gt; $srcdir/build). In the past, we could do a VPATH make dist by just
</span><br>
<span class="quotelev1">&gt; symlinking srcdir/doc/doxygen-doc to builddir/doc/doxygen-doc. This now
</span><br>
<span class="quotelev1">&gt; generates &quot;unknown&quot; tarballs because we check for .git existence
</span><br>
<span class="quotelev1">&gt; explicitly. I fixed my own case by checking for ../.git as well but
</span><br>
<span class="quotelev1">&gt; that's not satisfying.
</span><br>
<p>Mmm.  I preserved your ../.git check in <a href="https://github.com/open-mpi/hwloc/commit/c2b7f3d3c713feadb1d2c5a7ccd747cb6673d249">https://github.com/open-mpi/hwloc/commit/c2b7f3d3c713feadb1d2c5a7ccd747cb6673d249</a>.
<br>
<p>I don't think I knew/realized you were doign VPATH dist builds by doing the sym link.
<br>
<p><span class="quotelev1">&gt; It looks like we can fix this by checking for $srcdir/.git instead. If
</span><br>
<span class="quotelev1">&gt; we want VPATH support where $builddir isn't a child of $srcdir, we'll
</span><br>
<span class="quotelev1">&gt; have to set GIT_DIR=$srcdir/.git before calling git-describe too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this is becoming way too complicated. Nobody won't be able to
</span><br>
<span class="quotelev1">&gt; maintain that code in a couple years. Worse, what if you leave Cisco and
</span><br>
<span class="quotelev1">&gt; stop working on hwloc one day? In my other projects, I would just
</span><br>
<span class="quotelev1">&gt; override the VERSION makefile variable on the make command-line to
</span><br>
<span class="quotelev1">&gt; change the tarball name (you won't get that VERSION in lstopo --version,
</span><br>
<span class="quotelev1">&gt; but you would still see 1.8a1 from configure). We should rethink what we
</span><br>
<span class="quotelev1">&gt; actually need here.
</span><br>
<p>Yes, these are good points.  I agree: the system is too complicated right now.  :-\
<br>
<p>Let's go through the use cases of what we want:
<br>
<p>1. &quot;make dist&quot; in a developer's git clone.  This should make a &quot;hwloc-&lt;git describe&gt;.tar.*.
<br>
<p>2. make a nightly snapshot tarball.  The more I think about this, the more I think it's the same as #1, right?
<br>
<p>3. make a release tarball, &quot;hwloc-major.minor.releasegreek.tar.*&quot;.
<br>
<p>Are these the three (or two, if #2 is the same as #1) use cases we want?  If so, I can see about making the code simpler -- e.g., I didn't know about overriding the VERSION Makefile macro trick...
<br>
<p><span class="quotelev1">&gt; For instance if we can simpify things by not
</span><br>
<span class="quotelev1">&gt; building 1.8-final when we build 1.8-rcX, that'd be fine with me.
</span><br>
<p>I think that part is actually fairly simple; it just runs &quot;make dist&quot;, strips out the greek value from VERSION, and runs &quot;make dist&quot; again.
<br>
<p><span class="quotelev1">&gt; Random other questions:
</span><br>
<span class="quotelev1">&gt; * where do you configure commit emails? can we drop/change the
</span><br>
<span class="quotelev1">&gt; open-mpi/hwloc subject prefix? I removed the hwloc-svn prefix from
</span><br>
<span class="quotelev1">&gt; mailman to avoid double-prefixing for now
</span><br>
<span class="quotelev1">&gt; * can we get commit diffs in email, with some truncation limit to 50kB
</span><br>
<span class="quotelev1">&gt; or so?
</span><br>
<p>Yeah, I'm a bit disappointed by the github email service hook (the config is here: <a href="https://github.com/open-mpi/hwloc/settings/hooks">https://github.com/open-mpi/hwloc/settings/hooks</a>; scroll down to &quot;Email&quot;).  There's *very* little configuration available:
<br>
<p>- the address to send to
<br>
- an email address secret
<br>
- what address to send from
<br>
<p>There's no option for diffs (!), and no option to customize the mail/subject.  :-\
<br>
<p>Do you have a favorite git commit emailing script?  We can probably use the generic github &quot;WebHook URLs&quot; hook (at the top of the list) and host the diff-emailing script at IU (or anywhere, actually).
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
<li><strong>Next message:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3903.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3903.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3905.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
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
