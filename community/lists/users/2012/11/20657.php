<?
$subject_val = "Re: [OMPI users] Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:17:49 2012" -->
<!-- isoreceived="20121108001749" -->
<!-- sent="Thu, 08 Nov 2012 01:17:21 +0100" -->
<!-- isosent="20121108001721" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to map MPI processes to sockets?" -->
<!-- id="509AFA11.9090607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F168DD9_at_HDXDSP53.us.lmco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 19:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20661.php">Jeff Squyres: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20661.php">Jeff Squyres: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20670.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What processor and kernel is this? (see /proc/cpuinfo, or run &quot;lstopo
<br>
-v&quot; and look for attributes on the Socket line)
<br>
You're hwloc output looks like an Intel Xeon Westmere-EX (E7-48xx or
<br>
E7-88xx).
<br>
The likwid output is likely wrong (maybe confused by the fact that
<br>
hardware threads are disabled).
<br>
<p>Brice
<br>
<p><p><p><p>Le 07/11/2012 21:56, Blosch, Edwin L a &#233;crit :
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In your desired ordering you have rank 0 on (socket,core) (0,0) and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1 on (0,2). Is there an architectural reason for that? Meaning 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are cores 0 and 1 hardware threads in the same core, or is there a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cache level (say L2 or L3) connecting cores 0 and 1 separate from 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores 2 and 3? 
</span><br>
<span class="quotelev1">&gt; My thinking was that each MPI rank will be running 2 OpenMP threads and that there might be some benefit to having those threads execute on cores 0 and 1 because those cores might share some level of the memory hierarchy.  No hardware threading is being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc's lstopo should give you that information if you don't have that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information handy. 
</span><br>
<span class="quotelev1">&gt; Here you go, first likwid output then hwloc, just for the first socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; likwid output:
</span><br>
<span class="quotelev1">&gt; *************************************************************
</span><br>
<span class="quotelev1">&gt; Graphical:
</span><br>
<span class="quotelev1">&gt; *************************************************************
</span><br>
<span class="quotelev1">&gt; Socket 0:
</span><br>
<span class="quotelev1">&gt; +-----------------------------------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ |
</span><br>
<span class="quotelev1">&gt; | |   0   | |   1   | |   2   | |   3   | |   4   | |   5   | |   6   | |   7   | |   8   | |   9   | |
</span><br>
<span class="quotelev1">&gt; | +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ |
</span><br>
<span class="quotelev1">&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev1">&gt; | |       32kB      | |       32kB      | |       32kB      | |       32kB      | |       32kB      | |
</span><br>
<span class="quotelev1">&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev1">&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev1">&gt; | |      256kB      | |      256kB      | |      256kB      | |      256kB      | |      256kB      | |
</span><br>
<span class="quotelev1">&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev1">&gt; | +-------------------------------------------------------------------------------------------------+ |
</span><br>
<span class="quotelev1">&gt; | |                                               30MB                                              | |
</span><br>
<span class="quotelev1">&gt; | +-------------------------------------------------------------------------------------------------+ |
</span><br>
<span class="quotelev1">&gt; +-----------------------------------------------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (512GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 64GB) + Socket L#0 + L3 L#0 (30MB)
</span><br>
<span class="quotelev1">&gt;     L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;     L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;     L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;     L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;     L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;     L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;     L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;     L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20658.php">Brice Goglin: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20661.php">Jeff Squyres: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20661.php">Jeff Squyres: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20670.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
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
