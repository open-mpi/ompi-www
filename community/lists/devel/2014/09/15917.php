<?
$subject_val = "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 17:05:54 2014" -->
<!-- isoreceived="20140925210554" -->
<!-- sent="Thu, 25 Sep 2014 14:05:49 -0700" -->
<!-- isosent="20140925210549" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)" -->
<!-- id="CAAvDA14z+HKa9xd37tPnxFS2xsZ4Ls5gk+h5J7Y=bR-+Dj2=Mw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D40B8B80-1EF5-40B3-A740-CD1E91FDA362_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-25 17:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15918.php">Jed Brown: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub:	POSTPONED)"</a>
<li><strong>Previous message:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>In reply to:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15918.php">Jed Brown: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub:	POSTPONED)"</a>
<li><strong>Reply:</strong> <a href="15918.php">Jed Brown: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub:	POSTPONED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First off: this is not an attempt at a &quot;strong objection&quot; to delay or
<br>
change Jeff's stated plan.
<br>
<p>Just my view as somebody who already contributes to projects hosted on both
<br>
GH and BB:
<br>
<p>Since the bulk of the DVCS &quot;work&quot; as a developer is (in my experience) done
<br>
at the git command line, the choice of hosting provider is not something
<br>
that matters &quot;day to day&quot;.
<br>
<p>For me the per-branch ACLs at BB is (as has been proposed here) used as a
<br>
simple mechanism to ensure a release branch can only be modified by the
<br>
RM/GK.  However, I suspect that a (public) fork (perhaps owned by the RM?)
<br>
would be a perfectly usable alternative at GH (sounds like that, or the
<br>
inverse in which the trunk is the fork, is Jeff's plan).
<br>
<p>The GUIs for things like browsing commits, viewing diffs, etc are pretty
<br>
similar in capability and each is sufficiently intuitive (after a brief
<br>
learning curve) that I don't find I need any conscious effort to &quot;mode
<br>
switch&quot; between their use.  The ability to comment on commits in lieu of
<br>
the ticket system is a good feature, for instance, that &quot;just works&quot; in
<br>
both systems.  The same goes for pull-requests, though the two sites treat
<br>
them a bit differently (they are integrated with the issue tracker at GH
<br>
and a distinct object type at BB).
<br>
Caveat: I don't do things via GUI when I know of a command line equivalent
<br>
(for instance, I don't create, destroy or merge branches using the GUI),
<br>
and therefore I am probably not pushing the limits of either.
<br>
<p>Site navigation is essentially the same, but with icons on the left vs
<br>
right.  Once you learn the navigation icons, I again find no conscious
<br>
effort to switch between them.  Each has minor quirks, and both sites make
<br>
changes occasionally (and without advance warning that I am aware of).
<br>
<p>Personally, I don't like the issue trackers at either site as compared to
<br>
Trac or Bugzilla.  The available feature set in each is small enough that
<br>
in my experience if you can't immediately figure out how to do something,
<br>
it is probably because you can't do it at all.
<br>
<p>In short, I find that switching between BB and GH is far easier than
<br>
switching among CVS, SVN and Git (which I also have to do because of the
<br>
variety of projects I work on or follow trunk/head/tip development of).  So
<br>
if, as Jeff suggests might happen, the OMPI community eventually finds work
<br>
split between BB and GH, then I don't personally think it is going to be a
<br>
productivity-killer.
<br>
<p>-Paul
<br>
<p>Disclaimer:  My employer pays for an institutional Unlimited account at BB,
<br>
which then owns all of our repos (project leads just get Admin status).
<br>
So, I host my own projects at BB without any objective evaluation of the
<br>
relative costs or merits of the hosting providers.
<br>
<p>On Thu, Sep 25, 2014 at 11:42 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I had a look at bitbucket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SHORT VERSION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm inclined to stick with Github.  If no one strongly disagrees, I'll
</span><br>
<span class="quotelev1">&gt; proceed with the GitHub migration next Wednesday, 1 Oct, 2014, starting at
</span><br>
<span class="quotelev1">&gt; 8am US Eastern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MORE DETAIL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All in all, there is massive overlap of features between Github and
</span><br>
<span class="quotelev1">&gt; Bitbucket.  There's a few on each that aren't in the other, obviously
</span><br>
<span class="quotelev1">&gt; (e.g., per-branch push ACLs at Bitbucket), but all in all, they're very
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cost model is a major difference.  At first look, OMPI had 42 unique
</span><br>
<span class="quotelev1">&gt; committers over the last 12 months, which means we'd be on the 50-user plan
</span><br>
<span class="quotelev1">&gt; at $50/mo ($600/yr).  This is twice as expensive at Github ($300/yr so we
</span><br>
<span class="quotelev1">&gt; can have 10 private repos).  The cost difference is not an automatic
</span><br>
<span class="quotelev1">&gt; deal-breaker, but it is something to note.  Plus, since we used 42
</span><br>
<span class="quotelev1">&gt; committers last year, it's not inconceivable that we'll have to play tricks
</span><br>
<span class="quotelev1">&gt; sometimes to stay under 50 committers (i.e., pruning accounts more than
</span><br>
<span class="quotelev1">&gt; once a year).  Since I'm the guy that typically has to handle that kind of
</span><br>
<span class="quotelev1">&gt; stuff, I'm not very excited about that prospect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked GitHub if they were going to support per-branch push ACLs.  They
</span><br>
<span class="quotelev1">&gt; gave an unsurprising &quot;Thanks for your comments!  We'll add it to the list
</span><br>
<span class="quotelev1">&gt; of suggestions&quot; kind of answer.  The exact text of their reply actually
</span><br>
<span class="quotelev1">&gt; gave me a little hope that they're at least seriously thinking about it,
</span><br>
<span class="quotelev1">&gt; but it is definitely not a promise of future functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned in the prior email, one possibility is that we could take
</span><br>
<span class="quotelev1">&gt; the main OMPI repo to BB and leave everything else as GH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In reality, ORCM would likely also follow (since it's closely related to
</span><br>
<span class="quotelev1">&gt; OMPI -- it uses OPAL and ORTE).  And Dave/Ralph/I are discussing the
</span><br>
<span class="quotelev1">&gt; possibility of using git subtrees to split OPAL and ORTE into their own
</span><br>
<span class="quotelev1">&gt; repos (this is all talk at the moment -- don't worry).  If that happens,
</span><br>
<span class="quotelev1">&gt; they'll likely be at BH with the main OMPI repo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As such, we'd end up with a bit of split-brain -- some repos at BB and
</span><br>
<span class="quotelev1">&gt; some at GH.  Keep in mind that this is two different web UIs, two different
</span><br>
<span class="quotelev1">&gt; ticket systems, two different wiki formats, etc.  For those of us who work
</span><br>
<span class="quotelev1">&gt; in multiple different projects in OMPI, it could be annoying to have to
</span><br>
<span class="quotelev1">&gt; mentally switch between the two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't get me wrong: using two different systems is definitely do-able,
</span><br>
<span class="quotelev1">&gt; but... meh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All in all, I think it distills down to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. There's one feature we hope GitHub will implement (per-branch push
</span><br>
<span class="quotelev1">&gt; ACLs; we can easily switch from a two-repo system to a single-repo system
</span><br>
<span class="quotelev1">&gt; if they ever do); Bitbucket has this feature today.  Otherwise, BB vs. GH =
</span><br>
<span class="quotelev1">&gt; pretty feature-comparable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Bitbucket is a bit more expensive / Cisco already paid for GitHub.  As
</span><br>
<span class="quotelev1">&gt; a side-effect, using Bitbucket *may* result in committer-counting games (to
</span><br>
<span class="quotelev1">&gt; stay on a given plan).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. All the rest of OMPI projects are at GitHub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because of inertia, monetary cost, an logistics/mental cost, I'm inclined
</span><br>
<span class="quotelev1">&gt; to stick with the existing migration plan and move the main Open MPI repo
</span><br>
<span class="quotelev1">&gt; to GitHub next Wednesday, 1 Oct 2014, starting at 8am US Eastern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2014, at 6:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If someone with a .edu account gets us a free Bitbucket for Open MPI,
</span><br>
<span class="quotelev1">&gt; and then we use it for both research and industry stuff... at best, I think
</span><br>
<span class="quotelev1">&gt; that falls into a grey area as to whether this is within Bitbucket's TOS
</span><br>
<span class="quotelev1">&gt; (disclaimer: I haven't read their TOS).  It still sounds like a murky
</span><br>
<span class="quotelev1">&gt; prospect; I'm not sure it's within the intent of a free account.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paying a reasonable amount for a private account isn't out of the
</span><br>
<span class="quotelev1">&gt; question.  Indeed, Cisco has already paid $300 for the first year of a
</span><br>
<span class="quotelev1">&gt; Github account so that OMPI can have a private repo.  :-\  That can be
</span><br>
<span class="quotelev1">&gt; written off, if necessary, but it would be nice not to.  However, paying
</span><br>
<span class="quotelev1">&gt; per developer may become prohibitive -- infrequent bulk payments (e.g.,
</span><br>
<span class="quotelev1">&gt; $300/year) are do-able from those of us at corporations.  Managing a
</span><br>
<span class="quotelev1">&gt; monthly fee that is dependent upon the number of active committers (and
</span><br>
<span class="quotelev1">&gt; that number changes over time) could get a bit... complex, in terms of
</span><br>
<span class="quotelev1">&gt; corporate payments / reimbursements.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, there's quite a bit of OMPI infrastructure that is
</span><br>
<span class="quotelev1">&gt; actively in use at GitHub.  It would be a bit of a pain to migrate all of
</span><br>
<span class="quotelev1">&gt; that *again* (from SVN/Trac -&gt; Git/Github -&gt; Git/Bitbucket).  Remember,
</span><br>
<span class="quotelev1">&gt; it's not just moving the repos (which, since most repos are now Git, is
</span><br>
<span class="quotelev1">&gt; easy to move to another hosting provider); it's also moving the wiki and
</span><br>
<span class="quotelev1">&gt; the tickets, too.  That will take more effort.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All the above being said:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. I'll still have a look at Bitbucket today.  It may be a workable
</span><br>
<span class="quotelev1">&gt; model that the main OMPI repo (and wiki and tickets) is at Bitbucket, and
</span><br>
<span class="quotelev1">&gt; most other repos (and wikis and tickets) are at Github.
</span><br>
<span class="quotelev2">&gt; &gt; 2. I just sent a mail to Github support asking them if they plan to
</span><br>
<span class="quotelev1">&gt; support per-branch push ACLs.  I don't know if they'll be able to give a
</span><br>
<span class="quotelev1">&gt; direct answer, but it's worth asking.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would be a little weird to span Github and Bitbucket, but the
</span><br>
<span class="quotelev1">&gt; individual OMPI sub-projects are suitably independent of each other such
</span><br>
<span class="quotelev1">&gt; that it could work.  Indeed, we've effectively been doing that for a while
</span><br>
<span class="quotelev1">&gt; (e.g., hwloc has been at Github for quite a few months now), but that was
</span><br>
<span class="quotelev1">&gt; never intended to be the desired end state.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 23, 2014, at 11:57 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The pricing question might not be as simple as it first sounds.  At
</span><br>
<span class="quotelev1">&gt; BitBucket Academic accounts are free and allow unlimited users.  So, if
</span><br>
<span class="quotelev1">&gt; somebody with an .EDU email address  (IU and UTK come to mind) are the
</span><br>
<span class="quotelev1">&gt; owners of the repo then I believe the cost is zero.  Somebody should verify
</span><br>
<span class="quotelev1">&gt; that rather than take my word for it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More points for comparison between BitBucket and GitHub are presented in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html">http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Sep 23, 2014 at 8:39 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; my 0.02 US$ ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bitbucket pricing model is per user (but with free public/private
</span><br>
<span class="quotelev3">&gt; &gt;&gt; repository up to 5 users)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; whereas github pricing is per *private* repository (and free public
</span><br>
<span class="quotelev3">&gt; &gt;&gt; repository and with unlimited users)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from an OpenMPI point of view, this means :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - with github, only the private ompi-tests repository requires a fee
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - with bitbucket, the ompi repository requires a fee (there are 119
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users in <a href="https://github.com/open-mpi/authors/blob/master/authors.txt">https://github.com/open-mpi/authors/blob/master/authors.txt</a>,
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bitbucket pricing model, that means unlimited users and this is 200US$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; per month)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; per branch ACL is a feature that was requested loooong time ago on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bitbucket, and now they implemented it, i would not expect it takes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; too much time before github implements it too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from the documentation, gerrithub has also interesting features :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - force the use of a workflow (assuming the workflow is a good match
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with how we want to work ...)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - prevent developers from commiting a huge mess to github
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2014/09/24 10:36, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 23, 2014, at 7:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I don't have experience with GerritHub, but Bitbucket supports this
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; feature (permissions on branch names/globs) and we use it in PETSc.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for the info.  Paul Hargrove said pretty much the same thing to
</span><br>
<span class="quotelev1">&gt; me, off-list.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'll check it out.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15909.php">http://www.open-mpi.org/community/lists/devel/2014/09/15909.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15910.php">http://www.open-mpi.org/community/lists/devel/2014/09/15910.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15911.php">http://www.open-mpi.org/community/lists/devel/2014/09/15911.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15916.php">http://www.open-mpi.org/community/lists/devel/2014/09/15916.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15918.php">Jed Brown: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub:	POSTPONED)"</a>
<li><strong>Previous message:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>In reply to:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15918.php">Jed Brown: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub:	POSTPONED)"</a>
<li><strong>Reply:</strong> <a href="15918.php">Jed Brown: "Re: [OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub:	POSTPONED)"</a>
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
