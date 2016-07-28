<?
$subject_val = "Re: [OMPI devel] RFC: Jenkins testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 09:47:57 2015" -->
<!-- isoreceived="20151125144757" -->
<!-- sent="Wed, 25 Nov 2015 23:47:53 +0900" -->
<!-- isosent="20151125144753" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Jenkins testing" -->
<!-- id="CAAkFZ5vFuiPswfJ5V9gTqu0KaQN2g1TbBKUvTsZjgewDyupJCw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C1CEEB45-B3B3-4F1C-BE25-C304315E8943_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Jenkins testing<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-25 09:47:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18392.php">Ralph Castain: "[OMPI devel] OSHMEM warnings in master"</a>
<li><strong>Previous message:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>In reply to:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I see what you mean.
<br>
<p>A standard Jenkins plugin sets one build status and do not set any label.
<br>
Then the GitHub web UI shows the combined status (e.g. If one build status
<br>
is failed, then the combined build status is failed)
<br>
<p>With a bit of tweaking, a Jenkins plugin can set several labels.
<br>
Also, strictly speaking, one Jenkins server can set several statuses from
<br>
the same run.
<br>
<p>I like the idea of having several statuses (regardless how many servers are
<br>
involved) so it is easier to go straight to the root cause of a failure.
<br>
My next point was the build status should not be failed (otherwise the
<br>
combined status is also failed) for minor annoyances (such as valgrind
<br>
failure).
<br>
Ideally, github would accept a &quot;success with warning&quot; build status, but it
<br>
does not.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, November 25, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree about the limitation. However, what Howard is doing helps resolve
</span><br>
<span class="quotelev1">&gt; it by breaking out the Jenkins runs into categories. So instead of one
</span><br>
<span class="quotelev1">&gt; massive test session, setup one Jenkins server for each category. Then we
</span><br>
<span class="quotelev1">&gt; can set the specific tags according to the test category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2015, at 3:54 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 0.02US$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are kind of limited by the github API
</span><br>
<span class="quotelev1">&gt; <a href="https://developer.github.com/v3/repos/statuses/">https://developer.github.com/v3/repos/statuses/</a>
</span><br>
<span class="quotelev1">&gt; Basically, a status is pending, success, error or failure plus a string.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A possible work around is to have Jenkins set labels on the PR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If only valgrind fails, the status could be succes, and the valgrind
</span><br>
<span class="quotelev1">&gt; failure cold be reported via the status string (that no one might bother
</span><br>
<span class="quotelev1">&gt; reading, but this is an other story) or via a label
</span><br>
<span class="quotelev1">&gt; (Should the label be for success or failure ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree it is not obvious (not to say impossible) to fully understand what
</span><br>
<span class="quotelev1">&gt; Jenkins is doing under the hood. That could/should be documented, or at
</span><br>
<span class="quotelev1">&gt; least, the Jenkins plugin could be made published
</span><br>
<span class="quotelev1">&gt; (Public repository like the bot used to set labels/milestones/assignees,
</span><br>
<span class="quotelev1">&gt; or private in the ompi-tests repository)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will give some more thoughts to the testing part.
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
<span class="quotelev1">&gt; On Wednesday, November 25, 2015, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to pull this conversation out from the specific issue where it
</span><br>
<span class="quotelev2">&gt;&gt; was being conducted as I think it merits a broader discussion. I understand
</span><br>
<span class="quotelev2">&gt;&gt; and appreciate the role of the Jenkins testing - what I am trying to find
</span><br>
<span class="quotelev2">&gt;&gt; is a way to make that testing more usable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are two things that I think would help:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. separating the tests being conducted into different &#226;&#128;&#156;buckets&#226;&#128;&#157;. We now
</span><br>
<span class="quotelev2">&gt;&gt; have several types of testing being conducted:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     * simple build tests. These don&#226;&#128;&#153;t involve any execution. If something
</span><br>
<span class="quotelev2">&gt;&gt; fails a build test, it would be
</span><br>
<span class="quotelev2">&gt;&gt;       very helpful to clearly state exactly what configure options were
</span><br>
<span class="quotelev2">&gt;&gt; being used, and what compiler.
</span><br>
<span class="quotelev2">&gt;&gt;       Ideally, such failures would be labeled as &#226;&#128;&#156;build&#226;&#128;&#157;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     * valgrind tests. These are problematic in that they are not
</span><br>
<span class="quotelev2">&gt;&gt; necessarily PR-specific - if anything
</span><br>
<span class="quotelev2">&gt;&gt;        causes a leak or valgrind issue, every PR is marked as &#226;&#128;&#156;failed&#226;&#128;&#157;
</span><br>
<span class="quotelev2">&gt;&gt; and can lead to wasted time
</span><br>
<span class="quotelev2">&gt;&gt;        chasing non-existent problems with a specific PR. Unfortunately, I
</span><br>
<span class="quotelev2">&gt;&gt; can&#226;&#128;&#153;t think of a way to get
</span><br>
<span class="quotelev2">&gt;&gt;        Jenkins to properly deal with the issue other than to mark such
</span><br>
<span class="quotelev2">&gt;&gt; test results as &#226;&#128;&#156;valgrind&#226;&#128;&#157; so
</span><br>
<span class="quotelev2">&gt;&gt;        they are clearly called out as being in that category
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     * distribution tests that build tarballs, run &#226;&#128;&#156;make distcheck&#226;&#128;&#157;, etc.
</span><br>
<span class="quotelev2">&gt;&gt; These usually fail due to something
</span><br>
<span class="quotelev2">&gt;&gt;       not being included in the tarball, or some directory not being
</span><br>
<span class="quotelev2">&gt;&gt; completely cleaned. This is
</span><br>
<span class="quotelev2">&gt;&gt;       another case where it is really important to know, for example,
</span><br>
<span class="quotelev2">&gt;&gt; that someone used a platform
</span><br>
<span class="quotelev2">&gt;&gt;       file when building the tarball, so it would really help to know
</span><br>
<span class="quotelev2">&gt;&gt; exactly how this test was conducted.
</span><br>
<span class="quotelev2">&gt;&gt;       Ideally, any distribution test failure would be marked as
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#156;distribution&#226;&#128;&#157; so we know what happened.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     * run tests that execute various programs. Lots of things can go
</span><br>
<span class="quotelev2">&gt;&gt; wrong here, many of them
</span><br>
<span class="quotelev2">&gt;&gt;       dependent on exactly how the code was built (so we know which
</span><br>
<span class="quotelev2">&gt;&gt; components were
</span><br>
<span class="quotelev2">&gt;&gt;       around) and how it was run (e.g., default MCA param file). Ideally,
</span><br>
<span class="quotelev2">&gt;&gt; these failures would
</span><br>
<span class="quotelev2">&gt;&gt;       be marked as &#226;&#128;&#156;run&#226;&#128;&#157;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please note: when I ask for a clear statement of configuration options
</span><br>
<span class="quotelev2">&gt;&gt; etc, what I&#226;&#128;&#153;m saying is that it is very hard to sift thru hundreds of lines
</span><br>
<span class="quotelev2">&gt;&gt; of output to find, for example, the cmd line that failed. A more concise
</span><br>
<span class="quotelev2">&gt;&gt; test output would make debugging much faster and easier, and therefore make
</span><br>
<span class="quotelev2">&gt;&gt; Jenkins testing much more usable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. having the Jenkins testers clearly tell us what tests they are
</span><br>
<span class="quotelev2">&gt;&gt; expecting us to pass. Perhaps a list of these could be posted somewhere,
</span><br>
<span class="quotelev2">&gt;&gt; and some notification given as to when those lists are being changed? It
</span><br>
<span class="quotelev2">&gt;&gt; would help avoid surprises and allow developers a chance to test things
</span><br>
<span class="quotelev2">&gt;&gt; themselves before posting PRs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know I&#226;&#128;&#153;m asking for some effort on behalf of those running these
</span><br>
<span class="quotelev2">&gt;&gt; servers. However, I think it would make those efforts much more useful.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18388.php">http://www.open-mpi.org/community/lists/devel/2015/11/18388.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18389.php">http://www.open-mpi.org/community/lists/devel/2015/11/18389.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18392.php">Ralph Castain: "[OMPI devel] OSHMEM warnings in master"</a>
<li><strong>Previous message:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>In reply to:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
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
