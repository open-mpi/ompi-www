<?
$subject_val = "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 14:42:24 2014" -->
<!-- isoreceived="20140925184224" -->
<!-- sent="Thu, 25 Sep 2014 18:42:22 +0000" -->
<!-- isosent="20140925184222" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)" -->
<!-- id="D40B8B80-1EF5-40B3-A740-CD1E91FDA362_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D18E15DC-E51D-4472-9DE0-860CF2AA8A45_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-25 14:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15917.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Previous message:</strong> <a href="15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15917.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Reply:</strong> <a href="15917.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had a look at bitbucket.
<br>
<p>SHORT VERSION
<br>
<p>I'm inclined to stick with Github.  If no one strongly disagrees, I'll proceed with the GitHub migration next Wednesday, 1 Oct, 2014, starting at 8am US Eastern.
<br>
<p>MORE DETAIL
<br>
<p>All in all, there is massive overlap of features between Github and Bitbucket.  There's a few on each that aren't in the other, obviously (e.g., per-branch push ACLs at Bitbucket), but all in all, they're very similar.
<br>
<p>The cost model is a major difference.  At first look, OMPI had 42 unique committers over the last 12 months, which means we'd be on the 50-user plan at $50/mo ($600/yr).  This is twice as expensive at Github ($300/yr so we can have 10 private repos).  The cost difference is not an automatic deal-breaker, but it is something to note.  Plus, since we used 42 committers last year, it's not inconceivable that we'll have to play tricks sometimes to stay under 50 committers (i.e., pruning accounts more than once a year).  Since I'm the guy that typically has to handle that kind of stuff, I'm not very excited about that prospect.
<br>
<p>I asked GitHub if they were going to support per-branch push ACLs.  They gave an unsurprising &quot;Thanks for your comments!  We'll add it to the list of suggestions&quot; kind of answer.  The exact text of their reply actually gave me a little hope that they're at least seriously thinking about it, but it is definitely not a promise of future functionality.
<br>
<p>As I mentioned in the prior email, one possibility is that we could take the main OMPI repo to BB and leave everything else as GH.  
<br>
<p>In reality, ORCM would likely also follow (since it's closely related to OMPI -- it uses OPAL and ORTE).  And Dave/Ralph/I are discussing the possibility of using git subtrees to split OPAL and ORTE into their own repos (this is all talk at the moment -- don't worry).  If that happens, they'll likely be at BH with the main OMPI repo.  
<br>
<p>As such, we'd end up with a bit of split-brain -- some repos at BB and some at GH.  Keep in mind that this is two different web UIs, two different ticket systems, two different wiki formats, etc.  For those of us who work in multiple different projects in OMPI, it could be annoying to have to mentally switch between the two.
<br>
<p>Don't get me wrong: using two different systems is definitely do-able, but... meh.
<br>
<p>All in all, I think it distills down to:
<br>
<p>1. There's one feature we hope GitHub will implement (per-branch push ACLs; we can easily switch from a two-repo system to a single-repo system if they ever do); Bitbucket has this feature today.  Otherwise, BB vs. GH = pretty feature-comparable.
<br>
<p>2. Bitbucket is a bit more expensive / Cisco already paid for GitHub.  As a side-effect, using Bitbucket *may* result in committer-counting games (to stay on a given plan).
<br>
<p>3. All the rest of OMPI projects are at GitHub
<br>
<p>Because of inertia, monetary cost, an logistics/mental cost, I'm inclined to stick with the existing migration plan and move the main Open MPI repo to GitHub next Wednesday, 1 Oct 2014, starting at 8am US Eastern.
<br>
<p>Comments?
<br>
<p><p><p><p>On Sep 24, 2014, at 6:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If someone with a .edu account gets us a free Bitbucket for Open MPI, and then we use it for both research and industry stuff... at best, I think that falls into a grey area as to whether this is within Bitbucket's TOS (disclaimer: I haven't read their TOS).  It still sounds like a murky prospect; I'm not sure it's within the intent of a free account.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paying a reasonable amount for a private account isn't out of the question.  Indeed, Cisco has already paid $300 for the first year of a Github account so that OMPI can have a private repo.  :-\  That can be written off, if necessary, but it would be nice not to.  However, paying per developer may become prohibitive -- infrequent bulk payments (e.g., $300/year) are do-able from those of us at corporations.  Managing a monthly fee that is dependent upon the number of active committers (and that number changes over time) could get a bit... complex, in terms of corporate payments / reimbursements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, there's quite a bit of OMPI infrastructure that is actively in use at GitHub.  It would be a bit of a pain to migrate all of that *again* (from SVN/Trac -&gt; Git/Github -&gt; Git/Bitbucket).  Remember, it's not just moving the repos (which, since most repos are now Git, is easy to move to another hosting provider); it's also moving the wiki and the tickets, too.  That will take more effort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the above being said:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I'll still have a look at Bitbucket today.  It may be a workable model that the main OMPI repo (and wiki and tickets) is at Bitbucket, and most other repos (and wikis and tickets) are at Github.
</span><br>
<span class="quotelev1">&gt; 2. I just sent a mail to Github support asking them if they plan to support per-branch push ACLs.  I don't know if they'll be able to give a direct answer, but it's worth asking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be a little weird to span Github and Bitbucket, but the individual OMPI sub-projects are suitably independent of each other such that it could work.  Indeed, we've effectively been doing that for a while (e.g., hwloc has been at Github for quite a few months now), but that was never intended to be the desired end state.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2014, at 11:57 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The pricing question might not be as simple as it first sounds.  At BitBucket Academic accounts are free and allow unlimited users.  So, if somebody with an .EDU email address  (IU and UTK come to mind) are the owners of the repo then I believe the cost is zero.  Somebody should verify that rather than take my word for it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More points for comparison between BitBucket and GitHub are presented in
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html">http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 23, 2014 at 8:39 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; my 0.02 US$ ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bitbucket pricing model is per user (but with free public/private
</span><br>
<span class="quotelev2">&gt;&gt; repository up to 5 users)
</span><br>
<span class="quotelev2">&gt;&gt; whereas github pricing is per *private* repository (and free public
</span><br>
<span class="quotelev2">&gt;&gt; repository and with unlimited users)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; from an OpenMPI point of view, this means :
</span><br>
<span class="quotelev2">&gt;&gt; - with github, only the private ompi-tests repository requires a fee
</span><br>
<span class="quotelev2">&gt;&gt; - with bitbucket, the ompi repository requires a fee (there are 119
</span><br>
<span class="quotelev2">&gt;&gt; users in <a href="https://github.com/open-mpi/authors/blob/master/authors.txt">https://github.com/open-mpi/authors/blob/master/authors.txt</a>, in
</span><br>
<span class="quotelev2">&gt;&gt; bitbucket pricing model, that means unlimited users and this is 200US$
</span><br>
<span class="quotelev2">&gt;&gt; per month)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; per branch ACL is a feature that was requested loooong time ago on
</span><br>
<span class="quotelev2">&gt;&gt; bitbucket, and now they implemented it, i would not expect it takes
</span><br>
<span class="quotelev2">&gt;&gt; too much time before github implements it too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; from the documentation, gerrithub has also interesting features :
</span><br>
<span class="quotelev2">&gt;&gt; - force the use of a workflow (assuming the workflow is a good match
</span><br>
<span class="quotelev2">&gt;&gt; with how we want to work ...)
</span><br>
<span class="quotelev2">&gt;&gt; - prevent developers from commiting a huge mess to github
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/09/24 10:36, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 23, 2014, at 7:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't have experience with GerritHub, but Bitbucket supports this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feature (permissions on branch names/globs) and we use it in PETSc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the info.  Paul Hargrove said pretty much the same thing to me, off-list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll check it out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15909.php">http://www.open-mpi.org/community/lists/devel/2014/09/15909.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15910.php">http://www.open-mpi.org/community/lists/devel/2014/09/15910.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15911.php">http://www.open-mpi.org/community/lists/devel/2014/09/15911.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15917.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Previous message:</strong> <a href="15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15911.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15917.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Reply:</strong> <a href="15917.php">Paul Hargrove: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
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
