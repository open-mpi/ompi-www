<?
$subject_val = "Re: [OMPI devel] Jenkins and coverity logs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 02:47:14 2015" -->
<!-- isoreceived="20150525064714" -->
<!-- sent="Mon, 25 May 2015 09:47:10 +0300" -->
<!-- isosent="20150525064710" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins and coverity logs" -->
<!-- id="CAAO1KybnVn0-cvsY=3x1-+tqmH1sCwWEjX9E3R7ntVHBOwqGTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5562BAF8.1040501_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Jenkins and coverity logs<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 02:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17453.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17451.php">Gilles Gouaillardet: "[OMPI devel] Jenkins and coverity logs"</a>
<li><strong>In reply to:</strong> <a href="17451.php">Gilles Gouaillardet: "[OMPI devel] Jenkins and coverity logs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gillies,
<br>
Thanks for info, will take a look.
<br>
<p>We upgraded recently the jenkins server and it seems that default behave
<br>
was changed and ws/cov_build/ folder now contains info for latest in-flight
<br>
PR only :(
<br>
<p>Will check your advice as well.
<br>
<p>Thanks
<br>
<p><p><p><p>On Mon, May 25, 2015 at 9:02 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; most coverity links reported by Jenkins are invalid
</span><br>
<span class="quotelev1">&gt; for example <a href="https://github.com/open-mpi/ompi/pull/593">https://github.com/open-mpi/ompi/pull/593</a> points to
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws/cov_build/all_535/output/errors/index.html">http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws/cov_build/all_535/output/errors/index.html</a>
</span><br>
<span class="quotelev1">&gt; which does not exist (any more)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; only the link of the most recently ran PR is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from an external point of view (and without any knowledge of how Jenkins
</span><br>
<span class="quotelev1">&gt; is configured), the root cause could be the coverity directory is inside
</span><br>
<span class="quotelev1">&gt; the workspace directory ( e.g.
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws">http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws</a> ) and it
</span><br>
<span class="quotelev1">&gt; seems this directory is recreated each time jenkins runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; possible options could be to move ws/cov_build/all_&lt;pr&gt; to a permanent
</span><br>
<span class="quotelev1">&gt; location (and have jenkins report the new link) or not to remove
</span><br>
<span class="quotelev1">&gt; /jenkins/job/gh-ompi-master-pr//ws/cov_build when Jenkins starts a new job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please have a look ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17451.php">http://www.open-mpi.org/community/lists/devel/2015/05/17451.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17453.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17451.php">Gilles Gouaillardet: "[OMPI devel] Jenkins and coverity logs"</a>
<li><strong>In reply to:</strong> <a href="17451.php">Gilles Gouaillardet: "[OMPI devel] Jenkins and coverity logs"</a>
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
