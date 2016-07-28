<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 09:49:27 2011" -->
<!-- isoreceived="20110107144927" -->
<!-- sent="Fri, 7 Jan 2011 15:49:21 +0100" -->
<!-- isosent="20110107144921" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="5DAFE279-C807-43FC-A0BE-DA36D27F009F_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5CDA3AD1-748C-4E98-A31E-5478B7917485_at_cisco.com" -->
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
<strong>Date:</strong> 2011-01-07 09:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15306.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15306.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;&nbsp;Thanks for taking care of this.
<br>
<p>Here is what I got on a worker node:
<br>
<p><span class="quotelev1"> &gt; mpirun --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/ 
</span><br>
1.1rc6r3028/bin/hwloc-bind --get
<br>
0x00000001
<br>
<p>&nbsp;&nbsp;Is this what is expected, please ? Or should I try yet another  
<br>
command ?
<br>
<p>&nbsp;&nbsp;Thanks,   Regards,   Gilbert.
<br>
<p><p><p>Le 7 janv. 11 &#224; 15:35, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On Jan 6, 2011, at 11:23 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lstopo
</span><br>
<span class="quotelev2">&gt;&gt; Machine (35GB)
</span><br>
<span class="quotelev2">&gt;&gt; NUMANode L#0 (P#0 18GB) + Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#1 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#3 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#5 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;   L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;     PU L#7 (P#11)
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, this might disprove my theory.  :-\  The OS indexing is not  
</span><br>
<span class="quotelev1">&gt; contiguous on the hyperthreads, so I might be wrong about what  
</span><br>
<span class="quotelev1">&gt; happened here.  Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca mpi_paffinity_alone 1 hwloc-bind --get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can even run that on just one node; let's see what you get.   
</span><br>
<span class="quotelev1">&gt; This will tell us what each process is *actually* bound to.  hwloc- 
</span><br>
<span class="quotelev1">&gt; bind --get will report a bitmask of the P#'s from above.  So if we  
</span><br>
<span class="quotelev1">&gt; see 001, 010, 011, ...etc, then my theory of OMPI binding 1 proc per  
</span><br>
<span class="quotelev1">&gt; hyperthread (vs. 1 proc per core) is incorrect.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15308.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15306.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15306.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
