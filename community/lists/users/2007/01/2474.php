<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 04:12:16 2007" -->
<!-- isoreceived="20070117091216" -->
<!-- sent="Wed, 17 Jan 2007 04:12:10 -0500" -->
<!-- isosent="20070117091210" -->
<!-- name="Robin Humble" -->
<!-- email="rjh+openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] IB bandwidth vs. kernels" -->
<!-- id="20070117091210.GA25617_at_lemming.cita.utoronto.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-01-17 04:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so this isn't really an OpenMPI questions (I don't think), but you guys
<br>
will have hit the problem if anyone has...
<br>
<p>basically I'm seeing wildly different bandwidths over InfiniBand 4x DDR
<br>
when I use different kernels.
<br>
I'm testing with netpipe-3.6.2's NPmpi, but a home-grown pingpong sees
<br>
the same thing.
<br>
<p>the default 2.6.9-42.0.3.ELsmp (and also sles10's kernel) gives ok
<br>
bandwidth (50% of peak I guess is good?) at ~10 Gbit/s, but a pile of
<br>
newer kernels (2.16.19.2, 2.6.20-rc4, 2.6.18-1.2732.4.2.el5.OFED_1_1(*))
<br>
all max out at ~5.3 Gbit/s.
<br>
<p>half the bandwidth! :-(
<br>
latency is the same.
<br>
<p>the same OpenMPI (1.1.1 from OSCAR, rebuild for openib support) and
<br>
NPmpi was used with all kernels.
<br>
I see an intermediate bandwidth if one kernel is the 'fast' 2.6.9 and
<br>
another is a 'slow', so they don't appear to be using completely
<br>
different protocols.
<br>
it doesn't make any difference if I try to make extra-sure it's using
<br>
openib with:
<br>
&nbsp;&nbsp;mpirun --mca btl openib --mca btl_tcp_if_exclude lo,eth0 ...
<br>
<p>OS is CentOS 4.4 x86_64 which AFAICT includes packages based on OFED 1.0.
<br>
lspci says the PCIe card is:
<br>
&nbsp;&nbsp;InfiniBand: Mellanox Technologies MT25204 [InfiniHost III Lx HCA] (rev 20)
<br>
and dmesg says that all kernels are using
<br>
&nbsp;&nbsp;ib_mthca: Mellanox InfiniBand HCA driver v0.08 (February 14, 2006)
<br>
but also winges that 'HCA FW version 1.0.700 is old'.
<br>
<p>any ideas?
<br>
very odd that all new kernels (including for RHEL5) are slow.
<br>
<p>will OFED 1.1 make any difference? it didn't build cleanly when I
<br>
tried, but I can try and try again...
<br>
<p>thanks for any hints.
<br>
<p>cheers,
<br>
robin
<br>
<p>(*) rhel5 + OFED 1.1 test kernel, rebuilt for centos4.4 from src.rpm at
<br>
&nbsp;&nbsp;<a href="http://people.redhat.com/dledford/Infiniband/kernel/2.6.18/1.2732.4.2.el5.OFED_1_1/x86_64/">http://people.redhat.com/dledford/Infiniband/kernel/2.6.18/1.2732.4.2.el5.OFED_1_1/x86_64/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Reply:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
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
