<?
$subject_val = "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  2 10:25:57 2012" -->
<!-- isoreceived="20120802142557" -->
<!-- sent="Thu, 2 Aug 2012 10:25:53 -0400" -->
<!-- isosent="20120802142553" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk" -->
<!-- id="D895198B-D966-4D44-B7C3-6AE6B4B0729F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120801231443.26028670_at_Gantu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-02 10:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11360.php">Iliev, Hristo: "[OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>Previous message:</strong> <a href="11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>In reply to:</strong> <a href="11356.php">Christopher Yeoh: "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 1, 2012, at 9:44 AM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering if anyone else recently had tried to run trunk
</span><br>
<span class="quotelev1">&gt; configured with --enable-mpi-thread-multiple and an MPI program that
</span><br>
<span class="quotelev1">&gt; passed MPI_THREAD_MULTIPLE to MPI_Init_thread on a machine using the
</span><br>
<span class="quotelev1">&gt; openib btl? 
</span><br>
<p>I run one of my MTT configs with --enable-mpi-thread-multiple, but only run single-threaded apps (i.e., MPI_THREAD_SINGLE).  This just checks the bozo case.
<br>
<p><span class="quotelev1">&gt; I'm seeing even very basic programs hang. If it is working for you,
</span><br>
<span class="quotelev1">&gt; what architecture are you running on? (may help me debug what is going
</span><br>
<span class="quotelev1">&gt; on with my setup). In contrast, 1.6 on the same machines work fine for
</span><br>
<span class="quotelev1">&gt; me (well as fine as MPI_THREAD_MULTIPLE has ever worked anyway ;-) 
</span><br>
<p>I wonder what broke on the trunk...
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
<li><strong>Next message:</strong> <a href="11360.php">Iliev, Hristo: "[OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>Previous message:</strong> <a href="11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>In reply to:</strong> <a href="11356.php">Christopher Yeoh: "[OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Reply:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
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
