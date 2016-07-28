<?
$subject_val = "Re: [OMPI devel] RFC: Jenkins testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 06:54:48 2015" -->
<!-- isoreceived="20151125115448" -->
<!-- sent="Wed, 25 Nov 2015 20:54:45 +0900" -->
<!-- isosent="20151125115445" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Jenkins testing" -->
<!-- id="CAAkFZ5siTsxNvmd+O6EP0vpH8Mj3cczs7wRP4otRi-YSmWM_9A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CCCFA68-3539-4451-9A46-44B6686CC3D7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-11-25 06:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18388.php">Ralph Castain: "[OMPI devel] RFC: Jenkins testing"</a>
<li><strong>In reply to:</strong> <a href="18388.php">Ralph Castain: "[OMPI devel] RFC: Jenkins testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Reply:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and all,
<br>
<p>My 0.02US$
<br>
<p>We are kind of limited by the github API
<br>
<a href="https://developer.github.com/v3/repos/statuses/">https://developer.github.com/v3/repos/statuses/</a>
<br>
Basically, a status is pending, success, error or failure plus a string.
<br>
<p>A possible work around is to have Jenkins set labels on the PR.
<br>
<p>If only valgrind fails, the status could be succes, and the valgrind
<br>
failure cold be reported via the status string (that no one might bother
<br>
reading, but this is an other story) or via a label
<br>
(Should the label be for success or failure ?)
<br>
<p>I agree it is not obvious (not to say impossible) to fully understand what
<br>
Jenkins is doing under the hood. That could/should be documented, or at
<br>
least, the Jenkins plugin could be made published
<br>
(Public repository like the bot used to set labels/milestones/assignees, or
<br>
private in the ompi-tests repository)
<br>
<p>I will give some more thoughts to the testing part.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, November 25, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to pull this conversation out from the specific issue where it
</span><br>
<span class="quotelev1">&gt; was being conducted as I think it merits a broader discussion. I understand
</span><br>
<span class="quotelev1">&gt; and appreciate the role of the Jenkins testing - what I am trying to find
</span><br>
<span class="quotelev1">&gt; is a way to make that testing more usable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two things that I think would help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. separating the tests being conducted into different &#226;&#128;&#156;buckets&#226;&#128;&#157;. We now
</span><br>
<span class="quotelev1">&gt; have several types of testing being conducted:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * simple build tests. These don&#226;&#128;&#153;t involve any execution. If something
</span><br>
<span class="quotelev1">&gt; fails a build test, it would be
</span><br>
<span class="quotelev1">&gt;       very helpful to clearly state exactly what configure options were
</span><br>
<span class="quotelev1">&gt; being used, and what compiler.
</span><br>
<span class="quotelev1">&gt;       Ideally, such failures would be labeled as &#226;&#128;&#156;build&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * valgrind tests. These are problematic in that they are not
</span><br>
<span class="quotelev1">&gt; necessarily PR-specific - if anything
</span><br>
<span class="quotelev1">&gt;        causes a leak or valgrind issue, every PR is marked as &#226;&#128;&#156;failed&#226;&#128;&#157; and
</span><br>
<span class="quotelev1">&gt; can lead to wasted time
</span><br>
<span class="quotelev1">&gt;        chasing non-existent problems with a specific PR. Unfortunately, I
</span><br>
<span class="quotelev1">&gt; can&#226;&#128;&#153;t think of a way to get
</span><br>
<span class="quotelev1">&gt;        Jenkins to properly deal with the issue other than to mark such
</span><br>
<span class="quotelev1">&gt; test results as &#226;&#128;&#156;valgrind&#226;&#128;&#157; so
</span><br>
<span class="quotelev1">&gt;        they are clearly called out as being in that category
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * distribution tests that build tarballs, run &#226;&#128;&#156;make distcheck&#226;&#128;&#157;, etc.
</span><br>
<span class="quotelev1">&gt; These usually fail due to something
</span><br>
<span class="quotelev1">&gt;       not being included in the tarball, or some directory not being
</span><br>
<span class="quotelev1">&gt; completely cleaned. This is
</span><br>
<span class="quotelev1">&gt;       another case where it is really important to know, for example, that
</span><br>
<span class="quotelev1">&gt; someone used a platform
</span><br>
<span class="quotelev1">&gt;       file when building the tarball, so it would really help to know
</span><br>
<span class="quotelev1">&gt; exactly how this test was conducted.
</span><br>
<span class="quotelev1">&gt;       Ideally, any distribution test failure would be marked as
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;distribution&#226;&#128;&#157; so we know what happened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * run tests that execute various programs. Lots of things can go wrong
</span><br>
<span class="quotelev1">&gt; here, many of them
</span><br>
<span class="quotelev1">&gt;       dependent on exactly how the code was built (so we know which
</span><br>
<span class="quotelev1">&gt; components were
</span><br>
<span class="quotelev1">&gt;       around) and how it was run (e.g., default MCA param file). Ideally,
</span><br>
<span class="quotelev1">&gt; these failures would
</span><br>
<span class="quotelev1">&gt;       be marked as &#226;&#128;&#156;run&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note: when I ask for a clear statement of configuration options
</span><br>
<span class="quotelev1">&gt; etc, what I&#226;&#128;&#153;m saying is that it is very hard to sift thru hundreds of lines
</span><br>
<span class="quotelev1">&gt; of output to find, for example, the cmd line that failed. A more concise
</span><br>
<span class="quotelev1">&gt; test output would make debugging much faster and easier, and therefore make
</span><br>
<span class="quotelev1">&gt; Jenkins testing much more usable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. having the Jenkins testers clearly tell us what tests they are
</span><br>
<span class="quotelev1">&gt; expecting us to pass. Perhaps a list of these could be posted somewhere,
</span><br>
<span class="quotelev1">&gt; and some notification given as to when those lists are being changed? It
</span><br>
<span class="quotelev1">&gt; would help avoid surprises and allow developers a chance to test things
</span><br>
<span class="quotelev1">&gt; themselves before posting PRs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know I&#226;&#128;&#153;m asking for some effort on behalf of those running these
</span><br>
<span class="quotelev1">&gt; servers. However, I think it would make those efforts much more useful.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18388.php">http://www.open-mpi.org/community/lists/devel/2015/11/18388.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18388.php">Ralph Castain: "[OMPI devel] RFC: Jenkins testing"</a>
<li><strong>In reply to:</strong> <a href="18388.php">Ralph Castain: "[OMPI devel] RFC: Jenkins testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Reply:</strong> <a href="18390.php">Ralph Castain: "Re: [OMPI devel] RFC: Jenkins testing"</a>
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
