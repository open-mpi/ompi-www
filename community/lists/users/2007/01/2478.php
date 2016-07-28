<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 10:55:45 2007" -->
<!-- isoreceived="20070117155545" -->
<!-- sent="Wed, 17 Jan 2007 08:55:31 -0700" -->
<!-- isosent="20070117155531" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="6236CAD9-CF4A-4ADF-8708-89B4A5A96FF9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070117093949.GT1631_at_minantech.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 10:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>Previous message:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>In reply to:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2007, at 2:39 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi Robin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 17, 2007 at 04:12:10AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so this isn't really an OpenMPI questions (I don't think), but you  
</span><br>
<span class="quotelev2">&gt;&gt; guys
</span><br>
<span class="quotelev2">&gt;&gt; will have hit the problem if anyone has...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; basically I'm seeing wildly different bandwidths over InfiniBand  
</span><br>
<span class="quotelev2">&gt;&gt; 4x DDR
</span><br>
<span class="quotelev2">&gt;&gt; when I use different kernels.
</span><br>
<span class="quotelev2">&gt;&gt; I'm testing with netpipe-3.6.2's NPmpi, but a home-grown pingpong  
</span><br>
<span class="quotelev2">&gt;&gt; sees
</span><br>
<span class="quotelev2">&gt;&gt; the same thing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the default 2.6.9-42.0.3.ELsmp (and also sles10's kernel) gives ok
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth (50% of peak I guess is good?) at ~10 Gbit/s, but a pile of
</span><br>
<span class="quotelev2">&gt;&gt; newer kernels (2.16.19.2, 2.6.20-rc4,  
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.18-1.2732.4.2.el5.OFED_1_1(*))
</span><br>
<span class="quotelev2">&gt;&gt; all max out at ~5.3 Gbit/s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; half the bandwidth! :-(
</span><br>
<span class="quotelev2">&gt;&gt; latency is the same.
</span><br>
<span class="quotelev1">&gt; Try to load ib_mthca with tune_pci=1 option on those kernels that are
</span><br>
<span class="quotelev1">&gt; slow.
</span><br>
<p>I can't speak to the kernels, but one note about bandwidth.  By  
<br>
default, Open MPI uses a pipelined pinning protocol for large message  
<br>
transfer that provides the best bandwidth when the application has  
<br>
low buffer reuse and does not require the use of intercepts in the  
<br>
malloc library or using mallopt to prevent libc from returning memory  
<br>
to the OS.  We have another mode that provides much better bandwidth  
<br>
when an application has high buffer reuse (like NetPIPE), which can  
<br>
be enabled by adding &quot;-mca mpi_leave_pinned 1&quot; to the mpirun command  
<br>
line.
<br>
<p>It would be interesting to know if the bandwidth differences appear  
<br>
when the leave pinned protocol is used.  My guess is that they will  
<br>
not, but one never knows.  If so, there are a couple of different  
<br>
possibilities for why there is the slowdown: higher memory pinning  
<br>
times, an interaction that throws off our pipeline, etc...
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>Previous message:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>In reply to:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
