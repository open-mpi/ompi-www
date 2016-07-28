<?
$subject_val = "[hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 09:36:29 2013" -->
<!-- isoreceived="20130927133629" -->
<!-- sent="Fri, 27 Sep 2013 13:36:25 +0000" -->
<!-- isosent="20130927133625" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] git / nightly builds" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8E3D7C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] git / nightly builds<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 09:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3896.php">Jeff Squyres (jsquyres): "[hwloc-devel] Git status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3903.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd say that git and the new Trac are now fully open for business.  I might still do some shifting around of tags (see below), but otherwise, I think everything is just about ready.
<br>
<p>I'm revamping make_dist_script and the nightly build script; I should finally be able to commit those today, if all goes well.  However, I had to make some changes to VERSION and some other surrounding infrastructure to make it all work.  Specifically: git just does some things *differently* than SVN, so it required some changes in the way that hwloc does things, infrastructure-wise.  
<br>
<p>Two things:
<br>
<p>1. I'm not excited about back-porting these changes all the way back to hwloc-1.0 just so that we can make nightly tarballs for these branches which aren't used any more.  I'm thinking that I should definitely make these changes for master and the v1.7 branch.  Should I also do the v1.6 branch?  
<br>
<p>I'm thinking that back-porting further is useless; we should just stop making nightlies for all the older branches.
<br>
<p>To clarify: with SVN, we still checked all the older branches every night and would make a new tarball if there was ever a change.  We never made changes in those older branches, so we never made new nightlies.  But we *would have*, if a change had every been committed on those branches.
<br>
<p>2. With SVN, adding the r number in the tarball version was sufficient to observe ordering of the tarballs.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;hwloc-1.8r1234.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;hwloc-1.8r1240.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;hwloc-1.8r1255.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;...etc.
<br>
<p>With git, we only have a hash number.  So there's no obvious ordering of the tarballs.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;hwloc-1.8git11223344.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;hwloc-1.8git00aa3344.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;hwloc-1.8git99aa2277.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;...etc.
<br>
<p>However, there is &quot;git describe&quot; functionality which, in our case, can show you how many commits you are beyond a given tag.  For example, I added a &quot;dev&quot; tag on the master branch for the first pure-git commit (i.e., 1 beyond the last SVN commit).  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ git clone git_at_[hidden]:open-mpi/hwloc.git
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...clone completes successfully...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ cd hwloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ git checkout master
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ git describe --always
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dev-3-g51efdd1
<br>
<p>Where the &quot;3&quot; represents that we're 3 commits beyond the &quot;dev&quot; tag.  The &quot;g&quot; just means &quot;git&quot;, and the &quot;51efdd1&quot; is the hash of that commit.
<br>
<p>Hence, if we use that as our version string, we get tarballs named something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc-dev-3-g51efdd1.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-dev-10-gf50a385.tar.bz2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...etc.
<br>
<p>For the master branch, I think that's fine.  However, note that ***THIS IS DIFFERENT THAN WHAT WE HAVE PREVIOUSLY DONE ON RELEASE BRANCHES!***
<br>
<p>For example, if you checkout the v1.7 branch:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ git checkout v1.7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ git describe --always
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc-1.7.2-4-g3a6f84c
<br>
<p>*** NOTE THE DIFFERENCE HERE:
<br>
<p>a) The last SVN nightly snapshot on the v1.7 branch was named 
<br>
&nbsp;&nbsp;&nbsp;hwloc-1.7.3rc1r5779.tar.bz2.
<br>
b) The first git nightly snapshot on the v1.7 branch will be named 
<br>
&nbsp;&nbsp;&nbsp;hwloc-1.7.2-4-g3a6f84c.tar.bz2.
<br>
<p>Note &quot;1.7.3rc1...&quot; vs. &quot;1.7.2...&quot;.  I.e., the git name will say &quot;we're X commits beyond the 1.7.2 tag&quot;, but the old SVN name was &quot;we're at this *upcoming* version&quot;.
<br>
<p>I think that this is ok (other projects use this &quot;git describe&quot; kind of behavior for their nightly snapshots), but this is a change from what we used to do, so I wanted to call it out specifically.
<br>
<p>Are you guys ok with this?
<br>
<p>(note: I'm still mucking with the final tag names, so some of the above may change slightly)
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
<li><strong>Next message:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3896.php">Jeff Squyres (jsquyres): "[hwloc-devel] Git status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3898.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3899.php">Samuel Thibault: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3903.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
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
