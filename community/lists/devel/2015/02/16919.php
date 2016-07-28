<?
$subject_val = "Re: [OMPI devel] HELP in OpenMPI - for PH.D research";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 10:12:14 2015" -->
<!-- isoreceived="20150203151214" -->
<!-- sent="Tue, 3 Feb 2015 16:12:14 +0100" -->
<!-- isosent="20150203151214" -->
<!-- name="Cyrille DIBAMOU MBEUYO" -->
<!-- email="cdibamou_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HELP in OpenMPI - for PH.D research" -->
<!-- id="CAD1qWRTohnhCxFoTm73SmSV7QZ2gW+Fv5j9U2vbsg-me5j67hg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4808D85E-EFE4-4118-81BB-A4B3CA2DB624_at_cisco.com" -->
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
<strong>Date:</strong> 2015-02-03 10:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16920.php">Nathan Hjelm: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16918.php">Ralph Castain: "Re: [OMPI devel] open mpi"</a>
<li><strong>In reply to:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, i'll look for it.
<br>
<p>Best regards.
<br>
<p>2015-02-03 14:57 UTC+01:00, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Have you looked at the &quot;self&quot; CR module?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2015, at 8:46 AM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-02-02 22:08 UTC+01:00, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 25, 2015, at 1:06 PM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good afternoon development team,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a small problem in OpenMPI to achieve my Ph.D research
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My problem is that :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while saving the context.PID of a process running on a node with BLCR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through OpenMPI on the checkpoint folder, i also want to get and save
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; utilisation average of the CPU and the Memory for this process on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file, and use this informations later.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was hoping Adrian would answer here, since this is a CR question.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current code does not do this, as you have discovered -- the only way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; save it would be to modify the code to do this.  Are you comfortable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, what version of OMPI are you using?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using Open MPI 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or there is another method to have this informations ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you want this information in an ongoing basis, or just when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint / restart?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I want this information when i checkpoint/restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16880.php">http://www.open-mpi.org/community/lists/devel/2015/02/16880.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; DIBAMOU MBEUYO Cyrille
</span><br>
<span class="quotelev2">&gt;&gt; Computer Engineer, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Student in Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; *Mobile* : (+237) 696 608 826 / 674 979 502
</span><br>
<span class="quotelev2">&gt;&gt; The University Of Ngaoundere,  CAMEROUN
</span><br>
<span class="quotelev2">&gt;&gt; *Other Email *: cdibamou_at_[hidden]
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16916.php">http://www.open-mpi.org/community/lists/devel/2015/02/16916.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16917.php">http://www.open-mpi.org/community/lists/devel/2015/02/16917.php</a>
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
<li><strong>Next message:</strong> <a href="16920.php">Nathan Hjelm: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16918.php">Ralph Castain: "Re: [OMPI devel] open mpi"</a>
<li><strong>In reply to:</strong> <a href="16917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
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
