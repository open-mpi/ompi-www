<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:32:54 2011" -->
<!-- isoreceived="20110107153254" -->
<!-- sent="Fri, 7 Jan 2011 10:32:49 -0500" -->
<!-- isosent="20110107153249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="ACF1B5ED-6928-4EF2-9BD0-161F1DA81F6D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCA506B-5BB8-4179-B730-685E25E9C575_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:32:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15310.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, bummer -- there goes my theory.  According to the hwloc info you posted earlier, this shows that OMPI is binding to the 1st hyperthread on each core; *not* to both hyperthreads on a single core.  :-\
<br>
<p>It would still be slightly interesting to see if there's any difference when you run with --bind-to-core instead of paffinity_alone.
<br>
<p><p><p>On Jan 7, 2011, at 9:56 AM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Yes, here it is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/1.1rc6r3028/bin/hwloc-bind --get
</span><br>
<span class="quotelev1">&gt; 0x00000001
</span><br>
<span class="quotelev1">&gt; 0x00000002
</span><br>
<span class="quotelev1">&gt; 0x00000004
</span><br>
<span class="quotelev1">&gt; 0x00000008
</span><br>
<span class="quotelev1">&gt; 0x00000010
</span><br>
<span class="quotelev1">&gt; 0x00000020
</span><br>
<span class="quotelev1">&gt; 0x00000040
</span><br>
<span class="quotelev1">&gt; 0x00000080
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Gilbert.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 7 janv. 11 &#224; 15:50, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you run with np=8?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 7, 2011, at 9:49 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for taking care of this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is what I got on a worker node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/1.1rc6r3028/bin/hwloc-bind --get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this what is expected, please ? Or should I try yet another command ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,   Regards,   Gilbert.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 7 janv. 11 &#224; 15:35, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2011, at 11:23 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lstopo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Machine (35GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NUMANode L#0 (P#0 18GB) + Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#1 (P#8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#3 (P#9)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#4 (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#5 (P#10)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PU L#7 (P#11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [snip]
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="15316.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15310.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
