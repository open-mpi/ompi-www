<?
$subject_val = "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 07:01:12 2014" -->
<!-- isoreceived="20141111120112" -->
<!-- sent="Tue, 11 Nov 2014 21:01:05 +0900" -->
<!-- isosent="20141111120105" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)" -->
<!-- id="tx4oxw5yhim9orh6a2tl7pdv.1415707265065_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] Jenkins vs master (and v1.8)" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 07:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16288.php">Mike Dubman: "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Previous message:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16288.php">Mike Dubman: "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Reply:</strong> <a href="16288.php">Mike Dubman: "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Mike,
<br>
<p>BTW what is the distro running on your test cluster ?
<br>
<p>Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;ok, I disabled vader tests in SHMEM and it passes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it can be requested from jenkins by specifying &quot;vader&quot; in PR comment line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Nov 11, 2014 at 11:04 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;that will remove the false positive, but also remove an important piece of information :
</span><br>
<span class="quotelev1">&gt;there is something wrong with the master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;would you mind discussion this on the weekly call ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/11/11 17:38, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;how about if I will disable the failing test(s) and make jenkins to pass? It will help us to make sure we don`t break something that did work before? On Tue, Nov 11, 2014 at 7:02 AM, Gilles Gouaillardet &lt; gilles.gouaillardet_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Mike, Jenkins runs automated tests on each pull request, and i think this is a good thing. recently, it reported a bunch of failure but i could not find anything to blame in the PR itself. so i created a dummy PR <a href="https://github.com/open-mpi/ompi/pull/264">https://github.com/open-mpi/ompi/pull/264</a> with git commit --allow-empty and waited for Jenkins to do its job. the test failed, which means there is an issue in the master. from the master point of view, it is good to know there is an issue. from the PR point of view, this is a false positive since the PR does nothing wrong. i was unable to find anything on github that indicates the master does not pass the automated tests. is such automated test running vs the master ? if yes, where can we find the results ? in order to avoid dealing with false positive, is there any possibility to disable automated tests on the PR if the master does not pass the tests ? Cheers, Gilles _______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16283.php">http://www.open-mpi.org/community/lists/devel/2014/11/16283.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16284.php">http://www.open-mpi.org/community/lists/devel/2014/11/16284.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16285.php">http://www.open-mpi.org/community/lists/devel/2014/11/16285.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;M.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16288.php">Mike Dubman: "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Previous message:</strong> <a href="16286.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16288.php">Mike Dubman: "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Reply:</strong> <a href="16288.php">Mike Dubman: "Re: [OMPI devel] OMPI devel] Jenkins vs master (and v1.8)"</a>
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
