<?
$subject_val = "Re: [OMPI devel] HELP in OpenMPI - for PH.D research";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 16:08:45 2015" -->
<!-- isoreceived="20150202210845" -->
<!-- sent="Mon, 2 Feb 2015 21:08:43 +0000" -->
<!-- isosent="20150202210843" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] HELP in OpenMPI - for PH.D research" -->
<!-- id="A011FBB5-60B8-44AE-B7FC-482BD12B095A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAD1qWRRYm0tzNo9x2J+Y_OdGJnfUvtbEApoApkdRWmfmK=5bgQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-02 16:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16881.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16824.php">Cyrille DIBAMOU MBEUYO: "[OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Reply:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2015, at 1:06 PM, Cyrille DIBAMOU MBEUYO &lt;cdibamou_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good afternoon development team,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a small problem in OpenMPI to achieve my Ph.D research
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is that :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while saving the context.PID of a process running on a node with BLCR
</span><br>
<span class="quotelev1">&gt; through OpenMPI on the checkpoint folder, i also want to get and save the
</span><br>
<span class="quotelev1">&gt; utilisation average of the CPU and the Memory for this process on a
</span><br>
<span class="quotelev1">&gt; file, and use this informations later.
</span><br>
<p>I was hoping Adrian would answer here, since this is a CR question.  :-)
<br>
<p>The current code does not do this, as you have discovered -- the only way to save it would be to modify the code to do this.  Are you comfortable doing that?
<br>
<p>If so, what version of OMPI are you using?
<br>
<p><span class="quotelev1">&gt; Or there is another method to have this informations ?
</span><br>
<p>Do you want this information in an ongoing basis, or just when you checkpoint / restart?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16881.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16879.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16824.php">Cyrille DIBAMOU MBEUYO: "[OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
<li><strong>Reply:</strong> <a href="16916.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] HELP in OpenMPI - for PH.D research"</a>
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
