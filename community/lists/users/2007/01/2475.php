<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 04:40:00 2007" -->
<!-- isoreceived="20070117094000" -->
<!-- sent="Wed, 17 Jan 2007 11:39:49 +0200" -->
<!-- isosent="20070117093949" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB bandwidth vs. kernels" -->
<!-- id="20070117093949.GT1631_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070117091210.GA25617_at_lemming.cita.utoronto.ca" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 04:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2474.php">Robin Humble: "[OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2474.php">Robin Humble: "[OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Robin,
<br>
<p>On Wed, Jan 17, 2007 at 04:12:10AM -0500, Robin Humble wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so this isn't really an OpenMPI questions (I don't think), but you guys
</span><br>
<span class="quotelev1">&gt; will have hit the problem if anyone has...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically I'm seeing wildly different bandwidths over InfiniBand 4x DDR
</span><br>
<span class="quotelev1">&gt; when I use different kernels.
</span><br>
<span class="quotelev1">&gt; I'm testing with netpipe-3.6.2's NPmpi, but a home-grown pingpong sees
</span><br>
<span class="quotelev1">&gt; the same thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the default 2.6.9-42.0.3.ELsmp (and also sles10's kernel) gives ok
</span><br>
<span class="quotelev1">&gt; bandwidth (50% of peak I guess is good?) at ~10 Gbit/s, but a pile of
</span><br>
<span class="quotelev1">&gt; newer kernels (2.16.19.2, 2.6.20-rc4, 2.6.18-1.2732.4.2.el5.OFED_1_1(*))
</span><br>
<span class="quotelev1">&gt; all max out at ~5.3 Gbit/s.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; half the bandwidth! :-(
</span><br>
<span class="quotelev1">&gt; latency is the same.
</span><br>
Try to load ib_mthca with tune_pci=1 option on those kernels that are
<br>
slow.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the same OpenMPI (1.1.1 from OSCAR, rebuild for openib support) and
</span><br>
<span class="quotelev1">&gt; NPmpi was used with all kernels.
</span><br>
<span class="quotelev1">&gt; I see an intermediate bandwidth if one kernel is the 'fast' 2.6.9 and
</span><br>
<span class="quotelev1">&gt; another is a 'slow', so they don't appear to be using completely
</span><br>
<span class="quotelev1">&gt; different protocols.
</span><br>
<span class="quotelev1">&gt; it doesn't make any difference if I try to make extra-sure it's using
</span><br>
<span class="quotelev1">&gt; openib with:
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl openib --mca btl_tcp_if_exclude lo,eth0 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OS is CentOS 4.4 x86_64 which AFAICT includes packages based on OFED 1.0.
</span><br>
<span class="quotelev1">&gt; lspci says the PCIe card is:
</span><br>
<span class="quotelev1">&gt;   InfiniBand: Mellanox Technologies MT25204 [InfiniHost III Lx HCA] (rev 20)
</span><br>
<span class="quotelev1">&gt; and dmesg says that all kernels are using
</span><br>
<span class="quotelev1">&gt;   ib_mthca: Mellanox InfiniBand HCA driver v0.08 (February 14, 2006)
</span><br>
<span class="quotelev1">&gt; but also winges that 'HCA FW version 1.0.700 is old'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any ideas?
</span><br>
<span class="quotelev1">&gt; very odd that all new kernels (including for RHEL5) are slow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will OFED 1.1 make any difference? it didn't build cleanly when I
</span><br>
<span class="quotelev1">&gt; tried, but I can try and try again...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for any hints.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; robin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (*) rhel5 + OFED 1.1 test kernel, rebuilt for centos4.4 from src.rpm at
</span><br>
<span class="quotelev1">&gt;   <a href="http://people.redhat.com/dledford/Infiniband/kernel/2.6.18/1.2732.4.2.el5.OFED_1_1/x86_64/">http://people.redhat.com/dledford/Infiniband/kernel/2.6.18/1.2732.4.2.el5.OFED_1_1/x86_64/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2474.php">Robin Humble: "[OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2474.php">Robin Humble: "[OMPI users] IB bandwidth vs. kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
