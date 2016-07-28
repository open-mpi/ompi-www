<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 09:56:06 2011" -->
<!-- isoreceived="20110107145606" -->
<!-- sent="Fri, 7 Jan 2011 15:56:00 +0100" -->
<!-- isosent="20110107145600" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="4CCA506B-5BB8-4179-B730-685E25E9C575_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAA318F6-FC2A-411B-AA4D-DDD4414D8CE3_at_cisco.com" -->
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
<strong>Date:</strong> 2011-01-07 09:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, here it is :
<br>
<p><span class="quotelev1"> &gt; mpirun -np 8 --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/ 
</span><br>
1.1rc6r3028/bin/hwloc-bind --get
<br>
0x00000001
<br>
0x00000002
<br>
0x00000004
<br>
0x00000008
<br>
0x00000010
<br>
0x00000020
<br>
0x00000040
<br>
0x00000080
<br>
<p>&nbsp;&nbsp;Gilbert.
<br>
<p>Le 7 janv. 11 &#224; 15:50, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Can you run with np=8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 7, 2011, at 9:49 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for taking care of this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is what I got on a worker node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca mpi_paffinity_alone 1 /opt/software/SGI/hwloc/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.1rc6r3028/bin/hwloc-bind --get
</span><br>
<span class="quotelev2">&gt;&gt; 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this what is expected, please ? Or should I try yet another  
</span><br>
<span class="quotelev2">&gt;&gt; command ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,   Regards,   Gilbert.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 7 janv. 11 &#224; 15:35, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 6, 2011, at 11:23 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lstopo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Machine (35GB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NUMANode L#0 (P#0 18GB) + Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#0 (P#0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#1 (P#8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#2 (P#1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#3 (P#9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#4 (P#2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#5 (P#10)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#6 (P#3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PU L#7 (P#11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, this might disprove my theory.  :-\  The OS indexing is not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contiguous on the hyperthreads, so I might be wrong about what  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happened here.  Try this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca mpi_paffinity_alone 1 hwloc-bind --get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can even run that on just one node; let's see what you get.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will tell us what each process is *actually* bound to.  hwloc- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind --get will report a bitmask of the P#'s from above.  So if we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see 001, 010, 011, ...etc, then my theory of OMPI binding 1 proc  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per hyperthread (vs. 1 proc per core) is incorrect.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev2">&gt;&gt;  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev2">&gt;&gt;  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev2">&gt;&gt;  B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev2">&gt;&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
