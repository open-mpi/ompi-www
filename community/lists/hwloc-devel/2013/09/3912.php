<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 16:47:08 2013" -->
<!-- isoreceived="20130928204708" -->
<!-- sent="Sat, 28 Sep 2013 13:47:05 -0700" -->
<!-- isosent="20130928204705" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="CAAvDA15rFuVA_588RRh5ECd7hb5AXi4AnY9h=FbetmbCQ=w5wA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 16:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3911.php">Brice Goglin: "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>In reply to:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I am watching with intense interest, as GASNet will be moving to git on Nov
<br>
1.
<br>
Could you give me a pointer to where I can get copies all the scripts that
<br>
you guys use for nightly tarballs, commit emails and such?
<br>
I'll want to have look after you have all the wrinkles ironed out to your
<br>
satisfaction.
<br>
<p>FWIW: a viewpoint from somebody who has yet to actually try to implement
<br>
his ideas:
<br>
<p>We have PLANNED to script our nightlies to be named with a date stamp and 6
<br>
or 8 chars of the SHA1.
<br>
The format would be something like PROJECT-BRANCH-20130928-12abcdef.tar.gz
<br>
Where BRANCH=v&lt;major&gt;.&lt;minor&gt; for the UPCOMING release in most scenarios
<br>
(but could be a named feature branch like &quot;oshmem&quot;)
<br>
That way directory listings would sort by branch and date (simple for mere
<br>
humans) while the SHA1 would allow fetching the corresponding version from
<br>
git.  The full SHA1 would, of course, also be in a file in the tarball
<br>
(actual filename TBD).
<br>
<p>I don't think we consider &quot;git describe&quot; to be a useful naming mechanism
<br>
for nightlies, though for other snapshots it might be useful.
<br>
For RCs, we pan to tag something like &quot;1.7.3RC&quot; at the start of the RC
<br>
cycle to get &quot;git describe&quot; to give names containing &quot;1.7.3RC-&lt;N&gt;-&lt;hash&gt;&quot;
<br>
which make some sense at a glance, even though N is incremented with every
<br>
commit and may grow much higher than a contentional RC number would.
<br>
&nbsp;Again, &quot;1.7.3&quot; in this example is the UPCOMING release rather than the
<br>
previous one.
<br>
<p>For a developer's &quot;make dist&quot; from a developer's clone, however, I think we
<br>
agree &quot;git describe&quot; is as good as anything else readily available.
<br>
<p>So, in short: I think our plan aligns with yours on scenarios #1 (&quot;make
<br>
dist&quot; by Jane Developer) and #3 (official releases), but we wanted
<br>
something more people-friendly for #2 (nightly tarballs).
<br>
<p>-Paul
<br>
<p><p>On Sat, Sep 28, 2013 at 4:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Sep 28, 2013, at 4:41 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having lots of problems when switching the regression testing stuff
</span><br>
<span class="quotelev2">&gt; &gt; (jenkins) to git, mostly because of make dist. Actually it worked 2 days
</span><br>
<span class="quotelev2">&gt; &gt; ago, no it breaks because hwloc-unknown.tar.* remain after make
</span><br>
<span class="quotelev1">&gt; distcheck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means the versions junk still isn't right yet.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) There's something I don't understand in the dist scripts.
</span><br>
<span class="quotelev2">&gt; &gt; config/distscript.csh is only called the top-level Makefile.am, with 4th
</span><br>
<span class="quotelev2">&gt; &gt; argument = HWLOC_SVN_R, which is never set. So we always fallback to
</span><br>
<span class="quotelev2">&gt; &gt; git-describe. When building from a tarball, you get &quot;unknown&quot;. That
</span><br>
<span class="quotelev2">&gt; &gt; seems to break make distcheck. We need to pass something in that
</span><br>
<span class="quotelev2">&gt; &gt; argument, but I don't see what.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good catch; sorry about that.  HWLOC_SVN_R no longer exists (as you
</span><br>
<span class="quotelev1">&gt; noted).  I just removed that 4th argument to distscript.csh.  Now,
</span><br>
<span class="quotelev1">&gt; distscript (on master and v1.7) only edits VERSION if snapshot=1 and
</span><br>
<span class="quotelev1">&gt; snapshot_version is empty (i.e., if you do &quot;make dist&quot; in a git clone
</span><br>
<span class="quotelev1">&gt; instead of running contrib/nightly/make_nightly_snapshot, which will edit
</span><br>
<span class="quotelev1">&gt; VERSION before running &quot;make distcheck&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) VPATH dist support is more fragile than before (I always build under
</span><br>
<span class="quotelev2">&gt; &gt; $srcdir/build). In the past, we could do a VPATH make dist by just
</span><br>
<span class="quotelev2">&gt; &gt; symlinking srcdir/doc/doxygen-doc to builddir/doc/doxygen-doc. This now
</span><br>
<span class="quotelev2">&gt; &gt; generates &quot;unknown&quot; tarballs because we check for .git existence
</span><br>
<span class="quotelev2">&gt; &gt; explicitly. I fixed my own case by checking for ../.git as well but
</span><br>
<span class="quotelev2">&gt; &gt; that's not satisfying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm.  I preserved your ../.git check in
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/c2b7f3d3c713feadb1d2c5a7ccd747cb6673d249">https://github.com/open-mpi/hwloc/commit/c2b7f3d3c713feadb1d2c5a7ccd747cb6673d249</a>
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think I knew/realized you were doign VPATH dist builds by doing
</span><br>
<span class="quotelev1">&gt; the sym link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like we can fix this by checking for $srcdir/.git instead. If
</span><br>
<span class="quotelev2">&gt; &gt; we want VPATH support where $builddir isn't a child of $srcdir, we'll
</span><br>
<span class="quotelev2">&gt; &gt; have to set GIT_DIR=$srcdir/.git before calling git-describe too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think this is becoming way too complicated. Nobody won't be able to
</span><br>
<span class="quotelev2">&gt; &gt; maintain that code in a couple years. Worse, what if you leave Cisco and
</span><br>
<span class="quotelev2">&gt; &gt; stop working on hwloc one day? In my other projects, I would just
</span><br>
<span class="quotelev2">&gt; &gt; override the VERSION makefile variable on the make command-line to
</span><br>
<span class="quotelev2">&gt; &gt; change the tarball name (you won't get that VERSION in lstopo --version,
</span><br>
<span class="quotelev2">&gt; &gt; but you would still see 1.8a1 from configure). We should rethink what we
</span><br>
<span class="quotelev2">&gt; &gt; actually need here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, these are good points.  I agree: the system is too complicated right
</span><br>
<span class="quotelev1">&gt; now.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's go through the use cases of what we want:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. &quot;make dist&quot; in a developer's git clone.  This should make a &quot;hwloc-&lt;git
</span><br>
<span class="quotelev1">&gt; describe&gt;.tar.*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. make a nightly snapshot tarball.  The more I think about this, the more
</span><br>
<span class="quotelev1">&gt; I think it's the same as #1, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. make a release tarball, &quot;hwloc-major.minor.releasegreek.tar.*&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these the three (or two, if #2 is the same as #1) use cases we want?
</span><br>
<span class="quotelev1">&gt;  If so, I can see about making the code simpler -- e.g., I didn't know
</span><br>
<span class="quotelev1">&gt; about overriding the VERSION Makefile macro trick...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For instance if we can simpify things by not
</span><br>
<span class="quotelev2">&gt; &gt; building 1.8-final when we build 1.8-rcX, that'd be fine with me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that part is actually fairly simple; it just runs &quot;make dist&quot;,
</span><br>
<span class="quotelev1">&gt; strips out the greek value from VERSION, and runs &quot;make dist&quot; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Random other questions:
</span><br>
<span class="quotelev2">&gt; &gt; * where do you configure commit emails? can we drop/change the
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/hwloc subject prefix? I removed the hwloc-svn prefix from
</span><br>
<span class="quotelev2">&gt; &gt; mailman to avoid double-prefixing for now
</span><br>
<span class="quotelev2">&gt; &gt; * can we get commit diffs in email, with some truncation limit to 50kB
</span><br>
<span class="quotelev2">&gt; &gt; or so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, I'm a bit disappointed by the github email service hook (the config
</span><br>
<span class="quotelev1">&gt; is here: <a href="https://github.com/open-mpi/hwloc/settings/hooks">https://github.com/open-mpi/hwloc/settings/hooks</a>; scroll down to
</span><br>
<span class="quotelev1">&gt; &quot;Email&quot;).  There's *very* little configuration available:
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
<span class="quotelev1">&gt; There's no option for diffs (!), and no option to customize the
</span><br>
<span class="quotelev1">&gt; mail/subject.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a favorite git commit emailing script?  We can probably use
</span><br>
<span class="quotelev1">&gt; the generic github &quot;WebHook URLs&quot; hook (at the top of the list) and host
</span><br>
<span class="quotelev1">&gt; the diff-emailing script at IU (or anywhere, actually).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3911.php">Brice Goglin: "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>In reply to:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
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
