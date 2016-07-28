<?
$subject_val = "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 06:17:17 2014" -->
<!-- isoreceived="20140327101717" -->
<!-- sent="Thu, 27 Mar 2014 10:16:59 +0000" -->
<!-- isosent="20140327101659" -->
<!-- name="Wang,Yanfei(SYS)" -->
<!-- email="wangyanfei01_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;#231;&amp;#173;&amp;#148;&amp;#229;&amp;#164;&amp;#141;:  doubt on latency result with OpenMPI library" -->
<!-- id="90EBD3F3C2BD0E44804EEB54DD5003A4552333E4_at_TC-MAIL-MB02.internal.baidu.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57odhFxz5RHnirPFBYww8qhYjXq+K7eG8zFJQdp8DjeDkGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Wang,Yanfei(SYS) (<em>wangyanfei01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 06:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14403.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14403.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14403.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI&#239;&#188;&#140;
<br>

<br>
&#226;&#128;&#156;--map-by node&#226;&#128;&#157; does remove this trouble.
<br>
---
<br>
Configuration:
<br>
Even if using mpi --hostfile to control traffic to go 10G TCP/IP network, and the latency still is 5us in both situation!
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.71.3 ib03
<br>
192.168.71.4 ib04
<br>
[root_at_bb-nsi-ib04 pt2pt]# ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 20:0B:C7:26:3F:C3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.71.4  Bcast:192.168.71.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::220b:c7ff:fe26:3fc3/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:834635 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:339853 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:681908607 (650.3 MiB)  TX bytes:103031295 (98.2 MiB)
<br>
10G eth0 is not rdma-enabled nic~
<br>

<br>

