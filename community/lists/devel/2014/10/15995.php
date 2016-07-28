<?
$subject_val = "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 08:23:26 2014" -->
<!-- isoreceived="20141003122326" -->
<!-- sent="Fri, 3 Oct 2014 12:23:24 +0000" -->
<!-- isosent="20141003122324" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="A797E37A-D3E7-490C-B550-B8E81FDB8D36_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5uPDoMbBoqQskF9+hwNYU5K=F1Bz8BS7_=Z2M8Vnu64qQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 08:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15996.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15994.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15992.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15986.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah.
<br>
<p>I just did some experimentation and confirmed this behavior:
<br>
<p>1. If you do not belong to a repo, you can file issues/pull requests and comment on them.
<br>
<p>2. If you have *read* access to a repo, you can do everything from #1, but you're also eligible for @mention auto-complete, and issues/pull requests can be assigned to you.
<br>
<p>3. If you have *write* access to a repo, you can do everything from #2, but you can also set labels, milestones, and assignees.
<br>
<p>All the OMPI devs have *read* access to ompi-release, meaning you can create/comment on issues, but not set labels/milestones/assignees.
<br>
<p>I did not expect this behavior.  Grumble.  Will have to think about it a bit...
<br>
<p><p><p><p>On Oct 3, 2014, at 7:07 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my point is that label, milestone and assignee are *not* clickable for me (see attached snapshot, &quot;settings&quot; icons are missing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 3, 2014 at 7:36 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You can only assign a label and milestone, and assign the PR to someone, *after* you create the PR (same with creating issues).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See <a href="https://github.com/open-mpi/ompi/wiki/SubmittingBugs">https://github.com/open-mpi/ompi/wiki/SubmittingBugs</a> for details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;github-pr-labels.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2014, at 11:37 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i could not find how to apply a label to a PR via the web interface (and
</span><br>
<span class="quotelev2">&gt;&gt; i am not sure i can even do that since authority might be required)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; any idea (maybe a special keyword in the comment ...) ?
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
<span class="quotelev2">&gt;&gt; On 2014/10/03 1:53, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 2, 2014, at 12:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How are they going to review it, given they don't have authority to do anything on that branch? Can they still comment? Can they reassign them when done?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, they can comment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The idea was that they would apply the &quot;reviewed&quot; label when they have reviewed it successfully.  These &quot;reviewed&quot; labels will then be easily viewable in the PR listing by the RM/GK to know which ones are ready.
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15988.php">http://www.open-mpi.org/community/lists/devel/2014/10/15988.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15990.php">http://www.open-mpi.org/community/lists/devel/2014/10/15990.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;gh.png&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15992.php">http://www.open-mpi.org/community/lists/devel/2014/10/15992.php</a>
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
<li><strong>Next message:</strong> <a href="15996.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15994.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15992.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15986.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
