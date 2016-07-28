<?
$subject_val = "Re: [OMPI devel] HELP in OpenMPI - for PH.D research";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 08:46:20 2015" -->
<!-- isoreceived="20150203134620" -->
<!-- sent="Tue, 3 Feb 2015 14:46:19 +0100" -->
<!-- isosent="20150203134619" -->
<!-- name="Cyrille DIBAMOU MBEUYO" -->
<!-- email="cdibamou_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HELP in OpenMPI - for PH.D research" -->
<!-- id="CAD1qWRTHLQ_wAnohdvZ6zwg2wxPzvt0=1pt+7rcnE-A1qozRXQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A011FBB5-60B8-44AE-B7FC-482BD12B095A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] HELP in OpenMPI - for PH.D research<br>
<strong>From:</strong> Cyrille DIBAMOU MBEUYO (<em>cdibamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 08:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Previous message:</strong> <a href="16915.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>In reply to:</strong> <a href="16880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Reply:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-02-02 22:08 UTC+01:00, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Jan 25, 2015, at 1:06 PM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good afternoon development team,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a small problem in OpenMPI to achieve my Ph.D research
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is that :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while saving the context.PID of a process running on a node with BLCR
</span><br>
<span class="quotelev2">&gt;&gt; through OpenMPI on the checkpoint folder, i also want to get and save the
</span><br>
<span class="quotelev2">&gt;&gt; utilisation average of the CPU and the Memory for this process on a
</span><br>
<span class="quotelev2">&gt;&gt; file, and use this informations later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was hoping Adrian would answer here, since this is a CR question.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current code does not do this, as you have discovered -- the only way to
</span><br>
<span class="quotelev1">&gt; save it would be to modify the code to do this.  Are you comfortable doing
</span><br>
<span class="quotelev1">&gt; that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, what version of OMPI are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using Open MPI 1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or there is another method to have this informations ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want this information in an ongoing basis, or just when you
</span><br>
<span class="quotelev1">&gt; checkpoint / restart?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want this information when i checkpoint/restart
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16880.php">http://www.open-mpi.org/community/lists/devel/2015/02/16880.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
DIBAMOU MBEUYO Cyrille
Computer Engineer, M.Sc.
Ph.D. Student in Computer Science
*Mobile* : (+237) 696 608 826 / 674 979 502
The University Of Ngaoundere,  CAMEROUN
*Other Email *: cdibamou_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Previous message:</strong> <a href="16915.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>In reply to:</strong> <a href="16880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Reply:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
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
