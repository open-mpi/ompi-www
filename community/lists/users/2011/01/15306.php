<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 09:35:30 2011" -->
<!-- isoreceived="20110107143530" -->
<!-- sent="Fri, 7 Jan 2011 09:35:21 -0500" -->
<!-- isosent="20110107143521" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="5CDA3AD1-748C-4E98-A31E-5478B7917485_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D26953E.3020406_at_cern.ch" -->
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
<strong>Date:</strong> 2011-01-07 09:35:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15305.php">John Hearns: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2011, at 11:23 PM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev2">&gt; &gt; lstopo
</span><br>
<span class="quotelev1">&gt; Machine (35GB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#0 (P#0 18GB) + Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev1">&gt;    L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;      PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;      PU L#1 (P#8)
</span><br>
<span class="quotelev1">&gt;    L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;      PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;      PU L#3 (P#9)
</span><br>
<span class="quotelev1">&gt;    L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;      PU L#4 (P#2)
</span><br>
<span class="quotelev1">&gt;      PU L#5 (P#10)
</span><br>
<span class="quotelev1">&gt;    L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;      PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;      PU L#7 (P#11)
</span><br>
[snip]
<br>
<p>Well, this might disprove my theory.  :-\  The OS indexing is not contiguous on the hyperthreads, so I might be wrong about what happened here.  Try this:
<br>
<p>mpirun --mca mpi_paffinity_alone 1 hwloc-bind --get
<br>
<p>You can even run that on just one node; let's see what you get.  This will tell us what each process is *actually* bound to.  hwloc-bind --get will report a bitmask of the P#'s from above.  So if we see 001, 010, 011, ...etc, then my theory of OMPI binding 1 proc per hyperthread (vs. 1 proc per core) is incorrect.
<br>
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
<li><strong>Next message:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15305.php">John Hearns: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15300.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
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
