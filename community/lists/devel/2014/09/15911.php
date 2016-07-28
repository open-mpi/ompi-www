<?
$subject_val = "Re: [OMPI devel] Conversion to GitHub: POSTPONED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 06:37:25 2014" -->
<!-- isoreceived="20140924103725" -->
<!-- sent="Wed, 24 Sep 2014 10:37:23 +0000" -->
<!-- isosent="20140924103723" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Conversion to GitHub: POSTPONED" -->
<!-- id="D18E15DC-E51D-4472-9DE0-860CF2AA8A45_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16rrEuy-EXgYqBMPZ67xW8EkQdDqn+FH61QbRVHzTa0mg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Conversion to GitHub: POSTPONED<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 06:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15912.php">Jeff Squyres (jsquyres): "[OMPI devel] Shared lib version numbers for 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="15910.php">Paul Hargrove: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>In reply to:</strong> <a href="15910.php">Paul Hargrove: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Reply:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If someone with a .edu account gets us a free Bitbucket for Open MPI, and then we use it for both research and industry stuff... at best, I think that falls into a grey area as to whether this is within Bitbucket's TOS (disclaimer: I haven't read their TOS).  It still sounds like a murky prospect; I'm not sure it's within the intent of a free account.
<br>
<p>Paying a reasonable amount for a private account isn't out of the question.  Indeed, Cisco has already paid $300 for the first year of a Github account so that OMPI can have a private repo.  :-\  That can be written off, if necessary, but it would be nice not to.  However, paying per developer may become prohibitive -- infrequent bulk payments (e.g., $300/year) are do-able from those of us at corporations.  Managing a monthly fee that is dependent upon the number of active committers (and that number changes over time) could get a bit... complex, in terms of corporate payments / reimbursements.
<br>
<p>That being said, there's quite a bit of OMPI infrastructure that is actively in use at GitHub.  It would be a bit of a pain to migrate all of that *again* (from SVN/Trac -&gt; Git/Github -&gt; Git/Bitbucket).  Remember, it's not just moving the repos (which, since most repos are now Git, is easy to move to another hosting provider); it's also moving the wiki and the tickets, too.  That will take more effort.
<br>
<p>All the above being said:
<br>
<p>1. I'll still have a look at Bitbucket today.  It may be a workable model that the main OMPI repo (and wiki and tickets) is at Bitbucket, and most other repos (and wikis and tickets) are at Github.
<br>
2. I just sent a mail to Github support asking them if they plan to support per-branch push ACLs.  I don't know if they'll be able to give a direct answer, but it's worth asking.
<br>
<p>It would be a little weird to span Github and Bitbucket, but the individual OMPI sub-projects are suitably independent of each other such that it could work.  Indeed, we've effectively been doing that for a while (e.g., hwloc has been at Github for quite a few months now), but that was never intended to be the desired end state.
<br>
<p><p><p>On Sep 23, 2014, at 11:57 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The pricing question might not be as simple as it first sounds.  At BitBucket Academic accounts are free and allow unlimited users.  So, if somebody with an .EDU email address  (IU and UTK come to mind) are the owners of the repo then I believe the cost is zero.  Somebody should verify that rather than take my word for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More points for comparison between BitBucket and GitHub are presented in
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html">http://www.infoworld.com/article/2611771/application-development/bitbucket-vs--github--which-project-host-has-the-most-.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 23, 2014 at 8:39 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; my 0.02 US$ ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bitbucket pricing model is per user (but with free public/private
</span><br>
<span class="quotelev1">&gt; repository up to 5 users)
</span><br>
<span class="quotelev1">&gt; whereas github pricing is per *private* repository (and free public
</span><br>
<span class="quotelev1">&gt; repository and with unlimited users)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from an OpenMPI point of view, this means :
</span><br>
<span class="quotelev1">&gt; - with github, only the private ompi-tests repository requires a fee
</span><br>
<span class="quotelev1">&gt; - with bitbucket, the ompi repository requires a fee (there are 119
</span><br>
<span class="quotelev1">&gt; users in <a href="https://github.com/open-mpi/authors/blob/master/authors.txt">https://github.com/open-mpi/authors/blob/master/authors.txt</a>, in
</span><br>
<span class="quotelev1">&gt; bitbucket pricing model, that means unlimited users and this is 200US$
</span><br>
<span class="quotelev1">&gt; per month)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; per branch ACL is a feature that was requested loooong time ago on
</span><br>
<span class="quotelev1">&gt; bitbucket, and now they implemented it, i would not expect it takes
</span><br>
<span class="quotelev1">&gt; too much time before github implements it too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the documentation, gerrithub has also interesting features :
</span><br>
<span class="quotelev1">&gt; - force the use of a workflow (assuming the workflow is a good match
</span><br>
<span class="quotelev1">&gt; with how we want to work ...)
</span><br>
<span class="quotelev1">&gt; - prevent developers from commiting a huge mess to github
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/09/24 10:36, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 23, 2014, at 7:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't have experience with GerritHub, but Bitbucket supports this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; feature (permissions on branch names/globs) and we use it in PETSc.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the info.  Paul Hargrove said pretty much the same thing to me, off-list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll check it out.
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15909.php">http://www.open-mpi.org/community/lists/devel/2014/09/15909.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15910.php">http://www.open-mpi.org/community/lists/devel/2014/09/15910.php</a>
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
<li><strong>Next message:</strong> <a href="15912.php">Jeff Squyres (jsquyres): "[OMPI devel] Shared lib version numbers for 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="15910.php">Paul Hargrove: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<li><strong>In reply to:</strong> <a href="15910.php">Paul Hargrove: "Re: [OMPI devel] Conversion to GitHub: POSTPONED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
<li><strong>Reply:</strong> <a href="15916.php">Jeff Squyres (jsquyres): "[OMPI devel] Bitbucket vs. GitHub (was: Conversion to GitHub: POSTPONED)"</a>
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
