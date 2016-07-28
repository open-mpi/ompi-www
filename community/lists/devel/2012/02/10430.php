<?
$subject_val = "Re: [OMPI devel] MVAPICH2 vs Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 13:17:21 2012" -->
<!-- isoreceived="20120215181721" -->
<!-- sent="Wed, 15 Feb 2012 13:17:16 -0500" -->
<!-- isosent="20120215181716" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MVAPICH2 vs Open-MPI" -->
<!-- id="AED16CD5-96C3-47E7-A61B-2842048D8ACA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F34C0D009602_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MVAPICH2 vs Open-MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 13:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10431.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10412.php">Rolf vandeVaart: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the short answer is: Rolf is currently working on better GP-GPU integration with Open MPI.  :-)
<br>
<p><p>On Feb 14, 2012, at 5:36 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; There are several things going on here that make their library perform better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With respect to inter-node performance, both MVAPICH2 and Open MPI copy the GPU memory into host memory first.  However, they are using special host buffers that and a code path that allows them to copy the data asynchronously and therefore do a better job pipelining than Open MPI.  I believe their host buffers are bigger which works better at larger messages.  Open MPI just piggy backs on the existing host buffers in the Open MPI openib BTL.  Open MPI also just uses synchronous copies .  (There is hope to improve that)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Secondly, with respect to intra-node performance, they are using the Inter Process Communication feature of CUDA which means that within a node, one can move GPU memory directly from one GPU to another.  We have an RFC from December to add this into Open MPI as well, but do not have approval yet.  Hopefully sometime soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Rayson Ho
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, February 14, 2012 4:16 PM.
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] MVAPICH2 vs Open-MPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See P. 38 - 40, MVAPICH2 outperforms Open-MPI for each test, so is it
</span><br>
<span class="quotelev2">&gt;&gt; something that they are doing to optimize for CUDA &amp; GPUs and those
</span><br>
<span class="quotelev2">&gt;&gt; optimizations are not in OMPI, or did they specifically tune MVAPICH2 to
</span><br>
<span class="quotelev2">&gt;&gt; make it shine??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://hpcadvisorycouncil.com/events/2012/Israel">http://hpcadvisorycouncil.com/events/2012/Israel</a>-
</span><br>
<span class="quotelev2">&gt;&gt; Workshop/Presentations/7_OSU.pdf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The benchmark package: <a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10431.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10429.php">Jeff Squyres: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>In reply to:</strong> <a href="10412.php">Rolf vandeVaart: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
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
