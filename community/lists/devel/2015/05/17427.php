<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number and release process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 00:37:29 2015" -->
<!-- isoreceived="20150520043729" -->
<!-- sent="Tue, 19 May 2015 22:37:27 -0600" -->
<!-- isosent="20150520043727" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number and release process" -->
<!-- id="CAF1Cqj4tjcY_MNGyeBKmVCV5gAe05DyEse2=kVaBiw04ySx0NQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="14F1AAA2-A5E6-498C-B944-CC600AE49730_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Proposal: update Open MPI's version number and release process<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 00:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17428.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17428.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17428.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17429.php">Paul Hargrove: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p><p><p><span class="quotelev1">&gt; The other way to solve this issue would be to stop treating the master as
</span><br>
<span class="quotelev1">&gt; a general dumping ground for potentially unstable code where anyone can
</span><br>
<span class="quotelev1">&gt; just push any time they want.  If we switched to using PRs for
</span><br>
<span class="quotelev1">&gt; (essentially) all code that goes into master as well, then we wouldn't need
</span><br>
<span class="quotelev1">&gt; two different sets of permissions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>hear hear - I think once we have more than just the MLNX jenkins testing
<br>
every PR we should definitely move to this approach and yes for master. I'm
<br>
confident that PRs will be going through a smoke test on the Cray XC
<br>
systems by the end of the week.
<br>
<p>If it were up to me, I'd only allow the most trivial of commits to bypass
<br>
the PR process.  I think we're gradually getting there as it is.  Hopefully
<br>
by the developers workshop in June, we'll have at least 2 if not 3 or more
<br>
jenkins testing PRs.  It will be pretty indefensible at that point to
<br>
permit a bypass of the PR process for master.
<br>
<p>It would also be easy to trap the I-want-to-bypass-PR-because-I
<br>
know-what-I'm-doing-developer with a second level of protection.  Just set
<br>
up a jenkins project that does a smoke test after ever commit to master.
<br>
If the smoke test fails, send a naughty-gram to the committer and copy
<br>
devel. Pretty soon the developer will get trained to use the PR process,
<br>
unless they are that engineer I've yet to meet who always writes flawless
<br>
code.
<br>
<p>Howard
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back in the SVN days it was nice to have a trunk where people could freely
</span><br>
<span class="quotelev1">&gt; check in work because there was no other good system for keeping track of
</span><br>
<span class="quotelev1">&gt; your own work or sharing it with others.  But with Git we no longer have
</span><br>
<span class="quotelev1">&gt; those problems.  I can easily organize multiple concurrent streams of
</span><br>
<span class="quotelev1">&gt; private development, avoid losing work, and share work with others, all
</span><br>
<span class="quotelev1">&gt; without committing to some centralized master branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17419.php">http://www.open-mpi.org/community/lists/devel/2015/05/17419.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17428.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17419.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17428.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17428.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Reply:</strong> <a href="17429.php">Paul Hargrove: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
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
