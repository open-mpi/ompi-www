<?
$subject_val = "Re: [OMPI devel] MVAPICH2 vs Open-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 17:37:08 2012" -->
<!-- isoreceived="20120214223708" -->
<!-- sent="Tue, 14 Feb 2012 14:36:58 -0800" -->
<!-- isosent="20120214223658" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MVAPICH2 vs Open-MPI" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C0D009602_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHwLALOCBjNxz18GADLfgJbxqY5_6pp7ct0p6CfpoPOv1C2Q=w_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 17:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10413.php">Paul H. Hargrove: "[OMPI devel] the dangers of configure probing argument counts"</a>
<li><strong>Previous message:</strong> <a href="10411.php">Rayson Ho: "[OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="10411.php">Rayson Ho: "[OMPI devel] MVAPICH2 vs Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10430.php">Jeff Squyres: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>Reply:</strong> <a href="10430.php">Jeff Squyres: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are several things going on here that make their library perform better.
<br>
<p>With respect to inter-node performance, both MVAPICH2 and Open MPI copy the GPU memory into host memory first.  However, they are using special host buffers that and a code path that allows them to copy the data asynchronously and therefore do a better job pipelining than Open MPI.  I believe their host buffers are bigger which works better at larger messages.  Open MPI just piggy backs on the existing host buffers in the Open MPI openib BTL.  Open MPI also just uses synchronous copies .  (There is hope to improve that)
<br>
<p>Secondly, with respect to intra-node performance, they are using the Inter Process Communication feature of CUDA which means that within a node, one can move GPU memory directly from one GPU to another.  We have an RFC from December to add this into Open MPI as well, but do not have approval yet.  Hopefully sometime soon.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Rayson Ho
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, February 14, 2012 4:16 PM.
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] MVAPICH2 vs Open-MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;See P. 38 - 40, MVAPICH2 outperforms Open-MPI for each test, so is it
</span><br>
<span class="quotelev1">&gt;something that they are doing to optimize for CUDA &amp; GPUs and those
</span><br>
<span class="quotelev1">&gt;optimizations are not in OMPI, or did they specifically tune MVAPICH2 to
</span><br>
<span class="quotelev1">&gt;make it shine??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://hpcadvisorycouncil.com/events/2012/Israel">http://hpcadvisorycouncil.com/events/2012/Israel</a>-
</span><br>
<span class="quotelev1">&gt;Workshop/Presentations/7_OSU.pdf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The benchmark package: <a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;=================================
</span><br>
<span class="quotelev1">&gt;Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt;<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt;<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10413.php">Paul H. Hargrove: "[OMPI devel] the dangers of configure probing argument counts"</a>
<li><strong>Previous message:</strong> <a href="10411.php">Rayson Ho: "[OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>In reply to:</strong> <a href="10411.php">Rayson Ho: "[OMPI devel] MVAPICH2 vs Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10430.php">Jeff Squyres: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>Reply:</strong> <a href="10430.php">Jeff Squyres: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
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
