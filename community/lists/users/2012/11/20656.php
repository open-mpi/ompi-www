<?
$subject_val = "Re: [OMPI users] Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 15:57:18 2012" -->
<!-- isoreceived="20121107205718" -->
<!-- sent="Wed, 7 Nov 2012 20:56:19 +0000" -->
<!-- isosent="20121107205619" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to map MPI processes to sockets?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F168DD9_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Best way to map MPI processes to sockets?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to map MPI processes to sockets?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 15:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20655.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="20652.php">Blosch, Edwin L: "[OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; In your desired ordering you have rank 0 on (socket,core) (0,0) and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1 on (0,2). Is there an architectural reason for that? Meaning 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are cores 0 and 1 hardware threads in the same core, or is there a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache level (say L2 or L3) connecting cores 0 and 1 separate from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores 2 and 3? 
</span><br>
<p>My thinking was that each MPI rank will be running 2 OpenMP threads and that there might be some benefit to having those threads execute on cores 0 and 1 because those cores might share some level of the memory hierarchy.  No hardware threading is being used.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; hwloc's lstopo should give you that information if you don't have that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information handy. 
</span><br>
<p>Here you go, first likwid output then hwloc, just for the first socket.
<br>
<p>likwid output:
<br>
*************************************************************
<br>
Graphical:
<br>
*************************************************************
<br>
Socket 0:
<br>
+-----------------------------------------------------------------------------------------------------+
<br>
| +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ |
<br>
| |   0   | |   1   | |   2   | |   3   | |   4   | |   5   | |   6   | |   7   | |   8   | |   9   | |
<br>
| +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ |
<br>
| +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
<br>
| |       32kB      | |       32kB      | |       32kB      | |       32kB      | |       32kB      | |
<br>
| +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
<br>
| +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
<br>
| |      256kB      | |      256kB      | |      256kB      | |      256kB      | |      256kB      | |
<br>
| +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
<br>
| +-------------------------------------------------------------------------------------------------+ |
<br>
| |                                               30MB                                              | |
<br>
| +-------------------------------------------------------------------------------------------------+ |
<br>
+-----------------------------------------------------------------------------------------------------+
<br>
<p>hwloc output:
<br>
<p>Machine (512GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 64GB) + Socket L#0 + L3 L#0 (30MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
<br>
<p>Thanks again
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20655.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="20652.php">Blosch, Edwin L: "[OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
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
