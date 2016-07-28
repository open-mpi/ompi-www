<?
$subject_val = "Re: [OMPI devel] Jenkins mindist test now failing in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 22:59:07 2016" -->
<!-- isoreceived="20160511025907" -->
<!-- sent="Wed, 11 May 2016 11:59:05 +0900" -->
<!-- isosent="20160511025905" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Jenkins mindist test now failing in 2.x" -->
<!-- id="c06969a5-02e4-717e-1eba-973812420dc7_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57ofn29F6hgDFB+PBUjFZNy8cV-2vM7JfYoUZxo9HdjtoeA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 22:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>In reply to:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p><p>i found a bug in the mindist_test.c test (missing strdup() cause free() 
<br>
to crash)
<br>
<p>and filed <a href="https://github.com/mellanox-hpc/jenkins_scripts/pull/30">https://github.com/mellanox-hpc/jenkins_scripts/pull/30</a> to get 
<br>
it fixed.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/11/2016 7:10 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ick - nothing I can do with that blast. I can't find the root issue 
</span><br>
<span class="quotelev1">&gt; buried in all that memory map. Looks like the test totally hosed, but 
</span><br>
<span class="quotelev1">&gt; I'm unaware of anything going over there in the last day or so that 
</span><br>
<span class="quotelev1">&gt; would impact that area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 10, 2016 at 2:57 PM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Crud.  Can you have a look and see why mindist is failing on v2.x?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here's a full Jenkins output (beware: it's long):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://bgate.mellanox.com/jenkins/job/gh-ompi-release-pr/1640/consoleFull">http://bgate.mellanox.com/jenkins/job/gh-ompi-release-pr/1640/consoleFull</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The corresponding PR is removing the timer/aix component; it has
</span><br>
<span class="quotelev1">&gt;     nothing to do with mindist:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi-release/pull/1153">https://github.com/open-mpi/ompi-release/pull/1153</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On May 10, 2016, at 5:47 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Cannot be the same reason, Jeff - the schizo updates never went
</span><br>
<span class="quotelev1">&gt;     over there. If mindist is failing in 2.x, it is for a totally
</span><br>
<span class="quotelev1">&gt;     different reason
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Tue, May 10, 2016 at 2:11 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Ralph --
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; You fixed the mindist test on master, right?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Can you PR the fix for the 2.x branch?  We're seeing those
</span><br>
<span class="quotelev1">&gt;     mindist failures on v2.x now.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks!
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;     &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18956.php">http://www.open-mpi.org/community/lists/devel/2016/05/18956.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18958.php">http://www.open-mpi.org/community/lists/devel/2016/05/18958.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18959.php">http://www.open-mpi.org/community/lists/devel/2016/05/18959.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18960.php">http://www.open-mpi.org/community/lists/devel/2016/05/18960.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18962/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Previous message:</strong> <a href="18961.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<li><strong>In reply to:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
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
