<?
$subject_val = "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 17:12:48 2016" -->
<!-- isoreceived="20160607211248" -->
<!-- sent="Tue, 7 Jun 2016 15:12:47 -0600" -->
<!-- isosent="20160607211247" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?" -->
<!-- id="CAF1Cqj78Aq_MwLqyKcwNnSqFhZ1PGNJuR3YifOxrPXjLXV7CXw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E1500B3C-A855-43EE-9B8F-D812CE4B278E_at_open-mpi.org" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 17:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Previous message:</strong> <a href="19087.php">Ralph Castain: "[OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>In reply to:</strong> <a href="19087.php">Ralph Castain: "[OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Reply:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ralph,
<br>
<p>We briefly discussed this some today.  I would like to avoid the mini-MTT
<br>
approach for PR checking.
<br>
At the same time, one can also see why it might be useful from time to time
<br>
to make changes to
<br>
the script a given jenkins project runs on PRs.
<br>
<p>An idea we discussed was to have jenkins folks support a &quot;stable&quot; version
<br>
of their jenkins script.  If they would
<br>
like to make changes,  they would create an experimental, temporary jenkins
<br>
project to run the new script.
<br>
If the new project's script runs clean against open PRs, the new script can
<br>
be swapped in to the
<br>
original jenkins project.  The experimental project could then be
<br>
deactivated.  If the new script showed failures in the
<br>
open PRs, or against master or other branch, issues can be opened to track
<br>
the problem(s) found by the
<br>
script.  The experimental, temporary jenkins project can continue to run,
<br>
but its  &quot;failure&quot; status can be ignored
<br>
until the underlying bug(s) is fixed.
<br>
<p>I don't think it makes much sense to run a jenkins script against PRs if it
<br>
fails when run against master.
<br>
The purpose of jenkins PR testing is to trap new problems, not to keep
<br>
reminding us there are problems
<br>
with the underlying branch which the PR targets.
<br>
<p>Howard
<br>
<p><p>2016-06-07 13:33 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m trying to get a handle on our use of Jenkins testing for PRs prior to
</span><br>
<span class="quotelev1">&gt; committing them. When we first discussed this, it was my impression that
</span><br>
<span class="quotelev1">&gt; our objective was to screen PRs to catch any errors caused by differences
</span><br>
<span class="quotelev1">&gt; in environment and to avoid regressions. However, it appears that the tests
</span><br>
<span class="quotelev1">&gt; keep changing without warning, leading to the impression that we are using
</span><br>
<span class="quotelev1">&gt; Jenkins as a &#226;&#128;&#156;mini-MTT&#226;&#128;&#157; testing device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think we need to come to consensus on the purpose of the Jenkins
</span><br>
<span class="quotelev1">&gt; testing. If it is to screen for regressions, then the tests need to remain
</span><br>
<span class="quotelev1">&gt; stable. A PR that does not introduce any new problems might not address old
</span><br>
<span class="quotelev1">&gt; ones, but that is no reason to flag it as an &#226;&#128;&#156;error&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, if the objective is to use Jenkins as a &#226;&#128;&#156;mini-MTT&#226;&#128;&#157;,
</span><br>
<span class="quotelev1">&gt; then we need to agree on how/when a PR is ready to be merged. Insisting
</span><br>
<span class="quotelev1">&gt; that nothing be merged until even a mini-MTT is perfectly clean is probably
</span><br>
<span class="quotelev1">&gt; excessively prohibitive - it would require that the entire community (and
</span><br>
<span class="quotelev1">&gt; not just the one proposing the PR) take responsibility for cleaning up the
</span><br>
<span class="quotelev1">&gt; code base against any and all imposed tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I would welcome opinions on this: are we using Jenkins as a screening
</span><br>
<span class="quotelev1">&gt; tool on changes, or as a test for overall correctness of the code base?
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19087.php">http://www.open-mpi.org/community/lists/devel/2016/06/19087.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Previous message:</strong> <a href="19087.php">Ralph Castain: "[OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>In reply to:</strong> <a href="19087.php">Ralph Castain: "[OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Reply:</strong> <a href="19089.php">Ralph Castain: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
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
