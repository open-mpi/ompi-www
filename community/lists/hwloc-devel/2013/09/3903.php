<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 04:42:02 2013" -->
<!-- isoreceived="20130928084202" -->
<!-- sent="Sat, 28 Sep 2013 10:41:58 +0200" -->
<!-- isosent="20130928084158" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="52469656.70707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8E3D7C_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-09-28 04:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3902.php">Brice Goglin: "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>In reply to:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I am having lots of problems when switching the regression testing stuff
<br>
(jenkins) to git, mostly because of make dist. Actually it worked 2 days
<br>
ago, no it breaks because hwloc-unknown.tar.* remain after make distcheck.
<br>
<p>1) There's something I don't understand in the dist scripts.
<br>
config/distscript.csh is only called the top-level Makefile.am, with 4th
<br>
argument = HWLOC_SVN_R, which is never set. So we always fallback to
<br>
git-describe. When building from a tarball, you get &quot;unknown&quot;. That
<br>
seems to break make distcheck. We need to pass something in that
<br>
argument, but I don't see what.
<br>
<p>2) VPATH dist support is more fragile than before (I always build under
<br>
$srcdir/build). In the past, we could do a VPATH make dist by just
<br>
symlinking srcdir/doc/doxygen-doc to builddir/doc/doxygen-doc. This now
<br>
generates &quot;unknown&quot; tarballs because we check for .git existence
<br>
explicitly. I fixed my own case by checking for ../.git as well but
<br>
that's not satisfying.
<br>
<p>It looks like we can fix this by checking for $srcdir/.git instead. If
<br>
we want VPATH support where $builddir isn't a child of $srcdir, we'll
<br>
have to set GIT_DIR=$srcdir/.git before calling git-describe too.
<br>
<p><p>I think this is becoming way too complicated. Nobody won't be able to
<br>
maintain that code in a couple years. Worse, what if you leave Cisco and
<br>
stop working on hwloc one day? In my other projects, I would just
<br>
override the VERSION makefile variable on the make command-line to
<br>
change the tarball name (you won't get that VERSION in lstopo --version,
<br>
but you would still see 1.8a1 from configure). We should rethink what we
<br>
actually need here. For instance if we can simpify things by not
<br>
building 1.8-final when we build 1.8-rcX, that'd be fine with me.
<br>
<p><p>Random other questions:
<br>
* where do you configure commit emails? can we drop/change the
<br>
open-mpi/hwloc subject prefix? I removed the hwloc-svn prefix from
<br>
mailman to avoid double-prefixing for now
<br>
* can we get commit diffs in email, with some truncation limit to 50kB
<br>
or so?
<br>
<p><p><p><p><p>Le 27/09/2013 15:36, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; I'd say that git and the new Trac are now fully open for business.  I might still do some shifting around of tags (see below), but otherwise, I think everything is just about ready.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm revamping make_dist_script and the nightly build script; I should finally be able to commit those today, if all goes well.  However, I had to make some changes to VERSION and some other surrounding infrastructure to make it all work.  Specifically: git just does some things *differently* than SVN, so it required some changes in the way that hwloc does things, infrastructure-wise.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I'm not excited about back-porting these changes all the way back to hwloc-1.0 just so that we can make nightly tarballs for these branches which aren't used any more.  I'm thinking that I should definitely make these changes for master and the v1.7 branch.  Should I also do the v1.6 branch?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm thinking that back-porting further is useless; we should just stop making nightlies for all the older branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To clarify: with SVN, we still checked all the older branches every night and would make a new tarball if there was ever a change.  We never made changes in those older branches, so we never made new nightlies.  But we *would have*, if a change had every been committed on those branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. With SVN, adding the r number in the tarball version was sufficient to observe ordering of the tarballs.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    hwloc-1.8r1234.tar.bz2
</span><br>
<span class="quotelev1">&gt;    hwloc-1.8r1240.tar.bz2
</span><br>
<span class="quotelev1">&gt;    hwloc-1.8r1255.tar.bz2
</span><br>
<span class="quotelev1">&gt;    ...etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With git, we only have a hash number.  So there's no obvious ordering of the tarballs.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    hwloc-1.8git11223344.tar.bz2
</span><br>
<span class="quotelev1">&gt;    hwloc-1.8git00aa3344.tar.bz2
</span><br>
<span class="quotelev1">&gt;    hwloc-1.8git99aa2277.tar.bz2
</span><br>
<span class="quotelev1">&gt;    ...etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there is &quot;git describe&quot; functionality which, in our case, can show you how many commits you are beyond a given tag.  For example, I added a &quot;dev&quot; tag on the master branch for the first pure-git commit (i.e., 1 beyond the last SVN commit).  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ git clone git_at_[hidden]:open-mpi/hwloc.git
</span><br>
<span class="quotelev1">&gt;     ...clone completes successfully...
</span><br>
<span class="quotelev1">&gt;     $ cd hwloc
</span><br>
<span class="quotelev1">&gt;     $ git checkout master
</span><br>
<span class="quotelev1">&gt;     $ git describe --always
</span><br>
<span class="quotelev1">&gt;     dev-3-g51efdd1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where the &quot;3&quot; represents that we're 3 commits beyond the &quot;dev&quot; tag.  The &quot;g&quot; just means &quot;git&quot;, and the &quot;51efdd1&quot; is the hash of that commit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, if we use that as our version string, we get tarballs named something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc-dev-3-g51efdd1.tar.bz2
</span><br>
<span class="quotelev1">&gt;     hwloc-dev-10-gf50a385.tar.bz2
</span><br>
<span class="quotelev1">&gt;     ...etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the master branch, I think that's fine.  However, note that ***THIS IS DIFFERENT THAN WHAT WE HAVE PREVIOUSLY DONE ON RELEASE BRANCHES!***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, if you checkout the v1.7 branch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ git checkout v1.7
</span><br>
<span class="quotelev1">&gt;     $ git describe --always
</span><br>
<span class="quotelev1">&gt;     hwloc-1.7.2-4-g3a6f84c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** NOTE THE DIFFERENCE HERE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) The last SVN nightly snapshot on the v1.7 branch was named 
</span><br>
<span class="quotelev1">&gt;    hwloc-1.7.3rc1r5779.tar.bz2.
</span><br>
<span class="quotelev1">&gt; b) The first git nightly snapshot on the v1.7 branch will be named 
</span><br>
<span class="quotelev1">&gt;    hwloc-1.7.2-4-g3a6f84c.tar.bz2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note &quot;1.7.3rc1...&quot; vs. &quot;1.7.2...&quot;.  I.e., the git name will say &quot;we're X commits beyond the 1.7.2 tag&quot;, but the old SVN name was &quot;we're at this *upcoming* version&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this is ok (other projects use this &quot;git describe&quot; kind of behavior for their nightly snapshots), but this is a change from what we used to do, so I wanted to call it out specifically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you guys ok with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note: I'm still mucking with the final tag names, so some of the above may change slightly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3902.php">Brice Goglin: "Re: [hwloc-devel] nightly snapshot tarballs now available"</a>
<li><strong>In reply to:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3904.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
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
