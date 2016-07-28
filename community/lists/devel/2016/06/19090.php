<?
$subject_val = "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 19:58:21 2016" -->
<!-- isoreceived="20160607235821" -->
<!-- sent="Wed, 8 Jun 2016 08:58:16 +0900" -->
<!-- isosent="20160607235816" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?" -->
<!-- id="ef58bbe1-e564-a64c-f5d9-771187c4a3cf_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AF4DDD38-8161-415F-B198-74A8B6015DF6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 19:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19091.php">Cyril Bordage: "[OMPI devel] Problem with monitoring"</a>
<li><strong>Previous message:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>In reply to:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my 0.02 US$
<br>
<p><p>from an implementation point of view, the canonical way of using Jenkins 
<br>
with Github is
<br>
<p>1) receive/poll a new PR
<br>
<p>2) create a &quot;check&quot; and mark it pending
<br>
<p>3) run a script
<br>
<p>4) update the &quot;check&quot; status (OK/Failed) based on the exit status of the 
<br>
script.
<br>
<p><p>that being said, it is possible to be &quot;creative&quot; in the script and use 
<br>
the github api.
<br>
<p>For example, one script could create several checks, or post comments 
<br>
and set tags in the PR.
<br>
<p><p>as far as i am concerned, i think (all) the check(s) should be expected 
<br>
to success.
<br>
<p>and i would also consider as a plus if some comments are posted or tags 
<br>
are set when some non standard tests fail, and/or to remind some issues 
<br>
still exists.
<br>
<p>for example, the check status could be OK if OpenMPI builds 
<br>
successfully, and a comment could be posted to indicate valgrind test fails.
<br>
<p><p>that would save some resources (only one Jenkins server, OpenMPI is 
<br>
built once per PR) and make PR statuses easier to interpret (e.g. all 
<br>
checks should success unless there is a bug or an intermittent failure) 
<br>
while providing additional information.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/8/2016 6:25 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I would agree with all those points
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 7, 2016, at 2:12 PM, Howard Pritchard &lt;hppritcha_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We briefly discussed this some today.  I would like to avoid the 
</span><br>
<span class="quotelev2">&gt;&gt; mini-MTT approach for PR checking.
</span><br>
<span class="quotelev2">&gt;&gt; At the same time, one can also see why it might be useful from time 
</span><br>
<span class="quotelev2">&gt;&gt; to time to make changes to
</span><br>
<span class="quotelev2">&gt;&gt; the script a given jenkins project runs on PRs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An idea we discussed was to have jenkins folks support a &quot;stable&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; version of their jenkins script.  If they would
</span><br>
<span class="quotelev2">&gt;&gt; like to make changes,  they would create an experimental, temporary 
</span><br>
<span class="quotelev2">&gt;&gt; jenkins project to run the new script.
</span><br>
<span class="quotelev2">&gt;&gt; If the new project's script runs clean against open PRs, the new 
</span><br>
<span class="quotelev2">&gt;&gt; script can be swapped in to the
</span><br>
<span class="quotelev2">&gt;&gt; original jenkins project.  The experimental project could then be 
</span><br>
<span class="quotelev2">&gt;&gt; deactivated.  If the new script showed failures in the
</span><br>
<span class="quotelev2">&gt;&gt; open PRs, or against master or other branch, issues can be opened to 
</span><br>
<span class="quotelev2">&gt;&gt; track the problem(s) found by the
</span><br>
<span class="quotelev2">&gt;&gt; script.  The experimental, temporary jenkins project can continue to 
</span><br>
<span class="quotelev2">&gt;&gt; run, but its  &quot;failure&quot; status can be ignored
</span><br>
<span class="quotelev2">&gt;&gt; until the underlying bug(s) is fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think it makes much sense to run a jenkins script against PRs 
</span><br>
<span class="quotelev2">&gt;&gt; if it fails when run against master.
</span><br>
<span class="quotelev2">&gt;&gt; The purpose of jenkins PR testing is to trap new problems, not to 
</span><br>
<span class="quotelev2">&gt;&gt; keep reminding us there are problems
</span><br>
<span class="quotelev2">&gt;&gt; with the underlying branch which the PR targets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-06-07 13:33 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I&#146;m trying to get a handle on our use of Jenkins testing for PRs
</span><br>
<span class="quotelev2">&gt;&gt;     prior to committing them. When we first discussed this, it was my
</span><br>
<span class="quotelev2">&gt;&gt;     impression that our objective was to screen PRs to catch any
</span><br>
<span class="quotelev2">&gt;&gt;     errors caused by differences in environment and to avoid
</span><br>
<span class="quotelev2">&gt;&gt;     regressions. However, it appears that the tests keep changing
</span><br>
<span class="quotelev2">&gt;&gt;     without warning, leading to the impression that we are using
</span><br>
<span class="quotelev2">&gt;&gt;     Jenkins as a &#147;mini-MTT&#148; testing device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     So I think we need to come to consensus on the purpose of the
</span><br>
<span class="quotelev2">&gt;&gt;     Jenkins testing. If it is to screen for regressions, then the
</span><br>
<span class="quotelev2">&gt;&gt;     tests need to remain stable. A PR that does not introduce any new
</span><br>
<span class="quotelev2">&gt;&gt;     problems might not address old ones, but that is no reason to
</span><br>
<span class="quotelev2">&gt;&gt;     flag it as an &#147;error&#148;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On the other hand, if the objective is to use Jenkins as a
</span><br>
<span class="quotelev2">&gt;&gt;     &#147;mini-MTT&#148;, then we need to agree on how/when a PR is ready to be
</span><br>
<span class="quotelev2">&gt;&gt;     merged. Insisting that nothing be merged until even a mini-MTT is
</span><br>
<span class="quotelev2">&gt;&gt;     perfectly clean is probably excessively prohibitive - it would
</span><br>
<span class="quotelev2">&gt;&gt;     require that the entire community (and not just the one proposing
</span><br>
<span class="quotelev2">&gt;&gt;     the PR) take responsibility for cleaning up the code base against
</span><br>
<span class="quotelev2">&gt;&gt;     any and all imposed tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     So I would welcome opinions on this: are we using Jenkins as a
</span><br>
<span class="quotelev2">&gt;&gt;     screening tool on changes, or as a test for overall correctness
</span><br>
<span class="quotelev2">&gt;&gt;     of the code base?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19087.php">http://www.open-mpi.org/community/lists/devel/2016/06/19087.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19088.php">http://www.open-mpi.org/community/lists/devel/2016/06/19088.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19089.php">http://www.open-mpi.org/community/lists/devel/2016/06/19089.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19091.php">Cyril Bordage: "[OMPI devel] Problem with monitoring"</a>
<li><strong>Previous message:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>In reply to:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
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
