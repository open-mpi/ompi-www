<?
$subject_val = "Re: [OMPI devel] Proposal on RFCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 15:29:12 2015" -->
<!-- isoreceived="20151130202912" -->
<!-- sent="Mon, 30 Nov 2015 20:29:07 +0000" -->
<!-- isosent="20151130202907" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal on RFCs" -->
<!-- id="22D78E22-C233-4064-88B9-CD7DD07C955E_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj45injZBm87hqEp4ze_LFk5mopuKebN9Hp45FdwCM3aqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proposal on RFCs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-30 15:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18397.php">Stefano Garzarella: "[OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<li><strong>Previous message:</strong> <a href="18395.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0 github issues"</a>
<li><strong>In reply to:</strong> <a href="18385.php">Howard Pritchard: "Re: [OMPI devel] Proposal on RFCs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This generally sounds good to me -- formalizing the RFC process is a good thing.
<br>

<br>
Can we document whatever the final RFC procedure is agreed upon in a wiki page?
<br>

<br>
My $0.02: generally agree that sending an &quot;RFC&quot;-subject email to devel is a good idea.  Using PRs as part of the process is still a good idea, though (to see/review the code itself).
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Nov 23, 2015, at 12:22 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HI Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's definitely discuss on 12/1.  Unless it's something like code deletion or  large extern package update (like the PMIx 1.1 PR
</span><br>
<span class="quotelev1">&gt; or hwloc refresh), just opening a PR that touches like 100+ files across a range of the code base needs more than the current github
</span><br>
<span class="quotelev1">&gt; PR interface provides.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd add that it would not hurt for proposals involving major changes/new algorithms, etc. to have a wiki page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-11-21 11:16 GMT-07:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When we moved to Github, we decided that we would use their &#226;&#128;&#156;pull requests&#226;&#128;&#157; to replace our RFC process. Our thinking at the time was that everyone would receive these, and so would know that something had been proposed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we hadn&#226;&#128;&#153;t really anticipated was the volume of PRs that would be generated. Quite frankly, it has become hard to sift thru them all to identify those that involve significant change from those involving minor bug fixes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh and I were kicking this around last week at SC&#226;&#128;&#153;15, and after some consideration, I thought it makes sense to at least propose a couple of modifications that might help people to track what&#226;&#128;&#153;s going on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) revive the RFC for significant changes. If the PR touches core code, or involves a change that exceeds an isolated bug fix, it would help if people announced it on the devel mailing list with &#226;&#128;&#156;RFC&#226;&#128;&#157; in the subject line, an explanation appropriate in length to the corresponding change, and a pointer to the PR. We should also include a &#226;&#128;&#156;timeout&#226;&#128;&#157; to indicate when this PR is intended to be committed, minus any expressed concerns. This would allow people to become aware of a proposed change that could impact them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) send a note to the devel mailing list indicating you are about to start working on a significant change to the code base. We generally do this on our weekly telecon, but not everyone can attend those. So rather than surprising folks with a PR out of the blue, it would be good to let the community know of your intentions so people can chime in with suggestions and contact you off-list about possibly contributing to the change. Besides, it might help to avoid having others committing conflicting changes during the effort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I figured we could discuss this on the next telecon (Dec 1st), but wanted to throw it out there for comment and advanced consideration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18379.php">http://www.open-mpi.org/community/lists/devel/2015/11/18379.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18385.php">http://www.open-mpi.org/community/lists/devel/2015/11/18385.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18397.php">Stefano Garzarella: "[OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<li><strong>Previous message:</strong> <a href="18395.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0 github issues"</a>
<li><strong>In reply to:</strong> <a href="18385.php">Howard Pritchard: "Re: [OMPI devel] Proposal on RFCs"</a>
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
