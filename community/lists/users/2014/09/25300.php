<?
$subject_val = "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 18:44:00 2014" -->
<!-- isoreceived="20140909224400" -->
<!-- sent="Wed, 10 Sep 2014 07:43:58 +0900" -->
<!-- isosent="20140909224358" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand" -->
<!-- id="CAMJJpkWNVF5CDRw2OPQBb_Ap7CJYNAZ+jJVE4Jp7wz79+CnV9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACztQg1P0WAhPR1+x4YY4JKmEwm1BUY1um_+d2GQT=vwZ5wGpA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 18:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25301.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>Previous message:</strong> <a href="25299.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="25299.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is strange. I have a similar environment with one eth and one ipoib.
<br>
If I manually select the interface I want to use with TCP I get the
<br>
expected results.
<br>
<p><p>Here is over IB:
<br>
<p>mpirun -np 2 --mca btl tcp,self -host dancer00,dancer01 --mca
<br>
btl_tcp_if_include ib1 ./NPmpi
<br>
1: dancer01
<br>
0: dancer00
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes   3093 times --&gt;      0.24 Mbps in      31.39 usec
<br>
&nbsp;&nbsp;1:       2 bytes   3185 times --&gt;      0.49 Mbps in      31.30 usec
<br>
&nbsp;&nbsp;2:       3 bytes   3195 times --&gt;      0.73 Mbps in      31.41 usec
<br>
&nbsp;&nbsp;3:       4 bytes   2122 times --&gt;      0.97 Mbps in      31.39 usec
<br>
<p><p>And here the slightly slower eth0:
<br>
<p>mpirun -np 2 --mca btl tcp,self -host dancer00,dancer01 --mca
<br>
btl_tcp_if_include eth0 ./NPmpi
<br>
0: dancer00
<br>
1: dancer01
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes   1335 times --&gt;      0.13 Mbps in      60.55 usec
<br>
&nbsp;&nbsp;1:       2 bytes   1651 times --&gt;      0.28 Mbps in      53.62 usec
<br>
&nbsp;&nbsp;2:       3 bytes   1864 times --&gt;      0.45 Mbps in      51.29 usec
<br>
&nbsp;&nbsp;3:       4 bytes   1299 times --&gt;      0.61 Mbps in      50.36 usec
<br>
<p><p>George.
<br>
<p>On Wed, Sep 10, 2014 at 3:40 AM, Muhammad Ansar Javed &lt;
<br>
muhammad.ansar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks George,
</span><br>
<span class="quotelev1">&gt; I am selecting Ethernet device (em1) in mpirun script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is ifconfig output:
</span><br>
<span class="quotelev1">&gt; em1       Link encap:Ethernet  HWaddr E0:DB:55:FD:38:46
</span><br>
<span class="quotelev1">&gt;           inet addr:10.30.10.121  Bcast:10.30.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::e2db:55ff:fefd:3846/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1537270190 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:136123598 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:309333740659 (288.0 GiB)  TX bytes:143480101212 (133.6
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev1">&gt;           Memory:91820000-91840000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ifconfig uses the ioctl access method to get the full address information,
</span><br>
<span class="quotelev1">&gt; which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev1">&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are
</span><br>
<span class="quotelev1">&gt; displayed correctly.
</span><br>
<span class="quotelev1">&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:InfiniBand  HWaddr
</span><br>
<span class="quotelev1">&gt; 80:00:00:03:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.32.10.121  Bcast:10.32.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::211:7500:70:6ab4/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:33621 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:365 errors:0 dropped:5 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;           RX bytes:1882728 (1.7 MiB)  TX bytes:21920 (21.4 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:66889 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:66889 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:19005445 (18.1 MiB)  TX bytes:19005445 (18.1 MiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 10 Sep 2014 00:06:51 +0900
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect
</span><br>
<span class="quotelev2">&gt;&gt;         instead of InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Look at your ifconfig output and select the Ethernet device (instead of
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; IPoIB one). Traditionally the name lack any fanciness, most distributions
</span><br>
<span class="quotelev2">&gt;&gt; using eth0 as a default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 9, 2014 at 11:24 PM, Muhammad Ansar Javed &lt;
</span><br>
<span class="quotelev2">&gt;&gt; muhammad.ansar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am currently conducting some testing on system with Gigabit and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; InfiniBand interconnects. Both Latency and Bandwidth benchmarks are
</span><br>
<span class="quotelev2">&gt;&gt; doing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; well as expected on InfiniBand interconnects but Ethernet interconnect
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; achieving very high performance from expectations. Ethernet and
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt; &gt; both are achieving equivalent performance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For some reason, it looks like openmpi (v1.8.1) is using the InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt; &gt; interconnect rather than the Gigabit or TCP communication is being
</span><br>
<span class="quotelev2">&gt;&gt; emulated
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to use InifiniBand interconnect.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here are Latency and Bandwidth benchmark results.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Benchmarking PingPong
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # processes = 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # map-by node
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #---------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello, world.  I am 1 on node124
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello, world.  I am 0 on node123
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Size Latency (usec) Bandwidth (Mbps)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1    1.65    4.62
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2    1.67    9.16
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4    1.66    18.43
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 8    1.66    36.74
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 16    1.85    66.00
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 32    1.83    133.28
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 64    1.83    266.36
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 128    1.88    519.10
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 256    1.99    982.29
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 512    2.23    1752.37
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1024    2.58    3026.98
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2048    3.32    4710.76
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I read some of the FAQs and noted that OpenMPI prefers the faster
</span><br>
<span class="quotelev3">&gt;&gt; &gt; available interconnect. In an effort to force it to use the gigabit
</span><br>
<span class="quotelev3">&gt;&gt; &gt; interconnect I ran it as follows
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
</span><br>
<span class="quotelev3">&gt;&gt; &gt; btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp,self,sm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
</span><br>
<span class="quotelev2">&gt;&gt; --mca
</span><br>
<span class="quotelev3">&gt;&gt; &gt; btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./latency.ompi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; None of them resulted in a significantly different benchmark output.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am using OpenMPI by loading module on clustered environment and don't
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have admin access. It is configured for both TCP and OpenIB (confirmed
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi_info). After trying all above mentioned methods without success I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; installed OpenMPI v1.8.2 in my home directory and disable openib with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; following configuration options
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --disable-openib-control-hdr-padding --disable-openib-dynamic-sl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --disable-openib-connectx-xrc --disable-openib-udcm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --disable-openib-rdmacm  --disable-btl-openib-malloc-alignment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --disable-io-romio --without-openib --without-verbs
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now, openib is not enabled (confirmed from ompi_info script) and there
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; no &quot;openib.so&quot; file in $prefix/lib/openmpi directory as well. Still,
</span><br>
<span class="quotelev2">&gt;&gt; above
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mentioned mpirun commands are getting the same latency and bandwidth as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that of InfiniBand.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I tried mpirun in verbose mode with following command and here is the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; output
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Command:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
</span><br>
<span class="quotelev3">&gt;&gt; &gt; btl_base_verbose 30 --mca btl_tcp_if_include em1 ./latency.ompi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Output:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; registering btl components
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register: found
</span><br>
<span class="quotelev3">&gt;&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; component tcp register function successful
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: opening
</span><br>
<span class="quotelev2">&gt;&gt; btl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; components
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: found
</span><br>
<span class="quotelev3">&gt;&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; registering btl components
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register: found
</span><br>
<span class="quotelev3">&gt;&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; component tcp register function successful
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: opening
</span><br>
<span class="quotelev2">&gt;&gt; btl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; components
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: found
</span><br>
<span class="quotelev3">&gt;&gt; &gt; loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello, world.  I am 1 on node124
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello, world.  I am 0 on node123
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Size Latency(usec) Bandwidth(Mbps)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1    4.18    1.83
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2    3.66    4.17
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4    4.08    7.48
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 8    3.12    19.57
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 16    3.83    31.84
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 32    3.40    71.84
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 64    4.10    118.97
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 128    3.89    251.19
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 256    4.22    462.77
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 512    2.95    1325.71
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1024    2.63    2969.49
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2048    3.38    4628.29
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: close: component tcp
</span><br>
<span class="quotelev2">&gt;&gt; closed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: close: unloading component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tcp
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: component tcp
</span><br>
<span class="quotelev2">&gt;&gt; closed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: unloading component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tcp
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Moreover, same benchmark applications using MPICH are working fine on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ethernet and achieving expected Latency and Bandwidth.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How can this be fixed?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for help,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --Ansar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ansar Javed
</span><br>
<span class="quotelev1">&gt; HPC Lab
</span><br>
<span class="quotelev1">&gt; SEECS NUST
</span><br>
<span class="quotelev1">&gt; Contact: +92 334 438 9394
</span><br>
<span class="quotelev1">&gt; Skype: ansar.javed.859
</span><br>
<span class="quotelev1">&gt; Email: muhammad.ansar_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25299.php">http://www.open-mpi.org/community/lists/users/2014/09/25299.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25301.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>Previous message:</strong> <a href="25299.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="25299.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Reply:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
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
