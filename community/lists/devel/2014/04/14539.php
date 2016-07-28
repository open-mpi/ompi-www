<?
$subject_val = "Re: [OMPI devel] 1-question developer poll";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 06:55:24 2014" -->
<!-- isoreceived="20140416105524" -->
<!-- sent="Wed, 16 Apr 2014 03:55:24 -0700" -->
<!-- isosent="20140416105524" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1-question developer poll" -->
<!-- id="CAMD57oceDuvj-H_o43-DEaF1dvrKHLF8yvSZO2xEbApiuhMx7w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAO1KybK45cMJGz+By5462_eY0GnHrtAKfqrjXtt_+ZY_X6Z6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1-question developer poll<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 06:55:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14540.php">Bastian Beischer: "[OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<li><strong>Previous message:</strong> <a href="14538.php">Mike Dubman: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>In reply to:</strong> <a href="14538.php">Mike Dubman: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14543.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1-question developer poll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Personally: svn and Mercurial
<br>
<p>Intel uses git. However, we have had significant trouble keeping git repos
<br>
alive and clean in projects involving many developers that are
<br>
geographically dispersed. As a result, we've had to dedicate resources -
<br>
full-time people whose sole job is to maintain the git repos as it requires
<br>
someone with very high git knowledge to continually fix the problems. This
<br>
doesn't require one person/project, but it does require (a) significant
<br>
time, and (b) deep git knowledge.
<br>
<p>The basic issue I'm hearing is the same we have surfaced before: git
<br>
exposes a lot of atomistic controls. This makes it very powerful, but also
<br>
very easy to make an error as it requires a high level of git-knowledge to
<br>
properly operate the system. Many developers lack that degree of &quot;git IQ&quot;,
<br>
and don't take the time to learn it as they are under pressure to produce
<br>
actual code, or think they have it but don't know as much as they think. As
<br>
a result, the repo (main or the developer's branches) get confused and need
<br>
to be corrected.
<br>
<p>Bottom line: so long as OMPI has at least one git-expert on the team who
<br>
can dedicate some of their time to helping developers &quot;fix&quot; their repo
<br>
problems, the proposed transition could be done. I'm not talking about
<br>
someone who will monitor/repair the main repo - I'm talking about someone
<br>
also willing to assist every member of the devel team when that person's
<br>
git branch gets hosed. If we ever lose that dedicated support, we may be in
<br>
trouble.
<br>
<p>Unlike a corporation, we can't hire someone to fill this role. We rely on
<br>
contributed time from our members. So I think the question boils down to:
<br>
do we have that kind of commitment from our member organizations for the
<br>
foreseeable future? And should we adopt a technology that depends on that
<br>
contribution?
<br>
<p>Ralph
<br>
<p><p><p>On Wed, Apr 16, 2014 at 3:34 AM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; git
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 16, 2014 at 1:32 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What source code repository technology(ies) do you use for Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; development? (indicate all that apply)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - SVN
</span><br>
<span class="quotelev2">&gt;&gt; - Mercurial
</span><br>
<span class="quotelev2">&gt;&gt; - Git
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ask this question because there's serious discussions afoot to switch
</span><br>
<span class="quotelev2">&gt;&gt; OMPI's main SVN repo to Git, and I want to get a feel for the current
</span><br>
<span class="quotelev2">&gt;&gt; landscape out there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14537.php">http://www.open-mpi.org/community/lists/devel/2014/04/14537.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14538.php">http://www.open-mpi.org/community/lists/devel/2014/04/14538.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14540.php">Bastian Beischer: "[OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<li><strong>Previous message:</strong> <a href="14538.php">Mike Dubman: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>In reply to:</strong> <a href="14538.php">Mike Dubman: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14543.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1-question developer poll"</a>
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
