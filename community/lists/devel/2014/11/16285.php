<?
$subject_val = "Re: [OMPI devel] Jenkins vs master (and v1.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 04:04:13 2014" -->
<!-- isoreceived="20141111090413" -->
<!-- sent="Tue, 11 Nov 2014 18:04:26 +0900" -->
<!-- isosent="20141111090426" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins vs master (and v1.8)" -->
<!-- id="5461D11A.1070704_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KybCd5CXwwgssMMdYbhM1DQ-fpXjNVdTOp+P3Fj-n8o-NA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Jenkins vs master (and v1.8)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 04:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Previous message:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>In reply to:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Reply:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>that will remove the false positive, but also remove an important piece
<br>
of information :
<br>
there is something wrong with the master.
<br>
<p>would you mind discussion this on the weekly call ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/11/11 17:38, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; how about if I will disable the failing test(s) and make jenkins to pass?
</span><br>
<span class="quotelev1">&gt; It will help us to make sure we don`t break something that did work before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 11, 2014 at 7:02 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jenkins runs automated tests on each pull request, and i think this is a
</span><br>
<span class="quotelev2">&gt;&gt; good thing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; recently, it reported a bunch of failure but i could not find anything
</span><br>
<span class="quotelev2">&gt;&gt; to blame in the PR itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so i created a dummy PR <a href="https://github.com/open-mpi/ompi/pull/264">https://github.com/open-mpi/ompi/pull/264</a> with
</span><br>
<span class="quotelev2">&gt;&gt; git commit --allow-empty
</span><br>
<span class="quotelev2">&gt;&gt; and waited for Jenkins to do its job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the test failed, which means there is an issue in the master.
</span><br>
<span class="quotelev2">&gt;&gt; from the master point of view, it is good to know there is an issue.
</span><br>
<span class="quotelev2">&gt;&gt; from the PR point of view, this is a false positive since the PR does
</span><br>
<span class="quotelev2">&gt;&gt; nothing wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i was unable to find anything on github that indicates the master does
</span><br>
<span class="quotelev2">&gt;&gt; not pass the automated tests.
</span><br>
<span class="quotelev2">&gt;&gt; is such automated test running vs the master ? if yes, where can we find
</span><br>
<span class="quotelev2">&gt;&gt; the results ?
</span><br>
<span class="quotelev2">&gt;&gt; in order to avoid dealing with false positive, is there any possibility
</span><br>
<span class="quotelev2">&gt;&gt; to disable automated tests on the PR
</span><br>
<span class="quotelev2">&gt;&gt; if the master does not pass the tests ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16283.php">http://www.open-mpi.org/community/lists/devel/2014/11/16283.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16284.php">http://www.open-mpi.org/community/lists/devel/2014/11/16284.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16285/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Previous message:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>In reply to:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Reply:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
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
