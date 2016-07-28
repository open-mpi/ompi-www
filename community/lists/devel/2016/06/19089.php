<?
$subject_val = "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 17:25:16 2016" -->
<!-- isoreceived="20160607212516" -->
<!-- sent="Tue, 7 Jun 2016 14:25:12 -0700" -->
<!-- isosent="20160607212512" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?" -->
<!-- id="AF4DDD38-8161-415F-B198-74A8B6015DF6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj78Aq_MwLqyKcwNnSqFhZ1PGNJuR3YifOxrPXjLXV7CXw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 17:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Previous message:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>In reply to:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Reply:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would agree with all those points 
<br>
<p><span class="quotelev1">&gt; On Jun 7, 2016, at 2:12 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HI Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We briefly discussed this some today.  I would like to avoid the mini-MTT approach for PR checking.
</span><br>
<span class="quotelev1">&gt; At the same time, one can also see why it might be useful from time to time to make changes to
</span><br>
<span class="quotelev1">&gt; the script a given jenkins project runs on PRs.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An idea we discussed was to have jenkins folks support a &quot;stable&quot; version of their jenkins script.  If they would
</span><br>
<span class="quotelev1">&gt; like to make changes,  they would create an experimental, temporary jenkins project to run the new script.
</span><br>
<span class="quotelev1">&gt; If the new project's script runs clean against open PRs, the new script can be swapped in to the
</span><br>
<span class="quotelev1">&gt; original jenkins project.  The experimental project could then be deactivated.  If the new script showed failures in the
</span><br>
<span class="quotelev1">&gt; open PRs, or against master or other branch, issues can be opened to track the problem(s) found by the
</span><br>
<span class="quotelev1">&gt; script.  The experimental, temporary jenkins project can continue to run, but its  &quot;failure&quot; status can be ignored
</span><br>
<span class="quotelev1">&gt; until the underlying bug(s) is fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think it makes much sense to run a jenkins script against PRs if it fails when run against master.
</span><br>
<span class="quotelev1">&gt; The purpose of jenkins PR testing is to trap new problems, not to keep reminding us there are problems
</span><br>
<span class="quotelev1">&gt; with the underlying branch which the PR targets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-06-07 13:33 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m trying to get a handle on our use of Jenkins testing for PRs prior to committing them. When we first discussed this, it was my impression that our objective was to screen PRs to catch any errors caused by differences in environment and to avoid regressions. However, it appears that the tests keep changing without warning, leading to the impression that we are using Jenkins as a &#226;&#128;&#156;mini-MTT&#226;&#128;&#157; testing device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think we need to come to consensus on the purpose of the Jenkins testing. If it is to screen for regressions, then the tests need to remain stable. A PR that does not introduce any new problems might not address old ones, but that is no reason to flag it as an &#226;&#128;&#156;error&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, if the objective is to use Jenkins as a &#226;&#128;&#156;mini-MTT&#226;&#128;&#157;, then we need to agree on how/when a PR is ready to be merged. Insisting that nothing be merged until even a mini-MTT is perfectly clean is probably excessively prohibitive - it would require that the entire community (and not just the one proposing the PR) take responsibility for cleaning up the code base against any and all imposed tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I would welcome opinions on this: are we using Jenkins as a screening tool on changes, or as a test for overall correctness of the code base?
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19087.php">http://www.open-mpi.org/community/lists/devel/2016/06/19087.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/06/19087.php">http://www.open-mpi.org/community/lists/devel/2016/06/19087.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19088.php">http://www.open-mpi.org/community/lists/devel/2016/06/19088.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Previous message:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>In reply to:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Reply:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
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
