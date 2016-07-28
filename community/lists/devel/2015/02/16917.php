<?
$subject_val = "Re: [OMPI devel] HELP in OpenMPI - for PH.D research";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 08:57:50 2015" -->
<!-- isoreceived="20150203135750" -->
<!-- sent="Tue, 3 Feb 2015 13:57:48 +0000" -->
<!-- isosent="20150203135748" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HELP in OpenMPI - for PH.D research" -->
<!-- id="4808D85E-EFE4-4118-81BB-A4B3CA2DB624_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAD1qWRTHLQ_wAnohdvZ6zwg2wxPzvt0=1pt+7rcnE-A1qozRXQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 08:57:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16918.php">Ralph Castain: "Re: [OMPI devel] open mpi"</a>
<li><strong>Previous message:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>In reply to:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16919.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Reply:</strong> <a href="16919.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you looked at the &quot;self&quot; CR module?
<br>
<p><span class="quotelev1">&gt; On Feb 3, 2015, at 8:46 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-02-02 22:08 UTC+01:00, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2015, at 1:06 PM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good afternoon development team,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a small problem in OpenMPI to achieve my Ph.D research
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My problem is that :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while saving the context.PID of a process running on a node with BLCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through OpenMPI on the checkpoint folder, i also want to get and save the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; utilisation average of the CPU and the Memory for this process on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file, and use this informations later.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was hoping Adrian would answer here, since this is a CR question.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The current code does not do this, as you have discovered -- the only way to
</span><br>
<span class="quotelev2">&gt;&gt; save it would be to modify the code to do this.  Are you comfortable doing
</span><br>
<span class="quotelev2">&gt;&gt; that?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, what version of OMPI are you using?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using Open MPI 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or there is another method to have this informations ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you want this information in an ongoing basis, or just when you
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint / restart?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want this information when i checkpoint/restart
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16880.php">http://www.open-mpi.org/community/lists/devel/2015/02/16880.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; DIBAMOU MBEUYO Cyrille
</span><br>
<span class="quotelev1">&gt; Computer Engineer, M.Sc.
</span><br>
<span class="quotelev1">&gt; Ph.D. Student in Computer Science
</span><br>
<span class="quotelev1">&gt; *Mobile* : (+237) 696 608 826 / 674 979 502
</span><br>
<span class="quotelev1">&gt; The University Of Ngaoundere,  CAMEROUN
</span><br>
<span class="quotelev1">&gt; *Other Email *: cdibamou_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16916.php">http://www.open-mpi.org/community/lists/devel/2015/02/16916.php</a>
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
<li><strong>Next message:</strong> <a href="16918.php">Ralph Castain: "Re: [OMPI devel] open mpi"</a>
<li><strong>Previous message:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>In reply to:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16919.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Reply:</strong> <a href="16919.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
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
