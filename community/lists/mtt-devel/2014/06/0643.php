<?
$subject_val = "Re: [MTT devel] MTT: let's use git tags";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 05:46:56 2014" -->
<!-- isoreceived="20140630094656" -->
<!-- sent="Mon, 30 Jun 2014 11:46:52 +0200 (CEST)" -->
<!-- isosent="20140630094652" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT: let's use git tags" -->
<!-- id="1607753316.721047.1404121612164.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="53B0C62A.6010101_at_iferc.org" -->
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
<strong>Date:</strong> 2014-06-30 05:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>A fast forward merge does not create a single merge commit but takes all commits and applies them to the current branch.[1]
<br>
So this will do what Jeff intended without the necessity of deleting and recreating a static tag or editing version numbers in update scripts. ;)
<br>
<p>Regards
<br>
Christoph
<br>
<p>[1] <a href="http://ariya.ofilabs.com/2013/09/fast-forward-git-merge.html">http://ariya.ofilabs.com/2013/09/fast-forward-git-merge.html</a>
<br>
<p><p>----- Original Message -----
<br>
From: &quot;Gilles Gouaillardet&quot; &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
To: &quot;Development list for the MPI Testing Tool&quot; &lt;mtt-devel_at_[hidden]&gt;
<br>
Sent: Monday, June 30, 2014 4:06:34 AM
<br>
Subject: Re: [MTT devel] MTT: let's use git tags
<br>
<p>Jeff,
<br>
<p>What i meant by &quot;less error prone&quot; is &quot;you use the stable branch by
<br>
default&quot; so you do not checkout the dev/unstable
<br>
branch by default.
<br>
<p>as you pointed, the level/frequency of MTT development is fairly low,
<br>
my idea would be to create a &quot;dev&quot; branch, and when the state of the dev
<br>
branch is &quot;production ready&quot;, simply do a
<br>
<p>git checkout master
<br>
git merge dev
<br>
<p>that being said, i am far from mastering git and i cannot judge the pros
<br>
vs cons of this (merge) versus the fast forward
<br>
approach pointed by Christoph
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/06/27 16:11, Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; +1, for a stable branch which is *fast forwarded* to master when changes are confirmed to work.
</span><br>
<span class="quotelev1">&gt; PS: Tags are intended to be static and not moved around in git as Dave says, instead you can sign them using gpg fortifying them even more. ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Dave Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Development list for the MPI Testing Tool&quot; &lt;mtt-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 26, 2014 2:47:35 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT devel] MTT: let's use git tags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Published Git tags are *not* movable (by design). You're better off making it a branch that you treat like a tag, if that's your desire. Even then, you might confuse someone who is less familiar with Git in some cases if you move that branch around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 26, 2014, at 6:06 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've thought about this a little, and I'm still inclined to use the simple/lazy method of tags on master.  Some random points, in no particular order:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. master should always be for development, IMHO.  If we start using a multi-branch scheme, then the branches should be for releases, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. MTT has always been distributed by VCS; we've never made discrete distributions (e.g., a tarball).  As such, I'm comfortable labeling it as a bit &quot;different&quot; than how most other software is delivered -- e.g., using git tags on master is &quot;good enough&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. The level/frequency of MTT development is fairly low; it would be good to keep the bar as low as possible for amount of work required to deploy a new feature to the OMPI community for MTT testing.  Meaning: a new feature or bug fix pops up in MTT every once in a while -- we generally don't have commits that are being developed and merged to a release series in an out-of-order fashion.  So doing a few commits for a new feature/bug fix and then tagging the result is fine/good enough.  If there *are* interleaved commits of multiple new features/bug fixes, we can simply wait until all are done before tagging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. I realize this scheme is not as flexible as a release branch (where you can merge new features/bug fixes out of order), but the level of MTT development is so low that I'd prefer the slightly-simpler model of just tagging (vs. merging/etc.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. I'm not sure how using a release branch is less error-prone...?  I understand git branching is cheap, but if we have a separate branch, then we either need to remember to cherry-pick every commit we want or we have to continually merge from master-&gt;release_branch.  Seems like more work/steps to follow, and therefore more error-prone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. The point about not being able to automate getting the latest stable MTT is a good one.  How about using numerical tags just to delineate our intended &quot;release&quot; points, but also have a moveable tag, e.g., &quot;ompi-mtt-testing&quot; that will always point to the latest &quot;release&quot; that we want the OMPI MTT test community to use?  That way, you can always &quot;git checkout ompi-mtt-testing&quot; to get the latest/greatest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (...to that end, I've created/pushed an ompi-mtt-testing tag and pointed to the same place as v3.0.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 24, 2014, at 8:30 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 for using branches : branch usage is less error prone plus git makes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branching unexpensive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as far as i am concerned, i'd rather have the default master branch is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the for the &quot;stable&quot; version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and have one branch called devel (or dev, or whatever) :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - git clone =&gt; get the stable (aka master) branch by default (safe by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if you use the devel branch, one can only assume you know what you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, tags on the master branch is a good practice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2014/06/25 2:33, Christoph Niethammer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As an alternative idea: What about using branches to mark &quot;stable&quot; and &quot;development&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tags are for fixed versions and so users will not receive updates unless they update their update scripts manually?!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When &quot;development&quot; is stable just merge into &quot;stable&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0636.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0636.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0639.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0639.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0640.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0640.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0642.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0642.php</a>
</span><br>
<p>_______________________________________________
<br>
mtt-devel mailing list
<br>
mtt-devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0642.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0642.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0642.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
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
