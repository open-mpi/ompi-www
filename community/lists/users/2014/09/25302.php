<?
$subject_val = "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 00:27:38 2014" -->
<!-- isoreceived="20140910042738" -->
<!-- sent="Wed, 10 Sep 2014 09:27:37 +0500" -->
<!-- isosent="20140910042737" -->
<!-- name="Muhammad Ansar Javed" -->
<!-- email="muhammad.ansar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand" -->
<!-- id="CACztQg1Gc4d-ceZW8z5bZ36PFO0FzpjWz1yZv8pYTTvmN72Wig_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWNVF5CDRw2OPQBb_Ap7CJYNAZ+jJVE4Jp7wz79+CnV9Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-09-10 00:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25303.php">Red Red: "[OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Previous message:</strong> <a href="25301.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>In reply to:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it is strange. I did similar kind of benchmarks few months back on
<br>
another environment and I was able to do achieve expected results on
<br>
Ethernet and InfiniBand interconnects. However I am unable to force OpenMPI
<br>
to use Ethernet in this particular environment even though openib is not
<br>
configured.
<br>
<p>I have tried almost all the variants of mpirun scripts that can force
<br>
OpenMPI to use Ethernet instead of InfiniBand. Moreover verbose mode shows
<br>
that TCP btl module is being used but latency is way better than expected
<br>
values for Ethernet.
<br>
<p><pre>
--
Ansar
On Wed, Sep 10, 2014 at 3:43 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
&gt; This is strange. I have a similar environment with one eth and one ipoib.
&gt; If I manually select the interface I want to use with TCP I get the
&gt; expected results.
&gt;
&gt;
&gt; Here is over IB:
&gt;
&gt; mpirun -np 2 --mca btl tcp,self -host dancer00,dancer01 --mca
&gt; btl_tcp_if_include ib1 ./NPmpi
&gt; 1: dancer01
&gt; 0: dancer00
&gt; Now starting the main loop
&gt;   0:       1 bytes   3093 times --&gt;      0.24 Mbps in      31.39 usec
&gt;   1:       2 bytes   3185 times --&gt;      0.49 Mbps in      31.30 usec
&gt;   2:       3 bytes   3195 times --&gt;      0.73 Mbps in      31.41 usec
&gt;   3:       4 bytes   2122 times --&gt;      0.97 Mbps in      31.39 usec
&gt;
&gt;
&gt; And here the slightly slower eth0:
&gt;
&gt; mpirun -np 2 --mca btl tcp,self -host dancer00,dancer01 --mca
&gt; btl_tcp_if_include eth0 ./NPmpi
&gt; 0: dancer00
&gt; 1: dancer01
&gt; Now starting the main loop
&gt;   0:       1 bytes   1335 times --&gt;      0.13 Mbps in      60.55 usec
&gt;   1:       2 bytes   1651 times --&gt;      0.28 Mbps in      53.62 usec
&gt;   2:       3 bytes   1864 times --&gt;      0.45 Mbps in      51.29 usec
&gt;   3:       4 bytes   1299 times --&gt;      0.61 Mbps in      50.36 usec
&gt;
&gt;
&gt; George.
&gt;
&gt; On Wed, Sep 10, 2014 at 3:40 AM, Muhammad Ansar Javed &lt;
&gt; muhammad.ansar_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; Thanks George,
&gt;&gt; I am selecting Ethernet device (em1) in mpirun script.
&gt;&gt;
&gt;&gt; Here is ifconfig output:
&gt;&gt; em1       Link encap:Ethernet  HWaddr E0:DB:55:FD:38:46
&gt;&gt;           inet addr:10.30.10.121  Bcast:10.30.255.255  Mask:255.255.0.0
&gt;&gt;           inet6 addr: fe80::e2db:55ff:fefd:3846/64 Scope:Link
&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
&gt;&gt;           RX packets:1537270190 errors:0 dropped:0 overruns:0 frame:0
&gt;&gt;           TX packets:136123598 errors:0 dropped:0 overruns:0 carrier:0
&gt;&gt;           collisions:0 txqueuelen:1000
&gt;&gt;           RX bytes:309333740659 (288.0 GiB)  TX bytes:143480101212 (133.6
&gt;&gt; GiB)
&gt;&gt;           Memory:91820000-91840000
&gt;&gt;
&gt;&gt; Ifconfig uses the ioctl access method to get the full address
&gt;&gt; information, which limits hardware addresses to 8 bytes.
&gt;&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are
&gt;&gt; displayed correctly.
&gt;&gt; Ifconfig is obsolete! For replacement check ip.
&gt;&gt; ib0       Link encap:InfiniBand  HWaddr
&gt;&gt; 80:00:00:03:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
&gt;&gt;           inet addr:10.32.10.121  Bcast:10.32.255.255  Mask:255.255.0.0
&gt;&gt;           inet6 addr: fe80::211:7500:70:6ab4/64 Scope:Link
&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
&gt;&gt;           RX packets:33621 errors:0 dropped:0 overruns:0 frame:0
&gt;&gt;           TX packets:365 errors:0 dropped:5 overruns:0 carrier:0
&gt;&gt;           collisions:0 txqueuelen:256
&gt;&gt;           RX bytes:1882728 (1.7 MiB)  TX bytes:21920 (21.4 KiB)
&gt;&gt;
&gt;&gt; lo        Link encap:Local Loopback
&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
&gt;&gt;           inet6 addr: ::1/128 Scope:Host
&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
&gt;&gt;           RX packets:66889 errors:0 dropped:0 overruns:0 frame:0
&gt;&gt;           TX packets:66889 errors:0 dropped:0 overruns:0 carrier:0
&gt;&gt;           collisions:0 txqueuelen:0
&gt;&gt;           RX bytes:19005445 (18.1 MiB)  TX bytes:19005445 (18.1 MiB)
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;&gt; Date: Wed, 10 Sep 2014 00:06:51 +0900
&gt;&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect
&gt;&gt;&gt;         instead of InfiniBand
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Look at your ifconfig output and select the Ethernet device (instead of
&gt;&gt;&gt; the
&gt;&gt;&gt; IPoIB one). Traditionally the name lack any fanciness, most distributions
&gt;&gt;&gt; using eth0 as a default.
&gt;&gt;&gt;
&gt;&gt;&gt;   George.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Tue, Sep 9, 2014 at 11:24 PM, Muhammad Ansar Javed &lt;
&gt;&gt;&gt; muhammad.ansar_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; &gt; Hi,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I am currently conducting some testing on system with Gigabit and
&gt;&gt;&gt; &gt; InfiniBand interconnects. Both Latency and Bandwidth benchmarks are
&gt;&gt;&gt; doing
&gt;&gt;&gt; &gt; well as expected on InfiniBand interconnects but Ethernet interconnect
&gt;&gt;&gt; is
&gt;&gt;&gt; &gt; achieving very high performance from expectations. Ethernet and
&gt;&gt;&gt; InfiniBand
&gt;&gt;&gt; &gt; both are achieving equivalent performance.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; For some reason, it looks like openmpi (v1.8.1) is using the InfiniBand
&gt;&gt;&gt; &gt; interconnect rather than the Gigabit or TCP communication is being
&gt;&gt;&gt; emulated
&gt;&gt;&gt; &gt; to use InifiniBand interconnect.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Here are Latency and Bandwidth benchmark results.
&gt;&gt;&gt; &gt; #---------------------------------------------------
&gt;&gt;&gt; &gt; # Benchmarking PingPong
&gt;&gt;&gt; &gt; # processes = 2
&gt;&gt;&gt; &gt; # map-by node
&gt;&gt;&gt; &gt; #---------------------------------------------------
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Hello, world.  I am 1 on node124
&gt;&gt;&gt; &gt; Hello, world.  I am 0 on node123
&gt;&gt;&gt; &gt; Size Latency (usec) Bandwidth (Mbps)
&gt;&gt;&gt; &gt; 1    1.65    4.62
&gt;&gt;&gt; &gt; 2    1.67    9.16
&gt;&gt;&gt; &gt; 4    1.66    18.43
&gt;&gt;&gt; &gt; 8    1.66    36.74
&gt;&gt;&gt; &gt; 16    1.85    66.00
&gt;&gt;&gt; &gt; 32    1.83    133.28
&gt;&gt;&gt; &gt; 64    1.83    266.36
&gt;&gt;&gt; &gt; 128    1.88    519.10
&gt;&gt;&gt; &gt; 256    1.99    982.29
&gt;&gt;&gt; &gt; 512    2.23    1752.37
&gt;&gt;&gt; &gt; 1024    2.58    3026.98
&gt;&gt;&gt; &gt; 2048    3.32    4710.76
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I read some of the FAQs and noted that OpenMPI prefers the faster
&gt;&gt;&gt; &gt; available interconnect. In an effort to force it to use the gigabit
&gt;&gt;&gt; &gt; interconnect I ran it as follows
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; 1. mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
&gt;&gt;&gt; &gt; btl_tcp_if_include em1 ./latency.ompi
&gt;&gt;&gt; &gt; 2. mpirun -np 2 -machinefile machines -map-by node --mca btl
&gt;&gt;&gt; tcp,self,sm
&gt;&gt;&gt; &gt; --mca btl_tcp_if_include em1 ./latency.ompi
&gt;&gt;&gt; &gt; 3. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
&gt;&gt;&gt; --mca
&gt;&gt;&gt; &gt; btl_tcp_if_include em1 ./latency.ompi
&gt;&gt;&gt; &gt; 4. mpirun -np 2 -machinefile machines -map-by node --mca btl ^openib
&gt;&gt;&gt; &gt; ./latency.ompi
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; None of them resulted in a significantly different benchmark output.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I am using OpenMPI by loading module on clustered environment and don't
&gt;&gt;&gt; &gt; have admin access. It is configured for both TCP and OpenIB (confirmed
&gt;&gt;&gt; from
&gt;&gt;&gt; &gt; ompi_info). After trying all above mentioned methods without success I
&gt;&gt;&gt; &gt; installed OpenMPI v1.8.2 in my home directory and disable openib with
&gt;&gt;&gt; &gt; following configuration options
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; --disable-openib-control-hdr-padding --disable-openib-dynamic-sl
&gt;&gt;&gt; &gt; --disable-openib-connectx-xrc --disable-openib-udcm
&gt;&gt;&gt; &gt; --disable-openib-rdmacm  --disable-btl-openib-malloc-alignment
&gt;&gt;&gt; &gt; --disable-io-romio --without-openib --without-verbs
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Now, openib is not enabled (confirmed from ompi_info script) and there
&gt;&gt;&gt; is
&gt;&gt;&gt; &gt; no &quot;openib.so&quot; file in $prefix/lib/openmpi directory as well. Still,
&gt;&gt;&gt; above
&gt;&gt;&gt; &gt; mentioned mpirun commands are getting the same latency and bandwidth as
&gt;&gt;&gt; &gt; that of InfiniBand.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I tried mpirun in verbose mode with following command and here is the
&gt;&gt;&gt; &gt; output
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Command:
&gt;&gt;&gt; &gt; mpirun -np 2 -machinefile machines -map-by node --mca btl tcp --mca
&gt;&gt;&gt; &gt; btl_base_verbose 30 --mca btl_tcp_if_include em1 ./latency.ompi
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Output:
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
&gt;&gt;&gt; &gt; registering btl components
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
&gt;&gt;&gt; found
&gt;&gt;&gt; &gt; loaded component tcp
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_register:
&gt;&gt;&gt; &gt; component tcp register function successful
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: opening
&gt;&gt;&gt; btl
&gt;&gt;&gt; &gt; components
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open: found
&gt;&gt;&gt; &gt; loaded component tcp
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: components_open:
&gt;&gt;&gt; component
&gt;&gt;&gt; &gt; tcp open function successful
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
&gt;&gt;&gt; &gt; registering btl components
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
&gt;&gt;&gt; found
&gt;&gt;&gt; &gt; loaded component tcp
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_register:
&gt;&gt;&gt; &gt; component tcp register function successful
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: opening
&gt;&gt;&gt; btl
&gt;&gt;&gt; &gt; components
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open: found
&gt;&gt;&gt; &gt; loaded component tcp
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: components_open:
&gt;&gt;&gt; component
&gt;&gt;&gt; &gt; tcp open function successful
&gt;&gt;&gt; &gt; Hello, world.  I am 1 on node124
&gt;&gt;&gt; &gt; Hello, world.  I am 0 on node123
&gt;&gt;&gt; &gt; Size Latency(usec) Bandwidth(Mbps)
&gt;&gt;&gt; &gt; 1    4.18    1.83
&gt;&gt;&gt; &gt; 2    3.66    4.17
&gt;&gt;&gt; &gt; 4    4.08    7.48
&gt;&gt;&gt; &gt; 8    3.12    19.57
&gt;&gt;&gt; &gt; 16    3.83    31.84
&gt;&gt;&gt; &gt; 32    3.40    71.84
&gt;&gt;&gt; &gt; 64    4.10    118.97
&gt;&gt;&gt; &gt; 128    3.89    251.19
&gt;&gt;&gt; &gt; 256    4.22    462.77
&gt;&gt;&gt; &gt; 512    2.95    1325.71
&gt;&gt;&gt; &gt; 1024    2.63    2969.49
&gt;&gt;&gt; &gt; 2048    3.38    4628.29
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: close: component tcp
&gt;&gt;&gt; closed
&gt;&gt;&gt; &gt; [node123.prv.sciama.cluster:88310] mca: base: close: unloading
&gt;&gt;&gt; component
&gt;&gt;&gt; &gt; tcp
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: component tcp
&gt;&gt;&gt; closed
&gt;&gt;&gt; &gt; [node124.prv.sciama.cluster:90465] mca: base: close: unloading
&gt;&gt;&gt; component
&gt;&gt;&gt; &gt; tcp
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Moreover, same benchmark applications using MPICH are working fine on
&gt;&gt;&gt; &gt; Ethernet and achieving expected Latency and Bandwidth.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; How can this be fixed?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Thanks for help,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; --Ansar
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Regards
&gt;&gt;
&gt;&gt; Ansar Javed
&gt;&gt; HPC Lab
&gt;&gt; SEECS NUST
&gt;&gt; Contact: +92 334 438 9394
&gt;&gt; Skype: ansar.javed.859
&gt;&gt; Email: muhammad.ansar_at_[hidden]
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25299.php">http://www.open-mpi.org/community/lists/users/2014/09/25299.php</a>
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25300.php">http://www.open-mpi.org/community/lists/users/2014/09/25300.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25303.php">Red Red: "[OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Previous message:</strong> <a href="25301.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>In reply to:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
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
