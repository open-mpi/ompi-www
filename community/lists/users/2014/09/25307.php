<?
$subject_val = "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 06:34:13 2014" -->
<!-- isoreceived="20140910103413" -->
<!-- sent="Wed, 10 Sep 2014 10:34:12 +0000" -->
<!-- isosent="20140910103412" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand" -->
<!-- id="60E163C0-71E5-4ABF-9FBA-0B835B20BC5F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACztQg2b4VMLHG6bdoM1KjRXzk-vUYydE69m40FEF2+mLMD8Zg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 06:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25308.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>In reply to:</strong> <a href="25297.php">Muhammad Ansar Javed: "[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25318.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25318.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you inadvertently using the MXM MTL?  That's an alternate Mellanox transport that may activate itself, even if you've disabled the openib BTL.  Try this:
<br>
<p>&nbsp;&nbsp;mpirun --mca pml ob1 --mca btl ^openib ...
<br>
<p>This forces the use of the ob1 PML (which forces the use of the BTLs, not the MTLs), and then disables the openib BTL.
<br>
<p><p>On Sep 9, 2014, at 10:24 AM, Muhammad Ansar Javed &lt;muhammad.ansar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently conducting some testing on system with Gigabit and InfiniBand interconnects. Both Latency and Bandwidth benchmarks are doing well as expected on InfiniBand interconnects but Ethernet interconnect is achieving very high performance from expectations. Ethernet and InfiniBand both are achieving equivalent performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some reason, it looks like openmpi (v1.8.1) is using the InfiniBand interconnect rather than the Gigabit or TCP communication is being emulated to use InifiniBand interconnect.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are Latency and Bandwidth benchmark results.
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # processes = 2
</span><br>
<span class="quotelev1">&gt; # map-by node
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, world.  I am 1 on node124
</span><br>
<span class="quotelev1">&gt; Hello, world.  I am 0 on node123
</span><br>
<span class="quotelev1">&gt; Size Latency (usec) Bandwidth (Mbps)
</span><br>
<span class="quotelev1">&gt; 1    1.65    4.62
</span><br>
<span class="quotelev1">&gt; 2    1.67    9.16
</span><br>
<span class="quotelev1">&gt; 4    1.66    18.43
</span><br>
<span class="quotelev1">&gt; 8    1.66    36.74
</span><br>
<span class="quotelev1">&gt; 16    1.85    66.00
</span><br>
<span class="quotelev1">&gt; 32    1.83    133.28
</span><br>
<span class="quotelev1">&gt; 64    1.83    266.36
</span><br>
<span class="quotelev1">&gt; 128    1.88    519.10
</span><br>
<span class="quotelev1">&gt; 256    1.99    982.29
</span><br>
<span class="quotelev1">&gt; 512    2.23    1752.37
</span><br>
<span class="quotelev1">&gt; 1024    2.58    3026.98
</span><br>
<span class="quotelev1">&gt; 2048    3.32    4710.76
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read some of the FAQs and noted that OpenMPI prefers the faster available interconnect. In an effort to force it to use the gigabit interconnect I ran it as follows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca btl_tcp_if_include em1 ./latency.ompi 
</span><br>
<span class="quotelev1">&gt; 2. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp,self,sm --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev1">&gt; 3. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev1">&gt; 4. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib ./latency.ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None of them resulted in a significantly different benchmark output. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI by loading module on clustered environment and don't have admin access. It is configured for both TCP and OpenIB (confirmed from ompi_info). After trying all above mentioned methods without success I installed OpenMPI v1.8.2 in my home directory and disable openib with following configuration options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --disable-openib-control-hdr-padding --disable-openib-dynamic-sl --disable-openib-connectx-xrc --disable-openib-udcm --disable-openib-rdmacm  --disable-btl-openib-malloc-alignment  --disable-io-romio --without-openib --without-verbs  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, openib is not enabled (confirmed from ompi_info script) and there is no &quot;openib.so&quot; file in $prefix/lib/openmpi directory as well. Still, above mentioned mpirun commands are getting the same latency and bandwidth as that of InfiniBand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried mpirun in verbose mode with following command and here is the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command: 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca btl_base_verbose 30 --mca btl_tcp_if_include em1 ./latency.ompi 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; Hello, world.  I am 1 on node124
</span><br>
<span class="quotelev1">&gt; Hello, world.  I am 0 on node123
</span><br>
<span class="quotelev1">&gt; Size Latency(usec) Bandwidth(Mbps)
</span><br>
<span class="quotelev1">&gt; 1    4.18    1.83
</span><br>
<span class="quotelev1">&gt; 2    3.66    4.17
</span><br>
<span class="quotelev1">&gt; 4    4.08    7.48
</span><br>
<span class="quotelev1">&gt; 8    3.12    19.57
</span><br>
<span class="quotelev1">&gt; 16    3.83    31.84
</span><br>
<span class="quotelev1">&gt; 32    3.40    71.84
</span><br>
<span class="quotelev1">&gt; 64    4.10    118.97
</span><br>
<span class="quotelev1">&gt; 128    3.89    251.19
</span><br>
<span class="quotelev1">&gt; 256    4.22    462.77
</span><br>
<span class="quotelev1">&gt; 512    2.95    1325.71
</span><br>
<span class="quotelev1">&gt; 1024    2.63    2969.49
</span><br>
<span class="quotelev1">&gt; 2048    3.38    4628.29
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node123.prv.sciama.cluster:88310] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node124.prv.sciama.cluster:90465] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Moreover, same benchmark applications using MPICH are working fine on Ethernet and achieving expected Latency and Bandwidth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can this be fixed? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Ansar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25297.php">http://www.open-mpi.org/community/lists/users/2014/09/25297.php</a>
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
<li><strong>Next message:</strong> <a href="25308.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>In reply to:</strong> <a href="25297.php">Muhammad Ansar Javed: "[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25318.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25318.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
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
