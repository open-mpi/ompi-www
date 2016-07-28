<?
$subject_val = "Re: [OMPI devel] RFC: Jenkins testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 09:25:59 2015" -->
<!-- isoreceived="20151125142559" -->
<!-- sent="Wed, 25 Nov 2015 06:25:52 -0800" -->
<!-- isosent="20151125142552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Jenkins testing" -->
<!-- id="C1CEEB45-B3B3-4F1C-BE25-C304315E8943_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5siTsxNvmd+O6EP0vpH8Mj3cczs7wRP4otRi-YSmWM_9A_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-25 09:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18391.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>In reply to:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18391.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Reply:</strong> <a href="18391.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree about the limitation. However, what Howard is doing helps resolve it by breaking out the Jenkins runs into categories. So instead of one massive test session, setup one Jenkins server for each category. Then we can set the specific tags according to the test category.
<br>
<p>Make sense?
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Nov 25, 2015, at 3:54 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; We are kind of limited by the github API <a href="https://developer.github.com/v3/repos/statuses/">https://developer.github.com/v3/repos/statuses/</a> &lt;<a href="https://developer.github.com/v3/repos/statuses/">https://developer.github.com/v3/repos/statuses/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Basically, a status is pending, success, error or failure plus a string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A possible work around is to have Jenkins set labels on the PR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If only valgrind fails, the status could be succes, and the valgrind failure cold be reported via the status string (that no one might bother reading, but this is an other story) or via a label
</span><br>
<span class="quotelev1">&gt; (Should the label be for success or failure ?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree it is not obvious (not to say impossible) to fully understand what Jenkins is doing under the hood. That could/should be documented, or at least, the Jenkins plugin could be made published
</span><br>
<span class="quotelev1">&gt; (Public repository like the bot used to set labels/milestones/assignees, or private in the ompi-tests repository)
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
<span class="quotelev1">&gt; On Wednesday, November 25, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wanted to pull this conversation out from the specific issue where it was being conducted as I think it merits a broader discussion. I understand and appreciate the role of the Jenkins testing - what I am trying to find is a way to make that testing more usable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two things that I think would help:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. separating the tests being conducted into different &#226;&#128;&#156;buckets&#226;&#128;&#157;. We now have several types of testing being conducted:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * simple build tests. These don&#226;&#128;&#153;t involve any execution. If something fails a build test, it would be
</span><br>
<span class="quotelev1">&gt;       very helpful to clearly state exactly what configure options were being used, and what compiler.
</span><br>
<span class="quotelev1">&gt;       Ideally, such failures would be labeled as &#226;&#128;&#156;build&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * valgrind tests. These are problematic in that they are not necessarily PR-specific - if anything
</span><br>
<span class="quotelev1">&gt;        causes a leak or valgrind issue, every PR is marked as &#226;&#128;&#156;failed&#226;&#128;&#157; and can lead to wasted time
</span><br>
<span class="quotelev1">&gt;        chasing non-existent problems with a specific PR. Unfortunately, I can&#226;&#128;&#153;t think of a way to get
</span><br>
<span class="quotelev1">&gt;        Jenkins to properly deal with the issue other than to mark such test results as &#226;&#128;&#156;valgrind&#226;&#128;&#157; so
</span><br>
<span class="quotelev1">&gt;        they are clearly called out as being in that category
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * distribution tests that build tarballs, run &#226;&#128;&#156;make distcheck&#226;&#128;&#157;, etc. These usually fail due to something
</span><br>
<span class="quotelev1">&gt;       not being included in the tarball, or some directory not being completely cleaned. This is
</span><br>
<span class="quotelev1">&gt;       another case where it is really important to know, for example, that someone used a platform
</span><br>
<span class="quotelev1">&gt;       file when building the tarball, so it would really help to know exactly how this test was conducted.
</span><br>
<span class="quotelev1">&gt;       Ideally, any distribution test failure would be marked as &#226;&#128;&#156;distribution&#226;&#128;&#157; so we know what happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * run tests that execute various programs. Lots of things can go wrong here, many of them
</span><br>
<span class="quotelev1">&gt;       dependent on exactly how the code was built (so we know which components were
</span><br>
<span class="quotelev1">&gt;       around) and how it was run (e.g., default MCA param file). Ideally, these failures would
</span><br>
<span class="quotelev1">&gt;       be marked as &#226;&#128;&#156;run&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note: when I ask for a clear statement of configuration options etc, what I&#226;&#128;&#153;m saying is that it is very hard to sift thru hundreds of lines of output to find, for example, the cmd line that failed. A more concise test output would make debugging much faster and easier, and therefore make Jenkins testing much more usable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. having the Jenkins testers clearly tell us what tests they are expecting us to pass. Perhaps a list of these could be posted somewhere, and some notification given as to when those lists are being changed? It would help avoid surprises and allow developers a chance to test things themselves before posting PRs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know I&#226;&#128;&#153;m asking for some effort on behalf of those running these servers. However, I think it would make those efforts much more useful.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18388.php">http://www.open-mpi.org/community/lists/devel/2015/11/18388.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/11/18388.php">http://www.open-mpi.org/community/lists/devel/2015/11/18388.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18389.php">http://www.open-mpi.org/community/lists/devel/2015/11/18389.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18390/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18391.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Previous message:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>In reply to:</strong> <a href="18389.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18391.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
<li><strong>Reply:</strong> <a href="18391.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Jenkins testing"</a>
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
