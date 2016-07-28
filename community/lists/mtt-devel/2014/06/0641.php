<?
$subject_val = "Re: [MTT devel] MTT: let's use git tags";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 03:11:30 2014" -->
<!-- isoreceived="20140627071130" -->
<!-- sent="Fri, 27 Jun 2014 09:11:26 +0200 (CEST)" -->
<!-- isosent="20140627071126" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT: let's use git tags" -->
<!-- id="2131019502.689967.1403853086864.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D0704AD8-36B6-45D9-8B39-473496BE4659_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT: let's use git tags<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 03:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0640.php">Dave Goodell (dgoodell): "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0640.php">Dave Goodell (dgoodell): "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1, for a stable branch which is *fast forwarded* to master when changes are confirmed to work.
<br>
PS: Tags are intended to be static and not moved around in git as Dave says, instead you can sign them using gpg fortifying them even more. ;)
<br>
<p>----- Original Message -----
<br>
From: &quot;Dave Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt;
<br>
To: &quot;Development list for the MPI Testing Tool&quot; &lt;mtt-devel_at_[hidden]&gt;
<br>
Sent: Thursday, June 26, 2014 2:47:35 PM
<br>
Subject: Re: [MTT devel] MTT: let's use git tags
<br>
<p>Published Git tags are *not* movable (by design). You're better off making it a branch that you treat like a tag, if that's your desire. Even then, you might confuse someone who is less familiar with Git in some cases if you move that branch around.
<br>
<p>-Dave
<br>
<p><span class="quotelev1">&gt; On Jun 26, 2014, at 6:06 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've thought about this a little, and I'm still inclined to use the simple/lazy method of tags on master.  Some random points, in no particular order:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. master should always be for development, IMHO.  If we start using a multi-branch scheme, then the branches should be for releases, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. MTT has always been distributed by VCS; we've never made discrete distributions (e.g., a tarball).  As such, I'm comfortable labeling it as a bit &quot;different&quot; than how most other software is delivered -- e.g., using git tags on master is &quot;good enough&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. The level/frequency of MTT development is fairly low; it would be good to keep the bar as low as possible for amount of work required to deploy a new feature to the OMPI community for MTT testing.  Meaning: a new feature or bug fix pops up in MTT every once in a while -- we generally don't have commits that are being developed and merged to a release series in an out-of-order fashion.  So doing a few commits for a new feature/bug fix and then tagging the result is fine/good enough.  If there *are* interleaved commits of multiple new features/bug fixes, we can simply wait until all are done before tagging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. I realize this scheme is not as flexible as a release branch (where you can merge new features/bug fixes out of order), but the level of MTT development is so low that I'd prefer the slightly-simpler model of just tagging (vs. merging/etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. I'm not sure how using a release branch is less error-prone...?  I understand git branching is cheap, but if we have a separate branch, then we either need to remember to cherry-pick every commit we want or we have to continually merge from master-&gt;release_branch.  Seems like more work/steps to follow, and therefore more error-prone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. The point about not being able to automate getting the latest stable MTT is a good one.  How about using numerical tags just to delineate our intended &quot;release&quot; points, but also have a moveable tag, e.g., &quot;ompi-mtt-testing&quot; that will always point to the latest &quot;release&quot; that we want the OMPI MTT test community to use?  That way, you can always &quot;git checkout ompi-mtt-testing&quot; to get the latest/greatest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (...to that end, I've created/pushed an ompi-mtt-testing tag and pointed to the same place as v3.0.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 24, 2014, at 8:30 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +1 for using branches : branch usage is less error prone plus git makes
</span><br>
<span class="quotelev2">&gt;&gt; branching unexpensive.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, i'd rather have the default master branch is
</span><br>
<span class="quotelev2">&gt;&gt; the for the &quot;stable&quot; version
</span><br>
<span class="quotelev2">&gt;&gt; and have one branch called devel (or dev, or whatever) :
</span><br>
<span class="quotelev2">&gt;&gt; - git clone =&gt; get the stable (aka master) branch by default (safe by
</span><br>
<span class="quotelev2">&gt;&gt; default)
</span><br>
<span class="quotelev2">&gt;&gt; - if you use the devel branch, one can only assume you know what you are
</span><br>
<span class="quotelev2">&gt;&gt; doing ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, tags on the master branch is a good practice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/06/25 2:33, Christoph Niethammer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an alternative idea: What about using branches to mark &quot;stable&quot; and &quot;development&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tags are for fixed versions and so users will not receive updates unless they update their update scripts manually?!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When &quot;development&quot; is stable just merge into &quot;stable&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0636.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0636.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0639.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0639.php</a>
</span><br>
_______________________________________________
<br>
mtt-devel mailing list
<br>
mtt-devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0640.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0640.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0640.php">Dave Goodell (dgoodell): "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0640.php">Dave Goodell (dgoodell): "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
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
