<?
$subject_val = "Re: [OMPI users] Segmentation Fault";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 17:37:21 2014" -->
<!-- isoreceived="20140321213721" -->
<!-- sent="Fri, 21 Mar 2014 21:37:20 +0000" -->
<!-- isosent="20140321213720" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault" -->
<!-- id="3E8B5A72-E7EA-423A-8D3D-A58543E6ADD9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFqWg=TFxGjPc7p_-aj27Nh7rEMd6hjHAOxUNeUvFPcZFv4kBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation Fault<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 17:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>In reply to:</strong> <a href="23909.php">madhurima madhunapanthula: "[OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2014, at 3:26 AM, madhurima madhunapanthula &lt;erankimadhu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Iam trying to link the jumpshot libraries with the graph500 (mpi_tuned_2d sources).
</span><br>
<span class="quotelev1">&gt; After linkin the libraries and executing mpirun with the graph500_mpi_custome_n binaries Iam getting the following segmenation fault.
</span><br>
<p>Are you using Open MPI?
<br>
<p><span class="quotelev1">&gt; I have no clue as to where the issue is. When I dont link the jumpshot libraries with the Graph500(mpi_tuned_2d) sources the binaries run without
</span><br>
<span class="quotelev1">&gt; segfault error
</span><br>
<p>That seems to imply that the problem is with Jumpshot...?
<br>
<p>The stack trace you're showing seems to show that it's segv'ing inside graph500_mpi_custom_8, which seems to be supplying its own MPI_Testany (which is how these profiling libraries usually work).  You might want to look at the corefile and see what Jumpshot is doing when the segv occurs.
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
<li><strong>Next message:</strong> <a href="23934.php">Jeff Squyres (jsquyres): "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>In reply to:</strong> <a href="23909.php">madhurima madhunapanthula: "[OMPI users] Segmentation Fault"</a>
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
