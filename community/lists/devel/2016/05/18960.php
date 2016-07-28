<?
$subject_val = "Re: [OMPI devel] Jenkins mindist test now failing in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 18:10:55 2016" -->
<!-- isoreceived="20160510221055" -->
<!-- sent="Tue, 10 May 2016 15:10:53 -0700" -->
<!-- isosent="20160510221053" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins mindist test now failing in 2.x" -->
<!-- id="CAMD57ofn29F6hgDFB+PBUjFZNy8cV-2vM7JfYoUZxo9HdjtoeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F9F1067B-3FAB-4333-A678-381B7EEE7CE8_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 18:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>Previous message:</strong> <a href="18959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Reply:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick - nothing I can do with that blast. I can't find the root issue buried
<br>
in all that memory map. Looks like the test totally hosed, but I'm unaware
<br>
of anything going over there in the last day or so that would impact that
<br>
area.
<br>
<p><p>On Tue, May 10, 2016 at 2:57 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Crud.  Can you have a look and see why mindist is failing on v2.x?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a full Jenkins output (beware: it's long):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://bgate.mellanox.com/jenkins/job/gh-ompi-release-pr/1640/consoleFull">http://bgate.mellanox.com/jenkins/job/gh-ompi-release-pr/1640/consoleFull</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The corresponding PR is removing the timer/aix component; it has nothing
</span><br>
<span class="quotelev1">&gt; to do with mindist:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://github.com/open-mpi/ompi-release/pull/1153">https://github.com/open-mpi/ompi-release/pull/1153</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 10, 2016, at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cannot be the same reason, Jeff - the schizo updates never went over
</span><br>
<span class="quotelev1">&gt; there. If mindist is failing in 2.x, it is for a totally different reason
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 10, 2016 at 2:11 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ralph --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You fixed the mindist test on master, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you PR the fix for the 2.x branch?  We're seeing those mindist
</span><br>
<span class="quotelev1">&gt; failures on v2.x now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18956.php">http://www.open-mpi.org/community/lists/devel/2016/05/18956.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18958.php">http://www.open-mpi.org/community/lists/devel/2016/05/18958.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18959.php">http://www.open-mpi.org/community/lists/devel/2016/05/18959.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18960/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>Previous message:</strong> <a href="18959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Reply:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
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
