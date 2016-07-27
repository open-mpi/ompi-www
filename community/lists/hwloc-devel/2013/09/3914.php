<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 29 08:20:32 2013" -->
<!-- isoreceived="20130929122032" -->
<!-- sent="Sun, 29 Sep 2013 12:20:31 +0000" -->
<!-- isosent="20130929122031" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9064CB_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15rFuVA_588RRh5ECd7hb5AXi4AnY9h=FbetmbCQ=w5wA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-29 08:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3916.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3916.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2013, at 4:47 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am watching with intense interest, as GASNet will be moving to git on Nov 1.
</span><br>
<span class="quotelev1">&gt; Could you give me a pointer to where I can get copies all the scripts that you guys use for nightly tarballs, commit emails and such?
</span><br>
<span class="quotelev1">&gt; I'll want to have look after you have all the wrinkles ironed out to your satisfaction.
</span><br>
<p>FWIW, I think we're generally reviewing these scripts mainly because they seem to have become too complicated.  Moving to adapt them to use git was probably the catalyst for the review; not really the reason.
<br>
<p>But the 3 scripts are located in the hwloc master branch (I just described them in my prior mail):
<br>
<p>&nbsp;&nbsp;config/distscript.csh
<br>
&nbsp;&nbsp;contrib/nightly/make_snapshot_tarball
<br>
&nbsp;&nbsp;contrib/dist/make_dist_tarball
<br>
<p><span class="quotelev1">&gt; FWIW: a viewpoint from somebody who has yet to actually try to implement his ideas:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have PLANNED to script our nightlies to be named with a date stamp and 6 or 8 chars of the SHA1.
</span><br>
<span class="quotelev1">&gt; The format would be something like PROJECT-BRANCH-20130928-12abcdef.tar.gz
</span><br>
<span class="quotelev1">&gt; Where BRANCH=v&lt;major&gt;.&lt;minor&gt; for the UPCOMING release in most scenarios (but could be a named feature branch like &quot;oshmem&quot;)
</span><br>
<span class="quotelev1">&gt; That way directory listings would sort by branch and date (simple for mere humans) while the SHA1 would allow fetching the corresponding version from git.  The full SHA1 would, of course, also be in a file in the tarball (actual filename TBD).
</span><br>
<p>FWIW: I talked to Dave Goodell about this quite a bit before going with &quot;git describe&quot;.  I think I mentioned that our prior tarballs used the SVN r number, which therefore made it quite easy to order the tarballs; the git hash obviously doesn't provide this ordering.
<br>
<p>&quot;git describe&quot; provides a convenient mechanism, IMHO, and does all the work for you. It tells you exactly how many commits you are beyond the last tag on that branch.  hwloc's tags conveniently imply exactly which branch you're on, so it all worked out (i.e., each release series has its own branch -- the 1.7.x releases are on the v1.7 branch, the 1.6.x releases are on the v1.6 branch, and so on).
<br>
<p>The only branch that didn't have any tags at all was master, so I just created a &quot;dev&quot; tag on master, and that was sufficient.
<br>
<p>Two other minor points contributed to my decision:
<br>
<p>1. Dave indicated that both MPICH and other open source projects use the &quot;git describe&quot; scheme for their nightly tarballs
<br>
2. Using &quot;git describe&quot;, I didn't have to muck with the date, branch, etc.
<br>
<p><span class="quotelev1">&gt; I don't think we consider &quot;git describe&quot; to be a useful naming mechanism for nightlies, though for other snapshots it might be useful.
</span><br>
<span class="quotelev1">&gt; For RCs, we pan to tag something like &quot;1.7.3RC&quot; at the start of the RC cycle to get &quot;git describe&quot; to give names containing &quot;1.7.3RC-&lt;N&gt;-&lt;hash&gt;&quot; which make some sense at a glance, even though N is incremented with every commit and may grow much higher than a contentional RC number would.  Again, &quot;1.7.3&quot; in this example is the UPCOMING release rather than the previous one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For a developer's &quot;make dist&quot; from a developer's clone, however, I think we agree &quot;git describe&quot; is as good as anything else readily available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, in short: I think our plan aligns with yours on scenarios #1 (&quot;make dist&quot; by Jane Developer) and #3 (official releases), but we wanted something more people-friendly for #2 (nightly tarballs).
</span><br>
<p>Fair enough.
<br>
<p>That being said, when we tell users to get a nightly tarball (e.g., to get a bug fix), my experience is that they don't know/care about the nightly tarball numbering scheme: they always just get the most recent version.
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
<li><strong>Next message:</strong> <a href="3915.php">Brice Goglin: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3912.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3916.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="3916.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
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
