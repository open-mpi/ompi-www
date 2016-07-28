<?
$subject_val = "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 14:40:11 2014" -->
<!-- isoreceived="20140909184011" -->
<!-- sent="Tue, 9 Sep 2014 11:40:10 -0700" -->
<!-- isosent="20140909184010" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand" -->
<!-- id="CACztQg1P0WAhPR1+x4YY4JKmEwm1BUY1um_+d2GQT=vwZ5wGpA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand" -->
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
<strong>Date:</strong> 2014-09-09 14:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Maybe in reply to:</strong> <a href="25297.php">Muhammad Ansar Javed: "[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George,
<br>
I am selecting Ethernet device (em1) in mpirun script.
<br>
<p>Here is ifconfig output:
<br>
em1       Link encap:Ethernet  HWaddr E0:DB:55:FD:38:46
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.30.10.121  Bcast:10.30.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::e2db:55ff:fefd:3846/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1537270190 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:136123598 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:309333740659 (288.0 GiB)  TX bytes:143480101212 (133.6
<br>
GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:91820000-91840000
<br>
<p>Ifconfig uses the ioctl access method to get the full address information,
<br>
which limits hardware addresses to 8 bytes.
<br>
Because Infiniband address has 20 bytes, only the first 8 bytes are
<br>
displayed correctly.
<br>
Ifconfig is obsolete! For replacement check ip.
<br>
ib0       Link encap:InfiniBand  HWaddr
<br>
80:00:00:03:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.32.10.121  Bcast:10.32.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::211:7500:70:6ab4/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:33621 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:365 errors:0 dropped:5 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:1882728 (1.7 MiB)  TX bytes:21920 (21.4 KiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:66889 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:66889 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:19005445 (18.1 MiB)  TX bytes:19005445 (18.1 MiB)
<br>
<p><p><p><p><p><p><span class="quotelev1">&gt; Date: Wed, 10 Sep 2014 00:06:51 +0900
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect
</span><br>
<span class="quotelev1">&gt;         instead of InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look at your ifconfig output and select the Ethernet device (instead of the
</span><br>
<span class="quotelev1">&gt; IPoIB one). Traditionally the name lack any fanciness, most distributions
</span><br>
<span class="quotelev1">&gt; using eth0 as a default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 9, 2014 at 11:24 PM, Muhammad Ansar Javed &lt;
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
<span class="quotelev2">&gt; &gt; InfiniBand interconnects. Both Latency and Bandwidth benchmarks are doing
</span><br>
<span class="quotelev2">&gt; &gt; well as expected on InfiniBand interconnects but Ethernet interconnect is
</span><br>
<span class="quotelev2">&gt; &gt; achieving very high performance from expectations. Ethernet and
</span><br>
<span class="quotelev1">&gt; InfiniBand
</span><br>
<span class="quotelev2">&gt; &gt; both are achieving equivalent performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For some reason, it looks like openmpi (v1.8.1) is using the InfiniBand
</span><br>
<span class="quotelev2">&gt; &gt; interconnect rather than the Gigabit or TCP communication is being
</span><br>
<span class="quotelev1">&gt; emulated
</span><br>
<span class="quotelev2">&gt; &gt; to use InifiniBand interconnect.
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
<span class="quotelev2">&gt; &gt; available interconnect. In an effort to force it to use the gigabit
</span><br>
<span class="quotelev2">&gt; &gt; interconnect I ran it as follows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt; 2. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp,self,sm
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt; 3. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; --mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt; 4. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
</span><br>
<span class="quotelev2">&gt; &gt; ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; None of them resulted in a significantly different benchmark output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI by loading module on clustered environment and don't
</span><br>
<span class="quotelev2">&gt; &gt; have admin access. It is configured for both TCP and OpenIB (confirmed
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info). After trying all above mentioned methods without success I
</span><br>
<span class="quotelev2">&gt; &gt; installed OpenMPI v1.8.2 in my home directory and disable openib with
</span><br>
<span class="quotelev2">&gt; &gt; following configuration options
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --disable-openib-control-hdr-padding --disable-openib-dynamic-sl
</span><br>
<span class="quotelev2">&gt; &gt; --disable-openib-connectx-xrc --disable-openib-udcm
</span><br>
<span class="quotelev2">&gt; &gt; --disable-openib-rdmacm  --disable-btl-openib-malloc-alignment
</span><br>
<span class="quotelev2">&gt; &gt; --disable-io-romio --without-openib --without-verbs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, openib is not enabled (confirmed from ompi_info script) and there is
</span><br>
<span class="quotelev2">&gt; &gt; no &quot;openib.so&quot; file in $prefix/lib/openmpi directory as well. Still,
</span><br>
<span class="quotelev1">&gt; above
</span><br>
<span class="quotelev2">&gt; &gt; mentioned mpirun commands are getting the same latency and bandwidth as
</span><br>
<span class="quotelev2">&gt; &gt; that of InfiniBand.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried mpirun in verbose mode with following command and here is the
</span><br>
<span class="quotelev2">&gt; &gt; output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Command:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_base_verbose 30 --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Output:
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
</span><br>
<span class="quotelev2">&gt; &gt; registering btl components
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register: found
</span><br>
<span class="quotelev2">&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
</span><br>
<span class="quotelev2">&gt; &gt; component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: opening
</span><br>
<span class="quotelev1">&gt; btl
</span><br>
<span class="quotelev2">&gt; &gt; components
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: found
</span><br>
<span class="quotelev2">&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: component
</span><br>
<span class="quotelev2">&gt; &gt; tcp open function successful
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
</span><br>
<span class="quotelev2">&gt; &gt; registering btl components
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register: found
</span><br>
<span class="quotelev2">&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
</span><br>
<span class="quotelev2">&gt; &gt; component tcp register function successful
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: opening
</span><br>
<span class="quotelev1">&gt; btl
</span><br>
<span class="quotelev2">&gt; &gt; components
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: found
</span><br>
<span class="quotelev2">&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: component
</span><br>
<span class="quotelev2">&gt; &gt; tcp open function successful
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
<span class="quotelev2">&gt; &gt; tcp
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: component tcp closed
</span><br>
<span class="quotelev2">&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: unloading component
</span><br>
<span class="quotelev2">&gt; &gt; tcp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Moreover, same benchmark applications using MPICH are working fine on
</span><br>
<span class="quotelev2">&gt; &gt; Ethernet and achieving expected Latency and Bandwidth.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p><pre>
-- 
Regards
Ansar Javed
HPC Lab
SEECS NUST
Contact: +92 334 438 9394
Skype: ansar.javed.859
Email: muhammad.ansar_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25298.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Maybe in reply to:</strong> <a href="25297.php">Muhammad Ansar Javed: "[OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
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
