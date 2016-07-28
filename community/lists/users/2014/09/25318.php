<?
$subject_val = "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 03:46:44 2014" -->
<!-- isoreceived="20140912074644" -->
<!-- sent="Fri, 12 Sep 2014 12:46:43 +0500" -->
<!-- isosent="20140912074643" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand" -->
<!-- id="CACztQg0aVcmjw85wTk0n_wv6b65g2UBH23P2DNGFFNfUFrBOjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="60E163C0-71E5-4ABF-9FBA-0B835B20BC5F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand<br>
<strong>From:</strong> Muhammad Ansar Javed (<em>muhammad.ansar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 03:46:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25319.php">JR Cary: "[OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
It worked. Now latency and bandwidth benchmarks are in performing as
<br>
expected for both Ethernet and InfiniBand.
<br>
<p>--Ansar
<br>
<p>On Wed, Sep 10, 2014 at 3:34 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Are you inadvertently using the MXM MTL?  That's an alternate Mellanox
</span><br>
<span class="quotelev1">&gt; transport that may activate itself, even if you've disabled the openib
</span><br>
<span class="quotelev1">&gt; BTL.  Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca pml ob1 --mca btl ^openib ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This forces the use of the ob1 PML (which forces the use of the BTLs, not
</span><br>
<span class="quotelev1">&gt; the MTLs), and then disables the openib BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2014, at 10:24 AM, Muhammad Ansar Javed &lt;
</span><br>
<span class="quotelev1">&gt; muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am currently conducting some testing on system with Gigabit and
</span><br>
<span class="quotelev1">&gt; InfiniBand interconnects. Both Latency and Bandwidth benchmarks are doing
</span><br>
<span class="quotelev1">&gt; well as expected on InfiniBand interconnects but Ethernet interconnect is
</span><br>
<span class="quotelev1">&gt; achieving very high performance from expectations. Ethernet and InfiniBand
</span><br>
<span class="quotelev1">&gt; both are achieving equivalent performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For some reason, it looks like openmpi (v1.8.1) is using the InfiniBand
</span><br>
<span class="quotelev1">&gt; interconnect rather than the Gigabit or TCP communication is being emulated
</span><br>
<span class="quotelev1">&gt; to use InifiniBand interconnect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here are Latency and Bandwidth benchmark results.
</span><br>
<span class="quotelev2">&gt; &gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; # Benchmarking PingPong
</span><br>
<span class="quotelev2">&gt; &gt; # processes = 2
</span><br>
<span class="quotelev2">&gt; &gt; # map-by node
</span><br>
<span class="quotelev2">&gt; &gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 1 on node124
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 0 on node123
</span><br>
<span class="quotelev2">&gt; &gt; Size Latency (usec) Bandwidth (Mbps)
</span><br>
<span class="quotelev2">&gt; &gt; 1    1.65    4.62
</span><br>
<span class="quotelev2">&gt; &gt; 2    1.67    9.16
</span><br>
<span class="quotelev2">&gt; &gt; 4    1.66    18.43
</span><br>
<span class="quotelev2">&gt; &gt; 8    1.66    36.74
</span><br>
<span class="quotelev2">&gt; &gt; 16    1.85    66.00
</span><br>
<span class="quotelev2">&gt; &gt; 32    1.83    133.28
</span><br>
<span class="quotelev2">&gt; &gt; 64    1.83    266.36
</span><br>
<span class="quotelev2">&gt; &gt; 128    1.88    519.10
</span><br>
<span class="quotelev2">&gt; &gt; 256    1.99    982.29
</span><br>
<span class="quotelev2">&gt; &gt; 512    2.23    1752.37
</span><br>
<span class="quotelev2">&gt; &gt; 1024    2.58    3026.98
</span><br>
<span class="quotelev2">&gt; &gt; 2048    3.32    4710.76
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I read some of the FAQs and noted that OpenMPI prefers the faster
</span><br>
<span class="quotelev1">&gt; available interconnect. In an effort to force it to use the gigabit
</span><br>
<span class="quotelev1">&gt; interconnect I ran it as follows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt; 2. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp,self,sm
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt; 3. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt; 4. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; None of them resulted in a significantly different benchmark output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI by loading module on clustered environment and don't
</span><br>
<span class="quotelev1">&gt; have admin access. It is configured for both TCP and OpenIB (confirmed from
</span><br>
<span class="quotelev1">&gt; ompi_info). After trying all above mentioned methods without success I
</span><br>
<span class="quotelev1">&gt; installed OpenMPI v1.8.2 in my home directory and disable openib with
</span><br>
<span class="quotelev1">&gt; following configuration options
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --disable-openib-control-hdr-padding --disable-openib-dynamic-sl
</span><br>
<span class="quotelev1">&gt; --disable-openib-connectx-xrc --disable-openib-udcm
</span><br>
<span class="quotelev1">&gt; --disable-openib-rdmacm  --disable-btl-openib-malloc-alignment
</span><br>
<span class="quotelev1">&gt; --disable-io-romio --without-openib --without-verbs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, openib is not enabled (confirmed from ompi_info script) and there
</span><br>
<span class="quotelev1">&gt; is no &quot;openib.so&quot; file in $prefix/lib/openmpi directory as well. Still,
</span><br>
<span class="quotelev1">&gt; above mentioned mpirun commands are getting the same latency and bandwidth
</span><br>
<span class="quotelev1">&gt; as that of InfiniBand.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried mpirun in verbose mode with following command and here is the
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Command:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 30 --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Output:
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt; registering btl components
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register: found
</span><br>
<span class="quotelev1">&gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt; component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: opening
</span><br>
<span class="quotelev1">&gt; btl components
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: found
</span><br>
<span class="quotelev1">&gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: component
</span><br>
<span class="quotelev1">&gt; tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt; registering btl components
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register: found
</span><br>
<span class="quotelev1">&gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
</span><br>
<span class="quotelev1">&gt; component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: opening
</span><br>
<span class="quotelev1">&gt; btl components
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: found
</span><br>
<span class="quotelev1">&gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: component
</span><br>
<span class="quotelev1">&gt; tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 1 on node124
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world.  I am 0 on node123
</span><br>
<span class="quotelev2">&gt; &gt; Size Latency(usec) Bandwidth(Mbps)
</span><br>
<span class="quotelev2">&gt; &gt; 1    4.18    1.83
</span><br>
<span class="quotelev2">&gt; &gt; 2    3.66    4.17
</span><br>
<span class="quotelev2">&gt; &gt; 4    4.08    7.48
</span><br>
<span class="quotelev2">&gt; &gt; 8    3.12    19.57
</span><br>
<span class="quotelev2">&gt; &gt; 16    3.83    31.84
</span><br>
<span class="quotelev2">&gt; &gt; 32    3.40    71.84
</span><br>
<span class="quotelev2">&gt; &gt; 64    4.10    118.97
</span><br>
<span class="quotelev2">&gt; &gt; 128    3.89    251.19
</span><br>
<span class="quotelev2">&gt; &gt; 256    4.22    462.77
</span><br>
<span class="quotelev2">&gt; &gt; 512    2.95    1325.71
</span><br>
<span class="quotelev2">&gt; &gt; 1024    2.63    2969.49
</span><br>
<span class="quotelev2">&gt; &gt; 2048    3.38    4628.29
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: close: component tcp closed
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: close: unloading component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: component tcp closed
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: unloading component
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Moreover, same benchmark applications using MPICH are working fine on
</span><br>
<span class="quotelev1">&gt; Ethernet and achieving expected Latency and Bandwidth.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How can this be fixed?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for help,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Ansar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25297.php">http://www.open-mpi.org/community/lists/users/2014/09/25297.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25307.php">http://www.open-mpi.org/community/lists/users/2014/09/25307.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25319.php">JR Cary: "[OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25317.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<!-- nextthread="start" -->
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