<br>
a.       using openib
<br>
[root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 --map-by node --mca btl openib,self,sm --mca btl_openib_cpc_include rdmacm osu_latency
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       5.20
<br>
1                       5.36
<br>
2                       5.31
<br>
4                       5.34
<br>
8                       5.46
<br>
16                      5.35
<br>
32                      5.44
<br>
64                      5.48
<br>
128                     6.74
<br>
256                     6.87
<br>
512                     7.05
<br>
1024                    7.52
<br>
2048                    8.38
<br>
4096                   10.36
<br>
8192                   14.18
<br>
16384                  23.69
<br>
32768                  31.91
<br>
65536                  38.89
<br>
131072                 47.76
<br>
262144                 80.42
<br>
524288                137.52
<br>
1048576               251.81
<br>
2097152               485.23
<br>
4194304               948.08
<br>

<br>
b.       have no explicit rdma setting.
<br>
[root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 --map-by node osu_latency
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       5.23
<br>
1                       5.28
<br>
2                       5.21
<br>
4                       5.33
<br>
8                       5.33
<br>
16                      5.36
<br>
32                      5.33
<br>
64                      5.41
<br>
128                     6.74
<br>
256                     6.98
<br>
512                     7.11
<br>
1024                    7.47
<br>
2048                    8.46
<br>
4096                   10.38
<br>
8192                   14.30
<br>
16384                  21.20
<br>
32768                  31.21
<br>
65536                  39.85
<br>
131072                 47.70
<br>
262144                 80.24
<br>
524288                137.59
<br>
1048576               251.62
<br>
2097152               485.14
<br>
4194304               945.80
<br>
[root_at_bb-nsi-ib04 pt2pt]#
<br>

<br>
I found that the bandwidth got from osu_bw benchmark is equal to 40G RDMA HCA, so I doubt if the traffic always goes between 40G RDMA link, and the control for TCP/IP link does work.
<br>

<br>
I will consult the FAQ for details, if further suggestion, welcome..
<br>

<br>
Thanks
<br>
--Yanfei
<br>
&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;: devel [mailto:devel-bounces_at_[hidden]] &#228;&#187;&#163;&#232;&#161;&#168; Ralph Castain
<br>
&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;: 2014&#229;&#185;&#180;3&#230;&#156;&#136;27&#230;&#151;&#165; 18:05
<br>
&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;: Open MPI Developers
<br>
&#228;&#184;&#187;&#233;&#162;&#152;: Re: [OMPI devel] doubt on latency result with OpenMPI library
<br>

<br>
Try adding &quot;--map-by node&quot; to your command line to ensure the procs really are running on separate nodes.
<br>

<br>
On Thu, Mar 27, 2014 at 1:40 AM, Wang,Yanfei(SYS) &lt;wangyanfei01_at_[hidden]&lt;mailto:wangyanfei01_at_[hidden]&gt;&gt; wrote:
<br>
Hi&#239;&#188;&#140;
<br>

<br>
HW Test Topology&#239;&#188;&#154;
<br>
Ip&#239;&#188;&#154;192.168.72.4/24&lt;<a href="http://192.168.72.4/24">http://192.168.72.4/24</a>&gt; &#226;&#128;&#147;192.168.72.4/24&lt;<a href="http://192.168.72.4/24">http://192.168.72.4/24</a>&gt;, enable vlan and RoCE
<br>
IB03 server 40G port-- - 40G Ethernet switch ----IB04 server 40G port&#239;&#188;&#154; configure it as RoCE link
<br>
IP: 192.168.71.3/24&lt;<a href="http://192.168.71.3/24">http://192.168.71.3/24</a>&gt; ---192.168.71.4/24&lt;<a href="http://192.168.71.4/24">http://192.168.71.4/24</a>&gt;
<br>
IB03 server 10G port &#226;&#128;&#147; 10G Ethernet switch &#226;&#128;&#147; IB04 server 10G port&#239;&#188;&#154; configure it as normal TCP/IP Ethernet link&#239;&#188;&#154;&#239;&#188;&#136;server management interface&#239;&#188;&#137;
<br>

<br>
Mpi configuration&#239;&#188;&#154;
<br>
MPI Hosts file&#239;&#188;&#154;
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat hosts
<br>
ib03 slots=1
<br>
ib04 slots=1
<br>
DNS hosts
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.71.3 ib03
<br>
192.168.71.4 ib04
<br>
[root_at_bb-nsi-ib04 pt2pt]#
<br>
This configuration will create 2 nodes for MPI latency evaluation
<br>

<br>
Benchmark:
<br>
osu-micro-benchmarks-4.3
<br>

<br>
result:
<br>

<br>
a.       Enable traffic go between 10G TCP/IP port using following /etc/hosts file
<br>

<br>
root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.71.3 ib03
<br>
192.168.71.4 ib04
<br>
The average latency is 4.5us of osu_latency, see log following:
<br>
[root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 osu_latency
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       4.56
<br>
1                       4.90
<br>
2                       4.90
<br>
4                       4.60
<br>
8                       4.71
<br>
16                      4.72
<br>
32                      5.40
<br>
64                      4.77
<br>
128                     6.74
<br>
256                     7.01
<br>
512                     7.14
<br>
1024                    7.63
<br>
2048                    8.22
<br>
4096                   10.39
<br>
8192                   14.26
<br>
16384                  20.80
<br>
32768                  31.97
<br>
65536                  37.75
<br>
131072                 47.28
<br>
262144                 80.40
<br>
524288                137.65
<br>
1048576               250.17
<br>
2097152               484.71
<br>
4194304               946.01
<br>

<br>

<br>
b.       Enable traffic go between RoCE link using /etc/hosts as following and mpirun &#226;&#128;&#147;mca btl openib,self,sm &#226;&#128;&#166;
<br>
[root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
<br>
192.168.72.3 ib03
<br>
192.168.72.4 ib04
<br>
Result:
<br>
[root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 --mca btl openib,self,sm --mca btl_openib_cpc_include rdmacm osu_latency
<br>
# OSU MPI Latency Test v4.3
<br>
# Size          Latency (us)
<br>
0                       4.83
<br>
1                       5.17
<br>
2                       5.12
<br>
4                       5.25
<br>
8                       5.38
<br>
16                      5.40
<br>
32                      5.19
<br>
64                      5.04
<br>
128                     6.74
<br>
256                     7.04
<br>
512                     7.34
<br>
1024                    7.91
<br>
2048                    8.17
<br>
4096                   10.39
<br>
8192                   14.22
<br>
16384                  22.05
<br>
32768                  31.68
<br>
65536                  37.57
<br>
131072                 48.25
<br>
262144                 79.98
<br>
524288                137.66
<br>
1048576               251.38
<br>
2097152               485.66
<br>
4194304               947.81
<br>
[root_at_bb-nsi-ib04 pt2pt]#
<br>

<br>
Question:
<br>

<br>
1.       Why do they have similar latency, 5us, which is too small to believe it! In our test environment, it will take more than 50 us to deal with tcp sync and return sync_ack, and also x86 server will take more thans 20us at average to do ip forwarding(test from professional HW tester), so does the latency is reasonable?
<br>

<br>
2.       Normally, the switch will introduces more than 1.5us switch time! Using accelio, a mellanox released opensource rdma library, it will take at least 4 us rtt latency to do simpe ping-pong test. So 5 us MPI latency (TCP/IP and RoCE) above is rather unbelievable&#226;&#128;&#166;
<br>

<br>
3.       The fact that the tcp/ip transport and roce RDMA transport acquire same latency  is so puzzling..
<br>

<br>

<br>
Before deeply understanding what happened inside the MPI benchmark, can show us some suggestion? Does the mpirun command works correctly here?
<br>
It must has some mistakes about this test, pls correct me,.
<br>

<br>
Eg: tcp syn&amp;sync ack latency:
<br>
[cid:image001.png_at_01CF49E8.C8D81B40]
<br>

<br>
Thanks
<br>
-Yanfei
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14400.php">http://www.open-mpi.org/community/lists/devel/2014/03/14400.php</a>
<br>

<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14402/image001.png" alt="image001.png
">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14403.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14401.php">Ralph Castain: "Re: [OMPI devel] doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14403.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14403.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
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
