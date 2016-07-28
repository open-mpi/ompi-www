<?
$subject_val = "[OMPI devel] Autotools update";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 14:45:51 2012" -->
<!-- isoreceived="20120208194551" -->
<!-- sent="Wed, 8 Feb 2012 14:45:46 -0500" -->
<!-- isosent="20120208194546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Autotools update" -->
<!-- id="4C0DA921-C5FD-4ED4-B15A-BE73E96CE275_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Autotools update<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 14:45:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some of you may have already noticed: As the v1.5 RM, I took the executive decision this morning to bump up the tarball versions of the GNU Autotools on the v1.5 branch this morning.  Some of you may remember that we have a policy of not changing autotools versions in a release series unless we need to.
<br>
<p>So I thought I'd explain my rationale:
<br>
<p>1. I've been mulling about this issue for about a week, and talked with Brian about it.  The conclusion we came to was that we should amend our current policy: upgrade the Autotools tuple when necessary/relevant during feature series, but keep the tuple steady during stable release series.
<br>
<p>So -- why upgrade for v1.5.5?
<br>
<p>2. We're preparing for v1.6, which will assumedly have a very long shelf life.
<br>
<p>3. We've already had user reports of compiler issues due to older Libtool versions in Open MPI v1.4 and v1.5 releases.
<br>
<p>4. Specifically: before today, we were using Libtool 2.2.6b for the v1.5 series.  Libtool 2.2.6b is *ancient*!  Compilers have changed a *lot* since the 2.2.6b snapshot that we use (remember: 2.2.6b was not a formal Libtool release).
<br>
<p>5. These problems will only get worse as time goes on, so it seemed to make sense to refresh to the latest versions of everything before we hit v1.6, thereby enabling the v1.6 series to have as long a shelf life as possible.
<br>
<p>6. It didn't make sense to upgrade the v1.5 branch without upgrading the trunk, so I updated both of them.  What this means is that nightly and release tarballs built on these SVN branches will use the new autotools.  
<br>
<p>7. This does *NOT* mean that developers must upgrade their autotools immediately.  It does mean that we'll likely stop using/testing older autotools versions with trunk/v1.5 over time, and therefore they may eventually stop working (i.e., forcing developer autotools upgrades at that time).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10343.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
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
