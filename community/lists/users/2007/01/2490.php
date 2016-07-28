<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 04:01:02 2007" -->
<!-- isoreceived="20070118090102" -->
<!-- sent="Thu, 18 Jan 2007 04:00:57 -0500" -->
<!-- isosent="20070118090057" -->
<!-- name="Robin Humble" -->
<!-- email="rjh+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="20070118090057.GA2389_at_lemming.cita.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070118085219.GA32070_at_lemming.cita.utoronto.ca" -->
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
<strong>Date:</strong> 2007-01-18 04:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
argh. attached.
<br>
<p>cheers,
<br>
robin
<br>
<p>On Thu, Jan 18, 2007 at 03:52:19AM -0500, Robin Humble wrote:
<br>
<span class="quotelev1">&gt;On Wed, Jan 17, 2007 at 08:55:31AM -0700, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;On Jan 17, 2007, at 2:39 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 17, 2007 at 04:12:10AM -0500, Robin Humble wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; basically I'm seeing wildly different bandwidths over InfiniBand 4x DDR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when I use different kernels.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try to load ib_mthca with tune_pci=1 option on those kernels that are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slow.
</span><br>
<span class="quotelev2">&gt;&gt;when an application has high buffer reuse (like NetPIPE), which can  
</span><br>
<span class="quotelev2">&gt;&gt;be enabled by adding &quot;-mca mpi_leave_pinned 1&quot; to the mpirun command  
</span><br>
<span class="quotelev2">&gt;&gt;line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;thanks! :-)
</span><br>
<span class="quotelev1">&gt;tune_pci=1 makes a huge difference at the top end, and
</span><br>
<span class="quotelev1">&gt;-mca mpi_leave_pinned 1 adds lots of midrange bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;latencies (~4us) and the low end performance are all unchanged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;see attached for details.
</span><br>
<span class="quotelev1">&gt;most curves are for 2.6.19.2 except the last couple (tagged as old)
</span><br>
<span class="quotelev1">&gt;which are for 2.6.9-42.0.3.ELsmp and for which tune_pci changes nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;why isn't tune_pci=1 the default I wonder?
</span><br>
<span class="quotelev1">&gt;files in /sys/module/ib_mthca/ tell me it's off by default in
</span><br>
<span class="quotelev1">&gt;2.6.9-42.0.3.ELsmp, but the results imply that it's on... maybe PCIe
</span><br>
<span class="quotelev1">&gt;handling is very different in that kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;is ~10Gbit the best I can expect from 4x DDR IB with MPI?
</span><br>
<span class="quotelev1">&gt;some docs @HP suggest up to 16Gbit (data rate) should be possible, and
</span><br>
<span class="quotelev1">&gt;I've heard that 13 or 14 has been achieved before. but those might be
</span><br>
<span class="quotelev1">&gt;verbs numbers, or maybe horsepower &gt;&gt; 4 cores of 2.66GHz core2 is
</span><br>
<span class="quotelev1">&gt;required?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;It would be interesting to know if the bandwidth differences appear  
</span><br>
<span class="quotelev2">&gt;&gt;when the leave pinned protocol is used.  My guess is that they will  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;yeah, it definitely makes a difference in the 10kB to 10mB range.
</span><br>
<span class="quotelev1">&gt;at around 100kB there's 2x the bandwidth when using pinned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;thanks again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI Team, CCS-1
</span><br>
<span class="quotelev2">&gt;&gt;   Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;how's OpenMPI on Cell? :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;cheers,
</span><br>
<span class="quotelev1">&gt;robin
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2490/blah5.ps.gz">blah5.ps.gz</a>
</ul>
<!-- attachment="blah5.ps.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2491.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
