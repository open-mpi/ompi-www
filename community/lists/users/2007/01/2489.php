<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 03:52:23 2007" -->
<!-- isoreceived="20070118085223" -->
<!-- sent="Thu, 18 Jan 2007 03:52:19 -0500" -->
<!-- isosent="20070118085219" -->
<!-- name="Robin Humble" -->
<!-- email="rjh+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="20070118085219.GA32070_at_lemming.cita.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6236CAD9-CF4A-4ADF-8708-89B4A5A96FF9_at_lanl.gov" -->
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
<strong>From:</strong> Robin Humble (<em>rjh+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 03:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2490.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2488.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2490.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2490.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 17, 2007 at 08:55:31AM -0700, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt;On Jan 17, 2007, at 2:39 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jan 17, 2007 at 04:12:10AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically I'm seeing wildly different bandwidths over InfiniBand 4x DDR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I use different kernels.
</span><br>
<span class="quotelev2">&gt;&gt; Try to load ib_mthca with tune_pci=1 option on those kernels that are
</span><br>
<span class="quotelev2">&gt;&gt; slow.
</span><br>
<span class="quotelev1">&gt;when an application has high buffer reuse (like NetPIPE), which can  
</span><br>
<span class="quotelev1">&gt;be enabled by adding &quot;-mca mpi_leave_pinned 1&quot; to the mpirun command  
</span><br>
<span class="quotelev1">&gt;line.
</span><br>
<p>thanks! :-)
<br>
tune_pci=1 makes a huge difference at the top end, and
<br>
-mca mpi_leave_pinned 1 adds lots of midrange bandwidth.
<br>
<p>latencies (~4us) and the low end performance are all unchanged.
<br>
<p>see attached for details.
<br>
most curves are for 2.6.19.2 except the last couple (tagged as old)
<br>
which are for 2.6.9-42.0.3.ELsmp and for which tune_pci changes nothing.
<br>
<p>why isn't tune_pci=1 the default I wonder?
<br>
files in /sys/module/ib_mthca/ tell me it's off by default in
<br>
2.6.9-42.0.3.ELsmp, but the results imply that it's on... maybe PCIe
<br>
handling is very different in that kernel.
<br>
<p>is ~10Gbit the best I can expect from 4x DDR IB with MPI?
<br>
some docs @HP suggest up to 16Gbit (data rate) should be possible, and
<br>
I've heard that 13 or 14 has been achieved before. but those might be
<br>
verbs numbers, or maybe horsepower &gt;&gt; 4 cores of 2.66GHz core2 is
<br>
required?
<br>
<p><span class="quotelev1">&gt;It would be interesting to know if the bandwidth differences appear  
</span><br>
<span class="quotelev1">&gt;when the leave pinned protocol is used.  My guess is that they will  
</span><br>
<p>yeah, it definitely makes a difference in the 10kB to 10mB range.
<br>
at around 100kB there's 2x the bandwidth when using pinned.
<br>
<p>thanks again!
<br>
<p><span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;   Los Alamos National Laboratory
</span><br>
<p>how's OpenMPI on Cell? :)
<br>
<p>cheers,
<br>
robin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2490.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2488.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2490.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2490.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2492.php">Peter Kjellstrom: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
