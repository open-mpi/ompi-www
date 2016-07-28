<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 12:25:12 2011" -->
<!-- isoreceived="20110107172512" -->
<!-- sent="Fri, 7 Jan 2011 18:25:05 +0100" -->
<!-- isosent="20110107172505" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="3EA7C297-C10C-4932-AFCB-B477951ECD54_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ACF1B5ED-6928-4EF2-9BD0-161F1DA81F6D_at_cisco.com" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 12:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15323.php">David Mathog: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15321.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I was unable to spot any striking difference in perfs  
<br>
when using --bind-to-core.
<br>
<p>&nbsp;&nbsp;Sorry. Any other suggestion ?
<br>
<p>&nbsp;&nbsp;Regards,    Gilbert.
<br>
<p><p><p>Le 7 janv. 11 &#224; 16:32, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Well, bummer -- there goes my theory.  According to the hwloc info  
</span><br>
<span class="quotelev1">&gt; you posted earlier, this shows that OMPI is binding to the 1st  
</span><br>
<span class="quotelev1">&gt; hyperthread on each core; *not* to both hyperthreads on a single  
</span><br>
<span class="quotelev1">&gt; core.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would still be slightly interesting to see if there's any  
</span><br>
<span class="quotelev1">&gt; difference when you run with --bind-to-core instead of  
</span><br>
<span class="quotelev1">&gt; paffinity_alone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 7, 2011, at 9:56 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, here it is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.1rc6r3028/bin/hwloc-bind --get
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000004
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000008
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000010
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000020
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000040
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000080
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilbert.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 7 janv. 11 &#224; 15:50, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you run with np=8?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 7, 2011, at 9:49 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for taking care of this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is what I got on a worker node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.1rc6r3028/bin/hwloc-bind --get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0x00000001
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this what is expected, please ? Or should I try yet another  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,   Regards,   Gilbert.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 7 janv. 11 &#224; 15:35, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 6, 2011, at 11:23 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; lstopo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Machine (35GB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; NUMANode L#0 (P#0 18GB) + Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#1 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#3 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#5 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   PU L#7 (P#11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [snip]
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
<p><pre>
--
*---------------------------------------------------------------------*
   Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
   B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15323.php">David Mathog: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15321.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
