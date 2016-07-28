<?
$subject_val = "Re: [OMPI devel] Jenkins mindist test now failing in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 17:58:05 2016" -->
<!-- isoreceived="20160510215805" -->
<!-- sent="Tue, 10 May 2016 21:57:54 +0000" -->
<!-- isosent="20160510215754" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins mindist test now failing in 2.x" -->
<!-- id="F9F1067B-3FAB-4333-A678-381B7EEE7CE8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oebmnzikkPP2k+HdDJQCzWW0Le5s1mQnUc0cj3V179RjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Jenkins mindist test now failing in 2.x<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 17:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Previous message:</strong> <a href="18958.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18958.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Reply:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crud.  Can you have a look and see why mindist is failing on v2.x?
<br>
<p>Here's a full Jenkins output (beware: it's long):
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://bgate.mellanox.com/jenkins/job/gh-ompi-release-pr/1640/consoleFull">http://bgate.mellanox.com/jenkins/job/gh-ompi-release-pr/1640/consoleFull</a>
<br>
<p>The corresponding PR is removing the timer/aix component; it has nothing to do with mindist:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/pull/1153">https://github.com/open-mpi/ompi-release/pull/1153</a>
<br>
<p><p><span class="quotelev1">&gt; On May 10, 2016, at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cannot be the same reason, Jeff - the schizo updates never went over there. If mindist is failing in 2.x, it is for a totally different reason
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 10, 2016 at 2:11 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You fixed the mindist test on master, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you PR the fix for the 2.x branch?  We're seeing those mindist failures on v2.x now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18956.php">http://www.open-mpi.org/community/lists/devel/2016/05/18956.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18958.php">http://www.open-mpi.org/community/lists/devel/2016/05/18958.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Previous message:</strong> <a href="18958.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18958.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Reply:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
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
