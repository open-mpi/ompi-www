<?
$subject_val = "Re: [OMPI users] Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 23:01:48 2012" -->
<!-- isoreceived="20121108040148" -->
<!-- sent="Wed, 7 Nov 2012 23:01:43 -0500" -->
<!-- isosent="20121108040143" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to map MPI processes to sockets?" -->
<!-- id="6CAF9330-1355-46ED-BAA7-CC236C5097FC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509AFA11.9090607_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 23:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20670.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What Brice is saying is that hwloc is saying that your cores all have individual caches -- they're not shared.  Have a look at a graphical hwloc output to see:
<br>
<p>&nbsp;&nbsp;lstopo mymachine.png
<br>
<p><p>On Nov 7, 2012, at 7:17 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; What processor and kernel is this? (see /proc/cpuinfo, or run &quot;lstopo
</span><br>
<span class="quotelev1">&gt; -v&quot; and look for attributes on the Socket line)
</span><br>
<span class="quotelev1">&gt; You're hwloc output looks like an Intel Xeon Westmere-EX (E7-48xx or
</span><br>
<span class="quotelev1">&gt; E7-88xx).
</span><br>
<span class="quotelev1">&gt; The likwid output is likely wrong (maybe confused by the fact that
</span><br>
<span class="quotelev1">&gt; hardware threads are disabled).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 07/11/2012 21:56, Blosch, Edwin L a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In your desired ordering you have rank 0 on (socket,core) (0,0) and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rank 1 on (0,2). Is there an architectural reason for that? Meaning 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are cores 0 and 1 hardware threads in the same core, or is there a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache level (say L2 or L3) connecting cores 0 and 1 separate from 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores 2 and 3? 
</span><br>
<span class="quotelev2">&gt;&gt; My thinking was that each MPI rank will be running 2 OpenMP threads and that there might be some benefit to having those threads execute on cores 0 and 1 because those cores might share some level of the memory hierarchy.  No hardware threading is being used.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc's lstopo should give you that information if you don't have that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information handy. 
</span><br>
<span class="quotelev2">&gt;&gt; Here you go, first likwid output then hwloc, just for the first socket.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; likwid output:
</span><br>
<span class="quotelev2">&gt;&gt; *************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; Graphical:
</span><br>
<span class="quotelev2">&gt;&gt; *************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; Socket 0:
</span><br>
<span class="quotelev2">&gt;&gt; +-----------------------------------------------------------------------------------------------------+
</span><br>
<span class="quotelev2">&gt;&gt; | +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | |   0   | |   1   | |   2   | |   3   | |   4   | |   5   | |   6   | |   7   | |   8   | |   9   | |
</span><br>
<span class="quotelev2">&gt;&gt; | +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ +-------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | |       32kB      | |       32kB      | |       32kB      | |       32kB      | |       32kB      | |
</span><br>
<span class="quotelev2">&gt;&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | |      256kB      | |      256kB      | |      256kB      | |      256kB      | |      256kB      | |
</span><br>
<span class="quotelev2">&gt;&gt; | +-----------------+ +-----------------+ +-----------------+ +-----------------+ +-----------------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | +-------------------------------------------------------------------------------------------------+ |
</span><br>
<span class="quotelev2">&gt;&gt; | |                                               30MB                                              | |
</span><br>
<span class="quotelev2">&gt;&gt; | +-------------------------------------------------------------------------------------------------+ |
</span><br>
<span class="quotelev2">&gt;&gt; +-----------------------------------------------------------------------------------------------------+
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Machine (512GB)
</span><br>
<span class="quotelev2">&gt;&gt;  NUMANode L#0 (P#0 64GB) + Socket L#0 + L3 L#0 (30MB)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;    L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20662.php">Markus Wittmann: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20660.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20670.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
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
