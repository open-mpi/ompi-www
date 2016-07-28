<?
$subject_val = "Re: [OMPI devel] Proposal: update Open MPI's version number and release process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 09:02:09 2015" -->
<!-- isoreceived="20150520130209" -->
<!-- sent="Wed, 20 May 2015 06:02:04 -0700" -->
<!-- isosent="20150520130204" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Proposal: update Open MPI's version number and release process" -->
<!-- id="73893F31-926C-4DF6-A72D-FC7403A6942D_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14HX8VnN8dzckdamZ-K=1Fpu4VGMOW9Sh9VV_aO9ZxJ7Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 09:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17430.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17429.php">Paul Hargrove: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys, you are way off-base here. This is why Jeff asked that we table this conversation until the devel meeting. As he and I discussed at length on the phone, your starting premise is incorrect.
<br>
<p>This entire thread stems from Jeff&#146;s recent attempt to do a bisect search on the master. He hit several points where the search failed due to apparent breaks in the master as opposed to the specific problem he was searching for. It was incorrectly assumed that this was because the master was actually broken at those points - however, as I pointed out to him, the master may well have been working&#133;but not for the particular configuration and/or environment he was using.
<br>
<p>We rarely see people commit code that they know breaks the master. Instead, they commit code that works on their system, which is the only one they can test on, configured their way, and run in their normal manner (binding, mapping, etc). It subsequently turns out to break someone else&#146;s environment and/or way of configuring and running. Nobody can predict that, and it is incorrect to be trashing our developers for such problems.
<br>
<p>Contrary to what you are saying in this thread, I actually believe we have pretty good people in this community. You may not have been intending to convey a different opinion, but it is coming across that way.
<br>
<p>Although it wasn&#146;t based on Jenkins and Github PRs, we have tried similar approaches in the past, and they failed to produce the desired result. The simple problem is that we (a) don&#146;t have the people to review every change prior to commit, and (b) every developer doesn&#146;t have access to all environments.
<br>
<p>So the problem is that even the most conscientious developer would wind up playing blind man&#146;s bluff with somebody else&#146;s Jenkins server, trying over and over again to find the magic change that will make that system work - with no way to even test compile what they are attempting. None of us have the staff for that effort, and thus the result turns out to be just a way of preventing people from doing anything.
<br>
<p>Best we discuss this in person before folks get too carried away.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; On May 19, 2015, at 10:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 19, 2015 at 9:37 PM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Pretty soon the developer will get trained to use the PR process, unless they are that engineer I've yet to meet who always writes flawless code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've never met that developer, either.
</span><br>
<span class="quotelev1">&gt; However, I have met one (and thankfully only one) who doesn't give a [expletive-deleted] how many naughty-grams their work generates.
</span><br>
<span class="quotelev1">&gt; They just keep on doing exactly what they think is right (and complain that nobody else in the organization knows how to get work done).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17429.php">http://www.open-mpi.org/community/lists/devel/2015/05/17429.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17430.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17429.php">Paul Hargrove: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17417.php">Christopher Samuel: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
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
