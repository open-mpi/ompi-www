<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 09:43:58 2013" -->
<!-- isoreceived="20130927134358" -->
<!-- sent="Fri, 27 Sep 2013 15:43:56 +0200" -->
<!-- isosent="20130927134356" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="52458B9C.9050108_at_inria.fr" -->
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
<strong>Date:</strong> 2013-09-27 09:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3900.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3900.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 27/09/2013 15:36, Jeff Squyres (jsquyres) a &#233;crit :
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
<p>I don't think so. I am planning to only update the regression testing
<br>
for v1.7 as well.
<br>
<p>BUT what if the stable OMPI 1.6 needs a hwloc fix? Should we keep the
<br>
hwloc v1.5 branch open?
<br>
<p><span class="quotelev1">&gt; 2. With SVN, adding the r number in the tarball version was sufficient to observe ordering of the tarballs.  For example:
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
<p>That'll work for me.
<br>
<p>What about when we are actually doing a release where we don't want a
<br>
git-describe suffix ? Does the above apply to contrib/make_dist_tarball
<br>
in general? Or only to when it runs at night (in make dist only?) ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3897.php">Jeff Squyres (jsquyres): "[hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3900.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3900.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
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
